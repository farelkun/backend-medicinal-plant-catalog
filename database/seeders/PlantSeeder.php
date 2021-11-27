<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id"=> "1",
                "name"=> "Pulai",
                "latin_name"=> "Alstonia scholaris R. Br.",
                "efficacy"=> "Sakit Gigi dan Asma(Poso)",
                "description"=>
                    "Sakit gigi => Getah diambil dengan cara batang pohon diteres kemudian ditaruh pada kapas dan selanjutnya ditempelkan pada gigi yang sakit. Asma => Kulit batang dikeringkan kemudian ditumbuk sampai halus, diambil sebanyak 1 ± 2 sendok kemudian disiram dengan air panas. Setelah hangat diminum setiap pagi. Untuk lebih mengenal pohon ini d",
                "family"=> "Apocynadeae",
                "image"=> "assets/images/tanaman-obat/pulai.png"
            ],
              [
                "id"=> "2",
                "name"=> "Jambu Biji",
                "latin_name"=> "Psidium quajava",
                "family"=> "Myrtaceae",
                "efficacy"=> "Sakit Perut",
                "description"=>
                    "Bagian yang berfungsi sebagai obat adalah daun yang masih muda. Caranya diambil daun yang masih muda atau segar sebanyak 5 lembar, kemudian dicuci selanjutnya direbus. Dapat juga direndam dengan air panas selama 15 ± 20 menit, diminum 3 kali sehari. Selain itu dapat juga dilakukan dengan cara memakan langsung daun muda (pucuk) sebanyak 3 helai.",
                "image"=> "assets/images/tanaman-obat/jambu-biji.jpg"
              ],
              [
                "id"=> "3",
                "name"=> "Jeruk Nipis",
                "latin_name"=> "Citrus sp",
                "family"=> "Rutaceae",
                "efficacy"=> "Obat batuk",
                "description"=>
                    "Buah diperas airnya kedalam gelas kemudian ditambahkan dengan garam dan gula pasir secukupnya. Diminum setiap pagi.",
                "image"=> "assets/images/tanaman-obat/jeruk-nipis.jpg"
              ],
              [
                "id"=> "4",
                "name"=> "Mahoni",
                "latin_name"=> "Swietenia mahagoni",
                "family"=> "Meliaceae",
                "efficacy"=> "Obat Malaria",
                "description"=>
                    "Buah mahoni dikupas lalu dibelah dan dikeluarkan bijinya. Setelah itu ditumbuk sampai halus dan ditambahkan dengan air matang sedikit, kemudian diminum. Selain itu dapat juga dimakan langsung bila tahan karena rasanya sangat pahit.",
                "image"=> "assets/images/tanaman-obat/mahoni.jpg"
              ],
              [
                "id"=> "5",
                "name"=> "Mangga Serat",
                "latin_name"=> "Mangifera indica",
                "family"=> "Anacardiaceae",
                "efficacy"=> "Sakit Perut (sembelit)",
                "description"=>
                    "Kulit batang dari mangga serat diambil, kemudian dibersihkan dan dipukul-pukul dan selanjutnya direbus. Hasil dari rebusan ini (airnya) diminum 2 kali sehari. ",
                "image"=> "assets/images/tanaman-obat/mangga-serat.jpg"
              ],
              [
                "id"=> "6",
                "name"=> "Angsana",
                "latin_name"=> "Pterocarpus indicus",
                "family"=> "Fabaceae",
                "efficacy"=> "Panas Dalam",
                "description"=>
                    "Getah diambil dengan cara meneres batang dan langsung diminum.",
                "image"=> "assets/images/tanaman-obat/angsana.jpg"
              ],
              [
                "id"=> "7",
                "name"=> "Kayu Putih",
                "latin_name"=> "Melaleuca leucadendrom",
                "family"=> "Myrtaceae",
                "efficacy"=> "Obat flu",
                "description"=>
                    "Daun diremas-remas (digosok dengan tangan) kemudian dicium.",
                "image"=> "assets/images/tanaman-obat/kayu-putih.jpg"
              ],
              [
                "id"=> "8",
                "name"=> "Kayu Raja",
                "latin_name"=> " Cassia fistula",
                "family"=> "Fabaceae",
                "efficacy"=> "Penyakit kusta",
                "description"=>
                    "Bagian dari pohon ini yang dijadikan sebagai obat untuk penyakit kusta adalah daun dan buah. Cara meramunya: ambil daun dan buah yang segar, dicuci sampai bersih dan iris/dirajang kemudian dimasukkan kedalam mangkok dan ditambahkan dengan air dingin. Airnya ini dipakai untuk membasuh badan setelah mandi setiap pagi dan sore. ",
                "image"=> "assets/images/tanaman-obat/kayu-raja.jpg"
              ],
              [
                "id"=> "9",
                "name"=> "Sirsak",
                "latin_name"=> "Annona muricata L",
                "family"=> "Annonaceae",
                "efficacy"=> "Demam (untuk anak-anak) ",
                "description"=>
                    "Bagian tanaman yang dipergunakan sebagai obat adalah daun. Caranya: daun yang muda dan masih segar diambil sebanyak 5 ± 8 lembar, kemudian ditempelkan pada kepala anak-anak",
                "image"=> "assets/images/tanaman-obat/sirsak.jpg"
              ],
              [
                "id"=> "10",
                "name"=> "Kelapa",
                "latin_name"=> "Cocos nucifera",
                "family"=> "Arecaceae",
                "efficacy"=> "Keracunan / alergi",
                "description"=>
                    "Bagian dari tanaman ini yang dijadikan sebagai obat adalah buah. Caranya: dimabil buah kelapa yang masih muda, kemudian dikupas dan diambil airnya dan langsung diminum.",
                "image"=> "assets/images/tanaman-obat/kelapa.jpeg"
              ],
              [
                "id"=> "11",
                "name"=> "Tapak Kuda",
                "latin_name"=> "Centella asiatica",
                "efficacy"=> "Obat Tipes",
                "description"=>
                    "Masyarakat setempat menggunakan tanaman ini sebagai obat tipes dengan cara: tapak kuda dicabut dan diambil sampai pada akar-akarnya sebanyak 1 genggam. Dicuci dan direbus, setelah dingin diminum setiap pagi sebelum sarapan.",
                "family"=> "Umbelliferae",
                "image"=> "assets/images/tanaman-obat/tapak-kuda.png"
              ],
              [
                "id"=> "12",
                "name"=> "Galinggang",
                "latin_name"=> "Psidium quajava",
                "family"=> "Fabaceae",
                "efficacy"=> "Cassea alata",
                "description"=>
                    "Bagian dari tanaman ini yang dijadikan masyarakat sebagai obat adalah daun. Caranya: diambil daun yang masih muda dan segar kemudian ditumbuk sampai halus. Hasilnya ini langsung digosokkan pada bagian-bagian tubuh yang kena panu 1 kali sehari selama 3 hari, setiap sore sehabismandi. ",
                "image"=> "assets/images/tanaman-obat/galinggang.jpg"
              ],
              [
                "id"=> "13",
                "name"=> "Daun Salok",
                "latin_name"=> "=> Ficus sp.",
                "family"=> "Moraceae",
                "efficacy"=> "Obat Panas",
                "description"=>
                    "Tanaman ini termasuk jenis perdu, masyarakat setempat mengunakan sebagai obat panas atau demam. Caranya: diambil daun yang masih segar sebanyak 5 ± 8 lembar kemudian langsung ditempelkan pada kepala dan badan. ",
                "image"=> "assets/images/tanaman-obat/daun-salok.jpg"
              ],
              [
                "id"=> "14",
                "name"=> "Paliasak",
                "latin_name"=> "Clenhovia hospitalia",
                "family"=> "Sterculiaceae",
                "efficacy"=> "Tekanan Darah Tinggi",
                "description"=>
                    "Bagian yang berfungsi sebagai obat untuk menurunkan tekanan darah tinggi adalah daun. Cara pembuatannya: ambil 2 ± 3 lembar daun Klenhoria hospita yang segar, cuci sampai bersih dan rebus dengan 3 gelas air. Diminum 1 kali sehari.",
                "image"=> "assets/images/tanaman-obat/paliasak.png"
              ],
              [
                "id"=> "15",
                "name"=> "Aju Elalan",
                "latin_name"=> "Albizzia procera",
                "family"=> "Fabaceae",
                "efficacy"=> "Kudis(Akka' Kering)",
                "description"=>
                    "Bagian dari pohon ini yang digunakan sebagai obat adalah kulit batang. Caranya: ambil kulit batang yang segar secukupnya, tumbuk sampai hancur dan tambahkan garam secukupnya. Hasilnya ini digosokkan pada bagian yang sakit sampai sembuh.",
                "image"=> "assets/images/tanaman-obat/aju-elalan.png"
              ]
        ];
        Plant::insert($data);
    }
}
