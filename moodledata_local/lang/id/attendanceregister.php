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
 * Strings for component 'attendanceregister', language 'id', version '5.0'.
 *
 * @package     attendanceregister
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['are_you_sure_to_delete_offline_session'] = 'Apakah Anda yakin akan menghapus Sesi luring ini?';
$string['attendanceregister:addinstance'] = 'Tambahkan kehadiran baru';
$string['attendanceregister:addotherofflinesess'] = 'Dapat menambahkan Sesi Luring di Daftar orang lain';
$string['attendanceregister:addownofflinesess'] = 'Dapat menambahkan Sesi Luring pada Daftar miliknya sendiri';
$string['attendanceregister:deleteotherofflinesess'] = 'Dapat menghapus Sesi Luring di Daftar orang lain';
$string['attendanceregister:deleteownofflinesess'] = 'Dapat menghapus Sesi Luring dari Daftar miliknya sendiri';
$string['attendanceregister:recalcsessions'] = 'Dapat memaksa perhitungan ulang sesi Daftar Kehadiran';
$string['attendanceregister:tracked'] = 'Dilacak oleh Daftar Kehadiran';
$string['attendanceregister:viewotherregisters'] = 'Dapat melihat Daftar Kehadiran orang lain';
$string['attendanceregister:viewownregister'] = 'Dapat melihat Daftar Kehadirannya sendiri';
$string['back_to_normal'] = 'Kembali ke versi normal';
$string['back_to_tracked_user_list'] = 'Kembali ke daftar Pengguna yang dilacak';
$string['click_for_detail'] = 'klik untuk detailnya';
$string['comments'] = 'Komentar';
$string['completiondurationgroup'] = 'Total waktu yang dilacak';
$string['completiontotalduration'] = 'Membutuhkan waktu [menit]';
$string['count'] = '#';
$string['crontask'] = 'Hitung ulang sesi daftar kehadiran';
$string['dayscertificable'] = 'Beberapa hari yang lalu';
$string['dayscertificable_exceeded'] = 'Harus tidak lebih dari {$a} hari yang lalu';
$string['dayscertificable_help'] = 'Batasan berapa lama sesi luring dapat berlangsung.<br />
     Seorang siswa tidak boleh merekam Sesi Luring yang lebih lama dari jumlah hari ini.';
$string['duration'] = 'Durasi';
$string['duration_hh_mm'] = '{$a->hours} j, {$a->minutes} men';
$string['duration_mm'] = '{$a->minutes} men';
$string['enable_offline_sessions_certification'] = 'Aktifkan Sesi Luring';
$string['end'] = 'Akhir';
$string['first_calc_at_next_cron_run'] = 'Sesi apa pun yang lalu akan ditampilkan di Cron berikutnya';
$string['force_recalc_all_session'] = 'Hitung ulang semua Sesi daring';
$string['force_recalc_all_session_help'] = 'Hapus dan hitung ulang semua Sesi daring dari semua Pengguna yang dilacak.<br />
     Biasanya Anda <b>tidak perlu melakukannya</b>!<br />
     Sesi baru secara otomatis dihitung di latar belakang (setelah beberapa penundaan).<br />
     Operasi ini mungkin berguna <b>hanya</b>:
     <ul>
        <li>Setelah mengubah Peran Pengguna yang sebelumnya bertindak di salah satu Kursus yang dilacak dengan Peran yang berbeda
        (mis. mengubah dari Guru menjadi Siswa, saat Siswa dilacak dan Guru tidak).</li>
        <li>Setelah mengubah pengaturan Daftar yang memengaruhi perhitungan Sesi
        (mis. <i>Mode Pelacakan Kehadiran</i>, <i>Waktu habis Sesi Daring</i>)</li>
     </ul>
     Anda <b>tidak perlu menghitung ulang saat mendaftarkan Pengguna baru</b>!<br /><br />
     Penghitungan ulang dapat segera dilakukan atau dijadwalkan untuk dieksekusi oleh cron berikutnya.
     Eksekusi terjadwal dapat lebih efisien untuk kursus yang sangat padat.';
$string['force_recalc_all_session_now'] = 'Hitung Ulang Sesi, sekarang';
$string['force_recalc_user_session'] = 'Hitung ulang Sesi daring Pengguna ini';
$string['force_recalc_user_session_help'] = 'Hapus dan hitung ulang semua Sesi daring Pengguna ini.<br />
     Biasanya Anda <b>tidak perlu melakukannya</b>!<br />
     Sesi baru secara otomatis dihitung di latar belakang (setelah beberapa penundaan).<br />
     Operasi ini mungkin berguna <b>hanya</b>:
     <ul>
       <li>Setelah mengubah Peran Pengguna, dan sebelumnya ia bertindak di salah satu Kursus yang dilacak dengan Peran yang berbeda
       (mis. mengubah dari Guru menjadi Siswa, saat Siswa dilacak dan Guru tidak).</li>
       <li>Setelah mengubah pengaturan Daftar yang memengaruhi perhitungan Sesi
       (mis. <i>Mode Pelacakan Kehadiran</i>, <i>Waktu habis Sesi Daring</i>)</li>
     </ul>';
