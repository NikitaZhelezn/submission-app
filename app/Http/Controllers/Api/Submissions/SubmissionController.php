<?php

namespace App\Http\Controllers\Api\Submissions;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionStoreRequest;
use App\Jobs\Submissions\StoreSubmissionDataJob;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

/**
 * class SubmissionController
 *
 * @public store(SubmissionStoreRequest $request): JsonResponse;
 */
class SubmissionController extends Controller
{
    /**
     * @param SubmissionStoreRequest $request
     * @return JsonResponse
     */
    public function store(SubmissionStoreRequest $request): JsonResponse
    {
        try {
            StoreSubmissionDataJob::dispatchSync($request->validated());

            return response()->json([
                'message' => 'Success Submission',
                'status' => 'Success',
            ]);
        } catch (\Exception $e) {
            Log::error('Submission Error:', [
                'message' => $e->getMessage()
            ]);

            return response()->json([
                'error' => 'Filed to process Submission',
                'status' => 'Failed',
            ], 422);
        }
    }
}
