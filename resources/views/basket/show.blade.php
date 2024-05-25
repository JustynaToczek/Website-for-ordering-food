{{-- <!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'basket'])
<body class="d-flex flex-column min-vh-100">
    @include('shared.navbar')

    <main class="flex-grow-1">
        <div class="container mt-5">
            <h3 class="d-flex justify-content-center">Your basket</h3>
            <h2>Products from </h2>
        @if(empty($basket))
            <div class="alert alert-info text-center">
                Your basket is empty.
            </div>
        @else
            <div class="row justify-content-center mt-5">
                @foreach ($basket as $dishId => $item)
                <div class="card mb-3 m-2" style="max-width: 40rem;">
                    <div class="row h-100">
                        <div class="col-md-4 h-100 d-flex align-items-center">
                            <img src="{{ asset('storage/img/' . $item['picture_path'])}}" class="img-fluid rounded-start rounded-end h-100" alt="Picture of {{ $item['dish_name'] }}" style="object-fit: cover;" />
                        </div>
                        <div class="col-md-5 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['dish_name'] }}</h5>
                                <p class="card-text">{{ $item['price'] . " $" }}</p>

                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-center flex-column">

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </main>

    <footer class="bg-body-tertiary mt-auto">
        <div class="container-fluid">
            <div class="row text-center pt-2">
                <p>&copy; Ordering food &ndash; 2024</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'basket'])
<body class="d-flex flex-column min-vh-100">
    @include('shared.navbar')

    <main class="flex-grow-1">
        <div class="container mt-4">
            <h2 class="d-flex justify-content-center mb-4">Your basket</h2>
            @if (!empty($basket))
                <!-- Pobieranie nazwy pierwszej restauracji z koszyka -->
                @php
                    $firstItem = reset($basket);
                    $restaurantName = $firstItem['restaurant_name'];
                @endphp
                <h3 class="d-flex justify-content-center">You are ordering from {{ $restaurantName }} restaurant</h3>
            @endif
            @if(empty($basket))
                <div class="alert alert-info text-center mt-5 ">
                    Your basket is empty.
                </div>
            @else
                <div class="row justify-content-center mt-5">
                    @foreach ($basket as $dishId => $item)
                    <div class="col-12 mb-3 justify-content-center d-flex">
                        <div class="card mb-3 m-2" style="max-width: 40rem;">
                            <div class="row h-100">
                                <div class="col-md-4 h-100 d-flex align-items-center">
                                    <img src="{{ asset('storage/img/' . $item['picture_path']) }}" class="img-fluid rounded-start rounded-end h-100" alt="Picture of {{ $item['dish_name'] }}" style="object-fit: cover;" />
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item['quantity']}} x {{$item['dish_name'] }}</h5>
                                        <p class="card-text">Total: {{ $item['price'] }} $</p>
                                    </div>
                                </div>
                                {{-- <div class="col-3 d-flex align-items-center justify-content-center flex-column">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>

    <footer class="bg-body-tertiary mt-auto">
        <div class="container-fluid">
            <div class="row text-center pt-2">
                <p>&copy; Ordering food &ndash; 2024</p>
            </div>
        </div>
    </footer>
</body>
</html>
