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
 * Strings for component 'lti', language 'id', version '5.0'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Setujui';
$string['accept_grades'] = 'Setujui nilai dari alat';
$string['accept_grades_admin'] = 'Setujui nilai dari alat';
$string['accept_grades_admin_help'] = 'Tentukan apakah penyedia alat dapat menambahkan, memperbarui, membaca, dan menghapus nilai yang terkait dengan model alat ini.

Beberapa penyedia alat mendukung nilai pelaporan kembali ke Moodle berdasarkan tindakan yang diambil di dalam alat tersebut, menciptakan lebih terintegrasi pengalaman.';
$string['accept_grades_from_tool'] = 'Izinkan {$a} untuk menambahkan nilai di buku nilai';
$string['accept_grades_help'] = 'Tentukan apakah penyedia alat dapat menambahkan, memperbarui, membaca, dan menghapus nilai yang hanya terkait dengan model alat eksternal ini.

Beberapa penyedia alat mendukung nilai pelaporan kembali ke Moodle berdasarkan tindakan yang diambil dalam alat tersebut, menciptakan pengalaman yang lebih terintegrasi.

Perhatikan bahwa setelan ini dapat diganti dalam konfigurasi alat.';
$string['accepted'] = 'Disetujui';
$string['action'] = 'Aksi';
$string['activate'] = 'Aktivasi';
$string['activatetoadddescription'] = 'Anda harus mengaktifkan alat ini sebelum dapat menambahkan deskripsi.';
$string['active'] = 'Aktif';
$string['activity'] = 'Aktivitas';
$string['add_ltiadv'] = 'Tambahkan Keuntungan LTI';
$string['add_ltilegacy'] = 'Tambahkan LTI lawas';
$string['addnewapp'] = 'Aktifkan aplikasi eksternal';
$string['addserver'] = 'Tambahkan server tepercaya';
$string['addtool'] = 'Tambahkan alat';
$string['addtype'] = 'Tambahkan alat yang telah dikonfigurasi sebelumnya';
$string['allow'] = 'Izinkan';
$string['allowsetting'] = 'Izinkan alat untuk menyimpan 8K setelan di Moodle';
$string['always'] = 'Selalu';
$string['autoaddtype'] = 'Tambahkan alat';
$string['automatic'] = 'Otomatis, berdasarkan URL alat';
$string['baseurl'] = 'URL dasar/nama pendaftaran alat';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'String dasar OAuth LTI';
$string['basiclti_endpoint'] = 'Titik akhir peluncuran LTI';
$string['basiclti_in_new_window'] = 'Aktivitas Anda telah dibuka di jendela baru';
$string['basiclti_in_new_window_open'] = 'Buka di jendela baru';
$string['basiclti_parameters'] = 'Parameter peluncuran LTI';
$string['basicltiactivities'] = 'Aktivitas LTI';
$string['basicltifieldset'] = 'Contoh set kolom kustom';
$string['basicltiintro'] = 'Deskripsi aktivitas';
$string['basicltiname'] = 'Nama aktivitas';
$string['basicltisettings'] = 'Setelan Interoperabilitas Alat Pembelajaran Dasar (LTI)';
$string['cachedef_keyset'] = 'Singgahan informasi keyset dari alat';
$string['cancel'] = 'Batal';
$string['cancelled'] = 'Dibatalkan';
$string['capabilities'] = 'Kapabilitas';
$string['capabilities_help'] = 'Pilih kemampuan yang ingin Anda tawarkan ke penyedia alat. Lebih dari satu kemampuan dapat dipilih.';
$string['capabilitiesrequired'] = 'Alat ini memerlukan akses ke data berikut untuk mengaktifkan:';
$string['cleanaccesstokens'] = 'Penghapusan alat eksternal dari token akses yang kedaluwarsa';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Klik untuk melanjutkan</a>';
$string['clientidadmin'] = 'ID Klien';
$string['clientidadmin_help'] = 'ID klien adalah nilai unik yang digunakan untuk mengidentifikasi alat. Itu dibuat secara otomatis untuk setiap alat yang menggunakan profil keamanan JWT yang diperkenalkan di LTI 1.3 dan harus menjadi bagian dari detail yang diteruskan ke penyedia alat sehingga mereka dapat mengonfigurasi koneksi pada akhirnya.';
$string['comment'] = 'Komentar';
$string['configpassword'] = 'Kata sandi alat jarak jauh bawaan';
$string['configpreferheight'] = 'Tinggi bawaan pilihan';
$string['configpreferwidget'] = 'Setel widget sebagai peluncuran bawaan';
$string['configpreferwidth'] = 'Lebar pilihan bawaan';
$string['configresourceurl'] = 'URL sumber daya bawaan';
$string['configtoolurl'] = 'URL alat jarak jauh bawaan';
$string['configtypes'] = 'Aktifkan aplikasi LTI';
$string['configured'] = 'Dikonfigurasi';
$string['confirmtoolactivation'] = 'Apakah Anda yakin ingin mengaktifkan alat ini?';
$string['contentitem_deeplinking'] = 'Mendukung Deep Linking (Pesan Konten-Item)';
$string['contentitem_deeplinking_help'] = 'Jika dicentang, opsi \'Pilih konten\' akan tersedia saat menambahkan alat eksternal.';
$string['contentitem_multiple_description'] = 'Item berikut akan ditambahkan ke kursus Anda:';
$string['contentitem_multiple_graded'] = 'Aktivitas yang dinilai (Nilai maksimum: {$a})';
$string['contentselected'] = 'Konten terpilih';
$string['courseactivitiesorresources'] = 'Aktivitas atau sumber kursus';
$string['courseexternaltooladd'] = 'Tambahkan alat Eksternal LTI baru';
$string['courseexternaltooladdsuccess'] = '{$a} ditambahkan.';
$string['courseexternaltooledit'] = 'Edit {$a}';
$string['courseexternaltooleditsuccess'] = 'Perubahan tersimpan.';
$string['courseexternaltooliconalt'] = 'Ikon untuk {$a}';
$string['courseexternaltools'] = 'Alat eksternal LTI';
$string['courseexternaltoolsinfo'] = 'Alat Eksternal LTI adalah aplikasi tambahan yang dapat Anda integrasikan ke dalam kursus Anda, seperti konten interaktif atau penilaian. Siswa Anda dapat mengakses dan menggunakannya tanpa meninggalkan kursus Anda.';
$string['courseexternaltoolsnoeditpermissions'] = 'Anda tidak memiliki izin untuk mengedit alat ini';
$string['courseexternaltoolsnoviewpermissions'] = 'Lihat alat eksternal kursus';
$string['courseid'] = 'Nomor ID kursus';
$string['courseinformation'] = 'Informasi kursus';
$string['courselink'] = 'Menuju kursus';
$string['coursemisconf'] = 'Kesalahan konfigurasi kursus';
$string['coursetooldeleted'] = '{$a} dihapus';
$string['createdon'] = 'Dibuat pada';
$string['curllibrarymissing'] = 'Ekstensi PHP cURL diperlukan untuk alat Eksternal.';
$string['custom'] = 'Parameter kustom';
$string['custom_help'] = 'Parameter tersuai adalah setelan yang digunakan oleh penyedia alat. Misalnya, parameter kustom dapat digunakan untuk menampilkan
sumber daya tertentu dari penyedia. Setiap parameter harus dimasukkan pada baris terpisah menggunakan format "nama=nilai"; misalnya, "bab=3".