$string['fullname'] = 'Nama';
$string['grandtotal_time'] = 'Total Waktu';
$string['insert_new_offline_session'] = 'Masukkan sesi kerja luring baru';
$string['insert_new_offline_session_for_another_user'] = 'Masukkan sesi kerja luring baru untuk {$a->fullname}';
$string['last_calc_online_session_logout'] = 'Daftar Terakhir daring Sesi Akhir (tidak termasuk Sesi saat ini)';
$string['last_session_logout'] = 'Sesi Terakhir Berakhir';
$string['last_site_access'] = 'Aktivitas terakhir di Situs';
$string['last_site_login'] = 'Masuk terakhir di Situs';
$string['login_must_be_before_logout'] = 'Mulai setelah akhir!';
$string['logout_is_future'] = 'Mungkin tidak di masa depan';
$string['mandatory_offline_sessions_comments'] = 'Komentar Wajib';
$string['mandatoryofflinespecifycourse'] = 'Pemilihan Kursus Wajib';
$string['mandatoryofflinespecifycourse_help'] = 'Menentukan Kursus pada Sesi Luring adalah hal yang wajib';
$string['maynotaddselfcertforother'] = 'Anda tidak dapat menambahkan sesi luring untuk pengguna lain.';
$string['mod_attendance_recalculation'] = 'Modul menghitung ulang log untuk pembaruan sesi';
$string['modulename'] = 'Daftar Kehadiran';
$string['modulename_help'] = 'Daftar Kehadiran menghitung waktu yang dihabiskan pengguna untuk mengerjakan Kursus daring.<br />
      Secara opsional, izinkan Pengguna mencatat aktivitas Luring.<br />
      Tergantung pada Mode Kehadiran, Daftar dapat melacak aktivitas dalam satu Kursus, di semua Kursus dalam Kategori yang sama
      atau di semua Kursus yang "tertaut secara Meta" dengan Kursus tempat Register berada.<br />
      Sesi kerja daring dihitung berdasarkan entri Log yang direkam oleh Moodle.<br />
      <b>Sesi daring baru ditambahkan dengan beberapa penundaan oleh cron, setelah Pengguna keluar.</b>';
$string['modulenameplural'] = 'Daftar Kehadiran';
$string['myattendanceregisteraggregates'] = 'Daftar kehadiran saya mengumpulkan nilai-nilai';
$string['myattendanceregistersessions'] = 'Daftar kehadiran saya di sesi ini';
$string['never'] = '(tidak pernah)';
$string['no_refcourse'] = '(tidak ada Kursus yang ditentukan)';
$string['no_session'] = 'Tidak ada sesi';
$string['no_session_for_this_user'] = '- Belum ada Sesi untuk Pengguna ini -';
$string['no_tracked_user'] = '- Tidak ada Pengguna yang dilacak oleh Daftar Kehadiran ini -';
$string['not_specified'] = '(tidak ditentukan)';
$string['offline'] = 'Luring';
$string['offline_refcourse_duration'] = 'Waktu Luring, Kursus:';
$string['offline_session_comments'] = 'Komentar';
$string['offline_session_comments_help'] = 'Jelaskan topik sesi kerja luring.';
$string['offline_session_deleted'] = 'Sesi Luring dihapus';
$string['offline_session_end'] = 'Akhir';
$string['offline_session_ref_course'] = 'Ref.Kursus';
$string['offline_session_ref_course_help'] = 'Pilih Kursus di mana pekerjaan luring telah dilakukan atau Kursus yang mencakup topik pekerjaan.';
$string['offline_session_saved'] = 'Sesi Luring Baru disimpan';
$string['offline_session_start'] = 'Mulai';
$string['offline_session_start_help'] = 'Pilih Tanggal & Waktu Mulai dan Akhir Sesi kerja luring yang ingin Anda kirimkan.<br />
    Sesi Luring tidak boleh tumpang tindih dengan sesi yang direkam sebelumnya, baik daring maupun luring, maupun sesi daring saat ini.';
