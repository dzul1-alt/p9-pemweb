# LAPORAN PRAKTIKUM PEMROGRAMAN WEB DINAMIS

## MODUL: PEMROSESAN FORM DENGAN PHP (METODE POST DAN GET)

---

## I. Tujuan Praktikum
1.  Memahami dan mengimplementasikan mekanisme transfer data dari Form HTML ke *script* PHP.
2.  Menguasai penggunaan variabel *superglobal* `$_POST[]` dan `$_GET[]` untuk membaca data dari komponen form.
3.  Menerapkan logika perhitungan dan pemrosesan data (seperti perhitungan komisi, selisih waktu, bunga, dan pecahan uang) di dalam *script* PHP.
4.  Mengamati dan menganalisis perbedaan serta dampak penggunaan metode `POST` dan `GET` pada form.

---

## II. Dasar Teori

### A. Form HTML
Form adalah elemen dasar HTML yang digunakan untuk mengumpulkan input dari pengguna. Atribut utama dalam form adalah:
* **`method`**: Menentukan bagaimana data dikirim ke server. Nilai umumnya adalah `POST` atau `GET`.
* **`action`**: Menentukan URL *script* yang akan memproses data form setelah tombol *submit* diklik.

### B. Variabel Superglobal PHP
PHP menyediakan variabel *superglobal* berupa *array* asosiatif yang otomatis menampung data yang dikirim dari form, yaitu:
* **`$_POST[]`**: Digunakan untuk mengambil data yang dikirimkan menggunakan `method="post"`. Data dikirimkan melalui badan (*body*) HTTP Request dan tidak terlihat di URL.
* **`$_GET[]`**: Digunakan untuk mengambil data yang dikirimkan menggunakan `method="get"`. Data dikirimkan melalui *query string* pada URL.

### C. Perbedaan POST vs. GET

| Kriteria | POST | GET |
| :--- | :--- | :--- |
| **Visibilitas Data** | Data tidak terlihat di URL. | Data terlihat jelas di URL. |
| **Batasan Panjang** | Tidak ada batasan signifikan (ideal untuk data besar/file). | Terbatas (sekitar 2048 karakter) oleh panjang URL. |
| **Keamanan** | Lebih aman untuk data sensitif. | Kurang aman (data terekspos dan tersimpan di *history* browser). |
| **Fungsi Utama** | Mengirimkan/Memodifikasi data ke server. | Mengambil/Mendapatkan data dari server. |

---

## III. Percobaan dan Analisis

### Percobaan 1: Dasar Pemrosesan Form (Form Data Pribadi)

Percobaan ini menunjukkan cara membaca berbagai jenis input form (`text`, `textarea`, `radio`, `select`, `checkbox`) menggunakan metode `POST`.

1.  **Form Input** (`script6-1.php`): Form menggunakan `method="post"` dan mengirim data ke `script6-1proses.php`. Setiap komponen form memiliki atribut `name` (`nama`, `alamat`, `sex`, dll.) yang menjadi kunci dalam `$_POST`.
2.  **Skrip Pemrosesan** (`script6-1proses.php`): Skrip mengambil nilai menggunakan `$_POST[]` dan menampilkannya:

---

```PHP

// Contoh pengambilan data
$namaAnda = $_POST['nama'];
$alamatAnda = $_POST['alamat'];

```

Hasil: Data berhasil ditransfer dan ditampilkan dalam format tabel, membuktikan transfer data form dasar bekerja.

---

Percobaan 2: Perhitungan Komisi SalesmanPercobaan ini berfokus pada pengambilan data numerik (penjualan dan komisi) dan melakukan operasi perkalian.
1. Form Input (script6-2.php): Form menggunakan method="post" untuk mengirim nilai penjualan dan komisi ke script6-2proses.php.
2. Skrip Pemrosesan (script6-2proses.php)

```PHP

// Hitung komisi
$komisi = $nilaiJual * $prosenKomisi / 100;
Hasil: Skrip berhasil menghitung komisi berdasarkan persentase komisi yang dimasukkan.Percobaan 3: Menghitung Selisih Dua WaktuPercobaan ini menggunakan data jam, menit, dan detik untuk diubah ke total detik, kemudian dihitung selisihnya.Form Input (script6-3.php): Form meminta input Jam, Menit, dan Detik untuk Waktu 1 dan Waktu 2 (6 field input).Skrip Pemrosesan (script6-3proses.php):PHP// Menghitung total detik untuk waktu pertama
$totalDetik1 = $_POST['jam1'] * 3600 + $_POST['menit1'] * 60 + $_POST['detik1'];

```
Hasil: Skrip berhasil menghitung komisi berdasarkan persentase komisi yang dimasukkan.

---

