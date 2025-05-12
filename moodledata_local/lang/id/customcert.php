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
 * Strings for component 'customcert', language 'id', version '5.0'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Aktivitas';
$string['addcertpage'] = 'Tambahkan laman';
$string['addelement'] = 'Tambahkan elemen';
$string['aligncenter'] = 'Tengahkan';
$string['alignleft'] = 'Rata kiri';
$string['alignment'] = 'Perataan';
$string['alignment_help'] = 'Properti ini mengatur perataan horizontal elemen. Beberapa elemen mungkin tidak mendukung ini, sementara perilaku elemen lainnya mungkin berbeda.';
$string['alignright'] = 'Rata kanan';
$string['awardedto'] = 'Diberikan kepada';
$string['cannotverifyallcertificates'] = 'Anda tidak memiliki izin untuk memverifikasi semua sertifikat di situs.';
$string['certificate'] = 'Sertifikat';
$string['certificateexecutionperiod'] = 'Periode pelaksanaan sertifikat';
$string['certificateexecutionperiod_desc'] = 'Jika bukan 0, tugas tidak akan memproses sertifikat yang kursusnya tidak aktif atau terbitan terakhirnya lebih lama dari waktu yang dikonfigurasi. Ini dapat membantu meningkatkan kinerja tugas yang dijadwalkan.';
$string['certificatesperrun'] = 'Sertifikat per proses';
$string['certificatesperrun_desc'] = 'Masukkan jumlah sertifikat yang akan diproses per tugas terjadwal, di mana 0 berarti akan memproses semua sertifikat.';
$string['code'] = 'Kode';
$string['copy'] = 'Salin';
$string['coursetimereq'] = 'Jumlah menit yang dibutuhkan dalam kursus';
$string['coursetimereq_help'] = 'Masukkan jumlah waktu minimum, dalam menit, yang harus dilalui siswa untuk masuk ke kursus sebelum mereka dapat menerima sertifikat.';
$string['createtemplate'] = 'Buat templat';
$string['customcert:addinstance'] = 'Tambahkan model sertifikat kustom baru';
$string['customcert:manage'] = 'Kelola sertifikat kustom';
$string['customcert:manageemailothers'] = 'Kelola setelan surel lainnya';
$string['customcert:manageemailstudents'] = 'Kelola setelan surel siswa';
$string['customcert:manageemailteachers'] = 'Kelola setelan surel pengajar';
$string['customcert:managelanguages'] = 'Kelola bahasa pada formulir edit';
$string['customcert:manageprotection'] = 'Kelola setelan keamanan';
$string['customcert:managerequiredtime'] = 'Kelola setelan waktu yang dibutuhkan';
$string['customcert:manageverifyany'] = 'Kelola setelan verifikasi';
$string['customcert:receiveissue'] = 'Menerima sertifikat';
$string['customcert:verifyallcertificates'] = 'Verifikasi semua sertifikat di situs';
$string['customcert:verifycertificate'] = 'Verifikasi sertifikat';
$string['customcert:view'] = 'Lihat sertifikat kustom';
$string['customcert:viewallcertificates'] = 'Lihat semua sertifikat';
$string['customcert:viewreport'] = 'Lihat laporan kursus';
$string['customcertsettings'] = 'Setelan sertifikat kustom';
$string['deletecertpage'] = 'Hapus laman';
$string['deleteconfirm'] = 'Hapus konfirmasi';
$string['deleteelement'] = 'Hapus elemen';
$string['deleteelementconfirm'] = 'Anda yakin akan menghapus elemen ini?';
$string['deleteissueconfirm'] = 'Apakah Anda yakin ingin menghapus sertifikat yang diterbitkan?';
$string['deleteissuedcertificates'] = 'Hapus sertifikat yang diterbitkan';
$string['deletepageconfirm'] = 'Apakah Anda yakin ingin menghapus halaman sertifikat ini?';
$string['deletetemplateconfirm'] = 'Apakah Anda yakin ingin menghapus templat sertifikat ini?';
$string['deliveryoptiondownload'] = 'Kirim ke peramban dan paksa unduh berkas';
$string['deliveryoptioninline'] = 'Kirim berkas dalam baris ke peramban';
$string['deliveryoptions'] = 'Opsi pengiriman';
$string['description'] = 'Deskripsi';
$string['downloadallissuedcertificates'] = 'Unduh semua sertifikat yang diterbitkan';
$string['downloadallsitecertificates'] = 'Unduh semua sertifikat situs';
$string['downloadallsitecertificatesdesc'] = 'Ini akan mengunduh semua sertifikat di situs dalam berkas zip.';
$string['duplicate'] = 'Duplikat';
$string['duplicateconfirm'] = 'Konfirmasi duplikat';
$string['duplicatetemplateconfirm'] = 'Apakah Anda yakin ingin menduplikasi templat sertifikat ini?';
$string['editcustomcert'] = 'Edit sertifikat';
$string['editelement'] = 'Edit elemen';
$string['edittemplate'] = 'Edit templat';
$string['elementheight'] = 'Tinggi';
$string['elementheight_help'] = 'Tentukan tinggi elemen. Jika \'0\' diizinkan, maka akan dihitung secara otomatis.';
$string['elementname'] = 'Nama elemen';
$string['elementname_help'] = 'Ini akan menjadi nama yang digunakan untuk mengidentifikasi elemen ini saat mengedit sertifikat. Catatan: ini tidak akan ditampilkan pada PDF.';
$string['elementplugins'] = 'Pengaya elemen';
$string['elements'] = 'Elemen';
$string['elements_help'] = 'Ini adalah daftar elemen yang akan ditampilkan pada sertifikat.

