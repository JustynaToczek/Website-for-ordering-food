<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'Order food online'])

<body class="d-flex flex-column min-vh-100">
    @include('shared.navbar')

    <div id="first-page-content" class="container-fluid position-relative p-0">
        <img src="img/salad.jpg" class="d-block w-100" alt="salad first picture" />
        <div class="row position-absolute top-50 w-100 d-none d-md-flex" style="transform: translateY(-100%);">
            <div class="d-flex justify-content-center align-items-center h-100 col-md-6 text-white">
                <div class="row ms-5 d-flex">
                    <div class="text-center mb-5 text-white">
                        <h2>Choose your city and enjoy delicious food!</h2>
                    </div>
                    <div class="text-center ms-5">
                        <form class="d-flex ms-5" role="search" method="GET" action="{{ route('restaurants.search') }}">
                            <select class="form-select me-3 w-50" aria-label="search city" name="city" required>
                                <option selected disabled value="">Choose city</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}"> {{ $city->name }} </option>
                                @endforeach
                            </select>
                            <button class="btn btn-danger btn-lg" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-md-none text-center bg-light p-3">
            <div class="col-12">
                <h2 class="text-black-50">Choose your city and enjoy delicious food!</h2>
            </div>
            <div class="col-12">
                <form class="d-flex justify-content-center mt-3" role="search" method="GET" action="{{ route('restaurants.search') }}">
                    <select class="form-select me-3 w-50" aria-label="search city" name="city" required>
                        <option selected disabled value="">Choose city</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}"> {{ $city->name }} </option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger btn-lg" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    @include('shared.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

