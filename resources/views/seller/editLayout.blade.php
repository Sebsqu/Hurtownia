<div class="edit">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <button class="btn btn-warning" id="showCases2">Pokaż obudowy</button>
                <button class="btn btn-warning" id="showCpus2">Pokaż procesory</button>
                <button class="btn btn-warning" id="showDisks2">Pokaż dyski</button>
                <button class="btn btn-warning" id="showGpus2">Pokaż Karty graficzne</button>
                <button class="btn btn-warning" id="showMbs2">Pokaż płyty główne</button>
                <button class="btn btn-warning" id="showPsus2">Pokaż zasilacze</button>
                <button class="btn btn-warning" id="showRams2">Pokaż ramy</button>
                <div id="itemsContainer2"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#showCases2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCases2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    }); 

    $('#showCpus2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showCpus2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });

    $('#showDisks2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showDisks2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });

    $('#showGpus2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showGpus2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });

    $('#showMbs2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showMbs2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });

    $('#showPsus2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showPsus2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });

    $('#showRams2').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('showRams2') }}',
            success: function(data) {
                $('#itemsContainer2').html(data);
            }
        });
    });
</script>