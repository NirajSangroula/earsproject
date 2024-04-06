
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="py-4">
    <div class="py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header bg-info text-white">
              Job Applications
            </div>
            <div class="card-body">
              @foreach ($job->applications as $application)
              <div class="border-bottom mb-4 pb-3">
                <div>Applied by {{ $application->user->name }}</div>
                <div>{{ $application->description }}</div>
                <div>
                  @if ($application->status == 0)
                  <span class="badge badge-warning text-dark">In review</span>
                  @else
                  <span class="badge badge-success">Selected participant</span>
                  @endif
                </div>
                <div class="mt-2">
                  <a href="{{ route('review_request.create', ['id' => $application->id]) }}" class="btn btn-sm btn-primary mr-2">Review Request</a>
                  <a href="{{ route('comment.create', ['id' => $application->id]) }}" class="btn btn-sm btn-secondary">View Application</a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
