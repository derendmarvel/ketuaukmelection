<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\UKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Jobs\ProcessVote;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main', [
           'candidate_1' => Candidate::find(1),
           'candidate_2' => Candidate::find(2)
        ]);
    }

    public function showCandidates($id)
    {
        $candidates = Candidate::where('ukm_id', $id)->get();
        $ukm = UKM::where('id', $id)->first();
        $ukm = $ukm->name;

        return view('main', [
           'candidates' => $candidates,
           'ukm' => $ukm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $candidate = Candidate::find($id);   

        return view('details', [
            'candidate' => $candidate
         ]);
    }

    public function stats(){
        $candidates = Candidate::with('ukm')
            ->get()
            ->groupBy('ukm_id')
            ->map(function ($group) {
                return $group->sortByDesc('number_of_votes')->values(); // Correct: Collection sort
            });

        return view('stats', [
            'candidates' => $candidates
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        // Dispatch the vote job asynchronously
        ProcessVote::dispatch($id, $user->id);

        // Return view immediately — no wait for database
        return view('/finish');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
