<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewRequestController;
use App\Models\JobApplication;
use App\Models\JobPosting;
use App\Models\ReviewRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/new-job-posting', function() {
        return view('job_posting.create');
    });
    Route::post('/new-job-posting', [JobPostingController::class, 'create'])->name('job_posting.create');
    Route::get('/job-postings', [JobPostingController::class, 'view'])->name('job_posting.view');
    Route::get('/job-postings/update/{id}', function(string $id){
        return view('job_posting.update', ['job' => JobPosting::find($id)]);
    })->name('job_posting.update');
    Route::get('/job-postings/show/{id}', function(string $id){
        return view('job_posting.show', ['job' => JobPosting::find($id)]);
    })->name('job_posting.show');
    Route::post('/job-postings/update/{id}', [JobPostingController::class, 'update']);
        
    Route::get('/new-job-application/{id}', function() {
        return view('job_application.create');
    })->name('job_application.new');
    Route::post('/new-job-application/{id}', [JobApplicationController::class, 'create'])->name('job_application.create');
    Route::post('/select-application/{id}', [JobApplicationController::class, 'select'])->name('job_application.select');
    Route::post('/deselect-application/{id}', [JobApplicationController::class, 'deselect'])->name('job_application.deselect');


    Route::get('/new-review-request/{id}', function() {
        return view('review_request.create', ['users' => User::all()]);
    })->name('review_request.new');
    Route::post('/new-review-request/{id}', [ReviewRequestController::class, 'create'])->name('review_request.create');
    Route::get('/my-review-requests', function(Request $request){
        return view('review_request.my', ['reviewRequests' => ReviewRequest::where('user_id', $request->user()->id)->get()]);
    })->name('review_request.my');

    Route::get('/comment/{id}', function($id) {
        return view('comment.create', ['application' => JobApplication::find($id)]);
    })->name('comment.new');
    Route::post('/comment/{id}', [CommentController::class, 'create'])->name('comment.create');
});

require __DIR__.'/auth.php';
