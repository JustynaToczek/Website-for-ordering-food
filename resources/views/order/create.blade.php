<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Create new order'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Create new order</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('order.store') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group mb-2">
                            <label for="user_id" class="form-label">User ID</label>
                            <input id="user_id" name="user_id" type="text" class="form-control @if ($errors->first('user_id')) is-invalid @endif" value="{{ old('user_id')}}">
                            <div class="invalid-feedback">Wrong user ID!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="address_id" class="form-label">Address ID</label>
                            <input id="address_id" name="address_id" type="text" class="form-control @if ($errors->first('address_id')) is-invalid @endif" value="{{ old('address_id')}}">
                            <div class="invalid-feedback">Wrong address ID!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="date" class="form-label">Date</label>
                            <input id="date" name="date" type="text" class="form-control @if ($errors->first('date')) is-invalid @endif" value="{{ old('date') }}">
                            <div class="invalid-feedback">Wrong date!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="total_price" class="form-label">Total price</label>
                            <input id="total_price" name="total_price" type="text" class="form-control @if ($errors->first('total_price')) is-invalid @endif" value="{{ old('total_price') }}">
                            <div class="invalid-feedback">Wrong price!</div>
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
