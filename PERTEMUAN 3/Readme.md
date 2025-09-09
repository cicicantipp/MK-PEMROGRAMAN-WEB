# ANALISIS BIOGRAFI
1. Bagian Awal HTML
```html
    <!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio CiciCantik</title>
    <style>
```

Bagian awal kode ini adalah deklarasi dokumen dan pengaturan dasar. !DOCTYPE html menandakan bahwa dokumen ini menggunakan HTML5. Atribut lang="id" menunjukkan bahwa bahasa utama halaman adalah Bahasa Indonesia. Tag meta charset="UTF-8" digunakan untuk mengatur encoding karakter agar karakter Indonesia dapat tampil dengan benar. Selanjutnya, meta name="viewport" content="width=device-width, initial-scale=1.0" membuat halaman menjadi responsif dan menyesuaikan tampilan di berbagai perangkat, termasuk HP. Tag title menentukan judul yang muncul di tab browser, sedangkan style digunakan untuk menaruh kode CSS langsung di dalam file HTML.

  
2. CSS Body
```html
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #000000, #000101);
    }
```

Bagian kode CSS ini mengatur tampilan keseluruhan halaman melalui tag body. Properti font-family: Arial, sans-serif; menentukan jenis huruf, yaitu Arial, dan jika Arial tidak tersedia, digunakan font sans-serif. margin: 0; dan padding: 0; berfungsi untuk menghapus jarak default dari tepi browser dan isi elemen body, sehingga halaman terlihat rapi. Sedangkan background: linear-gradient(135deg, #000000, #000101); memberi latar belakang gradasi gelap dari hitam ke hitam lebih gelap dengan sudut 135 derajat, sehingga halaman terlihat modern dan elegan.

3. Kontainer Utama
  ```html
    .container {
      display: flex;
      max-width: 900px;
      margin: 30px auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      overflow: hidden;
    }
```

.container adalah flex container yang membungkus seluruh isi halaman. Properti display: flex; membagi halaman menjadi dua kolom, yakni sidebar dan main content. max-width: 900px; membatasi lebar halaman agar tetap nyaman dibaca. margin: 30px auto; memusatkan container secara horizontal, sedangkan background: white;, border-radius: 10px;, dan box-shadow: 0 5px 15px rgba(0,0,0,0.2); memberi tampilan modern dengan efek bayangan dan sudut membulat. overflow: hidden; mencegah konten meluber keluar container.

4. Sidebar
 ```html
    .sidebar {
      width: 35%;
      background: #ff0f93;
      color: rgb(4, 0, 0);
      padding: 20px;
      text-align: center;
    }       
```
     
.sidebar adalah bagian kiri halaman yang menampilkan profil pengguna. Lebarnya 35% dari container. background: #ff0f93; memberi warna pink cerah, color: rgb(4, 0, 0); memberi warna teks gelap, padding: 20px; memberi jarak isi, dan text-align: center; membuat semua konten berada di tengah.

5. Foto Profil
```html
  .sidebar img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        border: 4px solid white;
        margin-bottom: 10px;
        animation: bounce 3s infinite;
    }
        @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
```

.sidebar img mengatur foto profil menjadi bulat dengan border-radius: 50%;, ukuran 130x130px, dan diberi border putih. Animasi bounce membuat foto bergerak naik-turun setiap 3 detik untuk memberi efek menarik.


6. Nama dan Motto
```html
        <h2>SUSI</h2>
        <p class="motto">"Ngoding itu seni, error itu tradisi"</p>
        .motto {
            font-style: italic;
            font-size: 14px;
            margin: 10px 0 20px;
            color: #222;
        }
 ```
    
.sidebar h2 menampilkan nama pengguna dengan margin rapi. .motto menampilkan kutipan/moto dengan font italic, ukuran kecil, dan warna gelap agar kontras dengan background pink.

7. Bagian Kontak dan Hobi
```html
        <div class="contact">
        <h3>Kontak</h3>
        <ul>
            <li>📧 iniciciiww@gmail.com</li>
            <li>📱 0813-5428-1882</li>
        </ul>
        </div>

        <div class="hobi">
            <h3>Hobi</h3>
            <ul>
            <li>📚 Membaca</li>
            <li>🏃 Olahraga</li>
            </ul>
        </div>

        .contact ul li, .hobi ul li {
            margin: 6px 0;
            padding: 6px 10px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.4);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact ul li:hover, .hobi ul li:hover {
            background: #c60d73;
            color: #000;
            transform: translateX(6px);
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
        }
```

Memanggil css dengan class,.contact dan .hobi menampilkan daftar kontak dan hobi secara rapi. List diatur tanpa bullet (list-style: none;), dengan padding dan margin minimal. Hover effect membuat elemen berubah warna, pindah sedikit ke kanan, dan menambahkan bayangan, sehingga interaktif.

8. Bagian Sosial Media
```html
    <!-- Memanggil css dengan class -->
        <div class="social-section">
            <h3>Sosial Media</h3>
            <div class="social-buttons">
            <a class="instagram" href="https://www.instagram.com/ciciianddays" target="_blank">Instagram</a>
            <a class="github" href="https://github.com/cicicantipp" target="_blank">GitHub</a>
            <a class="tiktok" href="https://www.tiktok.com/@iniciciwww" target="_blank">TikTok</a>
            </div>
        </div>
        </div>
    <!-- CSS -->
    .social-section {
      margin-top: 25px;
      text-align: center;
    }
    .social-section h3 {
      color: #ffd700;
      margin-bottom: 15px;
    }
    .social-buttons {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }
    .social-buttons a {
      text-decoration: none;
      padding: 8px 18px;
      border-radius: 25px;
      font-weight: bold;
      color: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .social-buttons a:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .instagram { background: linear-gradient(45deg, #feda75, #fa7e1e, #d62976, #962fbf, #b62121); }
    .github { background: #333; }
    .tiktok { background: linear-gradient(45deg, #69C9D0, #EE1D52, #000000); }
```

Bagian .social-section menampilkan tombol sosial media seperti Instagram, GitHub, dan TikTok. Properti display: flex; dan justify-content: center; membuat tombol sejajar secara horizontal dan berada di tengah, gap: 15px; memberi jarak antar tombol. Setiap tombol memiliki warna khas platform menggunakan background, misalnya Instagram memakai gradasi warna pelangi, GitHub hitam, dan TikTok gradasi biru-merah-hitam. Hover effect membuat tombol memperbesar sedikit (scale) dan memberi bayangan, sehingga terasa interaktif saat diklik. Tombol ini juga menggunakan border-radius: 25px; agar tampak bulat dan modern.

9. Main Content (Bagian Kanan)
 ```htm;
    .main {
            width: 65%;
            padding: 20px;
        }
```    
.main adalah bagian kanan halaman yang menampilkan informasi detail pengguna, termasuk tentang diri sendiri, data pribadi, dan pendidikan. Lebarnya 65% dari container dan diberi padding 20px agar teks tidak menempel ke tepi.

```html
    .main h3 {
        border-bottom: 2px solid #ff69b4;
        padding-bottom: 5px;
        color: #ff1493;
    }
```
.main h3 digunakan untuk menampilkan judul tiap bagian seperti "Tentang Saya", "Data Pribadi", da"Pendidikan". Properti border-bottom: 2px solid #ff69b4; menambahkan garis bawah berwarna pink untuk memberi penekanan, padding-bottom: 5px; memberi jarak antara teks dan garis, dan color: #ff1493; memberi warna teks pink tua agar judul lebih menonjol. Hal ini memudahkan pembaca membedakan tiap section secara visual.

```html
    .section {
        margin-bottom: 20px;
    }
```
 .section memberi jarak antar bagian dengan margin-bottom: 20px; agar setiap blok informasi tidak terlalu rapat dan lebih nyaman dibaca. Isi section berupa paragraf atau list yang menjelaskan informasi tentang pengguna, termasuk riwayat pendidikan, alamat, dan deskripsi singkat tentang minat serta tujuan pengguna. Struktur ini membuat halaman portofolio lebih terstruktur, rapi, dan mudah dipahami.

10. Isi Main Content
```html
    <!--Tentang Saya-->
    <div class="main">
      <div class="section">
        <h3>Tentang Saya</h3>
        <p>
          Saya adalah lulusan SMA yang memiliki ketertarikan besar dalam bidang IT. 
          Walaupun saya baru mengenal pemrograman dan hal-hal lain yang berhubungan dengan IT, saya tetap berusaha untuk belajar dengan tekun. 
          Dengan ketertarikan tersebut, saya bercita-cita untuk bisa berkontribusi langsung di bidang IT di masa depan. 
          Saat ini saya adalah mahasiswa UNM pada program studi Teknik Komputer untuk mewujudkan cita-cita tersebut.
        </p>
      </div>
```
div.main → memanggil css "main" dengan class.
div.section → membungkus sub-bagian "Tentang Saya", memudahkan pemberian jarak antar section lain jika ada. Menjadi modular untuk pengembangan halaman lebih lanjut.
h3 → judul sub-bagian, jelas memberi tahu pembaca bahwa bagian ini adalah tentang profil diri. Bisa distyling untuk menonjolkan teks dan memberikan garis bawah.
p → paragraf utama berisi deskripsi tentang diri sendiri. Memberikan informasi personal, latar belakang pendidikan, ketertarikan, dan tujuan akademik/profesional.

```html
<!--Data Pribadi-->
    <div class="section">
        <h3>Data Pribadi</h3>
        <p><b>Nama          :</b> Susi</p>
        <p><b>TTL           :</b> Bantaeng, 08 Agustus 2006</p>
        <p><b>Jenis Kelamin :</b> Perempuan</p>
        <p><b>Status        :</b> Mahasiswa</p>
        <p><b>Alamat        :</b> Jl.Poros Barua, Kab.Bantaeng, Sulawesi Selatan</p>
      </div>
```
div.section → memanggil css "section" dengan class.
h3 → judul bagian, memberi konteks bahwa konten di bawahnya adalah informasi pribadi. Dengan styling CSS sebelumnya, judul ini akan menonjol dengan garis bawah pink (#ff69b4) dan teks berwarna pink cerah (#ff1493).
Setiap p → menampilkan item data pribadi, seperti Nama, TTL, Jenis Kelamin, Status, dan Alamat.
b → membuat label (misal: “Nama:”) tebal agar jelas membedakan antara label dan isinya.

```html
<!--Pendidikan-->
    <div class="section">
        <h3>Pendidikan</h3>
        <p><b>2012 - 2018:</b> SD Inpres Taruttu Campaga</p>
        <p><b>2018 - 2021:</b> MTSs Al Mansyur Biangloe</p>
        <p><b>2021 - 2024:</b> SMAN 4 Bantaeng</p>
     </div>
```      
div.section → memanggil css "section" dengan class.
h3 → judul section, memberi konteks bahwa konten di bawahnya adalah riwayat pendidikan. Dengan styling CSS sebelumnya, judul ini akan menonjol dengan garis bawah pink dan teks berwarna pink cerah.
Setiap p → menampilkan jenjang pendidikan beserta tahun, misalnya SD, MTS, dan SMA.
b → membuat tahun pendidikan tebal agar lebih menonjol dan mudah dibaca, memisahkan label (tahun) dengan nama sekolah.git
  