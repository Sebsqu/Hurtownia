@foreach($psus as $psu)
    <div class='item'>
        <div class='name'>{{ $psu->psu_fullname }}
        <br>   
        <img src='{{ $psu->psu_image_path }}' alt='psus' class='image'>
        </div>
        <div class='power'>{{ $psu->psu_power }}</div>
        <div class='standard'>{{ $psu->psu_standard }}</div>
        <div class='efficiency'>{{ $psu->psu_efficiency }}</div>
        <div class='certificate'>{{ $psu->psu_certificate }}</div>
        <div class='price'>{{ $psu->psu_price }} zł</div>
        <button class='add' onClick='add("{{ $psu->psu_fullname }}", {{ $psu->psu_price }})'>Dodaj</button>
    </div>
@endforeach