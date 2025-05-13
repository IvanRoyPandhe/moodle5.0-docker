<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_file', language 'id', version '5.0'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Bersihkan direktori secara asinkron';
$string['asyncpurge_help'] = 'Jika diaktifkan, direktori baru dibuat dengan revisi singgahan dan direktori lama akan dihapus secara asinkron melalui tugas terjadwal.';
$string['autocreate'] = 'Buat direktori otomatis';
$string['autocreate_help'] = 'Jika diaktifkan, direktori yang ditentukan di jalur akan dibuat secara otomatis jika belum ada.';
$string['lockwait'] = 'Waktu tunggu kunci maksimum';
$string['lockwait_help'] = 'Jumlah waktu maksimum dalam detik untuk menunggu kunci eksklusif sebelum membaca atau menulis kunci singgahan. Ini hanya digunakan untuk definisi singgahan yang memerlukan penguncian baca atau tulis.';
$string['path'] = 'Jalur singgahan';
$string['path_help'] = 'Direktori yang harus digunakan untuk menyimpan berkas untuk penyimpanan singgahan ini. Jika dibiarkan kosong (bawaan) sebuah direktori akan secara otomatis dibuat di direktori moodledata. Ini dapat digunakan untuk mengarahkan penyimpanan berkas ke direktori pada drive yang berkinerja lebih baik (seperti yang ada di memori).';
$string['pluginname'] = 'Singgahan berkas';
$string['prescan'] = 'Pra pindai direktori';
$string['prescan_help'] = 'Jika diaktifkan, direktori dipindai saat singgahan pertama kali digunakan dan permintaan berkas diperiksa terlebih dahulu dengan data pindaian. Ini dapat membantu jika Anda memiliki sistem berkas yang lambat dan menemukan bahwa operasi berkas menyebabkan Anda mengalami \'bottleneck\'.';
$string['privacy:metadata'] = 'Pengaya penyimpan berkas singgahan menyimpan data secara singkat sebagai bagian dari fungsi singgahannya tetapi data ini dibersihkan secara teratur.';
$string['serializer_igbinary'] = 'Serializer igbinary';
$string['serializer_php'] = 'Serializer PHP bawaan';
$string['singledirectory'] = 'Penyimpanan direktori tunggal';
$string['singledirectory_help'] = 'Jika berkas yang diaktifkan (item yang disinggahkan) akan disimpan dalam satu direktori daripada dipecah menjadi beberapa direktori.

Mengaktifkan ini akan mempercepat interaksi berkas tetapi harus dibayar dengan peningkatan risiko mengenai batasan sistem berkas.

Dianjurkan untuk hanya mengaktifkan ini jika hal berikut ini benar:

* Jika Anda tahu jumlah item dalam singgahan akan cukup kecil sehingga tidak akan menyebabkan masalah pada sistem berkas yang Anda jalankan.
* Data yang disinggahkan tidak mahal untuk dihasilkan. Jika tetap menggunakan bawaan mungkin masih menjadi pilihan yang lebih baik karena mengurangi kemungkinan masalah.';
$string['task_asyncpurge'] = 'Membersihkan file secara asinkron menyimpan direktori revisi singgahan lama';
$string['useserializer'] = 'Gunakan serializer';
$string['useserializer_help'] = 'Serializer yang digunakan untuk serialisasi. Serializer igbinary, jika tersedia, dapat mengurangi persyaratan penyimpanan untuk singgahan yang besar. Ini hanya didukung saat ekstensi igbinary dimuat.';
