@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button id="loadCases">Pokaż obudowy</button>
            <button id="loadCpus">Pokaż procesory</button>
            <button id="loadDisks">Pokaż dyski</button>
            <button id="loadGpus">Pokaż Karty graficzne</button>
            <button id="loadMbs">Pokaż płyty główne</button>
            <button id="loadPsus">Pokaż zasilacze</button>
            <button id="loadRams">Pokaż ramy</button>
            <div id="itemsContainer"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#loadCases').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCases') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadCpus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCpu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadDisks').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showDisk') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadGpus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showGpu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadMbs').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showMb') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadPsus').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showPsu') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});

$(document).ready(function() {
    $('#loadRams').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showRam') }}',
            success: function(data) {
                $('#itemsContainer').html(data);
            }
        });
    });
});
</script>
@endsection
