 <!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => $restaurant->restaurant_name])
    <body>
        @include('shared.navbar')

        <div class="container mt-5">
            <h3 class="d-flex justify-content-center">What would you like to order from {{ $restaurant->restaurant_name }}?</h3>
            <div class="row justify-content-center mt-5">
                @foreach ($dishes as $dish)
                <div class="card mb-3 m-2" style="max-width: 40rem;">
                    <div class="row g-0 h-100">
                        <div class="col-md-4 h-100 d-flex align-items-center">
                            <img src="{{ asset('storage/img/' . $dish->picture_path) }}" class="img-fluid rounded-start h-100" alt="Picture of {{ $dish->dish_name }}" style="object-fit: cover;" />
                        </div>
                        <div class="col-md-5 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">{{ $dish->dish_name }}</h5>
                                <p class="card-text">{{ $dish->dish_price . " $" }}</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-outline-warning">Add to the basket</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <footer class="container-fluid bg-body-tertiary fixed-bottom">
            <div class="row text-center pt-2">
                <p>&copy; Ordering food &ndash; 2024</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
