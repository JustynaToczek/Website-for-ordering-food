<!DOCTYPE html>

    <html lang="en" data-bs-theme="light">

    @include('shared.head', ['pageTitle' => 'Edit the order'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mt-4 mb-4 text-center">
                <h1>Edit the order where ID = {{$order->id}}</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('order.update', $order->id) }}" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="user_id" class="form-label">User ID</label>
                            <input id="user_id" name="user_id" type="text" class="form-control @if ($errors->first('name')) is-invalid @endif" value="{{ $order->user_id }}">
                            <div class="invalid-feedback">Wrong user ID!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="address_id" class="form-label">Address ID</label>
                            <input id="address_id" name="address_id" type="text" class="form-control @if ($errors->first('code')) is-invalid @endif" value="{{ $order->id }}">
                            <div class="invalid-feedback">Wrong address ID!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="date" class="form-label">Date</label>
                            <input id="date" name="date" type="text" class="form-control @if ($errors->first('currency')) is-invalid @endif" value="{{ $order->date }}">
                            <div class="invalid-feedback">Wrong date!</div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="total_price" class="form-label">Total price</label>
                            <input id="total_price" name="total_price" type="text" class="form-control @if ($errors->first('currency')) is-invalid @endif" value="{{ $order->total_price }}">
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
