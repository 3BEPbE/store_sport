@extends('auth.layouts.master')

@section('title', 'Заказы')

@section('content')
    <div class="col-md-12">
        <h1>Корзина</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    product id
                </th>
                <th>
                    user id
                </th>
                <th>
                    Когда добавлен
                </th>
                <th>
                    Действия
                </th>
            </tr>
            @foreach($orders as $order)
                @if($order->user_id === Auth::id())
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->product_id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>
                        <form action="{{ route('cart.destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="btn-group" role="group">
                                <a class="btn btn-success" type="button"
                                   @admin
                                   href="{{ route('orders.show', $order) }}"
                                   @else
                                   href="{{ route('person.orders.show', $order) }}"
                                   @endadmin
                                >Открыть</a>

                                <button
                                    class="btn btn-danger"
                                    type="submit"
                                >Удалить</button>


                            </div>
                        </form>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
@endsection
