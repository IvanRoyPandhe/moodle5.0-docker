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
 * Strings for component 'qtype_numerical', language 'id', version '5.0'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Kesalahan yang diterima';
$string['addmoreanswerblanks'] = 'Kosong untuk {no} banyak jawaban';
$string['addmoreunitblanks'] = 'Kosong untuk {no} banyak unit.';
$string['answercolon'] = 'Jawaban:';
$string['answererror'] = 'Galat';
$string['answermustbenumberorstar'] = 'Jawaban harus ditulis dengan angka, contohnya -1.234 atau 3e8, atau \'*\'.';
$string['answerno'] = 'Jawaban {$a}';
$string['decfractionofquestiongrade'] = 'sebagai pecahan (0-1) dari nilai soal';
$string['decfractionofresponsegrade'] = 'sebagai pecahan (0-1) dari nilai jawaban';
$string['decimalformat'] = 'desimal';
$string['editableunittext'] = 'elemen input teks';
$string['errornomultiplier'] = 'Anda harus menentukan pengganda untuk unit ini.';
$string['errorrepeatedunit'] = 'Anda tidak diperkenankan memiliki dua unit dengan nama yang sama.';
$string['geometric'] = 'Geometri';
$string['invalidnumber'] = 'Anda harus memasukan angka yang valid.';
$string['invalidnumbernounit'] = 'Anda harus memasukkan angka yang valid. Jangan sertakan unit dalam jawaban Anda.';
$string['invalidnumericanswer'] = 'Satu dari jawaban yang baru saja anda masukan bukan angka valid.';
$string['invalidnumerictolerance'] = 'Salah satu toleransi yang Anda masukkan bukan nomor yang valid.';
$string['leftexample'] = 'di sebelah kiri, misalnya $1,00 atau £1,00';
$string['manynumerical'] = 'Unit adalah opsional. Jika unit dimasukkan, itu digunakan untuk mengubah jawaban ke Unit 1 sebelum penilaian.';
$string['multiplier'] = 'Pengganda';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Tulisan yang TIDAK dapat diubah dari teks Unit No 1';
$string['nonvalidcharactersinnumber'] = 'Karakter TIDAK valid ada di angka';
$string['notenoughanswers'] = 'Setidaknya anda harus memasukan satu jawaban.';
$string['nounitdisplay'] = 'Tidak ada unit penilaian';
$string['numericalmultiplier'] = 'Pengganda';
$string['numericalmultiplier_help'] = 'Nilai pengganda adalah sebuah faktor dimana jawaban angka yang benar akan digandakan. Unit pertama (Unit 1) memiliki pengganda 1 . Maka dari itu, jika jawaban angka yang benar adalah 5500 dan anda memisalkan W sebagai Unit 1 yang dimana memiliki 1 sebagai pengganda tetap, maka jawaban yang benar adalah 5500 W. Jika ada menambahkan unit kW dengan nilai pengganda (pengali) 0,001 maka ini akan memberikan jawaban tepat sebesar 5.5kW. Artinya, jawaban 5500W atau 5.5kW akan dianggap benar Pastikan kesalahan yang diperbolehkan disertakan juga, jadi contoh kesalahan yang diperbolehkan adalah 100W menjadi 0.1kW.';
$string['oneunitshown'] = 'Unit 1 secara otomatis ditampilkan di sebelah kotak jawaban.';
$string['onlynumerical'] = 'Unit sama sekali tidak digunakan. Hanya angka numeral yang dinilai';
$string['pleaseenterananswer'] = 'Sila masukkan jawaban';
$string['pleaseenteranswerwithoutthousandssep'] = 'Sila masukkan jawaban anda tanpa menggunakan pemisah angka ribuan ({$a}).';
$string['pluginname'] = 'Numerik';
$string['pluginname_help'] = 'Dari perspektif pelajar, sebuah soal numerik sama seperti soal jawaban singkat. Perbedaannya, jawaban numerial diperbolehkan menggunakan angka toleransi yang tetap. Hal ini berlaku dengan jarak jawaban pasti yang bisa diambil menjadi satu jawaban. Contohnya, Jika jawaban suatu soal adalah 10 dengan angka toleransi sebesar 2, maka jawaban diantara angka 8 sampai 12 akan diterima sebagai jawaban yang benar';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Menambahkan sebuah soal Numerik';
$string['pluginnameediting'] = 'Mengedit soal numerik';
$string['pluginnamesummary'] = 'Jawaban diperbolehkan menggunakan angka, mungkin dengan satuan, yang dinilai dengan membandingkan beberapa contoh jawaban, mungkin dengan toleransi';
$string['privacy:metadata'] = 'Pengaya tipe soal numerik tidak akan menyimpan data personal';
$string['privacy:preference:defaultmark'] = 'Poin bawaan ditetapkan untuk soal yang diberikan.';
$string['privacy:preference:multichoicedisplay'] = 'Apakah unit ditampilkan sebagai elemen input teks, pilihan ganda, atau menu tarik-turun.';
$string['privacy:preference:penalty'] = 'Penalti untuk setiap upaya yang salah ketika soal dijalankan menggunakan perilaku \'Interaktif dengan beberapa upaya\' atau \'Mode adaptif\'.';
$string['privacy:preference:unitgradingtypes'] = 'Apakah penalti unit berlaku sebagai pecahan (0-1) dari nilai jawaban atau nilai soal.';
$string['privacy:preference:unitpenalty'] = 'Berapa pecahan (0-1) dari nilai jawaban atau nilai soal yang harus diterapkan?';
$string['privacy:preference:unitrole'] = 'Apakah unit itu penting, opsional atau tidak diharapkan.';
$string['privacy:preference:unitsleft'] = 'Apakah unit ditampilkan di sebelah kiri (misalnya $, £) atau di sebelah kanan (misalnya kg, km, cm).';
$string['relative'] = 'Relatif';
$string['rightexample'] = 'di sebelah kanan, misalnya 1.00cm atau 1.00km';
$string['selectunit'] = 'Pilih satu unit';
$string['selectunits'] = 'Pilih unit';
$string['studentunitanswer'] = 'Unit dimasukkan menggunakan';
$string['tolerancetype'] = 'Jenis toleransi';
$string['unit'] = 'Unit';
$string['unitappliedpenalty'] = 'Poin ini termasuk penalti {$a} untuk unit yang buruk.';
$string['unitchoice'] = 'pilihan ganda terpilih';
$string['unitedit'] = 'Edit unit';
$string['unitgraded'] = 'Unit harus diberikan, dan akan dinilai.';
$string['unithandling'] = 'Penanganan unit';
$string['unitincorrect'] = 'Anda tidak memberikan unit yang benar.';
$string['unitmandatory'] = 'Wajib';
$string['unitmandatory_help'] = '* Jawaban akan dinilai menggunakan unit tertulis. * Unit penalti akan diterapkan jika kolom unit kosong';
$string['unitnotselected'] = 'Anda harus memilih unit.';
$string['unitonerequired'] = 'Anda harus memasukkan setidaknya satu unit';
$string['unitoptional'] = 'Unit opsional';
$string['unitoptional_help'] = '* Jika bidang unit tidak kosong, jawaban akan dinilai menggunakan unit ini. * Jika unit ditulis dengan buruk atau tidak diketahui, jawaban akan dianggap tidak valid.';
$string['unitpenalty'] = 'Unit penalti';
$string['unitpenalty_help'] = 'Penalti diterapkan jika * nama unit yang salah dimasukkan ke dalam input unit, atau * unit dimasukkan ke dalam kotak input nilai';
$string['unitposition'] = 'Unit go';
$string['units'] = 'Unit';
$string['unitselect'] = 'menu tarik-turun';
$string['unitx'] = 'Unit {no}';
$string['xmustbenumeric'] = '{$a} harus berupa angka.';
$string['xmustnotbenumeric'] = '{$a} tidak boleh berupa angka.';
$string['youmustenteramultiplierhere'] = 'Anda harus memasukkan pengganda di sini.';
