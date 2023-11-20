<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj Dysk</h1>
    <form action="{{ route('disks.update', ['id' => $disk->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="disk_fullname">Nazwa:</label>
            <input type="text" name="disk_fullname" id="disk_fullname" value="{{ $disk->disk_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_capacity">Pojemność:</label>
            <input type="text" name="disk_capacity" id="disk_capacity" value="{{ $disk->disk_capacity }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_interface">Interfejs:</label>
            <input type="text" name="disk_interface" id="disk_interface" value="{{ $disk->disk_interface }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_format">Format:</label>
            <input type="text" name="disk_format" id="disk_format" value="{{ $disk->disk_format }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_read_speed">Prędkość odczytu:</label>
            <input type="text" name="disk_read_speed" id="disk_read_speed" value="{{ $disk->disk_read_speed }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_write_speed">Prędkość zapisu:</label>
            <input type="text" name="disk_write_speed" id="disk_write_speed" value="{{ $disk->disk_write_speed }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="disk_price">Cena:</label>
            <input type="text" name="disk_price" id="disk_price" value="{{ $disk->disk_price }}" class="form-control mb-s2">
        </div>

        <div class="form-group">
            <label for="image">Dodaj obrazek:</label><br>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><br>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
