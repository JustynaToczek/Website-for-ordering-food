<!DOCTYPE html>

<html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Manage restaurants'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mb-1">
                @include('shared.session-error')
                @include('shared.session-success')
                <h1>Restaurants</h1>
            </div>
            <div class="row mb-2">
                <a href="{{route('restaurant.create')}}">Add a new restaurant</a>
            </div>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Restaurant ID</th>
                            <th scope="col">Restaurant name</th>
                            <th scope="col">City name</th>
                            <th scope="col">Picture path</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->id }}</td>
                                <td>{{ $restaurant->name }}</td>
                                <td>{{ $restaurant->cities->name }}</td>
                                <td>{{ $restaurant->picture_path }}</td>
                                <td>{{ $restaurant->description }}</td>
                                <td>
                                    <a href="{{route('restaurant.edit', $restaurant->id)}}">Edit</a>

                                </td>
                                <td>
                                    <form method="POST" action="{{ route('restaurant.destroy', $restaurant->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Remove"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" colspan="6">No restaurants found</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        @include('shared.footer')
    </body>

</html>
