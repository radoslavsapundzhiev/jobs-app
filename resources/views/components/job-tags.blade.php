@props(['tagsAsString'])

@php
    $tags = explode(',', $tagsAsString)
@endphp

<div class="buttons">
    @foreach($tags as $tag)
        <a href="/?tag={{$tag}}" class="button is-info is-small is-rounded">{{ $tag }}</a>
    @endforeach
</div>

