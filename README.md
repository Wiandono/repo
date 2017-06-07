# repo

To-Do List
- Admin [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
  * Login
  * Menampilkan semua list Member
  * Delete Member
  * Verifikasi iklan
  * Delete iklan

- User
  * Registrasi [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
  * Cari iklan
  * Login [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
  
- Member
  * Logout
  * Membuat iklan
  * Memberikan judul iklan
  * Mengupload dan menghapus foto iklan
  * Memberikan harga iklan
  * Menentukan kategori iklan
  * Membuat, megedit, dan menghapus deskripsi iklan
  * Mengedit profil (Nama, Tanggal lahir, Foto profil, No HP, Email, Password) [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
  * Mengedit iklan (Judul, Foto iklan, Harga, Kategori, Deskripsi)
  * Memberikan keterangan iklan (Sold Out, diletakkan disebelah kiri judul dan komentar pada iklan di-disable)
  * Mengirimkan pesan ke member lain dengan mengklik tombol pesan pada profil member lain
  * Memberikan komentar pada iklan tertentu
  * Mendapatkan notifikasi ketika ada iklan [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()

- Front Page
   * Terdapat form login, register dan search bar untuk mencari iklan dan kategori iklan [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
   * Setelah login akan ditampilkan 10 iklan terbaru dari semua kategori (Min. 5 kategori)
   * Password menggunakan hash MD5 [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
   * Form khusus registrasi (ID - auto increment, nama lengkap, email, username - unique dan password) [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
   * User biasa tetap bisa melihat iklan [![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
   * Tampilan iklan menampilkan nama member yang memposting berupa foto dan harga yang disertai dengan deskripsi dan komentar
   * Halaman profil berisi tampilan foto profil, nama, nomor HP, jumlah iklan dan menampilkan semua postingan iklan dan terdapat kotak notifikasi pesan yang menampung pesan dan komentar dari member lain.
   * Ketika mengklik nama member lain, maka akan ditampilkan halaman profilnya tanpa kotak notifikasinya
   * Ketika iklan diklik maka akan langsung menuju halaman detail dari iklan tersebut dengan menampilkan nama member yang memposting, foto/judul iklan yang diklik, semua komentar, tombol beli dan form komentar
   * Tombol beli akan menghubungi pemilik iklan melalui pesan
