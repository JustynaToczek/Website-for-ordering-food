<!DOCTYPE html>

<html lang="en" data-bs-theme="light">
    @include('shared.head', ['pageTitle' => 'Manage orders'])

    <body class="d-flex flex-column min-vh-100">
        @include('shared.navbar')

        <div class="container mt-5 mb-5">
            <div class="row mb-1">
                @include('shared.session-error')
                @include('shared.session-success')

                <h1>Orders</h1>
            </div>
            <div class="row mb-2">
                <a href="{{route('order.create')}}">Add a new order</a>
            </div>
            <div class="row">
                <div class="table-responsive-sm">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">User email</th>
                            <th scope="col">Town</th>
                            <th scope="col">Street name</th>
                            <th scope="col">flat number</th>
                            <th scope="col">date</th>
                            <th scope="col">Total price</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->users->email }}</td>
                                <td>{{ $order->delivery_addresses->town }}</td>
                                <td>{{ $order->delivery_addresses->street_name }}</td>
                                <td>{{ $order->delivery_addresses->flat_number }}</td>
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

        @include('shared.footer')
    </body>

</html>
