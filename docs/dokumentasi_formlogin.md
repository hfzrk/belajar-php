# Dokumentasi Sistem Login

## Overview

Sistem login ini terdiri dari beberapa file yang bekerja sama untuk memverifikasi kredensial pengguna, mengelola session, dan melindungi halaman admin.

## Daftar File dan Penjelasan

### /formlogin/index.php

- **Fungsi:** Menampilkan form login dan pesan umpan balik.
- **Alasan:** Menyediakan antarmuka bagi pengguna untuk memasukkan username dan password.

### /formlogin/cek_login.php

- **Fungsi:** Memproses data login yang dikirimkan dari form.
- **Perubahan:**
  - Session dimulai di paling atas menggunakan `session_start()` agar tidak terjadi error "headers already sent".
  - Validasi kredensial dilakukan, dan jika berhasil, variabel session `username` dan `status` diset.
  - Setelah redirection menggunakan `header("location:...")`, ditambahkan `exit()` untuk menghentikan eksekusi script.
- **Alasan:** Memulai session sebelum ada output dan penggunaan `exit()` memastikan redirection berjalan dengan benar tanpa error.

### /formlogin/admin/index.php

- **Fungsi:** Menampilkan halaman dashboard admin.
- **Perubahan:**
  - Session diinisialisasi di awal agar tidak ada output sebelum header.
  - Ditambahkan validasi session dengan pengecekan `!isset($_SESSION['status']) || $_SESSION['status'] !== "login"`.
  - Redirection ke halaman login jika validasi gagal diikuti dengan `exit()`.
- **Alasan:** Memastikan hanya pengguna yang sudah login dapat mengakses halaman admin, sehingga meningkatkan keamanan.

### /formlogin/admin/logout.php

- **Fungsi:** Menghancurkan session dan melakukan logout pengguna.
- **Alasan:** Menjamin session dihancurkan dengan baik dan pengguna diarahkan kembali ke form login dengan parameter logout.

## Kesimpulan

- Memulai session di bagian atas file sangat penting untuk menghindari error terkait header.
- Penggunaan `exit()` setelah redirection mencegah eksekusi script lebih lanjut yang dapat menyebabkan masalah.
- Pengecekan session pada halaman admin memastikan bahwa hanya pengguna yang terautentikasi yang dapat mengakses konten sensitif.
