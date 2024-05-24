<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="container">
        <div class="fixed-grid">
            @unless(count($jobs) == 0)
                <div class="grid">
                    @foreach($jobs as $job)
                        <div class="cell block">
                            <x-job-card :job="$job"></x-job-card>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No jobs found</p>
            @endunless
        </div>
    </div>
    <div class="mt-6 p-4">
        {{$jobs->links()}}
    </div>
</x-layout>