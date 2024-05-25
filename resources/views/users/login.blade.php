<x-layout>
    <div class="card add-form container">
        <div class="card-header">
            <p class="card-header-title">Login</p>
        </div>
        <div class="card-content">
            <form action="/users/authenticate" class="form" method="POST">
                @csrf
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
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Sign In</button>
                    </div>
                    <div class="control">
                        Don't have an account?
                        <a href="/register" class="button is-link is-light">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>