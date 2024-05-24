<x-layout>
    <div class="container">
        
        <div class="block">
            <a href="/" class="button is-info">Back</a>
        </div>

        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img
                        src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}"
                        alt="Placeholder image"
                        class=""
                    />
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                    <p class="title is-4">{{ $job->title }}</p>
                    <p class="subtitle is-6">{{ $job->company }}</p>
                    <x-job-tags :tagsAsString="$job->tags"></x-job-tags>
                    <p class="subtitle is-8"><i class="fa-solid fa-location-dot"></i> {{ $job->location }}</p>
                    <p class="subtitle is-6 is-centered"><strong>Job Description</strong></p>
                    <p class="block">{{ $job->description }}</p>
                    <div class="buttons">
                        <a href="mailto:{{ $job->email }}" class="button is-link"><i class="fa-solid fa-envelope"></i> Contact employer</a>
                        <a href="{{ $job->website }}" target="_blank" class="button is-link"><i class="fa-solid fa-globe"></i> Visit website address</a>
                        <a href="/jobs/{{$job->id}}/edit" class="button is-link"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layout>