<?php 
// Membuat Aplikasi MVC dengan PHP #1 Pendahuluan

  // MVC => Model(Data) - View(Tampilan) - Controller(Proses)
    # Pola arsitektur pada perancangan perangkat lunak berorientasi objek
    # Tujuan MVC adalah memisahkan antara tampilan, data, dan proses
    # Controller adalah komponen pengendali utama alur proses

  // Kenapa MVC?
    # Organisasi dan Struktur Kode
    # Pemisahan login dan tampilan
    # Perawatan Kode
    # Implementasi konsep OOP yang sudah dipelajari
    # Digunakan oleh banyak Web Application Framework
      // Framework MVC
        # PHP => CodeIgniter, Laravel, Yii, dll
        # Java => Spring MVC, JSF, Struts, dll
        # Python => Django, CherryPPy, dll
        # Ruby => Ruby on Rails, Sinatra, dll
        # JavaScript => AngularJS, React, Backbone.js, dll
  

  // Ada controller default yang memiliki method default; URL rapi dibuat dengan HT Access


  // Controller
    # Perantara antara model dan view
    # Menangani pemrosesan pada aplikasi
    # Menangani aksi dari user
  // View
    # Output, apa yang dilihat oleh user
    # Representasi visual dari model
    # Lapisan Presentasi
  // Model
    # Representasi Pengetahuan
    # Mengelola Data
    # Logika Bisnis


  // #2 Persiapan
    # Teknik Bootstraping

  // #2 Routing
    # Mengubah URL jadi rapi
    # htaccess untuk memodifikasi server apache
    # user tidak boleh mengakses folder app, maka harus di block
    # Options -Indexes, selama tidak ada file dengan nama index maka jangan tampilkan isi foldernya
    # Options -Multiviews, menghindari kesalahan atau ambigu ketika membuka folder public
    # RewriteCond %{REQUEST_FILENAME} !-d; url berupa folder maka diabaikan
    # RewriteCond %{REQUEST_FILENAME} !-f; url berupa file maka diabaikan; menghindari nama file/folder yang sama dengan controller atau mathod
    # RewriteRule ^(.*)$ index.php?url=$1 [L]; ambil karakternya sampai habis kecuali enter setelah itu arahkan ke file index.php yang mengirimkan url ke placeholder; jika rule sudah terpenuhi jangan jalankan rule lain

?>