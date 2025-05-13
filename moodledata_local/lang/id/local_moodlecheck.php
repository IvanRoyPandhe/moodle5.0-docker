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
 * Strings for component 'local_moodlecheck', language 'id', version '5.0'.
 *
 * @package     local_moodlecheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Periksa';
$string['checkallrules'] = 'Periksa semua aturan';
$string['checkselectedrules'] = 'Periksa aturan yang dipilih';
$string['error_categoryvalid'] = 'Kategori <b>{$a->category}</b> tidak valid';
$string['error_default'] = 'Galat: {$a}';
$string['error_emptynophpfile'] = 'Berkas tersebut kosong atau tidak berisi kode PHP. Dilewati.';
$string['error_functionarguments'] = 'Phpdocs untuk fungsi <b>{$a->function</b> memiliki daftar parameter yang tidak lengkap';
$string['error_noinlinephpdocs'] = 'Ditemukan komentar yang dimulai dengan tiga garis miring atau lebih';
$string['error_phpdoccontentsinlinetag'] = 'Tag phpdocs sebaris <b>{$a->tag</b> dengan konten yang salah ditemukan. Itu harus cocok dengan {@link [valid URL] [description (optional)]} atau {@see [valid FQSEN] [description (optional)]}';
$string['error_phpdocsinvalidinlinetag'] = 'Ditemukan tag phpdocs sebaris <b>{$a->tag</b> yang tidak valid';
$string['error_phpdocsuncurlyinlinetag'] = 'Tag phpdocs sebaris tidak diapit tanda kurung kurawal <b>{$a->tag</b> ditemukan';
$string['ignorepath'] = 'Subjalur yang harus diabaikan';
$string['linenum'] = 'Baris <b>{$a}</b>:';
$string['notificationerror'] = 'Ditemukan galat {$a}';
$string['notificationsuccess'] = 'Bagus sekali!';
$string['path'] = 'Jalur';
$string['path_help'] = 'Tentukan satu atau lebih berkas dan/atau direktori yang akan diperiksa sebagai jalur lokal dari direktori instalasi Moodle';
$string['pluginname'] = 'Pemeriksaan Moodle PHPdoc';
