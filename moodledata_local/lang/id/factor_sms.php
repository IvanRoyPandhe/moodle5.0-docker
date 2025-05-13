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
 * Strings for component 'factor_sms', language 'id', version '5.0'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Kelola nomor ponsel';
$string['action:revoke'] = 'Hapus nomor ponsel';
$string['addnumber'] = 'Nomor ponsel';
$string['clientnotfound'] = 'Klien layanan AWS tidak ditemukan. Klien harus memiliki nama kelas yang sepenuhnya memenuhi syarat, mis. \\Aws\\S3\\S3Client.';
$string['editphonenumber'] = 'Edit nomor telepon';
$string['editphonenumberinfo'] = 'Jika Anda tidak menerima kode atau memasukkan nomor yang salah, harap edit nomor tersebut dan coba lagi.';
$string['error:emptyverification'] = 'Kode kosong. Coba lagi.';
$string['error:wrongphonenumber'] = 'Nomor telepon yang Anda berikan tidak dalam format yang valid.';
$string['error:wrongverification'] = 'Salah kode. Coba lagi.';
$string['errorawsconection'] = 'Galat saat menyambung ke server AWS: {$a}';
$string['errorsmssent'] = 'Galat saat mengirim pesan SMS yang berisi kode verifikasi Anda.';
$string['event:smssent'] = 'Pesan SMS terkirim.';
$string['event:smssentdescription'] = 'Pengguna dengan ID {$a->userid} dikirimi kode verifikasi melalui SMS. Informasi: {$a->debuginfo}';
$string['info'] = 'Minta kode verifikasi dikirimkan ke nomor ponsel yang Anda pilih.';
$string['logindesc'] = 'Pesan SMS berisi kode 6 digit yang dikirimkan ke nomor ponsel {$a}';
$string['loginoption'] = 'Minta kode dikirimkan ke ponsel Anda';
$string['loginskip'] = 'Saya tidak mendapatkan kode';
$string['loginsubmit'] = 'Lanjutkan';
$string['logintitle'] = 'Masukkan kode verifikasi yang dikirimkan ke ponsel Anda';
$string['managefactor'] = 'Kelola SMS';
$string['managefactorbutton'] = 'Kelola';
$string['manageinfo'] = 'Anda menggunakan \'{$a}\' untuk mengautentikasi.';
$string['notification:smsgatewaymigration'] = 'Setelan SMS telah dipindahkan';
$string['notification:smsgatewaymigrationinfo'] = 'Subsistem SMS baru kini tersedia untuk mengelola dan mengonfigurasi semua fungsi terkait SMS. Konfigurasi SMS Anda yang ada telah dipindahkan ke halaman <a href="{$a}">Gerbang SMS</a>.';
$string['phonehelp'] = 'Masukkan nomor ponsel Anda (termasuk kode negara) untuk menerima kode verifikasi.';
$string['pluginname'] = 'SMS';
$string['privacy:metadata'] = 'Pengaya Faktor SMS tidak menyimpan data pribadi apa pun.';
$string['revokefactorconfirmation'] = 'Hapus SMS \'{$a}\'?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Kunci';
$string['settings:aws:key_help'] = 'Kredensial kunci API Amazon.';
$string['settings:aws:region'] = 'Wilayah';
$string['settings:aws:region_help'] = 'Wilayah gateway API Amazon.';
$string['settings:aws:secret'] = 'Rahasia';
$string['settings:aws:secret_help'] = 'Kredensial rahasia API Amazon.';
$string['settings:aws:usecredchain'] = 'Temukan kredensial AWS menggunakan rantai penyedia kredensial bawaan';
$string['settings:countrycode'] = 'Kode nomor negara';
$string['settings:countrycode_help'] = 'Kode panggilan tanpa awalan + sebagai bawaan jika pengguna tidak memasukkan nomor internasional dengan awalan +.

Lihat tautan ini untuk daftar kode panggilan: {$a}';
$string['settings:duration'] = 'Durasi validitas';
$string['settings:duration_help'] = 'Jangka waktu validitas kode tersebut.';
$string['settings:gateway'] = 'Gerbang SMS';
$string['settings:gateway_help'] = 'Gerbang SMS';
$string['settings:heading'] = 'Pengguna akan menerima kode verifikasi 6 digit melalui SMS, yang harus dimasukkan untuk menyelesaikan proses masuk log. Pengguna harus mendaftarkan nomor ponsel mereka terlebih dahulu.';
$string['settings:setupdesc'] = 'Untuk menggunakan SMS sebagai faktor autentikasi, pertama-tama Anda perlu <a href="{$a}">menyiapkan gerbang SMS</a>.';
$string['settings:shortdescription'] = 'Meminta pengguna untuk memasukkan kode yang diterima melalui SMS saat masuk.';
$string['settings:smsgateway'] = 'Gerbang SMS';
$string['settings:smsgateway_help'] = '<br><br>Untuk menggunakan SMS sebagai faktor autentikasi, Anda harus <a href="{$a}">menyiapkan gerbang SMS</a> terlebih dahulu.';
$string['setupfactor'] = 'Persiapkan sms';
$string['setupfactorbutton'] = 'Persiapkan';
$string['setupsubmitcode'] = 'Simpan';
$string['setupsubmitphone'] = 'Kirim kode';
$string['smsstring'] = '{$a->code} adalah kode keamanan satu kali {$a->fullname} Anda.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Menggunakan kode keamanan satu kali SMS';
