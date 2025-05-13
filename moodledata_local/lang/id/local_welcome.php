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
 * Strings for component 'local_welcome', language 'id', version '5.0'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Pengaya autentikasi';
$string['auth_plugins_desc'] = 'Pilih pengaya autentikasi yang akan dikirimi pesan selamat datang';
$string['configure'] = 'Konfigurasi pengaya ini';
$string['customprofilefields'] = 'Ruas profil kustom';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Pengguna baru [[fullname]]</h3>
    Akun baru telah dibuat dengan detail sebagai berikut:</td></tr>
<tr><td>Nama:</td><td>[[fullname]]</td></tr>
<tr><td>Nama Pengguna: </td><td>[[username]]</td></tr>
<tr><td>Surel: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Seorang pengguna baru mendaftar di [[sitename]] : [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Selamat datang [[fullname]]</h3>
    Akun Moodle Anda telah dibuat dan Anda siap! Akun
    telah dibuat di [[sitelink]] dengan rincian sebagai berikut:</td></tr>
<tr><td>Nama:</td><td>[[fullname]]</td></tr>
<tr><td>Nama pengguna: </td><td>[[username]]</td></tr>
<tr><td>Surel: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Jika Anda pernah kehilangan kata sandi, mengatur ulang itu mudah:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Halo [[fullname]] Selamat datang di [[sitename]]';
$string['defaultprofilefields'] = 'Ruas profil bawaan';
$string['fieldname'] = 'Nama ruas';
$string['globalhelp'] = 'Pengaya untuk Moodle ini mengirimkan pesan selamat datang yang dapat dikonfigurasi ke pengguna baru.
<br><br>
Pengaya menggunakan sistem acara di Moodle dan akan dipicu saat baru
pengguna dibuat, tidak peduli apakah ini adalah akun yang dibuat secara manual atau
akun dibuat menggunakan pendaftaran mandiri.<br>
<br>
Tabel di halaman ini menampilkan kolom profil yang tersedia yang dapat digunakan di templat pesan di halaman konfigurasi pengaya ini.
Nilai yang ditampilkan dalam tabel ini adalah nilai kolom profil ANDA, nilai tersebut akan diganti dengan nilai penerima saat surel selamat datang dikirim.';
$string['message_moderator'] = 'Pesan moderator';
$string['message_moderator_desc'] = 'Kirim pesan ke moderator';
$string['message_moderator_enabled'] = 'Aktifkan pesan moderator';
$string['message_moderator_enabled_desc'] = 'Kotak centang ini memungkinkan pengiriman pesan notifikasi ke moderator';
$string['message_moderator_subject'] = 'Topik moderator';
$string['message_moderator_subject_desc'] = 'Ini akan menjadi subjek email yang dikirim ke moderator. Gunakan [[fullname]] sebagai tag, ini akan diganti dengan Nama Depan Pengguna Nama Belakang.';
$string['message_user'] = 'Pesan pengguna';
$string['message_user_desc'] = 'Kirim pesan ke pengguna baru';
$string['message_user_enabled'] = 'Aktifkan pesan pengguna';
$string['message_user_enabled_desc'] = 'Kotak centang ini memungkinkan pengiriman pesan selamat datang ke pengguna baru<br><br>Kunjungi <a href="{$a}">laman ini untuk melihat daftar ruas yang tersedia</a>';
$string['message_user_subject'] = 'Subjek pengguna';
$string['message_user_subject_desc'] = 'Ini akan menjadi subjek surel yang dikirim ke pengguna. Gunakan [[fullname]] sebagai tag, ini akan diganti dengan Nama Depan Pengguna Nama Belakang.';
$string['moderator_email'] = 'Surel moderator';
$string['moderator_email_desc'] = 'Notifikasi pengguna baru dikirim ke alamat surel ini';
$string['pluginname'] = 'Selamat Datang Moodle';
$string['privacy:metadata'] = 'Pengaya ini hanya mengirim surel selamat datang. Itu tidak menyimpan data pribadi apa pun.';
$string['resetpass'] = 'Atur ulang kata sandi Anda di sini';
$string['sender_email'] = 'Alamat surel pengirim';
$string['sender_email_desc'] = 'Saat pengguna baru masuk, alamat surel ini digunakan untuk mengirim pesan pemberitahuan, pengguna akan dapat melihat alamat surel ini';
$string['sender_firstname'] = 'Nama depan pengirim pesan selamat datang';
$string['sender_firstname_desc'] = 'Nama depan yang digunakan saat mengirim surel ke pengguna.';
$string['sender_lastname'] = 'Nama belakang moderator';
$string['sender_lastname_desc'] = 'Nama belakang yang digunakan saat mengirim surel ke pengguna.';
$string['type'] = 'Tipe';
$string['welcomefields'] = 'Ruas templat tambahan';
$string['yourvalue'] = 'Nilai Anda';
