<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Create a new city'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')
        @include('shared.session-error')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Create a new city</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('city.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group mb-2">
                            <label for="city_name" class="form-label">City name</label>
                            <input id="city_name" name="city_name" type="text" class="form-control @if ($errors->first('city_name')) is-invalid @endif" value="{{ old('city_name')}}">
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