Aman untuk membiarkan kolom ini tidak berubah kecuali diarahkan oleh penyedia alat.';
$string['custominstr'] = 'Parameter kustom';
$string['debuglaunch'] = 'Opsi awakutu';
$string['debuglaunchoff'] = 'Peluncuran normal';
$string['debuglaunchon'] = 'Luncurkan awakutu';
$string['default'] = 'Bawaan';
$string['default_launch_container'] = 'Wadah peluncuran bawaan';
$string['default_launch_container_help'] = 'Wadah peluncuran memengaruhi tampilan alat saat diluncurkan dari kursus. Beberapa wadah peluncuran menyediakan lebih banyak layar real estat ke alat, dan yang lain memberikan nuansa yang lebih terintegrasi dengan lingkungan Moodle.
* **Bawaan** - Gunakan wadah peluncuran yang ditentukan oleh konfigurasi alat.
* **Tanamkan** - Alat ini ditampilkan dalam jendela Moodle yang ada, dengan cara yang mirip dengan sebagian besar jenis Aktivitas lainnya.
* **Sematkan, tanpa blok** - Alat ditampilkan dalam jendela Moodle yang ada, hanya dengan kontrol navigasi di bagian atas halaman.
* **Jendela baru** - Alat ini terbuka di jendela baru, menempati semua ruang yang tersedia. Tergantung pada browser, itu akan terbuka di tab baru atau jendela sembulan. Ada kemungkinan bahwa peramban akan mencegah jendela baru dibuka.';
$string['delegate'] = 'Delegasikan ke pengajar';
$string['delegate_tool'] = 'Seperti yang ditentukan dalam definisi Tautan Dalam atau Delegasikan ke pengajar';
$string['delete'] = 'Hapus';
$string['delete_confirmation'] = 'Apakah Anda yakin ingin menghapus alat yang telah dikonfigurasikan ini?';
$string['deletecoursetool'] = 'Hapus {$a}';
$string['deletecoursetoolconfirm'] = 'Ini akan menghapus {$a} dari alat LTI yang tersedia di kursus Anda.';
$string['deletecoursetoolwithusageconfirm'] = '{$a} saat ini sedang digunakan setidaknya dalam satu aktivitas di kursus Anda. Jika Anda menghapus alat ini, aktivitas yang menggunakannya tidak akan berfungsi lagi.<br><br>Apakah Anda yakin ingin menghapus {$a}?';
$string['display_description'] = 'Tampilkan deskripsi aktivitas saat siswa mengakses alat';
$string['display_description_help'] = 'Konten dari alat ini ditampilkan tertanam di halaman kursus. Setelan ini menentukan apakah deskripsi aktivitas ditampilkan di halaman tersebut.';
$string['display_name'] = 'Tampilkan nama aktivitas saat siswa mengakses alat';
$string['display_name_help'] = 'Konten dari alat ini ditampilkan tertanam di halaman kursus. Setelan ini menentukan apakah nama aktivitas ditampilkan di halaman tersebut.';
$string['donot'] = 'Jangan kirim';
$string['donotaccept'] = 'Jangan terima';
$string['donotallow'] = 'Jangan izinkan';
$string['dontshowinactivitychooser'] = 'Jangan tampilkan di pemilih aktivitas';
$string['duplicateregurl'] = 'URL pendaftaran ini sudah digunakan';
$string['dynreg_update_btn_new'] = 'Daftar sebagai alat eksternal baru';
$string['dynreg_update_btn_update'] = 'Perbarui';
$string['dynreg_update_name'] = 'Nama alat';
$string['dynreg_update_notools'] = 'Tidak ada alat dalam konteks.';
$string['dynreg_update_text'] = 'Ada alat yang sudah ada yang melekat pada domain pendaftaran. Apakah Anda ingin memperbarui alat eksternal yang sudah diinstal atau membuat alat eksternal baru?';
$string['dynreg_update_url'] = 'URL Dasar';
$string['dynreg_update_version'] = 'Versi LTI';
$string['dynreg_update_warn_dupdomain'] = 'Tidak disarankan untuk memiliki beberapa alat eksternal di bawah domain yang sama.';
$string['editdescription'] = 'Klik di sini untuk memberikan deskripsi alat ini';
$string['editmanualinstancedeprecationwarning'] = 'Aktivitas alat Eksternal yang dikonfigurasi secara manual tidak lagi didukung. Jangan khawatir, aktivitas ini akan tetap berjalan sebagaimana mestinya, namun Anda tidak dapat lagi melakukan perubahan pada konfigurasi alat di sini.
<br><br>
Untuk membuat perubahan apa pun pada alat ini, atau untuk membuat aktivitas baru dengannya, alat tersebut perlu ditambahkan ke kursus Anda di Kursus > Lainnya > Alat Eksternal LTI. Kemudian, Anda akan dapat membuat aktivitas baru, dengan memilih alat secara langsung di pemilih Aktivitas.
<br><br>
Anda dapat membaca selengkapnya tentang menambahkan alat Eksternal LTI di dokumentasi <a href="{$a}" target="_blank">Alat eksternal</a>.';
$string['embed'] = 'Sematkan';
$string['embed_no_blocks'] = 'Sematkan, tanpa blok';
$string['enableemailnotification'] = 'Kirim surel notifikasi';
$string['enableemailnotification_help'] = 'Masukkan kunci konsumen Anda dan rahasia bersama';
$string['enterkeyandsecret'] = 'Masukkan kunci konsumen Anda dan rahasia bersama';
$string['enterkeyandsecret_help'] = 'Jika Anda diberi kunci konsumen dan/atau rahasia bersama, masukkan di sini';
$string['entitycourseexternaltools'] = 'Alat eksternal LTI';
$string['errorbadurl'] = 'URL bukan URL alat atau kartrid yang valid.';
$string['errorincorrectconsumerkey'] = 'Kunci konsumen salah.';
$string['errorinvaliddata'] = 'Data tidak valid: {$a}';
$string['errorinvalidmediatype'] = 'Jenis media tidak valid: {$a}';
$string['errorinvalidresponseformat'] = 'Format tanggapan Item-Konten tidak valid.';
$string['errormisconfig'] = 'Alat yang salah dikonfigurasi. Silakan minta administrator Moodle Anda untuk memperbaiki konfigurasi alat.';
$string['errortooltypenotfound'] = 'Jenis alat LTI tidak ditemukan.';
$string['existing_window'] = 'Jendela yang ada';
$string['extensions'] = 'Layanan ekstensi LTI';
$string['external_tool_type'] = 'Alat yang telah dikonfigurasi sebelumnya';
$string['external_tool_type_help'] = '* **Otomatis, berdasarkan URL alat** - Konfigurasi alat terbaik dipilih secara otomatis. Jika URL alat tidak dikenali, detail konfigurasi alat mungkin perlu dimasukkan secara manual.
* **Alat kustom yang telah dikonfigurasikan** - Konfigurasi alat untuk alat yang ditentukan akan digunakan saat berkomunikasi dengan penyedia alat eksternal. Jika URL alat tampaknya bukan milik penyedia alat, peringatan akan ditampilkan. Tidak selalu perlu memasukkan URL alat.
* **Konfigurasi Kustom** - Kunci konsumen dan rahasia bersama mungkin perlu dimasukkan secara manual. Kunci konsumen dan rahasia bersama dapat diperoleh dari penyedia alat. Namun, tidak semua alat memerlukan kunci konsumen dan rahasia bersama, dalam hal ini kolom dapat dikosongkan.

