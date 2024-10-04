[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/SEMNAS-Web-Management?logo=Codeforces&logoColor=white&color=%23F7DF1E)
![Project](https://img.shields.io/badge/Project-Website-light.svg?style=flat&logo=googlechrome&logoColor=white&color=%23F7DF1E)
![Type](https://img.shields.io/badge/Type-Campus%20Assignment-light.svg?style=flat&logo=gitbook&logoColor=white&color=%23F7DF1E)

# SEMNAS-Web-Management
<strong>Framework Programming Assignment: SEMNAS Case Study</strong><br>
This website was created to fulfill the ``` assignment of the Framework Programming course ```. The data in it is not really there / ``` fictitious ```.

<br><br>

## Project Requirements
| Part | Description |
| --- | --- |
| Features | Login, Create, Read, Update, Delete, Validation, Print, & Export |
| Framework | Bootstrap 4, CodeIgniter 4 |
| Tools | Visual Studio Code, XAMPP (PHP Version 7.4), Composer, Git |

<br><br>

## Download & Install
1. XAMPP with PHP version 7.4

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

## Database
1. Open ``` XAMPP ```, then start the ``` Apache ``` & ``` MySQL ``` section. This aims to be able to support the website optimally.

2. Access the browser first in order to open the database admin panel, please copy the following link: ``` localhost/phpmyadmin/ ```.
   
3. Create a database called ``` ci4_semnas ``` on local.

4. Open the ``` ci4_semnas ``` database and Import the ``` semnas_db.sql ``` in the ``` SEMNAS/database ``` directory.
   
5. Then open the XAMP file: ``` php.ini ``` -> remove ``` semicolon (;) ``` in front of ``` extension=intl ``` -> save.

<br><br>

## Default Account
| Role | Email | Username | Password |
| --- | --- | --- | --- |
| Super Admin | pentalogy.wasser@gmail.com | Super Admin | semnas2021 |

<br><br>

## Get Started
1. Download and extract this repository.<br>
2. Rename the directory ``` SEMNAS-Web-Management ``` to ``` SEMNAS ```.<br>
3. Open the ``` SEMNAS ``` directory, then open ``` GitBash ``` inside that directory.
   <ul>
       <li>First, check whether there is a problem or not, if there is still an error, just adjust it according to the situation.</li>
       <li>Secondly, this step is mandatory, so please copy the following command:<br><br></li>
   
   <table><tr><td width="780">  
      
   ````bash
   php spark serve
   ````

   </td></tr></table></ul>
4. Open your ``` browser ``` (New tab), then type -> ``` localhost:8080 ``` or customize the one on your ``` GitBash ```.<br>
5. Please login and access the features, enjoy [Done].

<br><br>

## Highlights
<table>
<tr>
<th width="840">Home</th>
</tr>
<tr>
<td><img src="documentation/Home.jpg" alt="home"></td>
</tr>
</table>
<table>
<tr>
<th width="280">About</th>
<th width="280">Registration</th>
<th width="280">Participants</th>
</tr>
<tr>
<td><img src="documentation/About.jpg" alt="about"></td>
<td><img src="documentation/Registration.jpg" alt="registration"></td>
<td><img src="documentation/Participants.jpg" alt="participants"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Login</th>
<th width="280">Manage Data</th>
<th width="280">Print</th>
</tr>
<tr>
<td><img src="documentation/Login.jpg" alt="login"></td>
<td><img src="documentation/Manage Data.jpg" alt="manage-data"></td>
<td><img src="documentation/Print.jpg" alt="print"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Export</th>
<th width="280">Add</th>
<th width="280">Edit</th>
</tr>
<tr>
<td><img src="documentation/Export.jpg" alt="export"></td>
<td><img src="documentation/Add.jpg" alt="add"></td>
<td><img src="documentation/Edit.jpg" alt="edit"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Delete</th>
<th width="280">Search</th>
<th width="280">Pagination</th>
</tr>
<tr>
<td><img src="documentation/Delete.jpg" alt="delete"></td>
<td><img src="documentation/Search.jpg" alt="search"></td>
<td><img src="documentation/Pagination.jpg" alt="pagination"></td>
</tr>
</table>
<table>
<tr>
<th width="280">Add Validation</th>
<th width="280">Edit Validation</th>
<th width="280">Delete Validation</th>
</tr>
<tr>
<td><img src="documentation/Add Validation.jpg" alt="add-validation"></td>
<td><img src="documentation/Edit Validation.jpg" alt="edit-validation"></td>
<td><img src="documentation/Delete Validation.jpg" alt="delete-validation"></td>
</tr>
</table>

<br><br>

## Reminder
There is still a bug in the data search feature. Data that is not found should have a caption in the table, but currently this has not been achieved.

<br><br>

## Appreciation
If this work is useful to you, then support this work as a form of appreciation to the author by clicking the ``` ⭐Star ``` button at the top of the repository.

<br><br>

## Disclaimer
This application is my own work and is not the result of plagiarism from other people's research or work, except those related to third party services which include: libraries, frameworks, and so on.

<br><br>

## LICENSE
MIT License - Copyright © 2021 - Devan C. M. Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
