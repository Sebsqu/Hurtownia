@foreach($rams as $ram)
<div class='item'>
    <div class='name'>{{ $ram->ram_fullname }}</div>
    <img src='{{ $ram->ram_image_path }}' alt='Pamięć RAM' class='image'>
    <div class='type_of_memory'>Typ pamięci: {{ $ram->ram_type_of_memory }}</div>
    <div class='total_capacity'>Pojemność ogólna: {{ $ram->ram_total_capacity }}</div>
    <div class='capacity'>Pojemność pojedynczej kości: {{ $ram->ram_capacity }}</div>
    <div class='frequency'>Częstotliwość: {{ $ram->ram_frequency }}</div>
    <div class='cycle_latency'>Opóźnienie cyklu: {{ $ram->ram_cycle_latency }}</div>
    <div class='price'>Cena: {{ $ram->ram_price }} zł</div>
    <div class="button-container">
        <a href="{{ route('rams.edit', ['id' => $ram->id]) }}" class="btn btn-warning">Edytuj</a>
        <form method="POST" action="{{ route('rams.delete', ['id' => $ram->id]) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
        </form>
    </div>
</div>
@endforeach