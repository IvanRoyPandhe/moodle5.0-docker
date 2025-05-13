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
 * Strings for component 'assign', language 'id', version '5.0'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityattachments'] = 'Lampiran aktivitas penugasan';
$string['activitydate:submissionsdue'] = 'Jatuh tempo:';
$string['activitydate:submissionsopen'] = 'Buka:';
$string['activitydate:submissionsopened'] = 'Dibuka:';
$string['activityeditor'] = 'Instruksi aktivitas';
$string['activityeditor_help'] = 'Aksi yang Anda ingin siswa selesaikan untuk penugasan ini. Ini hanya ditampilkan pada halaman pengiriman di mana siswa mengedit dan mengirimkan tugas mereka.';
$string['activityoverview'] = 'Anda memiliki penugasan yang memerlukan perhatian';
$string['addattempt'] = 'Izinkan upaya lainnya';
$string['addnewattempt'] = 'Tambahkan upaya baru';
$string['addnewattempt_help'] = 'Ini akan membuat pengajuan kosong baru untuk Anda kerjakan.';
$string['addnewattemptfromprevious'] = 'Tambahkan upaya baru berdasarkan pengajuan sebelumnya';
$string['addnewattemptfromprevious_help'] = 'Ini akan menyalin konten pengajuan Anda sebelumnya ke pengajuan baru untuk Anda kerjakan.';
$string['addnewgroupoverride'] = 'Tambahkan penyampingan grup';
$string['addnewuseroverride'] = 'Tambahkan penyampingan pengguna';
$string['addsubmission'] = 'Kirimkan Pengajuan (Tugas/Laporan)';
$string['addsubmission_help'] = 'Anda belum mengirimkannya.';
$string['allocatedmarker'] = 'Penanda yang dialokasikan';
$string['allocatedmarker_help'] = 'Alokasi nilai pada ajuan ini';
$string['allowsubmissions'] = 'Izinkan pengguna untuk melanjutkan membuat pengajuan pada penugasan ini.';
$string['allowsubmissionsfromdate'] = 'Izinkan pengajuan dari';
$string['allowsubmissionsfromdate_help'] = 'Jika diaktifkan, siswa tidak akan dapat mengajukan sebelum tanggal ini. Jika dinonaktifkan, siswa akan dapat mulai mengajukan segera.';
$string['allowsubmissionsshort'] = 'Izinkan ubah pengajuan';
$string['alwaysshowdescription'] = 'Selalu tampilkan deskripsi';
$string['alwaysshowdescription_help'] = 'Jika dinonaktifkan, Uraian Penugasan di atas hanya akan terlihat oleh siswa pada tanggal "Izinkan pengajuan dari".';
$string['applytoteam'] = 'Terapkan nilai dan umpan balik ke seluruh grup';
$string['assign:addinstance'] = 'Tambahkan penugasan baru';
$string['assign:editothersubmission'] = 'Edit pengajuan siswa lain';
$string['assign:exportownsubmission'] = 'Ekspor pengajuan sendiri';
$string['assign:grade'] = 'Nilai Penugasan';
$string['assign:grantextension'] = 'Perpanjangan waktu penugasan';
$string['assign:manageallocations'] = 'Kelola nilai yang dialokasikan untuk pengajuan';
$string['assign:managegrades'] = 'Ulasan dan rilis nilai';
$string['assign:manageoverrides'] = 'Kelola penyampingan penugasan';
$string['assign:receivegradernotifications'] = 'Terima notifikasi pengiriman tugas siswa';
$string['assign:releasegrades'] = 'Rilis nilai';
$string['assign:revealidentities'] = 'Ungkap identitas siswa';
$string['assign:reviewgrades'] = 'Ulasan nilai';
$string['assign:showhiddengrader'] = 'Lihat identitas pemberi nilai tersembunyi';
$string['assign:submit'] = 'Ajukan Penugasan';
$string['assign:view'] = 'Lihat Penugasan';
$string['assign:viewblinddetails'] = 'Lihat identitas siswa ketika Penilaian Buta diaktifkan';
$string['assign:viewgrades'] = 'Lihat nilai';
$string['assign:viewownsubmissionsummary'] = 'Lihat ringkasan pengiriman sendiri';
$string['assignfeedback'] = 'PEngaya umpan balik';
$string['assignfeedbackpluginname'] = 'Pengaya umpan balik';
$string['assignmentduedigesthtml'] = '<p>Hai {$a->firstname},</p>
<p>Tugas berikut harus dikumpulkan pada <strong>{$a->duedate}</strong>.</p>
{$a->digest}';
$string['assignmentduedigestitem'] = '<strong>{$a->assignmentname}</strong> pada kursus {$a->coursename}<br/>
<strong>Jatuh tempo: {$a->duetime}</strong><br/>
<a href="{$a->url}" aria-label="Go to {$a->assignmentname}">Menuju Aktivitas</a>';
$string['assignmentduedigestsms'] = '{$a->grader} telah mengirimkan beberapa umpan balik tentang pengiriman tugas Anda untuk {$a->assignment}: {$a->url}';
$string['assignmentduedigestsubject'] = 'Anda memiliki penugasan yang harus diselesaikan dalam 7 hari';
$string['assignmentduesoonhtml'] = '<p>Hai {$a->firstname},</p>
<p>Penugasan <strong>{$a->assignmentname</strong> dalam kursus {$a->coursename} akan segera selesai.</p>
 <p><strong>Batas waktu: {$a->tanggal jatuh tempo</strong></p>
<p><a href="{$a->url}">Buka aktivitas</a></p>';
$string['assignmentduesoonsms'] = 'Tugas Anda {$a->assignmentname} jatuh tempo pada {$a->duedate}: {$a->url}';
$string['assignmentduesoonsubject'] = 'Jatuh tempo pada {$a->duedate}: {$a->assignmentname}';
$string['assignmentisdue'] = 'Penugasan jatuh tempo';
$string['assignmentmail'] = '{$a->grader} telah mengirim beberapa umpan balik pada pengajuan tugas Anda untuk \'{$a->assignment}\'

Anda dapat melihatnya ditambahkan ke ajuan tugas Anda:

{$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} telah mengirim beberapa umpan balik pada pengajuan tugas Anda untuk \'{$a->assignment}\'.</p> <p>Anda dapat melihatnya ditambahkan ke <a href="{$a->url}">pengajuan tugas</a> Anda.</p>';
$string['assignmentmailsmall'] = '{$a->grader} telah mengirim beberapa umpan balik tentang pengajuan tugas Anda untuk \'{$a->assignment}\' Anda dapat melihatnya ditambahkan ke pengajuan Anda';
$string['assignmentname'] = 'Nama penugasan';
$string['assignmentoverduehtml'] = '<p>Hai {$a->firstname},</p> <p><strong>{$a->assignmentname</strong> dalam kursus
{$a->coursename} harus diselesaikan pada <strong>{$a->duedate</strong>.</p>
<p>Anda mungkin masih dapat mengirimkan tugas Anda{$a->cutoffsnippet}, namun kiriman Anda akan ditandai terlambat.</p> <p><a href="{$a->url}">Buka aktivitas</a></p>';
$string['assignmentoverduehtmlcutoffsnippet'] = '<strong>selambat-lambatnya pada {$a->cutoffdate}</strong>';
$string['assignmentoverduesms'] = 'Tugas Anda {$a->nama tugas} telah lewat jatuh tempo pada {$a->tanggal jatuh tempo}: {$a->url}';
$string['assignmentoverduesubject'] = 'Terlambat: {$a->assignmentname}';
$string['assignmentplugins'] = 'Pengaya Penugasan';
$string['assignmentsperpage'] = 'Tugas per halaman';
$string['assignsubmission'] = 'Pengaya pengajuan';
$string['assignsubmissionpluginname'] = 'Pengaya pengajuan';
$string['assigntimeleft'] = 'Sisa waktu';
$string['attemptheading'] = 'Upaya {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Upaya sebelumnya';
$string['attemptnumber'] = 'Jumlah upaya';
$string['attemptreopenmethod'] = 'Upaya pengerjaan dibuka kembali';
$string['attemptreopenmethod_automatic'] = 'Secara otomatis';
$string['attemptreopenmethod_automatic_help'] = 'Setiap setelah mengerjakan, pengerjaan berikutnya diberikan secara otomatis.';
$string['attemptreopenmethod_help'] = 'Setelan ini menentukan apakah siswa dapat mengerjakan kembali penugasan. Untuk setiap pengerjaan, nilai dan umpan balik disimpan, dan dapat dilihat oleh pengajar dan siswa. Opsi yang tersedia adalah:

* Tidak pernah - Hanya satu pengerjaan yang diizinkan.
* Secara manual - Pengerjaan kembali mungkin diizinkan oleh pengajar.
* Otomatis hingga lulus - Pengerjaan kembali diizinkan secara otomatis hingga siswa mencapai nilai kelulusan yang ditetapkan dalam buku nilai untuk penugasan ini.';
$string['attemptreopenmethod_manual'] = 'Manual';
$string['attemptreopenmethod_manual_help'] = 'Setelah mengerjakan, Anda dapat memberikan yang berikutnya melalui halaman Pengajuan/Pengiman atau halaman Penilaian.';
$string['attemptreopenmethod_none'] = 'Tidak pernah';
$string['attemptreopenmethod_untilpass'] = 'Otomatis sampai lulus';
$string['attemptreopenmethod_untilpass_help'] = 'Setelah setiap pengerjaan, pengerjaan berikutnya akan diberikan secara otomatis, hingga siswa mencapai nilai kelulusan.';
$string['attemptsettings'] = 'Setelan upaya ajuan';
$string['availability'] = 'Ketersediaan';
$string['back'] = 'Kembali';
$string['backtoassignment'] = 'Kembali ke penugasan';
$string['batchoperationaddattempt'] = 'Nilai upaya';
$string['batchoperationconfirmaddattempt'] = 'Izinkan upaya lain untuk ajuan yang dipilih?';
$string['batchoperationconfirmdownloadselected'] = 'Unduh ajuan terpilih?';
$string['batchoperationconfirmgrantextension'] = 'Perpanjang semua ajuan yang dipilih?';
$string['batchoperationconfirmlock'] = 'Kunci semua ajuan yang dipilih?';
$string['batchoperationconfirmremovesubmission'] = 'Hapus ajuan terpilih?';
$string['batchoperationconfirmreverttodraft'] = 'Kembalikan ajuan terpilih menjadi draf?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Tetapkan alokasi nilai untuk semua ajuan yang dipilih?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Setel nilai status alur kerja untuk semua pengajuan yang dipilih?';
$string['batchoperationconfirmunlock'] = 'Buka kunci semua pengajuan yang dipilih?';
$string['batchoperationdownloadselected'] = 'Unduh';
$string['batchoperationgrantextension'] = 'Perpanjang';
$string['batchoperationlock'] = 'Kunci';
$string['batchoperationremovesubmission'] = 'Hapus';
$string['batchoperationreverttodraft'] = 'Kembalikan ke draf';
$string['batchoperationsdescription'] = 'Dengan yang terpilih...';
$string['batchoperationsetmarkingallocation'] = 'Alokasikan penanda';
$string['batchoperationsetmarkingworkflowstate'] = 'Ubah status penanda';
$string['batchoperationunlock'] = 'Buka kunci';
$string['batchsetallocatedmarker'] = 'Setel nilai yang dialokasikan untuk {$a} pengguna yang dipilih.';
$string['batchsetmarkingworkflowstateforusers'] = 'Setel status alur kerja nilai untuk {$a} pengguna yang dipilih.';
$string['beginassignment'] = 'Mulai penugasan';
$string['blindmarking'] = 'Penilaian buta';
$string['blindmarking_help'] = 'Penilaian buta menyembunyikan identitas siswa dari penilai. Setelan penilaian buta akan dikunci setelah penyerahan atau nilai telah dibuat terkait dengan penugasan ini.';
$string['blindmarkingenabledwarning'] = 'Pengiriman anonim diaktifkan untuk aktivitas ini.';
$string['blindmarkingnogradewarning'] = 'Pengajuan anonim diaktifkan untuk aktivitas ini. Nilai tidak akan ditambahkan ke buku nilai hingga identitas siswa terungkap melalui menu "Tindakan".';
$string['cachedef_overrides'] = 'Informasi penyampingan pengguna dan grup';
$string['calendardue'] = '{$a} jatuh tempo';
$string['calendarextension'] = '{$a} sudah jatuh tempo (perpanjangan)';
$string['calendargradingdue'] = '{$a} dinilai jatuh tempo';
$string['caneditsubmission'] = 'Anda dapat mengedit ajuan setelah batas waktu berlalu, tetapi akan ditandai sebagai terlambat.';
$string['changefilters'] = 'Ubah filter';
$string['changeuser'] = 'Ganti pengguna';
$string['choosegradingaction'] = 'Aksi penilaian';
$string['choosemarker'] = 'Pilih...';
$string['chooseoperation'] = 'Pilih operasi';
$string['clickexpandreviewpanel'] = 'Klik untuk memperluas panel ulasan';
$string['collapsegradepanel'] = 'Ciutkan panel nilai';
$string['collapsereviewpanel'] = 'Ciutkan panel ulasan';
$string['comment'] = 'Komentar';
$string['completiondetail:submit'] = 'Buat pengajuan';
$string['completionsubmit'] = 'Buat pengajuan';
$string['configshowrecentsubmissions'] = 'Setiap orang dapat melihat notifikasi ajuan pada laporan aktivitas terbaru.';
$string['confirmbatchgradingoperation'] = 'Anda yakin ingin {$a->operation} untuk {$a->count} siswa?';
$string['confirmstart'] = 'Anda memiliki {$a} untuk menyelesaikan tugas ini. Saat Anda mulai, penghitung waktu akan mulai menghitung mundur dan tidak dapat dijeda.';
$string['confirmsubmission'] = 'Anda yakin ingin menyerahkan pekerjaan Anda untuk penilaian? Anda tidak akan dapat membuat perubahan lagi.';
$string['confirmsubmissionheading'] = 'Konfirmasi pengajuan';
$string['conversionexception'] = 'Tidak dapat mengubah penugasan. Kecuali: {$a}.';
$string['couldnotconvertgrade'] = 'Tidak dapat mengonversi nilai tugas untuk pengguna {$a}.';
$string['couldnotconvertsubmission'] = 'Tidak dapat mengubah pengajuan tugas untuk pengguna {$a}.';
$string['couldnotcreatecoursemodule'] = 'Tidak dapat membuat modul kursus.';
$string['couldnotcreatenewassignmentinstance'] = 'Tidak dapat menambahkan model penugasan.';
$string['couldnotfindassignmenttoupgrade'] = 'Tidak dapat menemukan model tugas lama untuk ditingkatkan.';
$string['crontask'] = 'Pemrosesan latar belakang untuk modul penugasan';
$string['currentassigngrade'] = 'Nilai saat ini dalam penugasan';
$string['currentattempt'] = 'Upaya {$a}.';
$string['currentattemptof'] = 'Upaya ke  {$a->attemptnumber} dari ({$a->maxattempts} upaya yang diperbolehkan).';
$string['currentgrade'] = 'Nilai sekarang';
$string['cutoffdate'] = 'Tanggal batas akhir';
$string['cutoffdate_help'] = 'Jika ditetapkan, kiriman tidak akan diterima setelah tanggal ini tanpa perpanjangan. Jika tidak disetel, kiriman akan selalu diterima.';
$string['cutoffdatecolon'] = 'Tanggal batas akhir: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Tanggal batas akhir tidak boleh lebih awal dari tanggal yang diizinkan untuk pengajuan.';
$string['cutoffdatevalidation'] = 'Tanggal batas akhir tidak boleh lebih awal dari tanggal jatuh tempo.';
$string['defaultgradescale'] = 'Skala penilaian';
$string['defaultgradescale_help'] = 'Skala penilaian bawaan untuk tugas baru. Hanya skala standar yang tersedia.';
$string['defaultgradetype'] = 'Tipe nilai';
$string['defaultgradetype_help'] = 'Jenis nilai bawaan untuk tugas baru.';
$string['defaultlayout'] = 'Pulihkan tata letak bawaan';
$string['defaultsettings'] = 'Setelan bawaan Penugasan';
$string['defaultsettings_help'] = 'Setelan ini menentukan bawaan untuk semua penugasan baru.';
$string['defaultteam'] = 'Grup bawaan';
$string['deleteallsubmissions'] = 'Semua kiriman';
$string['description'] = 'Deskripsi';
$string['disabled'] = 'Dinonaktifkan';
$string['downloadall'] = 'Unduh semua pengajuan tugas';
$string['downloadasfolders'] = 'Unduh pengajuan dalam folder';
$string['downloadasfolders_help'] = 'Pengajuan tugas dapat diunduh dalam folder. Setiap ajuan kemudian dimasukkan ke dalam folder terpisah, dengan struktur folder disimpan untuk subfolder mana pun, dan berkas tidak diganti namanya.';
$string['downloadselectedsubmissions'] = 'Unduh ajuan terpilih';
$string['duedate'] = 'Jatuh tempo';
$string['duedate_help'] = 'Ini adalah ketika penugasan kedaluwarsa. Pengajuan akan tetap diizinkan setelah tanggal ini tetapi setiap tugas yang diserahkan setelah tanggal ini akan ditandai sebagai terlambat. Untuk mencegah pengiriman setelah tanggal tertentu - tetapkan tanggal pemotongan tugas.';
$string['duedateaftersubmissionvalidation'] = 'Tanggal jatuh tempo harusnya setelah tanggal diizinkannya pengiriman.';
$string['duedatecolon'] = 'Jatuh tempo: {$a}';
$string['duedatereached'] = 'Jatuh tempo penugasan ini telah lewat';
$string['duedatevalidation'] = 'Tanggal jatuh tempo tidak boleh lebih awal dari tanggal yang diizinkan untuk pengajuan.';
$string['duplicateoverride'] = 'Duplikasi penyampingan';
$string['editaction'] = 'Aksi...';
$string['editattemptfeedback'] = 'Edit nilai dan umpan balik untuk upaya nomor {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Anda sedang mengedit umpan balik untuk upaya sebelumnya. Ini adalah upaya ke {$a->trynumber} dari {$a->totalattempts}.';
$string['editingstatus'] = 'Status pengeditan';
$string['editonline'] = 'Edit daring';
$string['editoverride'] = 'Edit penyampingan';
$string['editsubmission'] = 'Edit pengajuan';
$string['editsubmission_help'] = 'Anda masih bisa membuat perubahan pada pengajuan Anda.';
$string['editsubmissionother'] = 'Edit pengajuan untuk {$a}';
$string['enabled'] = 'Diaktifkan';
$string['enabletimelimit'] = 'Aktifkan penugasan berwaktu';
$string['enabletimelimit_help'] = 'Jika diaktifkan, Anda dapat mengatur batas waktu pada halaman setelan penugasan.';
$string['errorgradechangessaveddetail'] = 'Perubahan pada nilai dan umpan balik gagal disimpan';
$string['errornosubmissions'] = 'Tidak ada pengajuan yang dapat diunduh';
$string['errorquickgradingvsadvancedgrading'] = 'Nilai tidak disimpan karena penugasan ini sedang menggunakan penilaian lanjutan';
$string['errorrecordmodified'] = 'Nilai tidak disimpan karena seseorang baru-baru ini mengubah satu atau lebih rekaman daripada saat Anda memuat halaman.';
$string['eventallsubmissionsdownloaded'] = 'Semua pengajuan sedang diunduh.';
$string['eventassessablesubmitted'] = 'Pengajuan telah diserahkan.';
$string['eventbatchsetmarkerallocationviewed'] = 'Melihat set alokasi penilaian massal';
$string['eventbatchsetworkflowstateviewed'] = 'Melihat status set alur kerja set massal.';
$string['eventextensiongranted'] = 'Perpanjangan telah diberikan.';
$string['eventfeedbackupdated'] = 'Memperbarui umpan balik';
$string['eventfeedbackviewed'] = 'Melihat umpan balik';
$string['eventgradingformviewed'] = 'Melihat formulir penilaian';
$string['eventgradingtableviewed'] = 'Melihat tabel penilaian';
$string['eventidentitiesrevealed'] = 'Mengungkap identitas';
$string['eventmarkerupdated'] = 'Memperbarui nilai yang dialokasikan.';
$string['eventoverridecreated'] = 'Penyampingan penugasan dibuat';
$string['eventoverridedeleted'] = 'Penyampingan penugasan dihapus';
$string['eventoverrideupdated'] = 'Penyampingan penugasan diperbarui';
$string['eventremovesubmissionformviewed'] = 'Melihat penghapusan konfirmasi ajuan.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Melihat halaman konfirmasi pengungkapan identitas.';
$string['eventstatementaccepted'] = 'Pengguna telah menerima pernyataan pengajuan.';
$string['eventsubmissionconfirmationformviewed'] = 'Melihat formulir konfirmasi pengajuan.';
$string['eventsubmissioncreated'] = 'Membuat pengajuan.';
$string['eventsubmissionduplicated'] = 'Pengguna menggandakan kiriman mereka.';
$string['eventsubmissionformviewed'] = 'Melihat formulir pengajuan.';
$string['eventsubmissiongraded'] = 'Ajuan telah dinilai.';
$string['eventsubmissionlocked'] = 'Kiriman telah dikunci untuk pengguna.';
$string['eventsubmissionremoved'] = 'Pengajuan dihapus.';
$string['eventsubmissionstatusupdated'] = 'Status pengajuan telah diperbarui.';
$string['eventsubmissionstatusviewed'] = 'Telah melihat status pengajuan.';
$string['eventsubmissionunlocked'] = 'Pengajuan telah dibuka untuk pengguna.';
$string['eventsubmissionupdated'] = 'Ajuan diperbarui.';
$string['eventsubmissionviewed'] = 'Melihat pengajuan.';
$string['eventworkflowstateupdated'] = 'Status alur kerja telah diperbarui.';
$string['expandreviewpanel'] = 'Luaskan panel ulasan';
$string['extensionduedate'] = 'Perpanjang jatuh tempo';
$string['extensionduedatecurrent'] = 'Tanggal jatuh tempo perpanjangan saat ini';
$string['extensionduedatenone'] = 'Tidak ada';
$string['extensionduedaterange'] = 'Bervariasi antara {$a->earliest} dan {$a->latest}';
$string['extensionduedatewithout'] = 'Pengguna tanpa ekstensi saat ini: {$a}';
$string['extensionnotafterduedate'] = 'Tanggal perpanjangan harus setelah tanggal jatuh tempo';
$string['extensionnotafterfromdate'] = 'Tanggal perpanjangan harus setelah pengiriman izin dari tanggal';
$string['feedback'] = 'Umpan balik';
$string['feedbackavailableanonhtml'] = 'Anda memiliki umpan balik baru pada pengajuan tugas Anda untuk \'{$a->assignment}\'. Anda dapat melihatnya ditambahkan ke <a href="{$a->url}">pengajuan tugas</a> Anda.';
$string['feedbackavailableanonsmall'] = 'Umpan balik baru untuk penugasan {$a->assignment}';
$string['feedbackavailableanonsms'] = 'Anda memiliki umpan balik tentang {$a->assignment}: {$a->url}';
$string['feedbackavailableanontext'] = 'Anda memiliki umpan balik baru pada pengajuan tugas Anda untuk \'{$a->assignment}\'

Anda dapat melihatnya ditambahkan ke pengajuan tugas Anda:

{$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} telah memposting beberapa umpan balik pada pengajuan tugas Anda untuk \'{$a->assignment}\'.
Anda dapat melihatnya ditambahkan ke <a href="{$a->url}">pengajuan tugas</a> Anda.';
$string['feedbackavailablesmall'] = '{$a->username} telah memberikan umpan balik untuk penugasan {$a->assignment}';
$string['feedbackavailablesms'] = '{$a->username} memberikan umpan balik pada {$an->assignment}: {$a->url}';
$string['feedbackavailabletext'] = '{$a->username} telah mengirim beberapa umpan balik tentang pengajuan tugas Anda untuk \'{$a->assignment}\'

Anda dapat melihatnya ditambahkan ke pengajuan tugas Anda:

      {$a->url}';
$string['feedbackplugin'] = 'Pengaya umpan balik';
$string['feedbackpluginforgradebook'] = 'Pengaya umpan balik yang akan mendorong komentar ke buku nilai';
$string['feedbackpluginforgradebook_help'] = 'Hanya satu pengaya umpan balik penugasan yang dapat memasukkan umpan balik ke dalam buku nilai.';
$string['feedbackplugins'] = 'Pengaya umpan balik';
$string['feedbacksettings'] = 'Setelan umpan balik';
$string['feedbacktypes'] = 'Jenis umpan balik';
$string['filesubmissions'] = 'Berkas kiriman';
$string['filter'] = 'Filter';
$string['filterall'] = 'Semuanya';
$string['filterdraft'] = 'Konsep';
$string['filtergraded'] = 'Dinilai';
$string['filtergrantedextension'] = 'Perpanjangan diberikan';
$string['filternone'] = 'Tak ada filter';
$string['filternotsubmitted'] = 'Belum mengirim';
$string['filterrequiregrading'] = 'Membutuhkan penilaian';
$string['filtersubmitted'] = 'Telah terkirim';
$string['fixrescalednullgrades'] = 'Penugasan ini mengandung beberapa nilai yang salah. Anda dapat <a href="{$a->link} "> secara otomatis memperbaiki nilai ini </a>. Ini dapat mempengaruhi total kursus.';
$string['fixrescalednullgradesconfirm'] = 'Anda yakin ingin memperbaiki nilai yang salah? Semua nilai yang terpengaruh akan dihapus. Ini dapat mempengaruhi total kursus.';
$string['fixrescalednullgradesdone'] = 'Nilai diperbaiki.';
$string['gradeabovemaximum'] = 'Nilai harus kurang dari atau sama dengan {$a}.';
$string['gradeactions'] = 'Aksi penilaian';
$string['gradebelowzero'] = 'Nilai harus lebih besar dari atau sama dengan nol.';
$string['gradebreakdown'] = 'Pemecahan nilai';
$string['gradecanbechanged'] = 'Nilai bisa diubah';
$string['gradechangessaveddetail'] = 'Perubahan pada nilai dan umpan balik disimpan';
$string['graded'] = 'Telah dinilai';
$string['gradedby'] = 'Dinilai oleh';
$string['gradedfollowupsubmit'] = 'Dinilai - dikirim ulang';
$string['gradedon'] = 'Dinilai pada';
$string['gradeitem:submissions'] = 'Pengajuan';
$string['gradelocked'] = 'Nilai ini dikunci atau disampingkan dalam buku nilai.';
$string['gradeoutof'] = 'Nilai dari {$a}';
$string['gradeoutofhelp'] = 'Penilaian';
$string['gradeoutofhelp_help'] = 'Masukkan nilai ajuan siswa di sini. Anda bisa memasukkan desimal.';
$string['gradepenalty'] = 'Nilai penalti';
$string['gradepenalty_help'] = 'Jika diaktifkan, penalti akan diterapkan pada kiriman';
$string['gradersubmissionupdatedhtml'] = '{$a->username} telah memperbarui pengajuan tugas mereka untuk \'{$a->assignment}\' pada {$a->timeupdated}. Tugas tersebut tersedia di <a href="{$a->url}">pengajuan tugas</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} telah memperbarui pengajuan mereka untuk penugasan {$a->assignment}.';
$string['gradersubmissionupdatedsms'] = '{$a->username} memperbarui {$a->assignment}: {$a->url}';
$string['gradersubmissionupdatedtext'] = '{$a->username} telah memperbarui pengajuan tugas mereka untuk \'{$a->assignment}\' di {$a->timeupdated}

Tersedia di sini:

  {$a->url}';
$string['gradestudent'] = 'Nilai siswa: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Nilai {$a}';
$string['grading'] = 'Penilaian';
$string['gradingchangessaved'] = 'Nilai telah tersimpan';
$string['gradingduedate'] = 'Ingatkan saya untuk menilai';
$string['gradingduedate_help'] = 'Tanggal yang diharapkan bahwa penilaian ajuan harus diselesaikan. Tanggal ini digunakan untuk memprioritaskan pemberitahuan dasbor untuk pengajar.';
$string['gradingdueduedatevalidation'] = 'Ingatkan saya untuk menilai menurut tanggal tidak boleh lebih awal dari batas waktu.';
$string['gradingduefromdatevalidation'] = 'Ingatkan saya untuk menilai menurut tanggal tidak boleh lebih awal dari tanggal yang diizinkan untuk pengajuan.';
$string['gradingmethodpreview'] = 'Kriteria penilaian';
$string['gradingoptions'] = 'Opsi';
$string['gradingstatus'] = 'Status penilaian';
$string['gradingstudent'] = 'Menilai siswa';
$string['gradingsummary'] = 'Ringkasan Penilaian';
$string['grantextension'] = 'Perpanjangan';
$string['grantextensionforusers'] = 'Berikan perpanjangan untuk {$a} siswa';
$string['groupoverrides'] = 'Penyampingan grup';
$string['groupoverridesdeleted'] = 'Penyampingan grup dihapus';
$string['groupsnone'] = 'Tidak ada grup pada kursus ini';
$string['groupsubmissionsettings'] = 'Setelan pengiriman grup';
$string['hiddenuser'] = 'Peserta';
$string['hidegrader'] = 'Sembunyikan identitas pemberi nilai dari siswa';
$string['hidegrader_help'] = 'Jika diaktifkan, identitas pengguna yang menilai pengajuan tugas tidak akan ditampilkan, sehingga siswa tidak dapat melihat siapa yang menilai tugasnya. Perhatikan bahwa setelan ini tidak berpengaruh pada kotak komentar di halaman penilaian.';
$string['hideshow'] = 'Sembunyikan/Tampilkan';
$string['inactiveoverridehelp'] = '* Penyampingaan ini tidak aktif karena akses pengguna ke aktivitas dibatasi. Hal ini dapat terjadi karena penetapan grup atau peran, pembatasan akses lainnya, atau aktivitas disembunyikan.';
$string['includesuspendedparticipants'] = 'Sertakan peserta yang ditangguhkan';
$string['indicator:cognitivedepth'] = 'Penugasan kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai oleh siswa dalam aktivitas Penugasan.';
$string['indicator:cognitivedepthdef'] = 'Penugasan kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh aktivitas penugasan selama interval analisis ini (Tingkatan = Tidak ada tampilan, Lihat, Ajukan, Lihat umpan balik, komentari umpan balik, Ajukan ulang setelah melihat umpan balik)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Penugasan sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada luas sosial yang dicapai oleh siswa dalam aktivitas Penugasan.';
$string['indicator:socialbreadthdef'] = 'Penugasan sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh aktivitas Penugasan selama interval analisis ini (Tingkatan = Tidak ada partisipasi, Peserta sendiri, Peserta dengan orang lain)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['instructionfiles'] = 'Berkas instruksi';
$string['introattachments'] = 'Berkas tambahan';
$string['introattachments_help'] = 'Berkas tambahan untuk digunakan dalam tugas, seperti templat jawaban, dapat ditambahkan.';
$string['invalidfloatforgrade'] = 'Nilai yang diberikan tidak dapat dipahami: {$a}';
$string['invalidgradeforscale'] = 'Nilai yang diberikan tidak valid untuk skala saat ini';
$string['invalidoverrideid'] = 'ID penyampingan tidak valid';
$string['lastmodifiedgrade'] = 'Terakhir diubah (nilai)';
$string['lastmodifiedsubmission'] = 'Terakhir diubah (ajuan)';
$string['latesubmissions'] = 'Pengajuan terlambat';
$string['latesubmissionsaccepted'] = 'Diizinkan sampai {$a}';
$string['loading'] = 'Memuat...';
$string['locksubmissionforstudent'] = 'Cegah pengajuan lagi untuk siswa: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Kunci pengajuan';
$string['manageassignfeedbackplugins'] = 'Kelola pengaya umpan balik penugasan';
$string['manageassignsubmissionplugins'] = 'Kelola pengaya pengajuan penugasan';
$string['marker'] = 'Nilai';
$string['markerfilter'] = 'Filter nilai';
$string['markerfilternomarker'] = 'TIdak ada nilai';
$string['markingallocation'] = 'Gunakan alokasi penilaian';
$string['markingallocation_help'] = 'Jika diaktifkan bersama dengan alur kerja penilaian, nilai dapat dialokasikan untuk siswa tertentu.';
$string['markinganonymous'] = 'Izinkan pelepasan sebagian nilai sambil menilai secara anonim';
$string['markinganonymous_help'] = 'Jika diaktifkan bersamaan dengan pengiriman anonim dan alur kerja penilaian, ini memungkinkan pelepasan sebagian nilai sambil menandai secara anonim.';
$string['markingstate'] = 'Status penilaian';
$string['markingworkflow'] = 'Gunakan alur kerja penilaian';
$string['markingworkflow_help'] = 'Jika diaktifkan, nilai akan melalui serangkaian tahapan alur kerja sebelum dirilis ke siswa. Hal ini memungkinkan beberapa putaran pemberian nilai dan memungkinkan nilai dirilis ke semua siswa pada waktu yang sama.';
$string['markingworkflowstate'] = 'Menilai status alur kerja';
$string['markingworkflowstate_help'] = 'Status alur kerja yang memungkinkan mungkin termasuk (tergantung pada izin Anda): * Tidak dinilai - penilaian belum dimulai * Dalam penilaian - penilaian telah dimulai tetapi belum selesai * Penilaian selesai - penilaian telah selesai tetapi mungkin perlu kembali untuk diperiksa / koreksi * Dalam peninjauan - penilaian sekarang ada pada pengajar yang bertanggung jawab untuk pemeriksaan kualitas * Siap dirilis - pengajar yang bertanggung jawab puas dengan penilaian tetapi mungkin menunggu sebelum memberi siswa akses ke penilaian
* Dirilis - siswa dapat mengakses nilai / umpan balik';
$string['markingworkflowstateinmarking'] = 'Sedang dinilai';
$string['markingworkflowstateinreview'] = 'Sedang diulas';
$string['markingworkflowstatenotmarked'] = 'Belum dinilai';
$string['markingworkflowstatereadyforrelease'] = 'Siap dirilis';
$string['markingworkflowstatereadyforreview'] = 'Penilaian selesai';
$string['markingworkflowstatereleased'] = 'Dirilis';
$string['maxattempts'] = 'Pengerjaan yang diizinkan.';
$string['maxattempts_help'] = 'Jumlah upaya pengajuan maksimum yang dapat dilakukan oleh seorang siswa. Setelah jumlah ini tercapai, ajuan tidak dapat dibuka kembali.';
$string['maxgrade'] = 'Nilai maksimum';
$string['maxperpage'] = 'Tugas maksimum per halaman';
$string['maxperpage_help'] = 'Jumlah penugasan maksimum yang dapat ditampilkan oleh pemberi nilai di halaman penilaian penugasan. Setelan ini berguna untuk mencegah kehabisan batas waktu untuk kursus dengan jumlah peserta yang banyak.';
$string['messageprovider:assign_due_digest'] = 'Pemberitahuan penugasan  harus dikumpulkan dalam 7 hari';
$string['messageprovider:assign_due_soon'] = 'Pemberitahuan penugasan segera jatuh tempo';
$string['messageprovider:assign_notification'] = 'Pemberitahuan penugasan';
$string['messageprovider:assign_overdue'] = 'Pemberitahuan keterlambatan tugas';
$string['modulename'] = 'Penugasan';
$string['modulename_help'] = 'Modul aktivitas penugasan memungkinkan pengajar untuk mengkomunikasikan tugas, mengumpulkan pekerjaan dan memberikan nilai dan umpan balik.

Siswa dapat mengirimkan konten digital apa pun (berkas), seperti dokumen, spreadsheet, gambar, atau klip audio dan video. Sebagai alternatif, atau sebagai tambahan, penugasan mungkin mengharuskan siswa mengetik teks langsung ke dalam editor teks. Modul ini juga dapat sebagai sarana penilaian siswa yang dikerjakan tanpa menggunakan komputer, seperti tugas: kerajinan, menggambar atau tugas praktik lainnya yang tidak memerlukan berkas digital. Siswa dapat mengirimkan pekerjaan secara individu atau sebagai anggota grup.

Saat meninjau penugasan, pengajar dapat meninggalkan komentar umpan balik dan mengunggah berkas, seperti kiriman siswa yang ditandai, dokumen dengan komentar atau masukan audio lisan. Tugas dapat dinilai menggunakan skala numerik atau kustom atau metode penilaian tingkat lanjut seperti rubrik. Nilai akhir dicatat dalam buku nilai.';
$string['modulename_link'] = 'mod/assignment/view';
$string['modulenameplural'] = 'Penugasan';
$string['moreusers'] = '{$a} lagi...';
$string['multipleteams'] = 'Anggota lebih dari satu grup';
$string['multipleteams_desc'] = 'Penugasan membutuhkan pengajuan dalam grup. Anda adalah anggota lebih dari satu grup. Untuk dapat mengajukannya, Anda harus menjadi anggota dari satu grup saja. Silakan hubungi pengajar Anda untuk mengubah keanggotaan grup Anda.';
$string['multipleteamsgrader'] = 'Anggota lebih dari satu grup, jadi tidak dapat mengajukan.';
$string['newsubmissions'] = 'Penugasan terkirim';
$string['nextuser'] = 'Pengguna berikutnya';
$string['noattempt'] = 'Tidak ada upaya';
$string['noclose'] = 'Tidak ada tanggal tutup';
$string['nofiles'] = 'Tidak ada berkas.';
$string['nofilters'] = 'Tidak ada filter';
$string['nograde'] = 'Tidak ada nilai.';
$string['nogroupoverrides'] = 'Saat ini tidak ada penyampingan grup.';
$string['nomoresubmissionsaccepted'] = 'Hanya diperbolehkan untuk peserta yang telah diberikan perpanjangan waktu';
$string['none'] = 'Tidak ada';
$string['noonlinesubmissions'] = 'Penugasan ini tidak mengharuskan Anda mengajukan apa pun secara daring';
$string['noopen'] = 'Tidak ada tanggal buka';
$string['nooverridedata'] = 'Anda harus mengganti setidaknya satu dari setelan penugasan.';
$string['nosavebutnext'] = 'Selanjutnya';
$string['nosubmission'] = 'Belum ada pengajuan untuk penugasan ini';
$string['nosubmissionyet'] = 'Belum ada ajuan yang dibuat';
$string['noteam'] = 'Bukan anggota grup mana pun';
$string['noteam_desc'] = 'Penugasan ini membutuhkan pengajuan dalam grup. Anda bukan anggota grup mana pun, jadi Anda tidak dapat membuat ajuan. Silakan hubungi pengajar Anda untuk ditambahkan ke grup.';
$string['noteamgrader'] = 'Bukan anggota grup mana pun, jadi tidak dapat mengajukannya.';
$string['notgraded'] = 'Belum dinilai';
$string['notgradedyet'] = 'Belum dinilai';
$string['notifications'] = 'Notifikasi';
$string['notifystudents'] = 'Beritahu siswa';
$string['nouseroverrides'] = 'Saat ini tidak ada penyampingan pengguna.';
$string['nousers'] = 'Tidak ada pengguna';
$string['nousersselected'] = 'Belum ada pengguna yang dipilih';
$string['numberofdraftsubmissions'] = 'Draf';
$string['numberofparticipants'] = 'Peserta';
$string['numberofsubmissionsneedgrading'] = 'Belum dinilai';
$string['numberofsubmissionsneedgradinglabel'] = 'Membutuhkan penilaian: {$a}';
$string['numberofsubmittedassignments'] = 'Diajukan';
$string['numberofteams'] = 'Grup';
$string['offline'] = 'Tidak perlu pengajuan daring';
$string['open'] = 'Buka';
$string['opensubmissionexists'] = 'Pengiriman tugas terbuka sudah ada.';
$string['outlinegrade'] = 'Nilai: {$a}';
$string['outof'] = '{$a->current} dari {$a->total}';
$string['overdue'] = 'Tugas terlambat pada: {$a}';
$string['override'] = 'Penyampingan';
$string['overridedeletegroupsure'] = 'Anda yakin ingin menghapus penyampingan untuk grup {$a}?';
$string['overridedeleteusersure'] = 'Anda yakin ingin menghapus penyampingan untuk pengguna {$a}?';
$string['overridegroup'] = 'Penyampingan grup';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overriderecalculatepenalty'] = 'Hitung ulang penalti untuk pengguna dalam penyampingan';
$string['overrides'] = 'Penyampingan';
$string['overrideuser'] = 'Penyampingan pengguna';
$string['overrideusereventname'] = '{$a->assign} - Penyampingan';
$string['page-mod-assign-view'] = 'Modul utama penugasan dan halaman pengajuan.';
$string['page-mod-assign-x'] = 'Setiap halaman modul penugasan';
$string['paramtimeremaining'] = '{$a} tersisa';
$string['participant'] = 'Peserta';
$string['penaltyduedatechangemessage'] = 'Beberapa nilai telah diberikan. Untuk mengubah tanggal jatuh tempo, menonaktifkan/mengaktifkan penalti, Anda harus terlebih dahulu memilih apakah akan menghitung ulang nilai yang ada atau tidak.';
$string['pluginadministration'] = 'Administrasi penugasan';
$string['pluginname'] = 'Penugasan';
$string['preventsubmissionnotingroup'] = 'Wajibkan grup membuat pengajuan.';
$string['preventsubmissionnotingroup_help'] = 'Jika diaktifkan, pengguna yang bukan anggota grup tidak akan dapat membuat pengajuan.';
$string['preventsubmissions'] = 'Cegah pengguna untuk mengirim lagi ke penugasan ini.';
$string['preventsubmissionsshort'] = 'Mencegah perubahan pengajuan';
$string['previous'] = 'Sebelumnya';
$string['previoususer'] = 'Pengguna sebelumnya';
$string['privacy:attemptpath'] = 'upaya {$a}';
$string['privacy:blindmarkingidentifier'] = 'Pengenal yang digunakan untuk penilaian buta';
$string['privacy:gradepath'] = 'nilai';
$string['privacy:metadata:assigndownloadasfolders'] = 'Preferensi pengguna tentang apakah beberapa ajuan berkas harus diunduh ke dalam folder';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Data umpan balik untuk penugasan.';
$string['privacy:metadata:assignfilter'] = 'Opsi filter seperti \'Diajukan\', \'Tidak diajukan\', \'Memerlukan penilaian\', dan \'Perpanjangan yang diberikan\'';
$string['privacy:metadata:assigngrades'] = 'Menyimpan nilai pengguna untuk penugasan';
$string['privacy:metadata:assignmarkerfilter'] = 'Filter ringkasan tugas berdasarkan nilai yang ditetapkan.';
$string['privacy:metadata:assignmentid'] = 'ID Penugasan';
$string['privacy:metadata:assignmessageexplanation'] = 'Pesan dikirim ke siswa melalui sistem olah pesan.';
$string['privacy:metadata:assignoverrides'] = 'Menyimpan informasi penyampingan untuk penugasan';
$string['privacy:metadata:assignperpage'] = 'Jumlah tugas yang ditampilkan per halaman.';
$string['privacy:metadata:assignquickgrading'] = 'Preferensi apakah penilaian cepat digunakan atau tidak.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Menyimpan informasi pengajuan pengguna';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Data pengiriman untuk penugasan.';
$string['privacy:metadata:assignuserflags'] = 'Menyimpan data meta pengguna seperti perpanjangan tanggal';
$string['privacy:metadata:assignusermapping'] = 'Pemetaan untuk penilaian buta';
$string['privacy:metadata:assignworkflowfilter'] = 'Filter menurut tahapan alur kerja yang berbeda.';
$string['privacy:metadata:grade'] = 'Nilai numerik untuk pengajuan tugas ini. Dapat ditentukan dengan skala/format tingkat lanjut, dll, tetapi akan selalu diubah kembali ke angka floating point.';
$string['privacy:metadata:grader'] = 'ID pengguna penilai.';
$string['privacy:metadata:groupid'] = 'ID Grup tempat pengguna menjadi anggotanya.';
$string['privacy:metadata:latest'] = 'Sangat menyederhanakan kueri yang ingin mengetahui informasi hanya tentang upaya terbaru.';
$string['privacy:metadata:mailed'] = 'Apakah pengguna ini sudah dikirimi surel?';
$string['privacy:metadata:timecreated'] = 'Waktu dibuat';
$string['privacy:metadata:timestarted'] = 'Waktu mulai';
$string['privacy:metadata:userid'] = 'ID pengguna';
$string['privacy:studentpath'] = 'Ajuan siswa';
$string['privacy:submissionpath'] = 'pengajuan';
$string['quickgrading'] = 'Penilaian cepat';
$string['quickgrading_help'] = 'Penilaian cepat memungkinkan Anda menetapkan nilai (dan capaian) langsung di tabel pengajuan. Penilaian cepat tidak kompatibel dengan penilaian lanjutan dan tidak disarankan jika ada beberapa poin nilai.';
$string['quickgradingchangessaved'] = 'Nilai telah tersimpan';
$string['quickgradingresult'] = 'Penilaian cepat';
$string['recordid'] = 'Tanda pengenal';
$string['relativedatessubmissiontimeleft'] = 'Dihitung untuk setiap siswa';
$string['removeallgroupoverrides'] = 'Semua penyampingan grup';
$string['removealluseroverrides'] = 'Semua penyampingan pengguna';
$string['removesubmission'] = 'Hapus pengajuan';
$string['removesubmissionconfirm'] = 'Anda yakin ingin menghapus pengajuan Anda?';
$string['removesubmissionconfirmforstudent'] = 'Anda yakin ingin menghapus data pengajuan {$a}?';
$string['removesubmissionconfirmforstudentwithtimelimit'] = 'Anda yakin ingin menghapus pengajuan untuk {$a}? Harap dicatat bahwa ini tidak akan mengatur ulang batas waktu siswa. Anda dapat memberikan lebih banyak waktu dengan menambahkan batas waktu penggantian pengguna.';
$string['removesubmissionconfirmwithtimelimit'] = 'Anda yakin ingin menghapus ajuan Anda? Harap dicatat bahwa ini tidak akan mengatur ulang batas waktu Anda.';
$string['removesubmissionforstudent'] = 'Hapus pengajuan untuk siswa: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Buka kembali sampai opsi lulus tidak sesuai dengan penilaian buta, karena nilai tidak dirilis ke buku nilai sampai identitas siswa terungkap.';
$string['requireallteammemberssubmit'] = 'Wajibkan semua anggota grup mengajukannnya';
$string['requireallteammemberssubmit_help'] = 'Setelan ini harus digunakan bersama dengan \'Wajibkan siswa mengklik tombol kirim\' di setelan Penyerahan.

Jika diaktifkan, semua anggota grup harus mengklik tombol kirim agar kiriman grup dianggap telah dikirimkan. Jika dinonaktifkan, anggota grup mana pun dapat mengklik tombol kirim.';
$string['requiresubmissionstatement'] = 'Siswa harus menyetujui pernyataan pengajuan';
$string['requiresubmissionstatement_help'] = 'Siswa harus menyetujui pernyataan pengajuan untuk semua ajuan pada penugasan ini.';
$string['revealidentities'] = 'Tunjukkan identitas siswa';
$string['revealidentitiesconfirm'] = 'Yakin ingin mengungkapkan identitas siswa untuk tugas ini? Operasi ini tidak dapat dibatalkan. Setelah identitas siswa terungkap, nilai akan dirilis ke buku nilai.';
$string['reverttodefaults'] = 'Kembalikan ke penugasan bawaan';
$string['reverttodraft'] = 'Kembalikan ajuan ke status draf.';
$string['reverttodraftforgroup'] = 'Kembalikan kiriman ke draf untuk grup {$a}.';
$string['reverttodraftforstudent'] = 'Kembalikan ajuan ke draf untuk siswa: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Kembalikan ajuan ke draf';
$string['reviewed'] = 'Diulas';
$string['save'] = 'Simpan';
$string['saveallquickgradingchanges'] = 'Simpan semua penilaian cepat';
$string['saveandcontinue'] = 'Simpan dan lanjutkan';
$string['savechanges'] = 'Simpan perubahan';
$string['savegradingresult'] = 'Penilaian';
$string['savenext'] = 'Simpan dan perlihatkan selanjutnya';
$string['saveoverrideandstay'] = 'Simpan dan masukkan penyampingan lain';
$string['savingchanges'] = 'Simpan perubahan...';
$string['scale'] = 'Skala';
$string['search:activity'] = 'Penugasan - informasi aktivitas';
$string['selectedusers'] = 'Pengguna terpilih';
$string['selectlink'] = 'Pilih...';
$string['selectuser'] = 'Pilih {$a}';
$string['sendlatenotifications'] = 'Beri tahu pemberi nilai tentang pengajuan yang terlambat';
$string['sendlatenotifications_help'] = 'Jika diaktifkan, pemberi nilai (biasanya pengajar) menerima pesan setiap kali siswa terlambat mengirimkan tugas. Metode pesan dapat dikonfigurasi.';
$string['sendnotificationduedatesoon'] = 'Beri tahu pengguna tentang tanggal jatuh tempo penugasan yang semakin dekat';
$string['sendnotificationduedigest'] = 'Beri tahu pengguna tentang penugasan yang harus diselesaikan dalam 7 hari';
$string['sendnotificationoverdue'] = 'Beri tahu pengguna tentang tugas yang sudah lewat waktunya';
$string['sendnotifications'] = 'Beri tahu pemberi nilai tentang pengajuan';
$string['sendnotifications_help'] = 'Jika diaktifkan, pemberi nilai (biasanya pengajar) menerima pesan setiap kali siswa mengajukan tugas, lebih awal, tepat waktu, dan terlambat. Metode pesan dapat dikonfigurasi.';
$string['sendstudentnotifications'] = 'Kabari siswa';
$string['sendstudentnotifications_help'] = 'Jika diaktifkan, siswa menerima pesan tentang nilai atau umpan balik yang diperbarui. Jika menandai alur kerja diaktifkan di penugasan ini, pemberitahuan tidak akan dikirim sampai nilainya dirilis.';
$string['sendstudentnotificationsdefault'] = 'Setelan bawaan untuk "Kabari siswa"';
$string['sendstudentnotificationsdefault_help'] = 'Saat menilai setiap siswa, apakah \'Beri tahu siswa\' harus dicentang secara bawaan?';
$string['sendsubmissionreceipts'] = 'Kirim tanda terima pengajuan ke siswa';
$string['sendsubmissionreceipts_help'] = 'Sakelar ini memungkinkan tanda terima pengiriman untuk siswa. Siswa akan menerima pemberitahuan setiap kali mereka berhasil mengirimkan tugas.';
$string['setmarkerallocationforlog'] = 'Tetapkan alokasi penilaian: (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'Tetapkan alokasi penilaian';
$string['setmarkingworkflowstate'] = 'Setel status alur kerja penilaian';
$string['setmarkingworkflowstateforlog'] = 'Atur penilaian status alur kerja : (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Setelan Penugasan';
$string['showrecentsubmissions'] = 'Tampilkan pengajuan terbaru';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'Menilai status alur kerja harus \'Dirilis\' untuk memberi tahu siswa.';
$string['submission'] = 'Pengajuan';
$string['submissionactions'] = 'Aksi Pengajuan/Pengiriman';
$string['submissionattachments'] = 'Hanya tampilkan berkas selama pengajuan';
$string['submissionattachments_help'] = 'Centang kotak untuk hanya menampilkan berkas di halaman pengajuan. Jika tidak, file akan ditampilkan pada halaman tugas dan pengajuan.';
$string['submissioncontains'] = 'Ajuan Anda berisi:';
$string['submissioncopiedhtml'] = '<p>Anda telah membuat salinan dari pengajuan tugas Anda sebelumnya untuk \'{$a->assignment}\'.</p>
<p>Anda dapat melihat status <a href="{$a->url}">pengajuan tugas</a> Anda.</p>';
$string['submissioncopiedsmall'] = 'Anda telah menyalin ajuan tugas Anda sebelumnya untuk {$a->assignment}';
$string['submissioncopiedsms'] = 'Anda telah menyalin pengajuan tugas Anda sebelumnya untuk {$a->assignment}: {$a->url}';
$string['submissioncopiedtext'] = 'Anda telah berhasil membuat salinan pengajuan tugas untuk \'{$a->assignment}\'

Anda dapat melihat status pengajuan tugas Anda:

    {$a->url}';
$string['submissiondrafts'] = 'Siswa harus klik tombol ajukan';
$string['submissiondrafts_help'] = 'Haruskah siswa memiliki tombol ajukan untuk menunjukkan saat mereka selesai membuat perubahan pada ajuan mereka dan siap untuk dinilai?';
$string['submissioneditable'] = 'Siswa dapat mengedit pengajuan tugasnya';
$string['submissionempty'] = 'Belum ada pengajuan';
$string['submissionlog'] = 'Siswa: {$a->fullname}, Status: {$a->status}';
$string['submissionmodified'] = 'Anda sudah memiliki data pengajuan. Silakan tinggalkan halaman ini dan coba lagi.';
$string['submissionmodifiedgroup'] = 'Ajuan telah diubah oleh orang lain. Silakan tinggalkan halaman ini dan coba lagi.';
$string['submissionnotcopiedinvalidstatus'] = 'Ajuan tidak disalin karena telah diedit sejak dibuka kembali.';
$string['submissionnoteditable'] = 'Siswa tidak dapat mengedit pengajuan ini';
$string['submissionnotopen'] = 'Penugasan ini tidak terbuka untuk pengiriman';
$string['submissionnotready'] = 'Tugas ini belum siap untuk diajukan:';
$string['submissionplugins'] = 'Pengaya pengajuan tugas';
$string['submissionreceiptcontains'] = 'Konten yang dikirimkan ({$a->total} item):';
$string['submissionreceipthtml'] = '<p>Penugasan \'{$a->assignment}\' Anda telah diajukan.</p> <p>Anda dapat melihat ajuan Anda dan memeriksa statusnya di <a href="{$a->url}">halaman penugasan</a>.</p> {$a->submissionsummaryhtml}';
$string['submissionreceiptotherhtml'] = 'Pengajuan tugas Anda untuk \'{$a->assignment}\' telah terkirim. Anda dapat melihat status <a href="{$a->url}">pengajuan tugas</a> Anda.';
$string['submissionreceiptothersmall'] = 'Pengajuan tugas untuk  {$a->assignment}  telah terkirim.';
$string['submissionreceiptothersms'] = 'Pengajuan Anda untuk {$a->assignment} telah dikirimkan: {$a->url}';
$string['submissionreceiptothertext'] = 'Pengajuan tugas untuk \'{$a->assignment}\' telah terkirim.

Anda dapat melihat status pengajuan tugas Anda:

   {$a->url}';
$string['submissionreceipts'] = 'Kirim tanda bukti pengajuan';
$string['submissionreceiptsmall'] = 'Konfirmasi Pengajuan Tugas - {$a->assignment}';
$string['submissionreceiptsms'] = 'Anda telah mengirimkan {$a->assignment}: {$a->url}';
$string['submissionreceipttext'] = 'Ajuan tugas Anda untuk \'{$a->assignment}\'.

Anda dapat melihat status ajuan tugas:

    {$a->url}

{$a->submissionsummarytext}';
$string['submissions'] = 'Pengajuan';
$string['submissionsclosed'] = 'Pengajuan ditutup';
$string['submissionsettings'] = 'Setelan pengajuan tugas';
$string['submissionslocked'] = 'Penugasan ini tidak mengizinkan pengajuan';
$string['submissionslockedshort'] = 'Ubah pengajuan tidak diizinkan';
$string['submissionstatement'] = 'Pernyataan pengajuan tugas';
$string['submissionstatement_help'] = 'Pernyataan konfirmasi pengajuan tugas';
$string['submissionstatementacceptedlog'] = 'Pernyataan pengajuan diterima oleh pengguna {$a}';
$string['submissionstatementdefault'] = 'Ajuan tugas ini adalah karya saya sendiri, kecuali saya telah mengakui penggunaan karya orang lain.';
$string['submissionstatementrequired'] = 'Anda diharuskan untuk menyetujui pernyataan ini sebelum Anda dapat mengirimkannya.';
$string['submissionstatementteamsubmission'] = 'Pernyataan pengajuan grup';
$string['submissionstatementteamsubmission_help'] = 'Pernyataan bahwa setiap siswa harus menerima untuk mengajukan pekerjaan grup mereka.';
$string['submissionstatementteamsubmissionallsubmit'] = 'Pernyataan pengajuan grup dimana semua anggota grup menyerahkan';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Pernyataan pengajuan grup dimana semua anggota grup menyerahkan';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Ajuan ini adalah pekerjaan saya sendiri sebagai anggota grup, kecuali saya telah mengakui penggunaan karya orang lain.';
$string['submissionstatementteamsubmissiondefault'] = 'Pengajuan ini adalah karya grup saya, kecuali jika kami telah mengakui penggunaan karya orang lain.';
$string['submissionstatus'] = 'Status pengajuan';
$string['submissionstatus_'] = 'Belum mengajukan tugas';
$string['submissionstatus_draft'] = 'Draf (belum dikirim)';
$string['submissionstatus_marked'] = 'Telah dinilai';
$string['submissionstatus_new'] = 'Belum mengajukan';
$string['submissionstatus_reopened'] = 'Dibuka kembali';
$string['submissionstatus_submitted'] = 'Terkirim dan siap dinilai';
$string['submissionstatusheading'] = 'Status pengajuan tugas';
$string['submissionsummary'] = '{$a->status}. Terakhir diubah pada {$a->timemodified}';
$string['submissionteam'] = 'Grup';
$string['submissiontypes'] = 'Tipe pengajuan';
$string['submitaction'] = 'Ajukan';
$string['submitassignment'] = 'Ajukan penugasan';
$string['submitassignment_help'] = 'Setelah tugas ini diajukan, Anda tidak akan dapat melakukan perubahan lagi.';
$string['submitforgrading'] = 'Ajukan untuk dinilai';
$string['submitted'] = 'Terkirim';
$string['submittedearly'] = 'Penugasan diajukan {$a} lebih awal';
$string['submittedlate'] = 'Pengajuan penugasan terlambat {$a}';
$string['submittedlateshort'] = 'terlambat {$a}';
$string['submittedovertime'] = 'Pengajuan penugasan {$a} melebihi batas waktu';
$string['submittedundertime'] = 'Pengajuan penugasan {$a} sebelum batas waktu';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Pengaya umpan balik';
$string['subplugintype_assignfeedback_plural'] = 'Pengaya umpan balik';
$string['subplugintype_assignsubmission'] = 'Pengaya Pengajuan';
$string['subplugintype_assignsubmission_plural'] = 'Pengaya pengajuan';
$string['teamname'] = 'Tim: {$a}';
$string['teamsubmission'] = 'Siswa mengerjakan dalam grup';
$string['teamsubmission_help'] = 'Jika diaktifkan, siswa akan dibagi menjadi grup berdasarkan kumpulan grup bawaan atau pengelompokan kustom. Pengajuan grup akan dibagikan di antara anggota grup dan semua anggota grup akan melihat setiap perubahan lainnya pada pengajuan.';
$string['teamsubmissiongroupingid'] = 'Pengelompokan untuk grup siswa';
$string['teamsubmissiongroupingid_help'] = 'Ini adalah pengelompokan yang akan digunakan penugasan untuk menemukan grup untuk grup siswa. Jika tidak disetel, kumpulan grup bawaan akan digunakan.';
$string['textinstructions'] = 'Instruksi penugasan';
$string['timelimit'] = 'Batas waktu';
$string['timelimit_help'] = 'Jika diaktifkan, batas waktu dinyatakan pada halaman penugasan dan penghitung waktu mundur ditampilkan selama penugasan.';
$string['timelimitnotenabled'] = 'Batas waktu tidak diaktifkan untuk penugasan.';
$string['timelimitpassed'] = 'Batas waktu berakhir';
$string['timemodified'] = 'Terakhir diubah';
$string['timeremaining'] = 'Waktu tersisa';
$string['timeremainingcolon'] = 'Waktu tersisa: {$a}';
$string['togglezoom'] = 'Zum masuk/keluar bagian';
$string['ungroupedusers'] = 'Setelan \'Wajibkan grup untuk mengirimkan\' diaktifkan dan beberapa pengguna bukan anggota grup mana pun, atau anggota lebih dari satu grup, jadi tidak dapat mengirim.';
$string['ungroupedusersoptional'] = 'Setelan \'Siswa mengirimkan dalam grup\' diaktifkan dan beberapa pengguna bukan anggota grup mana pun, atau anggota lebih dari satu grup. Perlu diketahui bahwa siswa ini akan mengirimkan sebagai anggota \'Grup bawaan\'.';
$string['unlimitedattempts'] = 'Tak terbatas';
$string['unlimitedattemptsallowed'] = 'Upaya menjawab tak terbatas.';
$string['unlimitedpages'] = 'Tak terbatas';
$string['unlocksubmissionforstudent'] = 'Izinkan pengajuan untuk siswa: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Buka kunci pengajuan';
$string['unsavedchanges'] = 'Perubahan belum disimpan';
$string['unsavedchangesquestion'] = 'Ada perubahan nilai atau masukan yang belum disimpan. Apakah Anda ingin menyimpan perubahan dan melanjutkan?';
$string['updategrade'] = 'Perbarui nilai';
$string['updatetable'] = 'Simpan dan perbarui tabel';
$string['upgradenotimplemented'] = 'Peningkatan tidak diterapkan dalam pengaya ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Penetapan pengguna bawaan';
$string['userextensiondate'] = 'Perpanjangan diberikan sampai: {$a}';
$string['usergrade'] = 'Nilai pengguna';
$string['useridlistnotcached'] = 'Perubahan nilai TIDAK disimpan, karena tidak mungkin menentukan untuk pengiriman mana.';
$string['useroverrides'] = 'Penyampingan pengguna';
$string['useroverridesdeleted'] = 'Penyampingan pengguna dihapus';
$string['usersnone'] = 'Tidak ada siswa yang memiliki akses ke penugasan ini.';
$string['usersubmissioncannotberemoved'] = 'Pengajuan {$a} tidak dapat dihapus.';
$string['userswhoneedtosubmit'] = 'Pengguna yang perlu mengajukan: {$a}';
$string['validmarkingworkflowstates'] = 'Status alur kerja penilaian yang valid';
$string['viewadifferentattempt'] = 'Lihat upaya lain';
$string['viewbatchmarkingallocation'] = 'Lihat halaman kumpulan alokasi penilaian massal.';
$string['viewbatchsetmarkingworkflowstate'] = 'Lihat halaman kumpulan status alur kerja penilaian massal.';
$string['viewfeedback'] = 'Lihat umpan balik';
$string['viewfeedbackforuser'] = 'Lihat umpan balik untuk pengguna: {$a}';
$string['viewfull'] = 'Lihat penuh';
$string['viewfullgradingpage'] = 'Buka halaman penilaian lengkap untuk memberikan umpan balik';
$string['viewgradebook'] = 'Lihat buku nilai';
$string['viewgrader'] = 'Lihat Grader';
$string['viewgrading'] = 'Lihat semua ajuan';
$string['viewgradingformforstudent'] = 'Lihat halaman penilaian untuk siswa: (id = {$a->id}, fullname = {$a->fullname}).';
$string['viewownsubmissionform'] = 'Lihat halaman tugas pengiriman sendiri.';
$string['viewownsubmissionstatus'] = 'Lihat halaman status pengajuan sendiri.';
$string['viewrevealidentitiesconfirm'] = 'Lihat halaman konfirmasi identitas siswa.';
$string['viewsubmission'] = 'Lihat ajuan';
$string['viewsubmissionforuser'] = 'Lihat pengajuan untuk pengguna: {$a}';
$string['viewsubmissiongradingtable'] = 'Lihat tabel penilaian pengajuan.';
$string['viewsummary'] = 'Lihat ringkasan';
$string['workflowfilter'] = 'Filter Alur Kerja';
$string['xofy'] = '{$a->x} dari {$a->y}';
