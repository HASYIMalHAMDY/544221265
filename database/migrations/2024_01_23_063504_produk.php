    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('produk', function (Blueprint $table) {
                $table->id('ID_Produk');
                $table->string('Nama_Produk');
                $table->text('Deskripsi');
                $table->float('Harga');
                $table->integer ('Stok');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            //
        }
    };
