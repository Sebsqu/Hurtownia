@foreach($cases as $case)
    <div class='item'>
        <div class='name'>{{ $case->case_fullname }}
        <br>
        <img src='{{ $case->case_image_path }}' alt='Cases' class='image'>
        </div>
        <div class='type'>{{ $case->case_type }}</div>
        <div class='standard'>{{ $case->case_standard }}</div>
        <div class='fans'>{{ $case->case_fans }}</div>
        <div class='side_panel'>{{ $case->case_side_panel }}</div>
        <div class='price'>{{ $case->case_price }} zł</div>
        <div class="button-container">
            <a href="{{ route('cases.edit', ['id' => $case->id]) }}" class="btn btn-warning">Edytuj</a>
            <form method="POST" action="{{ route('cases.delete', ['id' => $case->id]) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="margin:0;" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten rekord?')">Usuń</button>
            </form>
        </div>
    </div>
@endforeach