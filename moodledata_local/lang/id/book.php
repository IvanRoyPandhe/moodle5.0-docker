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
 * Strings for component 'book', language 'id', version '5.0'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Tambahkan bab baru';
$string['addafterchapter'] = 'Tambahkan bab baru setelah "{$a->title}"';
$string['book:addinstance'] = 'Tambahkan buku baru';
$string['book:edit'] = 'Edit bab';
$string['book:read'] = 'Lihat buku';
$string['book:viewhiddenchapters'] = 'Lihat bab buku tersembunyi';
$string['chapterandsubchaptersdeleted'] = 'Bab "{$a->title}" dan {$a->subchapters} subbabnya telah dihapus';
$string['chapterdeleted'] = 'Bab "{$a->title}" telah dihapus';
$string['chapters'] = 'Bab';
$string['chaptertitle'] = 'Judul bab';
$string['confchapterdelete'] = 'Anda benar-benar ingin menghapus bab ini?';
$string['confchapterdeleteall'] = 'Anda bener-benar ingin menghapus bab ini dan semua subbab-nya?';
$string['content'] = 'Konten';
$string['customtitles'] = 'Judul kustom';
$string['customtitles_help'] = 'Biasanya judul bab ditampilkan dalam daftar isi (TOC) DAN sebagai judul di atas konten.

Jika kotak centang judul kustom dicentang, judul bab TIDAK ditampilkan sebagai judul di atas konten. Judul yang berbeda (mungkin lebih panjang dari judul bab) dapat dimasukkan sebagai bagian dari konten.';
$string['deletechapter'] = 'Hapus bab "{$a}"';
$string['editchapter'] = 'Edit bab "{$a}"';
$string['editingchapter'] = 'Mengedit bab';
$string['errorchapter'] = 'Kesalahan membaca bab buku.';
$string['eventchaptercreated'] = 'Bab dibuat';
$string['eventchapterdeleted'] = 'Bab dihapus';
$string['eventchapterupdated'] = 'Memperbarui bab';
$string['eventchapterviewed'] = 'Melihat bab';
$string['hidechapter'] = 'Sembunyikan bab "{$a}"';
$string['indicator:cognitivedepth'] = 'Buku kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam sumber buku.';
$string['indicator:cognitivedepthdef'] = 'Buku kognitif';
$string['indicator:cognitivedepthdef_help'] = 'Peserta telah mencapai persentase keterlibatan kognitif yang ditawarkan oleh aktivitas Buku selama interval analisis ini (Tingkat = Tanpa tampilan, Tampilan)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Buku sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada keluasan sosial yang dicapai siswa dalam sumber buku.';
$string['indicator:socialbreadthdef'] = 'Buku sosial';
$string['indicator:socialbreadthdef_help'] = 'Peserta telah mencapai persentase keterlibatan sosial yang ditawarkan oleh aktivitas Buku selama interval analisis ini (Tingkat = Tidak ada partisipasi, Peserta saja)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Buku';
$string['modulename_help'] = 'Modul buku memungkinkan seorang pengajar untuk membuat sumber multi-halaman dalam format seperti buku, dengan bab dan subbab. Buku dapat berisi berkas media serta teks dan berguna untuk menampilkan bagian informasi yang panjang yang dapat dipecah menjadi beberapa bagian.

Sebuah buku dapat digunakan

* Untuk menampilkan bahan bacaan untuk modul studi individu
* Sebagai buku pegangan departemen staf
* Sebagai portofolio karya siswa';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Buku';
$string['movechapterdown'] = 'Pindahkan bab ke bawah "{$a}"';
$string['movechapterup'] = 'Pindahkan bab ke atas "{$a}"';
$string['navexit'] = 'Keluar buku';
$string['navnext'] = 'Selanjutnya';
$string['navnexttitle'] = 'Berikutnya: {$a}';
$string['navoptions'] = 'Opsi yang tersedia untuk tautan navigasi';
$string['navoptions_desc'] = 'Opsi untuk menampilkan navigasi di halaman buku';
$string['navprev'] = 'Sebelumnya';
$string['navprevtitle'] = 'Sebelumnya: {$a}';
$string['navstyle'] = 'Gaya navigasi';
$string['navstyle_help'] = '* Gambar - Ikon digunakan untuk navigasi
* Teks - Judul bab digunakan untuk navigasi';
$string['nocontent'] = 'Belum ada konten yang ditambahkan ke buku ini.';
$string['numbering'] = 'Format Bab';
$string['numbering0'] = 'Tidak ada';
$string['numbering1'] = 'Penomoran';
$string['numbering2'] = 'Poin';
$string['numbering3'] = 'Indentasi';
$string['numbering_help'] = '* Tidak ada - Bab dan subbab tidak memiliki format
* Nomor - Bab dan judul subbab diberi nomor 1, 1.1, 1.2, 2, ...
* Poin - Subbab diindentasi dan ditampilkan dengan poin di daftar isi
* Indentasi - Subbab diberi menjorok ke dalam daftar isi';
$string['numberingoptions'] = 'Opsi yang tersedia untuk pemformatan bab';
$string['numberingoptions_desc'] = 'Opsi untuk menampilkan bab dan subbab dalam daftar isi';
$string['page-mod-book-x'] = 'Setiap halaman modul buku';
$string['pluginadministration'] = 'Administrasi Buku';
$string['pluginname'] = 'Buku';
$string['previouschapter'] = 'Bab sebelumnya';
$string['privacy:metadata'] = 'Modul aktivitas buku tidak menyimpan data pribadi apa pun.';
$string['removeallbooktags'] = 'Semua tag buku';
$string['search:activity'] = 'Buku - sumber informasi';
$string['search:chapter'] = 'Buku - bab';
$string['showchapter'] = 'Tampilkan bab "{$a}"';
$string['subchapter'] = 'Subbab';
$string['subchapternotice'] = '(Hanya tersedia setelah bab pertama dibuat)';
$string['subplugintype_booktool'] = 'Perkakas buku';
$string['subplugintype_booktool_plural'] = 'Perkakas buku';
$string['tagarea_book_chapters'] = 'Bab buku';
$string['tagsdeleted'] = 'Label buku telah dihapus';
$string['toc'] = 'Daftar isi';
$string['top'] = 'puncak';