### Pengeditan alat yang telah dikonfigurasi sebelumnya

Tiga ikon tersedia setelah menu tarik-turun alat yang telah dikonfigurasi sebelumnya:

* **Tambahkan** - Buat konfigurasi alat tingkat kursus. Semua model alat Eksternal dalam kursus ini dapat menggunakan konfigurasi alat.
* **Edit** - Pilih alat tingkat kursus dari menu tarik-turun, lalu klik ikon ini. Detail konfigurasi alat dapat diedit.
* **Hapus** - Hapus alat tingkat kursus yang dipilih.';
$string['external_tool_types'] = 'Alat yang telah dikonfigurasi sebelumnya';
$string['failedtoconnect'] = 'Moodle tidak dapat berkomunikasi dengan sistem "{$a}"';
$string['failedtocreatetooltype'] = 'Gagal membuat alat baru. Periksa URL dan coba lagi.';
$string['failedtodeletetoolproxy'] = 'Gagal menghapus pendaftaran alat. Anda mungkin perlu mengunjungi "Kelola pendaftaran alat eksternal" dan hapus secara manual.';
$string['filter_basiclti_configlink'] = 'Konfigurasikan situs pilihan Anda dan kata sandinya';
$string['filter_basiclti_password'] = 'Kata sandi wajib diisi';
$string['filterconfig'] = 'Administrasi LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Gunakan konfigurasi yang ada untuk model yang salah dikonfigurasi';
$string['fixnew'] = 'Konfigurasi baru';
$string['fixnewconf'] = 'Tentukan konfigurasi baru untuk model yang salah dikonfigurasi';
$string['fixold'] = 'Menggunakan yang ada';
$string['force_ssl'] = 'Paksa SSL';
$string['force_ssl_help'] = 'Memilih opsi ini memaksa semua peluncuran ke penyedia alat ini untuk menggunakan SSL. Selain itu, semua permintaan layanan web dari penyedia alat akan menggunakan SSL. Jika menggunakan opsi ini, konfirmasikan bahwa situs Moodle ini dan penyedia alat mendukung SSL.';
$string['generaltool'] = 'Alat umum';
$string['grading'] = 'Perutean nilai';
$string['icon_url'] = 'Ikon URL';
$string['icon_url_help'] = 'URL ikon memungkinkan ikon yang muncul di daftar kursus untuk aktivitas ini dimodifikasi. Alih-alih menggunakan ikon LTI bawaan, ikon yang menunjukkan jenis aktivitas dapat ditentukan.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI Kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam suatu aktivitas LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI Kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh aktivitas LTI selama interval analisis ini (Tingkat = Tidak ada tampilan, Lihat, Kirim, Lihat umpan balik)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada keluasan sosial yang dicapai siswa dalam suatu kegiatan LTI.';
$string['indicator:socialbreadthdef'] = 'LTI sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh kegiatan LTI selama interval analisis ini (Tingkat = Tidak ada partisipasi, Peserta sendiri, Peserta dengan orang lain)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'Mulai URL masuk';
$string['initiatelogin_help'] = 'URL alat tempat permintaan untuk memulai log masuk akan dikirim. URL ini diperlukan sebelum pesan berhasil dikirim ke alat.';
$string['invalidid'] = 'ID LTI salah';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Jenis kunci publik';
$string['keytype_help'] = 'Metode autentikasi yang digunakan untuk memvalidasi alat.';
$string['keytype_keyset'] = 'URL Keyset';
$string['keytype_rsa'] = 'Kunci RSA';
$string['launch_in_moodle'] = 'Luncurkan alat di Moodle';
$string['launch_in_popup'] = 'Luncurkan alat dalam sembulan';
$string['launch_url'] = 'URL alat';
$string['launch_url_help'] = 'URL alat menunjukkan alamat web Alat Eksternal, dan mungkin berisi informasi tambahan, seperti sumber daya untuk ditampilkan. Jika Anda tidak yakin apa yang harus dimasukkan untuk URL alat, silakan hubungi penyedia alat untuk informasi lebih lanjut. Anda dapat memasukkan URL kartrid jika ada, dan detail formulir lainnya akan terisi secara otomatis. Jika Anda telah memilih alat yang telah dikonfigurasi sebelumnya, Anda mungkin tidak perlu memasukkan URL alat. Jika tautan alat digunakan hanya untuk meluncurkan ke sistem penyedia alat, dan tidak pergi ke sumber daya tertentu, hal ini kemungkinan akan terjadi.';
$string['launchinpopup'] = 'Luncurkan kontainer';
$string['launchinpopup_help'] = 'Wadah peluncuran memengaruhi tampilan alat saat diluncurkan dari kursus. Beberapa wadah peluncuran menyediakan lebih banyak layar real estat ke alat, dan yang lain memberikan nuansa yang lebih terintegrasi dengan lingkungan Moodle.
* **Default** - Gunakan wadah peluncuran yang ditentukan oleh konfigurasi alat.
* **Sematkan** - Alat ini ditampilkan dalam jendela Moodle yang ada, dengan cara yang mirip dengan sebagian besar jenis Aktivitas lainnya.
* **Sematkan, tanpa blok** - Alat ditampilkan dalam jendela Moodle yang ada, hanya dengan kontrol navigasi di bagian atas halaman.
* **Jendela baru** - Alat ini terbuka di jendela baru, menempati semua ruang yang tersedia. Tergantung pada peramban, itu akan terbuka di tab baru atau jendela sembulan. Ada kemungkinan bahwa browser akan mencegah jendela baru dibuka.';
$string['launchoptions'] = 'Opsi peluncuran';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Tambahkan konfigurasi alat khusus kursus';
$string['lti:addinstance'] = 'Tambahkan alat eksternal baru';
$string['lti:addmanualinstanceprohibitederror'] = 'Pembuatan alat secara manual tanpa definisi alat kursus tidak lagi didukung. Harap buat alat kursus terlebih dahulu dan kemudian gunakan itu untuk membuat contoh aktivitas.';
$string['lti:addpreconfiguredinstance'] = 'Tambahkan alat yang telah dikonfigurasi sebelumnya';
$string['lti:admin'] = 'Jadilah administrator saat alat ini diluncurkan';
$string['lti:grade'] = 'Lihat nilai yang dikembalikan oleh alat eksternal';
$string['lti:manage'] = 'Jadilah Instruktur saat alat ini diluncurkan';
$string['lti:requesttooladd'] = 'Minta alat dikonfigurasi di seluruh situs';
$string['lti:view'] = 'Luncurkan aktivitas alat eksternal';
$string['lti_administration'] = 'Edit alat yang telah dikonfigurasi sebelumnya';
$string['lti_errormsg'] = 'Alat mengembalikan pesan kesalahan berikut: "{$a}"';
$string['lti_launch_error'] = 'Galat saat meluncurkan alat eksternal:';
$string['lti_launch_error_tool_request'] = '<p> Untuk mengirimkan permintaan kepada administrator untuk menyelesaikan konfigurasi alat, klik <a href="{$a->admin_request_url}" target="_top">di sini</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p> Kesalahan ini mungkin karena kunci konsumen dan rahasia bersama untuk penyedia alat tidak ada. </p> <p> Jika Anda memiliki kunci konsumen dan rahasia bersama, Anda dapat memasukkannya saat model contoh alat eksternal (pastikan opsi lanjutan terlihat). </p> <p> Atau, Anda dapat <a href="{$a->course_tool_editor} "> membuat konfigurasi penyedia alat tingkat kursus</a>. </p>';
$string['lti_tool_request_added'] = 'Permintaan konfigurasi alat berhasil dikirim. Anda mungkin perlu menghubungi administrator untuk menyelesaikan konfigurasi alat.';
$string['lti_tool_request_existing'] = 'Konfigurasi alat untuk domain alat telah dikirimkan.';
$string['ltisettings'] = 'Setelan LTI';
$string['ltiunknownserviceapicall'] = 'Panggilan API layanan tidak dikenal LTI.';
$string['ltiversion'] = 'Versi LTI';
$string['ltiversion_help'] = 'Versi LTI yang digunakan untuk menandatangani pesan dan permintaan layanan: LTI 1.0/1.1 dan LTI 2.0 menggunakan profil keamanan OAuth 1.0A; LTI 1.3.0 menggunakan JWT.';
$string['main_admin'] = 'Bantuan umum';
$string['main_admin_help'] = 'Alat eksternal memungkinkan pengguna Moodle berinteraksi dengan sumber belajar yang dihosting dari jarak jauh. Melalui protokol peluncuran khusus, alat jarak jauh memiliki akses ke informasi umum tentang pengguna peluncuran. Misalnya, nama institusi, ID kursus, ID pengguna, dan informasi lain seperti nama pengguna atau alamat surel.

