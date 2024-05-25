<x-layout>
    <div class="card add-form container">
        <div class="card-header">
            <p class="card-header-title">Register</p>
        </div>
        <div class="card-content">
            <form action="/users" class="form" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    @error('name')
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
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" value="{{ old('password') }}">
                    </div>

                    @error('password')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Confirm Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    </div>

                    @error('password_confirmation')
                        <p class="has-text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Sign Up</button>
                    </div>
                    <div class="control">
                        Already have an account?
                        <a href="/login" class="button is-link is-light">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>