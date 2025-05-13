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
 * Strings for component 'group', language 'id', version '5.0'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Ditambahkan oleh {$a}';
$string['addgroup'] = 'Tambahkan pengguna pada grup';
$string['addgroupstogrouping'] = 'Tambahkan grup ke pengelompokan';
$string['addgroupstogroupings'] = 'Tambahkan/hapus grup';
$string['adduserstogroup'] = 'Tambahkan/hapus pengguna';
$string['allocateby'] = 'Alokasikan anggota';
$string['anygrouping'] = '[Pengelompokan apa saja]';
$string['autocreategroups'] = 'Buat grup secara otomatis';
$string['backtogroupings'] = 'Kembali ke pengelompokan';
$string['backtogroups'] = 'Kembali ke grup';
$string['badnamingscheme'] = 'Harus berisi tepat satu karakter \'@\' atau satu \'#\'';
$string['byfirstname'] = 'Sesuai abjad dengan nama depan, nama belakang';
$string['byidnumber'] = 'Sesuai abjad dengan nomor ID';
$string['bylastname'] = 'Sesuai abjad dengan nama belakang, nama depan';
$string['createautomaticgrouping'] = 'Buat pengelompokan otomatis';
$string['creategroup'] = 'Membuat grup';
$string['creategrouping'] = 'Buat pengelompokan';
$string['creategroupinselectedgrouping'] = 'Buat grup dalam pengelompokan';
$string['createingrouping'] = 'Pengelompokan grup yang dibuat secara otomatis';
$string['createorphangroup'] = 'Buat grup yatim piatu';
$string['csvdelimiter'] = 'Pembatas CSV';
$string['databaseupgradegroups'] = 'Versi grup sekarang {$a}';
$string['defaultgrouping'] = 'Pengelompokan bawaan';
$string['defaultgroupingname'] = 'Pengelompokan';
$string['defaultgroupname'] = 'Grup';
$string['deleteallgroupings'] = 'Semua pengelompokan';
$string['deleteallgroups'] = 'Semua grup';
$string['deletegroupconfirm'] = 'Anda yakin ingin menghapus grup \'{$a}\'?';
$string['deletegrouping'] = 'Hapus pengelompokan';
$string['deletegroupingconfirm'] = 'Yakin ingin menghapus pengelompokan \'{$a}\'? (Grup dalam pengelompokan tidak dihapus.)';
$string['deletegroupsconfirm'] = 'Yakin ingin menghapus grup berikut?';
$string['deleteselectedgroup'] = 'Hapus';
$string['disablemessagingaction'] = 'Nonaktifkan perpesanan';
$string['editgroupingsettings'] = 'Edit setelan pengelompokan';
$string['editgroupsettings'] = 'Edit setelan grup';
$string['editusersgroupsa'] = 'Edit grup untuk "{$a}"';
$string['enablemessaging'] = 'Pesan grup';
$string['enablemessaging_help'] = 'Jika diaktifkan, anggota grup dapat mengirim pesan ke yang lain di grup mereka melalui panel samping olah pesan.';
$string['enablemessagingaction'] = 'Aktifkan perpesanan';
$string['encoding'] = 'Pengodean';
$string['enrolmentkey'] = 'kunci pendaftaran';
$string['enrolmentkey_help'] = 'Kunci pendaftaran memungkinkan akses ke kursus dibatasi hanya untuk mereka yang mengetahui kuncinya. Jika kunci pendaftaran grup ditentukan, maka memasukkan kunci itu tidak hanya akan memungkinkan pengguna masuk ke kursus, tetapi juga akan secara otomatis menjadikan mereka anggota grup ini.

