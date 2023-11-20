@foreach($rams as $ram)
    <div class='item'>
        <div class='name'>{{ $ram->ram_fullname }}
        <br>    
        <img src='{{asset("images/ram/" . $ram->ram_image_path)}}' alt='Rams' class='image'>
        </div>
        <div class='type_of_memory'>{{ $ram->ram_type_of_memory }}</div>
        <div class='total_capacity'>{{ $ram->ram_total_capacity }}</div>
        <div class='capacity'>{{ $ram->ram_capacity }}</div>
        <div class='frequency'>{{ $ram->ram_frequency }}</div>
        <div class='cycle_latency'>{{ $ram->ram_cycle_latency }}</div>
        <div class='price'>{{ $ram->ram_price }} zł</div>
        <a href="{{ url('addram-to-cart/'.$ram->id) }}" class="add">Dodaj</a>
    </div>
@endforeach