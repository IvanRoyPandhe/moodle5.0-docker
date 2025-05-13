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
 * Strings for component 'factor_capability', language 'id', version '5.0'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Harus menggunakan faktor lain dalam MFA untuk mengotentikasi';
$string['pluginname'] = 'Kemampuan pengguna';
$string['privacy:metadata'] = 'Pengaya faktor kemampuan Pengguna tidak menyimpan data pribadi apa pun.';
$string['settings:adminpasses'] = 'Admin situs dapat melewati faktor ini';
$string['settings:adminpasses_help'] = 'Secara bawaan admin melewati semua pemeriksaan kemampuan, termasuk yang menggunakan \'\'factor/capability:cannotpassfactor\', yang berarti mereka akan gagal dalam faktor ini. Jika dicentang maka semua admin situs akan melewati faktor ini jika mereka tidak memiliki kemampuan ini dari peran lain. Jika admin situs tidak dicentang, faktor ini akan gagal.';
$string['settings:description'] = '<p>Gunakan kapabilitas \'factor/capability:cannotpassfactor\' untuk menentukan pengguna mana yang memerlukan autentikasi multifaktor.</p> <p>Anda dapat menetapkan kapabilitas ini kepada pengguna di halaman <a href="roles/manage.php">Tentukan peran</a>.</p>';
$string['settings:shortdescription'] = 'Tentukan pengguna mana yang harus menggunakan faktor lain untuk melakukan autentikasi. Harus dikombinasikan dengan faktor lain.';
$string['summarycondition'] = 'TIDAK memiliki kemampuan \'factor/capability:cannotpassfactor\' dalam peran apa pun termasuk administrator situs.';
