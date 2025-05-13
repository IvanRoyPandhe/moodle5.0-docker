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
 * Strings for component 'enrol_lti', language 'id', version '5.0'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Tambahkan konten';
$string['adddeployment:deploymentid'] = 'ID Penerapan';
$string['adddeployment:deploymentid_help'] = 'Setiap penerapan alat (situs ini) dalam platform akan diberi ID Penerapan yang unik untuk pendaftaran. ID Penerapan harus didaftarkan dengan alat (situs ini) sebelum peluncuran dari masing-masing penerapan alat diizinkan.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID Penerapan tidak valid. ID Penerapan itu sudah ada untuk pendaftaran aplikasi ini.';
$string['adddeployment:name'] = 'Nama penerapan';
$string['addtocourse'] = 'Tambahkan ke kursus';
$string['addtogradebook'] = 'Tambahkan ke buku nilai';
$string['allowframeembedding'] = 'Catatan: Direkomendasikan agar setelan administrasi situs \'Izinkan penyematan bingkai\' diaktifkan, sehingga alat ditampilkan dalam bingkai daripada di jendela baru.';
$string['authltimustbeenabled'] = 'Catatan: pengaya ini membutuhkan pengaya autentikasi LTI untuk diaktifkan juga.';
$string['cartridgeurl'] = 'URL Katrid';
$string['cookiesarerequired'] = 'Kuki diblokir oleh peramban Anda';
$string['cookiesarerequiredinfo'] = 'Alat ini tidak dapat diluncurkan karena peramban Anda sepertinya memblokir kuki pihak ketiga. <br><br> Untuk menggunakan alat ini, coba ubah setelan kuki peramban Anda atau gunakan peramban lain.';
$string['copiedtoclipboard'] = '{$a} disalin ke papan klip';
$string['copytoclipboard'] = 'Salin ke papan klip';
$string['couldnotestablishproxy'] = 'Tidak dapat membuat proksi dengan konsumen.';
$string['customproperties'] = 'Properti kustom';
$string['deeplinkingurl'] = 'URL tautan dalam';
$string['deletedactivity'] = 'Aktivitas yang dihapus';
$string['deletedactivityalt'] = 'Aktivitas yang dibagikan oleh model ini telah dihapus';
$string['deletedactivitydescription'] = 'Aktivitas yang dibagikan oleh model ini telah dihapus. Anda dapat memilih aktivitas lain untuk dibagikan dengan mengedit model atau, jika tidak lagi diperlukan, Anda cukup menghapus model. Menghapus model akan menghapus semua pendaftaran pengguna terkait.';
$string['deploymentadd'] = 'Tambahkan penerapan';
$string['deploymentaddnotice'] = 'Penerapan ditambahkan';
$string['deploymentdelete'] = 'Hapus penerapan';
$string['deploymentdeleteconfirm'] = 'Peringatan: Menghapus penerapan akan mengakibatkan hilangnya akses bagi setiap pengguna yang mengikuti tautan sumber daya yang terkait dengan penerapan alat ini di platform. Layanan sinkronisasi anggota dan nilai juga akan dihapus untuk sumber daya ini. Anda yakin ingin menghapus deploymentid \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Penerapan dihapus';
$string['deploymentid'] = 'ID Penerapan';
$string['deployments'] = 'Penerapan';
$string['deploymentsinfo'] = 'ID penerapan akan dibuat oleh platform saat alat tersedia dalam konteks. Hal ini dapat terjadi pada saat pendaftaran, atau dapat terjadi kemudian, ketika alat tersebut tersedia untuk kursus atau kategori tertentu. ID Penerapan harus dimasukkan di sini sebelum peluncuran dari penerapan alat tersebut diizinkan.';
$string['details'] = 'Detail';
$string['editplatformdetails'] = 'Edit detail platform';
$string['endpointltiversionnotice'] = 'Titik akhir alat di bawah ini hanya untuk penyiapan LTI 1.3 manual. Untuk versi sebelumnya (1.1/2.0), detail untuk konsumen dapat ditemukan di halaman \'Diterbitkan sebagai alat LTI\', dapat diakses melalui navigasi kursus.';
$string['enrolenddate'] = 'Tanggal berakhir';
$string['enrolenddate_help'] = 'Jika diaktifkan, pengguna hanya dapat mengakses hingga tanggal ini.';
$string['enrolenddateerror'] = 'Tanggal akhir pendaftaran tidak boleh lebih awal dari tanggal mulai';
$string['enrolisdisabled'] = 'Pengaya \'Publikasikan sebagai alat LTI\' dinonaktifkan.';
$string['enrolltiversionincorrect'] = 'Sumber daya tidak disiapkan untuk digunakan pada LTI lama (versi 1.1/2.0). Silakan hubungi administrator alat ini.';
$string['enrolmentfinished'] = 'Pendaftaran selesai.';
$string['enrolmentnotstarted'] = 'Pendaftaran belum dimulai.';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enrolperiod_help'] = 'Durasi pendaftaran valid, dimulai dari saat pengguna mendaftar sendiri dari sistem jarak jauh. Jika dinonaktifkan, durasi pendaftaran tidak akan terbatas.';
$string['enrolstartdate'] = 'Tanggal mulai';
$string['enrolstartdate_help'] = 'Jika diaktifkan, pengguna hanya dapat mengakses mulai tanggal ini dan seterusnya.';
$string['existingregistrationerror'] = 'Pendaftaran sudah ada untuk penerbit dan ID klien ini.';
$string['failedrequest'] = 'Permintaan gagal. Alasan: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Untuk mengakses alat tersebut, silakan ikuti tautan di bawah ini.';
$string['gradesync'] = 'Sinkronisasi nilai';
$string['gradesync_help'] = 'Apakah nilai dari alat dikirim ke sistem jarak jauh (konsumen LTI).';
$string['incorrecttoken'] = 'Token salah. Silakan periksa URL dan coba lagi, atau hubungi administrator alat ini.';
$string['invalidexpiredregistrationurl'] = 'URL pendaftaran tidak valid atau kedaluwarsa. Harap periksa URL dan coba lagi.';
$string['invalidrequest'] = 'Permintaan tidak valid';
$string['invalidtoolconsumer'] = 'Konsumen alat tidak valid.';
$string['jwksurl'] = 'URL JWKS';
$string['launchdetails'] = 'Luncurkan detail';
$string['launchdetails_help'] = 'URL kartrid (juga disebut URL konfigurasi) ditambah rahasia atau URL peluncuran diperlukan untuk mengonfigurasi alat.';
$string['launchurl'] = 'Luncurkan URL';
$string['loginurl'] = 'Mulai URL log masuk';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Detail peluncuran';
$string['lti13launchdetails_help'] = 'URL peluncuran dan properti kustom hanya diperlukan saat mengonfigurasi tautan sumber daya secara manual di platform. Jika memungkinkan, pengajar harus mendukung proses pemilihan konten (tautan dalam) untuk pembuatan tautan sumber daya.';
$string['lti:config'] = 'Konfigurasikan model \'Publikasikan sebagai alat LTI\'';
$string['lti:unenrol'] = 'Keluarkan pengguna dari kursus';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Terjadi masalah saat mengambil konfigurasi OpenID dari platform. Hasilnya JSON tidak valid. Ini mungkin juga disebabkan oleh konfigurasi host yang diblokir. Pastikan situs Anda dikonfigurasi untuk terhubung ke domain platform dan coba lagi menggunakan URL pendaftaran baru.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Data peluncuran atau konfigurasi alat tidak valid. Penerapan tidak dapat ditemukan (ID penerapan: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Data peluncuran tidak valid. Sumber daya \'{$a}\' tidak tersedia atau tidak ada.';
$string['ltiadvlauncherror:invalidregistration'] = 'Data peluncuran atau konfigurasi alat tidak valid. Pendaftaran platform tidak dapat ditemukan (penerbit: {$a->platform}, ID klien: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Data peluncuran tidak valid. Kolom klaim kustom \'id\' diperlukan untuk meluncurkan aktivitas atau sumber daya melalui Keunggulan LTI.';
$string['ltilegacy'] = 'LTI lawas (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Alat LTI lawas (1.1/2.0) tidak digunakan lagi. Konten sekarang harus dibagikan menggunakan LTI Advantage.';
$string['ltiversion'] = 'Versi LTI';
$string['ltiversion_help'] = 'Versi LTI yang akan digunakan untuk mengakses konten yang dipublikasikan.

LTI Advantage memungkinkan konten dipublikasikan ke platform pra-registrasi tanpa perlu melakukan perubahan pada platform setiap kali konten baru dipublikasikan. Kontrak keamanan adalah antara platform dan alat.

Versi lawas (1.1 dan 2.0), mengharuskan pendaftaran alat baru dibuat pada konsumen untuk setiap bagian dari konten yang baru diterbitkan karena setiap bagian dari konten yang diterbitkan memiliki kontrak keamanannya sendiri dengan situs konsumen dan harus diatur pada kasus oleh dasar kasus.';
$string['managedeployments'] = 'Kelola penerapan';
$string['maxenrolled'] = 'Pengguna terdaftar maksimum';
$string['maxenrolled_help'] = 'Jumlah maksimum pengguna jarak jauh yang dapat mengakses alat ini. Jika disetel ke nol, jumlah pengguna terdaftar tidak terbatas.';
$string['maxenrolledreached'] = 'Jumlah maksimum pengguna jarak jauh yang diizinkan untuk mengakses alat telah tercapai.';
$string['membersync'] = 'Sinkronisasi pengguna';
$string['membersync_help'] = 'Apakah tugas terjadwal menyinkronkan pengguna yang terdaftar di sistem jarak jauh dengan pendaftaran dalam kursus ini, membuat akun untuk setiap pengguna jarak jauh seperlunya, dan mendaftarkan atau membatalkan pendaftaran sesuai kebutuhan. Jika disetel ke tidak, pada saat pengguna jarak jauh mengakses alat tersebut, sebuah akun akan dibuat untuk mereka dan mereka akan didaftarkan secara otomatis.';
$string['membersyncmode'] = 'Mode sinkronisasi pengguna';
$string['membersyncmode_help'] = 'Apakah pengguna jarak jauh harus didaftarkan dan / atau dibatalkan pendaftarannya dari kursus ini.';
$string['membersyncmodeenrolandunenrol'] = 'Daftarkan pengguna baru dan batalkan pendaftaran pengguna yang hilang';
$string['membersyncmodeenrolnew'] = 'Daftarkan pengguna baru';
$string['membersyncmodeunenrolmissing'] = 'Batalkan pendaftaran pengguna yang hilang';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Tidak ada alat penerapan yang ditemukan';
$string['nopublishedcontent'] = 'Belum ada sumber daya atau aktivitas yang dipublikasikan';
$string['noregisteredplatforms'] = 'Tidak ada platform terdaftar';
$string['notoolsprovided'] = 'Tidak ada alat yang disediakan';
$string['opensslconfiginvalid'] = 'LTI 1.3 memerlukan openssl.cnf yang valid untuk dikonfigurasi dan tersedia untuk server web Anda. Silakan hubungi administrator situs untuk mengonfigurasi dan mengaktifkan openssl untuk situs ini.';
$string['opentool'] = 'Buka alat';
$string['platformdetails'] = 'Detail platform';
$string['platformdetailsinfo'] = 'Setelah alat disiapkan di platform, detail dari platform harus dicatat di sini untuk menyelesaikan pendaftaran.
<ul>
<li>Untuk pendaftaran dinamis, informasi ini akan disetel secara otomatis dan tidak diperlukan perubahan lebih lanjut.</li>
<li>Untuk pendaftaran manual, informasi ini harus disalin secara manual dari platform.</li>
</ul>';
$string['pluginname'] = 'Publikasikan sebagai alat LTI';
$string['pluginname_desc'] = 'Pengaya \'Publikasikan sebagai alat LTI\', bersama dengan pengaya autentikasi LTI, memungkinkan pengguna jarak jauh untuk mengakses kursus dan aktivitas yang dipilih. Dengan kata lain, Moodle berfungsi sebagai penyedia alat LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Daftar pengguna yang terdaftar melalui penyedia LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Waktu terakhir kali pengguna mengakses kursus';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Nilai terakhir yang tercatat dimiliki pengguna';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Waktu saat pengguna terdaftar';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID pengguna';
$string['provisioningmode'] = 'Mode penyediaan';
$string['provisioningmode_help'] = 'Setelan ini menentukan bagaimana akun ditangani pada peluncuran pertama. Beberapa mode yang didukung: <ul>
<li>Hanya akun baru (otomatis). Akun akan dibuat secara otomatis untuk pengguna yang meluncurkan dari platform. Ini adalah bawaan untuk peluncuran siswa.</li>
<li>Akun yang sudah ada dan yang baru (prompt). Pengguna akan diberikan pilihan apa yang harus dilakukan. Mereka dapat memutuskan untuk menautkan akun yang ada, atau membuat akun baru untuk mereka. Ini adalah opsi yang paling fleksibel dan bawaan untuk peluncuran pengajar.</li>
<li>Hanya akun yang ada (prompt). Pengguna akan diminta untuk menautkan akun yang ada dan tidak dapat mengakses sumber daya alat tanpa melakukannya.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Mode penyediaan peluncuran pertama siswa';
$string['provisioningmodeteacherlaunch'] = 'Mode penyediaan peluncuran pertama pengajar';
$string['publishedcontent'] = 'Konten yang diterbitkan';
$string['publishedcontent_help'] = 'Sumber daya atau aktivitas yang dipublikasikan dapat digunakan di platform terdaftar melalui alur pemilihan konten (tautan dalam). Selain itu, tautan sumber dapat dibuat secara manual di platform dengan menggunakan URL peluncuran dan properti kustom yang disediakan.';
$string['registeredplatforms'] = 'Platform terdaftar';
$string['registeredplatformsltiversionnotice'] = 'Platform yang tercantum di bawah ini terdaftar untuk komunikasi LTI 1.3. Untuk versi sebelumnya, pendaftaran konsumen tidak diperlukan.';
$string['registerplatform:accesstokenurl'] = 'URL token akses';
$string['registerplatform:accesstokenurl_help'] = 'URL tempat permintaan token akses akan dikirim oleh alat. Akan disediakan oleh platform.';
$string['registerplatform:authrequesturl'] = 'URL permintaan autentikasi';
$string['registerplatform:authrequesturl_help'] = 'URL tempat permintaan autentikasi OpenID Connect akan dikirim oleh alat. Akan disediakan oleh platform.';
$string['registerplatform:clientid'] = 'ID Klien';
$string['registerplatform:clientid_help'] = 'String yang digunakan untuk mengidentifikasi pendaftaran alat pada platform. Akan disediakan oleh platform.';
$string['registerplatform:duplicateregistrationerror'] = 'ID klien tidak valid. ID klien ini sudah terdaftar untuk ID platform yang disediakan.';
$string['registerplatform:invalidurlerror'] = 'URL tidak valid. Sudahkah Anda memasukkan http:// atau https://?';
$string['registerplatform:jwksurl'] = 'URL kunci publik';
$string['registerplatform:jwksurl_help'] = 'Keyset publik atau URL JWKS, digunakan untuk mendapatkan kunci publik platform. Akan disediakan oleh platform.';
$string['registerplatform:name'] = 'Nama platform';
$string['registerplatform:name_help'] = 'Nama pendek yang menggambarkan platform. Ini dapat diubah kapan saja.';
$string['registerplatform:platformid'] = 'ID Platform (penerbit)';
$string['registerplatform:platformid_help'] = 'URL yang mengidentifikasi platform pembelajaran pihak ketiga. Akan disediakan oleh platform.';
$string['registerplatformadd'] = 'Daftarkan platform';
$string['registerplatformaddnotice'] = 'Pendaftaran platform ditambahkan';
$string['registerplatformdelete'] = 'Hapus pendaftaran platform';
$string['registerplatformdeleteconfirm'] = 'Yakin ingin menghapus pendaftaran untuk platform \'{$a}\'? Ini juga akan menghapus semua penerapan alat yang disimpan dalam pendaftaran ini.';
$string['registerplatformdeletenotice'] = 'Pendaftaran platform dihapus';
$string['registerplatformedit'] = 'Edit registrasi';
$string['registerplatformeditnotice'] = 'Pendaftaran platform diperbarui';
$string['registration'] = 'Diterbitkan alat pendaftaran';
$string['registrationdeeplinklabel'] = 'Tambahkan konten dari {$a}';
$string['registrationdynamic'] = 'Registrasi dinamis';
$string['registrationmanual'] = 'Pendaftaran manual';
$string['registrationresourcelinklabel'] = 'Luncurkan konten dari {$a}';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Aktif';
$string['registrationstatuspending'] = 'Ditangguhkan';
$string['registrationurl'] = 'URL Pendaftaran';
$string['registrationurl_help'] = 'Jika URL pendaftaran (juga disebut URL praksi) digunakan, alat tersebut secara otomatis dikonfigurasi.';
$string['registrationurlinfomessage'] = 'Jika platform mendukung pendaftaran dinamis, gunakan URL pendaftaran di bawah ini. Untuk informasi lebih lanjut tentang pendaftaran dinamis, lihat dokumentasi <a href="{$a}">Publikasikan sebagai alat LTI</a>.';
$string['remotesystem'] = 'Sistem jarak jauh';
$string['requirecompletion'] = 'Mewajibkan penyelesaian kursus atau aktivitas sebelum sinkronisasi nilai';
$string['returnurlnotset'] = 'URL kembali tidak disetel.';
$string['roleinstructor'] = 'Peran untuk pengajar';
$string['roleinstructor_help'] = 'Peran yang diberikan dalam alat kepada pengajar jarak jauh.';
$string['rolelearner'] = 'Peran siswa';
$string['rolelearner_help'] = 'Peran yang diberikan dalam alat kepada siswa jarak jauh.';
$string['secret'] = 'Rahasia';
$string['secret_help'] = 'Serangkaian karakter yang dibagikan dengan sistem jarak jauh (konsumen LTI) untuk menyediakan akses ke alat.';
$string['sharedexternaltools'] = 'Diterbitkan sebagai alat LTI';
$string['successfulregistration'] = 'Pendaftaran berhasil';
$string['tasksyncgrades'] = 'Publikasikan sebagai sinkronisasi tingkat alat LTI';
$string['tasksyncmembers'] = 'Publikasikan sebagai sinkronisasi pengguna alat LTI';
$string['tooldetails'] = 'Detail alat';
$string['toolsprovided'] = 'Alat yang diterbitkan';
$string['toolsprovided_help'] = 'Sebuah alat dapat dibagikan dengan situs lain dengan memberikan detail peluncuran atau URL pendaftaran.';
$string['tooltobeprovided'] = 'Alat untuk dipublikasikan';
$string['toolurl'] = 'URL alat';
$string['userdefaultvalues'] = 'Nilai bawaan pengguna';
$string['viewplatformdetails'] = 'Lihat detail platform';
$string['viewtoolendpoints'] = 'Lihat titik akhir alat';
