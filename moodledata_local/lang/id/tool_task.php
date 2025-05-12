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
 * Strings for component 'tool_task', language 'id', version '5.0'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aksi';
$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'Antrian tugas ad hoc kosong';
$string['adhocqueueold'] = 'Tugas terlama yang belum diproses adalah {$a->age}, yang lebih dari {$a->max}';
$string['adhocqueuesize'] = 'Untuk antrian tugas ini memiliki  {$a} tugas';
$string['adhoctaskid'] = 'ID tugas ad hoc: {$a}';
$string['adhoctaskrun'] = 'Menjalankan tugas ad hoc dimulai';
$string['adhoctasks'] = 'Tugas ad hoc';
$string['adhoctasksdue'] = 'Tugas ad hoc jatuh tempo';
$string['adhoctasksfailed'] = 'Tugas ad hoc gagal';
$string['adhoctasksfuture'] = 'Tugas ad hoc mendatang';
$string['adhoctasksrunning'] = 'Tugas ad hoc berjalan';
$string['asap'] = '<abbr title="Sesegera mungkin">Secepatnya</abbr>';
$string['backtoadhoctasks'] = 'Kembali ke tugas ad hoc';
$string['backtoscheduledtasks'] = 'Kembali ke tugas terjadwal';
$string['blocking'] = 'Pemblokiran';
$string['cannotfindthepathtothecli'] = 'Tidak dapat menemukan jalur ke PHP CLI yang dapat dieksekusi sehingga eksekusi tugas dibatalkan. Setel setelan \'Jalur ke PHP CLI\' di jalur administrasi Situs / Server / Sistem.';
$string['checkadhocqueue'] = 'Untuk antrian tugas ini';
$string['checkcronrunning'] = 'Cron berjalan';
$string['checklongrunningtaskcount'] = 'Tugas yang berjalan lama: {$a}';
$string['checklongrunningtasks'] = 'Tugas yang berjalan lama';
$string['checkmaxfaildelay'] = 'Penundaan kegagalan maks tugas';
$string['classname'] = 'Nama class';
$string['clearfaildelay_confirm'] = 'Yakin ingin menghapus penundaan kegagalan untuk tugas \'{$a}\'? Setelah menyelesaikan penundaan, tugas akan berjalan sesuai dengan jadwal normalnya.';
$string['component'] = 'Komponen';
$string['confirmdeletetaskwithid'] = 'Apakah Anda yakin ingin menghapus tugas dengan id: {$a->id}?';
$string['corecomponent'] = 'Inti';
$string['crondisabled'] = 'Cron dinonaktifkan. Tidak ada tugas baru yang akan dimulai. Sistem tidak akan beroperasi dengan benar sampai diaktifkan kembali.';
$string['cronok'] = 'Cron sering berjalan';
$string['default'] = 'Cron sering berjalan';
$string['defaultx'] = 'Bawaan: {$a}';
$string['deleteadhoctask'] = 'Hapus tugas ad hoc {$a}';
$string['disabled'] = 'Dinonaktifkan';
$string['disabled_help'] = 'Tugas terjadwal yang dinonaktifkan tidak dijalankan dari cron, namun tetap dapat dijalankan secara manual melalui alat CLI.';
$string['edittaskschedule'] = 'Edit jadwal tugas: {$a}';
$string['enablerunnow'] = 'Modifikasi pada daftar tugas terjadwal telah dicegah dalam konfigurasi Moodle';
$string['enablerunnow_desc'] = 'Izinkan administrator untuk segera menjalankan satu tugas terjadwal, daripada menunggu untuk berjalan sesuai jadwal. Fitur ini memerlukan \'Jalur ke PHP CLI\' (pathtophp) untuk disetel di jalur Sistem. Tugas berjalan di server web, jadi Anda mungkin ingin menonaktifkan fitur ini untuk menghindari kemungkinan masalah kinerja.';
$string['faildelay'] = 'Kegagalan penundaan';
$string['failed'] = 'Gagal';
$string['fromcomponent'] = 'Dari komponen: {$a}';
$string['hostname'] = 'Nama hos';
$string['lastcronstart'] = 'Waktu sejak cron dijalankan terakhir: {$a}';
$string['lastruntime'] = 'Proses terakhir';
$string['lastupdated'] = 'Terakhir diperbarui {$a}.';
$string['nextruntime'] = 'Proses berikutnya';
$string['noclassname'] = 'Nama class tidak ditentukan';
$string['notasks'] = 'Tidak ada tugas untuk dijalankan';
$string['payload'] = 'Muatan';
$string['pid'] = 'ID Proses';
$string['plugindisabled'] = 'Pengaya dinonaktifkan';
$string['pluginname'] = 'Konfigurasi tugas terjadwal';
$string['privacy:metadata'] = 'Pengaya konfigurasi tugas terjadwal tidak menyimpan data pribadi apa pun.';
$string['resettasktodefaults'] = 'Setel ulang jadwal tugas ke bawaan';
$string['resettasktodefaults_help'] = 'Ini akan membuang perubahan lokal dan mengembalikan jadwal untuk tugas ini kembali ke setelan aslinya.';
$string['run_adhoctasks'] = 'Jalankan tugas ad hoc';
$string['runadhoc'] = 'Jalankan tugas ad hoc sekarang?';
$string['runadhoc_confirm'] = 'Tugas akan dijalankan di server web dan mungkin perlu waktu untuk diselesaikan.';
$string['runadhoctask'] = 'Jalankan \'{$a->task}\' ID tugas {$a->taskid}';
$string['runadhoctasks'] = 'Jalankan semua tugas \'{$a}\'';
$string['runadhoctasksfailed'] = 'Jalankan tugas \'{$a}\' yang gagal';
$string['runagain'] = 'Jalankan lagi';
$string['runclassname'] = 'Jalankan semua';
$string['runclassnamedueonly'] = 'Jalankan hanya karena jatuh tempo';
$string['runclassnamefailedonly'] = 'Gagal menjalankan semua';
$string['runningalltasks'] = 'Menjalankan semua tugas';
$string['runningfailedtasks'] = 'Menjalankan tugas yang gagal';
$string['runningtasks'] = 'Tugas sedang berjalan sekarang';
$string['runnow'] = 'Jalankan sekarang';
$string['runnow_confirm'] = 'Yakin ingin menjalankan tugas \'{$a}\' ini sekarang? Tugas akan berjalan di server web dan mungkin memerlukan beberapa waktu untuk diselesaikan.';
$string['runpattern'] = 'Pola proses';
$string['scheduled'] = 'Terjadwal';
$string['scheduledtaskchangesdisabled'] = 'Modifikasi pada daftar tugas terjadwal telah dicegah dalam konfigurasi Moodle';
$string['scheduledtasks'] = 'Penjadwalan tugas';
$string['showall'] = 'Tampilkan semua';
$string['showfailedonly'] = 'Hanya tampilkan yang gagal';
$string['showsummary'] = 'Tampilkan ringkasan tugas ad hoc';
$string['slowtask'] = 'Tugas telah berjalan lebih dari {$a}';
$string['started'] = 'Dimulai';
$string['taskage'] = 'Proses';
$string['taskdetails'] = 'Tugas berjalan lebih dari {$a->time} (max {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Tugas dinonaktifkan';
$string['taskfailures'] = '{$a} tugas gagal';
$string['taskid'] = 'ID tugas';
$string['tasklogs'] = 'Log tugas';
$string['tasknofailures'] = 'Tidak ada tugas yang gagal';
$string['taskrunningtime'] = 'Tugas telah berjalan selama {$a}';
$string['taskscheduleday'] = 'Hari';
$string['taskscheduleday_help'] = 'Ruas hari dalam bulan untuk jadwal tugas. Ruas ini menggunakan format yang sama dengan unix cron. Beberapa contohnya adalah: * <strong>*</strong> Setiap hari * <strong>*/2</strong> Setiap hari ke-2 * <strong>1</strong> Hari pertama setiap bulan * <strong>1,15 </strong> Tanggal satu dan lima belas setiap bulan';
$string['taskscheduledayofweek'] = 'Hari dalam seminggu';
$string['taskscheduledayofweek_help'] = 'Hari dalam seminggu untuk jadwal tugas. Ruas ini menggunakan format yang sama dengan unix cron. Beberapa contohnya adalah: * <strong>*</strong> Setiap hari * <strong>0</strong> Setiap Minggu * <strong>6</strong> Setiap Sabtu * <strong>1,5</strong> Setiap Senin dan Jumat';
$string['taskschedulehour'] = 'Jam';
$string['taskschedulehour_help'] = 'Ruas jam untuk jadwal tugas. Bidang ini menggunakan format yang sama dengan unix cron. Beberapa contohnya adalah: * <strong>*</strong> Setiap jam * <strong>*/2</strong> Setiap 2 jam * <strong>2-10</strong> Setiap jam dari pukul 02:00 hingga 10:00 (inkusif) * <strong>2,6,9</strong> 02:00, 06:00, dan 09:00';
$string['taskscheduleminute'] = 'Menit';
$string['taskscheduleminute_help'] = 'Ruas menit untuk jadwal tugas. Ruas ini menggunakan format yang sama dengan unix cron. Beberapa contohnya adalah: * <strong>*</strong> Setiap menit * <strong>*/5</strong> Setiap 5 menit * <strong>2-10</strong> Setiap menit antara pukul 2 dan 10 lewat satu jam ( inklusif) * <strong>2,6,9</strong> 2, 6, dan 9 menit melewati jam';
$string['taskschedulemonth'] = 'Bulan';
$string['taskschedulemonth_help'] = 'Ruas bulan untuk jadwal tugas. Ruas ini menggunakan format yang sama dengan unix cron. Beberapa contohnya adalah: * <strong>*</strong> Setiap bulan * <strong>*/2</strong> Setiap bulan kedua * <strong>1</strong> Setiap Januari * <strong>1,5</strong > Setiap Januari dan Mei';
$string['viewlogs'] = 'Lihat log untuk {$a}';
