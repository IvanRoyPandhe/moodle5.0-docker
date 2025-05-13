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
 * Strings for component 'factor_auth', language 'id', version '5.0'.
 *
 * @package     factor_auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Periksa jenis autentikasi yang digunakan untuk masuk sebagai faktor MFA.';
$string['pluginname'] = 'Jenis Autentikasi';
$string['privacy:metadata'] = 'Pengaya faktor tipe otentikasi tidak menyimpan data pribadi apa pun.';
$string['settings:description'] = 'Verifikasi pengguna secara otomatis berdasarkan jenis autentikasi mereka.';
$string['settings:goodauth'] = 'Jenis otentikasi faktor';
$string['settings:goodauth_help'] = 'Pilih semua jenis autentikasi untuk digunakan sebagai faktor MFA. Jenis apa pun yang tidak dipilih tidak akan dianggap GAGAL di MFA.';
$string['settings:shortdescription'] = 'Memungkinkan pengguna melewati langkah autentikasi tambahan berdasarkan jenis autentikasi mereka.';
$string['summarycondition'] = 'memiliki tipe autentikasi {$a}';
