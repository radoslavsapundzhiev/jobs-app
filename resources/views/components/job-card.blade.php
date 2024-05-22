@props(['job'])

<div class="card">
    <article class="media">
        <figure class="media-left">
            <p class="image is-64x64">
            <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}" />
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
            <p>
                <a href="/jobs/{{$job->id}}"><strong>{{ $job->title }}</strong></a>
                <br />
                <span>{{ $job->company }}</span>
                <br/>
                <x-job-tags :tagsAsString="$job->tags"></x-job-tags>
                <p><i class="fa-solid fa-location-dot"></i> {{ $job->location }}</p>
            </p>
            </div>
        </div>
    </article>
</div>