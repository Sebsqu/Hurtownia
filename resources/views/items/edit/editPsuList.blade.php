<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj zasilacz</h1>
    <form action="{{ route('psus.update', ['id' => $psu->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="psu_fullname">Nazwa:</label>
            <input type="text" name="psu_fullname" id="psu_fullname" value="{{ $psu->psu_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="psu_power">Moc:</label>
            <input type="text" name="psu_power" id="psu_power" value="{{ $psu->psu_power }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="psu_standard">Standard:</label>
            <input type="text" name="psu_standard" id="psu_standard" value="{{ $psu->psu_standard }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="psu_efficiency">Wydajność:</label>
            <input type="text" name="psu_efficiency" id="psu_efficiency" value="{{ $psu->psu_efficiency }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="psu_certificate">Certyfikat:</label>
            <input type="text" name="psu_certificate" id="psu_certificate" value="{{ $psu->psu_certificate }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="psu_price">Cena:</label>
            <input type="text" name="psu_price" id="psu_price" value="{{ $psu->psu_price }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="image">Dodaj obrazek:</label><br>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><br>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