Harap diperhatikan: Elemen-elemen ditampilkan dalam urutan ini. Urutan dapat diubah dengan menggunakan panah di samping setiap elemen.';
$string['elementwidth'] = 'Lebar';
$string['elementwidth_help'] = 'Tentukan lebar elemen. Jika \'0\' diizinkan, maka akan dihitung secara otomatis.';
$string['emailnonstudentbody'] = 'Terlampir sertifikat \'{$a->certificatename}\' untuk \'{$a->userfullname}\' untuk kursus \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Terlampir sertifikat \'{$a->certificatename}\' untuk \'{$a->userfullname}\' untuk kursus \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Lihat laporan sertifikat';
$string['emailnonstudentgreeting'] = 'Hai';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Surel lainnya';
$string['emailothers_help'] = 'Jika ditetapkan, ini akan mengirim surel ke alamat surel yang tercantum di sini (dipisahkan dengan koma) dengan salinan sertifikat saat tersedia. <strong>Peringatan:</strong> Menetapkan bidang ini sebelum Anda selesai membuat sertifikat akan mengirim surel ke alamat tersebut dengan sertifikat yang tidak lengkap.';
$string['emailstudentbody'] = 'Terlampir sertifikat Anda \'{$a->certificatename}\' untuk kursus \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'Terlampir sertifikat Anda \'{$a->certificatename}\' untuk kursus \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Lihat sertifikat';
$string['emailstudentgreeting'] = 'Hallo {$a}';
$string['emailstudents'] = 'Surel siswa';
$string['emailstudents_help'] = 'Jika diatur, ini akan mengirim salinan sertifikat lewat surel kepada siswa saat tersedia. <strong>Peringatan:</strong> Jika diatur ke \'Ya\' sebelum Anda selesai membuat sertifikat, sertifikat yang tidak lengkap akan dikirim lewat surel kepada siswa.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Surel pengajar';
$string['emailteachers_help'] = 'Jika diatur, ini akan mengirim salinan sertifikat lewat surel kepada guru saat tersedia. <strong>Peringatan:</strong> Jika diatur ke \'Ya\' sebelum Anda selesai membuat sertifikat, sertifikat yang tidak lengkap akan dikirim lewat surel kepada guru.';
$string['eventelementcreated'] = 'Elemen sertifikat kustom dibuat';
$string['eventelementdeleted'] = 'Elemen sertifikat kustom dihapus';
$string['eventelementupdated'] = 'Elemen sertifikat kustom diperbarui';
$string['eventpagecreated'] = 'Halaman sertifikat kustom dibuat';
$string['eventpagedeleted'] = 'Halaman sertifikat kustom dihapus';
$string['eventpageupdated'] = 'Halaman sertifikat kustom diperbarui';
$string['eventtemplatecreated'] = 'Templat sertifikat kustom dibuat';
$string['eventtemplatedeleted'] = 'Template sertifikat kustom dihapus';
$string['eventtemplateupdated'] = 'Template sertifikat kustom diperbarui';
$string['exampledatawarning'] = 'Beberapa nilai ini mungkin hanya contoh untuk memastikan penempatan elemen dapat dilakukan.';
$string['font'] = 'Fon';
$string['font_help'] = 'Fon yang digunakan saat membuat elemen ini.';
$string['fontcolour'] = 'Warna';
$string['fontcolour_help'] = 'Warna fon.';
$string['fontsize'] = 'Ukuran';
$string['fontsize_help'] = 'Ukuran font dalam poin.';
$string['getcustomcert'] = 'Lihat sertifikat';
$string['height'] = 'Tinggi';
$string['height_help'] = 'Ini adalah tinggi sertifikat PDF dalam mm. Sebagai referensi, selembar kertas A4 tingginya 297 mm dan selembar surat tingginya 279 mm.';
$string['includeinnotvisiblecourses'] = 'Sertakan sertifikat dalam kursus tersembunyi';
$string['includeinnotvisiblecourses_desc'] = 'Sertifikat dari kursus tersembunyi tidak diproses secara default. Jika Anda ingin menyertakannya, aktifkan setelan ini.';
$string['invalidcode'] = 'Kode yang diberikan tidak valid.';
$string['invalidcolour'] = 'Warna yang dipilih tidak valid, masukkan nama warna HTML yang valid, atau warna heksadesimal enam digit, atau tiga digit.';
$string['invalidelementwidthorheightnotnumber'] = 'Masukkan nomor yang valid.';
$string['invalidelementwidthorheightzeroallowed'] = 'Silakan masukkan angka yang lebih besar dari atau sama dengan 0.';
$string['invalidelementwidthorheightzeronotallowed'] = 'Silakan masukkan angka yang lebih besar dari 0.';
$string['invalidheight'] = 'Tingginya harus berupa angka valid yang lebih besar dari 0.';
$string['invalidmargin'] = 'Margin harus berupa angka valid yang lebih besar dari 0.';
$string['invalidposition'] = 'Silakan pilih angka positif untuk posisi {$a}.';
$string['invalidwidth'] = 'Lebarnya harus berupa angka valid yang lebih besar dari 0.';
$string['landscape'] = 'Lanskap';
$string['languageoptions'] = 'Paksa Bahasa Sertifikat';
$string['leftmargin'] = 'Margin kiri';
$string['leftmargin_help'] = 'Ini adalah margin kiri sertifikat PDF dalam mm.';
$string['listofissues'] = 'Penerima: {$a}';
$string['load'] = 'Muat';
$string['loadtemplate'] = 'Muat templat';
$string['loadtemplatemsg'] = 'Apakah Anda yakin ingin memuat templat ini? Ini akan menghapus semua halaman dan elemen yang ada untuk sertifikat ini.';
$string['managetemplates'] = 'Kelola templat';
$string['managetemplatesdesc'] = 'Tautan ini akan membawa Anda ke layar baru tempat Anda dapat mengelola templat yang digunakan oleh aktivitas Sertifikat Kustom dalam kursus.';
$string['modify'] = 'Modifikasi';
$string['modulename'] = 'Sertifikat Kustom';
$string['modulename_help'] = 'Modul ini memungkinkan pembuatan sertifikat PDF yang dinamis.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Sertifikat kustom';
$string['mycertificates'] = 'Sertifikatku';
$string['mycertificatesdescription'] = 'Ini adalah sertifikat yang telah Anda terima melalui surel atau diunduh secara manual.';
$string['name'] = 'Nama';
$string['nametoolong'] = 'Anda telah melampaui panjang maksimum yang diizinkan untuk nama tersebut';
$string['nocustomcerts'] = 'Tidak ada sertifikat untuk kursus ini';
$string['noimage'] = 'Tidak ada gambar';
$string['norecipients'] = 'Tidak ada penerima';
$string['notemplates'] = 'Tidak ada templat';
$string['notissued'] = 'Tidak ada penghargaan';
$string['notverified'] = 'Belum diverifikasi';
$string['options'] = 'Opsi';
$string['page'] = 'Halaman {$a}';
$string['pluginadministration'] = 'Administrasi sertifikat kustom';
$string['pluginname'] = 'Sertifikat kustom';
$string['portrait'] = 'Potret';
$string['posx'] = 'Posisi X';
$string['posx_help'] = 'Ini adalah posisi dalam mm dari sudut kiri atas tempat titik referensi elemen ingin ditempatkan pada arah x.';
$string['posy'] = 'Posisi Y';
$string['posy_help'] = 'Ini adalah posisi dalam mm dari sudut kiri atas tempat titik referensi elemen diinginkan berada dalam arah y.';
$string['preventcopy'] = 'Cegah salin';
$string['preventcopy_desc'] = 'Aktifkan perlindungan dari tindakan penyalinan.';
$string['preventmodify'] = 'Cegah modifikasi';
$string['preventmodify_desc'] = 'Aktifkan perlindungan dari tindakan modifikasi.';
$string['preventprint'] = 'Cegah cetak';
$string['preventprint_desc'] = 'Aktifkan perlindungan dari tindakan cetak.';
$string['print'] = 'Cetak';
$string['privacy:metadata:customcert_issues'] = 'Daftar sertifikat yang diterbitkan';
$string['privacy:metadata:customcert_issues:code'] = 'Kode yang termasuk dalam sertifikat';
$string['privacy:metadata:customcert_issues:customcertid'] = 'ID sertifikat';
$string['privacy:metadata:customcert_issues:emailed'] = 'Apakah sertifikatnya dikirim melalui surel atau tidak';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Waktu sertifikat diterbitkan';
$string['privacy:metadata:customcert_issues:userid'] = 'ID pengguna yang diberi sertifikat';
$string['rearrangeelements'] = 'Reposisi elemen';
$string['rearrangeelementsheading'] = 'Tarik dan lepas elemen untuk mengubah posisinya pada sertifikat.';
$string['receiveddate'] = 'Diberikan pada';
$string['refpoint'] = 'Lokasi titik referensi';
$string['refpoint_help'] = 'Titik referensi adalah lokasi suatu elemen yang menjadi dasar penentuan koordinat x dan y. Titik referensi ditunjukkan dengan tanda \'+\' yang muncul di bagian tengah atau sudut elemen.';
$string['replacetemplate'] = 'Ganti';
$string['requiredtimenotmet'] = 'Anda harus menghabiskan setidaknya minimal {$a->requiredtime} menit dalam kursus sebelum Anda dapat mengakses sertifikat ini.';
$string['rightmargin'] = 'Margin kanan';
$string['rightmargin_help'] = 'Ini adalah margin kanan sertifikat PDF dalam mm.';
$string['save'] = 'Simpan';
$string['saveandclose'] = 'Simpan dan tutup';
$string['saveandcontinue'] = 'Simpan dan lanjutkan';
$string['savechanges'] = 'Simpan perubahan';
$string['savechangespreview'] = 'Simpan perubahan dan pratinjau';
$string['savetemplate'] = 'Simpan templat';
$string['scheduledtaskconfigdesc'] = 'Konfigurasikan setelan untuk tugas terjadwal yang memproses sertifikat.';
$string['scheduledtaskconfigheading'] = 'Konfigurasi tugas terjadwal';
$string['search:activity'] = 'Sertifikat khusus - informasi aktivitas';
$string['setprotection'] = 'Atur perlindungan';
$string['setprotection_help'] = 'Pilih tindakan yang ingin Anda cegah dilakukan pengguna pada sertifikat ini.';
$string['showposxy'] = 'Tampilkan posisi X dan Y';
$string['showposxy_desc'] = 'Ini akan menunjukkan posisi X dan Y saat mengedit elemen, yang memungkinkan pengguna menentukan lokasi secara akurat.

