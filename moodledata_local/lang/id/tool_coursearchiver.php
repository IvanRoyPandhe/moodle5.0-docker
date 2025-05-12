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
 * Strings for component 'tool_coursearchiver', language 'id', version '5.0'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Diakses terakhir kali setelah';
$string['accessbefore'] = 'Diakses terakhir kali sebelum';
$string['accessbeforeafter'] = 'Diakses Sebelum / Sesudah';
$string['anycategory'] = 'Kategori Apapun';
$string['archive'] = 'Arsip Kursus';
$string['archivedeletesetting'] = 'Penundaan penghapusan arsip';
$string['archivedeletesetting_help'] = 'Berapa hari penghapusan suatu arsip akan ditunda.';
$string['archiveemail'] = 'Kirim Email "Kursus yang akan diarsipkan"';
$string['archivelimit'] = 'Batas pencarian Arsip';
$string['archivelimit_help'] = 'Jumlah maksimum hasil yang ditampilkan di layar';
$string['archivelimitstring'] = 'Maksimum yang ditampilkan';
$string['archivelist'] = 'Arsip Kursus';
$string['archivelocation'] = 'Subdirektori arsip kursus';
$string['archiverecoverform'] = 'Penghapusan Ditunda';
$string['archivewarningemailsetting'] = 'Default Email Pemberitahuan untuk Pengarsipan Kursus';
$string['archivewarningemailsetting_help'] = 'Ini adalah konten dari sebuah email yang akan dikirimkan kepada seluruh pengajar dari sebuah kursus yang dipilih untuk diarsipkan';
$string['archivewarningemailsettingdefault'] = '%to

Kami memberitahukan kepada anda bahwa kursus Moodle yang anda ajarkan berikut ini akan segera diarsipkan.
Hal ini berarti bahwa kursus ini akan dicadangkan sesuai kondisinya saat ini kemudian dihapus dari Moodle. Jika ada ingin mengeluarkan kursus berikut dari proses ini, silahkan klik tautan yang terdapat di samping kursus.

%courses

