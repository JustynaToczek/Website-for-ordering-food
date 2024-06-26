<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Register'])
    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')
        <div class="row d-flex justify-content-center w-100">
            <div class="col-12 d-flex justify-content-center mt-4 mb-auto ">
                <h2 class="mb-0">Don't you have an account?</h2>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2 mb-auto ">
                <h2 class="mb-auto">Register here!</h2>
            </div>

            <div class="col-10 col-sm-10 col-md-6 col-lg-4 mt-4">
                <form method="POST" action="" class="needs-validation" novalidate >
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" name="name" type="text" class="form-control  @if ($errors->first('name')) is-invalid @endif" value="{{ old('name') }}">
                        <div class="invalid-feedback">Name is required!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="surname" class="form-label">Surname</label>
                        <input id="surname" name="surname" type="text" class="form-control @if ($errors->first('surname')) is-invalid @endif" value="{{ old('surname') }}">
                        <div class="invalid-feedback">Surname is required!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="text" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ old('email') }}">
                        <div class="invalid-feedback">Email is not correct!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" name="password" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif">
                        <div class="invalid-feedback">Password must be at least 8 characters long</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password_confirmation" class="form-label">Repeat password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif">
                        <div class="invalid-feedback">Passwords do not match!</div>
                    </div>
                    <div class="text-center mt-5 mb-4">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        @include('shared.footer')
    </body>

</html>
