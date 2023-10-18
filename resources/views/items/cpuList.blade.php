@foreach($cpus as $cpu)
    <div class='item'>
        <div class='name'>{{ $cpu->cpu_fullname }}
        <br>
        <img src='{{ $cpu->cpu_image_path }}' alt='Cpus' class='image'>
        </div>
        <div class='socket'>{{ $cpu->cpu_socket }}</div>
        <div class='timing'>{{ $cpu->cpu_timing }}</div>
        <div class='cache'>{{ $cpu->cpu_cache }}</div>
        <div class='cores'>{{ $cpu->cpu_cores }}</div>
        <div class='graphics'>{{ $cpu->cpu_graphics }}</div>
        <div class='price'>{{ $cpu->cpu_price }} zł</div>
        <a href="{{ url('addcpu-to-cart/'.$cpu->id) }}" class="add">Dodaj</a>
    </div>
@endforeach