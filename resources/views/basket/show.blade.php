<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'basket'])
<body class="d-flex flex-column min-vh-100">
    @include('shared.navbar')
        <div class="container mt-4">
            <h2 class="d-flex justify-content-center mb-4">Your basket</h2>
            @if (!empty($basket))
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
                        <div class="card mb-3 m-2 col" style="max-width: 40rem;">
                            <div class="row mh-100">
                                <div class="col-md-4 h-100 d-flex align-items-center">
                                    <img src="{{ asset('storage/img/' . $item['picture_path']) }}" class="img-fluid rounded-start rounded-end h-100" alt="Picture of {{ $item['dish_name'] }}" style="object-fit: cover;" />
                                </div>
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item['quantity']}} x {{$item['dish_name'] }}</h5>
                                        <p class="card-text">Total: {{ $item['price'] }} $</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center col-3">
                                    <form method="POST" action="{{ route('basket.destroy', $dishId) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-lg" value="Remove"
                                        style="--bs-btn-font-size: 1rem;" />
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center mt-4 mb-5">
                        <form method="POST" action="">
                            @csrf
                            <input type="submit" class="btn btn-primary btn-lg" value="Order"/>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    @include('shared.footer')
</body>
</html>
