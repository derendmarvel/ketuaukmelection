<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\NimEmailImport;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUKM(){
        $user = Auth::user();
        $ukms = $user->ukms()->wherePivot('has_voted', false)->get();;

        return view('ukmList', [
            'ukms' => $ukms,
        ]);
    }

    /**
     * Function: googleLogin
     * This function will redirect to Google
     */

    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Function: googleAuthentication
     * This function will authenticate the user through the Google Account
     */

    public function googleAuthentication() {
        try {
            $googleUser = Socialite::driver('google')->user();

            if($googleUser->role == 'sa@ciputra.ac.id'){
                $user = User::where('email', 'sa@ciputra.ac.id')->first();
                Auth::login($user);
                return redirect()->route('stats');
            } else {
                if (!str_ends_with($googleUser->email, '@student.ciputra.ac.id')) {
                    return redirect()->route('signup')->withErrors(['email' => 'Please use an email ending with @student.ciputra.ac.id']);
                } else {
                    $user = User::where('email', $googleUser->email)->first();
                    if ($user) {
                        Auth::login($user);
                        return redirect()->route('ukmList');
                    } else {
                        $import = new NimEmailImport();
                        $filePath = public_path('images/Student List 2025_04_24 1810.xlsx');
                        $data = Excel::toArray($import, $filePath)[0];

                        foreach ($data as $row){
                            if($row['official_email'] == $googleUser->email){
                                $userData = User::create([
                                    'name' => $googleUser->name,
                                    'email' => $googleUser->email,
                                    'nim' => $row['nis'],
                                    'password' => Hash::make('Password@1234'),
                                    'google_id' => $googleUser->id,
                                    'role' => 2,
                                ]);
                            }
                        }

                        $import2 = new NimEmailImport();
                        $folderPaths = [
                            public_path('images/UKM Even'),
                            public_path('images/UKM Odd')
                        ];

                        $files = [];

                        foreach ($folderPaths as $folderPath) {
                            $files = array_merge($files, File::allFiles($folderPath));
                        }

                        $fileMappings = [
                            'Abstract' => 1,
                            'Artupic' => 2,
                            'Balawarta' => 3,
                            'Basket' => 4,
                            'Dance' => 5,
                            'Choir' => 6,
                            'E-sport' => 7,
                            'Futsal' => 8,
                            'Hindu Dharma' => 9,
                            'Kanvas' => 10,
                            'Katolik' => 11,
                            'Mahatra' => 12,
                            'Moslem' => 13,
                            'Kristen' => 14,
                            'Resonance' => 15,
                            'Tabletop' => 16,
                            'Taekwondo' => 17,
                            'Tari Tradisional' => 18,
                            'Task Force Sakura' => 19,
                            'Teater' => 20,
                            'Buddhist' => 21,
                            'Debate' => 22,
                        ];

                        foreach ($files as $file) {
                            $filePath = $file->getPathname();
                        
                            foreach ($fileMappings as $keyword => $ukmId) {
                                if (str_contains($filePath, $keyword)) {
                                    $data = Excel::toArray($import2, $filePath)[0];
                        
                                    foreach ($data as $row) {
                                        if (($row['nim'] ?? null) == $userData->nim) {
                                            if (!DB::table('ukm_user')
                                                    ->where('ukm_id', $ukmId)
                                                    ->where('user_id', $userData->id)
                                                    ->exists()) {
                                                DB::table('ukm_user')->insert([
                                                    'ukm_id' => $ukmId,
                                                    'user_id' => $userData->id,
                                                ]);
                                            }
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                    
                        if ($userData) {
                            Auth::login($userData);
                            return redirect()->route('ukmList');
                        }
                    }
                }
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