Alat yang tercantum di halaman ini dipisahkan menjadi tiga kategori:

* ** Aktif ** - Penyedia alat ini telah disetujui dan dikonfigurasi oleh administrator. Mereka dapat digunakan dari dalam kursus apa pun di situs ini. Jika kunci konsumen dan rahasia bersama dimasukkan, hubungan kepercayaan dibuat antara situs ini dan alat jarak jauh, menyediakan saluran komunikasi yang aman.
* ** Tertunda ** - Penyedia alat ini masuk melalui impor paket, tetapi belum dikonfigurasi oleh administrator. Pengajar masih dapat menggunakan alat dari penyedia ini jika mereka memiliki kunci konsumen dan rahasia bersama, atau jika tidak diperlukan.
* ** Ditolak ** - Penyedia alat ini ditandai sebagai penyedia yang tidak berniat menyediakannya di situs oleh administrator. Pengajar masih dapat menggunakan alat dari penyedia ini jika mereka memiliki kunci konsumen dan rahasia bersama, atau jika tidak diperlukan.';
$string['manage_external_tools'] = 'Kelola alat';
$string['manage_tool_proxies'] = 'Kelola pendaftaran alat eksternal';
$string['manage_tools'] = 'Kelola prasyarat alat';
$string['manuallyaddtype'] = 'Atau, Anda dapat <a href="{$a}">mengonfigurasi alat secara manual</a>.';
$string['miscellaneous'] = 'Lain-lain';
$string['misconfiguredtools'] = 'Terdeteksi model alat yang salah dikonfigurasi';
$string['missingparameterserror'] = 'Laman salah dikonfigurasi: "{$a}"';
$string['module_class_type'] = 'Jenis modul Moodle';
$string['modulename'] = 'Alat eksternal';
$string['modulename_help'] = 'Modul aktivitas alat eksternal memungkinkan siswa untuk berinteraksi dengan sumber belajar dan aktivitas di situs web lain. Misalnya, alat eksternal dapat memberikan akses ke jenis aktivitas baru atau materi pembelajaran dari penerbit.