Catatan: Kunci pendaftaran grup harus diaktifkan dalam setelan pendaftaran mandiri dan kunci pendaftaran untuk kursus juga harus ditentukan.';
$string['enrolmentkeyalreadyinuse'] = 'Kunci pendaftaran ini sudah digunakan untuk grup lain.';
$string['erroraddremoveuser'] = 'Galat saat menambahkan/menghapus pengguna {$a} ke grup';
$string['erroraddtogroup'] = 'Nilai tidak valid untuk tambahkan ke grup. Nilainya harusnya 0 untuk tidak ada mode grup atau 1 untuk grup baru yang akan dibuat.';
$string['erroraddtogroupgroupname'] = 'Anda tidak dapat menentukan nama grup saat tambahkan ke grup diatur.';
$string['erroreditgroup'] = 'Galat saat membuat/memperbarui grup {$a}';
$string['erroreditgrouping'] = 'Galat saat membuat/memperbarui pengelompokan {$a}';
$string['errorinvalidgroup'] = 'Galat, grup tidak valid {$a}';
$string['errorremovenotpermitted'] = 'Anda tidak memiliki izin untuk menghapus anggota grup yang ditambahkan secara otomatis {$a}';
$string['errorselectone'] = 'Silakan pilih satu grup sebelum memilih opsi ini';
$string['errorselectsome'] = 'Silakan pilih satu atau lebih grup sebelum memilih opsi ini';
$string['evenallocation'] = 'Catatan: Untuk menjaga alokasi grup tetap seimbang, jumlah aktual anggota per grup berbeda dari jumlah yang Anda tentukan.';
$string['eventgroupcreated'] = 'Grup dibuat';
$string['eventgroupdeleted'] = 'Grup dihapus';
$string['eventgroupingcreated'] = 'Pengelompokan dibuat';
$string['eventgroupingdeleted'] = 'Pengelompokan dihapus';
$string['eventgroupinggroupassigned'] = 'Grup ditetapkan untuk mengelompokkan';
$string['eventgroupinggroupunassigned'] = 'Grup batal ditetapkan dari pengelompokan';
$string['eventgroupingupdated'] = 'Pengelompokan diperbarui';
$string['eventgroupmemberadded'] = 'Anggota grup ditambahkan';
$string['eventgroupmemberremoved'] = 'Anggota grup dihapus';
$string['eventgroupupdated'] = 'Grup di perbarui';
$string['existingmembers'] = 'Anggota-anggota yang ada: {$a}';
$string['exportgroupsgroupings'] = 'Unduh grup dan pengelompokan sebagai';
$string['filtergroups'] = 'Saring grup berdasarkan';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = 'Grup {$a} ditambahkan dengan sukses';
$string['groupaddedtogroupingsuccesfully'] = 'Grup {$a->groupname} yang ditambahkan ke pengelompokan {$a->groupoingname} dengan sukses';
$string['groupby'] = 'Diciptakan otomatis berdasarkan';
$string['groupdescription'] = 'Deskripsi grup';
$string['groupinfo'] = 'Info tentang grup yang dipilih';
$string['groupinfomembers'] = 'Info tentang anggota-anggota yang dipilih';
$string['groupinfopeople'] = 'Info tentang  orang-orang yang dipilih';
$string['grouping'] = 'Pengelompokan';
$string['grouping_help'] = 'Pengelompokan adalah kumpulan grup dalam suatu kursus. Jika pengelompokan dipilih, siswa yang ditugaskan ke grup dalam pengelompokan akan dapat bekerja bersama.';
$string['groupingaddedsuccesfully'] = 'Pengelompokan {$a} ditambahkan dengan sukses';
$string['groupingdescription'] = 'Deskripsi pengelompokan';
$string['groupingname'] = 'Nama pengelompokan';
$string['groupingnameexists'] = 'Pengelompokan nama \'{$a}\' sudah ada di kursus ini, silakan memilih lainnya.';
$string['groupings'] = 'Pengelompokan-pengelompokan';
$string['groupingsection'] = 'Akses pengelompokan';
$string['groupingsection_help'] = 'Pengelompokan adalah kumpulan grup dalam suatu kursus. Jika pengelompokan dipilih di sini, hanya siswa yang ditugaskan ke grup dalam pengelompokan ini yang akan memiliki akses ke bagian.';
$string['groupingsonly'] = 'Hanya pengelompokan';
$string['groupmember'] = 'Anggota grup';
$string['groupmemberdesc'] = 'Peran standar untuk anggota grup';
$string['groupmembers'] = 'Anggota-anggota grup';
$string['groupmemberssee'] = 'Lihat anggota-anggota grup';
$string['groupmembersselected'] = 'Anggota-anggota grup yang dipilih';
$string['groupmode'] = 'Mode grup';
$string['groupmode_groupsseparate_help'] = 'Siswa dibagi menjadi beberapa grup dan hanya dapat melihat hasil kerja grupnya.';
$string['groupmode_groupsvisible_help'] = 'Siswa dibagi menjadi beberapa grup, tetapi dapat melihat hasil kerja grup lain.';
$string['groupmode_help'] = '* Tidak ada grup
* Grup terpisah: Siswa dibagi menjadi beberapa grup dan hanya dapat melihat hasil kerja grupnya.
* Grup terlihat: Siswa dibagi menjadi beberapa grup, tetapi dapat melihat hasil kerja grup lain.

