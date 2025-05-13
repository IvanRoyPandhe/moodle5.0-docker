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
 * Strings for component 'completion', language 'id', version '5.0'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Pencapaian nilai';
$string['achievingpassinggrade'] = 'Mencapai nilai kelulusan';
$string['activities'] = 'Aktivitas';
$string['activitiescompleted'] = 'Penyelesaian aktivitas';
$string['activitiescompletednote'] = 'Catatan: Penyelesaian aktivitas harus disetel untuk aktivitas yang terlihat pada daftar di atas.';
$string['activitieslabel'] = 'Aktivitas / Sumber';
$string['activityaggregation'] = 'Syarat yang dibutuhkan';
$string['activityaggregation_all'] = 'SEMUA aktivitas terpilih yang harus diselesaikan';
$string['activityaggregation_any'] = 'SETIAP aktivitas terpilih yang harus diselesaikan';
$string['activitycompletion'] = 'Kondisi penyelesaian';
$string['activitycompletionupdated'] = 'Perubahan tersimpan';
$string['activitygradetopassnotset'] = 'Aktivitas ini tidak memiliki nilai yang valid untuk lulus. Ini dapat diatur di bagian Penilaian pada setelan aktivitas.';
$string['addconditions'] = 'Tambahkan kondisi';
$string['affectedactivities'] = 'Perubahan akan memengaruhi aktivitas atau sumber <b> {$a} </b> berikut:';
$string['aggregationmethod'] = 'Metode agregasi';
$string['all'] = 'Semua';
$string['allconditions'] = 'Aktivitas selesai ketika siswa melakukan semua hal berikut:';
$string['any'] = 'Setiap';
$string['approval'] = 'Persetujuan';
$string['areyousureoverridecompletion'] = 'Apakah Anda yakin ingin mengesampingkan kondisi penyelesaian saat ini dari aktivitas ini untuk pengguna ini dan menandainya "{$a}"?';
$string['badautocompletion'] = 'Anda harus memilih setidaknya satu kondisi.';
$string['badcompletiongradeitemnumber'] = 'Nilai wajib tidak dapat diaktifkan untuk <b> {$a} </b> karena penilaian oleh {$a} tidak diaktifkan.';
$string['bulkactivitycompletion'] = 'Edit massal penyelesaian aktivitas';
$string['bulkactivitydetail'] = 'Pilih aktivitas yang ingin Anda edit massal.';
$string['bulkcompletiontracking'] = 'Pelacakan penyelesaian';
$string['bulkcompletiontracking_help'] = '<strong> Tidak ada: </strong> Jangan tunjukkan penyelesaian aktivitas <strong> Manual: </strong> Siswa dapat menandai selesai aktivitas secara manual <strong> Dengan ketentuan: </ strong> Tampilkan aktivitas selesai jika kondisi sesuai';
$string['checkactivity'] = 'Kotak centang untuk aktivitas/sumber: {$a}';
$string['checkall'] = 'Centang atau hapus centang semua aktivitas dan sumber';
$string['checkallsection'] = 'Centang atau hapus centang semua aktivitas dan sumber pada topik berikut: {$a}';
$string['completeactivity'] = 'Selesaikan aktivitas';
$string['completed'] = 'Selesai';
$string['completedunlocked'] = 'Opsi penyelesaian tidak terkunci';
$string['completedunlockedtext'] = 'Saat Anda menyimpan formulir ini, data penyelesaian akan dihapus kemudian dihitung ulang jika memungkinkan. Untuk menghindari hal ini, Anda dapat keluar tanpa menyimpan.';
$string['completedwarning'] = 'Opsi penyelesaian terkunci';
$string['completedwarningtext'] = 'Aktivitas ini ditandai selesai untuk satu atau beberapa siswa. Jika Anda membuka kunci setelan untuk melakukan perubahan lalu menyimpan formulir, data penyelesaian akan dihapus lalu dihitung ulang kembali.';
$string['completion'] = 'Pelacakan penyelesaian';
$string['completion-alt-auto-enabled'] = 'Sistem menandai item ini selesai berdasarkan kondisi: {$a}';
$string['completion-alt-auto-fail'] = 'Selesai: {$a} (belum mencapai nilai kelulusan)';
$string['completion-alt-auto-n'] = 'Belum selesai: {$a}';
$string['completion-alt-auto-n-override'] = 'Tidak selesai: {$a->modname} (ditetapkan oleh {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Selesai: {$a} (telah mencapai nilai kelulusan)';
$string['completion-alt-auto-y'] = 'Selesai: {$a}';
$string['completion-alt-auto-y-override'] = 'Selesai: {$a->modname} (ditetapkan oleh {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Siswa dapat menandai selesai secara manual aktivitas ini: {$a}';
$string['completion-alt-manual-n'] = 'Tidak selesai: {$a}. Pilih untuk menandai menjadi selesai.';
$string['completion-alt-manual-n-override'] = 'Tidak selesai: {$a->modname} (disetel oleh {$a->overrideuser}). Pilih untuk menandai menjadi selesai.';
$string['completion-alt-manual-y'] = 'Selesai: {$a}. Pilih untuk menandai sebagai tidak selesai.';
$string['completion-alt-manual-y-override'] = 'Selesai: {$a->modname} (disetel oleh {$a->overrideuser}). Pilih untuk menandai menjadi tidak selesai.';
$string['completion-fail'] = 'Selesai (tidak mencapai nilai kelulusan)';
$string['completion-n'] = 'Tidak selesai';
$string['completion-n-override'] = 'Belum selesai (ditetapkan oleh {$a})';
$string['completion-pass'] = 'Selesai (mencapai nilai kelulusan)';
$string['completion-y'] = 'Selesai';
$string['completion-y-override'] = 'Selesai (ditetapkan oleh {$a})';
$string['completion_automatic'] = 'Tambahkan persyaratan';
$string['completion_help'] = 'Jika diaktifkan, penyelesaian aktivitas dilacak, baik secara manual atau otomatis, berdasarkan kondisi tertentu. Beberapa kondisi dapat diatur jika diinginkan. Jika demikian, aktivitas hanya akan dianggap lengkap jika SEMUA ketentuan terpenuhi. Tanda centang di sebelah nama aktivitas pada halaman saja menunjukkan kapan aktivitas selesai.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Siswa harus secara manual menandai aktivitas sebagai selesai';
$string['completion_none'] = 'None';
$string['completion_status'] = 'Status penyelesaian';
$string['completionactivitydefault'] = 'Gunakan aktivitas bawaan';
$string['completionanygrade_desc'] = 'grade apa pun';
$string['completiondisabled'] = 'Dinonaktifkan, tidak ditampilkan dalam setelan aktivitas';
$string['completionduration'] = 'Pendaftaran';
$string['completionenabled'] = 'Diaktifkan, kontrol melalui penyelesaian dan setelan aktivitas';
$string['completionexpected'] = 'Setel pengingat di lini masa';
$string['completionexpected_help'] = 'Ini memungkinkan Anda menyetel pengingat bagi siswa untuk mengerjakan aktivitas ini. Ini akan muncul di blok Lini masa di Dasbor mereka karena "{$a} memerlukan tindakan".';
$string['completionexpecteddesc'] = 'Diharapkan selesai pada {$a}';
$string['completionexpectedfor'] = '$a->instancename} harus selesai';
$string['completionicons'] = 'Kotak centang penyelesaian';
$string['completionicons_help'] = 'Tanda centang di sebelah nama aktivitas dapat digunakan untuk menunjukkan kapan aktivitas selesai.