Untuk membuat aktivitas fitur eksternal, diperlukan penyedia fitur yang mendukung LTI (Learning Tools Interoperability). Pengajar bisa membuat aktivitas alat eksternal atau menggunakan alat yang dikonfigurasi oleh administrator situs.

Aktivitas alat eksternal berbeda dari sumber daya URL dalam beberapa hal:

* Alat eksternal sadar konteks, yaitu mereka memiliki akses ke informasi tentang pengguna yang meluncurkan alat, seperti institusi, kursus dan nama
* Alat eksternal mendukung membaca, memperbarui, dan menghapus nilai terkait dengan instance aktivitas
* Konfigurasi alat eksternal membuat hubungan kepercayaan antara situs Anda dan penyedia alat, sehingga memungkinkan komunikasi yang aman di antara keduanya';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Alat eksternal';
$string['modulenamepluralformatted'] = 'Alat eksternal';
$string['name'] = 'Nama';
$string['never'] = 'Tidak pernah';
$string['new_window'] = 'Jendela baru';
$string['no_lti_configured'] = 'Tidak ada alat eksternal aktif yang dikonfigurasi.';
$string['no_lti_pending'] = 'Tidak ada alat eksternal yang tertunda.';
$string['no_lti_rejected'] = 'Tidak ada alat eksternal yang ditolak.';
$string['no_lti_tools'] = 'Tidak ada alat eksternal yang dikonfigurasi.';
$string['no_tp_accepted'] = 'Tidak ada pendaftaran alat eksternal yang diterima.';
$string['no_tp_cancelled'] = 'Tidak ada pendaftaran alat eksternal yang dibatalkan.';
$string['no_tp_configured'] = 'Tidak ada registrasi alat eksternal yang tidak terdaftar yang dikonfigurasi.';
$string['no_tp_pending'] = 'Tidak ada pendaftaran alat eksternal yang tertunda.';
$string['no_tp_rejected'] = 'Tidak ada pendaftaran alat eksternal yang ditolak.';
$string['noattempts'] = 'Tidak ada upaya yang dilakukan pada model alat ini';
$string['nocourseexternaltoolsnotice'] = 'Belum ada alat LTI Eksternal.';
$string['noltis'] = 'Tidak ada model alat eksternal';
$string['noprofileservice'] = 'Layanan profil tidak ditemukan';
$string['noservers'] = 'Tidak ada server yang ditemukan';
$string['notypes'] = 'Saat ini tidak ada alat LTI yang disiapkan di Moodle. Klik tautan Instal di atas untuk menambahkan beberapa.';
$string['noviewusers'] = 'Tidak ada pengguna yang ditemukan dengan izin untuk menggunakan alat ini';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 memerlukan openssl.cnf yang valid untuk dikonfigurasi dan tersedia untuk server web Anda. Silakan hubungi administrator situs untuk mengonfigurasi dan mengaktifkan openssl untuk situs ini.';
$string['optionalsettings'] = 'Setelan opsional';
$string['organization'] = 'Detail organisasi';
$string['organizationdescr'] = 'Deskripsi organisasi';
$string['organizationid_default'] = 'ID bawaan organisasi';
$string['organizationid_default_help'] = 'Nilai bawaan yang akan digunakan untuk ID Organisasi. ID Situs mengidentifikasi instalasi Moodle ini.';
$string['organizationidguid'] = 'ID organisasi';
$string['organizationidguid_help'] = 'Pengenal unik untuk model Moodle ini diteruskan ke alat tersebut sebagai GUID Instance Platform.

Jika bidang ini dibiarkan kosong, nilai bawaan akan digunakan.';
$string['organizationurl'] = 'URL organisasi';
$string['organizationurl_help'] = 'URL dasar dari model Moodle ini.

