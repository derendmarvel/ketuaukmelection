<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;

class ProcessVote implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $candidateId;
    protected $userId;

    public function __construct($candidateId, $userId)
    {
        $this->candidateId = $candidateId;
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $candidate = Candidate::find($this->candidateId);

        if ($candidate) {
            // Increment vote
            $candidate->increment('number_of_votes');

            // Mark user as voted
            DB::table('ukm_user')
                ->where('user_id', $this->userId)
                ->where('ukm_id', $candidate->ukm_id)
                ->update([
                    'has_voted' => true,
                ]);
        }
    }
}
