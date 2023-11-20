@foreach($cases as $case)
    <div class='item'>
        <div class='name'>{{ $case->case_fullname }}
        <br>
        <img src='{{asset("images/case/" . $case->case_image_path)}}' alt='Cases' class='image'>
        </div>
        <div class='type'>{{ $case->case_type }}</div>
        <div class='standard'>{{ $case->case_standard }}</div>
        <div class='fans'>{{ $case->case_fans }}</div>
        <div class='side_panel'>{{ $case->case_side_panel }}</div>
        <div class='price'>{{ $case->case_price }} zł</div>
        <a href="{{ url('addcase-to-cart/'.$case->id) }}" class="add">Dodaj</a>
    </div>
@endforeach
