<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj Pamięć RAM</h1>
    <form action="{{ route('rams.update', ['id' => $ram->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ram_fullname">Nazwa:</label>
            <input type="text" name="ram_fullname" id="ram_fullname" value="{{ $ram->ram_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_type_of_memory">Typ pamięci:</label>
            <input type="text" name="ram_type_of_memory" id="ram_type_of_memory" value="{{ $ram->ram_type_of_memory }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_total_capacity">Pojemność ogólna:</label>
            <input type="text" name="ram_total_capacity" id="ram_total_capacity" value="{{ $ram->ram_total_capacity }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_capacity">Pojemność pojedynczej kości:</label>
            <input type="text" name="ram_capacity" id="ram_capacity" value="{{ $ram->ram_capacity }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_frequency">Częstotliwość:</label>
            <input type="text" name="ram_frequency" id="ram_frequency" value="{{ $ram->ram_frequency }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_cycle_latency">Opóźnienie cyklu:</label>
            <input type="text" name="ram_cycle_latency" id="ram_cycle_latency" value="{{ $ram->ram_cycle_latency }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="ram_price">Cena:</label>
            <input type="text" name="ram_price" id="ram_price" value="{{ $ram->ram_price }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="image">Dodaj obrazek:</label><br>
            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><br>
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
