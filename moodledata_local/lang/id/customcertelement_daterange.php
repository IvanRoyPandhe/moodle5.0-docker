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
 * Strings for component 'customcertelement_daterange', language 'id', version '5.0'.
 *
 * @package     customcertelement_daterange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completiondate'] = 'Tanggal selesai';
$string['courseenddate'] = 'Tanggal akhir kursus';
$string['coursegradedate'] = 'Tanggal penilaian kursus';
$string['coursestartdate'] = 'Tanggal mulai kursus';
$string['currentdate'] = 'Tanggal saat ini';
$string['dateitem'] = 'Tanggal item';
$string['dateitem_help'] = 'Ini akan menjadi tanggal yang dicetak pada sertifikat';
$string['dateranges'] = 'Rentang tanggal';
$string['error:atleastone'] = 'Anda harus memiliki setidaknya satu rentang tanggal yang dikonfigurasi';
$string['error:datestring'] = 'Anda harus memberikan representasi string untuk rentang tanggal';
$string['error:enddate'] = 'Tanggal akhir harus terjadi setelah tanggal mulai';
$string['fallbackstring_help'] = 'String ini akan ditampilkan jika tidak ada rentang tanggal yang berlaku untuk suatu tanggal. Jika string fallback tidak ditetapkan, maka tidak akan ada output sama sekali.';
$string['help'] = 'Konfigurasikan representasi string untuk rentang tanggal Anda.<br /><br />Jika rentang Anda tumpang tindih, rentang tanggal yang cocok pertama akan diterapkan.';
$string['issueddate'] = 'Tanggal terbit';
$string['placeholders'] = 'Placeholder berikut dapat digunakan dalam representasi string atau string fallback. <br/><br /> {{range_first_year}} - tahun pertama dari rentang yang cocok,<br/> {{range_last_year}} - tahun terakhir dari rentang yang cocok,<br/> {{recurring_range_first_year}} - tahun pertama dari periode berulang yang cocok,<br/> {{recurring_range_last_year}} - tahun terakhir dari periode berulang yang cocok,<br/> {{current_year}} - tahun berjalan,<br/> {{date_year}} - tahun dari tanggal pengguna.';
$string['pluginname'] = 'Rentang tanggal';
$string['privacy:metadata'] = 'Pengaya Rentang Tanggal tidak menyimpan data pribadi apa pun.';
$string['recurring_help'] = 'Jika Anda menandai rentang tanggal sebagai berulang maka tahun yang dikonfigurasi tidak akan dipertimbangkan.';
$string['setdeleted'] = 'Hapus';
