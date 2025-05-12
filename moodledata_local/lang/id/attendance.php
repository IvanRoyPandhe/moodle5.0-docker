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
 * Strings for component 'attendance', language 'id', version '5.0'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Tidak hadir';
$string['Eacronym'] = 'I';
$string['Efull'] = 'Izin';
$string['Lacronym'] = 'S';
$string['Lfull'] = 'Sakit';
$string['Pacronym'] = 'H';
$string['Pfull'] = 'Hadir';
$string['absenteereport'] = 'Laporan absensi';
$string['acronym'] = 'Akronim';
$string['add'] = 'Tambahkan';
$string['addedrecip'] = 'Menambahkan {$a} penerima baru';
$string['addedrecips'] = 'Menambahkan {$a} penerima baru';
$string['addmultiplesessions'] = 'Multisesi';
$string['addsession'] = 'Tambahkan sesi';
$string['adduser'] = 'Tambahkan pengguna';
$string['addwarning'] = 'Tambahkan peringatan';
$string['all'] = 'Semua';
$string['allcourses'] = 'Semua kursus';
$string['allowupdatestatus'] = 'Izinkan siswa memperbarui kehadiran mereka sendiri';
$string['allowupdatestatus_desc'] = 'Jika dicentang, siswa akan dapat memperbarui kehadiran mereka untuk sesi setelah mereka melaporkannya sendiri.';
$string['allowupdatestatus_help'] = 'Jika dicentang, siswa akan dapat memperbarui kehadiran mereka untuk sesi setelah mereka melaporkannya sendiri.';
$string['allpast'] = 'Masa lalu';
$string['allsessions'] = 'Semua sesi';
$string['allsessionstotals'] = 'Total sesi  terpilih';
$string['attendance:addinstance'] = 'Tambahkan aktivitas kehadiran baru';
$string['attendance:canbelisted'] = 'Muncul di daftar';
$string['attendance:changeattendances'] = 'Ubah kehadiran';
$string['attendance:changepreferences'] = 'Mengubah Preferensi';
$string['attendance:export'] = 'Ekspor Laporan';
$string['attendance:import'] = 'Impor sesi dari berkas (csv)';
$string['attendance:manageattendances'] = 'Kelola Kehadiran';
$string['attendance:managetemporaryusers'] = 'Kelola pengguna sementara';
$string['attendance:manualautomark'] = 'Izinkan proses penandaan otomatis manual';
$string['attendance:takeattendances'] = 'Lakukan presensi';
$string['attendance:view'] = 'Melihat kehadiran';
$string['attendance:viewreports'] = 'Melihat laporan';
$string['attendance:viewsummaryreports'] = 'Lihat laporan ringkasan kursus';
$string['attendance:warningemails'] = 'Dapat berlangganan surel dengan pengguna yang tidak hadir';
$string['attendance_already_submitted'] = 'Kehadiran Anda telah disetel';
$string['attendance_no_status'] = 'Tidak ada status valid yang tersedia - Anda mungkin terlambat untuk merekam kehadiran.';
$string['attendancedata'] = 'Data kehadiran';
$string['attendancefile'] = 'Berkas kehadiran (format csv)';
$string['attendancefile_help'] = 'Berkas harus berupa berkas CSV dengan tajuk baris dan ruas untuk mengidentifikasi pengguna dan waktu kehadiran dicatat misalnya ((email,scantime) atau (username,time)';
$string['attendancegrade'] = 'Nilai kehadiran';
$string['attendancenotset'] = 'Anda harus setel kehadiran Anda';
$string['attendancenotstarted'] = 'Kehadiran belum dimulai untuk kursus ini';
$string['attendancepercent'] = 'Presentasi kehadiran';
$string['attendancereport'] = 'Laporan Kehadiran';
$string['attendanceslogged'] = 'Kehadiran dicatat';
$string['attendancestaken'] = 'Lakukan presensi';
$string['attendancesuccess'] = 'Berhasil melakukan presensi kehadiran';
$string['attendanceupdated'] = 'Kehadiran berhasil diperbarui';
$string['attendanceuserreport'] = 'Laporan kehadiran';
$string['attforblockdirstillexists'] = 'direktori mod/attforblock lama masih ada - Anda harus menghapus direktori ini di peladen Anda sebelum menjalankan peningkatan ini.';
$string['attrecords'] = 'Rekaman kehadiran';
$string['autoassignstatus'] = 'Secara otomatis memilih status tertinggi yang tersedia';
$string['autoassignstatus_help'] = 'Jika ini dipilih, siswa akan secara otomatis diberi nilai tertinggi yang tersedia.';
$string['automark'] = 'Perekaman otomatis';
$string['automark_help'] = 'Memungkinkan perekaman diselesaikan secara otomatis. Jika "Ya", siswa akan secara otomatis terekam tergantung pada akses pertama mereka ke kursus. Jika "Setel tidak terekam di akhir sesi" setiap siswa yang belum merekam kehadiran mereka akan disetel ke status tidak terekam terpilih.';
$string['automarkall'] = 'Ya';
$string['automarkclose'] = 'Setel tidak terekam di akhir sesi';
$string['automarkingcomplete'] = 'Penandaan otomatis selesai';
$string['automarkingnotavailableyet'] = 'Sesi ini menggunakan penandaan otomatis pada penutupan sesi dan sesi belum berakhir.';
$string['automarkingnotenabled'] = 'Penandaan otomatis tidak diaktifkan dalam sesi ini';
$string['automarktask'] = 'Periksa sesi kehadiran yang membutuhkan perekaman otomatis';
$string['automarkuseempty'] = 'Penanganan penandaan otomatis status ketersediaan';
$string['automarkuseempty_desc'] = 'Jika dicentang, item status yang memiliki setelan "tersedia untuk" kosong/tidak disetel akan diizinkan selama penandaan otomatis';
$string['autorecorded'] = 'otomatis direkam sistem';
$string['availability'] = 'Ketersediaan penandaan sendiri';
$string['availability_help'] = 'Batasi ketersediaan status ini. <br> Jika opsi "Terbatas" dipilih, berikan jumlah menit status ini tersedia setelah sesi dimulai. Ini berlaku saat siswa menandai kehadiran mereka sendiri.';
$string['availabilityalways'] = 'Selalu';
$string['availabilitylimitedtime'] = 'Waktu terbatas';
$string['availabilityno'] = 'Tidak';
$string['availablebeforesession'] = 'Tersedia sebelum sesi dimulai';
$string['availablebeforesession_help'] = 'Saat siswa menandai kehadirannya sendiri, izinkan status ini dipilih sebelum sesi dimulai.';
$string['averageattendance'] = 'Rata-rata kehadiran';
$string['averageattendancegraded'] = 'Rata-rata kehadiran';
$string['backtoparticipants'] = 'Kembali ke daftar peserta';
$string['below'] = 'Di bawah {$a}%';
$string['calclose'] = 'Tutup';
$string['calendarevent'] = 'Sesi dibuat acara kalender';
$string['calendarevent_help'] = 'Jika diaktifkan, acara kalender akan dibuat untuk sesi ini. Jika dinonaktifkan, acara kalender yang ada untuk sesi ini akan dihapus.';
$string['caleventcreated'] = 'Acara kalender untuk sesi berhasil dibuat';
$string['caleventdeleted'] = 'Acara kalender untuk sesi berhasil dihapus';
$string['calmonths'] = 'Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember';
$string['calshow'] = 'Pilih tanggal';
$string['calweekdays'] = 'Ming,Sen,Sel,Rab,Kam,Jum,Sab';
$string['cannottakeforgroup'] = 'Anda tidak dapat melakukan presensi untuk grup "{$a}"';
$string['cannottakethisgroup'] = 'Anda bukan anggota grup kursus yang terkait dengan sesi kehadiran ini, kehadiran Anda belum dicatat.';
$string['cantaddstatus'] = 'Anda harus menetapkan akronim dan deskripsi saat menambahkan status baru.';
$string['canthidestatus'] = 'Anda tidak dapat menyembunyikan status ini karena sudah digunakan dalam aktivitas kehadiran ini';
$string['categoryreport'] = 'Laporan kategori kursus';
$string['changeattendance'] = 'Ubah kehadiran';
$string['changeduration'] = 'Ubah durasi';
$string['changesession'] = 'Ubah sesi';
$string['checkweekdays'] = 'Pilih hari kerja yang termasuk dalam rentang tanggal sesi yang Anda pilih.';
$string['closed'] = 'Sesi ini saat ini tidak tersedia untuk presensi mandiri';
$string['column'] = 'kolom';
$string['columnmap'] = 'Pemetaan kolom';
$string['columnmap_help'] = 'Untuk setiap ruas yang disajikan, pilih kolom yang sesuai di file csv.';
$string['columns'] = 'kolom';
$string['commonsession'] = 'Semua siswa';
$string['commonsessions'] = 'Semua siswa';
$string['confirm'] = 'Konfirmasi';
$string['confirmcolumnmappings'] = 'Konfirmasi pemetaan kolom';
$string['confirmdeletehiddensessions'] = 'Anda yakin ingin menghapus {$a->count} sesi yang dijadwalkan sebelum tanggal mulai kursus ({$a->date})?';
$string['confirmdeleteuser'] = 'Anda yakin menghapus pengguna \'{$a->fullname}\' ({$a->email})?<br/>Semua rekaman data kehadiran akan dihapus permanen.';
$string['copyfrom'] = 'Salin data kehadiran dari';
$string['countofselected'] = 'Hitung yang terpilih';
$string['course'] = 'kursus';
$string['coursemessage'] = 'Kirim pesan kepada pengguna kursus';
$string['courseshortname'] = 'Nama pendek kursus';
$string['coursesummary'] = 'Laporan ringkasan kursus';
$string['createmultiplesessions'] = 'Buat multisesi';
$string['createmultiplesessions_help'] = 'Fungsi ini memungkinkan Anda membuat beberapa sesi dalam satu langkah sederhana.
Sesi dimulai pada tanggal sesi dasar dan berlanjut hingga tanggal \'ulangi hingga\'.

