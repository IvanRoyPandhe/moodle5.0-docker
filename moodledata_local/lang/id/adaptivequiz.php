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
 * Strings for component 'adaptivequiz', language 'id', version '5.0'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Perkiraan kemampuan';
$string['abilityestimated_help'] = 'Perkiraan kemampuan peserta tes disesuaikan dengan tingkat kesulitan pertanyaan, di mana peserta tes memiliki peluang 50% untuk menjawab pertanyaan dengan benar. Untuk mengidentifikasi tingkat kinerja, cocokkan nilai kemampuan dengan rentang tingkat pertanyaan (lihat rentang setelah simbol \'/\').';
$string['activityreports'] = 'Laporan percobaan';
$string['adaptivequiz:addinstance'] = 'Tambah quiz adaptif baru';
$string['adaptivequiz:attempt'] = 'Percobaan kuis adaptif';
$string['adaptivequiz:reviewattempts'] = 'Tinjau kiriman kuis adaptif';
$string['adaptivequiz:viewreport'] = 'Lihat laporan kuis adaptif';
$string['adaptivequizname'] = 'Nama';
$string['adaptivequizname_help'] = 'Masukkan nama contoh Kuis Adaptif';
$string['all_attempts_deleted'] = 'Semua percobaan Kuis Adaptif dihapus';
$string['all_grades_removed'] = 'Semua nilai Kuis Adaptif telah dihapus';
$string['answer'] = 'Jawaban';
$string['answers_display_name'] = 'Jawaban';
$string['attempt_questiondetails'] = 'Detail pertanyaan';
$string['attempt_state'] = 'Keadaan percobaan';
$string['attempt_summary'] = 'Ringkasan upaya';
$string['attempt_user'] = 'Pengguna';
$string['attemptclosed'] = 'Upaya telah ditutup secara manual.';
$string['attemptclosedstatus'] = 'Ditutup secara manual oleh {$ a-> nama_pengguna_saat_ini} (id-pengguna: {$ a-> id_pengguna_saat_ini}) pada {$ a-> sekarang}.';
$string['attemptdeleted'] = 'Percobaan dihapus untuk {$a->name} yang dikirimkan pada {$a->timecompleted}';
$string['attemptfeedback'] = 'Umpan balik percobaan';
$string['attemptfeedback_help'] = 'Umpan balik percobaan ditampilkan kepada pengguna setelah percobaan selesai';
$string['attemptfeedbackdefaulttext'] = 'Anda telah menyelesaikan percobaan, terima kasih telah mengikuti kuisnya!';
$string['attemptfinishedtimestamp'] = 'Waktu penyelesaian percobaan';
$string['attemptfirst'] = 'Upaya pertama';
$string['attemptlast'] = 'Percobaan terakhir';
$string['attemptnofirstquestion'] = 'Maaf, tidak dapat menentukan soal pertama, Mungkin ada kesalahan konfigurasi pada kuis ini';
$string['attemptquestion_ability'] = 'Mengukur kemampuan';
$string['attemptquestion_abilitylogits'] = 'Kemampuan Terukur (logits)';
$string['attemptquestion_difficulty'] = 'Tingkat Kesulitan Pertanyaan (Logits)';
$string['attemptquestion_diffsum'] = 'Jumlah kesulitan';
$string['attemptquestion_level'] = 'Level pertanyaan';
$string['attemptquestion_rightwrong'] = 'Jawab Benar/Salah';
$string['attemptquestion_stderr'] = 'Galat Standar (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Soal: {$a}';
$string['attemptquestionsprogress_help'] = 'Jumlah maksimum pertanyaan yang ditampilkan di sini belum tentu merupakan jumlah pertanyaan yang harus Anda jawab selama kuis. Jumlah tersebut merupakan jumlah pertanyaan MAKSIMUM yang mungkin Anda jawab. Kuis dapat selesai lebih awal jika ukuran kemampuan didefinisikan dengan cukup.';
$string['attemptsallowed'] = 'Percobaan yang dibolehkan';
$string['attemptsallowed_help'] = 'Jumlah percobaan yang dapat dilakukan siswa';
$string['attemptstarttime'] = 'Waktu mulai percobaan';
$string['attemptstate'] = 'Status percobaan';
$string['attemptstopcriteria'] = 'Alasan pemberhentian percobaan';
$string['attemptsusernoprevious'] = 'Anda belum pernah mengerjakan kuis ini';
$string['attemptsuserprevious'] = 'Pekerjaan kamu sebelumnya';
$string['attempttotaltime'] = 'Total waktu (jj:mm:dd)';
$string['back_to_all_questions'] = '&laquo; Balik ke semua pertanyaan';
$string['bestscore'] = 'Nilai terbaik';
$string['bestscorestderror'] = 'Kesalahan Standar';
$string['browsersecurity'] = 'Keamanan penjelajah';
$string['browsersecurity_help'] = 'Jika "Munculan layar penuh dengan beberapa keamanan JavaScript" dipilih, kuis hanya akan dimulai jika siswa memiliki browser web yang mengaktifkan JavaScript, kuis tersebut muncul di jendela munculan layar penuh yang mencakup semua jendela lain dan tidak memiliki navigasi kontrol dan siswa dicegah, sejauh mungkin, menggunakan fasilitas seperti salin dan tempel';
$string['calcerrorwithinlimits'] = 'Galat standar terhitung {$a->calerror} berada dalam batasan yang ditetapkan oleh aktivitas {$a->definederror}';
$string['closeattempt'] = 'Tutup percobaan';
$string['completionattemptcompletedcminfo'] = 'Selesaikan percobaan';
$string['completionattemptcompletedform'] = 'Siswa harus menyelesaikan setidaknya satu kali percobaan pada aktivitas ini';
$string['confirmcloseattempt'] = 'Apakah kamu yakin untuk tutup dan memfinalkan percobaan ini? {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} pertanyaan telah dijawab dan skor sejauh ini adalah {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Percobaan ini dimulai pada {$a->started} dan terakhir diperbarui pada {$a->modified}.';
$string['confirmdeleteattempt'] = 'Mengonfirmasi penghapusan percobaan dari {$a->name} yang dikirimkan pada {$a->timecompleted}';
$string['deleteattemp'] = 'Hapus pekerjaan';
$string['discrimination_display_name'] = 'Diskriminasi';
$string['downloadcsv'] = 'Unduh CSV';
$string['enterrequiredpassword'] = 'Masukkan kata sandi yang diperlukan';
$string['errorattemptstate'] = 'Terjadi galat dalam menentukan status percobaan';
$string['errorclosingattempt_alreadycomplete'] = 'Percobaan ini telah selesai, tidak dapat ditutup secara manual.';
$string['errorfetchingquest'] = 'Tidak dapat mengambil pertanyaan untuk level {$a->level}';
$string['errorlastattpquest'] = 'Galat saat memeriksa nilai respons untuk pertanyaan terakhir yang dicoba';
$string['errornumattpzero'] = 'Galat dengan jumlah pertanyaan yang dicoba sama dengan nol, tetapi pengguna mengirimkan jawaban untuk pertanyaan sebelumnya';
$string['errorsumrightwrong'] = 'Jumlah jawaban yang benar dan salah tidak sama dengan jumlah total pertanyaan yang dicoba';
$string['eventattemptcompleted'] = 'Soal Selesai';
$string['formelementdecimal'] = 'Masukkan angka desimal. Panjang maksimal 10 digit dan maksimal 5 digit di sebelah kanan titik desimal';
$string['formelementempty'] = 'Masukkan bilangan bulat positif dari 1 hingga 999';
$string['formelementnegative'] = 'Masukkan angka positif dari 1 hingga 999';
$string['formelementnumeric'] = 'Masukkan nilai numerik dari 1 hingga 999';
$string['formlowlevelgreaterthan'] = 'Tingkat terendah harus kurang dari tingkat tertinggi';
$string['formminquestgreaterthan'] = 'Jumlah pertanyaan minimal harus kurang dari jumlah pertanyaan maksimal';
$string['formquestionpool'] = 'Pilih setidaknya satu kategori pertanyaan';
$string['formstartleveloutofbounds'] = 'Tingkat awal harus berupa angka yang berada di antara tingkat terendah dan tertinggi';
$string['formstderror'] = 'Harus memasukkan persen kurang dari 50 dan lebih besar dari atau sama dengan 0';
$string['functiondisabledbysecuremode'] = 'Fungsinya saat ini dinonaktifkan';
$string['gradehighest'] = 'Nilai Tertinggi';
$string['grademethod'] = 'Metode penilaian';
$string['grademethod_help'] = 'Ketika percobaan yang diperbolehkan lebih dari satu, ada beberapa cara yang dapat Anda gunakan untuk menghitung nilai akhir siswa untuk kuis tersebut:

