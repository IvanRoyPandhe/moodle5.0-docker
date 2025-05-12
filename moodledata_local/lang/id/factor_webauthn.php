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
 * Strings for component 'factor_webauthn', language 'id', version '5.0'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Kelola kunci keamanan';
$string['action:revoke'] = 'Hapus kunci keamanan';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hibrida';
$string['authenticator:internal'] = 'Internal';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nama kunci keamanan';
$string['error'] = 'Gagal mengautentikasi';
$string['error:alreadyregistered'] = 'Rahasia kunci keamanan ini telah didaftarkan.';
$string['info'] = 'Gunakan kunci keamanan fisik atau pemindai sidik jari.';
$string['logindesc'] = 'Klik lanjutkan untuk menggunakan kunci keamanan Anda.';
$string['loginoption'] = 'Gunakan kunci keamanan';
$string['loginskip'] = 'Saya tidak memiliki kunci keamanan';
$string['loginsubmit'] = 'Lanjutkan';
$string['logintitle'] = 'Verifikasi bahwa ini memang Anda dengan kunci keamanan';
$string['managefactor'] = 'Kelola kunci keamanan';
$string['managefactorbutton'] = 'Kelola';
$string['manageinfo'] = 'Anda menggunakan \'{$a}\' untuk mengautentikasi.';
$string['pluginname'] = 'Kunci keamanan';
$string['privacy:metadata'] = 'Pengaya Faktor Kunci Keamanan tidak menyimpan data pribadi apa pun.';
$string['register'] = 'Daftarkan kunci keamanan';
$string['registererror'] = 'Tidak dapat mendaftarkan kunci keamanan: {$a}';
$string['registersuccess'] = 'Kunci keamanan terdaftar.';
$string['replacefactor'] = 'Ganti kunci keamanan';
$string['replacefactorconfirmation'] = 'Ganti kunci keamanan \'{$a}\'?';
$string['revokefactorconfirmation'] = 'Hapus kunci keamanan \'{$a}\'?';
$string['settings:authenticatortypes'] = 'Jenis pengautentikasi';
$string['settings:authenticatortypes_help'] = 'Alihkan jenis pengautentikasi tertentu';
$string['settings:description'] = '<p>Pengguna melakukan autentikasi menggunakan kunci keamanan fisik, seperti token USB atau NFC, atau metode biometrik seperti sidik jari. Selama masuk log, mereka harus menggunakan kunci keamanan secara fisik untuk memverifikasi identitas mereka.</p> <p>Pengguna perlu menyiapkan kunci keamanan mereka sendiri terlebih dahulu.</p>';
$string['settings:shortdescription'] = 'Meminta pengguna untuk menggunakan kunci keamanan, seperti token USB atau NFC, atau metode biometrik, selama masuk.';
$string['settings:userverification'] = 'Verifikasi pengguna';
$string['settings:userverification_help'] = 'Berfungsi untuk memastikan orang yang mengautentikasi memang benar seperti yang mereka katakan. Verifikasi pengguna dapat dilakukan dalam berbagai bentuk, seperti kata sandi, PIN, sidik jari, dll.';
$string['setupfactor'] = 'Siapkan kunci keamanan';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Daftarkan kunci keamanan.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Beri nama pada kunci Anda.';
$string['setupfactor:intro'] = 'Kunci keamanan adalah perangkat fisik yang dapat Anda gunakan untuk mengautentikasi diri Anda sendiri. Kunci keamanan dapat berupa token USB, perangkat Bluetooth, atau pemindai sidik jari bawaan di ponsel atau komputer Anda.';
$string['setupfactor:securitykeyinfo'] = 'Ini membantu Anda mengidentifikasi kunci keamanan mana yang Anda gunakan.';
$string['setupfactorbutton'] = 'Persiapkan';
$string['summarycondition'] = 'menggunakan autentikator yang didukung WebAuthn';
$string['userverification:discouraged'] = 'Verifikasi pengguna tidak boleh digunakan, misalnya untuk meminimalkan interaksi pengguna';
$string['userverification:preferred'] = 'Verifikasi pengguna lebih disukai, otentikasi tidak akan gagal jika verifikasi pengguna tidak ada';
$string['userverification:required'] = 'Verifikasi pengguna diperlukan (misalnya dengan pin). Autentikasi gagal jika kunci tidak memiliki verifikasi pengguna';
