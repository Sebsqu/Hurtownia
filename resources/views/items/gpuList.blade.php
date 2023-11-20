@foreach($gpus as $gpu)
    <div class='item'>
        <div class='name'>{{ $gpu->gpu_fullname }}
        <br>    
        <img src='{{asset("images/gpu/" . $gpu->gpu_image_path)}}' alt='Gpus' class='image'>
        </div>
        <div class='connector'>{{ $gpu->gpu_connector }}</div>
        <div class='memory'>{{ $gpu->gpu_memory }}</div>
        <div class='memory_bus'>{{ $gpu->gpu_memory_bus }}</div>
        <div class='timing'>{{ $gpu->gpu_timing }}</div>
        <div class='outputs'>{{ $gpu->gpu_outputs }}</div>
        <div class='price'>{{ $gpu->gpu_price }} zł</div>
        <a href="{{ url('addgpu-to-cart/'.$gpu->id) }}" class="add">Dodaj</a>
    </div>
@endforeach