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
 * Strings for component 'quiz_overview', language 'id', version '5.0'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Tampilkan semua pengerjaan kuis';
$string['allattemptscontributetograde'] = 'Semua pengerjaan kuis berkontribusi pada nilai akhir untuk pengguna.';
$string['allstudents'] = 'Tampilkan semua {$a}';
$string['attemptsonly'] = 'Tampilkan {$a} dengan pengerjaan kuis saja';
$string['attemptsprepage'] = 'Pengerjaan kuis yang ditampilkan per halaman';
$string['deleteselected'] = 'Hapus pengerjaan kuis terpilih';
$string['done'] = 'Selesai';
$string['err_failedtodeleteregrades'] = 'Gagal menghapus nilai pengerjaan kuis yang dihitung';
$string['err_failedtorecalculateattemptgrades'] = 'Gagal menghitung ulang nilai upaya';
$string['highlightinggraded'] = 'Pengerjaan kuis pengguna yang berkontribusi pada nilai akhir disorot.';
$string['needed'] = 'Diperlukan';
$string['noattemptsonly'] = 'Tampilkan / unduh {$a} tanpa pengerjaan kuis saja';
$string['noattemptstoregrade'] = 'Tidak ada pengerjaan kuis yang perlu dinilai ulang';
$string['nogradepermission'] = 'Anda tidak memiliki izin untuk menilai kuis ini.';
$string['onlyoneattemptallowed'] = 'Hanya satu pengerjaan per pengguna yang diperbolehkan pada kuis ini.';
$string['optallattempts'] = 'semua pengerjaan kuis';
$string['optallstudents'] = 'semua {$a} yang telah atau belum mengerjakan kuis';
$string['optattemptsonly'] = '{$a} yang telah mengerjakan kuis';
$string['optnoattemptsonly'] = '{$a} yang belum mengerjakan kuis';
$string['optonlyregradedattempts'] = 'yang telah dinilai / ditandai perlu dinilai ulang';
$string['overview'] = 'Penilaian';
$string['overviewdownload'] = 'Unduh ikhtisar';
$string['overviewfilename'] = 'nilai';
$string['overviewreport'] = 'Laporan penilaian';
$string['overviewreportgraph'] = 'Jumlah rentang capaian nilai keseluruhan siswa';
$string['overviewreportgraphgroup'] = 'Jumlah siswa dalam grup \'{$a}\' yang mencapai rentang nilai';
$string['pagesize'] = 'Ukuran halaman';
$string['pluginname'] = 'Penilaian';
$string['preferencespage'] = 'Preferensi hanya untuk halaman ini';
$string['preferencessave'] = 'Tampilkan laporan';
$string['preferencesuser'] = 'Preferensi Anda untuk laporan ini';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Apakah akan menampilkan poin untuk setiap soal.';
$string['privacy:preference:slotmarks:no'] = 'Poin tidak ditampilkan di samping slot soal.';
$string['privacy:preference:slotmarks:yes'] = 'Poin ditampilkan di samping slot soal.';
$string['regrade'] = 'Nilai ulang';
$string['regrade_allattempts'] = 'Semua upaya';
$string['regrade_allquestions'] = 'Semua pertanyaan';
$string['regrade_attempts'] = 'Nilai ulang upaya...';
$string['regrade_commitregrade'] = 'Lakukan penilaian ulang';
$string['regrade_dryrun'] = 'Uji coba';
$string['regrade_help'] = 'Penilaian ulang menghitung ulang penilaian upaya pengerjaan secara otomatis, menggunakan versi terkini dari setiap soal jika memungkinkan. Uji coba memungkinkan Anda melihat pratinjau perubahan nilai tanpa memengaruhi upaya pengerjaan.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'Uji coba terakhir dari penilaian ulang menemukan bahwa penilaian ulang akan mengubah nilai untuk soal {$a->questions} dalam upaya {$a->attempts}.';
$string['regrade_regradenow'] = 'Nilai ulang sekarang';
$string['regrade_selectedattempts'] = 'Upaya terpilih';
$string['regrade_selectedquestions'] = 'Soal terpilih';
$string['regradecomplete'] = 'Penilaian ulang selesai';
$string['regradedsuccessfullyxofy'] = 'Berhasil menilai ulang ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Menilai ulang';
$string['regradingattemptissue'] = 'Slot {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Menilai ulang pengerjaan kuis ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Soal berikut ini tidak dapat dinilai ulang pada upaya ke {$a->attemptnum} oleh {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Menilai ulang ({$a->done}/{$a->count}) - Pengerjaan kuis {$a->attemptnum} oleh {$a->name} (id {$a->attemptid})';
$string['show'] = 'Tampilkan / unduh';
$string['showattempts'] = 'Hanya menampilkan / unduh pengerjaan kuis';
$string['showdetailedmarks'] = 'Poin untuk tiap soal';
$string['showinggraded'] = 'Hanya menampilkan pengerjaan kuis yang dinilai untuk setiap pengguna.';
$string['showinggradedandungraded'] = 'Menampilkan pengerjaan kuis yang dinilai dan tidak dinilai untuk setiap pengguna. Satu pengerjaan kuis untuk setiap pengguna yang dinilai disorot. Metode penilaian untuk kuis ini adalah {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' dalam grup \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' dalam grup ini';
