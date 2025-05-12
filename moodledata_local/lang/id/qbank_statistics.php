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
 * Strings for component 'qbank_statistics', language 'id', version '5.0'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Perlu pemeriksaan?';
$string['discrimination_index_help'] = 'Soal terindikasi mungkin perlu diperiksa berdasarkan statistik soal. Misalnya, jika siswa memperoleh skor rendah pada soal tetapi skor tinggi pada keseluruhan kuis, atau skor tinggi pada soal tetapi skor rendah pada keseluruhan kuis, maka mungkin ada masalah dengan soal seperti salah jawaban yang ditetapkan sebagai benar. Statistik tidak sempurna; ini hanya petunjuk bahwa soalnya harus diperiksa.';
$string['discriminative_efficiency'] = 'Efisiensi diskriminatif';
$string['discriminative_efficiency_help'] = 'Efisiensi diskriminatif adalah perkiraan statistik seberapa baik soal menilai siswa, dengan nilai yang lebih tinggi menjadi lebih baik. Nilai yang sangat rendah dapat menunjukkan masalah dengan soal. Soal yang sangat sulit atau mudah (dengan indeks fasilitas mendekati 0% atau 100%) juga dapat menghasilkan nilai yang rendah.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Indeks fasilitas';
$string['facility_index_help'] = 'Indeks fasilitas memberikan nilai rata-rata (sebagai persentase) yang diperoleh pada soal (semua versi) di semua kuis di mana soal telah dikerjakan. Nilai yang lebih tinggi biasanya menunjukkan soal yang lebih mudah.';
$string['likely'] = 'Mungkin';
$string['na'] = 'N/A';
$string['pluginname'] = 'Statistik soal';
$string['privacy:metadata'] = 'Pengaya bank soal statistik pertanyaan tidak menyimpan data pribadi apa pun.';
$string['unlikely'] = 'Tidak mungkin';
$string['verylikely'] = 'Sangat mungkin';
