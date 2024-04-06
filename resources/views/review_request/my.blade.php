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
                        Review Requests
                    </div>
                    <div class="card-body">
                        @foreach ($reviewRequests as $r)
                            <div class="mb-3">
                                <div class="font-weight-bold">{{ $r->application->user->name }}</div>
                                <div>{{ $r->application->description }}</div>
                                <div>
                                    <a href="{{ route('comment.create', ['id' => $r->application->id]) }}"
                                        class="btn btn-sm btn-primary">Show Applications</a>
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