Terima kasih.';
$string['archivewarningsubject'] = 'Pemberitahuan: Kursus akan segera diarsipkan';
$string['back'] = 'Mulai Kembali';
$string['backup'] = 'Mencadangkan Kursus';
$string['cannotdeletecoursenotexist'] = 'Tidak dapat menghapus kursus yang tidak ada.';
$string['category'] = 'Kategori';
$string['cli_cannot_continue'] = '\\nDIHENTIKAN: Tidak ada cukup data untuk melanjutkan.\\n';
$string['cli_question_archive'] = 'Arsipkan dan hapus kursus {$a} ini?';
$string['cli_question_archiveemail'] = 'Kirimkan pengguna {$a} sebuah email "Kursus akan diarsipkan"?';
$string['cli_question_delete'] = 'Hapus kursus {$a} ini?';
$string['cli_question_hide'] = 'Sembunyikan kursus {$a} ini?';
$string['cli_question_hideemail'] = 'Kirimkan pengguna {$a} sebuah email "Kursus akan disembunyikan"?';
$string['confirm'] = 'Lanjutkan';
$string['confirmdelete'] = 'Apakah anda yakin akan menghapus?';
$string['confirmmessage'] = 'Apakah anda yakin ingin {$a}';
$string['confirmmessagearchive'] = 'arsipkan dan hapus kursus {$a} ini?';
$string['confirmmessagearchiveemail'] = 'kirimkan sebuah email kepada pemilik kursus {$a} ini?';
$string['confirmmessagebackup'] = 'cadangkan kursus {$a} ini?';
$string['confirmmessagedelete'] = 'hapus tuntas kursus {$a} ini?';
$string['confirmmessagehide'] = 'sembunyikan kursus {$a} ini?';
$string['confirmmessagehideemail'] = 'kirimkan sebuah email kepada pemilik kursus {$a} ini?';
$string['confirmmessageoptout'] = 'keluarkan kursus {$a} ini?';
$string['confirmrestore'] = 'Pulihkan penghapusan arsip yang tertunda?';
$string['course_readded'] = '{$a->fullname} telah dihapus dari daftar yang disisihkan. Terima kasih.';
$string['course_skipped'] = '{$a->fullname} akan dilewati untuk {$a->optoutmonths} bulan berikutnya. Terima kasih.';
$string['coursearchiver'] = 'Pengarsip Kursus';
$string['coursearchiver_help'] = 'Cari kursus menggunakan kriteria berikut: shortname, fullname, idnumber, courseid, tanggal terakhir kali kursus diakses yang sesuai atau *kursus kosong.\\n
Kursus ditampilkan berwarna abu-abu jika telah disembunyikan. Nama Lengkap kursus akan diberi tanda garis jika kursus tersebut adalah *kursus kosong.\\n\\n
CATATAN: Jumlah alamat email yang ditemukan dapat berbeda dari email yang dikirimkan. Hal ini memiliki 2 penyebab.\\n
1. Sebuah kursus yang telah disembunyikan tidak akan mengirimkan email untuk mengingatkan pemilik jika kursus dipilih untuk disembunyikan.\\n
2. Sebuah alamat yang ditampilkan di dalam beberapa kursus akan digabungkan menjadi sebuah email.\\n\\n
*kursus kosong ditentukan dengan  0 tugas, 0 sumber, 0 kategori di dalam buku nilai, dan 0 item yang dinilai di dalam buku nilai.';
$string['coursearchiver_settings'] = 'Pengaturan Pengarsip Kursus';
$string['coursearchiverpath'] = 'Folder untuk menyimpan arsip kursus';
$string['coursearchiverpath_help'] = 'Jalur ini relatif terhadap $CFG->dataroot Moodle';
$string['coursearchiverpreview'] = 'Pratinjau unggah kursus';
$string['coursearchiverresult'] = 'Hasil unggah kursus';
$string['coursedeleted'] = 'Kursus yang telah dihapus';
$string['coursedeletionnotallowed'] = 'Penghapusan kursus tidak diijinkan';
$string['coursefullname'] = 'Nama Lengkap kursus';
$string['courseid'] = 'ID Kursus';
$string['courseidnum'] = 'idnumber kursus';
$string['courseselector'] = 'Hasil pencarian kursus';
$string['courseshortname'] = 'Nama singkat kursus';
$string['courseteacher'] = 'username/email pengajar';
$string['createdafter'] = 'Dibuat setelah';
$string['createdbefore'] = 'Dibuat sebelum';
$string['createdbeforeafter'] = 'Dibuat Sebelum / Sesudah';
$string['crontask'] = 'Tigas penghapusan arsip kursus';
$string['delete'] = 'Hapus Kursus';
$string['deletedarchiveemails'] = 'Alamat email pengajar';
$string['deselectall'] = 'Batalkan Semua Pilihan';
$string['email'] = 'Kirim Email';
$string['emailselector'] = 'Pengguna terpilih untuk menerima email.';
$string['empty'] = 'kosong';
$string['emptycourse'] = 'Kursus Kosong';
$string['emptyonly'] = 'Hanya mengembalikan kursus kosong';
$string['endafter'] = 'Selesai setelah';
$string['endbefore'] = 'Selesai sebelum';
$string['error_key'] = 'Kunci keamanan tidak benar.';
$string['error_nocourseid'] = 'Rekaman kursus tidak memiliki sebuah ID';
$string['error_savepointid'] = 'Titik penyimpanan tidak ditemukan';
$string['errorarchivefile'] = 'Berkas arsip kursus tidak ada.';
$string['errorarchivepath'] = 'Jalur arsip tidak dapat dibuat.';
$string['errorarchivingcourse'] = 'Kursus: ({$a->id}) {$a->fullname} tidak dapat dicadangkan atau diarsipkan.';
$string['errorbackup'] = 'Pencadangan Gagal.';
$string['errordeletingcourse'] = 'Kursus: ({$a->id}) {$a->fullname} tidak dapat dihapus.';
$string['erroremptysearch'] = 'Tidak ada kriteria pencarian diberikan.';
$string['errorhidingcourse'] = 'Kursus: ({$a->id}) {$a->fullname} tidak dapat disembunyikan';
$string['errorinsufficientdata'] = 'Informasi tidak cukup untuk menjalankan aksi ini';
$string['errormissingcourses'] = 'Variabel %courses hilang dari templat email. Ini adalah daftar kursus.';
$string['errormissingto'] = 'Variabel %to hilang dari templat email. Ini adalah nama penerima.';
$string['errornoform'] = 'Form tidak diberikan';
$string['errornonnumericid'] = 'ID Kursus harus numerik';
$string['errornonnumerictimestamp'] = 'Timestamp harus numerik (UNIX timestamp)';
$string['erroroptoutcourse'] = 'Kursus: ({$a->id}) {$a->fullname} tidak dapat disertakan.';
$string['errors'] = 'Kesalahan';
$string['errors_count'] = 'Kesalahan: {$a}';
$string['errorsendingemail'] = 'Email kepada {$a->firstname} {$a->lastname} ({$a->email}) gagal.';
$string['errorvalidarchive'] = 'Tidak ada berkas pencadangan yang valid.';
$string['hidden'] = 'disembunyikan';
$string['hide'] = 'Sembunyikan Kursus';
$string['hideemail'] = 'Kirim Email "Kursus yang akan disembunyikan"';
$string['hidewarningemailsetting'] = 'Email peringatan default untuk Peyembunyian Kursus';
$string['hidewarningemailsetting_help'] = 'Ini adalah konten dari sebuah email yang akan dikirimkan kepada semua pengajar dari kursus yang telah dipiliah untuk disembunyikan.';
$string['hidewarningemailsettingdefault'] = '%to

Kami ingin memberitahukan pada anda bahwa kursus Moodle berikut yang anda ajarkan akan segera disembunyikan.
Hal ini berarti siswa yang masih terdaftar dalam kursus tersebut tidak lagi memiliki akses ke kursus tersebut. Jika anda ingin mengeluarkan salah satu kursus berikut dari proses ini, silahkan klik tautan di samping kursus.

%courses

Terima kasih.';
$string['hidewarningsubject'] = 'Peringatan: Kursus akan segera disembunyikan.';
$string['ignoreadmins'] = 'Abaikan Akses Admin';
$string['ignoresiteroles'] = 'Abaikan Akses Peran Situs';
