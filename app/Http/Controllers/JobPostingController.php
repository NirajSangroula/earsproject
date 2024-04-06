<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\User;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function create(Request $request){
        $jobPost = new JobPosting();
        $jobPost->name = $request->name;
        $jobPost->description = $request->description;
        $jobPost->save();
        return to_route('job_posting.view');
    }

    public function view(Request $request){
        return view('job_posting.view', ['jobPostings' => JobPosting::all(), 'faculty' => ($request->user()->type == User::FACULTY)]);
    }

    public function update(string $id, Request $request){
        $job = JobPosting::find($id);
        $job->name = $request->name;
        $job->description = $request->description;
        $job->save();
        return to_route('job_posting.view');
    }
}
