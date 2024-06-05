<!DOCTYPE html>

  <html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Log in'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')
        @include('shared.session-error')

        <div class="row d-flex justify-content-center w-100">
            <div class="col-12 d-flex justify-content-center mt-5 mb-auto ">
              <h2 class="mb-0">Do you have an account already? </h2>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3 mb-auto ">
              <h2 class="mb-auto">Log in!</h2>
            </div>

            <div class="col-10 col-sm-10 col-md-6 col-lg-4 mt-5">
                <form method="POST" action="{{ route('login.authenticate') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="text" class="form-control @if ($errors->first('email')) is-invalid @endif" value="{{ old('email') }}">
                        <div class="invalid-feedback">Wrong email!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="form-label">Hasło</label>
                        <input id="password" name="password" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif">
                        <div class="invalid-feedback">Wrong password!</div>
                    </div>
                    <div class="text-center mt-5 mb-4">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('shared.footer')
    </body>
</html>
