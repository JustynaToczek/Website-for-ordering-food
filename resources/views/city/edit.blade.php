<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Edit the city'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Edit the city where ID = {{$city->id}}</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('city.update', $city->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="city_name" class="form-label">City name</label>
                            <input id="city_name" name="city_name" type="text" class="form-control @if ($errors->first('city_name')) is-invalid @endif" value="{{ $city->name }}">
                            <div class="invalid-feedback">Wrong city name!</div>
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
