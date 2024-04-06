<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <div class="py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header bg-info text-white">
              Job Application Details
            </div>
            <div class="card-body">
              <div class="mb-3">
                <strong>Applied by</strong>
                <p>{{ $application->user->name }}</p>
              </div>
              <div class="mb-3">
                <strong>Job Application Description:</strong>
                <p>{{ $application->description }}</p>
              </div>
              <div class="mb-3">
                <strong>Application Status:</strong>
                <span class="badge badge-{{ $application->status == 0 ? 'warning' : 'success' }} text-dark">
                  {{ $application->status == 0 ? 'In review' : 'Selected participant' }}
                </span>
              </div>
              <div class="mb-3">
                <strong>Comments:</strong>
                @foreach ($application->comments as $comment)
                <div class="border-bottom pb-2">
                  <div><strong>{{ $comment->user->name }}</strong>: {{ $comment->description }}</div>
                </div>
                @endforeach
              </div>
              <hr>
              <form method="POST" class="mb-3">
                @csrf
                <div class="form-group">
                  <label for="comment">Add Comment:</label>
                  <textarea class="form-control" id="comment" name="comment" rows="4" cols="50"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
              </form>
              <div class="d-flex justify-content-between">
                <form method="POST" action={{ route('job_application.select', ['id' => $application->id]) }}>
                  @csrf
                  <button type="submit" class="btn btn-success">Select Participant</button>
                </form>
                <form method="POST" action={{ route('job_application.deselect', ['id' => $application->id]) }}>
                  @csrf
                  <button type="submit" class="btn btn-danger">Deselect Participant</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</x-app-layout>