Mode grup yang diatur pada tingkat kursus adalah mode bawaan untuk semua aktivitas. Jika mode grup dipaksakan pada level kursus, itu tidak dapat diubah dalam suatu aktivitas.';
$string['groupmodeforce'] = 'Paksa mode grup';
$string['groupmodeforce_help'] = 'Mode grup diberlakukan untuk semua aktivitas dan tidak dapat diubah dalam suatu aktivitas.';
$string['groupmy'] = 'Grup saya';
$string['groupname'] = 'Nama grup';
$string['groupnameexists'] = 'Nama grup \'{$a}\' sudah ada di kursus ini, silakan pilih yang lain.';
$string['groupnotamember'] = 'Maaf, kamu bukan anggota grup tersebut';
$string['groups'] = 'Grup';
$string['groupscount'] = 'Grup ({$a})';
$string['groupsettingsheader'] = 'Grup';
$string['groupsgroupings'] = 'Grup & pengelompokan';
$string['groupsinselectedgrouping'] = 'Grup di dalam:';
$string['groupsnone'] = 'Tanpa grup';
$string['groupsonly'] = 'Hanya grup';
$string['groupspreview'] = 'Pratinjau grup';
$string['groupsseparate'] = 'Grup terpisah';
$string['groupsvisible'] = 'Grup terlihat';
$string['grouptemplate'] = 'Grup @';
$string['importgroups'] = 'Impor grup';
$string['importgroups_help'] = 'Grup dapat diimpor melalui berkas teks. Format file harus sebagai berikut:

* Setiap baris berkas berisi satu rekaman
* Setiap rekaman adalah serangkaian data yang dipisahkan oleh koma
* Rekaman pertama berisi daftar nama field yang mendefinisikan format dari sisa berkas
* Nama ruas yang harus ada adalah groupname
* Nama ruas opsional a.l.: groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Hanya sertakan pendaftaran aktif';
$string['includeonlyactiveenrol_help'] = 'Jika diaktifkan, pengguna yang ditangguhkan tidak akan dimasukkan dalam grup.';
$string['javascriptrequired'] = 'Halaman ini membutuhkan JavaScript untuk diaktifkan.';
$string['manageactions'] = 'Kelola';
$string['memberofgroup'] = 'Anggota grup dari: {$a}';
$string['members'] = 'Anggota per grup';
$string['membersofselectedgroup'] = 'Anggota dari';
$string['messagingdisabled'] = 'Berhasil menonaktifkan perpesanan di grup {$a}';
$string['messagingenabled'] = 'Perpesanan berhasil diaktifkan di grup {$a}';
$string['mygroups'] = 'Grup saya';
$string['namingscheme'] = 'Skema penamaan';
$string['namingscheme_help'] = 'Simbol at (@) dapat digunakan untuk membuat grup dengan nama yang mengandung huruf. Misalnya Grup @ akan menghasilkan grup bernama Grup A, Grup B, Grup C, ...

