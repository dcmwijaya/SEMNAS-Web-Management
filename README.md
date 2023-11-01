[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/SEMNAS-Web-Registration)
![CI4](https://img.shields.io/badge/-Codeigniter4-darkblue?style=flat&logo=Codeigniter)
![Bootstrap](https://img.shields.io/badge/-Bootstrap-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# SEMNAS-Web-Management
<strong>Final Project of Framework Course: SEMNAS Case Study</strong><br>
This website was created to fulfill the assignment of the Framework Programming course. The data in it is not really there (fictitious).

<br>

## Features / Framework / Tools
| Part | Description |
| --- | --- |
| Features | Login, Create, Read, Update, Delete, Validation, Print, & Export |
| Framework | Bootstrap 4, CodeIgniter 4 |
| Tools | Visual Studio Code, XAMPP (PHP Version 7,4) |

<br>

## Environment
1. Download XAMPP
```bash
https://www.apachefriends.org/index.html
```
2. Download Visual Studio Code 
```bash
https://code.visualstudio.com/
```
3. Download Composer
```bash
https://getcomposer.org/
```
4. Download Git
```bash
http://git-scm.com/
```
5. Buat database dengan nama ci4 di local, ketikkan pada browser :
```bash
localhost/phpmyadmin/
```
6. Import database dengan nama ci4.sql

<br>

## Install Codeigniter Melalui Composer
Install Codeigniter 4 dengan nama ci4app melalui gitbash arahkan pada htdocs
```bash
composer create-project codeigniter4/appstarter ci4app
```

<br>

## Run Server
1. Pastikan masih berada di dalam folder ci4app -> Klik kanan pilih gitbash lalu ketikkan :
```bash
$php spark serve
```
2. Buka XAMPP lalu start apache dan mysql
3. Buka browser anda (Tab baru) lalu ketikkan -> localhost:8080 atau sesuaikan yang ada pada gitbash

<br>

## Cara Menjalankan Web Secara Local
1. Download repository ini
2. Environment pastikan semua telah dilakukan -> Install Codeigniter 4 melalui gitbash
3. Lalu buka file XAMP (php.ini) -> hapus semicolon (;) didepan extension=intl ->save
4. Extract file yang di download tadi -> Copy & Paste isi folder -> XAMP (htdocs) -> masuk kedalam folder ci4app -> Replace
5. Run server
6. email admin : pentalogy.wasser@gmail.com atau username : Super Admin, password admin : semnas2021
7. Selesai, selamat menikmati

<br>

## Dokumentasi
<div class="dokumentasi">
  <h5>1. Menu Beranda</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109822472-8fbef980-7c69-11eb-9fee-c3d6f7259862.png"><br>
  <h5>2. Menu Tentang Semnas</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109822592-acf3c800-7c69-11eb-8193-5dc9c91d9b76.png"><br>
  <h5>3. Menu Registrasi Semnas</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109823043-24295c00-7c6a-11eb-85ec-638a93e6b4fe.png"><br>
  <h5>4. Menu Peserta Semnas</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109822749-d7458580-7c69-11eb-9332-efdeb85d009f.png"><br>
  <h5>5. Menu Login</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109823193-49b66580-7c6a-11eb-8e2c-c96bd31de17b.png"><br>
  <h5>6. Menu Kelola Data</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821080-31454b80-7c68-11eb-9cb7-5c66e7420b0d.png"><br>
  <h5>7. Fitur Print</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821231-59cd4580-7c68-11eb-986c-a3052f8e56c9.png"><br>
  <h5>8. Fitur Export Excel</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821446-926d1f00-7c68-11eb-86cd-fdf8bcd15009.png"><br>
  <h5>9. Form Tambah</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821546-a9ac0c80-7c68-11eb-8ed2-acfc2ff39b75.png"><br>
  <h5>10. Form Ubah</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821667-cb0cf880-7c68-11eb-84c1-b78656d5d403.png"><br>
  <h5>11. Form Hapus</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109916076-8ffcda80-7ce5-11eb-9341-3949845899e4.png"><br>
  <h5>12. Fitur Search</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109821995-1e7f4680-7c69-11eb-9580-ceba86b7d798.png"><br>
  <h5>13. Fitur Pagination</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109822130-42428c80-7c69-11eb-9fae-c2dfda284944.png"><br>
  <h5>14. Fitur Validasi Tambah</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109916408-2a5d1e00-7ce6-11eb-81cb-40be595c1404.png"><br>
  <h5>15. Fitur Validasi Ubah</h5>
  <img src="https://user-images.githubusercontent.com/54527592/109916251-dc481a80-7ce5-11eb-8951-398f5d3ed958.png"><br>
  <h5>16. Fitur Validasi Hapus<h5>
  <img src="https://user-images.githubusercontent.com/54527592/109916161-b458b700-7ce5-11eb-8d13-a890ad4b0e55.png"><br>
</div>
