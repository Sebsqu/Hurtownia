@foreach($mbs as $mb)
    <div class='item'>
        <div class='name'>{{ $mb->mb_fullname }}
        <br>
        <img src='{{ $mb->mb_image_path }}' alt='mbs' class='image'>
        </div>
        <div class='format'>{{ $mb->mb_format }}</div>
        <div class='socket'>{{ $mb->mb_socket }}</div>
        <div class='chipset'>{{ $mb->mb_chipset }}</div>
        <div class='supported_processors'>{{ $mb->mb_supported_processors }}</div>
        <div class='price'>{{ $mb->mb_price }} zł</div>
        <button class='add' onClick='add("{{ $mb->mb_fullname }}", {{ $mb->mb_price }})'>Dodaj</button>
    </div>
@endforeach