<!DOCTYPE html>
  <html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Order food online'])


    <body>
      @include('shared.navbar')

      <div id="first-page-content container-fluid position-relative" class="">
        <img
          src="img/salad.jpg"
          class="d-block w-100"
          alt="salad first picture"
        />
        <div class="row position-absolute top-50 w-100">
          <div
            class="d-flex justify-content-center align-items-center h-100 ms-3 col-6"
          >
            <div class="row m-3">
              <div class="text-center mb-5 text-white">
                <h2>Choose your city and enjoy delicious food!</h2>
              </div>
              <div class="text-center ms-5">
                <form class="d-flex ms-5" role="search" method="GET" action="{{ route('restaurants.search') }}">
                  <select
                    class="form-select me-3 w-50"
                    aria-label="search city"
                    name="city"
                  >
                    <option selected disabled>Choose city</option>
                    <option value="1">Warsaw</option>
                    <option value="2">Rzeszow</option>
                    <option value="3">Gdansk</option>
                    <option value="4">Wroclaw</option>
                  </select>
                  <button class="btn btn-danger btn-lg" type="submit">
                    Search
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
      @include('shared.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  </body>
    </body>
  </html>
