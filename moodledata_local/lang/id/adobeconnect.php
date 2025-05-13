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
 * Strings for component 'adobeconnect', language 'id', version '5.0'.
 *
 * @package     adobeconnect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Tambahkan';
$string['addpresenter'] = 'Tambahkan';
$string['admin_httpauth'] = 'Header Autentikasi HTTP';
$string['admin_httpauth_desc'] = 'Nilai HTTP_AUTH_HEADER yang digunakan dalam custom.ini Anda';
$string['admin_login'] = 'Masuk Admin';
$string['admin_login_desc'] = 'Masuk untuk akun admin utama';
$string['admin_password'] = 'Kata Sandi Admin';
$string['admin_password_desc'] = 'Kata sandi untuk akun admin utama';
$string['adminemptyxml'] = 'Tidak dapat terhubung ke server Adobe Connect Pro saat ini. Klik lanjutkan untuk melanjutkan ke halaman pengaturan aktivitas dan uji koneksi';
$string['adminnotsetupproperty'] = 'Modul aktivitas tidak dikonfigurasi dengan benar. Klik lanjutkan untuk melanjutkan ke halaman pengaturan aktivitas dan menguji koneksi';
$string['adobeconnect'] = 'Adobe Connect';
$string['adobeconnect:meetinghost'] = 'Host Rapat';
$string['adobeconnect:meetingparticipant'] = 'Peserta Rapat';
$string['adobeconnect:meetingpresenter'] = 'Presenter Rapat';
$string['adobeconnectfieldset'] = 'Pengaturan Adobe Connect';
$string['adobeconnecthost'] = 'Host Adobe Connect';
$string['adobeconnecthostdescription'] = 'Host dapat memberikan hak istimewa kepada pengguna lain, memulai dan menghentikan rapat selain apa yang dapat dilakukan oleh presenter.';
$string['adobeconnectintro'] = 'Pengantar';
$string['adobeconnectname'] = 'Judul rapat';
$string['adobeconnectparticipant'] = 'Peserta Adobe Connect';
$string['adobeconnectparticipantdescription'] = 'Dapat melihat, tetapi tidak dapat mengubah pengaturan rapat apa pun';
$string['adobeconnectpresenter'] = 'Presenter Adobe Connect';
$string['adobeconnectpresenterdescription'] = 'Presenter rapat dan dapat menyajikan konten, berbagi layar, mengirim pesan teks, memoderasi pertanyaan, membuat catatan teks, menyiarkan audio dan video, serta mendorong konten dari tautan web';
$string['allusers'] = 'semua pengguna';
$string['assignadoberole'] = 'Menetapkan Adobe Roles';
$string['assignadoberoles'] = 'Menetapkan peran $a->role untuk $a->meetname ($a->groupname)';
$string['assignroles'] = 'Tetapkan peran';
$string['availablelist'] = 'Tersedia';
$string['backtomeeting'] = 'Kembali ke rapat $a';
$string['cancelchanges'] = 'Batalkan';
$string['connectiontesttitle'] = 'Jendela uji koneksi';
$string['conntestintro'] = '<p>Serangkaian pengujian telah dijalankan untuk menentukan apakah server Adobe Connect Pro telah disiapkan dengan benar agar integrasi ini berfungsi dan juga untuk menentukan apakah kredensial pengguna yang diberikan dalam pengaturan global aktivitas memiliki izin yang benar untuk menjalankan tugas yang diperlukan oleh modul aktivitas. Jika salah satu pengujian di bawah ini gagal, modul aktivitas ini tidak akan berfungsi dengan benar.</p><p> Untuk bantuan dan dokumentasi lebih lanjut tentang cara menyiapkan server Adobe Connect Pro Anda, silakan lihat halaman bantuan MoodleDocs untuk modul aktivitas ini <a href="{$a->url}">Halaman bantuan</a></p>';
$string['duplicatemeetingname'] = 'Nama rapat duplikat ditemukan di server';
$string['duplicateurl'] = 'URL rapat duplikat ditemukan di server';
$string['editingfor'] = 'Menyunting untuk: $a';
$string['email_login'] = 'Masuk dengan alamat surel';
$string['email_login_desc'] = 'Centang opsi ini hanya jika login server Connect Pro Anda diatur untuk menggunakan alamat email. Perhatikan bahwa mengaktifkan/menonaktifkan opsi ini selama penggunaan modul aktivitas ini secara rutin dapat berpotensi membuat pengguna duplikat di server Connect Pro.';
$string['emptyxml'] = 'Tidak dapat terhubung ke server Adobe Connect Pro saat ini. Harap beri tahu administrator Moodle Anda.';
$string['endtime'] = 'Akhir waktu';
$string['error1'] = 'Anda harus menjadi administrator situs untuk mengakses halaman ini';
$string['error2'] = 'Properti \'{$a}\' kosong, silakan masukkan nilai dan simpan pengaturannya';
$string['errormeeting'] = 'Galat saat mengambil rekaman';
$string['errorrecording'] = 'Tidak dapat menemukan sesi rekaman';
$string['event_assign_role'] = 'Pengguna diberi peran Connect Pro';
$string['event_join_meeting'] = 'Pengguna bergabung dalam rapat';
$string['event_unassign_role'] = 'Pengguna membatalkan penetapan peran Connect Pro';
$string['event_view'] = 'Aktivitas dilihat';
$string['event_view_all'] = 'Semua contoh aktivitas dilihat';
$string['event_view_recording'] = 'Pengguna melihat rekaman';
$string['existingusers'] = '$a pengguna yang sudah ada';
$string['greaterstarttime'] = 'Waktu mulai tidak boleh lebih besar dari waktu berakhir';
$string['groupswitch'] = 'Filter berdasarkan grup';
$string['host'] = 'Host';
$string['host_desc'] = 'Ke mana panggilan REST dikirim';
$string['https'] = 'Koneksi HTTPS';
$string['https_desc'] = 'Hubungkan ke server Connect melalui HTTPS';
$string['invalidadobemeeturl'] = 'Entri tidak valid untuk kolom ini. Klik gelembung bantuan untuk entri yang valid';
$string['invalidurl'] = 'URL harus dimulai dengan huruf (a-z)';
$string['joinmeeting'] = 'Gabung Rapat';
$string['longurl'] = 'URL rapat tersebut terlalu panjang. Coba persingkat';
$string['meethost_desc'] = 'Domain tempat server Adobe diinstal';
$string['meetinfo'] = 'Detail Rapat Lebih Lanjut';
$string['meetinfotxt'] = 'Lihat detail rapat server';
$string['meetingend'] = 'Waktu berakhirnya rapat';
$string['meetinggroup'] = 'Grup rapat';
$string['meetinghost'] = 'Domain rapat';
$string['meetingintro'] = 'Ringkasan Rapat';
