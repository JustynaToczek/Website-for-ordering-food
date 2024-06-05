<!DOCTYPE html>

<html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Manage dishes'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mb-1">
                @include('shared.session-error')
                @include('shared.session-success')
                <h1>Dishes</h1>
            </div>
            <div class="row mb-2">
                <a href="{{route('dish.create')}}">Add a new dish</a>
            </div>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Dish ID</th>
                            <th scope="col">Dish name</th>
                            <th scope="col">Restaurant name</th>
                            <th scope="col">City name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Picture path</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dishes as $dish)
                            <tr>
                                <td>{{ $dish->id }}</td>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->restaurants->name }}</td>
                                <td>{{ $dish->restaurants->cities->name }}</td>
                                <td>{{ $dish->price }}</td>
                                <td>{{ $dish->picture_path }}</td>
                                <td>{{ $dish->description }}</td>
                                <td>
                                    <a href="{{route('dish.edit', $dish->id)}}">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('dish.destroy', $dish->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Remove"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" colspan="6">No dishes found</th>
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
