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
 * Strings for component 'factor_token', language 'id', version '5.0'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Token MFA dibuat.';
$string['form:trust'] = 'Percayai perangkat ini selama {$a}.';
$string['pluginname'] = 'Percayai perangkat ini';
$string['privacy:metadata'] = 'Pengaya Percayai faktor perangkat ini tidak menyimpan data pribadi apa pun.';
$string['settings:description'] = 'Memungkinkan pengguna melewati autentikasi tambahan pada perangkat yang ditandai sebagai tepercaya setelah autentikasi pertama.';
$string['settings:expireovernight'] = 'Kedaluwarsa kepercayaan dalam semalam';
$string['settings:expireovernight_help'] = 'Hal ini memaksa token untuk kedaluwarsa dalam semalam, mencegah gangguan tengah hari bagi pengguna. Sebaliknya, mereka akan diminta untuk melakukan autentikasi multi-faktor di awal hari setelah habis masa berlakunya.';
$string['settings:expiry'] = 'Durasi kepercayaan';
$string['settings:expiry_help'] = 'Durasi perangkat dipercaya sebelum memerlukan autentikasi multifaktor baru.';
$string['settings:shortdescription'] = 'Izinkan pengguna melewati autentikasi pada perangkat yang ditandai sebagai tepercaya. Perlu dikombinasikan dengan faktor lain.';
$string['summarycondition'] = 'pengguna sebelumnya telah mempercayai perangkat ini';
$string['tokenstoredindevice'] = 'Pengguna dengan ID {$a->userid} memiliki token autentikasi multifaktor yang disimpan di perangkatnya. <br> Informasi: {$a->string}.';
