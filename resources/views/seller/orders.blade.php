@foreach ($orders2 as $order)
    <div class="order container">
        <div class="order-item">
            <p><strong>Użytkownik_Id:</strong></p>
            <p>{{ $order['id_user'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>Produkty:</strong></p>
            <p>{{ $order['items'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>Suma:</strong></p>
            <p>{{ $order['total_amount'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>Data zamówienia:</strong></p>
            <p>{{ $order['order_time'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>Metoda płatności:</strong></p>
            <p>{{ $order['payment_method'] }}</p>
        </div>
    </div>
@endforeach