Jika sebuah kotak dengan garis putus-putus ditunjukkan, tanda centang akan muncul secara otomatis saat Anda menyelesaikan aktivitas sesuai dengan kondisi yang ditetapkan oleh pengajar.

Jika kotak dengan batas padat ditampilkan, Anda dapat mengkliknya untuk mencentang kotak saat Anda merasa telah menyelesaikan aktivitas. (Mengkliknya lagi menghapus centang jika Anda berubah pikiran.) Centang tersebut opsional dan hanya merupakan cara untuk melacak pencapaian Anda pada kursus ini.';
$string['completionmenuitem'] = 'Penyelesaian';
$string['completionnotenabled'] = 'Penyelesaian tidak diaktifkan';
$string['completionnotenabledforcourse'] = 'Penyelesaian tidak diaktifkan untuk kursus ini';
$string['completionnotenabledforsite'] = 'Penyelesaian tidak diaktifkan untuk situs ini';
$string['completionondate'] = 'Tanggal';
$string['completionondatevalue'] = 'Tanggal saat kursus akan ditandai sebagai selesai';
$string['completionpassgrade'] = 'Memerlukan nilai kelulusan';
$string['completionpassgrade_desc'] = 'Nilai kelulusan';
$string['completionsettingslocked'] = 'Setelan penyelesaian terkunci';
$string['completionupdated'] = 'Penyelesaian yang diperbarui untuk aktivitas <b> {$a} </b>';
$string['completionusegrade'] = 'Perlu dinilai';
$string['completionusegrade_desc'] = 'Mendapatkan nilai';
$string['completionview_desc'] = 'Lihat aktivitas';
$string['configenablecompletion'] = 'Jika diaktifkan, kondisi penyelesaian kursus dan aktivitas dapat disetel. Menyetel kondisi penyelesaian aktivitas direkomendasikan agar data yang bermakna ditampilkan untuk pengguna dalam ikhtisar kursus mereka di Dasbor.';
$string['confirmselfcompletion'] = 'Konfirmasikan penyelesaian mandiri';
$string['courseaggregation'] = 'Membutuhkan kondisi';
$string['courseaggregation_all'] = 'SEMUA kursus yang dipilih harus diselesaikan';
$string['courseaggregation_any'] = 'SETIAP kursus yang dipilih untuk diselesaikan';
$string['coursealreadycompleted'] = 'Anda sudah menyelesaikan kursus ini';
$string['coursecomplete'] = 'Kursus selesai';
$string['coursecompleted'] = 'Kursus selesai';
$string['coursecompletedmessage'] = '<p>Selamat!</i> <p> Anda telah menyelesaikan kursus <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Penyelesaian kursus';
$string['coursecompletioncondition'] = 'Kondisi: {$a}';
$string['coursecompletionnavigation'] = 'Navigasi tersier penyelesaian kursus';
$string['coursecompletionsettings'] = 'Setelan penyelesaian kursus';
$string['coursegrade'] = 'Nilai kursus';
$string['coursesavailable'] = 'Kursus yang tersedia';
$string['coursesavailableexplaination'] = 'Catatan: Ketentuan penyelesaian kursus harus ditetapkan agar kursus muncul dalam daftar di atas.';
$string['criteria'] = 'Kriteria';
$string['criteriagroup'] = 'Kriteria grup';
$string['criteriarequiredall'] = 'Semua kriteria di bawah ini diperlukan';
$string['criteriarequiredany'] = 'Beberapa kriteria di bawah ini diperlukan';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Unduh dalam format <i>spreadsheet</i> (UTF-8.csv)';
$string['datepassed'] = 'Tanggal lulus';
$string['days'] = 'Hari';
$string['daysoftotal'] = '{$a->days} dari {$a->total}';
$string['daystakingcourse'] = 'Waktu mengikuti kursus';
$string['daysuntilcompletion'] = 'Waktu sampai selesai';
$string['defaultactivitycompletioncourse'] = 'Ini adalah kondisi penyelesaian bawaan untuk aktivitas dalam kursus ini.';
$string['defaultactivitycompletionsite'] = 'Ini adalah kondisi penyelesaian bawaan untuk aktivitas di semua kursus.';
$string['defaultcompletion'] = 'Penyelesaian aktivitas bawaan';
$string['defaultcompletionupdated'] = 'Perubahan disimpan';
$string['deletecompletiondata'] = 'Data penyelesaian';
$string['dependencies'] = 'Dependensi';
$string['dependenciescompleted'] = 'Penyelesaian kursus lainnya';
$string['detail_desc:receivegrade'] = 'Memperoleh nilai';
$string['detail_desc:receivepassgrade'] = 'Mendapatkan nilai kelulusan';
$string['detail_desc:view'] = 'Lihat';
$string['done'] = 'Selesai';
$string['editconditions'] = 'Edit kondisi';
$string['emptyconditionsinfo'] = 'Tidak ada kondisi penyelesaian yang ditetapkan untuk aktivitas ini.';
$string['emptyconditionswarning'] = 'Anda harus menambahkan setidaknya satu syarat penyelesaian.';
$string['enablecompletion'] = 'Aktifkan pelacakan penyelesaian';
$string['enablecompletion_help'] = 'Jika diaktifkan, Anda dapat menyetel ketentuan untuk penyelesaian aktivitas atau penyelesaian kursus.';
$string['enrolmentduration'] = 'Durasi pendaftaran';
$string['enrolmentdurationlength'] = 'Pengguna harus tetap terdaftar';
$string['err_noactivities'] = 'Informasi penyelesaian tidak diaktifkan untuk aktivitas apa pun, jadi tidak ada yang bisa ditampilkan. Anda dapat mengaktifkan informasi penyelesaian dengan mengedit setelan untuk suatu aktivitas.';
$string['err_nocourses'] = 'Penyelesaian kursus tidak diaktifkan untuk beberapa kursus lain, jadi tidak ada yang dapat ditampilkan. Anda dapat mengaktifkan penyelesaian kursus di setelan kursus.';
$string['err_nograde'] = 'Nilai kelulusan kursus belum ditetapkan untuk kursus ini. Untuk mengaktifkan jenis kriteria ini, Anda harus membuat nilai kelulusan untuk kursus ini.';
$string['err_noroles'] = 'Tidak ada peran dengan kemampuan moodle/course:markcomplete dalam kursus ini.';
$string['err_nousers'] = 'Tidak ada siswa dalam kursus atau grup ini yang menampilkan informasi penyelesaiannya. (Informasi penyelesaian hanya ditampilkan untuk pengguna dengan kemampuan \'Ditampilkan pada laporan penyelesaian\'. Kemampuan tersebut diizinkan untuk peran bawaan siswa saja, jadi jika tidak ada siswa, Anda akan melihat pesan ini.)';
$string['err_settingslocked'] = 'Satu atau lebih siswa telah menyelesaikan kriteria sehingga setelannya dikunci. Membuka kunci setelan kriteria penyelesaian akan menghapus semua data pengguna yang ada dan dapat menyebabkan kebingungan.';
$string['err_system'] = 'Terjadi kesalahan internal dalam sistem penyelesaian. (Administrator sistem dapat mengaktifkan informasi awakutu untuk melihat lebih detail.)';
$string['eventcoursecompleted'] = 'Menyelesaikan kursus';
$string['eventcoursecompletionupdated'] = 'Memperbarui penyelesaian kursus';
$string['eventcoursemodulecompletionupdated'] = 'Memperbarui penyelesaian aktivitas kursus';
$string['eventdefaultcompletionupdated'] = 'Memperbarui penyelesaian aktivitas kursus bawaan';
$string['excelcsvdownload'] = 'Unduh dalam format yang kompatibel dengan excel (.csv)';
$string['failed'] = 'Gagal';
$string['fraction'] = 'Pecahan';
$string['graderequired'] = 'Nilai kursus dibutuhkan';
$string['gradexrequired'] = '{$a} dibutuhkan';
$string['hiddenrules'] = 'Beberapa setelan khusus untuk <b> {$a} </b> telah disembunyikan. Untuk melihatnya jangan centang aktivitas lain';
$string['incompatibleplugin'] = 'Aktivitas ini tidak mendukung setelan penyelesaian bawaan. Kondisi penyelesaian harus diatur secara manual untuk setiap penggunaan.';
$string['inprogress'] = 'Sedang berlangsung';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Penyelesaian manual oleh orang lain';
$string['manualcompletionbynote'] = 'Catatan: Kemampuan moodle/course:markcomplete harus diizinkan untuk peran yang muncul dalam daftar.';
$string['manualselfcompletion'] = 'Penyelesaian manual';
$string['manualselfcompletionnote'] = 'Catatan: Blok penyelesaian sendiri harus ditambahkan ke kursus jika penyelesaian manual diaktifkan.';
$string['markcomplete'] = 'Tandai selesai';
$string['markedcompleteby'] = 'Ditandai selesai oleh {$a}';
$string['markingyourselfcomplete'] = 'Menandai sendiri telah selesai';
$string['modifybulkactions'] = 'Ubah aksi yang ingin Anda edit secara massal';
$string['moredetails'] = 'Lebih detail';
$string['nocriteriaset'] = 'Tidak ada kriteria penyelesaian yang ditetapkan untuk kursus ini';
$string['nogradeitem'] = 'Nilai wajib tidak dapat diaktifkan untuk <b> {$a} </b> karena aktivitas tidak dinilai.';
$string['notcompleted'] = 'Belum selesai';
$string['notenroled'] = 'Anda tidak terdaftar dalam kursus ini';
$string['nottracked'] = 'Anda saat ini tidak dilacak oleh penyelesaian dalam kursus ini';
$string['notyetstarted'] = 'Belum dimulai';
$string['overallaggregation'] = 'Syarat penyelesaian';
$string['overallaggregation_all'] = 'Kursus selesai ketika SEMUA ketentuan terpenuhi';
$string['overallaggregation_any'] = 'Kursus selesai ketika BEBERAPA ketentuan terpenuhi';
$string['pending'] = 'Tertunda';
$string['periodpostenrolment'] = 'Periode pasca pendaftaran';
$string['privacy:metadata:completionstate'] = 'Jika aktivitas sudah selesai';
$string['privacy:metadata:course'] = 'Pengenal kursus';
$string['privacy:metadata:coursecompletedsummary'] = 'Menyimpan informasi tentang pengguna yang telah menyelesaikan kriteria dalam suatu kursus';
$string['privacy:metadata:coursemoduleid'] = 'ID aktivitas';
$string['privacy:metadata:coursemodulesummary'] = 'Menyimpan data penyelesaian aktivitas untuk pengguna';
$string['privacy:metadata:coursesummary'] = 'Menyimpan data penyelesaian kursus untuk pengguna.';
$string['privacy:metadata:gradefinal'] = 'Nilai akhir diterima untuk penyelesaian kursus';
$string['privacy:metadata:overrideby'] = 'ID pengguna dari orang yang mengganti penyelesaian aktivitas';
$string['privacy:metadata:reaggregate'] = 'Jika penyelesaian kursus dikumpulkan kembali.';
$string['privacy:metadata:timecompleted'] = 'Waktu kursus selesai.';
$string['privacy:metadata:timecreated'] = 'Waktu penyelesaian aktivitas dibuat';
$string['privacy:metadata:timeenrolled'] = 'Waktu pengguna terdaftar dalam kursus';
$string['privacy:metadata:timemodified'] = 'Waktu penyelesaian aktivitas diubah';
$string['privacy:metadata:timestarted'] = 'Waktu kursus dimulai.';
$string['privacy:metadata:unenroled'] = 'Jika pengguna telah dibatalkan pendaftarannya dari kursus';
$string['privacy:metadata:userid'] = 'ID pengguna orang dengan data penyelesaian kursus dan aktivitas';
$string['privacy:metadata:viewed'] = 'Jika aktivitas itu dilihat';
$string['progress'] = 'Perkembangan siswa';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Capaian: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Pengakuan pembelajaran sebelumnya';
$string['remainingenroledfortime'] = 'Tetap terdaftar untuk jangka waktu tertentu';
$string['remainingenroleduntildate'] = 'Tetap terdaftar sampai tanggal yang ditentukan';
$string['reportpage'] = 'Menampilkan pengguna {$a->from} sampai {$a->to} dari {$a->total}.';
$string['requiredcriteria'] = 'Kriteria yang dibutuhkan';
$string['resetactivities'] = 'Hapus semua aktivitas dan sumber yang dicentang';
$string['restoringcompletiondata'] = 'Menuliskan data penyelesaian';
$string['roleaggregation'] = 'Kondisi yang dibutuhkan';
$string['roleaggregation_all'] = 'SEMUA peran yang dipilih untuk ditandai saat kondisi terpenuhi';
$string['roleaggregation_any'] = 'SETIAP peran yang dipilih untuk ditandai saat kondisi terpenuhi';
$string['roleidnotfound'] = 'ID peran {$a} tidak ditemukan';
$string['saved'] = 'Tersimpan';
$string['seedetails'] = 'Lihat detail';
$string['select'] = 'Pilih';
$string['self'] = 'Sendiri';
$string['selfcompletion'] = 'Penyelesaian mandiri';
$string['showcompletionconditions'] = 'Tampilkan kondisi penyelesaian aktivitas';
$string['showcompletionconditions_help'] = 'Tampilkan kondisi penyelesaian aktivitas di halaman kursus.';
$string['showinguser'] = 'Menampilkan pengguna';
$string['studentsmust'] = 'Siswa harus';
$string['timecompleted'] = 'Waktu selesai';
$string['todo'] = 'Lakukan';
$string['unenrolingfromcourse'] = 'Membatalkan pendaftaran dari kursus';
$string['unenrolment'] = 'Batalkan pendaftaran';
$string['unit'] = 'Unit';
$string['unlockcompletion'] = 'Buka kunci opsi penyelesaian';
$string['unlockcompletiondelete'] = 'Buka kunci opsi penyelesaian dan hapus data penyelesaian pengguna';
$string['updateactivities'] = 'Perbarui status penyelesaian aktivitas yang diperiksa';
$string['usealternateselector'] = 'Gunakan pemilih kursus alternatif';
$string['usernotenroled'] = 'Pengguna tidak terdaftar dalam kursus ini';
$string['viewcoursereport'] = 'Lihat laporan kursus';
$string['viewingactivity'] = 'Melihat {$a}';
$string['withconditions'] = 'Dengan kondisi';
$string['writingcompletiondata'] = 'Penulisan data penyelesaian';
$string['xdays'] = '{$a} hari';
$string['youmust'] = 'Anda harus';
