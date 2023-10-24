@extends('layouts.app')
@section('content')
@if(auth()->user()->role_id == 1)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <button class="btn btn-primary" id="adminIndex">Wyświetl użytkowników</button>
                <div id="itemsContainer"></div>
            </div>
        </div>
    </div>
@elseif(auth()->user()->role_id == 2)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <button class="btn btn-primary" id="addItems">Dodaj przedmioty</button>
                <button class="btn btn-primary" id="sellerIndex">Wyświetl zamówienia</button>
                <button class="btn btn-primary" id="editItemsShow">Edytuj przedmioty</button>
                <div id="itemsContainer"></div>
            </div>
        </div>
    </div>
@elseif(auth()->user()->role_id == 3)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <button class="btn btn-primary" id="loadCases">Pokaż obudowy</button>
                <button class="btn btn-primary" id="loadCpus">Pokaż procesory</button>
                <button class="btn btn-primary" id="loadDisks">Pokaż dyski</button>
                <button class="btn btn-primary" id="loadGpus">Pokaż Karty graficzne</button>
                <button class="btn btn-primary" id="loadMbs">Pokaż płyty główne</button>
                <button class="btn btn-primary" id="loadPsus">Pokaż zasilacze</button>
                <button class="btn btn-primary" id="loadRams">Pokaż ramy</button>
                <div id="itemsContainer"></div>
            </div>
        </div>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
@if(auth()->user()->role_id == 3)
    $('#loadCases').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCases') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $.ajax({
        type: 'GET',
        url: '{{ route('showCases') }}',
        success: function(data) {
            $('#itemsContainer').html(data);
        }
    });

    $('#loadCpus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCpu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $('#loadDisks').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showDisk') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $('#loadGpus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showGpu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $('#loadMbs').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showMb') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $('#loadPsus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showPsu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });

    $('#loadRams').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showRam') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });


@elseif(auth()->user()->role_id == 2)

//dodawanie przedmiotów
$('#addItems').click(function() {
    $.ajax({
        type: 'GET',
        url: '{{ route('addItems') }}',
        success: function(data) {
            $('#itemsContainer').html(data);
        }
    });
});

//wyświetlanie zamówień
$('#sellerIndex').click(function() {
    $.ajax({
        type: 'GET',
        url: '{{ route('sellerIndex') }}',
        success: function(data) {
            $('#itemsContainer').html(data);
        }
    });
});


//edytuj przedmioty
$('#editItemsShow').click(function() {
    $.ajax({
        type: 'GET',
        url: '{{ route('editItemsShow') }}',
        success: function(data) {
            $('#itemsContainer').html(data);
        }
    });
});

@elseif(auth()->user()->role_id == 1)

//wyświetlanie użytkowników
$('#adminIndex').click(function() {
    $.ajax({
        type: 'GET',
        url: '{{ route('adminIndex') }}',
        success: function(data) {
            $('#itemsContainer').html(data);
        }
    });
});



@endif

</script>
@endsection