* Nilai tertinggi (terbaik) dari setiap percobaan
* Nilai pada percobaan pertama (percobaan lain diabaikan)
* Nilai pada percobaan terakhir (percobaan lain diabaikan)';
$string['graphlegend_error'] = 'Kesalahan Standar';
$string['highestlevel'] = 'Tingkat kesulitan tertinggi';
$string['highestlevel_help'] = 'Level tertinggi atau tersulit yang dapat dipilih dari pertanyaan penilaian. Selama upaya, aktivitas tidak akan melampaui tingkat kesulitan ini';
$string['highlevelusers'] = 'Pengguna di atas level pertanyaan';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Laporan pengerjaan pengguna individu untuk {$a}';
$string['leveloutofbounds'] = 'Tingkat yang diminta {$a->level} di luar batas untuk percobaan';
$string['lowestlevel'] = 'Tingkat kesulitan terendah';
$string['lowestlevel_help'] = 'Tingkat kesulitan terendah atau paling mudah yang dapat dipilih dalam penilaian. Selama percobaan, aktivitas tidak akan melampaui tingkat kesulitan ini.';
$string['lowlevelusers'] = 'Pengguna di bawah level pertanyaan';
$string['maximumquestions'] = 'Jumlah pertanyaan maksimum';
$string['maximumquestions_help'] = 'Jumlah maksimum pertanyaan yang dapat dicoba oleh siswa';
$string['maxquestattempted'] = 'Jumlah maksimum pertanyaan yang dicoba';
$string['midlevelusers'] = 'Pengguna di dekat level pertanyaan';
$string['minimumquestions'] = 'Jumlah pertanyaan minimum';
$string['minimumquestions_help'] = 'Jumlah minimal pertanyaan yang harus dijawab oleh siswa';
$string['missingtagprefix'] = 'Awalan tag tidak ada';
$string['modformshowattemptprogress'] = 'Tampilkan kemajuan kuis kepada siswa';
$string['modformshowattemptprogress_help'] = 'Bila dipilih, selama percobaan, siswa akan melihat bilah kemajuan yang menggambarkan berapa banyak pertanyaan yang dijawab dari jumlah maksimum.';
$string['modulename'] = 'Kuis Adaptif';
$string['modulename_help'] = 'Aktivitas Kuis Adaptif memungkinkan pengajar untuk membuat kuis yang dapat mengukur kemampuan peserta secara efisien. Kuis adaptif terdiri dari soal-soal yang dipilih dari bank soal yang diberikan tag (indikator) nilai kesulitan. Soal-soal dipilih berdasarkan prediksi kemampuan peserta saat ini. Jika peserta menjawab soal dengan benar, maka soal selanjutnya akan lebih sulit. Jika peserta menjawab soal dengan salah, maka soal yang diberikan selanjutnya akan lebih mudah. Teknik ini akan berkembang menjadi rangkaian pertanyaan yang sesuai dengan tingkat kemampuan efektif peserta. Kuis akan berhenti/selesai ketika kemampuan peserta ujian telah ditentukan dengan akurasi yang dibutuhkan.

