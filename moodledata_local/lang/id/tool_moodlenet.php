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
 * Strings for component 'tool_moodlenet', language 'id', version '5.0'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Menambahkan konten dari MoodleNet';
$string['aria:enterprofile'] = 'Masukkan URL profil MoodleNet Anda';
$string['aria:footermessage'] = 'Jelajahi konten di MoodleNet';
$string['autoenablenotification'] = '<p>Di Moodle 4.0 dan seterusnya, integrasi <a href="https://moodle.net/">MoodleNet</a> diaktifkan secara bawaan di fitur Lanjutan. Pengguna dengan kemampuan untuk membuat dan mengelola aktivitas dapat menelusuri MoodleNet melalui pemilih aktivitas dan mengimpor sumber daya MoodleNet ke kursus mereka.</p><p>Jika diinginkan, instans MoodleNet alternatif dapat ditentukan di <a href="{$ a->settingslink}">Setelan masuk MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Setelan MoodleNet bawaan berubah.';
$string['browsecontentmoodlenet'] = 'Atau telusuri konten di MoodleNet';
$string['clearsearch'] = 'Bersihkan pencarian';
$string['connectandbrowse'] = 'Hubungkan ke dan jelajahi:';
$string['defaultmoodlenet'] = 'URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'URL model MoodleNet tersedia melalui pemilih aktivitas.';
$string['defaultmoodlenetname'] = 'Nama model MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Nama model MoodleNet yang tersedia melalui pemilih aktivitas.';
$string['defaultmoodlenetnamevalue'] = 'Pusat MoodleNet';
$string['enablemoodlenet'] = 'Aktifkan integrasi MoodleNet (masuk)';
$string['enablemoodlenet_desc'] = 'Jika diaktifkan, pengguna dengan kemampuan untuk membuat dan mengelola aktivitas dapat menelusuri MoodleNet melalui pemilih aktivitas dan mengimpor sumber daya MoodleNet ke dalam kursus mereka. Selain itu, pengguna dengan kemampuan untuk memulihkan cadangan dapat memilih berkas cadangan di MoodleNet dan mengembalikannya ke Moodle.';
$string['errorduringdownload'] = 'Galat saat mengunduh berkas: {$a}';
$string['footermessage'] = 'Atau telusuri konten di';
$string['forminfo'] = 'Profil MoodleNet Anda akan secara otomatis disimpan di profil Anda di situs ini.';
$string['importconfirm'] = 'Anda akan mengimpor konten "{$a->resourcename} ({$a->resourcetype})" ke dalam kursus "{$a->coursename}". Apakah anda yakin ingin melanjutkan?';
$string['importconfirmnocourse'] = 'Anda akan mengimpor konten "{$a->resourcename} ({$a->resourcetype})" ke situs Anda. Apakah anda yakin ingin melanjutkan?';
$string['importformatselectguidingtext'] = 'Dalam format apa Anda ingin konten "{$a->name} ({$a->type})" ditambahkan ke kursus Anda?';
$string['importformatselectheader'] = 'Pilih format tampilan konten';
$string['inputhelp'] = 'Atau jika Anda sudah memiliki akun MoodleNet, salin ID dari profil MoodleNet Anda dan tempel di sini:';
$string['instancedescription'] = 'MoodleNet adalah platform media sosial terbuka untuk pendidik, dengan fokus pada kurasi kolaboratif koleksi sumber daya terbuka.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile tidak diformat dengan benar';
$string['missinginvalidpostdata'] = 'Informasi sumber daya dari MoodleNet hilang, atau dalam format yang salah. Jika ini terjadi berulang kali, silakan hubungi administrator situs.';
$string['mnetprofile'] = 'Profil MoodleNet';
$string['mnetprofiledesc'] = '<p>Masukkan detail profil MoodleNet Anda di sini untuk dialihkan ke profil Anda saat mengunjungi MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'Integrasi MoodleNet harus diaktifkan di Administrasi situs / MoodleNet sebelum impor sumber dapat diproses.';
$string['moodlenetsettings'] = 'Setelan masuk MoodleNet';
$string['notification'] = 'Anda akan mengimpor konten "{$a->name} ({$a->type})" ke situs Anda. Pilih kursus yang akan ditambahkan, atau <a href="{$a->cancelllink}">batalkan</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Alat MoodleNet hanya memfasilitasi komunikasi dengan MoodleNet. Ini tidak menyimpan data.';
$string['profilevalidationerror'] = 'Terjadi masalah saat mencoba memvalidasi ID profil MoodleNet Anda';
$string['profilevalidationfail'] = 'Silakan masukkan profil MoodleNet yang valid';
$string['profilevalidationpass'] = 'Kelihatan bagus!';
$string['removedmnetprofilenotification'] = 'Karena perubahan terbaru pada platform MoodleNet, setiap pengguna yang sebelumnya menyimpan ID profil MoodleNet mereka di situs harus memasukkan ID profil MoodleNet dalam format baru untuk mengautentikasi pada platform MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Perubahan format ID profil MoodleNet';
$string['saveandgo'] = 'Simpan dan jalankan';
$string['searchcourses'] = 'Cari kursus';
$string['selectpagetitle'] = 'Pilih halaman';
$string['uploadlimitexceeded'] = 'Ukuran berkas {$a->filesize} melebihi batas unggah pengguna sebesar {$a->uploadlimit} byte.';
