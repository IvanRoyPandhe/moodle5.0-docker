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
 * Strings for component 'qtype_vplquestion', language 'id', version '5.0'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allornothing'] = 'Semua atau tidak sama sekali';
$string['answertemplate'] = 'Templat jawaban';
$string['answertemplate_help'] = 'Tulis di sini kode apa yang akan diisi di kotak jawaban untuk siswa.';
$string['cannotimportquestionvplnotfound'] = 'Peringatan impor: id modul VPL yang ditentukan dalam Pertanyaan VPL "{$a}" tidak valid.';
$string['cannotimportquestionvplunreachable'] = 'Peringatan impor: VPL yang ditentukan dalam Pertanyaan VPL "{$a}" tidak ada dalam kursus ini.';
$string['cfg:evaluationtries'] = 'Jumlah percobaan internal untuk evaluasi';
$string['cfg:evaluationtries_help'] = 'Jika diatur ke lebih dari 1, server akan mencoba beberapa kali untuk mengevaluasi pertanyaan jika evaluasi gagal (karena kesalahan evaluasi dapat terjadi).';
$string['choose'] = 'Pilih...';
$string['closerecievednoretrieve'] = 'Operasi dibatalkan oleh server eksekusi. Batasan sumber daya eksekusi mungkin telah terlampaui. Alasan: {$a}';
$string['compilation'] = 'Kompilasi:';
$string['correction'] = 'Koreksi';
$string['editorfontsize'] = 'Ukuran editor fon:';
$string['editoroptions'] = 'Opsi editor:';
$string['editortheme'] = 'Tema editor:';
$string['evaluation'] = 'Evaluasi:';
$string['evaluationdetails'] = 'Detail evaluasi:';
$string['evaluationerror'] = 'Kesalahan evaluasi:';
$string['execerror'] = 'Kesalahan eksekusi:';
$string['execfiles'] = 'Berkas eksekusi';
$string['execfiles_help'] = 'Anda dapat mengedit berkas eksekusi di sini. Ini hanya dikirim selama evaluasi (dan Pra-periksa apakah berkas sama), dan tidak selama dijalankan (kecuali untuk berkas yang ditentukan sebagai "untuk disimpan saat dijalankan" di VPL).<br>
Untuk menambahkan berkas, tambahkan berkas tersebut di VPL sebagai berkas eksekusi.<br> Jika ada berkas yang tidak ingin Anda gunakan, tulis "UNUSED" pada baris pertama dan berkas tersebut akan dihilangkan.';
$string['execfilesevalsettings'] = 'Berkas eksekusi dan evaluasi setelan';
$string['execution'] = 'Kesalahan eksekusi:';
$string['flagifproblem'] = 'Jika Anda merasa ini merupakan masalah pada pertanyaan, harap tandai dan hubungi pengajar Anda.';
$string['gradetypeerror'] = 'Tampaknya evaluasi tersebut menghasilkan nilai non-numerik: {$a}';
$string['gradingmethod'] = 'Penilaian';
$string['gradingmethod_help'] = 'Menentukan metode penilaian untuk pertanyaan ini. <ul><li>Jika "Semua atau tidak sama sekali" dipilih, siswa akan mendapatkan nilai 100% atau 0% untuk pertanyaan ini, tergantung apakah mereka mendapat nilai VPL sempurna atau tidak.</li> <li>Jika "Penskalaan" dipilih, nilai siswa untuk pertanyaan ini akan disesuaikan dengan nilai VPL mereka.</li></ul>';
$string['informationtext'] = 'Pertanyaan VPL';
$string['lastservermessage'] = 'Pesan server eksekusi terakhir yang diterima: "{$a}"';
$string['merge'] = 'Gabung';
$string['nogradeerror'] = 'Terjadi kesalahan saat menilai soal (tidak ada nilai yang diperoleh). {$a}';
$string['nogradenoerror'] = 'Tidak ada kesalahan yang muncul - nilai mentah yang diterima adalah "{$a}".';
$string['noprecheck'] = 'Tidak ada Pra-periksa';
$string['overwrite'] = 'Timpa';
$string['pleaseanswer'] = 'Tolong berikan jawaban.';
$string['pluginname'] = 'Pertanyaan VPL';
$string['pluginname_help'] = 'Pertanyaan VPL memungkinkan Anda membuat latihan pengkodean sederhana.<br> Ini bekerja dengan VPL, tetapi dirancang untuk menjadi jauh lebih sederhana di sisi siswa.';
$string['pluginnameadding'] = 'Menambahkan Pertanyaan VPL';
$string['pluginnameediting'] = 'Mengedit Pertanyaan VPL';
$string['pluginnamesummary'] = 'Pertanyaan VPL memungkinkan Anda melakukan latihan pengkodean sederhana.<br> Berfungsi dengan VPL, tetapi dirancang agar jauh lebih mudah bagi siswa.';
$string['possiblesolution'] = 'Solusi yang mungkin:';
$string['precheck'] = 'Pra-periksa';
$string['precheckexecfiles'] = 'Pra-periksa berkas eksekusi';
$string['precheckexecfiles_help'] = 'Anda dapat mengedit berkas eksekusi yang akan digunakan untuk Pra-periksa di sini. Untuk informasi tambahan, lihat bantuan dari "Berkas eksekusi".';
$string['precheckhasownfiles'] = 'Pra-periksa menggunakan berkas eksekusinya sendiri';
$string['precheckhassamefiles'] = 'Pra-periksa menggunakan file eksekusi yang sama dengan Pemeriksaan';
$string['precheckhelp'] = 'Evaluasi jawaban Anda pada subset tes';
$string['precheckisdebug'] = 'Pra-periksa adalah Awakutu';
$string['precheckpreference'] = 'Preferensi pra-periksa';
$string['precheckpreference_help'] = 'Menentukan apakah siswa akan memiliki akses ke tombol "Pra-cek" selama menjawab pertanyaan (dengan penggunaan tak terbatas). <ul><li>Jika "Tidak Ada Pra-cek" dipilih, tombol tersebut tidak akan tersedia.</li>
<li>Jika "Pra-cek adalah Debug" dipilih, tombol tersebut akan berfungsi sebagai tombol "Debug" pada VPL. Harap perhatikan bahwa tombol tersebut tidak menyediakan antarmuka grafis biasa.</li>
<li>Jika "Pra-cek menggunakan berkas eksekusi yang sama dengan Cek" dipilih, tombol akan mengevaluasi jawaban dengan berkas eksekusi di atas.</li>
 <li>Jika "Pra-cek menggunakan berkas eksekusinya sendiri" dipilih, Anda akan dapat mengedit berkas eksekusi tertentu dan berkas tersebut akan digunakan untuk Pra-cek. Ini adalah opsi yang direkomendasikan, karena memungkinkan Anda menentukan subset tes yang dapat diakses siswa selama menjawab pertanyaan.</li></ul>';