Aktivitas ini paling cocok digunakan untuk mengukur kemampuan seseorang dalam skala unidimensional (satu jenis kemampuan atau keterampilan tertentu). Meskipun skala pengukuran tersebut bisa sangat luas, setiap soal yang diberikan harus tetap mengukur kemampuan atau kecakapan dalam kategori yang sama. Misalnya, dalam tes penempatan, soal-soal dalam skala mudah dan bisa dijawab oleh pemula juga harus bisa dijawab oleh ahli, sementara soal yang lebih sulit hanya bisa dijawab oleh orang yg mahir atau mungkin hanya bisa ditebak dengan keberuntungan. Jika ada soal yang tidak bisa membedakan kemampuan peserta, maka tes ini akan menjadi tidak efektif dan hasilnya bisa jadi tidak konklusif.

Soal-soal yang digunakan dalam Kuis Adaptif harus :

* secara otomatis dinilai benar/salah
* di-tag dengan tingkat kesulitannya menggunakan \'adpq_\' diikuti dengan bilangan bulat positif yang berada dalam rentang untuk kuis tersebut

Kuis Adaptif dapat dikonfigurasikan sebagai berikut

* konfigurasi rentang kesulitan soal pengguna yang akan diukur. 1-10, 1-16, dan 1-100 adalah contoh rentang yang valid.
* konfigurasi ketepatan yang dibutuhkan sebelum kuis dihentikan. (Biasanya kesalahan sebesar 5% dalam ukuran kemampuan merupakan aturan penghentian yang tepat)
* tentukan jumlah soal minimum yang harus dijawab
* tentukan jumlah soal maksimum yang dapat dijawab
Deskripsi dan pengujian untuk aktifitas ini didasarkan pada <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Kuis Adaptif';
$string['na'] = 'n/a';
$string['name'] = 'Nama';
$string['noattemptsallowed'] = 'Tidak ada lagi percobaan yang diperbolehkan pada aktivitas ini';
$string['nonewmodules'] = 'Tidak ditemukan contoh Kuis Adaptif';
$string['nopermission'] = 'Anda tidak memiliki izin untuk melihat sumber daya ini';
$string['notinprogress'] = 'Percobaan ini tidak sedang berlangsung.';
$string['notyourattempt'] = 'Ini bukan percobaan Anda dalam aktivitas tersebut';
$string['numofattemptshdr'] = 'Jumlah Percobaan';
$string['percent_correct_display_name'] = '% Benar';
$string['pluginadministration'] = 'Kuis Adaptif';
$string['pluginname'] = 'Kuis Adaptif';
$string['question_report'] = 'Analisis Pertanyaan';
$string['questionanalysisbtn'] = 'Analisis Pertanyaan';
$string['questionnumber'] = 'Pertanyaan #';
$string['questionpool'] = 'Kumpulan pertanyaan';
$string['questionpool_help'] = 'Pilih kategori pertanyaan tempat aktivitas akan menarik pertanyaan selama percobaan.';
$string['questions_report'] = 'Laporan Pertanyaan';
$string['questionsattempted'] = 'Jumlah pertanyaan yang dicoba';
$string['questionspoolerrornovalidstartingquestions'] = 'Kategori pertanyaan yang dipilih tidak berisi pertanyaan yang diberi tag dengan tepat agar sesuai dengan tingkat kesulitan awal yang dipilih.';
$string['recentactquestionsattempted'] = 'Soal yang dicoba: {$a}';
$string['recentattemptstate'] = 'Keadaan percobaan:';
$string['recentcomplete'] = 'Lengkap';
$string['recentinprogress'] = 'Sedang berlangsung';
$string['reportanswersdistributionchartdisplaystacked'] = 'Tampilan bilah bertumpuk';
$string['reportanswersdistributionchartnumrightlabel'] = 'Jumlah jawaban yang benar';
$string['reportanswersdistributionchartnumwronglabel'] = 'Jumlah jawaban yang salah';
$string['reportanswersdistributionchartxaxislabel'] = 'Tingkat kesulitan pertanyaan';
$string['reportanswersdistributionchartyaxislabel'] = 'Jumlah jawaban';
$string['reportattemptadmanswerright'] = 'B';
$string['reportattemptadmanswerwrong'] = 'S';
$string['reportattemptadmchartadmdifflabel'] = 'Kesulitan yang Diatur';
$string['reportattemptadmcharttargetdifflabel'] = 'Target Kesulitan';
$string['reportattemptanswerdistributiontab'] = 'Distribusi Jawaban';
$string['reportattemptgraphtab'] = 'Grafik Percobaan';
$string['reportattemptgraphtabletitle'] = 'Tampilan Tabel Grafik Percobaan';
$string['reportattemptquestionsdetailstab'] = 'Pertanyaan Detail';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - meninjau percobaan oleh {$a->fullname} yang dikirimkan pada {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'semua pengguna yang pernah mencobasemua pengguna yang pernah mencoba';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'semua pengguna yang pernah mencoba';
$string['reportattemptsenrolledwithnoattempts'] = 'peserta tanpa percobaan yang dilakukan';
$string['reportattemptsfilterformheader'] = 'Menyaring';
$string['reportattemptsfilterformsubmit'] = 'Filter';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Sertakan pengguna dengan pendaftaran tidak aktif';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Apakah menyertakan pengguna dengan pendaftaran yang ditangguhkan.';
$string['reportattemptsfilterusers'] = 'Tampilkan';
$string['reportattemptsnotenrolled'] = 'pengguna yang tidak terdaftar yang melakukan percobaan';
$string['reportattemptspersistentfilter'] = 'Filter persisten';
$string['reportattemptspersistentfilter_help'] = 'Jika dicentang, pengaturan filter di bawah ini akan disimpan saat dikirimkan, lalu diterapkan setiap kali Anda mengunjungi halaman laporan.';
$string['reportattemptsprefsformheader'] = 'Preferensi Laporan';
$string['reportattemptsprefsformsubmit'] = 'Terapkan';
$string['reportattemptsresetfilter'] = 'Setel ulang filter';
$string['reportattemptsshowinitialbars'] = 'Tampilkan bilah inisial';
$string['reportattemptsummarytab'] = 'Ringkasan Percobaan';
$string['reportattemptsusersperpage'] = 'Jumlah pengguna yang ditampilkan:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - laporan percobaan pengguna individu untuk {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - laporan pertanyaan';
$string['reportuserattemptstitleshort'] = 'Percobaan {$a}';
$string['requirepassword'] = 'Kata sandi yang diperlukan';
$string['requirepassword_help'] = 'Siswa diminta untuk memasukkan kata sandi sebelum memulai usaha mereka';
$string['requirepasswordmessage'] = 'Untuk mencoba kuis ini Anda perlu mengetahui kata sandi kuis';
$string['resetadaptivequizsall'] = 'Hapus semua upaya Kuis Adaptif';
$string['result'] = 'Hasil';
$string['reviewattempt'] = 'Tinjau percobaan';
$string['reviewattemptreport'] = 'Meninjau percobaan oleh {$a->fullname} yang dikirimkan pada {$a->finished}';
$string['score'] = 'Skor';
$string['showabilitymeasure'] = 'Tampilkan kemampuan mengukur kepada siswa';
$string['showabilitymeasure_help'] = 'Terkadang mungkin berguna untuk mengungkapkan estimasi kemampuan kepada siswa setelah mengikuti kuis adaptif. Dengan mengaktifkan pengaturan ini, siswa dapat melihat estimasi kemampuan dalam ringkasan percobaan dan tepat setelah menyelesaikan percobaan.';
$string['standarderror'] = 'Kesalahan Standar untuk berhenti';
$string['standarderror_help'] = 'Bila jumlah kesalahan dalam pengukuran kemampuan pengguna turun di bawah jumlah ini, kuis akan berhenti. Atur nilai ini dari bawaan 5% untuk memerlukan presisi yang lebih tinggi atau lebih rendah dalam pengukuran kemampuan.';
$string['standarderrorhdr'] = 'Kesalahan standar';
$string['startattemptbtn'] = 'Mulai percobaan';
$string['startinglevel'] = 'Tingkat kesulitan awal';
$string['startinglevel_help'] = 'Saat siswa memulai percobaan, aktivitas akan secara acak memilih pertanyaan yang sesuai dengan tingkat kesulitannya';
$string['statistic'] = 'Statistik';
$string['stopingconditionshdr'] = 'Kondisi berhenti';
$string['submitanswer'] = 'Kirimkan jawaban';
$string['times_used_display_name'] = 'Waktu Digunakan';
$string['updateattempterror'] = 'Terjadi kesalahan saat mencoba memperbarui catatan percobaan';
$string['user'] = 'Pengguna';
$string['value'] = 'Nilai';
$string['wrongpassword'] = 'Kata sandi salah';
