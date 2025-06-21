
# Soal Latihan PHP Dasar & OOP

**Total Skor Maksimal: 100 poin**

---

## A. Function dan Array (Total: 20 poin)

1. **(5 poin)**  
   Buatlah sebuah function bernama `hitungLuasPersegi` yang menerima satu parameter (`sisi`) dan  
   mengembalikan luas dari persegi.

2. **(5 poin)**  
   Buat array associative untuk menyimpan data berikut:  
   - `nama`: "Dani"  
   - `umur`: 17  
   - `jurusan`: "RPL"  
   Lalu tampilkan masing-masing nilainya menggunakan `echo`.

3. **(5 poin)**  
   Buat sebuah array yang berisi 5 nama buah.  
   Gunakan perulangan `foreach` untuk menampilkannya satu per satu.

4. **(5 poin)**  
   Diberikan array berikut:  
   ```php
   $angka = [1, 2, 3];
   ```  
   Tambahkan angka `4` ke dalam array tersebut **tanpa menghapus data sebelumnya**,  
   lalu tampilkan seluruh isi array menggunakan `foreach`.

---

## B. OOP dan Class (Total: 40 poin)

5. **(10 poin)**  
   Buat sebuah class bernama `Mahasiswa` yang memiliki properti `nama` dan `nim`.  
   Buat constructor untuk mengisi properti tersebut, dan method `perkenalan()` yang menampilkan:  
   ```
   Halo, saya [nama] dengan NIM [nim]
   ```

6. **(10 poin)**  
   Buat class `Karyawan` dengan properti `nama` dan method `kerja()`.  
   Kemudian buat class `Manager` yang merupakan turunan dari `Karyawan`  
   dan memiliki method tambahan `pimpinRapat()`.

7. **(10 poin)**  
   Jelaskan secara singkat (boleh dalam bentuk komentar di kode):  
   - Apa itu **constructor** dan kapan dipanggil?  
   - Apa itu **destructor** dan kapan dipanggil?

8. **(10 poin)**  
   Tambahkan **access modifier** pada class berikut ini:  
   - Properti `nama` sebagai `private`  
   - Method `perkenalan()` sebagai `public`  
   - Method `hitungGaji()` sebagai `protected`  
   Jelaskan arti dari masing-masing access modifier tersebut dalam bentuk komentar di dalam kode.

---

## C. Loop dan Switch (Total: 20 poin)

9. **(10 poin)**  
   Buat perulangan `for` dari 1 sampai 5.  
   Tampilkan output seperti berikut:
   ```
   Ini adalah perulangan ke-1  
   Ini adalah perulangan ke-2  
   Ini adalah perulangan ke-3  
   Ini adalah perulangan ke-4  
   Ini adalah perulangan ke-5
   ```

10. **(10 poin)**  
    Buat program menggunakan `switch` untuk mencetak keterangan hari berdasarkan variabel `$hari`.  
    Contoh:
    ```php
    $hari = "Senin";
    ```
    - Jika `Senin` hingga `Jumat`: tampilkan "Hari kerja"  
    - Jika `Sabtu` atau `Minggu`: tampilkan "Hari libur"  
    - Selain itu: tampilkan "Hari tidak dikenali"

---

## Skema Penilaian

| Bagian            | Nomor Soal | Skor Maks |
|-------------------|------------|-----------|
| Function & Array  | 1 - 4      | 20 poin   |
| OOP & Class       | 5 - 8      | 40 poin   |
| Loop & Switch     | 9 - 10     | 20 poin   |
| Penjelasan kode   | 7, 8       | 20 poin   |
| **Total**         |            | **100**   |