$string['offline_sessions_certification'] = 'Sesi kerja luring';
$string['offline_sessions_certification_help'] = 'Memungkinkan Pengguna untuk memasukkan Sesi luring dari pekerjaan.<br />
     Ini adalah semacam <i>Sertifikasi Mandiri</i> dari pekerjaan yang telah dilakukan.<br />
     Ini mungkin berguna jika "birokrasi" mengharuskan pemeliharaan daftar aktivitas setiap siswa.<br />
     Hanya pengguna sungguhan yang dapat menambahkan Sesi Luring: <i>Masuk sebagai...</i> admin tidak dapat!';
$string['offline_sessions_total_duration'] = 'Total Waktu Luring';
$string['offlinecomments'] = 'Komentar Pengguna';
$string['offlinecomments_help'] = 'Aktifkan penambahan komentar tekstual ke Sesi Luring';
$string['offlinespecifycourse'] = 'Tentukan Kursus dalam Sesi Luring';
$string['offlinespecifycourse_help'] = 'Izinkan pengguna untuk memilih Kursus yang terkait dengan Sesi Luring.<br />
    Hal ini hanya berarti jika Daftar melacak lebih dari satu Kursus (misalnya Mode Kehadiran adalah "Kategori" atau "Meta-linked")';
$string['online'] = 'Daring';
$string['online_offline'] = 'Daring/Luring';
$string['online_session_updated'] = 'Sesi Daring diperbarui';
$string['online_session_updated_report'] = 'Sesi Daring {$a->fullname} diperbarui: {$a->numnewsessions} baru ditemukan';
$string['online_sessions_total_duration'] = 'Sesi Daring Total Waktu';
$string['onlyrealusercanaddofflinesessions'] = 'Hanya pengguna asli yang dapat menambahkan sesi luring';
$string['onlyrealusercandeleteofflinesessions'] = 'Hanya pengguna asli yang dapat menghapus sesi luring';
$string['overlaps_current_session'] = 'Tumpang tindih dengan Sesi daring saat ini (sejak Masuk saat ini)';
$string['overlaps_old_sessions'] = 'Bertumpang tindih dengan Sesi lain, baik daring maupun luring';
$string['participants_attendance_report_viewed'] = 'Laporan kehadiran peserta dilihat';
$string['pluginadministration'] = 'Administrasi Daftar Kehadiran';
$string['pluginname'] = 'Daftar Kehadiran';
$string['prev_site_login'] = 'Masuk sebelumnya di Situs';
$string['privacy:metadata:attendanceregister_aggregate'] = 'Melacak sesi yang dikumpulkan per pengguna';
$string['privacy:metadata:attendanceregister_aggregate:duration'] = 'Durasi sesi';
$string['privacy:metadata:attendanceregister_aggregate:grandtotal'] = 'Total waktu keseluruhan';
$string['privacy:metadata:attendanceregister_aggregate:lastsessionlogout'] = 'Sesi daring pengguna terakhir keluar, diambil dari keluar attendanceregister_session';
$string['privacy:metadata:attendanceregister_aggregate:onlinesess'] = 'Apakah sesinya daring atau luring';
$string['privacy:metadata:attendanceregister_aggregate:refcourse'] = 'Kursus yang sesi luringnya disebut';
$string['privacy:metadata:attendanceregister_aggregate:total'] = 'Total waktu sesi';
$string['privacy:metadata:attendanceregister_aggregate:userid'] = 'ID pengguna';
$string['privacy:metadata:attendanceregister_lock'] = 'Mengunci daftar kehadiran pengguna selama perhitungan ulang';
$string['privacy:metadata:attendanceregister_lock:userid'] = 'Untuk menghitung ulang daftar pengguna, kami menyimpan userid sesi. Data ini bersifat sementara dan dihapus setelah perhitungan ulang sesi selesai.';
$string['privacy:metadata:attendanceregister_session'] = 'Melacak sesi pengguna';
$string['privacy:metadata:attendanceregister_session:addedbyuserid'] = 'Jika sesi luring dimasukkan oleh pengguna lain, ini adalah userid terkait';
$string['privacy:metadata:attendanceregister_session:comments'] = 'Komentar sesi luring';
$string['privacy:metadata:attendanceregister_session:duration'] = 'Durasi sesi';
$string['privacy:metadata:attendanceregister_session:login'] = 'Stempel waktu masuk';
$string['privacy:metadata:attendanceregister_session:logout'] = 'Stempel waktu keluar';
$string['privacy:metadata:attendanceregister_session:onlinesess'] = 'Apakah sesinya daring atau luring';
$string['privacy:metadata:attendanceregister_session:refcourse'] = 'Kursus yang sesi luringnya disebut';
$string['privacy:metadata:attendanceregister_session:userid'] = 'ID pengguna';
$string['recalc_already_pending'] = '(Sudah menunggu untuk dieksekusi pada Cron berikutnya)';
$string['recalc_complete'] = 'Perhitungan Ulang Sesi selesai';
$string['recalc_scheduled'] = 'Perhitungan ulang sesi telah dijadwalkan. Ini akan dijalankan pada Cron berikutnya';
$string['recalc_scheduled_on_next_cron'] = 'Perhitungan ulang sesi dijadwalkan untuk dieksekusi pada Cron berikutnya';
$string['ref_course'] = 'Ref.Kursus';
$string['registername'] = 'Nama Daftar Kehadiran';
$string['registertype'] = 'Mode Pelacakan Kehadiran';
$string['registertype_help'] = 'Mode Pelacakan Kehadiran menentukan Kursus yang dilacak oleh Daftar (yaitu tempat aktivitas pengguna akan dipantau):
* _Hanya kursus ini: Hanya di Kursus tempat modul Daftar Kehadiran berada.
* _Semua Kursus dalam Kategori yang sama_: aktivitas akan dipantau di semua Kursus dalam Kategori yang sama dengan Kursus tempat modul berada.
* _Semua Kursus yang ditautkan oleh tautan meta Kursus_: Aktivitas akan dipantau di Kursus ini dan semua Kursus yang ditautkan oleh tautan meta Kursus.';
$string['schedule_reclalc_all_session'] = 'Jadwal Hitung Ulang Sesi';
$string['select_a_course'] = '- Pilih Kursus -';
$string['select_a_course_if_any'] = '- Pilih Kursus, jika ada -';
$string['session_added_by_another_user'] = 'Ditambahkan oleh: {$a}';
$string['sessions_grandtotal_duration'] = 'Total Waktu Keseluruhan';
$string['sessiontimeout'] = 'Batas waktu sesi daring';
$string['sessiontimeout_help'] = 'Batas Waktu Sesi digunakan untuk memperkirakan durasi Sesi Daring.<br />
    Sesi Daring akan setidaknya <b>setengah</b> dari Batas Waktu Sesi.<br />
    Perlu diketahui bahwa jika Batas Waktu Sesi terlalu panjang, Register cenderung melebih-lebihkan durasi Sesi Daring.<br />
    Jika terlalu pendek, Sesi sebenarnya akan terbagi dalam beberapa Sesi yang lebih pendek.<br />
    <h3>Penjelasan panjang</h3>
    Sesi kerja daring <b>diperkirakan</b> dengan melihat entri Log Pengguna dalam Kursus yang dilacak
    (lihat <i>Mode Pelacakan Kehadiran</i>).<br/>
    Jika rentang waktu yang lebih pendek dari Batas Waktu Sesi berlalu di antara dua Entri Log yang berurutan,
    Daftar menganggap Pengguna terus bekerja daring (yaitu Sesi berlanjut).<br />
    Jika rentang waktu yang lebih lama dari Batas Waktu Sesi berlalu, Daftar memperkirakan Pengguna berhenti bekerja daring
    <b>setengah</b> Batas Waktu Sesi setelah Entri Log sebelumnya (misalnya Sesi berakhir) dan
    kembali lagi pada Entri Log berikut (mis. Sesi baru dimulai)';
