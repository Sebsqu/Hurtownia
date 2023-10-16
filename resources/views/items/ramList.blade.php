@foreach($rams as $ram)
    <div class='item'>
        <div class='name'>{{ $ram->ram_fullname }}
        <br>    
        <img src='{{ $ram->ram_image_path }}' alt='rams' class='image'>
        </div>
        <div class='type_of_memory'>{{ $ram->ram_type_of_memory }}</div>
        <div class='total_capacity'>{{ $ram->ram_total_capacity }}</div>
        <div class='capacity'>{{ $ram->ram_capacity }}</div>
        <div class='frequency'>{{ $ram->ram_frequency }}</div>
        <div class='cycle_latency'>{{ $ram->ram_cycle_latency }}</div>
        <div class='price'>{{ $ram->ram_price }} zł</div>
        <button class='add' onClick='add("{{ $ram->ram_fullname }}", {{ $ram->ram_price }})'>Dodaj</button>
    </div>
@endforeach