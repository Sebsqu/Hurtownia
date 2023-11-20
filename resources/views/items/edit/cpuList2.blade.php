@foreach($cpus as $cpu)
    <div class='item'>
        <div class='name'>{{ $cpu->cpu_fullname }}
        <br>
        <img src='{{asset("images/cpu/" . $cpu->cpu_image_path)}}' alt='Cpus' class='image'>
        </div>
        <div class='socket'>{{ $cpu->cpu_socket }}</div>
        <div class='timing'>{{ $cpu->cpu_timing }}</div>
        <div class='cache'>{{ $cpu->cpu_cache }}</div>
        <div class='cores'>{{ $cpu->cpu_cores }}</div>
        <div class='graphics'>{{ $cpu->cpu_graphics }}</div>
        <div class='price'>{{ $cpu->cpu_price }} zł</div>
        <div class="button-container">
            <a href="{{ route('cpus.edit', ['id' => $cpu->id]) }}" class="btn btn-warning">Edytuj</a>
            <form method="POST" action="{{ route('cpus.delete', ['id' => $cpu->id]) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
            </form>
        </div>
    </div>
@endforeach