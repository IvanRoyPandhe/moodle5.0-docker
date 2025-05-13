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
 * Strings for component 'enrol_meta', language 'id', version '5.0'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Tambahkan ke grup';
$string['coursesort'] = 'Urutan daftar kursus sumber';
$string['coursesort_help'] = 'Saat menghubungkan kurus sumber ke kursus sasaran, bagaimana kursus sumber harus diurutkan?';
$string['creategroup'] = 'Buat grup baru';
$string['defaultgroupnametext'] = 'kursus {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Tugas sinkronisasi pendaftaran meta';
$string['linkedcourse'] = 'Tautan kursus';
$string['meta:config'] = 'Konfigurasikan model pendaftaran meta';
$string['meta:selectaslinked'] = 'Pilih kursus sebagai tautan meta';
$string['meta:unenrol'] = 'Keluarkan pengguna yang ditangguhkan';
$string['nosyncroleids'] = 'Peran yang tidak disinkronkan';
$string['nosyncroleids_desc'] = 'Pilih peran apa pun yang tidak boleh disinkronkan antara kursus sumber dan kursus target.';
$string['pluginname'] = 'Tautan kursus meta';
$string['pluginname_desc'] = 'Tautan meta kursus menyinkronkan pendaftaran dan peran dari kursus sumber ke kursus target.';
$string['privacy:metadata:core_group'] = 'Pengaya pendaftaran tautan meta kursus dapat membuat grup baru atau menggunakan grup yang ada untuk menambahkan peserta dari kursus sumber.';
$string['samemetacourse'] = 'Anda tidak dapat menambahkan tautan meta ke kursus yang sama';
$string['syncall'] = 'Sinkronkan semua pengguna terdaftar';
$string['syncall_desc'] = 'Jika diaktifkan, semua pengguna yang terdaftar akan disinkronkan dari kursus sumber meskipun mereka tidak memiliki peran di dalamnya. Jika tidak, hanya pengguna yang memiliki setidaknya satu peran yang terdaftar di kursus target.';
$string['unknownmetacourse'] = 'Nama pendek kursus meta tidak diketahui';
$string['wscannotcreategroup'] = 'Tidak ada izin untuk membuat grup di id kursus tertaut = {$a}.';
$string['wsinvalidcourse'] = 'ID Kursus = {$a} tidak ada atau Anda tidak memiliki izin untuk menambahkan tautan meta kursus.';
$string['wsinvalidmetacourse'] = 'ID kursus meta = {$a} tidak ada atau Anda tidak memiliki izin untuk menambahkan instans pendaftaran.';
$string['wsnoinstancesspecified'] = 'Tidak ada model yang ditentukan';
