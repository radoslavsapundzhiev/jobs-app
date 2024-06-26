<x-layout>
    <div class="card add-form container">
        <div class="card-header">
            <p class="card-header-title">Edit job with title: {{$job->title}}</p>
        </div>
        <div class="card-content">
            <form action="/jobs/{{$job->id}}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label">Company</label>
                    <div class="control">
                        <input class="input" type="text" name="company" value="{{ $job->company }}">
                    </div>

                    @error('company')
                        <p class="has-text-danger">{{ $message }}</p>    
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" value="{{ $job->title }}">
                    </div>

                    @error('title')
                        <p class="has-text-danger">{{ $message }}</p>    
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Location</label>
                    <div class="control">
                        <input class="input" type="text" name="location" value="{{ $job->location }}">
                    </div>

                    @error('location')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" value="{{ $job->email }}">
                    </div>

                    @error('email')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Website</label>
                    <div class="control">
                        <input class="input" type="text" name="website" value="{{ $job->website }}">
                    </div>

                    @error('website')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Tags (Comma separated)</label>
                    <div class="control">
                        <input class="input" type="text" name="tags" value="{{ $job->tags }}">
                    </div>

                    @error('tags')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Logo</label>
                    <div class="control block">
                        <input class="input" type="file" name="logo">
                    </div>

                    <p class="image is-64x64">
                        <img src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('/images/no-image.png') }}" />
                    </p>

                    @error('logo')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea
                            class="textarea"
                            placeholder="Job description"
                            rows="5"
                            name="description"
                        >{{ $job->description}}</textarea>
                    </div>

                    @error('description')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Update</button>
                    </div>
                    <div class="control">
                        <a href="/jobs/{{$job->id}}" class="button is-link is-light">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>