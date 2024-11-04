<?php

namespace Database\Seeders;

use App\Models\WritersModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Mengambil ID kategori berdasarkan nama
        $categoryIds = DB::table('categories')->pluck('id', 'name')->toArray();
        $dataScienceWriterIds = WritersModel::where("speciality", "Data Science")->pluck("id")->toArray();
        $networkSecurityWriterIds = WritersModel::where("speciality", "Network Security")->pluck("id")->toArray();
        DB::table('articles')->insert([
            // Kategori Data Science
            [
                'title' => 'Machine Learning',
                'content' => 'Machine learning adalah cabang dari kecerdasan buatan yang berfokus pada pengembangan algoritma dan model yang memungkinkan komputer untuk belajar dari data dan meningkatkan kinerjanya tanpa perlu diprogram secara eksplisit. Pada dasarnya, mesin atau model machine learning mengidentifikasi pola dalam data yang diberikan, sehingga dapat membuat prediksi atau keputusan yang lebih baik di masa mendatang. Metode ini kini digunakan dalam berbagai aplikasi, mulai dari sistem rekomendasi produk hingga pengenalan suara dan wajah.',
                'date' => $faker->date(),
                'image' => 'https://itbox.id/wp-content/uploads/2023/03/Machine-Learning.jpeg', // Ganti dengan URL gambar yang relevan
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Data Science'],
                'writer_id' => $faker->randomElement($dataScienceWriterIds),
            ],
            [
                'title' => 'Deep Learning',
                'content' => 'Deep learning adalah subset dari machine learning yang menggunakan jaringan saraf tiruan yang lebih kompleks untuk memproses data dengan cara yang mirip dengan otak manusia. Jaringan saraf ini terdiri dari banyak lapisan (layer) yang saling terhubung, memungkinkan model deep learning untuk mengenali pola yang lebih mendalam dan abstrak. Teknologi ini memainkan peran penting dalam kemajuan kecerdasan buatan, terutama dalam pengenalan gambar, pemrosesan bahasa alami, dan pengenalan suara.',
                'date' => $faker->date(),
                'image' => 'https://cdn.prod.website-files.com/6100d0111a4ed76bc1b9fd54/62a16685ece5ac446ef6507b_deep%20learning%203.jpeg',
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Data Science'],
                'writer_id' => $faker->randomElement($dataScienceWriterIds),
            ],
            [
                'title' => 'Natural Language Processing',
                'content' => 'Natural Language Processing (NLP) adalah bidang dalam kecerdasan buatan yang berfokus pada interaksi antara komputer dan bahasa manusia. Teknologi NLP memungkinkan komputer untuk memahami, menginterpretasi, dan menghasilkan bahasa alami yang digunakan manusia sehari-hari. Ini mencakup berbagai aplikasi, mulai dari penerjemahan otomatis hingga analisis sentimen di media sosial.',
                'date' => $faker->date(),
                'image' => 'https://media.geeksforgeeks.org/wp-content/uploads/20240524132640/nlp-banner.webp',
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Data Science'],
                'writer_id' => $faker->randomElement($dataScienceWriterIds),
            ],

            // Kategori Network Security
            [
                'title' => 'Software Security',
                'content' => 'Keamanan perangkat lunak (software security) adalah praktik untuk melindungi perangkat lunak dari ancaman dan kerentanan yang dapat dieksploitasi oleh pihak yang tidak bertanggung jawab. Dalam era digital yang semakin berkembang, menjaga keamanan perangkat lunak menjadi semakin penting, terutama dengan meningkatnya ancaman siber. Praktik-praktik ini mencakup proses pengujian keamanan, enkripsi data, dan autentikasi pengguna yang ketat.',
                'date' => $faker->date(),
                'image' => 'https://www.techopedia.com/wp-content/uploads/2011/07/Software-Security.jpg',
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Network Security'],
                'writer_id' => $faker->randomElement($networkSecurityWriterIds),
            ],
            [
                'title' => 'Network Administration',
                'content' => 'Administrasi jaringan adalah praktik yang melibatkan pengaturan, pemeliharaan, dan pengelolaan jaringan komputer untuk memastikan ketersediaan dan keamanan layanan jaringan. Administrator jaringan bertanggung jawab untuk memastikan bahwa jaringan berjalan dengan lancar, termasuk pemeliharaan perangkat keras jaringan, instalasi perangkat lunak, serta pemantauan aktivitas jaringan untuk mendeteksi anomali atau potensi masalah.',
                'date' => $faker->date(),
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFz1VyBNgoeY7Wyp_nnEu498VPUBmhiEox0A&s',
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Network Security'],
                'writer_id' => $faker->randomElement($networkSecurityWriterIds),
            ],
            [
                'title' => 'Popular Network Technology',
                'content' => 'Teknologi jaringan yang populer saat ini mencakup berbagai perkembangan yang memungkinkan komunikasi lebih cepat dan lebih aman antara perangkat di seluruh dunia. Salah satu contohnya adalah teknologi 5G, yang menjanjikan kecepatan transfer data yang jauh lebih tinggi dan latensi yang lebih rendah dibandingkan generasi sebelumnya. Selain itu, ada juga teknologi seperti SD-WAN (Software-Defined Wide Area Network) yang memungkinkan manajemen jaringan lebih fleksibel dan efektif.',
                'date' => $faker->date(),
                'image' => 'https://collectionperformance.com/wp-content/uploads/2023/12/top-10-networking-technology-1.jpg',
                'total_views' => $faker->numberBetween(100, 1000),
                'category_id' => $categoryIds['Network Security'],
                'writer_id' => $faker->randomElement($networkSecurityWriterIds),
            ],
        ]);
    }
}
