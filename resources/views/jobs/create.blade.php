<x-layout>
    <div class="card container ">
        <div class="card-header">
            <p class="card-header-title">Post a job offer</p>
        </div>
        <div class="card-content">
            <form action="" class="form">
                @csrf
                <div class="field">
                    <label class="label">Company name</label>
                    <div class="control">
                        <input class="input" type="text" name="company" value="{{ old('company') }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>