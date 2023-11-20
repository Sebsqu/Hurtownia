<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj CPU</h1>
    <form action="{{ route('cpus.update', ['id' => $cpu->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="cpu_fullname">Nazwa:</label>
            <input type="text" name="cpu_fullname" id="cpu_fullname" value="{{ $cpu->cpu_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_socket">Gniazdo:</label>
            <input type="text" name="cpu_socket" id="cpu_socket" value="{{ $cpu->cpu_socket }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_timing">Taktowanie:</label>
            <input type="text" name="cpu_timing" id="cpu_timing" value="{{ $cpu->cpu_timing }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_cache">Pamięć cache:</label>
            <input type="text" name="cpu_cache" id="cpu_cache" value="{{ $cpu->cpu_cache }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_cores">Liczba rdzeni:</label>
            <input type="text" name="cpu_cores" id="cpu_cores" value="{{ $cpu->cpu_cores }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_graphics">Karta graficzna:</label>
            <input type="text" name="cpu_graphics" id="cpu_graphics" value="{{ $cpu->cpu_graphics }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="cpu_price">Cena:</label>
            <input type="text" name="cpu_price" id="cpu_price" value="{{ $cpu->cpu_price }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="image">Dodaj obrazek:</label><br>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><br>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
