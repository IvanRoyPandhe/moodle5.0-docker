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
 * Strings for component 'factor_admin', language 'id', version '5.0'.
 *
 * @package     factor_admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Faktor ini memungkinkan TIDAK menjadi administrator untuk dihitung sebagai faktor. Tujuan penggunaannya adalah untuk memastikan administrator memerlukan keamanan yang lebih ketat, sehingga pengguna biasa mendapatkan beban secara gratis, sedangkan admin harus menggunakan faktor lain.';
$string['pluginname'] = 'Non-administrator';
$string['privacy:metadata'] = 'Pengaya faktor Non-administrator tidak menyimpan data pribadi apa pun.';
$string['settings:description'] = 'Semua pengguna kecuali administrator situs menerima poin untuk faktor ini. Ini memungkinkan Anda untuk meminta faktor autentikasi tambahan bagi administrator situs.';
$string['settings:shortdescription'] = 'Memerlukan faktor autentikasi tambahan untuk administrator.';
$string['settings:weight_help'] = 'Bobot diberikan kepada pengguna biasa untuk faktor ini, jadi admin harus memiliki lebih banyak faktor daripada pengguna biasa untuk bisa lolos.';
$string['summarycondition'] = 'bukan admin';
