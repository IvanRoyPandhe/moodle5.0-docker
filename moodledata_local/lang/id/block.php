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
 * Strings for component 'block', language 'id', version '5.0'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Tambahkan blok {$a}';
$string['anypagematchingtheabove'] = 'Semua halaman yang cocok dengan di atas';
$string['appearsinsubcontexts'] = 'Muncul di subkonteks';
$string['assignrolesinblock'] = 'Tetapkan peran pada blok {$a}';
$string['blocksdrawertoggle'] = 'Sembunyikan/Tampilkan laci blok';
$string['blocksettings'] = 'Setelan blok';
$string['bracketfirst'] = '{$a} (pertama)';
$string['bracketlast'] = '{$a} (terakhir)';
$string['configureblock'] = 'Konfigurasi blok {$a}';
$string['contexts'] = 'Konteks halaman';
$string['contexts_help'] = 'Konteks adalah jenis halaman yang lebih spesifik di mana blok ini dapat ditampilkan dalam lokasi blok asli. Anda akan memiliki berbagai opsi di sini tergantung pada lokasi blok asli dan lokasi Anda saat ini. Misalnya, Anda dapat membatasi blok hanya muncul di halaman forum dalam suatu kursus dengan menambahkan blok ke kursus (membuatnya muncul di semua sub-halaman), kemudian masuk ke forum dan mengedit pengaturn blok lagi untuk membatasi tampilan untuk hanya halaman forum.';
$string['createdat'] = 'Lokasi asli blok';
$string['createdat_help'] = 'Lokasi asli tempat blok dibuat. Setelan blok dapat menyebabkannya muncul di lokasi lain (konteks) dalam lokasi asli. Misalnya, blok yang dibuat pada halaman kursus dapat ditampilkan dalam aktivitas dalam kursus itu. Blok yang dibuat di beranda situs dapat ditampilkan di seluruh situs.';
$string['defaultregion'] = 'Posisi bawaan';
$string['defaultregion_help'] = 'Tema dapat mendefinisikan satu atau lebih posisi blok yang dinamai dimana blok ditampilkan. Setelan ini mendefinisikan dimana Anda ingin blok ini muncul sebagai setelan bawaan. Wilayah tersebut dapat disampingkan pada halaman yang spesifik apabila diperlukan.';
$string['defaultweight'] = 'Bobot bawaan';
$string['defaultweight_help'] = 'Bobot bawaan memungkinkan anda untuk memilih secara kasar dimana anda ingin munculkan blok pada posisi yang dipilih, entah pada bagian atas atau bawah. Lokasi final diperhitungkan dari semua blok pada wilayah tersebut (contohnya, hanya satu blok yang dapat berada di atas). Bilangan ini dapat disampingkan pada halaman yang spesifik apabila diperlukan.';
$string['deleteblock'] = 'Hapus blok {$a}';
$string['deleteblockcheck'] = 'Ini akan menghapus blok {$a}.';
$string['deleteblockinprogress'] = 'Blok {$a} sedang dihapus ...';
$string['deleteblockwarning'] = '<p> Anda akan menghapus blok yang muncul di tempat lain. </p> <p> Lokasi blok asli: {$a->location} <br /> Tampilkan jenis halaman: {$a->pagetype} </ p> <p> Anda yakin ingin melanjutkan? </p>';
$string['deletecheck'] = 'Hapus blok {$a}?';
$string['deletecheck_modal'] = 'Hapus blok?';
$string['hideblock'] = 'Sembunyikan blok {$a}';
$string['hidepanel'] = 'Sembunyikan panel';
$string['moveblock'] = 'Pindahkan blok {$a}';
$string['moveblockafter'] = 'Pindahkan blok ke setelah blok {$a}';
$string['moveblockbefore'] = 'Pindahkan blok ke sebelum blok {$a}';
$string['moveblockinregion'] = 'Pindahkan blok ke posisi {$a}';
$string['movingthisblockcancel'] = 'Memindahkan blok ini ({$a})';
$string['myblocks'] = 'Blok saya';
$string['onthispage'] = 'Pada halaman ini';
$string['pagetypes'] = 'Tipe halaman';
$string['pagetypewarning'] = 'Jenis halaman yang ditentukan sebelumnya tidak lagi dapat dipilih. Silakan pilih jenis halaman yang paling sesuai di bawah ini.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Rekam ketika pengguna memasak blok';
$string['privacy:metadata:userpref:hiddenblock'] = 'Rekam ketika pengguna menciutkan/menyembunyikan blok';
$string['privacy:request:blockisdocked'] = 'Menunjukkan apakah blok telah dipasang';
$string['privacy:request:blockishidden'] = 'Menunjukkan apakah blok disembunyikan/diciutkan';
$string['region'] = 'Posisi';
$string['restrictpagetypes'] = 'Tampilkan pada tipe laman';
$string['showblock'] = 'Tampilkan blok {$a}';
$string['showoncontextandsubs'] = 'Tampilkan pada \'{$a}\' dan semua halaman di dalamnya';
$string['showoncontextonly'] = 'Tampilkan pada \'{$a}\' saja';
$string['showonentiresite'] = 'Tampilkan pada keseluruhan situs';
$string['showonfrontpageandsubs'] = 'Tampilan di beranda situs dan halaman apa pun yang ditambahkan ke beranda situs.';
$string['showonfrontpageonly'] = 'Tampilkan pada beranda situs saja';
$string['subpages'] = 'Pilih laman';
$string['thisspecificpage'] = 'Laman tertentu';
$string['visible'] = 'Dapat terlihat';
$string['weight'] = 'Bobot';
$string['wherethisblockappears'] = 'Dimana blok ini akan muncul';