$string['show_my_sessions'] = 'Tampilkan sesi saya';
$string['show_printable'] = 'Tampilkan versi yang dapat dicetak';
$string['standardlog_disabled'] = 'Log Moodle Standard dinonaktifkan. Semua sesi pengguna baru tidak dilacak';
$string['standardlog_readonly'] = 'Log Moodle Standard bersifat hanya-baca. Semua sesi pengguna baru tidak dilacak';
$string['start'] = 'Mulai';
$string['total_time_offline'] = 'Total Waktu Luring';
$string['total_time_online'] = 'Total Waktu Daring';
$string['tracked_courses'] = 'Kursus yang dilacak';
$string['tracked_users'] = 'Pengguna yang dilacak';
$string['type_category'] = 'Semua Kursus dalam Kategori yang Sama';
$string['type_course'] = 'Kursus ini hanya';
$string['type_meta'] = 'Semua Kursus ditautkan oleh tautan meta Kursus';
$string['unknown'] = '(tidak dikenal)';
$string['unreasoneable_session'] = 'Apakah Anda yakin? Ini lebih dari {$a} jam!';
$string['updating_online_sessions_of'] = 'Memperbarui Sesi daring {$a}';
$string['user_attendance_addoffline'] = 'Pengguna menambahkan entri kehadiran luring';
$string['user_attendance_deloffline'] = 'Pengguna menghapus entri kehadiran luring';
$string['user_attendance_details_viewed'] = 'Detail kehadiran pengguna dilihat';
$string['user_sessions_summary'] = 'Ringkasan Sesi Pengguna';
