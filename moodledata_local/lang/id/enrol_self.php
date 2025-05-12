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
 * Strings for component 'enrol_self', language 'id', version '5.0'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Pendaftaran dinonaktifkan atau tidak aktif';
$string['canntenrolearly'] = 'Anda belum terdaftar; pendaftaran dibuka pada {$a}';
$string['canntenrollate'] = 'Anda tidak dapat mendaftar lagi, pendaftaran berakhir pada {$a}';
$string['cohortnonmemberinfo'] = 'Hanya anggota kohor \'{$a}\' yang dapat melakukan pendaftaran mandiri.';
$string['cohortonly'] = 'Hanya anggota kohor';
$string['cohortonly_help'] = 'Pendaftaran mandiri terbatas hanya untuk anggota kohor tertentu. Perubahan setelan tidak berpengaruh pada pendaftaran yang sudah ada.';
$string['confirmbulkdeleteenrolment'] = 'Apakah Anda yakin ingin menghapus pendaftaran pengguna ini?';
$string['defaultrole'] = 'Penetapan peran bawaan';
$string['defaultrole_desc'] = 'Pilih peran yang seharusnya dapat menetapkan pengguna ketika pendaftaran mandiri';
$string['deleteselectedusers'] = 'Hapus pendaftaran pengguna terpilih';
$string['editselectedusers'] = 'Edit pendaftaran pengguna terpilih';
$string['enrolenddate'] = 'Tanggal berakhir';
$string['enrolenddate_help'] = 'Jika diaktifkan, pengguna dapat mendaftar sampai tanggal ini saja.';
$string['enrolenddaterror'] = 'Tanggal berakhir tidak dapat lebih dahulu daripada tanggal mulai pendaftaran';
$string['enrolkeyrequired'] = 'Kunci pendaftaran akan diperlukan.';
$string['enrolme'] = 'Daftarkan saya';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enrolperiod_desc'] = 'Lama waktu pendaftaran bawaan valid. Jika diatur ke nol, durasi pendaftaran akan tidak terbatas secara bawaan.';
$string['enrolperiod_help'] = 'Lama waktu pendaftaran valid, dimulai ketika pengguna mendaftar. Jika dinonaktifkan, durasi pendaftaran menjadi tidak terbatas.';
$string['enrolstartdate'] = 'Tanggal mulai';
$string['enrolstartdate_help'] = 'Jika diaktifkan, pengguna dapat mendaftarkan diri dari tanggal ini dan seterusnya.';
$string['expiredaction'] = 'Tindakan kedaluwarsa pendaftaran';
$string['expiredaction_help'] = 'Pilih tindakan yang akan dilakukan ketika pendaftaran pengguna berakhir. Harap dicatat bahwa beberapa data dan setelan pengguna dihapus dari kursus selama pembatalan kursus.';
$string['expiryinactivemessageenrolledbody'] = 'Hai {$a->user},

Pendaftaran Anda dalam kursus {$a->course} berakhir pada {$a->timeend} karena Anda belum mengaksesnya dalam {$a->inactivetime} hari terakhir.

