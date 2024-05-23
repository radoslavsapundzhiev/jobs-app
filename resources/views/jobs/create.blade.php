<x-layout>
    <div class="card add-form container">
        <div class="card-header">
            <p class="card-header-title">Post a job offer</p>
        </div>
        <div class="card-content">
            <form action="" class="form">
                @csrf
                <div class="field">
                    <label class="label">Company</label>
                    <div class="control">
                        <input class="input" type="text" name="company" value="{{ old('company') }}">
                    </div>

                    @error('company')
                        <p class="has-text-danger">{{ $message }}</p>    
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" value="{{ old('title') }}">
                    </div>

                    @error('title')
                        <p class="has-text-danger">{{ $message }}</p>    
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Location</label>
                    <div class="control">
                        <input class="input" type="text" name="location" value="{{ old('location') }}">
                    </div>

                    @error('location')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Website</label>
                    <div class="control">
                        <input class="input" type="text" name="website" value="{{ old('website') }}">
                    </div>

                    @error('website')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Tags (Comma separated)</label>
                    <div class="control">
                        <input class="input" type="text" name="tags" value="{{ old('tags') }}">
                    </div>

                    @error('tags')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Logo</label>
                    <div class="control">
                        <input class="input" type="file" name="logo" value="{{ old('logo') }}">
                    </div>

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
                        >{{ old('description') }}</textarea>
                    </div>

                    @error('description')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Create</button>
                    </div>
                    <div class="control">
                        <a href="/" class="button is-link is-light">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>