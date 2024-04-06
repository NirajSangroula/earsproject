<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Http\Requests\UpdateJobApplicationRequest;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, string $postId)
    {
        $jobApplication = new JobApplication();
        $jobApplication->post_id = $postId;
        $jobApplication->user_id = $request->user()->id;
        $jobApplication->description = $request->description;
        $jobApplication->status = 0;
        $jobApplication->save();
        return to_route('job_posting.view');
        
    }

    public function select(Request $request, string $id){
        $jobApplication = JobApplication::find($id);
        $jobApplication->status = 1;
        $jobApplication->user->type = User::FACULTY;
        $jobApplication->user->save();
        $jobApplication->save();
        return to_route('comment.create', ['id' => $id]);
    }

    public function deselect(Request $request, string $id){
        $jobApplication = JobApplication::find($id);
        $jobApplication->status = 0;
        $jobApplication->save();
        return to_route('comment.create', ['id' => $id]);
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
    public function show(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Requset $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }
}
