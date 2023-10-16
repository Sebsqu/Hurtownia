<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case', function(Blueprint $table)
        {
            $table->id();
            $table->string('case_fullname', 100)->nullable(false);
            $table->string('case_type', 50)->nullable(false);
            $table->string('case_standard', 50)->nullable(false);
            $table->string('case_fans', 50)->nullable(false);
            $table->string('case_side_panel', 50)->nullable(false);
            $table->decimal('case_price', 10, 2)->nullable(false);
            $table->string('case_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\CaseDataSeeder())->run();

        Schema::create('cpu', function(Blueprint $table)
        {
            $table->id();
            $table->string('cpu_fullname', 100)->nullable(false);
            $table->string('cpu_socket', 50)->nullable(false);
            $table->string('cpu_timing', 50)->nullable(false);
            $table->string('cpu_cache', 50)->nullable(false);
            $table->string('cpu_cores', 50)->nullable(false);
            $table->string('cpu_graphics', 50)->nullable(false);
            $table->decimal('cpu_price', 10, 2)->nullable(false);
            $table->string('cpu_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\CpuDataSeeder())->run();

        Schema::create('disk', function(Blueprint $table)
        {
            $table->id();
            $table->string('disk_fullname', 100)->nullable(false);
            $table->string('disk_capacity', 50)->nullable(false);
            $table->string('disk_interface', 50)->nullable(false);
            $table->string('disk_format', 50)->nullable(false);
            $table->string('disk_read_speed', 50)->nullable(false);
            $table->string('disk_write_speed', 50)->nullable(false);
            $table->decimal('disk_price', 10, 2)->nullable(false);
            $table->string('disk_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\DiskDataSeeder())->run();

        Schema::create('gpu', function(Blueprint $table)
        {
            $table->id();
            $table->string('gpu_fullname', 100)->nullable(false);
            $table->string('gpu_connector', 50)->nullable(false);
            $table->string('gpu_memory', 50)->nullable(false);
            $table->string('gpu_memory_bus', 50)->nullable(false);
            $table->string('gpu_timing', 50)->nullable(false);
            $table->string('gpu_charger', 50)->nullable(false);
            $table->string('gpu_outputs', 50)->nullable(false);
            $table->decimal('gpu_price', 10, 2)->nullable(false);
            $table->string('gpu_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\GpuDataSeeder())->run();

        Schema::create('motherboard', function(Blueprint $table)
        {
            $table->id();
            $table->string('mb_fullname', 100)->nullable(false);
            $table->string('mb_format', 50)->nullable(false);
            $table->string('mb_socket', 50)->nullable(false);
            $table->string('mb_chipset', 50)->nullable(false);
            $table->string('mb_supported_processors', 100)->nullable(false);
            $table->decimal('mb_price', 10, 2)->nullable(false);
            $table->string('mb_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\MotherboardDataSeeder())->run();

        Schema::create('psu', function(Blueprint $table)
        {
            $table->id();
            $table->string('psu_fullname', 100)->nullable(false);
            $table->string('psu_power', 50)->nullable(false);
            $table->string('psu_standard', 50)->nullable(false);
            $table->string('psu_efficiency', 50)->nullable(false);
            $table->string('psu_certificate', 50)->nullable(false);
            $table->decimal('psu_price', 10, 2)->nullable(false);
            $table->string('psu_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\PsuDataSeeder())->run();

        Schema::create('ram', function(Blueprint $table)
        {
            $table->id();
            $table->string('ram_fullname', 100)->nullable(false);
            $table->string('ram_type_of_memory', 50)->nullable(false);
            $table->string('ram_total_capacity', 50)->nullable(false);
            $table->string('ram_capacity', 50)->nullable(false);
            $table->string('ram_frequency', 50)->nullable(false);
            $table->string('ram_cycle_latency', 10, 2)->nullable(false);
            $table->decimal('ram_price', 10, 2)->nullable(false);
            $table->string('ram_image_path', 100)->nullable(false);
        });
        (new \Database\Seeders\RamDataSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case');
        Schema::dropIfExists('cpu');
        Schema::dropIfExists('disk');
        Schema::dropIfExists('gpu');
        Schema::dropIfExists('motherboard');
        Schema::dropIfExists('psu');
        Schema::dropIfExists('ram');
    }
};
