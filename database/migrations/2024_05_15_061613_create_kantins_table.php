<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemasok');
            $table->enum('jenis_barang', ['makanan', 'minuman']);
            $table->string('nama_barang');
            $table->decimal('harga', 10, 2);
            $table->integer('jumlah');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantins');
    }
}
