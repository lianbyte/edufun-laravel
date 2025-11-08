<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Data Science Articles (Category ID: 1, Writer: Bia Mecca Annisa - ID: 2)
        Article::create([
            'category_id' => 1,
            'writer_id' => 2,
            'title' => 'Apa itu Machine Learning? Beserta Pengertian dan Cara Kerjanya',
            'excerpt' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...',
            'content' => 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.

Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.

Machine learning merupakan cabang dari artificial intelligence (AI) yang fokus pada penggunaan data dan algoritma untuk meniru cara manusia belajar, dengan tujuan untuk meningkatkan akurasi secara bertahap.',
            'image' => 'machine-learning.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);

        Article::create([
            'category_id' => 1,
            'writer_id' => 2,
            'title' => 'Mengenal Deep Learning Lebih Jelas',
            'excerpt' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...',
            'content' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak manusia. Struktur tersebut dinamakan Artificial Neural Network atau jaringan saraf tiruan. Deep learning adalah metode machine learning yang mengajarkan komputer untuk melakukan hal yang sudah menjadi sifat alami manusia, yaitu belajar dari pengalaman.

Model deep learning dapat mencapai akurasi yang tinggi, bahkan terkadang melebihi kemampuan manusia. Model ini dilatih dengan menggunakan kumpulan data yang besar dan arsitektur jaringan neural yang memiliki banyak lapisan.

Deep learning telah menjadi teknologi kunci di balik banyak aplikasi modern seperti pengenalan wajah, mobil otonom, asisten virtual, dan banyak lagi. Kemampuannya untuk memproses data dalam jumlah besar dan menemukan pola yang kompleks membuatnya sangat powerful.',
            'image' => 'deep-learning.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);

        Article::create([
            'category_id' => 1,
            'writer_id' => 2,
            'title' => 'Natural Language Processing',
            'excerpt' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...',
            'content' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan bahasa natural atau bahasa yang digunakan manusia sehari-hari. NLP memungkinkan komputer untuk memahami, menginterpretasi, dan menghasilkan bahasa manusia dengan cara yang bermakna.

Teknologi NLP digunakan dalam berbagai aplikasi seperti chatbot, penerjemah bahasa, analisis sentimen, dan sistem tanya jawab otomatis. NLP menggabungkan linguistik komputasional dengan machine learning dan deep learning untuk memproses teks dan data suara.

Beberapa tugas umum dalam NLP meliputi tokenisasi, part-of-speech tagging, named entity recognition, sentiment analysis, dan machine translation. Dengan kemajuan deep learning, NLP telah mencapai tingkat akurasi yang sangat tinggi dalam berbagai tugas.',
            'image' => 'nlp.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);

        // Network Security Articles (Category ID: 2, Writer: Abi Firmansyah - ID: 3)
        Article::create([
            'category_id' => 2,
            'writer_id' => 3,
            'title' => 'Apa itu Network Security?',
            'excerpt' => 'Keamanan jaringan (network security) terdiri dari kebijakan dan praktik untuk mencegah dan memantau akses yang tidak sah...',
            'content' => 'Keamanan jaringan (network security) terdiri dari kebijakan dan praktik untuk mencegah dan memantau akses yang tidak sah, penyalahgunaan, modifikasi, atau penolakan jaringan komputer dan sumber daya yang dapat diakses jaringan.

Network security melibatkan otorisasi akses ke data dalam jaringan, yang dikendalikan oleh administrator jaringan. Pengguna memilih atau diberi ID dan kata sandi atau informasi autentikasi lainnya yang memungkinkan mereka mengakses informasi dan program dalam wewenang mereka.

Keamanan jaringan mencakup berbagai teknologi, perangkat, dan proses. Dalam istilah yang paling sederhana, ini adalah serangkaian aturan dan konfigurasi yang dirancang untuk melindungi integritas, kerahasiaan, dan aksesibilitas jaringan komputer dan data menggunakan teknologi perangkat lunak dan perangkat keras.',
            'image' => 'network-security.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);

        Article::create([
            'category_id' => 2,
            'writer_id' => 3,
            'title' => 'Software Security: Pengertian dan Implementasinya',
            'excerpt' => 'Software security adalah praktik untuk membangun software yang tetap berfungsi dengan benar meskipun di bawah serangan...',
            'content' => 'Software security adalah praktik untuk membangun software yang tetap berfungsi dengan benar meskipun di bawah serangan berbahaya. Ini melibatkan pemikiran tentang keamanan selama seluruh siklus pengembangan software, dari desain hingga deployment.

Keamanan software mencakup berbagai aspek seperti validasi input, autentikasi dan otorisasi yang kuat, enkripsi data, penanganan error yang aman, dan logging yang tepat. Pengembang harus memahami berbagai jenis serangan seperti SQL injection, cross-site scripting (XSS), dan buffer overflow.

Best practices dalam software security termasuk mengikuti prinsip least privilege, defense in depth, fail securely, dan security by design. Regular security testing dan code review juga penting untuk mengidentifikasi dan memperbaiki kerentanan sebelum software di-deploy.',
            'image' => 'software-security.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);

        Article::create([
            'category_id' => 2,
            'writer_id' => 3,
            'title' => 'Popular Network Technology',
            'excerpt' => 'Teknologi jaringan terus berkembang untuk memenuhi kebutuhan konektivitas modern...',
            'content' => 'Teknologi jaringan terus berkembang untuk memenuhi kebutuhan konektivitas modern. Beberapa teknologi jaringan populer saat ini termasuk 5G, Software-Defined Networking (SDN), Network Function Virtualization (NFV), dan Internet of Things (IoT).

5G adalah generasi kelima dari teknologi seluler yang menawarkan kecepatan yang jauh lebih tinggi, latensi yang lebih rendah, dan kapasitas yang lebih besar dibandingkan dengan 4G. SDN memisahkan control plane dari data plane, memungkinkan manajemen jaringan yang lebih fleksibel dan terpusat.

NFV menggunakan virtualisasi untuk menjalankan fungsi jaringan pada hardware standar, mengurangi ketergantungan pada perangkat keras khusus. IoT menghubungkan miliaran perangkat ke internet, menciptakan ekosistem yang saling terhubung yang menghasilkan data dalam jumlah besar.',
            'image' => 'network-technology.jpg',
            'views' => $faker->numberBetween(100, 500)
        ]);
    }
}
