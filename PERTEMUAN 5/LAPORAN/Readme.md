# Analisis 
**2. JavaScript pada file HTML**
 **a. Menggunakan tag script
 ```html
        <HTML>
        <HEAD>
            <TITLE>contoh JavaScript</TITLE>
            <script language="JavaScript">
            document.write("Program JavaSript Aku di kepala");
            </script>
        </HEAD>
        <BODY>
            <script language="JavaScript">
            document.write("Program JavaSript Aku di body");
            </script>
        </BODY>
        </HTML>
```
![alt text](2a.png)
Kode HTML tersebut menampilkan tulisan dari JavaScript menggunakan document.write(). Pada bagian head, JavaScript menuliskan teks “Program JavaSript Aku di kepala”, lalu pada bagian body, JavaScript kembali menuliskan teks “Program JavaSript Aku di body”. Karena keduanya menggunakan document.write(), hasil akhirnya di browser adalah kedua teks itu muncul berurutan sesuai urutan script dituliskan dalam file HTML.

**b. Menggunakan file eksternal**
    ```html
        <SCRIPT LANGUAGE=Javascript SRC=url/file.js> </SCRIPT>
```  
Baris ini digunakan untuk memanggil file JavaScript eksternal. Artinya, Anda bisa menaruh kode JavaScript di luar file HTML (misalnya file.js), lalu menyambungkannya ke HTML menggunakan atribut SRC. Dengan begitu, kode lebih rapi, terpisah, dan mudah dikelola.

**c. Event Tertentu**
    ```html
        <!DOCTYPE html>
        <html>
            <head>
             <title>Belajar Javascript : Mengenal Event Pada Javascript</title>
            </head>
            <body>
                <h1>Mengenal Event Pada Javascript</h1>
                <h2>Perograman WEB Event one click</h2>
                <button onclick="tampilkan_nama()">Klik di sini</button>
                <div id="hasil"></div>
                <script>
                    function tampilkan_nama() {
                    document.getElementById("hasil").innerHTML =
                        "<h3>Nama Saya Adalah Susii</h3>";
                    }
                </script>
            </body>
        </html>
```
![alt text](2c.png)
Pada halaman terdapat judul dengan h1 dan h2 sebagai penjelasan materi.
Sebuah tombol dibuat dengan elemen button. Tombol ini memiliki atribut onclick="tampilkan_nama()", artinya saat tombol diklik, fungsi tampilkan_nama() akan dijalankan.
Elemen div id="hasil" /div disiapkan sebagai wadah kosong tempat menampilkan hasil dari fungsi JavaScript. Di dalam script, dibuat fungsi tampilkan_nama(). Fungsi ini mencari elemen dengan id="hasil" lalu mengubah isinya (innerHTML) menjadi teks dengan format heading h3 yang berisi tulisan "Nama Saya Adalah Susii". Jadi, saat pengguna menekan tombol, teks "Nama Saya Adalah Susii" otomatis muncul di bawah tombol.

**d. contoh sederhana**
