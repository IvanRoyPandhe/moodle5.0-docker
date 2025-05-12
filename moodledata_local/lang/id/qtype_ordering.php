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
 * Strings for component 'qtype_ordering', language 'id', version '5.0'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'Posisi absolut';
$string['addmultipleanswers'] = 'Tambahkan {$a} item lainnya';
$string['addsingleanswer'] = 'Tambahkan satu item lagi';
$string['allornothing'] = 'Semua atau tidak';
$string['answer'] = 'Teks item';
$string['correctitemsnumber'] = 'Item benar: {$a}';
$string['correctorder'] = 'Urutan yang benar untuk item tersebut adalah sebagai berikut:';
$string['defaultanswerformat'] = 'Format jawaban bawaan';
$string['defaultquestionname'] = 'Seret item berikut ke dalam urutan yang benar.';
$string['draggableitemno'] = 'Item yang dapat diseret {no}';
$string['draggableitems'] = 'Item yang dapat diseret';
$string['duplicatesnotallowed'] = 'Duplikasi item yang dapat diseret tidak diperbolehkan. String "{$a->text}" sudah digunakan di {$a->item}.';
$string['editingordering'] = 'Mengedit soal mengurutkan';
$string['gradedetails'] = 'Detail penilaian';
$string['gradingtype'] = 'Jenis penilaian';
$string['gradingtype_help'] = '**Semua atau tidak**
&nbsp; Jika semua item berada pada posisi yang benar, maka nilai penuh diberikan. Jika tidak, skornya nol.

**Posisi absolut** &
nbsp; Suatu soal dianggap benar bila posisinya sama dengan jawaban yang benar. Skor tertinggi yang mungkin untuk soal tersebut adalah **sama dengan** jumlah item yang ditampilkan kepada siswa.

**Relatif terhadap posisi yang benar**
&nbsp; Suatu soal dianggap benar bila posisinya sama dengan jawaban yang benar. Item yang benar mendapat skor sama dengan jumlah item yang ditampilkan dikurangi satu. Item yang salah mendapat skor sama dengan jumlah item yang ditampilkan dikurangi satu dan dikurangi jarak item dari posisi yang benar. Jadi, jika item ***n*** ditampilkan kepada siswa, jumlah nilai yang tersedia untuk setiap item adalah ***(n - 1)***, dan nilai tertinggi yang tersedia untuk soal tersebut adalah *** n x (n - 1)***, yang sama dengan ***(n² - n)***.

**Relatif terhadap item berikutnya (tidak termasuk item terakhir)**
&nbsp; Suatu butir soal dianggap benar apabila diikuti oleh butir soal yang sama dengan jawaban yang benar. Item di posisi terakhir tidak dicentang. Jadi, skor tertinggi yang mungkin untuk soal tersebut adalah **kurang satu dari** jumlah item yang ditampilkan kepada siswa.

**Relatif terhadap item berikutnya (termasuk item terakhir)** &nbsp; Suatu butir soal dianggap benar apabila diikuti oleh butir soal yang sama dengan jawaban yang benar. Ini termasuk item terakhir yang tidak boleh ada item yang mengikutinya. Jadi, skor tertinggi yang mungkin untuk soal tersebut adalah **sama dengan** jumlah item yang ditampilkan kepada siswa.

**Relatif terhadap item sebelumnya dan berikutnya**
&nbsp; Suatu soal dianggap benar jika soal sebelumnya dan berikutnya sama dengan jawaban yang benar. Item pertama tidak boleh memiliki item sebelumnya, dan item terakhir tidak boleh memiliki item berikutnya. Jadi, ada dua kemungkinan poin untuk setiap item, dan skor tertinggi yang mungkin untuk soal tersebut adalah **dua kali** jumlah item yang ditampilkan kepada siswa.

**Relatif terhadap SEMUA item sebelumnya dan berikutnya**
&nbsp; Suatu soal dianggap benar jika didahului oleh semua soal yang sama seperti pada jawaban yang benar, dan diikuti oleh semua item yang sama seperti pada jawaban yang benar. Urutan item sebelumnya tidak menjadi masalah, begitu pula urutan item berikutnya. Jadi, jika item ***n*** ditampilkan kepada siswa, jumlah nilai yang tersedia untuk setiap item adalah ***(n - 1)***, dan nilai tertinggi yang tersedia untuk soal tersebut adalah *** n x (n - 1)***, yang sama dengan ***(n² - n)***.

**Subset terlama yang dipesan**
&nbsp; Nilai adalah jumlah item dalam subset item yang diurutkan paling lama. Nilai tertinggi yang mungkin sama dengan jumlah item yang ditampilkan. Subset harus memiliki setidaknya dua item. Subset tidak perlu dimulai dari item pertama (tetapi bisa) dan tidak perlu berdekatan (tetapi bisa saja). Jika terdapat beberapa himpunan bagian dengan panjang yang sama, item dalam himpunan bagian yang ditemukan pertama kali, jika dicari dari kiri ke kanan, akan ditampilkan sebagai benar. Item lainnya akan ditandai sebagai salah.