Percobaan 3: Menghitung Selisih Dua Waktu
Percobaan ini menggunakan data jam, menit, dan detik untuk diubah ke total detik, kemudian dihitung selisihnya.
1. Form Input (script6-3.php): Form meminta input Jam, Menit, dan Detik untuk Waktu 1 dan Waktu 2 (6 field input).
2. Skrip Pemrosesan (script6-3proses.php):

```PHP

// Menghitung total detik untuk waktu kedua
$totalDetik2 = $_POST['jam2'] * 3600 + $_POST['menit2'] * 60 + $_POST['detik2'];

// Hitung selisih total detik
$selisih = $totalDetik1 - $totalDetik2;

```

Hasil: Skrip menunjukkan selisih total waktu antara Waktu 1 dan Waktu 2 dalam satuan detik.

---

Percobaan 4: Perhitungan Saldo Tabungan (Bunga Majemuk)
Percobaan ini menerapkan rumus Bunga Majemuk menggunakan fungsi pow() PHP.
1. Form Input (tugas1-1.php): Form meminta Saldo Awal, Bunga Perbulan (%), dan Lama Menabung (Bulan).
2. Skrip Pemrosesan (tugas1-2proses.php)

```PHP
$saldoAwal = $_POST['saldo_awal'];
$bungaPersen = $_POST['bunga_persen'];
$bulan = $_POST['bulan'];

$bungaDesimal = $bungaPersen / 100;

// Rumus Bunga Majemuk: A = P(1 + r)^t
$saldoAkhir = $saldoAwal * pow((1 + $bungaDesimal), $bulan);

```

Hasil: Saldo akhir dihitung berdasarkan efek compounding interest selama periode menabung yang ditentukan.

---

Percobaan 5: Perhitungan Pecahan UangPercobaan ini menunjukkan penggunaan operator integer division (intval) dan modulus (%) untuk memecah suatu nilai uang menjadi denominasi terkecil.
1. Form Input (tugas2-1.php): Form meminta input jumlah_uang.
2. Skrip Pemrosesan (tugas2-1proses.php)

```PHP

$jumlahUang = $_POST['jumlah_uang'];
$sisa = $jumlahUang; 

// Pecahan 100.000
$pecahan100k = intval($sisa / 100000);
$sisa = $sisa % 100000;

// Pecahan 50.000
$pecahan50k = intval($sisa / 50000);
$sisa = $sisa % 50000;

// ... dst.

```

Hasil: Skrip mencetak jumlah lembar/keping yang dibutuhkan untuk setiap pecahan (Rp 100.000, Rp 50.000, Rp 20.000, Rp 5.000, Rp 100, dan Rp 50).

---

Percobaan 6: Perbandingan Metode POST dan GET (Form Pendaftaran)
Percobaan ini menganalisis form pendaftaran mahasiswa saat diimplementasikan dengan GET dan membandingkannya dengan POST.

| File  | Metode | Pengambilan Data | Keterangan |
| :--- | :--- | :--- | :--- |
| input.html & proses4.php | POST | $_POST[] | Data tersembunyi, cocok untuk data sensitif. |
| jumlah.html & proses5.php | GET | $_GET[] | Data terlihat di URL, cocok untuk query ringan.|
| tugas3-1.php (Pendaftaran) | GET | $_GET[] | Form pendaftaran yang besar diubah menggunakan GET.|

---

Analisis Perubahan method='get' (Pendaftaran)
1. Fungsi Tetap Berjalan: Skrip PHP (tugas6-1proses.php) tetap dapat membaca dan menampilkan data input karena variabel pengambilannya telah disesuaikan dari $_POST[] menjadi $_GET[].
2. Akibat method='get': Semua data input, termasuk Nama Lengkap, Alamat Rumah, dan Nilai UAN, tampil di address bar browser sebagai query string. Hal ini melanggar prinsip keamanan data pribadi dan tidak disarankan untuk form pendaftaran yang kompleks atau sensitif.

---

IV. Kesimpulan
- Form dan PHP adalah fondasi dalam Pemrograman Web Dinamis.Form (HTML) mengumpulkan input, dan script PHP bertindak sebagai backend untuk memproses input tersebut.
- Penggunaan $_POST[] dan $_GET[] harus selaras dengan atribut method yang digunakan pada tag <form>.
- Metode POST adalah pilihan standar dan paling aman untuk pengiriman form yang memuat data sensitif, banyak, atau yang bertujuan untuk memodifikasi data di server.
- Metode GET hanya disarankan untuk mengambil data atau mengirim data yang tidak sensitif dan berjumlah sedikit (misalnya, query pencarian). Jika digunakan pada form pendaftaran, data pribadi akan terekspos di URL.
- PHP efektif digunakan untuk berbagai logika perhitungan setelah data diambil dari form, termasuk operasi aritmatika sederhana, konversi waktu, perhitungan finansial (bunga majemuk), dan operasi modular untuk pemecahan nilai.

