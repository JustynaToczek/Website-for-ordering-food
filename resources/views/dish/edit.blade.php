<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Edit the city'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')
        @include('shared.session-error')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Edit the dish {{$dish->name}}</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('dish.update', $dish->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="dish_name" class="form-label">Dish name</label>
                            <input id="dish_name" name="dish_name" type="text" class="form-control @if ($errors->first('dish_name')) is-invalid @endif" value="{{ $dish->name }}">
                            <div class="invalid-feedback">Wrong dish name!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="restaurant_name" class="form-label">Restaurant name</label>
                            <input id="restaurant_name" name="restaurant_name" type="text" class="form-control @if ($errors->first('restaurant_name')) is-invalid @endif" value="{{$dish->restaurants->name}}">
                            <div class="invalid-feedback">Wrong restaurant name!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="city_name" class="form-label">City name</label>
                            <input id="city_name" name="city_name" type="text" class="form-control @if ($errors->first('city_name')) is-invalid @endif" value="{{ $dish->restaurants->cities->name}}">
                            <div class="invalid-feedback">Wrong city name!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="price" class="form-label">Price</label>
                            <input id="price" name="price" type="text" class="form-control @if ($errors->first('price')) is-invalid @endif" value="{{ $dish->price}}">
                            <div class="invalid-feedback">Wrong price!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="picture_path" class="form-label">Picture path</label>
                            <input id="picture_path" name="picture_path" type="text" class="form-control @if ($errors->first('picture_path')) is-invalid @endif" value="{{ $dish->picture_path}}">
                            <div class="invalid-feedback">Wrong picture path!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="description" class="form-label">Description</label>
                            <input id="description" name="description" type="text" class="form-control @if ($errors->first('description')) is-invalid @endif" value="{{$dish->description}}">
                            <div class="invalid-feedback">Wrong description!</div>
                        </div>
                        <div class="text-center mt-4 mb-4">
                            <input class="btn btn-success" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('shared.footer')
    </body>

</html>
