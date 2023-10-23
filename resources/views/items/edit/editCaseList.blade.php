<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj Obudowę</h1>
    <form action="{{ route('cases.update', ['id' => $case->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="case_fullname">Nazwa:</label>
            <input type="text" name="case_fullname" id="case_fullname" value="{{ $case->case_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_image_path">Ścieżka obrazu:</label>
            <input type="text" name="case_image_path" id="case_image_path" value="{{ $case->case_image_path }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_type">Typ:</label>
            <input type="text" name="case_type" id="case_type" value="{{ $case->case_type }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_standard">Standard:</label>
            <input type="text" name="case_standard" id="case_standard" value="{{ $case->case_standard }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_fans">Liczba wentylatorów:</label>
            <input type="text" name="case_fans" id="case_fans" value="{{ $case->case_fans }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_side_panel">Rodzaj panelu bocznego:</label>
            <input type="text" name="case_side_panel" id="case_side_panel" value="{{ $case->case_side_panel }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="case_price">Cena:</label>
            <input type="text" name="case_price" id="case_price" value="{{ $case->case_price }}" class="form-control mb-2">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Zapisz zmiany</button>
    </form>
</div>
