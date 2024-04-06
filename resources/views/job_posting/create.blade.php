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
            <div class="card-header bg-primary text-white">
              Create New Job Posting
            </div>
            <div class="card-body">
              <form action="{{ route('job_posting.create') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Post Title:</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control" id="description" name="description" rows="4" cols="50" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</x-app-layout>
