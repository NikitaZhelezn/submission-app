<?php

namespace App\Events\Submissions;

use App\Models\Submission;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * class SubmissionCreated
 *
 * @package App\Events\Submissions;
 */
class SubmissionCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Submission $submission;

    /**
     * Create a new event instance.
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }
}
