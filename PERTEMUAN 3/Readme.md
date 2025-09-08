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