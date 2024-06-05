<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
@include('shared.head', ['pageTitle' => 'Choose restaurant in ' .  $city_name])
<body class="d-flex flex-column min-vh-100">
  @include('shared.navbar')

  <div class="container mt-5">
    <h3>What would you like to eat in {{ $city_name }}?</h3>

    <div class="row mt-4">
      @forelse($restaurants as $restaurant)
      <div class="d-flex justify-content-center col-12 col-sm-6 col-lg-3 mb-4 ml-md-2 mr-md-2">
        <div class="card h-100" style="width: 18rem">
          <img src="{{ asset('storage/img/'.$restaurant->picture_path) }}" class="card-img-top" alt="Picture representing {{ $restaurant->name }}" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $restaurant->name }}</h5>
            <p class="card-text">{{ $restaurant->description }}</p>
            <a href="{{ route('restaurant.show', ['id' => $restaurant->id]) }}" class="btn btn-info mt-auto">Check it out</a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 mt-4">
        <div class="alert alert-info" role="alert">
          There are no restaurants available in {{ $city_name }} at the moment. We are sorry. Please check back later.
        </div>
      </div>
      @endforelse
    </div>
  </div>

  @include('shared.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
