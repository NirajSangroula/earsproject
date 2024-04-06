<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\ReviewRequest;
use Illuminate\Http\Request;

class ReviewRequestController extends Controller
{
  public function create(Request $request, string $id)
    {
        $reviewRequest = new ReviewRequest();
        $reviewRequest->application_id = $id;
        $reviewRequest->user_id = $request->user_id;
        $reviewRequest->status = 0;
        $reviewRequest->save();
        return to_route('job_posting.show', ['id' => JobApplication::find($id)->jobPosting]);
        
    }   //
}
