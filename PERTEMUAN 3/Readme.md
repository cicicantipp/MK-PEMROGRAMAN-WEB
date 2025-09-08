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
  Bagian ini adalah deklarasi dokumen dan pengaturan dasar.

  !DOCTYPE html: menandakan bahwa dokumen ini HTML5.

  lang="id" artinya bahasa utama halaman adalah Indonesia.

  meta charset="UTF-8" mengatur encoding supaya karakter Indonesia muncul benar.

  meta name="viewport"... membuat halaman responsif di HP.

  title adalah judul tab browser.

  style dipakai untuk menaruh CSS langsung dalam file.

  
2. CSS Body
  ```html
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #000000, #000101);
    }
```
Bagian ini mengatur tampilan seluruh halaman.
Huruf memakai Arial atau font cadangan sans-serif.
Margin dan padding dihapus supaya rapi.
Background dibuat gradasi hitam ke hitam pekat dengan sudut 135°.

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
Bagian ini membuat kotak utama berisi sidebar dan main.

display:flex; membagi halaman jadi dua kolom.

max-width:900px; membatasi lebar maksimal.

margin:30px auto; membuatnya rata tengah dengan jarak atas 30px.

background:white; memberi latar putih.

border-radius:10px; membuat sudut membulat.

box-shadow; memberi efek bayangan.

overflow:hidden; mencegah isi keluar dari kotak.

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
Sidebar adalah kolom kiri.
Lebarnya 35% dari container.
Background pink cerah.
Teks berwarna hitam.
Padding 20px memberi ruang di dalam.
text-align:center; membuat isi rata tengah.

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
Foto profil ditampilkan bulat dan bergerak.

Ukuran 130px × 130px.

border-radius:50% menjadikannya bulat.

border:4px solid white; memberi garis putih.

animation:bounce; membuat foto memantul naik turun setiap 3 detik.


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
Nama besar ditampilkan dengan h2 dan motto dengan p.
Teks motto miring, kecil, warna abu gelap, dan diberi jarak atas bawah.

7. Bagian Kontak dan Hobi
```html
 <!--HTML-->
    <div class="contact">
    <h3>Kontak</h3>
    <ul>
        <li>📧 iniciciiww@gmail.com</li>
        <li>📱 0813-5428-1882</li>
    </ul>
    </div>

 <!--CSS-->
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
Kontak berisi daftar email dan nomor HP. Hobi juga sama strukturnya.
Daftar dibuat dalam kotak dengan latar transparan. Saat diarahkan mouse (hover), warna berubah ke pink gelap, teks jadi hitam, bergeser sedikit ke kanan, dan ada bayangan.

8. Bagian Sosial Media
```html
    <!-- HTML -->
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
    .instagram { background: linear-gradient(...); }
    .github { background: #333; }
    .tiktok { background: linear-gradient(...); }
```
<!-- HTML -->
div.social-section → membungkus keseluruhan bagian sosial media. Memberikan konteks dan memudahkan styling.

h3 → judul seksi, jelas memberi tahu pengguna ini adalah bagian sosial media.

div.social-buttons → container untuk tombol/link sosial media.

a → setiap link ke platform sosial media, memiliki class spesifik (instagram, github, tiktok) untuk styling individual.

target="_blank" → memastikan link terbuka di tab baru, bagus untuk UX agar pengunjung tidak meninggalkan halaman utama.
<!-- CSS -->
text-decoration: none; → menghapus garis bawah default pada link, membuat tampilannya lebih mirip tombol.

padding: 8px 18px; → memberi ruang di dalam tombol agar klik lebih nyaman.

border-radius: 25px; → tombol berbentuk pill, tampilannya modern dan menarik.

font-weight: bold; → teks lebih menonjol, mudah dibaca.

color: white; → kontras dengan latar belakang tombol.

transition → animasi halus saat tombol dihover, memberikan kesan interaktif.

9. Main Content (Bagian Kanan)
```htm;
   .main {
        width: 65%;
        padding: 20px;
    }
```
Selector .main digunakan untuk membungkus konten utama, kemungkinan besar adalah container atau wrapper halaman.

width: 65%; → membuat elemen .main hanya mengambil 65% dari lebar elemen induknya, sehingga memberikan margin kiri dan kanan otomatis jika tidak diatur float, sehingga terlihat lebih rapi dan fokus di tengah halaman.

padding: 20px; → menambahkan ruang di dalam elemen .main, sehingga konten tidak menempel ke tepi elemen. Ini meningkatkan keterbacaan dan estetika halaman.

```html
    .main h3 {
        border-bottom: 2px solid #ff69b4;
        padding-bottom: 5px;
        color: #ff1493;
    }
```
Selector .main h3 menargetkan semua elemen h3 di dalam elemen dengan class .main.

border-bottom: 2px solid #ff69b4; → menambahkan garis bawah tebal 2px berwarna pink (#ff69b4). Garis ini memberi penekanan visual, menandai judul sub-bagian secara jelas.

padding-bottom: 5px; → memberi jarak antara teks dan garis bawah, sehingga tidak menempel langsung ke border. Ini membuat tampilan lebih seimbang dan profesional.

color: #ff1493; → mengubah warna teks menjadi pink cerah (#ff1493), sesuai dengan tema warna garis bawah. Memberikan konsistensi visual dan menarik perhatian pembaca ke judul.

```html
    .section {
        margin-bottom: 20px;
    }
```
Selector .section kemungkinan digunakan untuk membungkus setiap bagian/sub-bagian konten.

margin-bottom: 20px; → memberi jarak vertikal antara satu .section dengan section berikutnya. Ini membantu membuat layout tidak terasa padat dan lebih nyaman untuk dibaca.

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
div.main → container utama untuk bagian ini. Memberikan batas ruang, padding, dan kemungkinan styling global (misal background, shadow). Ini membuat konten terlihat fokus dan rapi.

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
div.section → membungkus seluruh konten data pribadi, sehingga memudahkan pengaturan jarak (margin) antar bagian lain di halaman.

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
div.section → membungkus seluruh informasi pendidikan, sehingga memudahkan pengaturan jarak (margin) antar section lain di halaman.

h3 → judul section, memberi konteks bahwa konten di bawahnya adalah riwayat pendidikan. Dengan styling CSS sebelumnya, judul ini akan menonjol dengan garis bawah pink dan teks berwarna pink cerah.

Setiap p → menampilkan jenjang pendidikan beserta tahun, misalnya SD, MTS, dan SMA.

b → membuat tahun pendidikan tebal agar lebih menonjol dan mudah dibaca, memisahkan label (tahun) dengan nama sekolah.git
  