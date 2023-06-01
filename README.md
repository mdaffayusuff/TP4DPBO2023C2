# **DPBO Tugas Praktikum 4**

##### **Nama : Muhammad Daffa Yusuf Fadhilah**

##### **NIM : 2100543**

Saya Muhammad Daffa Yusuf Fadhilah dengan NIM 2100543 mengerjakan evaluasi TP4
dalam mata kuliah Design Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti
yang telah dispesifikasikan. Aamiin.

### **Design Program**

#### **Database**

![](https://github.com/mdaffayusuff/TP4DPBO2023C2/blob/main/SSTP4/Screenshot%202023-06-01%20221758.png?raw=true)

Database terdiri dari 2 tabel. Member dan domisili. Member merupakan data lengkap pengguna dari nama, email, nomor telepon, tanggal bergabung, dan juga id domisili. Domisili merupakan data tampungan utnuk kumpulan domisili yang tersedia yang nantinya member bisa pilih.

#### **Coding**

Program disusun dengan struktur MVC

- **_Model_** berisi kumpulan perintah CRUD yang dapat dipilih. Crud ini akan mengisi model ketika dijalankan oleh controller.

- **_Controller_** berisi kumpulan penanganan dari ngerahkan program ketika inputan diterima seperti melakukan CRUD pada model dan juga mengarahkan user ke halaman yang dituju.

- **_View_** berisi kumpulan program yang akan menampilkan data data yang dikirimkan oleh controller. View juga dapat menggunakan template yang sudah disediakan untuk membuat ringkas isi view dari pengulanagn design yang sama. View inilah yang sebenarnya dikunjungi oleh user.

- **\_Lainnya** merupakan file lainnya yang berhubungan dengan configurasi dan juga file pengarah perintah pertama yang menerima inputan dari user lalu mengirimnya kembali ke controller untuk di proses.

### **Alur Program**

- Ketika pertama kali dijalankan, program akan membuka file `index.php` yang meneruskan perintah ke controller yang akan menampilkan tampulan depan melalui view

- Ketika melakukan proses Add dan Update, maka perintah tersebut akan masuk ke file `index.php` atau `index_d.php` untuk halaman domisili, yang akan diteruskan ke masing-masing controller yang akan memberikan kita view sebuah form yang bisa diisi (untuk proses add) dan form terisi yang bisa kita ubah (untuk proses update). Setelah sudah melakukan modifikasi, maka perintah akan diterima `index.php` atau `index_d.php` dan diterukan ke controller masing-masing untuk dieksekusi

- Ketika melakukan proses delete, maka perintah akan masuk ke file `index.php` atau `index_d.php` untuk halaman domisili, yang akan diteruskan ke masing-masing controller yang akan langsung mengeksekusi perintah.

### **Dokumentasi**

#### Tampilan Member

![](https://github.com/mdaffayusuff/TP4DPBO2023C2/blob/main/SSTP4/Screenshot%202023-06-01%20223350.png?raw=true)

#### Tampilan Domisili

![](https://github.com/mdaffayusuff/TP4DPBO2023C2/blob/main/SSTP4/Screenshot%202023-06-01%20223429.png?raw=true)

#### Tampilan Add/Edit Member

![](https://github.com/mdaffayusuff/TP4DPBO2023C2/blob/main/SSTP4/Screenshot%202023-06-01%20223448.png?raw=true)

#### Tampilan Add/Edit Domisili

![](https://github.com/mdaffayusuff/TP4DPBO2023C2/blob/main/SSTP4/Screenshot%202023-06-01%20223604.png?raw=true)

https://github.com/mdaffayusuff/TP4DPBO2023C2/assets/95558620/d81856ee-a337-42b6-b862-c8253723c646


