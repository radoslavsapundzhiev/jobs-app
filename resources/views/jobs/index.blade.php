<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="fixed-grid">
        <div class="grid">
            @unless(count($jobs) == 0)
                @foreach($jobs as $job)
                    <p>{{ $job->title }}</p>
                @endforeach
            @else
                <p>No jobs found</p>
            @endunless
        </div>
    </div>
</x-layout>