<!DOCTYPE html>

  <html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Choose restaurant in ' .  $city_name ])
    <body>
      @include('shared.navbar')

      <div class="container mt-5">
        <h3>What would you like to eat in {{ $city_name }}?</h3>

        <div class="row mt-4">
            @foreach($restaurants as $restaurant)
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100" style="width: 18rem">
                <img src="{{ asset('storage/img/'.$restaurant->picture_path) }}" class="card-img-top" alt="Picture representing {{ $restaurant->restaurant_name }}" />
                <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $restaurant->restaurant_name }}</h5>
                <p class="card-text">{{ $restaurant->description }}</p>
                <a href="{{ route('restaurant.show', ['id' => $restaurant->restaurant_id]) }}" class="btn btn-info mt-auto">Check it out</a>
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

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </body>

    </body>
  </html>