Agar pendaftaran Anda tetap aktif, masuklah dan akses <a href="{$a->url}">{$a->course</a> sebelum {$a->timeend}.';
$string['expiryinactivemessageenrolledsubject'] = 'Pendaftaran Anda akan berakhir: {$a->course}';
$string['expirymessageenrolledbody'] = 'Hallo {$a->user},

Ini adalah pemberitahuan bahwa pendaftaran Anda pada kursus \'{$a->course}\' akan berakhir pada {$a->timeend}.

Jika Anda membutuhkan bantuan, silakan hubungi {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Pemberitahuan kedaluwarsa pendaftaran mandiri';
$string['expirymessageenrollerbody'] = 'Pendaftaran mandiri pada kursus \'{$a->course}\' akan berakhir dalam ambang {$a->threshold} untuk pengguna berikut:

{$a->users}

Untuk memperpanjangnya, silakan buka {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Pemberitahuan masa berakhir pendaftaran mandiri';
$string['expirynotifyall'] = 'Pengajar dan pengguna terdaftar';
$string['expirynotifyenroller'] = 'Hanya pengajar';
$string['groupkey'] = 'Gunakan kunci pendaftaran grup';
$string['groupkey_desc'] = 'Gunakan kunci pendaftaran grup secara bawaan.';
$string['groupkey_help'] = 'Selain membatasi akses ke kursus hanya bagi mereka yang mengetahui kunci, penggunaan kunci pendaftaran grup berarti pengguna secara otomatis ditambahkan ke grup ketika mereka mendaftar di kursus.

Catatan: Kunci pendaftaran untuk kursus harus ditentukan dalam setelan pendaftaran sendiri serta kunci pendaftaran grup dalam setelan grup.';
$string['keyholder'] = 'Anda seharusnya telah menerima kunci pendaftaran ini dari:';
$string['longtimenosee'] = 'Batalkan pendaftaran tidak aktif setelah';
$string['longtimenosee_help'] = 'Jika pengguna tidak masuk kursus dalam waktu lama, secara otomatis akan dikeluarkan dari kursus. Parameter ini menentukan batas waktu ini.';
$string['maxenrolled'] = 'Jumlah maks pengguna terdaftar';
$string['maxenrolled_help'] = 'Menentukan jumlah maksimum pengguna yang dapat mendaftar sendiri. 0 berarti tidak ada batasan.';
$string['maxenrolledreached'] = 'Jumlah pengguna yang diizinkan untuk melakukan pendaftaran mandiri telah mencapai batas maksimum.';
$string['messageprovider:expiry_notification'] = 'Pemberitahuan kedaluwarsa pendaftaran mandiri';
$string['newenrols'] = 'Izinkan pendaftaran mandiri baru';
$string['newenrols_desc'] = 'Izinkan pengguna untuk melakukan pendaftaran mandiri secara bawaan.';
$string['newenrols_help'] = 'Setelan ini menentukan apakah pengguna dapat mendaftar ke kursus ini.';
$string['nopassword'] = 'Tidak dibutuhkan kunci pendaftaran.';
$string['password'] = 'Kunci pendaftaran';
$string['password_help'] = 'Kunci pendaftaran memungkinkan akses ke kursus dibatasi hanya bagi mereka yang mengetahui kunci tersebut. Jika ruas dibiarkan kosong, pengguna mana pun dapat mendaftar di kursus. Jika kunci pendaftaran ditentukan, setiap pengguna yang mencoba mendaftar dalam kursus akan diminta untuk memasok kunci. Perhatikan bahwa pengguna hanya perlu memasok kunci pendaftaran SEKALI, ketika mereka mendaftar di kursus.';
$string['passwordinvalid'] = 'Kunci pendaftaran salah, silakan coba lagi';
$string['passwordinvalidhint'] = 'Kunci pendaftaran salah, sila coba lagi<br /> (Ini petunjuknya - dimulai dengan \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Kunci pendaftaran ini sudah digunakan sebagai kunci pendaftaran grup.';
$string['pluginname'] = 'Pendaftaran mandiri';
$string['pluginname_desc'] = 'Pengaya pendaftaran mandiri memungkinkan pengguna untuk memilih kursus yang ingin mereka ikuti. kursus ini mungkin dilindungi oleh kunci pendaftaran. Secara internal pendaftaran dilakukan melalui pengaya pendaftaran manual yang harus diaktifkan dalam kursus yang sama.';
$string['privacy:metadata'] = 'Pengaya pendaftaran mandiri tidak menyimpan data pribadi.';
$string['requirepassword'] = 'Membutuhkan kunci pendaftaran';
$string['requirepassword_desc'] = 'Membutuhkan kunci pendaftaran dalam kursus baru dan mencegah penghapusan kunci pendaftaran dari kursus yang ada.';
$string['role'] = 'Penetapan peran bawaan';
$string['self:config'] = 'Atur model pendaftaran mandiri';
$string['self:enrolself'] = 'Daftar sendiri di kursus';
$string['self:holdkey'] = 'Membutuhkan kunci pendaftaran dalam kursus baru dan mencegah penghapusan kunci pendaftaran dari kursus yang ada.';
$string['self:manage'] = 'Kelola pengguna terdaftar';
$string['self:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['self:unenrolself'] = 'Keluar mandiri dari kursus';
$string['sendcoursewelcomemessage'] = 'Kirim pesan selamat datang';
$string['sendcoursewelcomemessage_help'] = 'Ketika seorang pengguna mengikuti kursus, mereka mungkin dikirimi surel pesan selamat datang. Jika dikirim dari kontak kursus (secara bawaan pengajar), dan lebih dari satu pengguna memiliki peran ini, pengajar dikirim dari pengguna pertama yang ditugaskan peran.';
$string['sendexpirynotificationstask'] = 'Pendaftaran sendiri mengirim tugas pemberitahuan kedaluwarsa';
$string['showhint'] = 'Tampilkan petunjuk';
$string['showhint_desc'] = 'Tampilkan huruf pertama untuk kunci akses tamu.';
$string['status'] = 'Jaga agar pendaftaran mandiri saat ini tetap aktif';
$string['status_desc'] = 'Aktifkan metode pendaftaran mandiri dalam kursus baru.';
$string['status_help'] = 'Jika diatur ke \'Tidak\', peserta mana pun yang telah mendaftarkan diri ke kursus tidak akan lagi memiliki akses.';
$string['syncenrolmentstask'] = 'Sinkronisasi tugas pendaftaran mandiri';
$string['unenrol'] = 'Batalkan pendaftaran pengguna';
$string['unenrolselfconfirm'] = 'Apakah Anda yakin akan keluar mandiri dari kursus \'{$a}\'?';
$string['unenroluser'] = 'Apakah Anda yakin akan mengeluarkan "{$a->user}" dari kursus "{$a->course}"?';
$string['unenrolusers'] = 'Batalkan pendaftaran pengguna';
$string['usepasswordpolicy'] = 'Gunakan kebijakan kata sandi';
$string['usepasswordpolicy_desc'] = 'Gunakan kebijakan kata sandi standar untuk kunci pendaftaran.';
