<!DOCTYPE html>

  <html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Manage orders'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container">
            <div class="row d-flex justify-content-center w-100">
                @if(session('success'))
                <div class="alert alert-success text-center ">
                    {{ session('success') }}
                </div>
                @endif
                <div class="col-12 d-flex justify-content-center mt-5 mb-5">
                <h2 class="mb-0">Manage orders</h2>
                </div>
                <div class="row mb-4 ms-5">
                    <a href="{{route('order.create')}}">Add a new order</a>
                </div>
                <div class="row w-100 d-flex justify-content-center">
                    <div class="col-11">
                        <div class="table-responsive-sm ">
                            <table class="table table-hover table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">User ID</th>
                                        <th scope="col">Address ID</th>
                                        <th scope="col">date</th>
                                        <th scope="col">total_price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                            {{-- <th scope="row"><a href="{{ route('countries.show', $country->id) }}">{{ $country->id }}</a></th> --}}
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user_id }}</td>
                                            <td>{{ $order->address_id }}</td>
                                            <td>{{ $order->date }}</td>
                                            <td>{{ $order->total_price }}</td>
                                            <td>
                                                <a href="{{route('order.edit', $order->id)}}">Edit</a>

                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('order.destroy', $order->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Remove"
                                                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" />
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row" colspan="6">No orders found</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
    </body>
</html>
