@foreach($disks as $disk)
    <div class='item'>
        <div class='name'>{{ $disk->disk_fullname }}
        <br>    
        <img src='{{ $disk->disk_image_path }}' alt='disks' class='image'>
        </div>
        <div class='capacity'>{{ $disk->disk_capacity }}</div>
        <div class='interface'>{{ $disk->disk_interface }}</div>
        <div class='format'>{{ $disk->disk_foramt }}</div>
        <div class='read_speed'>{{ $disk->disk_read_speed }}</div>
        <div class='write_speed'>{{ $disk->disk_write_speed }}</div>
        <div class='price'>{{ $disk->disk_price }} zł</div>
        <button class='add' onClick='add("{{ $disk->disk_fullname }}", {{ $disk->disk_price }})'>Dodaj</button>
    </div>
@endforeach