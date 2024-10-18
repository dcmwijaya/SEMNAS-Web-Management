[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/cakraawijaya/SEMNAS-Web-Management?logo=Codeforces&logoColor=white&color=%23F7DF1E)
![Project](https://img.shields.io/badge/Project-Website-light.svg?style=flat&logo=googlechrome&logoColor=white&color=%23F7DF1E)
![Type](https://img.shields.io/badge/Type-Campus%20Assignment-light.svg?style=flat&logo=gitbook&logoColor=white&color=%23F7DF1E)

# SEMNAS-Web-Management
<strong>Tugas Pemrograman Framework: Studi Kasus SEMNAS</strong><br>
Website ini dibuat untuk memenuhi ``` tugas mata kuliah Pemrograman Framework ```. Data-data yang ada di dalamnya tidak benar adanya / ``` fiktif ```.

<br><br>

## Kebutuhan Proyek
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Masuk, Buat, Baca, Perbarui, Hapus, Validasi, Cetak, & Ekspor |
| Kerangka Kerja | Bootstrap 4, CodeIgniter 4 |
| Peralatan | Visual Studio Code, XAMPP (PHP Versi 7.4), Composer, Git |

<br><br>

## Unduh & Instal
1. XAMPP dengan PHP versi 7.4

   <table><tr><td width="810">
   
   ```
   https://bit.ly/XAMPP_PHP7_Installer
   ```

   </td></tr></table><br>
   
2. Visual Studio Code

   <table><tr><td width="810">
   
   ```
   https://bit.ly/VScode_Installer
   ```

   </td></tr></table><br>
   
3. Composer

   <table><tr><td width="810">

   ```
   https://bit.ly/Composer_Installer
   ```

   </td></tr></table><br>
   
4. Git

   <table><tr><td width="810">

   ```
   https://bit.ly/GIT_Installer
   ```

   </td></tr></table>

<br><br>

## Basis data
1. Buka ``` XAMPP ```, lalu tekan tombol mulai di bagian ``` Apache ``` & ``` MySQL ```. Hal ini bertujuan untuk dapat mendukung website secara optimal.

2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut: ``` localhost/phpmyadmin/ ```.
   
3. Buat basis data bernama ``` ci4_semnas ``` di lokal.

4. Buka basis data ``` ci4_semnas ``` dan Impor ``` semnas_db.sql ``` di direktori ``` SEMNAS/database ```.

5. Kemudian buka berkas XAMP: ``` php.ini ``` -> hapus ``` titik koma (;) ``` di depan ``` extension=intl ``` -> simpan.

<br><br>

## Akun Bawaan
| Peran | Surel | Nama Pengguna | Kata Sandi |
| --- | --- | --- | --- |
| Super Admin | pentalogy.wasser@gmail.com | Super Admin | semnas2021 |

<br><br>

## Memulai
1. Unduh dan ekstrak repositori ini.<br>
2. Ubah nama direktori ``` SEMNAS-Web-Management ``` menjadi ``` SEMNAS ```.<br>
3. Buka direktori ``` SEMNAS ```, lalu buka ``` GitBash ``` di dalam direktori tersebut.
   <ul>
      <li>Pertama, periksa apakah ada masalah atau tidak, jika masih ada kesalahan, sesuaikan saja dengan situasinya.</li>
      <li>Kedua, langkah ini wajib dilakukan, jadi silakan salin perintah berikut ini:<br><br></li>
      
   <table><tr><td width="780">  
      
   ````bash
   php spark serve
   ````

   </td></tr></table></ul>
4. Buka ``` peramban ``` anda (Tab baru), lalu ketik -> ``` localhost:8080 ``` atau sesuaikan dengan yang ada di ``` GitBash ``` anda.<br>
5. Silakan masuk dan akses fitur-fiturnya, selamat menikmati [Selesai].

<br><br>

## Sorotan
<table>
<tr>
<th width="840">Beranda</th>
</tr>
<tr>
<td><img src="documentation/Home.jpg" alt="home"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Tentang</th>
<th width="280">Registrasi</th>
<th width="280">Peserta</th>
</tr>
<tr>
<td><img src="documentation/About.jpg" alt="about"></td>
<td><img src="documentation/Registration.jpg" alt="registration"></td>
<td><img src="documentation/Participants.jpg" alt="participants"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Masuk</th>
<th width="280">Kelola Data</th>
<th width="280">Cetak</th>
</tr>
<tr>
<td><img src="documentation/Login.jpg" alt="login"></td>
<td><img src="documentation/Manage Data.jpg" alt="manage-data"></td>
<td><img src="documentation/Print.jpg" alt="print"></td>
</table>
<table>
<tr>
<th width="280">Ekspor</th>
<th width="280">Tambah</th>
<th width="280">Ubah</th>
</tr>
<tr>
<td><img src="documentation/Export.jpg" alt="export"></td>
<td><img src="documentation/Add.jpg" alt="add"></td>
<td><img src="documentation/Edit.jpg" alt="edit"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Hapus</th>
<th width="280">Pencarian</th>
<th width="280">Paginasi</th>
</tr>
<tr>
<td><img src="documentation/Delete.jpg" alt="delete"></td>
<td><img src="documentation/Search.jpg" alt="search"></td>
<td><img src="documentation/Pagination.jpg" alt="pagination"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Validasi Tambah</th>
<th width="280">Validasi Ubah</th>
<th width="280">Validasi Hapus</th>
</tr>
<tr>
<td><img src="documentation/Add Validation.jpg" alt="add-validation"></td>
<td><img src="documentation/Edit Validation.jpg" alt="edit-validation"></td>
<td><img src="documentation/Delete Validation.jpg" alt="delete-validation"></td>
</tr>
</table>

<br><br>

## Pengingat
Masih terdapat bug pada fitur pencarian data. Data yang tidak ditemukan seharusnya memiliki keterangan dalam tabel, tetapi saat ini hal tersebut belum tercapai.

<br><br>

## Apresiasi
Jika karya ini bermanfaat bagi anda, maka dukunglah karya ini sebagai bentuk apresiasi kepada penulis dengan mengklik tombol ``` ⭐Bintang ``` di bagian atas repositori.

<br><br>

## Penafian
Aplikasi ini merupakan hasil karya saya sendiri dan bukan merupakan hasil plagiat dari penelitian atau karya orang lain, kecuali yang berkaitan dengan layanan pihak ketiga yang meliputi: pustaka, kerangka kerja, dan lain sebagainya.

<br><br>

## LISENSI 
LISENSI MIT - Hak Cipta © 2021 - Devan C. M. Wijaya

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
