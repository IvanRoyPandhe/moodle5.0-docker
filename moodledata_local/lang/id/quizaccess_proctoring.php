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
 * Strings for component 'quizaccess_proctoring', language 'id', version '5.0'.
 *
 * @package     quizaccess_proctoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aksi';
$string['cancel_image_upload'] = 'Unggahan gambar yang dibatalkan';
$string['dateverified'] = 'Tanggal dan waktu';
$string['eprotroringreports'] = 'Laporan proktor untuk:';
$string['eprotroringreportsdesc'] = 'Di laporan ini Anda akan menemukan semua foto siswa yang diambil selama ujian. Sekarang Anda dapat memvalidasi identitas mereka, seperti foto profil dan foto kamera mereka.';
$string['execute_facematch_task'] = 'Lakukan pencocokan wajah';
$string['image_updated'] = 'Foto diperbarui';
$string['initiate_facematch_task'] = 'Mulai pencocokan wajah';
$string['mainsettingspagebtn'] = 'Pengaturan Proktor';
$string['modal:facevalidation'] = 'Wajah Tervalidasi:';
$string['modal:pending'] = 'Tertunda';
$string['modal:validateface'] = 'Pengenalan Validasi Wajah';
$string['name'] = 'Nama Siswa';
$string['no_permission'] = 'Anda tidak memiliki izin untuk melihat halaman ini';
$string['notpermissionreport'] = 'Laporan proktor dinonaktifkan untuk Anda.';
$string['notrequired'] = 'tidak wajib';
$string['openwebcam'] = 'Izinkan kamera & bagikan layar untuk melanjutkan';
$string['picturesreport'] = 'Lihat laporan proktor';
$string['picturesusedreport'] = 'Ada foto yang diambil selama kuis.';
$string['pluginname'] = 'Proktor';
$string['privacy:core_files'] = 'Proktor QuizAccess foto kamera';
$string['privacy:metadata'] = 'Kami tidak membagikan data pribadi apapun dengan pihak ketiga.';
$string['privacy:metadata:core_files'] = 'Quiz Access menyimpan foto pengguna yang telah ditangkap dengan kamera selama percobaan kuis.';
$string['privacy:metadata:courseid'] = 'ID kursus yang menggunakan proktor.';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Proktor QuizAccess Moodle mencatat tabel yang menyimpan foto pengguna.';
$string['privacy:metadata:quizid'] = 'ID kuis yang menggunakan proktor.';
$string['privacy:metadata:status'] = 'Status proktor.';
$string['privacy:metadata:webcampicture'] = 'Nama foto yang diambil oleh proktor.';
$string['proctoring:getcamshots'] = 'Proktor mengambil foto kamera';
$string['proctoring:sendcamshot'] = 'Proktor mengirim foto kamera';
$string['proctoring:viewreport'] = 'Proktor melihat laporan';
$string['proctoringheader'] = '<strong>Untuk mengerjakan kuis, Anda harus mengaktifkan kamera, dan sistem akan mengambil foto Anda secara acak selama pengerjaan kuis.</strong>';
$string['proctoringlabel'] = 'Saya setuju dengan proses validasi.';
$string['proctoringrequired'] = 'Validasi identitas kamera';
$string['proctoringrequired_help'] = 'Jika Anda mengaktifkan opsi ini, siswa tidak akan dapat memulai percobaan sebelum mereka melakukan ceklis kotak yang mengonfirmasi bahwa mereka sadar dengan kebijakan terkait kamera.';
$string['proctoringrequiredoption'] = 'harus diakui sebelum memulai percobaan';
$string['proctoringstatement'] = 'Ujian ini membutuhkan akses bagi-layar dan kamera.<br />(Mohon bagikan layar dan izinkan akses kamera).';
$string['provide_image'] = 'Anda harus memberikan foto dari siswa tersebut';
$string['quizaccess_proctoring'] = 'Proktor QuizAccess';
$string['setting:bs_api'] = 'API Layanan BS';
$string['setting:bs_apidesc'] = 'Titik akhir API layanan BS';
$string['setting:bs_apifacematchthreshold'] = 'Ambang';
$string['setting:bs_bs_apifacematchthresholddesc'] = 'Persentase untuk verifikasi wajah';
$string['setting:camshotdelay'] = 'Jeda tangkapan foto (dalam detik)';
$string['setting:camshotdelay_desc'] = 'Nilai yang diberikan adalah penundaan dalam hitungan detik antara setiap pengambilan gambar';
$string['setting:camshotwidth'] = 'Panjang gambar tangkapan foto (dalam piksel)';
$string['setting:camshotwidth_desc'] = 'Nilai yang diberikan akan menjadi panjang gambar tangkapan foto. Tinggi gambar akan diskala.';
$string['setting:facematch'] = 'Jumlah pencocokan wajah tiap kuis';
$string['setting:facematchdesc'] = 'Jumlah pencocokan wajah tiap kuis. (-1 untuk cocokkan semua)';
$string['setting:fc_method'] = 'Metode Pencocokan Wajah (BS/AWS)';
$string['setting:fc_methoddesc'] = 'Layanan untuk mencocokkan wajah. (AWS/BS)';
$string['setting:fcthreshold'] = 'Persentase ambang pencocokan wajah.';
$string['setting:fcthresholddesc'] = 'Persentase ambang pencocokan wajah.';
$string['settings:deleteallsuccess'] = 'Semua foto berhasil dihapus.';
$string['settings:deleteuserimagesuccess'] = 'Foto pengguna berhasil dihapus.';
$string['settings:fcheckquizstart'] = 'Validasi ID wajah saat memulai kuis';
$string['settings:fcheckquizstart_desc'] = 'Validasi ID wajah saat memulai kuis (jika "ya", pengguna harus memvalidasi ID wajah untuk memulai kuis).';
$string['settingscontroll:deleteall'] = 'Hapus Semua Data Proktor';
$string['status'] = 'Status validasi';
$string['summarypagedesc'] = 'Di laporan ini, Anda akan mendapatkan ringkasan dari laporan proktor untuk kursus dan kuis. Anda dapat menghaspus semua data terkait kursus dan kuis. Itu akan menghapus gambar foto dan catatan.';
$string['timemodified'] = 'Terakhir kali dimodifikasi';
$string['upload_first_image'] = 'Mohon unggah foto pengguna.';
$string['upload_image_title'] = 'Unggah foto';
$string['users_list'] = 'Daftar Pengguna';
$string['warning:cameraallowwarning'] = 'Mohon izinkan akses kamera.';
$string['warninglabel'] = 'Peringatan';
$string['webcampicture'] = 'Tangkapan Foto';
$string['youmustagree'] = 'Anda harus setuju untuk memvalidasi identitas sebelum melanjutkan.';
