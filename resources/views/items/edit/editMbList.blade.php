<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj płytę główną</h1>
    <form action="{{ route('mbs.update', ['id' => $mb->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="mb_fullname">Nazwa:</label>
            <input type="text" name="mb_fullname" id="mb_fullname" value="{{ $mb->mb_fullname }}" class="form-control mb-2">
        </div>


        <div class="form-group">
            <label for="mb_format">Format:</label>
            <input type="text" name="mb_format" id="mb_format" value="{{ $mb->mb_format }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="mb_socket">Gniazdo:</label>
            <input type="text" name="mb_socket" id="mb_socket" value="{{ $mb->mb_socket }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="mb_chipset">Chipset:</label>
            <input type="text" name="mb_chipset" id="mb_chipset" value="{{ $mb->mb_chipset }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="mb_supported_processors">Obsługiwane procesory:</label>
            <input type="text" name="mb_supported_processors" id="mb_supported_processors" value="{{ $mb->mb_supported_processors }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="mb_price">Cena:</label>
            <input type="text" name="mb_price" id="mb_price" value="{{ $mb->mb_price }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="image">Dodaj obrazek:</label><br>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><br>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>