* <strong>Ulangi pada</strong>: Pilih hari dalam seminggu saat kelas Anda akan bertemu (misalnya, Senin/Rabu/Jumat).
* <strong>Ulangi setiap</strong>: Ini memungkinkan pengaturan frekuensi. Jika kelas Anda akan bertemu setiap minggu, pilih 1; jika akan bertemu setiap dua minggu, pilih 2; setiap minggu ke-3, pilih 3, dst.
* <strong>Ulangi hingga</strong>: Pilih hari terakhir kelas (hari terakhir Anda ingin mencatat kehadiran).';
$string['createonesession'] = 'Buat satu sesi untuk kursus';
$string['csvdelimiter'] = 'Pembatas CSV';
$string['currentlyselectedusers'] = 'Pengguna yang saat ini dipilih';
$string['customexportfields'] = 'Ekspor ruas profil pengguna kustom';
$string['customexportfields_help'] = 'Ruas profil pengguna kustom tambahan untuk diekspos dalam laporan ekspor.';
$string['customfields'] = 'Ruas sesi kustom';
$string['date'] = 'Tanggal';
$string['days'] = 'Harian';
$string['defaultdisplaymode'] = 'Mode tampilan bawaan';
$string['defaults'] = 'Bawaan';
$string['defaultsessionsettings'] = 'Setelan sesi bawaan';
$string['defaultsessionsettings_help'] = 'Setelan ini menentukan bawaan untuk semua sesi baru';
$string['defaultsettings'] = 'Setelan bawaan kehadiran';
$string['defaultsettings_help'] = 'Setelan ini menentukan aturan bawaan untuk semua kehadiran baru';
$string['defaultstatus'] = 'Setelan status bawaan';
$string['defaultsubnet'] = 'Alamat jaringan bawaan';
$string['defaultsubnet_help'] = 'Pencatatan kehadiran mungkin dibatasi untuk subnet tertentu dengan menentukan daftar alamat IP sebagian atau lengkap yang dipisahkan koma. Ini adalah nilai bawaan yang digunakan saat membuat sesi baru.';
$string['defaultview'] = 'Tampilan bawaan saat masuk';
$string['defaultview_desc'] = 'Ini adalah tampilan bawaan yang ditunjukkan kepada pengajar pada masuk pertama kali.';
$string['defaultwarnings'] = 'Set peringatan bawaan';
$string['defaultwarningsettings'] = 'Setelan peringatan bawaan';
$string['defaultwarningsettings_help'] = 'Setelan ini menentukan bawaan untuk semua peringatan baru';
$string['delete'] = 'Hapus';
$string['deletecheckfull'] = 'Apakah Anda yakin ingin menghapus {$a} sepenuhnya, termasuk semua data pengguna?';
$string['deletedgroup'] = 'Grup yang terkait dengan sesi ini telah dihapus';
$string['deletehiddensessions'] = 'Hapus semua sesi tersembunyi';
$string['deletelogs'] = 'Hapus data kehadiran';
$string['deleteselected'] = 'Hapus yang terpilih';
$string['deletesession'] = 'Hapus sesi';
$string['deletesessions'] = 'Hapus semua sesi';
$string['deleteuser'] = 'Hapus pengguna';
$string['deletewarningconfirm'] = 'Anda yakin ingin menghapus peringatan ini?';
$string['deletingsession'] = 'Menghapus sesi kursus';
$string['deletingstatus'] = 'Menghapus status kursus';
$string['description'] = 'Deskripsi';
$string['display'] = 'Tampilan';
$string['displaymode'] = 'Mode tampilan';
$string['donotusepaging'] = 'Jadikan satu halaman';
$string['downloadexcel'] = 'Unduh dalam format Excel';
$string['downloadooo'] = 'Unduh dalam format OpenOffice';
$string['downloadtext'] = 'Unduh dalam format teks';
$string['duration'] = 'Durasi';
$string['editsession'] = 'Edit sesi';
$string['edituser'] = 'Edit pengguna';
$string['emailcontent'] = 'Konten surel';
$string['emailcontent_default'] = 'Hallo %userfirstname%, Kehadiran Anda pada %coursename% %attendancename% telah turun di bawah %warningpercent% sekarang %percent% - Kami harap Anda baik-baik saja! Untuk mendapatkan hasil maksimal dari kursus ini, Anda harus meningkatkan kehadiran Anda, silakan hubungi kami jika Anda memerlukan dukungan lebih lanjut.';
$string['emailcontent_help'] = 'Saat peringatan dikirimkan ke siswa, konten surel diambil dari kolom ini. Karakter pengganti berikut dapat digunakan:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Subjek surel';
$string['emailsubject_default'] = 'Peringatan kehadiran';
$string['emailsubject_help'] = 'Saat peringatan dikirim ke siswa, subjek surel diambil dari ruas ini.';
$string['emailuser'] = 'Surel pengguna';
$string['emailuser_help'] = 'Jika dicentang, peringatan akan dikirimkan ke siswa.';
$string['emptyacronym'] = 'Akronim kosong tidak diperbolehkan. Catatan status tidak diperbarui.';
$string['emptydescription'] = 'Deskripsi kosong tidak diperbolehkan. Catatan status tidak diperbarui.';
$string['enablecalendar'] = 'Buat acara kalender';
$string['enablecalendar_desc'] = 'Jika diaktifkan, acara kalender akan dibuat untuk setiap sesi kehadiran. Setelah mengubah setelan ini, Anda harus menjalankan laporan ulang kalender.';
$string['enablewarnings'] = 'Aktifkan peringatan';
$string['enablewarnings_desc'] = 'Ini memungkinkan set peringatan untuk ditentukan untuk kehadiran dan pemberitahuan surel kepada pengguna ketika kehadiran turun di bawah ambang batas yang dikonfigurasi.
<br/> <strong> PERINGATAN: Ini adalah fitur baru dan belum diuji secara ekstensif. Gunakan dengan risiko Anda sendiri dan berikan tanggapan di forum moodle jika menurut Anda itu berfungsi dengan baik. </strong>';
$string['encoding'] = 'Pengkodean';
$string['encoding_help'] = 'Hal ini mengacu pada jenis pengkodean barcode yang digunakan pada kartu identitas siswa. Jenis skema pengkodean kode batang yang umum termasuk Kode-39, Kode-128 dan UPC-A.';
$string['endofperiod'] = 'Akhir periode';
$string['endtime'] = 'Waktu akhir sesi';
$string['enrolmentend'] = 'Pendaftaran pengguna berakhir {$a}';
$string['enrolmentstart'] = 'Pendaftaran pengguna dimulai {$a}';
$string['enrolmentsuspended'] = 'Pendaftaran ditangguhkan';
$string['enterpassword'] = 'Masukkan kata sandi';
$string['error:coursehasnoattendance'] = 'Kursus dengan nama pendek {$a} ini tidak memiliki aktivitas kehadiran.';
$string['error:coursenotfound'] = 'Kursus dengan nama pendek {$a} tidak ditemukan.';
$string['error:qrcode'] = 'Izinkan siswa untuk merekam kehadiran sendiri harus diaktifkan untuk menggunakan kode QR! Lewati.';
$string['error:sessioncourseinvalid'] = 'Sesi kursus tidak valid! Lewati.';
$string['error:sessiondateinvalid'] = 'Tanggal sesi tidak valid! Lewati.';
$string['error:sessionendinvalid'] = 'Waktu akhir sesi tidak valid! Lewati.';
$string['error:sessionstartinvalid'] = 'Waktu mulai sesi tidak valid! Lewatkan.';
$string['error:statusnotfound'] = 'Pengguna: {$a->extuser} memiliki nilai status yang tidak dapat ditemukan: {$a->status}';
$string['error:timenotreadable'] = 'Pengguna: {$a->extuser} memiliki scantime yang tidak dapat dikonversi oleh strtotime: {$a->scantime}';
$string['error:userduplicate'] = 'Pengguna {$a} ditemukan dua kali dalam impor. harap hanya sertakan satu rekaman per pengguna.';
$string['error:usernotfound'] = 'Pengguna dengan {$a->userfield} yang disetel ke {$a->extuser} tidak dapat ditemukan dalam kursus ini';
$string['errorgroupsnotselected'] = 'Pilih satu atau beberapa grup';
$string['errorinaddingsession'] = 'Galat menambahkan sesi';
$string['erroringeneratingsessions'] = 'Galat membuat sesi';
$string['eventdurationupdated'] = 'Durasi sesi diperbarui';
$string['eventreportviewed'] = 'Melihat laporan kehadiran';
$string['eventscreated'] = 'Buat acara kalender';
$string['eventsdeleted'] = 'Hapus acara kalender';
$string['eventsessionadded'] = 'Menambahkan sesi';
$string['eventsessiondeleted'] = 'Menghapus sesi';
$string['eventsessionipshared'] = 'Melakukan presensi mandiri ketika terjadi Konflik IP';
$string['eventsessionsimported'] = 'Impor sesi';
$string['eventsessionupdated'] = 'Sesi diperbarui';
$string['eventstatusadded'] = 'Menambahkan status';
$string['eventstatusupdated'] = 'Status diperbarui';
$string['eventstudentattendancesessionsupdated'] = 'Laporan sesi diperbarui';
$string['eventstudentattendancesessionsviewed'] = 'Melihat laporan sesi';
$string['eventtaken'] = 'Lakukan presensi';
$string['eventtakenbystudent'] = 'Presensi dilakukan oleh siswa';
$string['export'] = 'Ekspor';
$string['extrarestrictions'] = 'Pembatasan ekstra';
$string['formattexttype'] = 'Format';
$string['from'] = 'dari:';
$string['gradebookexplanation'] = 'Nilai pada buku nilai';
$string['gradebookexplanation_help'] = 'Modul Kehadiran menampilkan nilai kehadiran Anda saat ini berdasarkan jumlah poin yang telah Anda peroleh hingga saat ini dan jumlah poin yang bisa diperoleh hingga saat ini; itu tidak termasuk periode kelas di masa depan. Dalam buku nilai, nilai kehadiran Anda didasarkan pada persentase kehadiran Anda saat ini dan jumlah poin yang dapat diperoleh selama kursus berlangsung, termasuk periode kelas yang akan datang. Dengan demikian, nilai kehadiran Anda yang ditampilkan di modul Kehadiran dan di buku nilai mungkin bukan jumlah poin yang sama tetapi persentasenya sama.