Ini tidak diperlukan jika Anda berencana hanya menggunakan antarmuka drag and drop untuk tujuan ini.';
$string['subplugintype_customcertelement'] = 'Elemen';
$string['subplugintype_customcertelement_plural'] = 'Elemen';
$string['uploadimage'] = 'Unggah gambar';
$string['uploadimagedesc'] = 'Tautan ini akan membawa Anda ke layar baru tempat Anda dapat mengunggah gambar. Gambar yang diunggah menggunakan metode ini akan tersedia di seluruh situs Anda untuk semua pengguna yang dapat membuat sertifikat.';
$string['useadhoc'] = 'Gunakan Tugas Ad-hoc Sertifikat Surel';
$string['useadhoc_desc'] = 'Bila diaktifkan, surel yang terkait dengan sertifikat akan segera ditangani melalui tugas ad-hoc yang dibuat untuk setiap masalah. Bila dinonaktifkan, surel akan dikelola oleh tugas terjadwal yang biasa.

Mengaktifkan opsi ini dapat meningkatkan kinerja tugas terjadwal dengan mengalihkan pemrosesan surel ke tugas ad-hoc.';
$string['userlanguage'] = 'Gunakan preferensi pengguna';
$string['width'] = 'Lebar';
$string['width_help'] = 'Ini adalah lebar sertifikat PDF dalam mm. Sebagai referensi, selembar kertas A4 memiliki lebar 210 mm dan selembar surat memiliki lebar 216 mm.';
