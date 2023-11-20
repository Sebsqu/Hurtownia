@foreach($psus as $psu)
        <div class='item'>
            <div class='name'>{{ $psu->psu_fullname }}</div>
            <img src='{{asset("images/psu/" . $psu->psu_image_path)}}' alt='Psus' class='image'>
            <div class='power'>Moc: {{ $psu->psu_power }}</div>
            <div class='standard'>Standard: {{ $psu->psu_standard }}</div>
            <div class='efficiency'>Wydajność: {{ $psu->psu_efficiency }}</div>
            <div class='certificate'>Certyfikat: {{ $psu->psu_certificate }}</div>
            <div class='price'>Cena: {{ $psu->psu_price }} zł</div>
            <div class="button-container">
                <a href="{{ route('psus.edit', ['id' => $psu->id]) }}" class="btn btn-warning">Edytuj</a>
                <form method="POST" action="{{ route('psus.delete', ['id' => $psu->id]) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
                </form>
            </div>
        </div>
@endforeach
