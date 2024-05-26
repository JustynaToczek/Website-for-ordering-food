<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => $restaurant->name])
<body class="d-flex flex-column min-vh-100">
    @include('shared.navbar')

    <main class="flex-grow-1">
        <div class="container mt-5">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <h3 class="d-flex justify-content-center mt-4">What would you like to order from {{ $restaurant->name }}?</h3>
            <div class="row justify-content-center mt-5">
                @forelse ($dishes as $dish)
                <div class="col-6 mb-3 justify-content-center d-flex">
                    <div class="card mb-3 m-2" style="max-width: 40rem;">
                        <div class="row h-100">
                            <div class="col-md-4 h-100 d-flex align-items-center">
                                <img src="{{ asset('storage/img/' . $dish->picture_path) }}" class="rounded-circle img-fluid rounded-start h-100" alt="Picture of {{ $dish->name }}" style="object-fit: cover;" />
                            </div>
                            <div class="col-md-5 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dish->name }}</h5>
                                    <p class="card-text">{{ $dish->price }} $</p>
                                    <p class="card-text">{{ $dish->description }}</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center flex-column ">
                                <form action="{{ route('add.to.basket') }}" method="POST">
                                    @csrf
                                    <input class="form-control text-center mb-2 border-0" type="text" id="price-display-{{ $dish->id }}" value="{{ $dish->price }} $" readonly>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-info" type="button" onclick="decrement({{ $dish->id }})">-</button>
                                        <input type="text" class="form-control text-center" id="number-{{ $dish->id }}" name="quantity" value="1" min="1" readonly>
                                        <button class="btn btn-info" type="button" onclick="increment({{ $dish->id }})">+</button>
                                    </div>
                                    <input type="hidden" name="dish_id" value="{{ $dish->id }}">
                                    <input type="hidden" id="price-input-{{ $dish->id }}" name="price" value="{{ $dish->price }}" data-price="{{ $dish->price }}">
                                    <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">
                                    <input type="hidden" name="picture_path" value="{{ $dish->picture_path }}">
                                    <input type="hidden" name="dish_name" value="{{ $dish->name }}">
                                    <button type="submit" class="btn btn-outline-warning">Add to the basket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 mt-4">
                    <div class="alert alert-info" role="alert">
                        There are no dishes available in {{ $restaurant->name }} at the moment. We are sorry. Please check back later.
                    </div>
                </div>

                @endforelse
            </div>
        </div>
    </main>

    @include('shared.footer')
    <script>
        function increment(dishId) {
            let numberInput = document.getElementById('number-' + dishId);
            numberInput.value = parseInt(numberInput.value) + 1;
            calculate(dishId);
        }

        function decrement(dishId) {
            let numberInput = document.getElementById('number-' + dishId);
            if (numberInput.value > 1) {
                numberInput.value = parseInt(numberInput.value) - 1;
            }
            calculate(dishId);
        }

        function calculate(dishId) {
            let numberInput = document.getElementById('number-' + dishId);
            let priceInput = document.getElementById('price-input-' + dishId);
            let pricePerUnit = parseFloat(priceInput.dataset.price);

            if (!isNaN(pricePerUnit) && !isNaN(numberInput.value)) {
                let totalPrice = (numberInput.value * pricePerUnit).toFixed(2);
                document.getElementById('price-display-' + dishId).value = totalPrice + " $";
                priceInput.value = totalPrice;
            }
        }
    </script>

</body>
</html>
