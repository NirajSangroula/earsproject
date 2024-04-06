
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <a class="btn btn-success" href="{{ route('job_posting.create')}}">Create new posting</a>
                    </div>
                    <div>
                        @foreach ($jobPostings as $jobPosting)
                        <h3 class="text-center fs-2">{{ $jobPosting->name }}</h3>
                        <div>{{ $jobPosting->description }}</div>
                        <a class="btn btn-sm btn-primary" href="{{ route('job_posting.update', ['id' => $jobPosting->id]) }}">edit</a>
                        <a class="btn btn-sm btn-secondary" href="{{ route('job_posting.show', ['id' => $jobPosting->id]) }}">Show applications</a>
                        <a class="btn btn-sm btn-success" href="{{ route('job_application.new', ['id' => $jobPosting->id]) }}">Apply</a>
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header bg-success text-white">
              Job Postings
              <a class="btn btn-light float-right" href="{{ route('job_posting.create') }}">Create New Posting</a>
            </div>
            <div class="card-body">
              @foreach ($jobPostings as $jobPosting)
              <div class="border-bottom mb-4 pb-3">
                <h3 class="text-center mb-2">{{ $jobPosting->name }}</h3>
                <p class="text-muted mb-3">{{ $jobPosting->description }}</p>
                <div class="text-center">
                  @if($faculty)
                  <a class="btn btn-sm btn-primary mr-2" href="{{ route('job_posting.update', ['id' => $jobPosting->id]) }}">Edit</a>
                  <a class="btn btn-sm btn-secondary mr-2" href="{{ route('job_posting.show', ['id' => $jobPosting->id]) }}">Show Applications</a>
                  @endif
                  <a class="btn btn-sm btn-success" href="{{ route('job_application.new', ['id' => $jobPosting->id]) }}">Apply</a>
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
