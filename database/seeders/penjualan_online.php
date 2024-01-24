<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class penjualan_online extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(
            array(
            
            ['ID_Produk' => '5021',
            'Nama_Produk' => 'Dildking',
            'Deskripsi' => 'Dildking adalah sebuah alat untuk kamu bisa merasakan hal lebih dewasa, dengan kemampuan sodok menyodok yang kuat, dildking adalah stick blliard yang laku di seluruh dunia!!!',
            'Harga' => 100000.00,
            'Stok' => '526',],

            ['ID_Produk' => '2122',
            'Nama_Produk' => 'meja bliard',
            'Deskripsi' => 'meja buatan jerman dengan bahan kuat kokoh dengan kualitas melebihi bintang 5 namun dengan harga kaki lima',
            'Harga' => 899000.00,
            'Stok' => '526',],

           [ 'ID_Produk' => '8812',
            'Nama_Produk' => 'sarung tangan bliard',
            'Deskripsi' => 'sarung tangan elastis dan licin dengan harga murah',
            'Harga' => 5000.00,
            'Stok' => '300',]

        ));

        DB::table('pelanggan')->insert([
            'ID_Pelanggan' => '92019',
            'Nama_Pelanggan' => 'Hasyim Al Hamdy',
            'Alamat' => 'SMK TELKOM MAKASSAR',
            'Nomor_telepon' => '+6288218912',
            'Email' => 'Hasiysim@gmail.com',
        ]);

        DB::table('pesanan')->insert([
            'id_Pesanan' => '127821',
            'Tanggal_Pemesenan' => '2024-05-24',
            'total_harga' => '100000.00',
            'Harga' => '10000.00',
            'status_pesanan' => 'lunas',
        ]);

        DB::table('pembayaran')->insert([
            'id_pembayaran' => '1212132',
            'metode_pembayaran' => 'Cash on Deliperi',
            'tanggal_pembayaran' => '2024-05-10',
            'total_pembayaran' => '10000.00',
     
        ]);

        DB::table('detail_pesanan')->insert([
            'id_detail_pesanan' => '989182',
            'Jumlah' => '54',
            'total_harga' => '100000.00',
            'Harga_satuan' => '10000.00',
            'subtotal' => '14500.00',
        ]);

        DB::table('pengiriman')->insert([
            'id_pengiriman' => '12182',
            'alamat_pengirirman' => 'SMK TELKOM MAKASSAR',
            'nomor_pelacakan' => 'AcDf32',
            'status_pengiriman' => '1aCDF112',

        ]);

        DB::table('kategori')->insert([
            'id_kategori' => '211982',
            'Nama_kategori' => 'bliard',
        ]);

        DB::table('ulasan_pelanggan')->insert([
            'id_ulasan' => '12112',
            'ulasan' => 'KEREN BANGET',
            'peringkat' => '1',
        ]);
    }
}
