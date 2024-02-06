<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cars;
use App\Models\Categories;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
        User::factory(10)->create();

        Cars::create([
            'carBrand' => 'Nissan',
            'carModel' => 'March',
            'slug' => 'nissanMarch',
            'carInformation' => 'Juga terdapat versi sporty yaitu March R, March Turbo, dan March Super Turbo. Mobil ini ditujukan untuk mengisi pasar yang ditinggalkan Nissan Cherry karena ukuran Cherry yang semakin besar. Diperkenalkan di pasar Eropa tahun 1983 dan Kanada tahun 1984. Meski Nissan saat itu juga perlahan-lahan menghilangkan nama Datsun, ada logo kecil "Datsun" (ダットサン, Dattosan) di bagian bumper belakang selama 2 tahun pertama mobil ini. Di Eropa, mobil ini pun dikenal dengan nama "Datsun-Nissan Micra". Nama Datsun sendiri menghilang dari pasaran secara penuh tahun 1984.',
            'image' => 'nissanMarch.jpg',
            'category_id' => '3',
            'user_id' => '1'
        ]);

        Cars::create([
            'carBrand' => 'Suzuki',
            'carModel' => 'Karimun',
            'slug' => 'suzukiKarimun',
            'carInformation' => 'Suzuki Karimun Estilo (di Jepang bernama MR Wagon) adalah mobil kecil yang diproduksi oleh Suzuki. Mobil ini juga dipasarkan di Jepang oleh Nissan sebagai Nissan Moco dengan perjanjian. Mobil ini kemudian juga dijual di India oleh Maruti Suzuki sebagai Maruti Zen Estilo tahun 2006. Suzuki Karimun Estilo yang dipasarkan di Indonesia adalah produk CBU yang didatangkan utuh dari India yang diproduksi oleh Maruti Suzuki.',
            'image' => 'suzukiKarimun.jpg',
            'category_id' => '3',
            'user_id' => '2'
        ]);

        Cars::create([
            'carBrand' => 'Honda',
            'carModel' => 'Brio',
            'slug' => 'HondaBrio',
            'carInformation' => 'Pada tanggal 11 September 2013, PT. HPM meluncurkan dua varian baru Honda Brio bermesin 1.200cc yaitu tipe 1.2L Automatic dan Satya. Untuk varian 1.2L AT tetap tersedia dalam 2 tipe yaitu S dan E. Bersamaan dengan dua varian baru bermesin 1.200cc tersebut, varian 1.3L E CBU Thailand menjadi varian edisi terbatas Brio Sports sebelum varian bermesin 1.300cc dihentikan penjualannya pada bulan Desember 2013.',
            'image' => 'hondabrio.jpg',
            'category_id' => '3',
            'user_id' => '3'

        ]);

        Cars::create([
            'carBrand' => 'Hyundai',
            'carModel' => 'Creta',
            'slug' => 'hyundaiCreta',
            'carInformation' => 'Hyundai Creta, juga dikenal sebagai Hyundai ix25 di Tiongkok, adalah mobil yang diproduksi oleh Hyundai sejak 2014 terutama untuk pasar berkembang, khususnya BRICS. Sebuah SUV crossover subkompak, diposisikan di bawah Tucson dalam jajaran SUV Hyundai. Model generasi pertama memulai debutnya sebagai mobil konsep yang hampir diproduksi di China pada April 2014, sedangkan generasi kedua pertama kali diperkenalkan pada 2019.',
            'image' => 'hyundaiCreta.jpg',
            'category_id' => '1',
            'user_id' => '4'
        ]);

        Cars::create([
            'carBrand' => 'Hyundai',
            'carModel' => 'Santa Fe',
            'slug' => 'hyundaiSantaFe',
            'carInformation' => 'Hyundai Santa Fe  adalah crossover SUV mid-size yang basisnya diambil dari Hyundai Sonata. Namanya diambil dari kota Santa Fe, New Mexico, Amerika Serikat. Mobil ini pertama kali diperkenalkan tahun 2001 sebagai SUV pertama Hyundai, dirilis bersamaan dengan peluncuran Ford Escape/Mazda Tribute dan Pontiac Aztek. Meski pernah dikritisi oleh para jurnalis otomotif di AS bahwa tampangnya kurang menarik, SUV ini sangat laris di Amerika Serikat. Begitu populernya, sampai-sampai Hyundai kewalahan dalam memasok permintaan. Dengan cepat, Santa Fe menjadi mobil terlaris Hyundai dan berkontribusi pada kesuksesan Hyundai di Amerika Serikat.',
            'image' => 'hyundaiSantaFe.jpg',
            'category_id' => '1',
            'user_id' => '5'
        ]);

        Cars::create([
            'carBrand' => 'Toyota',
            'carModel' => 'Fortuner',
            'slug' => 'toyotaFortuner',
            'carInformation' => 'Toyota Fortuner adalah mobil SUV dari produsen asal Jepang, Toyota. Mobil ini telah dipasarkan sejak tahun 2005 di Indonesia dan negara Asia Tenggara lainnya. Mobil ini dibuat berdasarkan platform IMV yang terdiri dari Toyota Hilux atau disebut juga dengan Toyota Hilux Vigo di Thailand, dan Toyota Kijang Innova di Indonesia. Pada awalnya mobil ini dirakit di Thailand dan diimpor utuh (Completely Built Up) oleh Toyota-Astra Motor (TAM), namun pada awal tahun 2007, Toyota Fortuner sudah dirakit dalam bentuk terurai (Completely Knock-Down) di Indonesia dan terhitung sejak tahun 2010 menyusul ditutupnya salah satu pabrik perakitan Toyota di Bangkok maka proses perakitan Fortuner versi mesin bensin dialihkan ke Toyota Indonesia.[1] Di Amerika Selatan, Fortuner dijual dengan nama Hilux SW4.',
            'image' => 'toyotaFortuner.jpg',
            'category_id' => '1',
            'user_id' => '6'
            
        ]);

        Cars::create([
            'carBrand' => 'Nissan',
            'carModel' => 'Serena',
            'slug' => 'nissanSerena',
            'carInformation' => 'Model ini diproduksi di Jepang dari tahun 1991 dan seterusnya, dan banyak yang diimpor ke Australasia dan Inggris. Nissan menghasilkan banyak trim level yang berbeda - FX, SX dll Full-Auto (full-time) versi 4WD juga diproduksi dengan stabilitas yang lebih baik. Mesin diesel 2.3 liter tidak pernah dipasarkan di Jepang, pengaturan tempat duduk dan alat kelengkapan interiornya juga tidak sama dengan mesin bensin 2.0 liter (SR20DE), Diesel 2.0 liter (CD20) dan Turbo Diesel 2.0 liter (CD20T) model yang diproduksi di Jepang untuk pasar lokal. Itu eksklusif untuk dealer Nissan Jepang bernama Nissan Bluebird Store.',
            'image' => 'nissanSerena.jpg',
            'category_id' => '2',
            'user_id' => '7'
        ]);

        Cars::create([
            'carBrand' => 'Honda',
            'carModel' => 'Odyssey',
            'slug' => 'hondaOdyssey',
            'carInformation' => 'Odyssey awalnya telah disusun dan dibuat di Jepang, di bangun dari negara krisis ekonomi tahun 1990-an – yang pada gilirannya dikenakan parah kendala pada ukuran kendaraan dan konsep keseluruhan, mendikte mobils pembuatan di fasilitas yang sudah ada dengan sedikit modifikasi.[1] hasilnya adalah minivan yang lebih kecil, dalam Compact MPV kelas, yang diterima dengan baik di pasar domestik Jepang dan kurang diterima dengan baik di Amerika Utara.[2] generasi pertama Odyssey yang dipasarkan di Eropa seperti Honda Shuttle.',
            'image' => 'hondaOdyssey.jpg',
            'category_id' => '2',
            'user_id' => '8'
        ]);

        Cars::create([
            'carBrand' => 'Toyota',
            'carModel' => 'Agya',
            'slug' => 'toyotaAgya',
            'carInformation' => 'Toyota Agya adalah kereta bandar yang dirancang oleh Daihatsu. Kereta ini dihasilkan di Indonesia. Daihatsu merancang dan menghasilkan kereta ini, yang kemudian dijual sebagai Daihatsu Ayla dan Toyota Agya. Daihatsu membekalkan kereta ini untuk Toyota di bawah konsinyasi pengeluaran dan perjanjian pembuatan OEM. Kereta ini dipaparkan pertama kali di Indonesia International Motor Show 2012. Penjualannya sudah bermula sejak dilancarkan tarikh 9 September 2013 kerana sudah melepasi ujian LCGC (Low Cost Green Car) dari kerajaan. Nama "Agya" diambil dari kata Sanskrit, yang bererti "cepat".',
            'image' => 'toyotaAgya.jpg',
            'category_id' => '3',
            'user_id' => '9'
        ]);

        Cars::create([
            'carBrand' => 'Daihatsu',
            'carModel' => 'Ayla',
            'slug' => 'daihatsuAyla',
            'carInformation' => 'Daihatsu Ayla adalah mobil kota (city car) yang dirancang oleh Daihatsu dan diproduksi di Indonesia untuk pasar domestik. Daihatsu merancang dan memproduksi mobil ini, yang kemudian dijual sebagai Daihatsu Ayla dan Toyota Agya. Daihatsu memasok mobil ini untuk Toyota di bawah konsinyasi produksi dan perjanjian manufaktur OEM. Mobil ini ditampilkan pertama kali di Indonesia International Motor Show 2012. Produksi mobil ini dimulai pada tanggal 26 Agustus 2013 di pabrik Daihatsu Karawang. Penjualannya sudah dimulai sejak diluncurkan pada tanggal 9 September 2013 karena sudah melewati tes LCGC (Low Cost Green Car) dari pemerintah. Nama "Ayla" diambil dari kata Sanskerta yang berarti "cahaya", sedangkan "Agya" berarti "cepat".',
            'image' => 'daihatsuAyla.jpg',
            'category_id' => '3',
            'user_id' => '10'
        ]);

     



        

        Categories::create([
            'nameCategory' => 'SUV'
        ]);
        Categories::create([
            'nameCategory' => 'MPV'
        ]);
        Categories::create([
            'nameCategory' => 'LCGC'
        ]);





        
        
    }
}
