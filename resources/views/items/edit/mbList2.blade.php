@foreach($mbs as $mb)
    <div class='item'>
        <div class='name'>{{ $mb->mb_fullname }}
        <br>
        <img src='{{asset("images/mb/" . $mb->mb_image_path)}}' alt='Mbs' class='image'>
        </div>
        <div class='format'>{{ $mb->mb_format }}</div>
        <div class='socket'>{{ $mb->mb_socket }}</div>
        <div class='chipset'>{{ $mb->mb_chipset }}</div>
        <div class='supported_processors'>{{ $mb->mb_supported_processors }}</div>
        <div class='price'>{{ $mb->mb_price }} zł</div>
        <div class="button-container">
            <a href="{{ route('mbs.edit', ['id' => $mb->id]) }}" class="btn btn-warning">Edytuj</a>
            <form method="POST" action="{{ route('mbs.delete', ['id' => $mb->id]) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
            </form>
    </div>
    </div>
@endforeach
