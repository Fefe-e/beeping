<div>
    <h2>Listado de Órdenes</h2>
    <table class="order-table">
        <thead>
            <tr class="th-align">
                <th>ID</th>
                <th>Referencia</th>
                <th>Nombre del Cliente</th>
                <th>Líneas de Pedido</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->order_ref }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>
                    <ul class="order-lines">
                        @foreach ($order->orderLines as $orderLine)
                        <li class="order-line">
                            {{ $orderLine->product->name }}, Cantidad: {{ $orderLine->qty }}, Costo: ${{ $orderLine->product->cost }}
                        </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>