Simbol hash (#) dapat digunakan untuk membuat grup dengan nama yang berisi angka. Misalnya Grup # akan menghasilkan grup bernama Grup 1, Grup 2, Grup 3, ...';
$string['newgrouping'] = 'Pengelompokan yang baru';
$string['newpicture'] = 'Gambar yang baru';
$string['newpicture_help'] = 'Pilih gambar dalam format JPG atau PNG. Gambar akan dipotong menjadi persegi dan diubah ukurannya menjadi 100x100 piksel.';
$string['noallocation'] = 'Tidak ada alokasi';
$string['nogroup'] = 'Tanpa grup';
$string['nogrouping'] = 'Tidak ada pengelompokan';
$string['nogroups'] = 'Belum ada grup yang ditetapkan dalam kursus ini';
$string['nogroupsassigned'] = 'Tidak ada grup yang ditugaskan';
$string['nopermissionforcreation'] = 'Tidak dapat membuat grup "{$a}" karena Anda tidak memiliki izin yang diperlukan';
$string['nosmallgroups'] = 'Cegah grup kecil terakhir';
$string['notingroup'] = 'Abaikan pengguna dalam grup';
$string['notingrouping'] = '[Tidak didalam pengelompokan manapun]';
$string['notingrouplist'] = 'Tidak dalam grup';
$string['nousersinrole'] = 'Tidak ada pengguna yang cocok dalam peran yang dipilih';
$string['number'] = 'Jumlah grup / anggota';
$string['numgroups'] = 'Jumlah grup';
$string['nummembers'] = 'Anggota per grup';
$string['othergroups'] = 'Grup lainnya';
$string['overview'] = 'Gambaran';
$string['participation'] = 'Tampilkan grup di menu tarik-turun untuk aktivitas dalam mode grup';
$string['participation_help'] = 'Apakah anggota grup dapat memilih grup ini untuk aktivitas dalam mode grup terpisah atau terlihat? (Hanya berlaku jika keanggotaan grup terlihat atau hanya dapat dilihat oleh anggota.)';
$string['participationshort'] = 'Partisipasi';
$string['potentialmembers'] = 'Anggota potensial: {$a}';
$string['potentialmembs'] = 'Anggota potensial';
$string['printerfriendly'] = 'Layar ramah-printer';
$string['privacy:metadata:core_message'] = 'Percakapan grup';
$string['privacy:metadata:groups'] = 'Catatan keanggotaan grup.';
$string['privacy:metadata:groups:groupid'] = 'ID grup.';
$string['privacy:metadata:groups:timeadded'] = 'Stempel waktu yang menunjukkan kapan pengguna ditambahkan ke grup.';
$string['privacy:metadata:groups:userid'] = 'ID pengguna yang terkait dengan grup.';
$string['random'] = 'Secara acak';
$string['removefromgroup'] = 'Hapus pengguna dari grup {$a}';
$string['removefromgroupconfirm'] = 'Apakah Anda benar-benar ingin menghapus pengguna "{$a->user}" dari grup "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Hapus grup dari pengelompokan';
$string['removegroupingsmembers'] = 'Semua grup dari pengelompokan';
$string['removegroupsmembers'] = 'Semua anggota grup';
$string['removeselectedusers'] = 'Hapus pengguna yang dipilih';
$string['selectfromgroup'] = 'Pilih anggota dari grup';
$string['selectfromgrouping'] = 'Pilih anggota dari pengelompokan';
$string['selectfromrole'] = 'Pilih anggota dengan peran';
$string['showgroupsingrouping'] = 'Tampilkan grup dalam pengelompokan';
$string['showmembersforgroup'] = 'Tampilkan anggota grup';
$string['toomanygroups'] = 'Tidak cukup pengguna untuk mengisi jumlah grup ini - hanya ada {$a} pengguna dalam peran yang dipilih.';
$string['usercount'] = 'Jumlah pengguna';
$string['usercounttotal'] = 'Jumlah pengguna ({$a})';
$string['usergroupmembership'] = 'Keanggotaan pengguna yang dipilih:';
$string['visibility'] = 'Visibilitas keanggotaan grup';
$string['visibility_help'] = '* Terlihat - semua peserta kursus dapat melihat siapa yang ada di grup
* Hanya terlihat anggota - peserta kursus yang tidak tergabung dalam grup tidak dapat melihat grup atau anggotanya
* Hanya melihat keanggotaan sendiri - pengguna dapat melihat mereka berada di grup tetapi tidak dapat melihat anggota grup lainnya
* Tersembunyi - hanya pengajar yang dapat melihat grup dan anggotanya

Pengguna dengan kemampuan melihat grup tersembunyi selalu dapat melihat keanggotaan grup.

Perhatikan bahwa Anda tidak dapat mengubah setelan ini jika grup memiliki anggota.';
$string['visibilityall'] = 'Terlihat';
$string['visibilitymembers'] = 'Hanya terlihat anggota';
$string['visibilitynone'] = 'Disembunyikan';
$string['visibilityown'] = 'Hanya melihat keanggotaan sendiri';
$string['visibilityshort'] = 'Visibilitas';
$string['withselected'] = 'Yang terpilih';
