<!DOCTYPE html>

  <html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Manage cities'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container">
            <div class="row d-flex justify-content-center w-100">
                @if(session('success'))
                <div class="alert alert-success text-center ">
                    {{ session('success') }}
                </div>
                @endif
                <div class="col-12 d-flex justify-content-center mt-5 mb-5">
                <h2 class="mb-0">Manage cities</h2>
                </div>
                <div class="row mb-4 ms-5">
                    <a href="{{route('city.create')}}">Add a new city</a>
                </div>
                <div class="row w-100 d-flex justify-content-center">
                    <div class="col-11">
                        <div class="table-responsive-sm ">
                            <table class="table table-hover table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">city ID</th>
                                        <th scope="col">city name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cities as $city)
                                        <tr>
                                            <td>{{ $city->id }}</td>
                                            <td>{{ $city->name }}</td>
                                            <td>
                                                <a href="{{route('city.edit', $city->id)}}">Edit</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('city.destroy', $city->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Remove"
                                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row" colspan="6">No cities found</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
    </body>
</html>
