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
 * Strings for component 'enrol_dynamicrule', language 'id', version '5.0'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Tindakan';
$string['actiondisableenrolment'] = 'Nonaktifkan pendaftaran';
$string['actiondisableenrolmentremoveroles'] = 'Nonaktifkan pendaftaran dan hapus peran';
$string['actionunenrol'] = 'Batalkan pendaftaran pengguna dari kursus';
$string['duration'] = 'Durasi';
$string['dynamicrule:config'] = 'Konfigurasikan contoh pendaftaran aturan dinamis';
$string['dynamicrule:enrol'] = 'Daftarkan pengguna menggunakan tindakan pendaftaran kursus';
$string['dynamicrule:unenrol'] = 'Batalkan pendaftaran pengguna menggunakan tindakan batal pendaftaran kursus atau secara manual';
$string['enddate'] = 'Tanggal akhir';
$string['errorinvalidaction'] = 'Tindakan tidak valid';
$string['errorinvalidcoursetoenrol'] = 'Kursus tidak valid untuk didaftarkan';
$string['errorinvalidcoursetounenrol'] = 'Kursus tidak valid untuk dibatalkan pendaftarannya';
$string['errorinvaliddurationandenddate'] = 'Anda harus memilih tanggal akhir pendaftaran ATAU durasi, bukan keduanya.';
$string['errorinvalidrole'] = 'Peran tidak valid';
$string['group'] = 'Nama grup';
$string['group_help'] = 'Nama grup tempat pengguna akan ditambahkan sebagai anggota.';
$string['noavailablecoursesenrol'] = 'Tidak ada kursus tempat Anda dapat mendaftarkan pengguna menggunakan metode pendaftaran aturan Dinamis.';
$string['noavailablecoursesunenrol'] = 'Tidak ada kursus tempat Anda dapat membatalkan pendaftaran pengguna menggunakan metode pendaftaran aturan Dinamis.';
$string['outcomecourseenrol'] = 'Daftarkan pengguna ke kursus';
$string['outcomecourseenroldescription'] = 'Daftar di kursus \'{$a->coursename}\'<br />
Peran: {$a->role}<br />
Grup: {$a->groupname}';
$string['outcomecourseenroldescriptionwithduration'] = 'Daftar di kursus \'{$a->coursename}\'<br />
Peran: {$a->role}<br />
Grup: {$a->groupname}<br />
Durasi: {$a->duration} {$a->durationtype}';
$string['outcomecourseenroldescriptionwithenddate'] = 'Daftar di kursus \'{$a->coursename}\'<br />
Peran: {$a->role}<br />
Grup: {$a->groupname}<br />
Tanggal akhir: {$a->enddate}';
$string['outcomecourseunenrol'] = 'Batalkan pendaftaran pengguna dari kursus';
$string['outcomecourseunenroldescriptionwithmethod'] = 'Batalkan pendaftaran dari kursus \'{$a->coursename}\'<br />
Metode pendaftaran: {$a->enrol}<br />
Tindakan: {$a->action}';
$string['pluginname'] = 'Aturan dinamis';
$string['privacy:metadata'] = 'Pengaturan Aturan dinamis tidak menyimpan data pribadi apa pun tentang pengguna mana pun.';
$string['userwithoutcapability'] = 'Anda harus memiliki kemampuan untuk membatalkan pendaftaran metode \'{$a}\' di kursus yang dipilih';
