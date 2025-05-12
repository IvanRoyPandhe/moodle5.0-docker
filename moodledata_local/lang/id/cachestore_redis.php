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
 * Strings for component 'cachestore_redis', language 'id', version '5.0'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'Jalur berkas CA';
$string['ca_file_help'] = 'Lokasi file Otoritas Sertifikat pada sistem berkas lokal';
$string['clustermode'] = 'Mode klaster';
$string['clustermode_help'] = 'Mengaktifkan mode cluster akan menjalankan fungsi Redis Cluster, memungkinkan server Anda melayani beberapa server untuk menangani permintaan bersamaan secara bersamaan.';
$string['clustermodeunavailable'] = 'Klaster Redis saat ini tidak tersedia. Harap pastikan bahwa ekstensi PHP Redis mendukung fungsionalitas Redis Cluster.';
$string['compressor_none'] = 'Tidak ada kompresi.';
$string['compressor_php_gzip'] = 'Gunakan kompresi gzip.';
$string['compressor_php_zstd'] = 'Gunakan kompresi Zstandard.';
$string['connectiontimeout'] = 'Batas waktu koneksi';
$string['connectiontimeout_help'] = 'Ini menetapkan batas waktu saat mencoba menyambung ke server Redis.';
$string['encrypt_connection'] = 'Gunakan enkripsi TLS.';
$string['encrypt_connection_help'] = 'Gunakan TLS untuk terhubung ke Redis. Jangan gunakan \'tls://\' di nama hos untuk Redis, gunakan opsi ini sebagai gantinya.';
$string['password'] = 'Kata sandi';
$string['password_help'] = 'Ini mengatur kata sandi server Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefiks kunci';
$string['prefix_help'] = 'Prefiks ini digunakan untuk semua nama kunci di server Redis.
* Jika Anda hanya memiliki satu model Moodle yang menggunakan server ini, Anda dapat membiarkan nilai ini sebagai bawaan.
* Karena batasan panjang kunci, maksimal 5 karakter yang diperbolehkan.';
$string['prefixinvalid'] = 'Prefiks tidak valid. Anda hanya dapat menggunakan a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Pengaya penyimpan singgahan Redis menyimpan data secara singkat sebagai bagian dari fungsi singgahannya. Data ini disimpan di server Redis tempat data dihapus secara berkala.';
$string['privacy:metadata:redis:data'] = 'Berbagai data yang disimpan dalam singggahan';
$string['serializer_igbinary'] = 'Serializer igbinary';
$string['serializer_php'] = 'Serializer PHP bawaan';
$string['server'] = 'Server';
$string['server_help'] = 'Server Redis yang akan digunakan untuk pengujian.

Beberapa contoh nilai:

* testredis.abc.com - Untuk terhubung ke server Redis dengan nama host (Port 6379 secara bawaan).
* testredis.abc.com:1234 - Untuk terhubung ke server Redis dengan nama host dengan port tertentu.
* 1.2.3.4 - Untuk terhubung ke server Redis berdasarkan alamat IP (Port 6379 secara bawaan).
* 1.2.3.4:1234 - Untuk terhubung ke server Redis berdasarkan alamat IP dengan port tertentu.
* unix:///var/redis.sock - Untuk terhubung ke server Redis menggunakan soket Unix.
* /var/redis.sock - Untuk terhubung ke server Redis menggunakan soket Unix (format alternatif).
* Jika mode cluster diaktifkan, harap tentukan server yang dipisahkan oleh baris baru:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>
   Lihat contoh di atas untuk menulis server.

Lihat <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Menerima Koneksi Klien</a> dan <a href="https:// redis.io/resources/clients/#php" target="_new">Klien Redis PHP</a>.';
$string['task_ttl'] = 'Kosongkan memori yang digunakan oleh entri yang kedaluwarsa di singgahan Redis';
$string['test_clustermode'] = 'Mode Klaster';
$string['test_clustermode_desc'] = 'Aktifkan Pengujian dalam mode klaster Redis.';
$string['test_password'] = 'Uji kata sandi server';
$string['test_password_desc'] = 'Uji kata sandi server Redis.';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Serializer yang digunakan untuk pengujian.';
$string['test_server'] = 'Uji server';
$string['test_server_desc'] = 'Server Redis yang akan digunakan untuk pengujian.

Beberapa contoh nilai:

* testredis.abc.com - Untuk terhubung ke server Redis dengan nama hos (Porta 6379 secara bawaan).
* testredis.abc.com:1234 - Untuk terhubung ke server Redis dengan nama hos dengan porta tertentu.
* 1.2.3.4 - Untuk terhubung ke server Redis berdasarkan alamat IP (Porta 6379 secara bawaan).
* 1.2.3.4:1234 - Untuk terhubung ke server Redis berdasarkan alamat IP dengan porta tertentu.
* unix:///var/redis.sock - Untuk terhubung ke server Redis menggunakan soket Unix.
* /var/redis.sock - Untuk terhubung ke server Redis menggunakan soket Unix (format alternatif).
* Jika mode cluster diaktifkan, harap tentukan server yang dipisahkan oleh baris baru:<br>
   172.23.0.11<br>
   172.23.0.12<br>
   172.23.0.13<br>
   Lihat contoh di atas untuk menulis server.

Lihat <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Menerima Koneksi Klien</a> dan <a href="https:// redis.io/resources/clients/#php" target="_new">Klien Redis PHP</a>.';
$string['test_ttl'] = 'Menguji TTL';
$string['test_ttl_desc'] = 'Jalankan uji kinerja menggunakan singgahan yang memerlukan TTL (set yang lebih lambat).';
$string['usecompressor'] = 'Gunakan kompresor';
$string['usecompressor_help'] = 'Menentukan kompresor yang akan digunakan setelah serialisasi. Ini dilakukan pada tingkat API Cache Moodle, bukan pada tingkat php-redis.';
$string['useserializer'] = 'Gunakan serializer';
$string['useserializer_help'] = 'Menentukan serializer yang akan digunakan untuk serialisasi. Serializer yang valid adalah Redis::SERIALIZER_PHP atau Redis::SERIALIZER_IGBINARY. Yang terakhir ini hanya didukung ketika phpredis dikonfigurasi dengan opsi --enable-redis-igbinary dan ekstensi igbinary dimuat.';
