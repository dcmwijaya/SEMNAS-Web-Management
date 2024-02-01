[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/SEMNAS-Web-Management)
![CI4](https://img.shields.io/badge/-Codeigniter4-darkblue?style=flat&logo=Codeigniter)
![Bootstrap](https://img.shields.io/badge/-Bootstrap-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# SEMNAS-Web-Management
<strong>Framework Programming Assignment: SEMNAS Case Study</strong><br>
This website was created to fulfill the ``` assignment of the Framework Programming course ```. The data in it is not really there / ``` fictitious ```.

<br>

## Project Requirements
| Part | Description |
| --- | --- |
| Features | Login, Create, Read, Update, Delete, Validation, Print, & Export |
| Framework | Bootstrap 4, CodeIgniter 4 |
| Tools | Visual Studio Code, XAMPP (PHP Version 7.4), Composer, Git |

<br>

## Download & Install
1. XAMPP with PHP version 7.4 :
   
   ```bash
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```
   
2. Visual Studio Code :
   
   ```bash
   https://code.visualstudio.com/docs/?dv=win
   ```
   
3. Composer :

   ```bash
   https://getcomposer.org/
   ```
   
4. Git :

   ```bash
   http://git-scm.com/
   ```

<br>

## Database
1. Open ``` XAMPP ```, then start the ``` Apache ``` & ``` MySQL ``` section. This aims to be able to support the website optimally.

2. Access the browser first in order to open the database admin panel, please copy the following link: ``` localhost/phpmyadmin/ ```.
   
3. Create a database called ``` ci4_semnas ``` on local.

4. Open the ``` ci4_semnas ``` database and Import the ``` semnas_db.sql ``` in the ``` SEMNAS/database ``` directory.
   
5. Then open the XAMP file: ``` php.ini ``` -> remove ``` semicolon (;) ``` in front of ``` extension=intl ``` -> save.

<br>

## Default Account
| Role | Email | Username | Password |
| --- | --- | --- | --- |
| Super Admin | pentalogy.wasser@gmail.com | Super Admin | semnas2021 |

<br>

## Get Started
1. Download and extract this repository.<br>
2. Rename the directory ``` SEMNAS-Web-Management ``` to ``` SEMNAS ```.<br>
3. Open the ``` SEMNAS ``` directory, then open ``` GitBash ``` inside that directory.
   <ul>
       <li>First, check whether there is a problem or not, if there is still an error, just adjust it according to the situation.</li>
       <li>Secondly, this step is mandatory, so please copy the following command:<br><br></li>
       
   ````bash
   php spark serve
   ````
   </ul>
4. Open your ``` browser ``` (New tab), then type -> ``` localhost:8080 ``` or customize the one on your ``` GitBash ```.<br>
5. Please login and access the features, enjoy [Done].

<br>

## Highlights
<table>
<tr>
<th width="840">Home</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109822472-8fbef980-7c69-11eb-9fee-c3d6f7259862.png" alt="home"></td>
</tr>
</table>
<table>
<tr>
<th width="280">About</th>
<th width="280">Registration</th>
<th width="280">Participants</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109822592-acf3c800-7c69-11eb-8193-5dc9c91d9b76.png" alt="about"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109823043-24295c00-7c6a-11eb-85ec-638a93e6b4fe.png" alt="registration"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109822749-d7458580-7c69-11eb-9332-efdeb85d009f.png" alt="participants"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Login</th>
<th width="280">Manage Data</th>
<th width="280">Print</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109823193-49b66580-7c6a-11eb-8e2c-c96bd31de17b.png" alt="login"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821080-31454b80-7c68-11eb-9cb7-5c66e7420b0d.png" alt="manage-data"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821231-59cd4580-7c68-11eb-986c-a3052f8e56c9.png" alt="print"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Export</th>
<th width="280">Add</th>
<th width="280">Edit</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109821446-926d1f00-7c68-11eb-86cd-fdf8bcd15009.png" alt="export"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821546-a9ac0c80-7c68-11eb-8ed2-acfc2ff39b75.png" alt="add"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821667-cb0cf880-7c68-11eb-84c1-b78656d5d403.png" alt="edit"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Delete</th>
<th width="280">Search</th>
<th width="280">Pagination</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109916076-8ffcda80-7ce5-11eb-9341-3949845899e4.png" alt="delete"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109821995-1e7f4680-7c69-11eb-9580-ceba86b7d798.png" alt="search"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109822130-42428c80-7c69-11eb-9fae-c2dfda284944.png" alt="pagination"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Add Validation</th>
<th width="280">Edit Validation</th>
<th width="280">Delete Validation</th>
</tr>
<tr>
<td><img src="https://user-images.githubusercontent.com/54527592/109916408-2a5d1e00-7ce6-11eb-81cb-40be595c1404.png" alt="add-validation"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109916251-dc481a80-7ce5-11eb-8951-398f5d3ed958.png" alt="edit-validation"></td>
<td><img src="https://user-images.githubusercontent.com/54527592/109916161-b458b700-7ce5-11eb-8d13-a890ad4b0e55.png" alt="delete-validation"></td>
</tr>
</table>

<br>

## Reminder
There is still a bug in the data search feature. Data that is not found should have a caption in the table, but currently this has not been achieved.

<br>

## Disclaimer
This application has been created by including third-party sources. Third parties here are service providers, whose services are in the form of libraries, frameworks, and others. I thank you very much for the service. It has proven to be very helpful and implementable.

<br>

## LICENSE
MIT License - Copyright © 2021 - Devan Cakra Mudra Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