**Subset bersebelahan terpanjang**
]&nbsp; Nilai adalah jumlah item dalam subkumpulan item terpanjang yang bersebelahan. Nilai tertinggi yang mungkin sama dengan jumlah item yang ditampilkan. Sebuah subset harus memiliki setidaknya dua item. Subset tidak perlu dimulai dari item pertama (tetapi bisa) dan HARUS BERKELANJUTAN. Jika terdapat beberapa himpunan bagian dengan panjang yang sama, item dalam himpunan bagian yang ditemukan pertama kali, jika dicari dari kiri ke kanan, akan ditampilkan sebagai benar. Item lainnya akan ditandai sebagai salah.';
$string['highlightresponse'] = 'Sorot respons sebagai benar atau salah';
$string['horizontal'] = 'Horizontal';
$string['incorrectitemsnumber'] = 'Item salah: {$a}';
$string['layouttype'] = 'Tata letak item';
$string['layouttype_help'] = 'Pilih apakah akan menampilkan item secara vertikal atau horizontal.';
$string['longestcontiguoussubset'] = 'Subset bersebelahan terpanjang';
$string['longestorderedsubset'] = 'Subset terurut terpanjang';
$string['moved'] = '{$a->item} dipindahkan. Posisi baru: {$a->position} dari {$a->total}.';
$string['moveleft'] = 'Pindah kiri';
$string['moveright'] = 'Pindah kanan';
$string['noresponsedetails'] = 'Maaf, tidak ada rincian tanggapan terhadap soal ini yang tersedia.';
$string['noscore'] = 'Tidak ada skor';
$string['notenoughanswers'] = 'Soal pengurutan harus memiliki lebih dari {$a} jawaban.';
$string['notenoughsubsetitems'] = 'Subset harus memiliki setidaknya {$a} item.';
$string['numberingstyle'] = 'Sebutkan pilihannya?';
$string['numberingstyle123'] = '1., 2., 3., ...';
$string['numberingstyleABCD'] = 'A., B., C., ...';
$string['numberingstyleIIII'] = 'I., II., III., ...';
$string['numberingstyle_desc'] = 'Gaya penomoran bawaan.';
$string['numberingstyle_help'] = 'Pilih gaya penomoran untuk item yang dapat diseret dalam soal ini.';
$string['numberingstyleabc'] = 'a., b., c., ...';
$string['numberingstyleiii'] = 'i., ii., iii., ...';
$string['numberingstylenone'] = 'Tidak ada penomoran';
$string['partialitemsnumber'] = 'Item yang benar sebagian: {$a}';
$string['pluginname'] = 'Mengurutkan';
$string['pluginname_help'] = 'Beberapa item ditampilkan dalam urutan campur aduk. Item dapat diseret ke dalam urutan yang benar.';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'Menambahkan Soal Mengurutkan';
$string['pluginnameediting'] = 'Mengedit Soal Mengurutkan';
$string['pluginnamesummary'] = 'Susunlah item yang campur aduk ke dalam urutan yang benar.';
$string['positionx'] = 'Posisi {$a}';
$string['privacy:preference:gradingtype'] = 'Jenis penilaian.';
$string['privacy:preference:layouttype'] = 'Tata letak item.';
$string['privacy:preference:numberingstyle'] = 'Gaya penomoran pilihan.';
$string['privacy:preference:selectcount'] = 'Jumlah pilihan.';
$string['privacy:preference:selecttype'] = 'Jenis pemilihan item.';
$string['privacy:preference:showgrading'] = 'Apakah akan menampilkan detail penilaian.';
$string['regradeissuenumitemschanged'] = 'Jumlah item yang dapat diseret telah berubah.';
$string['relativeallpreviousandnext'] = 'Relatif terhadap SEMUA item sebelumnya dan berikutnya';
$string['relativenextexcludelast'] = 'Sehubungan dengan item berikutnya (tidak termasuk yang terakhir)';
$string['relativenextincludelast'] = 'Sehubungan dengan item berikutnya (termasuk yang terakhir)';
$string['relativeonepreviousandnext'] = 'Relatif terhadap item sebelumnya dan berikutnya';
$string['relativetocorrect'] = 'Relatif terhadap posisi yang benar';
$string['removeeditor'] = 'Hapus editor HTML';
$string['removeitem'] = 'Hapus item yang dapat diseret';
$string['scoredetails'] = 'Berikut adalah skor untuk setiap item dalam tanggapan ini:';
$string['selectall'] = 'Pilih semua item';
$string['selectcontiguous'] = 'Pilih subset item yang berdekatan';
$string['selectcount'] = 'Ukuran subset';
$string['selectcount_help'] = 'Jumlah item yang akan ditampilkan ketika soal muncul dalam kuis.';
$string['selectrandom'] = 'Pilih subset item secara acak';
$string['selecttype'] = 'Tipe pemilihan item';
$string['selecttype_help'] = 'Pilih apakah akan menampilkan semua item atau sebagian item.';
$string['showgrading'] = 'Detail penilaian';
$string['showgrading_help'] = 'Pilih apakah akan menampilkan atau menyembunyikan detail penghitungan skor saat siswa meninjau respons terhadap soal Pengurutan ini.';
$string['vertical'] = 'Vertikal';
