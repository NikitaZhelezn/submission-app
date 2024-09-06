<?php

namespace App\Listeners;

use App\Events\Submissions\SubmissionCreated;
use Illuminate\Support\Facades\Log;

/**
 * class SubmissionListener
 *
 * @package App\Listeners;
 */
class SubmissionListener
{
    /**
     * Handle the event.
     */
    public function handle(SubmissionCreated $event): void
    {
        Log::info('Submission Created:', [
            'name' => $event->submission->name,
            'email' => $event->submission->email,
        ]);
    }
}
