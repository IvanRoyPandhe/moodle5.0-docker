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
 * Strings for component 'factor_grace', language 'id', version '5.0'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Memungkinkan masuk tanpa faktor lain untuk jangka waktu tertentu.';
$string['pluginname'] = 'Masa tenggang';
$string['preferences'] = 'Preferensi pengguna';
$string['privacy:metadata'] = 'Pengaya faktor masa tenggang tidak menyimpan data pribadi apa pun';
$string['redirectsetup'] = 'Anda harus menyelesaikan penyiapan Autentikasi multifaktor sebelum dapat melanjutkan.';
$string['revokeexpiredfactors'] = 'Cabut faktor masa tenggang yang sudah habis masa berlakunya';
$string['settings:customwarning'] = 'Peringatan konten spanduk';
$string['settings:customwarning_help'] = 'Tambahkan konten di sini untuk mengganti pemberitahuan peringatan tenggang dengan konten HTML kustom. Menambahkan {timeremaining} dalam teks akan menggantikannya dengan durasi tenggang saat ini bagi pengguna, dan {setuplink} akan menggantikan URL laman penyiapan untuk pengguna.';
$string['settings:description'] = 'Izinkan pengguna untuk masuk tanpa MFA selama jangka waktu tertentu, sehingga mereka punya waktu untuk menyiapkan faktor autentikasi mereka. Setelah masa tenggang berakhir, pengguna harus menggunakan MFA untuk masuk.';
$string['settings:forcesetup'] = 'Paksa setelan faktor';
$string['settings:forcesetup_help'] = 'Memaksa pengguna ke halaman preferensi untuk menyiapkan autentikasi multifaktor ketika masa tenggang berakhir. Jika tidak dicentang, pengguna tidak akan dapat mengautentikasi ketika masa tenggang berakhir.';
$string['settings:graceperiod'] = 'Masa tenggang';
$string['settings:graceperiod_help'] = 'Periode waktu ketika pengguna dapat mengakses situs tanpa faktor yang dikonfigurasi dan diaktifkan.';
$string['settings:ignorelist'] = 'Faktor yang diabaikan';
$string['settings:ignorelist_help'] = 'Masa tenggang tidak akan memberikan poin jika ada faktor lain yang dapat digunakan pengguna untuk melakukan autentikasi dengan autentikasi multifaktor. Faktor apa pun di sini tidak akan dihitung dalam masa tenggang saat memutuskan apakah akan memberikan poin. Hal ini memungkinkan masa tenggang untuk mengizinkan autentikasi jika faktor lain seperti surel, memiliki masalah konfigurasi atau sistem.';
$string['settings:shortdescription'] = 'Izinkan pengguna masuk tanpa MFA selama periode tertentu, memberi mereka waktu untuk menyiapkan faktor autentikasi.';
$string['setupfactors'] = 'Saat ini Anda berada dalam masa tenggang, dan mungkin tidak memiliki cukup faktor untuk masuk setelah masa tenggang berakhir. Buka {$a->url} untuk memeriksa status autentikasi Anda dan menyiapkan faktor autentikasi lainnya. Masa tenggang Anda akan berakhir dalam {$a->time}.';
$string['summarycondition'] = 'berada dalam masa tenggang';
