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
 * Strings for component 'factor_cohort', language 'id', version '5.0'.
 *
 * @package     factor_cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Kohor';
$string['privacy:metadata'] = 'Pengaya Faktor Kohort tidak menyimpan data pribadi apa pun.';
$string['settings:cohort'] = 'Pengaya faktor kohor tidak menyimpan data pribadi apa pun.';
$string['settings:cohort_help'] = 'Pilih kohor yang tidak lolos faktor ini. Hal ini memungkinkan Anda memaksa kohor ini menggunakan faktor lain untuk mengautentikasi.';
$string['settings:description'] = '<p>Pilih kohor pengguna yang harus menggunakan faktor tambahan untuk autentikasi. Jika faktor ini tidak disiapkan, semua kelompok akan diminta untuk menggunakan faktor tambahan secara bawaan.</p> <p>Faktor ini mengharuskan kohor dibuat.</p>';
$string['settings:shortdescription'] = 'Tentukan kohor pengguna mana yang harus menggunakan faktor lain untuk melakukan autentikasi. Harus digabungkan dengan faktor lain.';
$string['summarycondition'] = 'TIDAK memiliki cohor berikut yang ditetapkan dalam konteks apa pun: {$a}';
