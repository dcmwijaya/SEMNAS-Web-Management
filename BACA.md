[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/SEMNAS-Web-Management)
![CI4](https://img.shields.io/badge/-Codeigniter4-darkblue?style=flat&logo=Codeigniter)
![Bootstrap](https://img.shields.io/badge/-Bootstrap-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# SEMNAS-Web-Management
<strong>Tugas Akhir Mata Kuliah Framework: Studi Kasus SEMNAS</strong><br>
Website ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Framework. Data-data yang ada di dalamnya tidak benar adanya (fiktif).

<br>

## Fitur / Kerangka Kerja / Peralatan
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Masuk, Buat, Baca, Perbarui, Hapus, Validasi, Cetak, & Ekspor |
| Kerangka Kerja | Bootstrap 4, CodeIgniter 4 |
| Peralatan | Visual Studio Code, XAMPP (PHP Versi 7.4) |

<br><br>

## Unduh & Instal
1. XAMPP dengan PHP versi 7.4 :<br><br>
   ```bash
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```
2. Visual Studio Code :<br><br>
   ```bash
   https://code.visualstudio.com/docs/?dv=win
   ```
3. Composer :<br><br>
   ```bash
   https://getcomposer.org/
   ```
4. Git :<br><br>
   ```bash
   http://git-scm.com/
   ```

<br><br>

## Basis data
1. Buka XAMPP, lalu tekan tombol mulai di bagian Apache & MySQL. Hal ini bertujuan untuk dapat mendukung website secara optimal.<br>
2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut: ``` localhost/phpmyadmin/ ```
3. Buat basis data bernama ``` ci4_semnas ``` di lokal.<br>
4. Buka basis data ``` ci4_semnas ``` dan Impor ``` semnas_db.sql ``` di direktori ``` SEMNAS/database ```.<br>
5. Kemudian buka berkas XAMP: ``` php.ini ``` -> hapus ``` titik koma (;) ``` di depan ``` extension=intl ``` -> simpan.

<br><br>

## Akun Bawaan
| Peran | Surel | Nama Pengguna | Kata Sandi |
| --- | --- | --- | --- |
| Super Admin | pentalogy.wasser@gmail.com | Super Admin | semnas2021 |

<br><br>

## Menjalankan
1. Unduh repositori ini.<br>
2. Ubah nama direktori ``` SEMNAS-Web-Management ``` menjadi ``` SEMNAS ```.<br>
3. Buka direktori "SEMNAS", lalu buka GitBash di dalam direktori tersebut.
  <ul>
    <li>Pertama, periksa apakah ada masalah atau tidak, jika masih ada kesalahan, sesuaikan saja dengan situasinya.</li>
    <li>Kedua, langkah ini wajib dilakukan, jadi silakan salin perintah berikut ini:</li><br>
    
  ```bash 
    php spark serve
  ```
  </ul>
  4. Buka peramban Anda (Tab baru), lalu ketik -> ``` localhost:8080 ``` atau sesuaikan dengan yang ada di GitBash Anda.<br>
  5. Silakan masuk dan akses fitur-fiturnya, selamat menikmati [Selesai].

<br><br>

## Sorotan
<table>
<tr>
<th width="840">Beranda</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109822472-8fbef980-7c69-11eb-9fee-c3d6f7259862.png" alt="home"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Tentang</th>
<th width="280">Registrasi</th>
<th width="280">Peserta</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109822592-acf3c800-7c69-11eb-8193-5dc9c91d9b76.png" alt="about"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109823043-24295c00-7c6a-11eb-85ec-638a93e6b4fe.png" alt="registration"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109822749-d7458580-7c69-11eb-9332-efdeb85d009f.png" alt="participants"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Masuk</th>
<th width="280">Kelola Data</th>
<th width="280">Cetak</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109823193-49b66580-7c6a-11eb-8e2c-c96bd31de17b.png" alt="login"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821080-31454b80-7c68-11eb-9cb7-5c66e7420b0d.png" alt="manage-data"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821231-59cd4580-7c68-11eb-986c-a3052f8e56c9.png" alt="print"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Ekspor</th>
<th width="280">Tambah</th>
<th width="280">Ubah</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109821446-926d1f00-7c68-11eb-86cd-fdf8bcd15009.png" alt="export"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821546-a9ac0c80-7c68-11eb-8ed2-acfc2ff39b75.png" alt="add"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821667-cb0cf880-7c68-11eb-84c1-b78656d5d403.png" alt="edit"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Hapus</th>
<th width="280">Pencarian</th>
<th width="280">Paginasi</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109916076-8ffcda80-7ce5-11eb-9341-3949845899e4.png" alt="delete"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821995-1e7f4680-7c69-11eb-9580-ceba86b7d798.png" alt="search"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109822130-42428c80-7c69-11eb-9fae-c2dfda284944.png" alt="pagination"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Validasi Tambah</th>
<th width="280">Validasi Ubah</th>
<th width="280">Validasi Hapus</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109916408-2a5d1e00-7ce6-11eb-81cb-40be595c1404.png" alt="add-validation"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109916251-dc481a80-7ce5-11eb-8951-398f5d3ed958.png" alt="edit-validation"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109916161-b458b700-7ce5-11eb-8d13-a890ad4b0e55.png" alt="delete-validation"></td>
</tr>
</table>

<br><br>

## LISENSI 
LISENSI MIT - Hak Cipta (c) 2021 - Devan Cakra Mudra Wijaya

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
