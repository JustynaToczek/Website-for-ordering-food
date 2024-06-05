<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Edit the order'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')
        @include('shared.session-error')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Edit the order</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('order.update', $order->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="email" class="form-label">User email</label>
                            <input id="email" name="email" type="text" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ $order->users->email }}">
                            <div class="invalid-feedback">Wrong user email!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="town" class="form-label">Town</label>
                            <input id="town" name="town" type="text" class="form-control @if ($errors->first('town')) is-invalid @endif" value="{{ $order->delivery_addresses->town }}">
                            <div class="invalid-feedback">Wrong town!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="street_name" class="form-label">Street name</label>
                            <input id="street_name" name="street_name" type="text" class="form-control @if ($errors->first('street_name')) is-invalid @endif" value="{{ $order->delivery_addresses->street_name }}">
                            <div class="invalid-feedback">Wrong street name!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="flat_number" class="form-label">Flat number</label>
                            <input id="flat_number" name="flat_number" type="text" class="form-control @if ($errors->first('flat_number')) is-invalid @endif" value="{{ $order->delivery_addresses->flat_number }}">
                            <div class="invalid-feedback">Wrong flat number!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="date" class="form-label">Date</label>
                            <input id="date" name="date" type="text" class="form-control @if ($errors->first('date')) is-invalid @endif" value="{{ $order->date }}">
                            <div class="invalid-feedback">Wrong date!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="total_price" class="form-label">Total price</label>
                            <input id="total_price" name="total_price" type="text" class="form-control @if ($errors->first('total_price')) is-invalid @endif" value="{{ $order->total_price }}">
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
