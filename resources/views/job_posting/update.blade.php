<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div>
                    <form action="{{ route('job_posting.update', ['id' => $job->id])}}" method="POST">
                        @csrf
                        <div>
                            <label for="name">Post Title:</label><br>
                            <input type="text" id="name" name="name" value={{ $job->name }}><br>
                        </div>
                        <div>
                            <label for="description">Description:</label><br>
                            <textarea id="description" name="description" rows="4" cols="50">{{ $job->description }}</textarea><br>
                        </div>
                        <button type="submit">Create Post</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
