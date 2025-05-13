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
 * Strings for component 'quiz_statistics', language 'id', version '5.0'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Jawaban terkini';
$string['allattempts'] = 'semua upaya';
$string['allattemptsavg'] = 'Nilai rata-rata dari semua upaya';
$string['allattemptscount'] = 'Jumlah total pengerjaan soal selesai yang dinilai';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" varian {$a->variant}';
$string['analysisofresponses'] = 'Analisis jawaban';
$string['analysisofresponsesfor'] = 'Analisis jawaban untuk {$a}';
$string['analysisvariant'] = '"{$a->name}" varian {$a->variant}';
$string['attempts'] = 'Pengerjaan kuis';
$string['attemptsall'] = 'semua pengerjaan kuis';
$string['attemptsfirst'] = 'Pengerjaan  pertama';
$string['backtoquizreport'] = 'Kembali ke halaman laporan statistik utama.';
$string['calculatefrom'] = 'Menghitung statistik dari';
$string['calculatingallstats'] = 'Menghitung statistik untuk kuis, soal dan menganalisis data jawaban';
$string['cic'] = 'Koefisien konsistensi internal (untuk {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Hitung';
$string['counttryno'] = 'Coba hitung {$a}';
$string['coursename'] = 'Nama kursus';
$string['detailedanalysis'] = 'Analisis lebih rinci dari tanggapan atas soal ini';
$string['detailedanalysisforvariant'] = 'Analisis yang lebih rinci tentang jawaban terhadap varian {$a} dari soal ini';
$string['discrimination_index'] = 'Indeks Diskriminasi';
$string['discriminative_efficiency'] = 'Efisiensi diskriminatif';
$string['downloadeverything'] = 'Unduh seluruh laporan sebagai';
$string['duration'] = 'Dibuka selama';
$string['effective_weight'] = 'Bobot efektif';
$string['errordeleting'] = 'Galat saat menghapus rekaman {$a} lama.';
$string['errormedian'] = 'Galat saat mengambil median';
$string['errorpowerquestions'] = 'Galat saat mengambil data untuk menghitung varian untuk nilai soal';
$string['errorpowers'] = 'Galat saat mengambil data untuk menghitung varian untuk nilai kuis';
$string['errorrandom'] = 'Galat ketika mendapatkan data sub-item';
$string['errorratio'] = 'Rasio kesalahan (selama {$a})';
$string['errorstatisticsquestions'] = 'Galat saat mengambil data untuk menghitung statistik nilai soal';
$string['facility'] = 'Index Fasilitas';
$string['firstattempts'] = 'pengerjaan pertama';
$string['firstattemptsavg'] = 'Nilai rata-rata dari pengerjaan pertama';
$string['firstattemptscount'] = 'Jumlah pengerjaan pertama yang dinilai lengkap';
$string['frequency'] = 'Frekuensi';
$string['getstatslockprogress'] = 'Menunggu tugas sedang berlangsung. Harap tunggu atau coba lagi nanti.';
$string['getstatslocktimeout'] = 'Batas waktu penguncian penghitungan statistik';
$string['getstatslocktimeoutdesc'] = 'Berapa detik untuk menunggu kunci ketika mencoba melakukan penghitungan statistik untuk kuis. Setelan ini terutama ada untuk pengujian, jangan mengubahnya kecuali Anda tahu apa yang Anda lakukan.';
$string['highestattempts'] = 'pengerjaan dengan nilai tertinggi';
$string['highestattemptsavg'] = 'Nilai rata-rata dari pengerjaan dengan nilai tertinggi';
$string['intended_weight'] = 'Bobot yang diinginkan';
$string['kurtosis'] = 'Kurtosis distribusi skor (untuk {$a})';
$string['lastattempts'] = 'Pengerjaan terakhir';
$string['lastattemptsavg'] = 'Nilai rata-rata dari pengerjaan terakhir';
$string['lastcalculated'] = 'Terakhir dihitung {$a->lastcalculated} lalu ada {$a->count} pengerjaan sejak saat itu.';
$string['maximumfacility'] = 'Fasilitas maksimum';
$string['median'] = 'Nilai median (untuk {$a})';
$string['medianfacility'] = 'Fasilitas median';
$string['minimumfacility'] = 'Fasilitas minimum';
$string['modelresponse'] = 'Model jawaban';
$string['nameforvariant'] = 'Varian {$a->variant} dari {$a->name}';
$string['negcovar'] = 'Kovariansi negatif dari nilai dengan total nilai pengerjaan kuis.';
$string['negcovar_help'] = 'Nilai soal ini untuk rangkaian pengerjaan kuis ini berbeda-beda dengan cara yang berlawanan dengan nilai pengerjaan keseluruhan. Ini berarti nilai pengerjaan keseluruhan cenderung di bawah rata-rata jika nilai untuk soal ini di atas rata-rata dan sebaliknya. Persamaan kami untuk bobot soal efektif tidak dapat dihitung dalam kasus ini. Perhitungan bobot soal efektif untuk soal lain dalam kuis ini merupakan bobot soal efektif untuk soal tersebut jika soal yang disorot dengan kovarians negatif diberi nilai maksimal nol. Jika Anda mengedit sebuah kuis dan memberikan soal ini dengan kovarian negatif nilai maksimal nol maka bobot soal efektif dari soal ini akan menjadi nol dan bobot soal efektif nyata dari soal lain akan dihitung sekarang.';
$string['nogradedattempts'] = 'Tidak ada upaya mengerjakan kuis, atau semua pengerjaan kuis memiliki soal yang harus dinilai manual.';
$string['nostats'] = 'Tidak dapat menyelesaikan penghitungan statistik. Mungkin ada perhitungan jangka panjang yang sedang berlangsung. Silakan coba lagi nanti.';
$string['nostudentsingroup'] = 'Belum ada siswa di grup ini';
$string['optiongrade'] = 'Kredit sebagian';
$string['partofquestion'] = 'Bagian soal';
$string['pluginname'] = 'Statistik';
$string['position'] = 'Posisi';
$string['positions'] = 'Posisi';
$string['privacy:metadata'] = 'Meskipun pengaya Statistik Kuis memiliki tabel basis data, datanya adalah data agregat dan tidak menggambarkan individu yang unik.';
$string['questioninformation'] = 'Informasi soal';
$string['questionname'] = 'Nama soal';
$string['questionnumber'] = 'S#';
$string['questionstatistics'] = 'Statistik soal';
$string['questionstatsfilename'] = 'statistiksoal';
$string['questiontype'] = 'Jenis soal';
$string['quizinformation'] = 'Informasi kuis';
$string['quizname'] = 'Nama kuis';
$string['quizoverallstatistics'] = 'Statistik keseluruhan kuis';
$string['quizstructureanalysis'] = 'Analisis struktur kuis';
$string['random_guess_score'] = 'Skor tebakan acak';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Rentang statistik untuk soal berikut';
$string['recalculatenow'] = 'Hitung ulang sekarang';
$string['recalculatetask'] = 'Hitung ulang statistik soal';
$string['reportsettings'] = 'Setelan perhitungan statistik';
$string['response'] = 'Jawaban';
$string['skewness'] = 'Kemiringan distribusi skor (untuk {$a})';
$string['slotstructureanalysis'] = 'Analisis struktural untuk soal nomor {$a}';
$string['standarddeviation'] = 'Simpangan baku (untuk {$a})';
$string['standarddeviationq'] = 'Standar deviasi';
$string['standarderror'] = 'Kesalahan standar (selama {$a})';
$string['statistics'] = 'Statistik';
$string['statistics:view'] = 'Lihat laporan statistik';
$string['statisticsreport'] = 'Laporan statistik';
$string['statisticsreportgraph'] = 'Statistik untuk posisi soal';
$string['statsfor'] = 'Statistik kuis (untuk {$a})';
$string['variant'] = 'Varian';
$string['viewanalysis'] = 'Lihat detail';
$string['whichtries'] = 'Analisis Jawaban untuk';