Jika bidang ini dibiarkan kosong, nilai bawaan akan digunakan berdasarkan konfigurasi situs.';
$string['pagesize'] = 'Tampilan ajuan per halaman';
$string['parameter'] = 'Parameter alat';
$string['parameter_help'] = 'Parameter alat adalah setelan yang diminta untuk diteruskan oleh penyedia alat di proksi alat yang diterima.';
$string['password'] = 'Rahasia bersama';
$string['password_admin'] = 'Rahasia bersama';
$string['password_admin_help'] = 'Rahasia bersama dapat dianggap sebagai kata sandi yang digunakan untuk mengautentikasi akses ke alat tersebut. Ini harus disediakan bersama dengan kunci konsumen dari penyedia alat. Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai) mungkin tidak membutuhkan rahasia bersama.';
$string['password_help'] = 'Untuk alat yang telah dikonfigurasi sebelumnya, tidak perlu memasukkan rahasia bersama di sini, karena rahasia bersama akan diberikan sebagai bagian dari proses konfigurasi. Bidang ini harus dimasukkan jika membuat tautan ke penyedia alat yang belum dikonfigurasi. Jika penyedia alat akan digunakan lebih dari sekali dalam kursus ini, menambahkan konfigurasi alat kursus adalah ide yang bagus. Rahasia bersama dapat dianggap sebagai kata sandi yang digunakan untuk mangautentikasi akses ke alat tersebut. Ini harus disediakan bersama dengan kunci konsumen dari penyedia alat. Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai) mungkin tidak membutuhkan rahasia bersama.';
$string['pending'] = 'Ditangguhkan';
$string['pluginadministration'] = 'Administrasi alat eksternal';
$string['pluginname'] = 'Alat eksternal';
$string['preferheight'] = 'Tinggi yang diinginkan';
$string['preferwidget'] = 'Pilih peluncuran widget';
$string['preferwidth'] = 'Lebar yang diingikan';
$string['press_to_submit'] = 'Tekan untuk meluncurkan aktivitas ini';
$string['privacy'] = 'Privasi';
$string['privacy:metadata:coursefullname'] = 'Nama lengkap kursus yang diakses pengguna LTI Konsumen dari';
$string['privacy:metadata:courseid'] = 'ID kursus yang diakses pengguna LTI Konsumen dari';
$string['privacy:metadata:courseidnumber'] = 'Nomor ID kursus yang diakses pengguna LTI Konsumen dari';
$string['privacy:metadata:courseshortname'] = 'Nama pendek kursus yang diakses pengguna LTI Konsumen dari';
$string['privacy:metadata:createdby'] = 'Pengguna yang membuat catatan';
$string['privacy:metadata:email'] = 'Alamat surel pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:externalpurpose'] = 'Konsumen LTI memberikan informasi dan konteks pengguna kepada Penyedia Alat LTI.';
$string['privacy:metadata:firstname'] = 'Nama depan pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:fullname'] = 'Nama lengkap pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:lastname'] = 'Nama belakang pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:lti_submission'] = 'Pengajuan LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Stempel waktu yang menunjukkan kapan pengajuan dilakukan';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Stempel waktu yang menunjukkan kapan pengajuan diubah';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Nilai untuk pengguna sebagai persentase';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Nilai asli untuk pengguna';
$string['privacy:metadata:lti_submission:userid'] = 'ID pengguna yang mengirimkan aktivitas LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proksi LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nama proksi LTI';
$string['privacy:metadata:lti_types'] = 'Jenis LTI';
$string['privacy:metadata:lti_types:name'] = 'Nama jenis LTI';
$string['privacy:metadata:role'] = 'Peran dalam kursus untuk pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:timecreated'] = 'Waktu ketika rekaman itu dibuat';
$string['privacy:metadata:timemodified'] = 'Waktu ketika rekaman itu dimodifikasi';
$string['privacy:metadata:userid'] = 'ID pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:useridnumber'] = 'Nomor ID pengguna yang mengakses Konsumen LTI';
$string['privacy:metadata:username'] = 'Nama pengguna pengguna yang mengakses Konsumen LTI';
$string['publickey'] = 'Kunci publik';
$string['publickey_help'] = 'Kunci publik (dalam format PEM) yang disediakan oleh alat untuk memungkinkan tanda tangan pesan masuk dan permintaan layanan diverifikasi.';
$string['publickeyset'] = 'Set kunci publik';
$string['publickeyset_help'] = 'Set kunci publik dari mana situs ini akan mengambil kunci publik alat untuk memungkinkan tanda tangan pesan masuk dan permintaan layanan diverifikasi.';
$string['quickgrade'] = 'Izinkan penilaian cepat';
$string['quickgrade_help'] = 'Jika diaktifkan, beberapa alat dapat dinilai pada satu halaman. Tambahkan nilai dan komentar, lalu klik tombol "Simpan semua masukan saya" untuk menyimpan semua perubahan pada halaman tersebut.';
$string['redirect'] = 'Anda akan diarahkan dalam beberapa detik. Jika tidak, tekan tombol.';
$string['redirectionuris'] = 'Pengalihan URI';
$string['redirectionuris_help'] = 'Daftar URI (satu per baris) yang digunakan alat saat membuat permintaan otorisasi. Setidaknya satu harus didaftarkan sebelum pesan berhasil dikirim ke alat.';
$string['register'] = 'Daftar';
$string['register_warning'] = 'Halaman pendaftaran sepertinya butuh waktu lama untuk dibuka. Jika tidak muncul, periksa apakah Anda memasukkan URL yang benar di setelan konfigurasi. Jika Moodle menggunakan https, pastikan alat yang Anda konfigurasi mendukung https dan Anda menggunakan https di URL.';
$string['registertype'] = 'Konfigurasikan pendaftaran alat eksternal baru';
$string['registration_options'] = 'Opsi pendaftaran';
$string['registrationname'] = 'Nama penyedia alat';
$string['registrationname_help'] = 'Masukkan nama penyedia alat yang didaftarkan.';
$string['registrationurl'] = 'URL Pendaftaran';
$string['registrationurl_help'] = 'URL pendaftaran harus tersedia dari penyedia alat sebagai lokasi pengiriman permintaan pendaftaran.';
$string['reject'] = 'Tolak';
$string['rejected'] = 'Ditolak';
$string['resource'] = 'Sumber';
$string['resourcekey'] = 'Kunci konsumen';
$string['resourcekey_admin'] = 'Kunci konsumen';
$string['resourcekey_admin_help'] = 'Kunci konsumen dapat dianggap sebagai nama pengguna yang digunakan untuk mengautentikasi akses ke alat. Ini dapat digunakan oleh penyedia alat untuk secara unik mengidentifikasi situs Moodle tempat pengguna meluncurkan alat tersebut. Kunci konsumen harus disediakan oleh penyedia alat. Metode untuk mendapatkan kunci konsumen bervariasi di antara penyedia alat. Ini mungkin merupakan proses otomatis, atau mungkin memerlukan dialog dengan penyedia alat. Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai) mungkin tidak memerlukan kunci sumber daya.';
$string['resourcekey_help'] = 'Untuk alat yang telah dikonfigurasi sebelumnya, tidak perlu memasukkan kunci sumber di sini, karena kunci konsumen akan diberikan sebagai bagian dari proses konfigurasi. Bidang ini harus dimasukkan jika membuat tautan ke penyedia alat yang belum dikonfigurasi. Jika penyedia alat akan digunakan lebih dari sekali dalam kursus ini, menambahkan konfigurasi alat kursus adalah ide yang bagus. Kunci konsumen dapat dianggap sebagai nama pengguna yang digunakan untuk mengautentikasi akses ke alat. Ini dapat digunakan oleh penyedia alat untuk secara unik mengidentifikasi situs Moodle tempat pengguna meluncurkan alat tersebut. Kunci konsumen harus disediakan oleh penyedia alat. Metode untuk mendapatkan kunci konsumen bervariasi di antara penyedia alat. Ini mungkin merupakan proses otomatis, atau mungkin memerlukan dialog dengan penyedia alat. Alat yang tidak memerlukan komunikasi aman dari Moodle dan tidak menyediakan layanan tambahan (seperti pelaporan nilai) mungkin tidak memerlukan kunci sumber daya.';
$string['resourceurl'] = 'URL sumber';
$string['restricttocategory'] = 'Batasi pada kategori';
$string['restricttocategory_help'] = 'Untuk membatasi penggunaan alat ini pada kursus dalam suatu kategori, pilih satu atau beberapa kategori dari daftar.';
$string['return_to_course'] = 'Klik <a href="{$a->link}" target="_top">di sini</a> untuk kembali ke kursus.';
$string['saveallfeedback'] = 'Simpan semua umpan balik saya';
$string['search:activity'] = 'Alat eksternal - informasi aktivitas';
$string['secure_icon_url'] = 'URL ikon aman';
$string['secure_icon_url_help'] = 'Mirip dengan URL ikon, tetapi digunakan saat situs diakses secara aman melalui SSL. Ruas ini untuk mencegah peramban menampilkan peringatan tentang gambar yang tidak aman.';
$string['secure_launch_url'] = 'URL alat aman';
$string['secure_launch_url_help'] = 'Mirip dengan URL alat, tetapi digunakan sebagai pengganti URL alat jika diperlukan keamanan yang tinggi. Moodle akan menggunakan URL alat aman alih-alih URL alat jika situs Moodle diakses melalui SSL, atau jika konfigurasi alat diatur untuk selalu diluncurkan melalui SSL. URL alat juga dapat disetel ke alamat https untuk memaksa peluncuran melalui SSL, dan ruas ini dapat dikosongkan.';
$string['selectcontent'] = 'Pilih konten';
$string['selectcontentvalidationerror'] = 'Anda perlu memilih konten untuk aktivitas ini.';
$string['send'] = 'Kirim';
$string['services'] = 'Layanan';
$string['services_help'] = 'Pilih layanan yang ingin Anda tawarkan ke penyedia alat. Lebih dari satu layanan dapat dipilih.';
$string['setupoptions'] = 'Opsi setelan';
$string['share_email'] = 'Bagikan surel peluncur dengan alat';
$string['share_email_admin'] = 'Bagikan surel peluncur dengan alat';
$string['share_email_admin_help'] = 'Tentukan apakah alamat surel pengguna yang meluncurkan alat akan dibagikan dengan penyedia alat. Penyedia alat mungkin memerlukan alamat surel peluncur untuk membedakan pengguna dengan nama yang sama di UI, atau mengirim surel ke pengguna berdasarkan tindakan di dalam alat.';
$string['share_email_help'] = 'Tentukan apakah alamat surel pengguna yang meluncurkan alat akan dibagikan dengan penyedia alat. Penyedia alat mungkin memerlukan alamat surel peluncur untuk membedakan pengguna dengan nama yang sama, atau mengirim surel ke pengguna berdasarkan tindakan dalam alat. Perhatikan bahwa setelan ini dapat diganti dalam konfigurasi alat.';
$string['share_name'] = 'Bagikan nama peluncur dengan alat';
$string['share_name_admin'] = 'Bagikan nama peluncur dengan alat';
$string['share_name_admin_help'] = 'Tentukan apakah nama lengkap pengguna yang meluncurkan alat harus dibagikan dengan penyedia alat. Penyedia alat mungkin memerlukan nama peluncur untuk menampilkan informasi yang berarti di dalam alat.';
$string['share_name_help'] = 'Tentukan apakah nama lengkap pengguna yang meluncurkan alat harus dibagikan dengan penyedia alat. Penyedia alat mungkin memerlukan nama peluncur untuk menampilkan informasi yang berarti di dalam alat. Perhatikan bahwa setelan ini dapat diganti dalam konfigurasi alat.';
$string['share_roster'] = 'Izinkan alat untuk mengakses daftar kursus ini';
$string['share_roster_admin'] = 'Alat dapat mengakses daftar kursus';
$string['share_roster_admin_help'] = 'Tentukan apakah alat tersebut dapat mengakses daftar pengguna yang terdaftar dalam kursus tempat alat ini diluncurkan.';
$string['share_roster_help'] = 'Tentukan apakah alat dapat mengakses daftar pengguna yang terdaftar dalam kursus ini. Perhatikan bahwa setelan ini dapat di dalam konfigurasi alat.';
$string['show_in_course_activity_chooser'] = 'Tampilkan di pemilih aktivitas dan sebagai alat yang telah dikonfigurasi sebelumnya';
$string['show_in_course_lti1'] = 'Penggunaan konfigurasi alat';
$string['show_in_course_lti1_help'] = 'Alat ini dapat ditampilkan di pemilih aktivitas untuk dipilih pengajar untuk ditambahkan ke kursus. Atau, ini dapat ditampilkan di menu tarik-turun alat yang telah dikonfigurasikan sebelumnya saat menambahkan alat eksternal ke kursus. Opsi selanjutnya adalah konfigurasi alat hanya digunakan jika URL alat yang tepat dimasukkan saat menambahkan alat eksternal ke kursus.';
$string['show_in_course_lti2'] = 'Penggunaan konfigurasi alat';
$string['show_in_course_lti2_help'] = 'Alat ini dapat ditampilkan di pemilih aktivitas untuk dipilih pengajar untuk ditambahkan ke kursus atau di menu tarik-turun alat yang telah dikonfigurasikan sebelumnya saat menambahkan alat eksternal ke kursus.';
$string['show_in_course_no'] = 'Jangan tampilkan; gunakan hanya ketika URL alat yang cocok dimasukkan';
$string['show_in_course_preconfigured'] = 'Tampilkan sebagai alat yang telah dikonfigurasikan sebelumnya saat menambahkan alat eksternal';
$string['showinactivitychooser'] = 'Tampilkan di pemilih aktivitas';
$string['sitehost'] = 'Nama hos situs';
$string['siteid'] = 'ID situs';
$string['size'] = 'Parameter ukuran';
$string['submission'] = 'Pengajuan';
$string['submissions'] = 'Pengajuan';
$string['submissionsfor'] = 'Pengajuan untuk {$a}';
$string['subplugintype_ltiresource'] = 'Sumber layanan LTI';
$string['subplugintype_ltiresource_plural'] = 'Sumber layanan LTI';
$string['subplugintype_ltiservice'] = 'Layanan LTI';
$string['subplugintype_ltiservice_plural'] = 'Layanan LTI';
$string['subplugintype_ltisource'] = 'Sumber LTI';
$string['subplugintype_ltisource_plural'] = 'Sumber LTI';
$string['successfullycreatedtooltype'] = 'Berhasil membuat alat baru!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Konfigurasi alat berhasil diambil dari konten yang dipilih.';
$string['toggle_debug_data'] = 'Alihkan data awakutu';
$string['tool_settings'] = 'Setelan alat';
$string['tooldescription'] = 'Deskripsi alat';
$string['tooldescription_help'] = 'Deskripsi alat yang akan ditampilkan kepada pengajar dalam daftar aktivitas. Ini harus menjelaskan untuk apa alat itu dan apa fungsinya dan informasi tambahan apa pun yang mungkin perlu diketahui pengajar.';
$string['tooldetailsaccesstokenurl'] = 'URL token akses';
$string['tooldetailsauthrequesturl'] = 'URL permintaan autentikasi';
$string['tooldetailsclientid'] = 'ID Klien';
$string['tooldetailsdeploymentid'] = 'ID Penerapan';
$string['tooldetailsmailtosubject'] = 'Konfigurasi alat LTI';
$string['tooldetailsmodalemail'] = 'Surel';
$string['tooldetailsmodallink'] = 'Lihat detail konfigurasi';
$string['tooldetailsmodaltitle'] = 'Detail konfigurasi alat';
$string['tooldetailsplatformid'] = 'ID platform';
$string['tooldetailspublickeyseturl'] = 'URL set kunci publik';
$string['toolisbeingused'] = 'Alat ini digunakan {$a} kali';
$string['toolisnotbeingused'] = 'Alat ini belum digunakan';
$string['toolproxy'] = 'Registrasi alat eksternal';
$string['toolproxy_help'] = 'Registrasi alat eksternal memungkinkan administrator situs Moodle untuk mengonfigurasi alat eksternal dari proxy alat yang diperoleh dari penyedia alat yang mendukung LTI 2.0. URL pendaftaran yang disediakan oleh penyedia alat adalah semua yang diperlukan untuk memulai proses. Kemampuan dan layanan yang ditawarkan kepada penyedia alat dipilih saat mengonfigurasi pendaftaran baru. Pendaftaran alat yang terdaftar di halaman ini dipisahkan menjadi empat kategori: * **Dikonfigurasi** - Pendaftaran alat ini telah diatur tetapi proses pendaftaran belum dimulai. * **Tertunda** - Proses pendaftaran untuk pendaftaran alat ini telah dimulai tetapi belum selesai. Buka dan simpan setelan untuk memindahkannya kembali ke kategori \'Dikonfigurasi\'. * **Diterima** - Pendaftaran alat ini telah disetujui; sumber daya yang ditentukan dalam proxy alat akan muncul di halaman alat yang telah dikonfigurasi sebelumnya dengan status awal \'Tertunda\'. * **Ditolak** - Pendaftaran alat ini adalah alat yang ditolak selama proses pendaftaran. Buka dan simpan setelan untuk memindahkannya kembali ke kategori \'Konfigurasi\' sehingga proses pendaftaran dapat dimulai kembali.';
$string['toolproxyregistration'] = 'Registrasi alat eksternal';
$string['toolregistration'] = 'Registrasi alat eksternal';
$string['toolsetup'] = 'Konfigurasi alat eksternal';
$string['tooltypenotfounderror'] = 'Alat LTI yang digunakan dalam aktivitas ini telah dihapus. Jika Anda memerlukan bantuan, hubungi guru atau administrator situs Anda.';
$string['tooltypes'] = 'Alat';
$string['toolurl'] = 'URL alat';
$string['toolurl_contentitemselectionrequest'] = 'URL Pemilihan Konten';
$string['toolurl_contentitemselectionrequest_help'] = 'URL Pemilihan Konten akan digunakan untuk meluncurkan halaman pemilihan konten dari penyedia alat. Jika kosong, URL Alat akan digunakan';
$string['toolurl_help'] = 'URL alat digunakan untuk mencocokkan URL alat dengan konfigurasi alat yang benar. Mengawali URL dengan http adalah opsional.