$string['qvplbase'] = 'Templat Pertanyaan VPL';
$string['run'] = 'Jalankan';
$string['scaling'] = 'Skala';
$string['selectavpl'] = '<a href="{$a}">Pilih templat VPL</a> untuk mengedit berkas eksekusi.';
$string['serverexecutionerrorstudentmessage'] = 'Hal ini mungkin disebabkan oleh faktor eksternal. Silakan coba evaluasi lagi atau hubungi pengajar Anda.';
$string['serverexecutionerrorteachermessage'] = 'Hal ini mungkin disebabkan oleh faktor eksternal, yang berarti ini belum tentu merupakan kesalahan Anda. Coba evaluasi lagi atau hubungi bagian dukungan.';
$string['serverwassilent'] = 'Server eksekusi tidak bersuara - tidak ada pesan yang diterima';
$string['teachercorrection'] = 'Koreksi Guru';
$string['teachercorrection_help'] = 'Tuliskan koreksi Anda untuk pertanyaan ini di sini.';
$string['templatecontext'] = 'Edit templat';
$string['templatecontext_help'] = 'Anda dapat mengedit kode yang akan dijalankan di sini (misalnya konten berkas yang dibutuhkan).<br> Tag "{{ANSWER}}" akan diganti dengan jawaban siswa. Anda dapat memindahkan tag ke tempat yang Anda inginkan, tetapi jangan menghapusnya!';
$string['templatevpl'] = 'Templat VPL';
$string['templatevpl_help'] = 'Pilih VPL yang akan menjadi dasar pertanyaan ini.<br> <b>Catatan:</b> Harap pilih VPL yang dikhususkan untuk tujuan ini, karena kiriman siswa pada VPL ini dapat dibuang jika setelan tersebut telah diperiksa oleh administrator platform.';
$string['templatevplchange'] = 'Perubahan templat VPL';
$string['templatevplchange_help'] = 'Kode VPL templat dan berkas eksekusi saat ini memiliki konten.<br> Mengubah VPL templat akan menimpa konten ini, kecuali Anda memutuskan untuk menggabungkan konten saat ini ke konten yang baru.<br>
Harap perhatikan bahwa penggabungan hanya akan berfungsi pada berkas dengan nama yang sama. Berkas yang tidak memiliki nama yang sama akan ditimpa.';
$string['templatevplchangeprompt'] = 'Apa yang ingin Anda lakukan dengan konten templat dan berkas eksekusi saat ini?';
$string['unexpectedendofws'] = 'Komunikasi terhenti tidak terduga dengan server eksekusi. Alasan: {$a}';
$string['unexpectederror'] = 'Terjadi kesalahan tak terduga selama evaluasi. {$a}';
$string['validateonsave'] = 'Validasi';
$string['validateonsave_help'] = 'Jika dicentang, kode yang disediakan akan diuji terhadap kasus uji yang disediakan sebelum menyimpan pertanyaan ini.';
$string['vplnotavailablewarning'] = 'Peringatan! VPL yang menjadi dasar pertanyaan ini tidak tersedia. Pertanyaan tersebut mungkin tidak berfungsi dengan baik.';
$string['vplnotfounderror'] = 'Kesalahan! VPL yang menjadi dasar pertanyaan ini tidak dapat diwujudkan:<br>{$a}';
$string['vplnotincoursewarning'] = 'Peringatan! VPL yang menjadi dasar pertanyaan ini tidak terdapat dalam kursus ini. Pertanyaan tersebut mungkin tidak berfungsi dengan baik.';
$string['wsconnectionerror'] = 'Tidak dapat terhubung ke server.';
$string['wshandshakeerror'] = 'Jabat tangan Websocket dengan server gagal.';
$string['wsreaderror'] = 'Gagal membaca dari websocket.';
