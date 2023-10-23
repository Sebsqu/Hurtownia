<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<div class="container col-md-4">
    <h1>Edytuj GPU</h1>
    <form action="{{ route('gpus.update', ['id' => $gpu->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="gpu_fullname">Nazwa:</label>
            <input type="text" name="gpu_fullname" id="gpu_fullname" value="{{ $gpu->gpu_fullname }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_image_path">Ścieżka obrazu:</label>
            <input type="text" name="gpu_image_path" id="gpu_image_path" value="{{ $gpu->gpu_image_path }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_connector">Gniazdo:</label>
            <input type="text" name="gpu_connector" id="gpu_connector" value="{{ $gpu->gpu_connector }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_memory">Pamięć:</label>
            <input type="text" name="gpu_memory" id="gpu_memory" value="{{ $gpu->gpu_memory }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_memory_bus">Szyna pamięci:</label>
            <input type="text" name="gpu_memory_bus" id="gpu_memory_bus" value="{{ $gpu->gpu_memory_bus }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_timing">Taktowanie:</label>
            <input type="text" name="gpu_timing" id="gpu_timing" value="{{ $gpu->gpu_timing }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_outputs">Wyjścia:</label>
            <input type="text" name="gpu_outputs" id="gpu_outputs" value="{{ $gpu->gpu_outputs }}" class="form-control mb-2">
        </div>

        <div class="form-group">
            <label for="gpu_price">Cena:</label>
            <input type="text" name="gpu_price" id="gpu_price" value="{{ $gpu->gpu_price }}" class="form-control mb-2">
        </div>

        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    </form>
</div>
