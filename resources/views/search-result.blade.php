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



        {{-- <div class="row mt-4">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100" style="width: 18rem">
              <img src="{{asset('storage/img/bimbap.jpg')}}" class="card-img-top" alt="picture of bimbap" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Under Seoul</h5>
                <p class="card-text">
                  Korean restaurant. Spicy and delicious food made with
                  ingredients straight from South Korea.
                </p>
                <a href="{{route('restaurant.show')}}" class="btn btn-info mt-auto">Check it out</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100" style="width: 18rem">
              <img src="{{asset('storage/img/burger.jpg')}}" class="card-img-top" alt="picture of burger" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Bobby Burger</h5>
                <p class="card-text">
                  The restaurant that specializes in serving high quality,
                  crafts burgers.
                </p>
                <a href="#" class="btn btn-info mt-auto">Check it out</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100" style="width: 18rem">
              <img src="{{asset('storage/img/pizza.jpg')}}" class="card-img-top" alt="picture of pizza" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Torino</h5>
                <p class="card-text">
                  The restaurant that serves all kinds of Italian pizza and
                  pasta.
                </p>
                <a href="#" class="btn btn-info mt-auto">Check it out</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100" style="width: 18rem">
              <img src="{{asset('storage/img/soup.jpg')}}" class="card-img-top" alt="picture of soup" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Soup Heaven</h5>
                <p class="card-text">
                  The restaurant that serves soups from all around the world.
                </p>
                <a href="#" class="btn btn-info mt-auto">Check it out </a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <footer class="container-fluid bg-body-tertiary fixed-bottom">
        <div class="row text-center pt-2">
          <p>&copy; Ordering food &ndash; 2024</p>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </body>

    </body>
  </html>

