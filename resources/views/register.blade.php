<!DOCTYPE html>

<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'Register'])

<body>
    @include('shared.navbar')

    <div class="row d-flex justify-content-center w-100">
        <div class="col-12 d-flex justify-content-center mt-5 mb-auto ">
            <h2 class="mb-0">Don't you have an account?</h2>
        </div>
        <div class="col-12 d-flex justify-content-center mt-3 mb-auto ">
            <h2 class="mb-auto">Register here!</h2>
        </div>

        <div class="col-10 col-sm-10 col-md-6 col-lg-4 mt-5">
            <form method="POST" action="" class="needs-validation" novalidate>
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ old('email') }}">
                    <div class="invalid-feedback">Email is not correct!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="continent" class="form-label">Password</label>
                    <input id="password" name="password" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif">
                    <div class="invalid-feedback">Nieprawidłowe hasło!</div>
                </div>
                <div class="form-group mb-2">
                    <label for="continent" class="form-label">Repeat password</label>
                    <input id="password" name="password" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif">
                    <div class="invalid-feedback">Nieprawidłowe hasło!</div>
                </div>
                <div class="text-center mt-5 mb-4">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    </div>

    <footer class="container-fluid bg-body-tertiary fixed-bottom">
        <div class="row text-center pt-2">
            <p>&copy; Ordering food &ndash; 2024</p>
        </div>
    </footer>
</body>

</html>
