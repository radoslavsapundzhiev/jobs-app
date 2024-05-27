<x-layout>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title is-centered">Manage your jobs</p>
        </header>
        <div class="card-content">
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>#</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @unless($jobs->isEmpty())
                    @foreach($jobs as $job)
                    <tr>
                        <td>
                            <a href="/jobs/{{$job->id}}">  {{$job->title}} </a>
                        </td>
                        <td>
                            <a href="/jobs/{{$job->id}}/edit" class="button is-link"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        </td>
                        <td>
                            <form action="/jobs/{{$job->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="button is-danger has-text-white"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>
                            <p>No jobs found</p>
                        </td>
                    </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
</x-layout>