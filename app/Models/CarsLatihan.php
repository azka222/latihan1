<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars 
{
    private static $cars_data = [
        [
            "brand" => "Toyota",
            "model" => "Innova",
            "slug" => "toyotaInnova",
            "image" => "toyotaInnovaImage.jpg",
            "text" => "Toyota Kijang Innova adalah sebuah mobil berjenis MPV yang diproduksi oleh Toyota sejak tahun 2004, 
            utamanya dijual dengan tiga baris kursi. Di negara lain, mobil ini hanya disebut Toyota Innova. Kijang Innova pertama 
            kali diluncurkan pada tahun 2004 sebagai generasi kelima dari keluarga Toyota Kijang. Untuk generasi kedua, mobil ini 
            dikenal sebagai Toyota Innova Crysta di India dan Thailand. Untuk generasi ketiga, mobil ini dikenal di Indonesia sebagai 
            Toyota Kijang Innova Zenix, di India sebagai Toyota Innova HyCross, di Filipina sebagai Toyota Zenix, dan di Vietnam sebagai 
            Innova Cross.",
        ],
        [
            "brand" => "Toyota",
            "model" => "Avanza",
            "slug" => "toyotaAvanza",
            "image" => "toyotaAvanzaImage.jpg",
            "text" => "Avanza dan Xenia mulai digagas oleh Toyota, Daihatsu, dan anak perusahaan mereka di Indonesia di saat terjadinya krisis 
            keuangan Asia pada tahun 1997. Pada waktu itu, harga dari Toyota Kijang yang sangat laris sudah meroket jauh, di saat keadaan ekonomi 
            negara tersebut baru saja membaik dari krisis. Studi kelayakan pun dimulai pada tahun 1999 ketika Toyota Astra Motor mengajukan kendaraan 
            yang lebih terjangkau di bawah Kijang untuk pasar Indonesia. Toyota Motor Corporation memercayakan pengembangan dan produksi kendaraan ini 
            kepada Astra Daihatsu Motor karena kemahirannya dalam membuat kendaraan berbiaya rendah di Indonesia. Toyota dan Daihatsu menginvestasikan 
            biaya total US$90.000.000 untuk proyek ini.",
        ],
        [
            "brand" => "Honda",
            "model" => "HRV",
            "slug" => "hondaHRV",
            "image" => "hondaHRVImage.jpg",
            "text" => "Honda HR-V adalah sebuah mobil SUV mini yang diproduksi oleh Honda pada tahun 1998 sampai 2006, lalu diluncurkan ulang dari tahun 
            2014 sampai sekarang sebagai merek dagang dari Honda Vezel untuk pasar global. Generasi pertama Honda HR-V berbasis dari Logo dan dijual di Jepang 
            dan beberapa negara di Asia-Pasifik dari tahun 1998 sampai 2006. Generasi kedua Honda HR-V berbasis dari Fit/Jazz generasi ketiga dan mulai dijual 
            di Amerika Serikat, Brasil, Australia, dan beberapa negara di Asia sejak tahun 2014. Generasi kedua HR-V hampir identik dengan Vezel (kode bodi RU5) 
            yang hanya dijual di Jepang sejak akhir tahun 2013.",
        ],
        [
            "brand" => "Honda",
            "model" => "Brio",
            "slug" => "hondaBrio",
            "image" => "hondaBrioImage.jpg",
            "text" => "Honda Brio diluncurkan di Indonesia pada bulan Agustus 2012, dengan harga ketika peluncuran berkisar antara 149-170 juta rupiah.[4] Saat itu, 
            Honda Brio didatangkan secara CBU dari Thailand dengan mesin 1.300cc dan tersedia dalam 2 tipe yaitu S dan E. Pada bulan Agustus 2013, Brio mulai dirakit 
            di Indonesia dengan kehadiran versi LGCC bernama Brio Satya.[5] Pada tanggal 11 September 2013, PT. HPM meluncurkan dua varian baru Honda Brio bermesin 1.200cc 
            yaitu tipe 1.2L Automatic dan Satya. Untuk varian 1.2L AT tetap tersedia dalam 2 tipe yaitu S dan E. Bersamaan dengan dua varian baru bermesin 1.200cc tersebut, 
            varian 1.3L E CBU Thailand menjadi varian edisi terbatas Brio Sports sebelum varian bermesin 1.300cc dihentikan penjualannya pada bulan Desember 2013.",
        ]
        ];

        public static function all(){
            return collect(self::$cars_data);
        }

        public static function findBrand($brand){
            $brand = static::all();
            return $brand->where('brand', $brand);
        }

        public static function findModel($model){
            $carsModel = static::all();
            return $carsModel->firstWhere('model', $model);
        }
}
