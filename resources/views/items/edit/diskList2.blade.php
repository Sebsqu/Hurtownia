@foreach($disks as $disk)
    <div class='item'>
        <div class='name'>{{ $disk->disk_fullname }}
        <br>    
        <img src='{{asset("images/disk/" . $disk->disk_image_path)}}' alt='Disks' class='image'>
        </div>
        <div class='capacity'>{{ $disk->disk_capacity }}</div>
        <div class='interface'>{{ $disk->disk_interface }}</div>
        <div class='format'>{{ $disk->disk_format }}</div>
        <div class='read_speed'>{{ $disk->disk_read_speed }}</div>
        <div class='write_speed'>{{ $disk->disk_write_speed }}</div>
        <div class='price'>{{ $disk->disk_price }} zł</div>
        <div class="button-container">
            <a href="{{ route('disks.edit', ['id' => $disk->id]) }}" class="btn btn-warning">Edytuj</a>
            <form method="POST" action="{{ route('disks.delete', ['id' => $disk->id]) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
            </form>
        </div>
    </div>
@endforeach