Misalnya, jika Anda telah memperoleh 8 dari 10 poin hingga saat ini (80% kehadiran) dan kehadiran untuk keseluruhan kursus bernilai 50 poin, modul Kehadiran akan menampilkan 8/10 dan buku nilai akan menampilkan 40/50. Anda belum memperoleh 40 poin tetapi 40 adalah nilai poin yang setara dengan persentase kehadiran Anda saat ini sebesar 80%. Nilai poin yang Anda peroleh dalam modul Kehadiran tidak akan pernah berkurang, karena ini hanya didasarkan pada kehadiran hingga saat ini; namun, nilai poin kehadiran yang ditampilkan di buku nilai dapat bertambah atau berkurang tergantung pada kehadiran Anda di masa mendatang, karena ini didasarkan pada kehadiran untuk seluruh kursus.';
$string['graded'] = 'Sesi yang dinilai';
$string['gridcolumns'] = 'Kolom kisi';
$string['group'] = 'Grup';
$string['groups'] = 'Grup';
$string['groupsession'] = 'Grup siswa';
$string['groupsessionsby'] = 'Sesi grup oleh';
$string['hiddensessions'] = 'Sesi tersembunyi';
$string['hiddensessions_help'] = 'Sesi disembunyikan jika dijadwalkan sebelum tanggal mulai kursus. Anda dapat menggunakan fitur ini untuk menyembunyikan sesi yang lebih lama daripada menghapusnya. Hanya sesi yang terlihat yang akan muncul di Buku Nilai';
$string['hiddensessionsdeleted'] = 'Semua sesi tersembunyi telah dihapus';
$string['hideextrauserdetails'] = 'Sembunyikan detail pengguna tambahan';
$string['hidensessiondetails'] = 'Sembunyikan detail sesi';
$string['identifyby'] = 'Kenali siswa berdasarkan';
$string['import'] = 'Impor';
$string['importfile'] = 'Impor berkas';
$string['importfile_help'] = 'Berkas CSV harus berisi tajuk dan bidang untuk mengidentifikasi grup, waktu, dan tanggal sesi yang akan dibuat.<br/> Halaman berikutnya setelah berkas disimpan akan menunjukkan kepada Anda contoh semua bidang yang dapat Anda petakan sendiri bidangnya.<br/>Contoh:<br/>grup;tanggalsesi;dari;ke<br/>grupA:05-10-2022;13:00;14:00<br/>grupB;05-10-2022;14:00;15:00';
$string['importsessions'] = 'Impor sesi';
$string['importstatus'] = 'Ruas status';
$string['importstatus_help'] = 'Hal ini memungkinkan nilai status untuk disertakan dalam impor - misalnya nilai seperti H, S, I atau A';
$string['includeabsentee'] = 'Sertakan sesi saat menghitung laporan absensi';
$string['includeabsentee_help'] = 'Jika dicentang sesi ini akan dimasukkan dalam perhitungan laporan absensi.';
$string['includeall'] = 'Pilih semua sesi';
$string['includedescription'] = 'Sertakan deskripsi sesi';
$string['includenottaken'] = 'Sertakan sesi yang tidak diambil';
$string['includeqrcode'] = 'Sertakan kode QR';
$string['includeremarks'] = 'Sertakan komentar';
$string['incorrectpassword'] = 'Anda telah memasukkan kata sandi yang salah dan kehadiran Anda belum tercatat, harap masukkan kata sandi yang benar.';
$string['incorrectpasswordshort'] = 'Kata sandi salah, kehadiran tidak terekam.';
$string['indetail'] = 'Detail...';
$string['indicator:cognitivedepth'] = 'Kehadiran kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam suatu aktivitas Kehadiran.';
$string['indicator:cognitivedepthdef'] = 'Kehadiran kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh Kehadiran selama interval analisis ini (Level = Tanpa tampilan, Tampilan)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Kehadiran sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada keluasan sosial yang dicapai siswa dalam suatu kegiatan Absensi.';
$string['indicator:socialbreadthdef'] = 'Kehadiran sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh Kehadiran selama interval analisis ini (Tingkat = Tidak ada partisipasi, Peserta saja)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Anda harus memilih tindakan';
$string['invalidemails'] = 'Anda harus menentukan alamat akun pengguna yang ada, tidak dapat menemukan: {$a}';
$string['invalidimportfile'] = 'Format berkas tidak valid.';
$string['invalidsessionenddate'] = 'Tanggal ini tidak boleh lebih awal dari tanggal sesi';
$string['invalidsessionendtime'] = 'Waktu akhir harus lebih besar dari waktu mulai';
$string['invalidstatus'] = 'Anda telah memilih status yang tidak valid, silakan coba lagi';
$string['iptimemissing'] = 'Menit tidak valid untuk dirilis';
$string['jumpto'] = 'Lompat ke';
$string['keepsearching'] = 'Terus mencari';
$string['lasttaken'] = 'Kehadiran terakhir diambil';
$string['manualtriggerauto'] = 'Memicu penandaan otomatis secara manual';
$string['marksessionimportcsvhelp'] = 'Formulir ini memungkinkan Anda untuk mengunggah berkas csv yang berisi pengenal pengguna dan status - ruas status dapat berupa akronim status atau waktu kehadiran untuk pengguna tersebut dicatat. Jika nilai waktu dilewatkan maka ia akan mencoba menetapkan nilai status dengan nilai tertinggi yang tersedia saat itu.';
$string['maxpossible'] = 'Semaksimal mungkin';
$string['maxpossible_help'] = 'Menampilkan skor yang dapat dicapai setiap pengguna jika mereka menerima poin maksimum di setiap sesi yang belum diambil (masa lalu dan masa mendatang):
<ul>
<li><strong>Poin</strong>: poin maksimum yang dapat dicapai setiap pengguna di semua sesi.</li>
<li><strong>Persentase</strong>: persentase maksimum yang dapat dicapai setiap pengguna di semua sesi.</li>
</ul>';
$string['maxpossiblepercentage'] = 'Persentase maksimum yang mungkin';
$string['maxpossiblepoints'] = 'Poin maksimum yang mungkin';
$string['maxwarn'] = 'Jumlah maksimum peringatan surel';
$string['maxwarn_help'] = 'Frekuensi maksimum peringatan harus dikirim (hanya satu peringatan per sesi yang dikirim)';
$string['mergeuser'] = 'Gabungkan pengguna';
$string['messagedselecteduserfailed'] = 'Gagal mengirim pesan ke satu atau beberapa pengguna. Harap aktifkan awakutu untuk mengetahui lebih lanjut.';
$string['mobilesessionfrom'] = 'Tampilkan sesi yang lebih lama dari yang terakhir';
$string['mobilesessionfrom_help'] = 'Mengizinkan daftar sesi dibatasi saat menandai di aplikasi - hanya menampilkan sesi yang dimulai sejak nilai ini';
$string['mobilesessionto'] = 'Tampilkan sesi mendatang';
$string['mobilesessionto_help'] = 'Mengizinkan daftar sesi dibatasi untuk hanya menampilkan sejumlah kecil sesi mendatang.';
$string['mobilesettings'] = 'Setelan aplikasi seluler';
$string['mobilesettings_help'] = 'Setelan ini mengontrol perilaku aplikasi seluler Moodle';
$string['modulename'] = 'Kehadiran';
$string['modulename_help'] = 'Modul aktivitas kehadiran memungkinkan pengajar untuk melakukan presensi selama kelas dan siswa untuk melihat rekaman kehadiran mereka sendiri. Guru dapat membuat multisesi dan dapat menandai status kehadiran sebagai "Hadir", "Absen", "Sakit", atau "Izin" atau mengubah status agar sesuai dengan kebutuhan. Laporan tersedia untuk seluruh kelas atau siswa individu.';
$string['modulenameplural'] = 'Kehadiran';
$string['months'] = 'Bulanan';
$string['moreattendance'] = 'Kehadiran telah berhasil diambil untuk halaman ini';
$string['moveleft'] = 'Pindah kiri';
$string['moveright'] = 'Pindah kanan';
$string['multisessionexpanded'] = 'Multisesi diperluas';
$string['multisessionexpanded_desc'] = 'Tampilkan pengaturan "Multisesi" sebagaimana diperluas secara bawaan saat membuat sesi baru.';
$string['mustselectusers'] = 'Harus pilih pengguna untuk melakukan ekspor';
$string['name'] = 'Nama';
$string['newdate'] = 'Tanggal baru';
$string['newduration'] = 'Durasi baru';
$string['newstatusset'] = 'Set status baru';
$string['noabsentstatusset'] = 'Status yang digunakan tidak memiliki status untuk digunakan jika tidak ditandai.';
$string['noattendanceusers'] = 'Tidak mungkin mengekspor data apa pun karena tidak ada siswa yang terdaftar dalam kursus.';
$string['noattforuser'] = 'Tidak ada catatan kehadiran untuk pengguna';
$string['noautomark'] = 'Dinonaktifkan';
$string['nocapabilitytotakethisattendance'] = 'Anda mencoba mengubah kehadiran sesi dengan cmid: {$a} yang izinnya tidak Anda ubah.';
$string['nodescription'] = 'Sesi kelas reguler';
$string['noeventstoreset'] = 'Tidak ada acara kalender yang perlu diperbarui';
$string['nogroups'] = 'Aktivitas ini telah ditetapkan untuk menggunakan grup, tetapi tidak ada grup dalam kursus.';
$string['noguest'] = 'Tamu tidak dapat melihat kehadiran';
$string['noofdaysabsent'] = 'Jumlah alpa';
$string['noofdaysexcused'] = 'Jumlah izin';
$string['noofdayslate'] = 'Jumlah sakit';
$string['noofdayspresent'] = 'Jumlah hadir';
$string['nosessiondayselected'] = 'Tidak ada hari Sesi yang dipilih';
$string['nosessionexists'] = 'Tidak ada Sesi untuk kursus ini';
$string['nosessionsselected'] = 'Tidak ada sesi yang dipilih';
$string['notfound'] = 'Aktivitas kehadiran tidak ditemukan dalam kursus ini!';
$string['notifytask'] = 'Kirim peringatan kepada pengguna';
$string['notmember'] = 'not&nbsp;member';
$string['notset'] = 'tidak disetel';
$string['nounmarkedstatusset'] = 'Tidak ada status yang tidak ditandai yang dikonfigurasi untuk sesi ini (id:{$a->sessionid}), untuk memperbaiki pembaruan ini <a href="{$a->url}">Status ditetapkan</a>';
$string['noupgradefromthisversion'] = 'Modul Kehadiran tidak dapat ditingkatkan dari versi attforblock yang telah Anda instal. - harap hapus attforblock atau tingkatkan ke versi terbaru sebelum memasang modul kehadiran baru';
$string['nousers'] = 'Tidak ada pengguna terdaftar yang ditemukan untuk melakukan absensi.';
$string['numsessions'] = 'Jumlah sesi';
$string['numsessionstaken'] = 'Jumlah sesi yang diambil';
$string['olddate'] = 'Tanggal lama';
$string['onactivitycompletion'] = 'Saat aktivitas selesai';
$string['onlyselectedusers'] = 'Ekspor pengguna spesifik';
$string['overallsessions'] = 'Di semua sesi';
$string['overallsessions_help'] = 'Menampilkan statistik untuk semua sesi termasuk yang belum diambil (yang lalu dan yang akan datang):
<ul>
<li><strong>Sesi</strong>: jumlah total sesi.</li>
<li><strong>Poin</strong>: poin yang diberikan berdasarkan sesi yang diambil.</li>
<li><strong>Persentase</strong>: persentase poin yang diberikan atas poin maksimum yang mungkin untuk semua sesi.</li>
</ul>';
$string['oversessionstaken'] = 'Sesi yang diambil';
$string['oversessionstaken_help'] = 'Menampilkan statistik untuk sesi yang telah dihadiri:
<ul>
<li><strong>Sesi</strong>: jumlah sesi yang telah diikuti.</li>
<li><strong>Poin</strong>: poin yang diberikan berdasarkan sesi yang diikuti.</li>
<li><strong>Persentase</strong>: persentase poin yang diberikan atas poin maksimum yang mungkin dari sesi yang diikuti.</li>
</ul>';
$string['pageof'] = 'Halaman {$a->page} dari {$a->numpages}';
$string['participant'] = 'Peserta';
$string['password'] = 'Kata sandi';
$string['passwordgrp'] = 'Kata sandi siswa';
$string['passwordgrp_help'] = 'Jika disetel, siswa akan diminta untuk memasukkan kata sandi ini sebelum mereka dapat mengatur status kehadiran mereka sendiri untuk sesi tersebut. Jika kosong, tidak diperlukan kata sandi.';
$string['passwordheader'] = 'Gunakan kata sandi yang tercantum di bawah ini untuk mengambil kehadiran Anda';
$string['passwordrequired'] = 'Anda harus memasukkan kata sandi sesi sebelum Anda dapat mengirimkan kehadiran Anda';
$string['percentage'] = 'Persentase';
$string['percentageallsessions'] = 'Persentase dari semua sesi';
$string['percentagesessionscompleted'] = 'Persentase dari sesi yang diambil';
$string['pluginadministration'] = 'Administrasi kehadiran';
$string['pluginname'] = 'Kehadiran';
$string['points'] = 'Poin';
$string['pointsallsessions'] = 'Poin dari semua sesi';
$string['pointssessionscompleted'] = 'Poin dari sesi yang diambil';
$string['preferences_desc'] = 'Perubahan setelan status akan mempengaruhi sesi kehadiran yang ada dan dapat mempengaruhi penilaian.';
$string['preventsharederror'] = 'Presensi mandiri telah dinonaktifkan untuk suatu sesi karena perangkat ini tampaknya telah digunakan untuk merekam kehadiran siswa lain.';
$string['preventsharedip'] = 'Cegah siswa berbagi alamat IP';
$string['preventsharedip_help'] = 'Mencegah siswa menggunakan perangkat yang sama (diidentifikasi menggunakan alamat IP) untuk mengambil presensi siswa lain.';
$string['preventsharediptime'] = 'Waktu untuk mengizinkan penggunaan kembali alamat IP (menit)';
$string['preventsharediptime_help'] = 'Izinkan alamat IP untuk digunakan kembali untuk mengambil kehadiran di sesi ini setelah waktu ini berlalu.';
$string['preview'] = 'Pratinjau berkas';
$string['previewhtml'] = 'Pratinjau format HTML';
$string['priorto'] = 'Tanggal sesi sebelum tanggal mulai kursus ({$a}) sehingga sesi baru yang dijadwalkan sebelum tanggal ini akan disembunyikan (tidak dapat diakses). Anda dapat mengubah tanggal mulai kursus kapan saja (lihat setelan kursus) untuk memiliki akses ke sesi sebelumnya. <br> <br> Harap ubah tanggal sesi atau cukup klik tombol "Tambah sesi" lagi untuk mengonfirmasi?';
$string['privacy:metadata:attendancelog'] = 'Log kehadiran pengguna dicatat.';
$string['privacy:metadata:attendancesessions'] = 'Sesi dengan kehadiran akan direkam.';
$string['privacy:metadata:attendancewarningdone'] = 'Log peringatan yang dikirim ke pengguna melalui rekaman kehadiran mereka.';
$string['privacy:metadata:duration'] = 'Durasi sesi dalam detik';
$string['privacy:metadata:groupid'] = 'ID grup yang terkait dengan sesi.';
$string['privacy:metadata:ipaddress'] = 'Alamat IP Kehadiran yang ditandai.';
$string['privacy:metadata:lasttaken'] = 'Stempel waktu kapan kehadiran sesi terakhir diambil.';
$string['privacy:metadata:lasttakenby'] = 'ID Pengguna yang terakhir hadir di sesi ini';
$string['privacy:metadata:notifyid'] = 'ID peringatan sesi kehadiran yang terkait.';
$string['privacy:metadata:remarks'] = 'Komentar kehadiran pengguna.';
$string['privacy:metadata:sessdate'] = 'Stempel waktu kapan sesi dimulai.';
$string['privacy:metadata:sessionid'] = 'ID sesi kehadiran';
$string['privacy:metadata:statusid'] = 'ID status kehadiran siswa.';
$string['privacy:metadata:statusset'] = 'Ke ID yang mana status ID disetel.';
$string['privacy:metadata:studentid'] = 'ID siswa yang telah dicatat kehadirannya.';
$string['privacy:metadata:takenby'] = 'User ID dari pengguna yang melakukan presensi untuk siswa.';
$string['privacy:metadata:timemodified'] = 'Stempel waktu kapan sesi terakhir diubah';
$string['privacy:metadata:timesent'] = 'Stempel waktu saat peringatan dikirim.';
$string['privacy:metadata:timetaken'] = 'Stempel waktu kapan siswa melakukan presensi.';
$string['privacy:metadata:userid'] = 'ID pengguna yang akan dikirimi peringatan.';
$string['processingfile'] = 'Memproses berkas';
$string['qr_cookie_error'] = 'Sesi QR telah kedaluwarsa.';
$string['qr_pass_wrong'] = 'Kode QR telah kedaluwarsa, silakan pindai kode QR lagi.';
$string['qrcode'] = 'Kode QR';
$string['qrcodeandpasswordheader'] = 'Pindai kode QR di bawah ini atau gunakan kata sandi yang tercantum di bawah ini untuk mencatat kehadiran Anda';
$string['qrcodeheader'] = 'Pindai kode QR di bawah ini untuk mencatat kehadiran Anda';
$string['qrcodevalidafter'] = 'detik';
$string['qrcodevalidbefore'] = 'Kode QR berlaku untuk:';
$string['randompassword'] = 'Kata sandi acak';
$string['remark'] = 'Catatan untuk: {$a}';
$string['remarks'] = 'Catatan';
$string['repeatasfollows'] = 'Ulangi sesi di atas sebagai berikut';
$string['repeatevery'] = 'Ulangi setiap';
$string['repeaton'] = 'Ulangi pada';
$string['repeatuntil'] = 'Ulangi sampai';
$string['report'] = 'Laporan';
$string['reportsessiondate'] = 'Tanggal sesi';
$string['reportsessionduration'] = 'Durasi sesi';
$string['reportsessionlasttaken'] = 'Sesi terakhir diambil waktu (guru)';
$string['required'] = 'Wajib*';
$string['requiredentries'] = 'Rekaman sementara menimpa catatan kehadiran peserta';
$string['requiredentry'] = 'Panduan bantuan penggabungan pengguna sementara';
$string['requiredentry_help'] = '<p align="center"><b>Kehadiran</b></p>
<p align="left"><strong>Gabungkan Akun</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Pengguna Moodle</th>
<th>Pengguna Sementara</th>
<th>Tindakan</th>
</tr>
<tr>
<td>Data Kehadiran</td>
<td>Data Kehadiran</td>
<td>Pengguna Sementara Akan Mengganti Pengguna Moodle</td>
</tr>
<tr>
<td>Tidak Ada Data Kehadiran</td>
<td>Data Kehadiran</td>
<td>Kehadiran Pengguna Sementara Akan Ditransfer ke Pengguna Moodle</td>
</tr>
<tr>
<td>Data Kehadiran</td>
<td>Tidak Ada Kehadiran data</td>
<td>Pengguna sementara akan dihapus</td>
</tr>
<tr>
<td>Tidak ada data kehadiran</td>
<td>Tidak ada data kehadiran</td>
<td>Pengguna sementara akan dihapus</td>
</tr>
</table>

