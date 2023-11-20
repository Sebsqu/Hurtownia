@foreach ($orders2 as $order)
    <div class="order container">
        <div class="order-item">
            <p><strong>Użytkownik_Id:</strong></p>
            <p>{{ $order['id_user'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>Produkty:</strong></p>
            <ul>
                @php
                    $items = explode(', ', $order['items']);
                @endphp
                @foreach($items as $item)
                    <li>{{ $item }} ,</li>
                @endforeach
            </ul>
        </div>

        <div class="order-item">
            <p><strong>Suma:</strong></p>
            <p>{{ $order['total_amount'] }} zł</p>
        </div>

        <div class="order-item">
            <p><strong>Adres:</strong></p>
            <p>{{ $order['address'] }}</p>
        </div>

        <div class="order-item">
            <p><strong>NIP:</strong></p>
            <p>{{ $order['NIP'] }}</p>
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

