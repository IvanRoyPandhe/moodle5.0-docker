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
 * Strings for component 'factor_totp', language 'id', version '5.0'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Kelola pengautentikasi kata sandi satu kali (TOTP) berbasis waktu';
$string['action:revoke'] = 'Hapus pengautentikasi kata sandi satu kali berbasis waktu (TOTP).';
$string['devicename'] = 'Label perangkat';
$string['devicename_help'] = 'Ini adalah perangkat tempat Anda menginstal aplikasi autentikator. Anda dapat mengatur beberapa perangkat sehingga label ini membantu melacak perangkat mana yang sedang digunakan. Anda harus menyiapkan setiap perangkat dengan kode uniknya masing-masing sehingga dapat dicabut secara terpisah.';
$string['devicenameexample'] = 'misalnya "Work iPhone 11"';
$string['error:alreadyregistered'] = 'Kunci kata sandi satu kali berbasis waktu (TOTP) ini telah didaftarkan.';
$string['error:codealreadyused'] = 'Kode ini telah digunakan untuk mengautentikasi. Harap tunggu hingga kode baru dibuat, lalu coba lagi.';
$string['error:futurecode'] = 'Kode ini tidak valid. Harap verifikasi waktu pada perangkat pengautentikasi Anda sudah benar dan coba lagi. Waktu sistem saat ini adalah {$a}.';
$string['error:oldcode'] = 'Kode ini terlalu lama. Harap verifikasi waktu pada perangkat pengautentikasi Anda sudah benar dan coba lagi.
   Waktu sistem saat ini adalah {$a}.';
$string['error:wrongverification'] = 'Kode verifikasi salah.';
$string['factorsetup'] = 'Penyiapan aplikasi';
$string['info'] = 'Hasilkan kode verifikasi menggunakan aplikasi autentikator.';
$string['logindesc'] = 'Gunakan aplikasi autentikator di perangkat seluler Anda untuk membuat kode.';
$string['loginoption'] = 'Gunakan aplikasi autentikator di perangkat seluler Anda untuk membuat kode.';
$string['loginskip'] = 'Saya tidak memiliki perangkat saya';
$string['loginsubmit'] = 'Lanjutkan';
$string['logintitle'] = 'Verifikasi bahwa ini memang Anda melalui aplikasi seluler';
$string['managefactor'] = 'Kelola aplikasi pengautentikasi';
$string['managefactorbutton'] = 'Kelola';
$string['manageinfo'] = 'Anda menggunakan \'{$a}\' untuk mengautentikasi.';
$string['pluginname'] = 'Aplikasi autentikator';
$string['privacy:metadata'] = 'Pengaya faktor aplikasi Authenticator tidak menyimpan data pribadi apa pun.';
$string['replacefactor'] = 'Ganti aplikasi autentikator';
$string['replacefactorconfirmation'] = 'Ganti aplikasi pengautentikasi \'{$a}\'?';
$string['revokefactorconfirmation'] = 'Hapus aplikasi pengautentikasi \'{$a}\'?';
$string['settings:description'] = 'Pengguna perlu menginstal aplikasi autentikator di perangkat seluler mereka untuk membuat kode, yang harus dimasukkan saat masuk.';
$string['settings:shortdescription'] = 'Meminta pengguna untuk memasukkan kode dari aplikasi autentikator di perangkat mereka saat masuk.';
$string['settings:totplink'] = 'Tampilkan tautan penyiapan aplikasi seluler';
$string['settings:totplink_help'] = 'Jika diaktifkan, pengguna akan melihat opsi setelan ke-3 dengan tautan otpauth:// langsung';
$string['settings:window'] = 'Jendela verifikasi TOTP';
$string['settings:window_help'] = 'Jendela TOTP bertindak sebagai penyimpangan waktu dan menentukan berapa lama setiap kode valid.
     Periode, yaitu waktu antara kode yang baru dibuat, adalah 30 detik.
     Jika jendelanya 15 (bawaan) dan stempel waktu saat ini adalah 147682209, OTP yang diuji berada dalam 147682194 (147682209 - 15), 147682209, dan 147682224 (147682209 + 15).
     Jendelanya harus lebih rendah dari 30. Oleh karena itu, tes ini mencakup OTP sebelumnya tetapi tidak yang berikutnya.
     Anda dapat menyetelnya ke nilai yang lebih tinggi (hingga 29) sebagai solusi jika jam perangkat pengguna Anda sering kali sedikit salah.';
$string['setupfactor'] = 'Siapkan aplikasi autentikator';
$string['setupfactor:account'] = 'Akun:';
$string['setupfactor:devicename'] = 'Nama perangkat';
$string['setupfactor:devicenameinfo'] = 'Ini membantu Anda mengidentifikasi perangkat mana yang menerima kode verifikasi.';
$string['setupfactor:enter'] = 'Masukkan detail secara manual';
$string['setupfactor:instructionsdevicename'] = '1. Beri nama pada perangkat Anda.';
$string['setupfactor:instructionsscan'] = '2. Pindai kode QR dengan aplikasi autentikator Anda.';
$string['setupfactor:instructionsverification'] = '3. Masukkan kode verifikasi.';
$string['setupfactor:intro'] = 'Untuk menyiapkan metode ini, Anda perlu memiliki perangkat dengan aplikasi autentikator. Jika Anda tidak memiliki aplikasi, Anda dapat mengunduhnya. Misalnya, <a href="https://2fas.com/" target="_blank">Autentikasi 2FAS</a>, <a href="https://freeotp.github.io/" target="_blank ">OTP Gratis</a>, Google Authenticator, Microsoft Authenticator, atau Twilio Authy.';
$string['setupfactor:key'] = 'Kunci rahasia:';
$string['setupfactor:link'] = 'Atau masukkan detail secara manual.';
$string['setupfactor:link_help'] = 'Jika Anda menggunakan perangkat seluler dan sudah memasang aplikasi autentikator, tautan ini mungkin berfungsi. Perhatikan bahwa menggunakan TOTP pada perangkat yang sama dengan tempat Anda login dapat melemahkan manfaat MFA.';
$string['setupfactor:linklabel'] = 'Buka aplikasi yang sudah terpasang di perangkat ini';
$string['setupfactor:mode'] = 'Mode:';
$string['setupfactor:mode:timebased'] = 'Berdasarkan waktu';
$string['setupfactor:scanwithapp'] = 'Pindai kode QR dengan aplikasi autentikator pilihan Anda.';
$string['setupfactor:verificationcode'] = 'Kode verifikasi';
$string['setupfactorbutton'] = 'Persiapkan';
$string['summarycondition'] = 'Gunakan aplikasi TOTP';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Masukkan 6 digit kode verifikasi Anda';
$string['verificationcode_help'] = 'Buka aplikasi autentikator Anda seperti Google Authenticator dan cari kode 6 digit yang cocok dengan situs dan nama pengguna ini';