</p>
<p align="left"><strong>Pengguna sementara akan dihapus dalam semua kasus setelah tindakan penggabungan</strong></p>';
$string['requiresubnet'] = 'Membutuhkan alamat jaringan';
$string['requiresubnet_help'] = 'Perekaman kehadiran dapat dibatasi untuk subnet tertentu dengan menentukan daftar alamat IP sebagian atau lengkap yang dipisahkan koma.';
$string['resetcaledarcreate'] = 'Acara kalender telah diaktifkan tetapi sejumlah sesi yang ada tidak memiliki acara. Apakah Anda ingin membuat acara kalender untuk semua sesi yang ada?';
$string['resetcaledardelete'] = 'Acara kalender telah dinonaktifkan tetapi sejumlah sesi yang ada memiliki acara yang harus dihapus. Apakah Anda ingin menghapus semua acara yang ada?';
$string['resetcalendar'] = 'Setel ulang kalender';
$string['resetdescription'] = 'Ingatlah bahwa menghapus data kehadiran akan menghapus informasi dari basis data. Anda bisa menyembunyikan sesi lama yang telah mengubah tanggal mulai tentunya!';
$string['resetstatuses'] = 'Setel ulang status ke bawaan';
$string['restoredefaults'] = 'Pulihkan bawaan';
$string['resultsperpage'] = 'Hasil per halaman';
$string['resultsperpage_desc'] = 'Jumlah siswa ditampilkan di layar';
$string['rotateqrcode'] = 'Putar kode QR';
$string['rotateqrcode_cleartemppass_task'] = 'Tugas untuk menghapus kata sandi sementara yang dibuat dengan memutar fungsi kode QR.';
$string['rotateqrcodeexpirymargin'] = 'Putar margin kadaluwarsa kode QR / kata sandi (detik)';
$string['rotateqrcodeexpirymargin_desc'] = 'Interval waktu (detik) untuk mengizinkan kode QR / kata sandi kedaluwarsa.';
$string['rotateqrcodeinterval'] = 'Putar kode QR / interval kata sandi (detik)';
$string['rotateqrcodeinterval_desc'] = 'Interval waktu (detik) untuk memutar kode QR / kata sandi.';
$string['save'] = 'Simpan kehadiran';
$string['saveandshownext'] = 'Simpan dan tampilkan halaman berikutnya';
$string['scantime'] = 'Waktu pindai';
$string['scantime_help'] = 'Ini memungkinkan stempel waktu untuk disertakan dalam berkas impor - ini akan mencoba mengonversi stempel waktu yang diteruskan menggunakan fungsi PHP strtotime dan kemudian menggunakan setelan status kehadiran untuk memutuskan status mana yang akan ditetapkan untuk pengguna';
$string['search:activity'] = 'Kehadiran - Informasi aktivitas';
$string['selectactivity'] = 'Pilih aktivitas';
$string['session'] = 'Sesi';
$string['session_help'] = 'Sesi';
$string['sessionadded'] = 'Berhasil menambahkan sesi';
$string['sessionalreadyexists'] = 'Sesi telah ada untuk hari ini';
$string['sessiondate'] = 'Tanggal';
$string['sessiondays'] = 'Sesi harian';
$string['sessiondeleted'] = 'Sesi berhasil dihapus';
$string['sessiondescription'] = 'Deskripsi sesi';
$string['sessionduplicate'] = 'Ada sesi duplikat untuk kursus: {$a->course} hadir: {$a->activity}';
$string['sessionexist'] = 'Sesi tidak ditambahkan (sudah ada)!';
$string['sessiongenerated'] = 'Satu sesi berhasil dibuat';
$string['sessions'] = 'Sesi';
$string['sessionsallcourses'] = 'Semua kursus';
$string['sessionsbyactivity'] = 'Model kehadiran';
$string['sessionsbycourse'] = 'Kursus';
$string['sessionsbydate'] = 'Mingguan';
$string['sessionscompleted'] = 'Sesi yang diambil';
$string['sessionscurrentcourses'] = 'Kursus saat ini';
$string['sessionsgenerated'] = '{$a} sesi berhasil dibuat';
$string['sessionsids'] = 'ID sesi:';
$string['sessionsnotfound'] = 'Tidak ada sesi dalam rentang waktu yang dipilih';
$string['sessionstartdate'] = 'Tanggal mulai sesi';
$string['sessionstotal'] = 'Jumlah total sesi';
$string['sessionsupdated'] = 'Sesi diperbarui';
$string['sessiontype'] = 'Jenis';
$string['sessiontype_help'] = 'Anda dapat menambahkan sesi untuk semua siswa atau untuk sekelompok siswa. Kemampuan untuk menambahkan jenis yang berbeda tergantung pada mode grup aktivitas.
* Dalam mode grup "Tidak ada grup" Anda hanya dapat menambahkan sesi untuk semua siswa.
* Dalam mode grup "Grup terpisah" Anda hanya dapat menambahkan sesi untuk sekelompok siswa.
* Dalam mode grup "Grup terlihat" Anda dapat menambahkan kedua jenis sesi.';
$string['sessiontypeshort'] = 'Jenis';
$string['sessionunknowngroup'] = 'Sesi menentukan grup yang tidak dikenal: {$a}';
$string['sessionupdated'] = 'Sesi berhasil diperbarui';
$string['set_by_student'] = 'Presensi mandiri';
$string['setallstatuses'] = 'Setel status untuk';
$string['setallstatusesto'] = 'Setel status ke «{$a}»';
$string['setperiod'] = 'Waktu yang ditentukan dalam menit untuk melepaskan IP';
$string['settings'] = 'Setelan';
$string['setunmarked'] = 'Secara otomatis diatur ketika tidak ditandai';
$string['setunmarked_help'] = 'Jika diaktifkan dalam sesi, atur status ini jika siswa belum menandai kehadirannya sendiri.';
$string['showdefaults'] = 'Tampilkan bawaan';
$string['showduration'] = 'Tampilkan durasi';
$string['showextrauserdetails'] = 'Tampilkan detail pengguna tambahan';
$string['showqrcode'] = 'Tampilkan kode QR';
$string['showsessiondescriptiononreport'] = 'Tampilkan deskripsi sesi dalam laporan';
$string['showsessiondescriptiononreport_desc'] = 'Tampilkan deskripsi sesi dalam daftar laporan kehadiran.';
$string['showsessiondetails'] = 'Tunjukkan detail sesi';
$string['somedisabledstatus'] = '(Beberapa opsi telah dihapus saat sesi dimulai.)';
$string['sortedgrid'] = 'Urut kisi';
$string['sortedlist'] = 'Urut daftar';
$string['startofperiod'] = 'Awal periode';
$string['starttime'] = 'Waktu mulai';
$string['status'] = 'Status';
$string['statusall'] = 'semua';
$string['statusdeleted'] = 'Status dihapus';
$string['statuses'] = 'Status';
$string['statusset'] = 'Setelan status {$a}';
$string['statussetsettings'] = 'Setelan status';
$string['statustotalcount'] = 'Status {$a} - Jumlah total';
$string['statustotalcountcurrentweek'] = 'Status {$a} - Jumlah total untuk minggu ini';
$string['statustotalcountpreviousweek'] = 'Status {$a} - Jumlah total untuk minggu sebelumnya';
$string['statusunselected'] = 'tidak dipilih';
$string['strftimedm'] = '%b %d';
$string['strftimedmw'] = '<nobr>%a %b %d</nobr>';
$string['strftimedmy'] = '%d %b %Y';
$string['strftimedmyhm'] = '%d %b %Y %I.%M%p';
$string['strftimedmyw'] = '<nobr>%a %d %b %Y</nobr>';
$string['strftimeh'] = '%I%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID siswa';
$string['studentmarked'] = 'Kehadiran Anda di sesi ini telah direkam.';
$string['studentmarking'] = 'Perekaman siswa';
$string['studentpassword'] = 'Kata sandi siswa';
$string['studentrecordingexpanded'] = 'Perekaman siswa diperluas';
$string['studentrecordingexpanded_desc'] = 'Tampilkan setelan "Rekaman siswa" sebagaimana diperluas secara bawaan saat membuat sesi baru.';
$string['studentscanmark'] = 'Izinkan siswa untuk merekam kehadiran mereka sendiri';
$string['studentscanmark_desc'] = 'Jika dicentang, guru akan dapat mengizinkan siswa untuk menandai kehadiran mereka sendiri.';
$string['studentscanmark_help'] = 'Jika dicentang, siswa akan dapat mengubah status kehadiran mereka untuk sesi tersebut.';
$string['studentscanmarksessiontime'] = 'Siswa merekam kehadiran selama waktu sesi';
$string['studentscanmarksessiontime_desc'] = 'Jika dicentang, siswa hanya dapat mencatat kehadiran mereka selama sesi.';
$string['studentscanmarksessiontimeend'] = 'Sesi berakhir (menit)';
$string['studentscanmarksessiontimeend_desc'] = 'Jika sesi tidak memiliki waktu akhir, berapa menit sesi harus tersedia bagi siswa untuk merekam kehadiran mereka.';
$string['studentsearlyopentime'] = 'Buka sesi lebih awal untuk menandai';
$string['studentsearlyopentime_help'] = 'Hal ini memungkinkan guru untuk membuka sesi lebih awal, sehingga kehadiran dapat dilakukan sebelum waktu mulai yang sebenarnya.';
$string['submit'] = 'Kirim';
$string['submitattendance'] = 'Ajukan kehadiran';
$string['submitattendancefuture'] = 'Laporkan ketidakhadiran di masa mendatang';
$string['submitpassword'] = 'Kirim kata sandi';
$string['subnet'] = 'Subnet';
$string['subnetactivitylevel'] = 'Izinkan konfigurasi subnet di tingkat aktivitas';
$string['subnetactivitylevel_desc'] = 'Jika diaktifkan, pengajar dapat mengganti subnet bawaan di tingkat aktivitas saat membuat kehadiran. Jika tidak, bawaan situs akan digunakan saat membuat sesi.';
$string['subnetwrong'] = 'Kehadiran hanya dapat direkam dari lokasi tertentu, dan komputer ini tidak ada dalam daftar yang diizinkan.';
$string['summary'] = 'Ringkasan';
$string['tablerenamefailed'] = 'Ganti nama tabel attforblock lama menjadi kehadiran gagal';
$string['tactions'] = 'Tindakan';
$string['takeattendance'] = 'Lakukan presensi';
$string['takensessions'] = 'Sesi yang diambil';
$string['tcreated'] = 'Dibuat';
$string['tempaddform'] = 'Tambahkan pengguna sementara';
$string['tempexists'] = 'Sudah ada pengguna sementara dengan alamat email ini';
$string['temptable'] = 'Daftar pengguna sementara';
$string['tempuser'] = 'Pengguna sementara';
$string['tempusermerge'] = 'Gabungkan pengguna sementara';
$string['tempusers'] = 'Pengguna sementara';
$string['tempusersedit'] = 'Edit pengguna sementara';
$string['tempuserslist'] = 'Pengguna sementara';
$string['thirdpartyemails'] = 'Beri tahu pengguna lain';
$string['thirdpartyemails_help'] = 'Daftar pengguna lain yang akan diberi tahu. (membutuhkan kemampuan mod/kehadiran:viewreports)';
$string['thirdpartyemailsubject'] = 'Peringatan kehadiran';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} kehadiran dalam {$a->coursename} {$a->aname} lebih rendah dari {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Anda menerima ini karena pengajar kursus ini telah menambahkan surel Anda ke daftar penerima';
$string['thiscourse'] = 'Kursus ini';
$string['time'] = 'Waktu';
$string['timeahead'] = 'Beberapa sesi yang melebihi satu tahun tidak dapat dibuat, harap sesuaikan tanggal mulai dan akhir.';
$string['timemodified'] = 'Waktu diubah';
$string['timetaken'] = 'Waktu kehadiran yang diambil';
$string['to'] = 'sampai';
$string['todate'] = 'sampai tanggal';
$string['totalnumsessions'] = 'Jumlah total sesi';
$string['triggered'] = 'Pertama diberitahu';
$string['tuseremail'] = 'Surel';
$string['tusername'] = 'Nama lengkap';
$string['ungraded'] = 'Perbarui sesi';
$string['unknowngroup'] = 'Grup tidak dikenal';
$string['unknownstatus'] = 'ID status tidak diketahui: {$a}';
$string['update'] = 'Perbarui';
$string['updateattendance'] = 'Perbarui kehadiran';
$string['uploadattendance'] = 'Unggah kehadiran format CSV';
$string['usedefaultsubnet'] = 'Gunakan setelan bawaan';
$string['usemessageform'] = 'atau gunakan formulir di bawah ini untuk mengirim pesan ke siswa terpilih';
$string['userexistingstatus'] = 'Kehadiran Anda telah ditandai sebagai: <strong>{$a}</strong>, gunakan formulir di bawah ini untuk mengubahnya jika diperlukan.';
$string['userexists'] = 'Sudah ada pengguna asli dengan alamat surel ini';
$string['userid'] = 'ID Pengguna';
$string['userimportfield'] = 'Ruas pengguna eksternal';
$string['userimportfield_help'] = 'Ruas dari CSV yang diunggah yang berisi pengenal pengguna';
$string['userimportto'] = 'Ruas pengguna Moodle';
$string['userimportto_help'] = 'Ruas Moodle yang cocok dengan data dari ekspor CSV';
$string['users'] = 'Pengguna yang diekspor';
$string['usersessiongrade'] = 'Nilai sesi pengguna';
$string['usersessionremarks'] = 'Komentar sesi pengguna';
$string['usersessiontaken'] = 'Sesi pengguna diambil';
$string['userstatus'] = 'Status sesi pengguna';
$string['usestatusset'] = 'Setelan status';
$string['variable'] = 'variabel';
$string['variablesupdated'] = 'Variabel keberhasilan diperbarui';
$string['versionforprinting'] = 'versi cetak';
$string['viewmode'] = 'Mode tampilan';
$string['warnafter'] = 'Jumlah sesi yang diambil sebelum peringatan';
$string['warnafter_help'] = 'Peringatan hanya akan dipicu bila kehadiran pengguna telah diambil setidaknya untuk jumlah sesi ini.';
$string['warningdeleted'] = 'Peringatan dihapus';
$string['warningdesc'] = 'Peringatan ini akan secara otomatis ditambahkan ke aktivitas kehadiran baru. Jika lebih dari satu peringatan dipicu pada waktu yang sama, hanya peringatan dengan ambang peringatan yang lebih rendah yang akan dikirim.';
$string['warningdesc_course'] = 'Ambang batas peringatan yang ditetapkan di sini memengaruhi laporan ketidakhadiran dan memungkinkan siswa dan pihak ketiga untuk diberi tahu. Jika lebih dari satu peringatan dipicu pada waktu yang sama, hanya peringatan dengan ambang peringatan yang lebih rendah yang akan dikirim.';
$string['warningfailed'] = 'Anda tidak dapat membuat peringatan yang menggunakan persentase dan jumlah sesi yang sama.';
$string['warningpercent'] = 'Peringatkan jika persentasenya di bawah';
$string['warningpercent_help'] = 'Peringatan akan dipicu ketika persentase keseluruhan turun di bawah angka ini.';
$string['warnings'] = 'Setel peringatan';
$string['warningthreshold'] = 'Ambang peringatan';
$string['warningupdated'] = 'Peringatan diperbarui';
$string['week'] = 'Minggu';
$string['weekcommencing'] = 'Minggu dimulai';
$string['weeks'] = 'Mingguan';
$string['youcantdo'] = 'Anda tidak bisa melakukan apa-apa';