Selain itu, URL dasar digunakan sebagai URL alat jika URL alat tidak ditentukan dalam model alat eksternal.

Misalnya, URL dasar * tool.com * akan cocok dengan yang berikut:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

URL dasar * www.tool.com / quizzes * akan cocok dengan yang berikut:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

URL dasar * quiz.tool.com * akan cocok dengan yang berikut:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Jika dua konfigurasi alat berbeda untuk domain yang sama, pencocokan paling spesifik akan digunakan.

Anda juga dapat memasukkan URL kartrid jika Anda memilikinya dan detail alat akan terisi secara otomatis.';
$string['toolurlplaceholder'] = 'URL alat...';
$string['typename'] = 'Nama alat';
$string['typename_help'] = 'Nama alat digunakan untuk mengidentifikasi penyedia alat dalam Moodle. Nama yang dimasukkan akan terlihat oleh pengajar saat menambahkan alat eksternal dalam kursus.';
$string['types'] = 'Jenis';
$string['unabletocreatetooltype'] = 'Tidak dapat membuat alat';
$string['unabletofindtooltype'] = 'Tidak menemukan perkakas untuk {$a->id}';
$string['unknownstate'] = 'Status tidak diketahui';
$string['update'] = 'Pembaruan';
$string['usage'] = 'Jumlah penggunaan';
$string['useraccountinformation'] = 'Informasi akun pengguna';
$string['userpersonalinformation'] = 'Informasi akun pengguna';
$string['validurl'] = 'URL yang valid harus dimulai dengan http(s)://';
$string['viewsubmissions'] = 'Lihat ajuan dan layar penilaian';
