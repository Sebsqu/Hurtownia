<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion({
            collapsible: true
            });
        });
  </script>
</head>
<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj obudowę</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addCase') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="case_fullname">Nazwa obudowy</label>
                            <input type="text" name='case_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="case_type">Typ obudowy</label>
                            <input type="text" name='case_type' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="case_standard">Standard płyty głównej</label>
                            <input type="text" name='case_standard' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="case_fans">Liczba wentylatorów</label>
                            <input type="text" name='case_fans' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="case_side_panel">Panel boczny</label>
                            <input type="text" name='case_side_panel' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="case_price">Cena</label>
                            <input type="text" name='case_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png" class="form-control-file">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj obudowę</button>
                    </form>
                </div>
            </div>
        </div><br>

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj procesor</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addCpu') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="cpu_fullname">Nazwa procesora</label>
                            <input type="text" name='cpu_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_socket">Gniazdo procesora - socket</label>
                            <input type="text" name='cpu_socket' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_timing">Taktowanie procesora</label>
                            <input type="text" name='cpu_timing' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_cache">Pamięć podręczna procesora</label>
                            <input type="text" name='cpu_cache' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_cores">Ilość rdzeni procesora</label>
                            <input type="text" name='cpu_cores' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_graphics">Zintegrowany układ procesora</label>
                            <input type="text" name='cpu_graphics' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="cpu_price">Cena procesora</label>
                            <input type="text" name='cpu_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj procesor</button>
                    </form>
                </div>
            </div>
        </div><br>
        
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj dysk</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addDisk') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="disk_fullname">Nazwa dysku</label>
                            <input type="text" name='disk_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_capacity">Pojemność dysku</label>
                            <input type="text" name='disk_capacity' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_interface">Interfejs dysku</label>
                            <input type="text" name='disk_interface' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_format">Format dysku</label>
                            <input type="text" name='disk_format' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_read_speed">Odczyt dysku</label>
                            <input type="text" name='disk_read_speed' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_write_speed">Zapis dysku</label>
                            <input type="text" name='disk_write_speed' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="disk_price">Cena dysku</label>
                            <input type="text" name='disk_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj dysk</button>
                    </form>
                </div>
            </div>
        </div><br>
                
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj kartę graficzna</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addGpu') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="gpu_fullname">Nazwa karty graficznej</label>
                            <input type="text" name='gpu_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_connector">Rodzaj złącza karty graficznej</label>
                            <input type="text" name='gpu_connector' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_memory">Rodzaj pamięci karty graficznej</label>
                            <input type="text" name='gpu_memory' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_memory_bus">Rodzaj szyny pamięci karty graficznej</label>
                            <input type="text" name='gpu_memory_bus' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_timing">Efektywne taktowanie pamięci karty graficznej</label>
                            <input type="text" name='gpu_timing' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_charger">Rekomendowana moc zasilacza dla karty graficznej</label>
                            <input type="text" name='gpu_charger' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_outputs">Wyjścia karty graficznej</label>
                            <input type="text" name='gpu_outputs' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="gpu_price">Cena karty graficznej</label>
                            <input type="text" name='gpu_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj kartę graficzna</button>
                    </form>
                </div>
            </div>
        </div><br>

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj płytę główną</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addMb') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="mb_fullname">Nazwa płyty głównej</label>
                            <input type="text" name='mb_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="mb_format">Format płyty głównej</label>
                            <input type="text" name='mb_format' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="mb_socket">Gniazdo procesora - socket</label>
                            <input type="text" name='mb_socket' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="mb_chipset">Chipset płyty głównej</label>
                            <input type="text" name='mb_chipset' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="mb_supported_processors">Wspierane architektury procesorów</label>
                            <input type="text" name='mb_supported_processors' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="mb_price">Cena płyty głównej</label>
                            <input type="text" name='mb_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj płytę główna</button>
                    </form>
                </div>
            </div>
        </div><br>        

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj zasilacz</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addPsu') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="psu_fullname">Nazwa zasilacza</label>
                            <input type="text" name='psu_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="psu_power">Moc zasilacza</label>
                            <input type="text" name='psu_power' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="psu_standard">Standard zasilacza</label>
                            <input type="text" name='psu_standard' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="psu_efficiency">Efektywność zasilacza</label>
                            <input type="text" name='psu_efficiency' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="psu_certificate">Certyfikat zasilacza</label>
                            <input type="text" name='psu_certificate' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="psu_price">Cena zasilacza</label>
                            <input type="text" name='psu_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj zasilacz</button>
                    </form>
                </div>
            </div>
        </div><br> 

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">Dodaj pamięć ram</h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form action="{{ route('addRam') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="ram_fullname">Nazwa pamięci operacyjnej ram</label>
                            <input type="text" name='ram_fullname' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_type_of_memory">Typ pamięci ram</label>
                            <input type="text" name='ram_type_of_memory' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_total_capacity">Pojemność całkowita pamięci operacyjnej ram</label>
                            <input type="text" name='ram_total_capacity' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_capacity">Pojemność modułu pamięci operacyjnej ram</label>
                            <input type="text" name='ram_capacity' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_frequency">Częstotliwość pamięci operacyjnej ram</label>
                            <input type="text" name='ram_frequency' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_cycle_latency">Opóźnienia pamięci operacyjnej ram</label>
                            <input type="text" name='ram_cycle_latency' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="ram_price">Cena zasilacza</label>
                            <input type="text" name='ram_price' class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" accept="image/jpeg,image/jpg,image/png">
                        </div><br>
                        <button type="submit" class="btn btn-primary">Dodaj ram</button>
                    </form>
                </div>
            </div>
        </div><br> 

</body>