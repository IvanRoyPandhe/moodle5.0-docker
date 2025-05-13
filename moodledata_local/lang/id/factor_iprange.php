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
 * Strings for component 'factor_iprange', language 'id', version '5.0'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Saat ini tidak ada seorang pun yang akan melewati faktor ini! Anda dapat menambahkan alamat IP Anda sendiri (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'IP Anda (<i>{$a->ip}</i>) ada dalam daftar dan Anda akan melewati faktor ini.';
$string['allowedipshasntmyip'] = 'IP Anda (<i>{$a->ip}</i>) tidak ada dalam daftar dan Anda tidak akan melewati faktor ini.';
$string['pluginname'] = 'rentang IP';
$string['privacy:metadata'] = 'Pengaya faktor rentang IP tidak menyimpan data pribadi apa pun.';
$string['settings:description'] = 'Aktifkan verifikasi pengguna otomatis menggunakan alamat IP. Hal ini tidak memerlukan setelan pengguna dan dapat memberikan proses masuk yang aman dan lancar pada jaringan tepercaya.';
$string['settings:safeips'] = 'Rentang IP aman';
$string['settings:safeips_help'] = 'Masukkan daftar alamat IP atau subnet untuk dihitung sebagai faktor kelulusan. Jika kosong tidak ada yang akan melewati faktor ini. {$a->info} {$a->syntax}';
$string['settings:shortdescription'] = 'Gunakan alamat IP untuk memverifikasi identitas pengguna secara otomatis.';
$string['summarycondition'] = 'berada di jaringan aman';
