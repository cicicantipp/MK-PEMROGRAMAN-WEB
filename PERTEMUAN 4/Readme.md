# ANALISIS 
1. Biografi Update (MODUL 4)
    **CSS**
 ```html   
        border-radius: 50px;
        border: 4px solid #c60d73; 
        margin-bottom: 10px;
        animation: bounce 3s infinite;
        opacity: 0.8; 
        transition: opacity 0.5s ease, transform 0.3s ease;
```
Penambahan border-radius: 50px; membuat sudut gambar membulat sehingga terlihat lebih halus, sedangkan border: 4px solid #c60d73; menambahkan garis tepi berwarna pink tua dengan ketebalan 4 piksel. margin-bottom: 10px; memberi jarak ke bawah agar gambar tidak terlalu rapat dengan elemen di bawahnya. animation: bounce 3s infinite; memberikan efek animasi pantulan (naik-turun) yang berjalan terus-menerus setiap 3 detik. opacity: 0.8; membuat gambar agak transparan dengan tingkat kejernihan 80%. Terakhir, transition: opacity 0.5s ease, transform 0.3s ease; memastikan perubahan pada tingkat transparansi dan ukuran gambar berjalan secara halus ketika gambar diberi aksi seperti hover.

 ```html
     .sidebar img:hover 
      opacity: 1.0; 
      transform: scale(1.05);
      border: 4px solid #ff69b4;
    ```
Kode ini mengatur efek ketika gambar pada bagian .sidebar diarahkan kursor (hover). opacity: 1.0; membuat gambar menjadi sepenuhnya jelas tanpa transparansi. transform: scale(1.05); memperbesar gambar sedikit (5%) sehingga terlihat menonjol. Sedangkan border: 4px solid #ff69b4; mengganti warna garis tepi menjadi pink cerah ketika gambar disentuh kursor.

2. Biografi Update (MODUL 5)
    **Index.html**
 ```html
        <script>
            function showPage(pageId) {
             document.querySelectorAll(".page").forEach(function(page) {
             page.classList.remove("active");
            });
                document.getElementById(pageId).classList.add("active");
            }
        </script>
```       

Kode JavaScript showPage() digunakan untuk mengatur perpindahan antarhalaman dalam website agar tampilan lebih dinamis dan tidak perlu memuat ulang seluruh halaman. Ketika fungsi ini dipanggil dengan parameter berupa id halaman yang dituju, pertama-tama sistem akan mencari semua elemen yang memiliki class page. Kemudian, setiap halaman tersebut akan dihapus status aktifnya dengan cara menghilangkan class active, sehingga halaman tersebut otomatis tersembunyi dari layar. Setelah itu, fungsi akan mencari elemen dengan id sesuai parameter yang dipanggil, lalu memberinya class active agar halaman tersebut ditampilkan kembali. Dengan cara ini, hanya satu halaman yang terlihat pada satu waktu, misalnya ketika pengguna menekan tombol menuju Portofolio atau Galeri, maka halaman Home akan hilang, dan hanya halaman yang dipilih yang akan tampil. Mekanisme ini membuat pengalaman pengguna lebih interaktif karena halaman bisa berganti secara halus tanpa perlu melakukan reload seluruh website.

 **Style4.css**
```html
 .page {
        display: none;
        animation: fade 0.6s ease-in-out;
    }
 .page.active {
        display: block;
    }
 @keyframes fade {
        from {opacity: 0;}
        to {opacity: 1;}
    } 
```
Setiap elemen dengan kelas .page secara default tidak ditampilkan (display: none;) dan memiliki animasi bernama fade selama 0,6 detik dengan kecepatan transisi ease-in-out. Ketika sebuah elemen .page diberikan kelas tambahan .active, maka elemen itu ditampilkan (display: block;) dan animasi fade akan membuat elemen secara bertahap muncul dari tidak terlihat (opacity: 0) menjadi terlihat penuh (opacity: 1). Jadi, efek ini memberikan tampilan halaman yang lebih halus saat berpindah dari satu halaman ke halaman lain.

```html
        .home-container {
            text-align: center;
            padding: 50px 20px;
            animation: slideIn 1.5s ease-in-out;
        }
        .home-container h2 {
            color: #ff69b4;
            animation: fadeIn 2s ease-in-out;
        }
        .foto-home {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid #fff;
            margin-top: 20px;
            animation: bounce 3s infinite;
        }
        .menu-box {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        .card {
            background: #ff0f93;
            color: white;
            padding: 20px 40px;
            border-radius: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .card:hover {
            background: #ff69b4;
            transform: scale(1.1);
        }
```

**.home-container** membuat seluruh konten di tengah layar (text-align: center) dengan padding di atas dan bawah, serta animasi slideIn selama 1,5 detik agar konten muncul dari samping atau atas dengan efek halus.

**.home-container h2** mengatur warna teks heading menjadi pink cerah (#ff69b4) dan memberikan animasi fadeIn selama 2 detik agar teks muncul perlahan.

**.foto-home** mengatur foto profil menjadi lingkaran dengan ukuran 180x180px, diberi border putih 5px, diberi jarak atas, dan animasi bounce yang bergerak naik-turun secara terus-menerus (infinite).

**.menu-box** mengatur area menu berupa kotak-kotak dengan jarak antar kotak (gap: 30px), ditampilkan secara horizontal (flex) dan ditempatkan di tengah halaman (justify-content: center).

**.card** adalah kotak menu yang memiliki warna latar cerah (#ff0f93), teks putih, padding, border-radius, font tebal, serta efek bayangan. Kotak ini bisa diklik (cursor: pointer) dan memiliki efek transisi halus 0,3 detik.

**.card:hover** mengatur efek saat kursor diarahkan ke kotak: warna latar berubah menjadi pink (#ff69b4) dan kotak sedikit membesar (scale(1.1)), sehingga memberi interaksi visual yang menarik.

```html
        .galeri {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .galeri img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .galeri img:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
```
**.galeri** menggunakan grid layout, sehingga gambar ditata rapi dalam kolom yang menyesuaikan lebar layar (auto-fit) dengan minimal 200px per kolom dan jarak antar gambar 15px.

**.galeri img** membuat setiap gambar menyesuaikan lebar kotak grid (width: 100%), membulatkan sudut dengan border-radius: 10px, dan menambahkan transisi halus saat gambar dihover (0,3 detik untuk transform dan bayangan).

**.galeri img:hover** memberi efek sedikit membesar (scale(1.05)) dan menambahkan bayangan agar gambar terlihat menonjol saat kursor diarahkan.

```html
        .back-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 25px;
            background: #ff0f93;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
```
**.back-btn** adalah tombol kembali yang tengah halaman (margin: auto), dengan padding nyaman, warna latar pink cerah (#ff0f93), teks putih, tebal, sudut membulat, dan transisi halus saat dihover. Tombol ini juga menjadi klikable (cursor: pointer).

```html
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: scale(0.9);}
            to {opacity: 1; transform: scale(1);}
        }
        @keyframes slideIn {
            from {opacity: 0; transform: translateY(50px);}
            to {opacity: 1; transform: translateY(0);}
        }
```
**@keyframes bounce** membuat animasi naik-turun dengan posisi awal dan akhir tetap, sedangkan posisi tengah naik 10px.

**@keyframes fadeIn** membuat animasi muncul perlahan dari transparan (opacity: 0) dan sedikit mengecil (scale(0.9)) menjadi terlihat penuh dan ukuran normal.

**@keyframes slideIn** membuat animasi elemen muncul dari bawah (50px ke atas) sambil memudar dari transparan menjadi terlihat penuh.