<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Obudowę</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container col-md-6 mt-5">
    <h1 class="mb-4">Edytuj Obudowę</h1>

    <form action="{{ route('cases.update', ['id' => $case->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="case_fullname" class="form-label">Nazwa:</label>
            <input type="text" name="case_fullname" id="case_fullname" value="{{ $case->case_fullname }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="case_type" class="form-label">Typ:</label>
            <input type="text" name="case_type" id="case_type" value="{{ $case->case_type }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="case_standard" class="form-label">Standard:</label>
            <input type="text" name="case_standard" id="case_standard" value="{{ $case->case_standard }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="case_fans" class="form-label">Liczba wentylatorów:</label>
            <input type="text" name="case_fans" id="case_fans" value="{{ $case->case_fans }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="case_side_panel" class="form-label">Rodzaj panelu bocznego:</label>
            <input type="text" name="case_side_panel" id="case_side_panel" value="{{ $case->case_side_panel }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="case_price" class="form-label">Cena:</label>
            <input type="text" name="case_price" id="case_price" value="{{ $case->case_price }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Dodaj obrazek:</label>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>

<!-- Bootstrap JS i jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
