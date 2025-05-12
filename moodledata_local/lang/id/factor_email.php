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
 * Strings for component 'factor_email', language 'id', version '5.0'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Jika Anda tidak meminta surel, klik lanjutkan untuk membatalkan upaya masuk. Jika Anda mengeklik tautan secara tidak sengaja, mengeklik batal, dan tidak ada tindakan yang akan diambil.';
$string['email:browseragent'] = 'Detail peramban untuk permintaan ini adalah: \'{$a}\'';
$string['email:geoinfo'] = 'Permintaan ini tampaknya berasal dari sekitar:';
$string['email:greeting'] = 'Halo {$a} 👋';
$string['email:ipinfo'] = 'Detail permintaan masuk:';
$string['email:link'] = 'tautan verifikasi';
$string['email:loginlink'] = 'Atau, jika Anda menggunakan perangkat yang sama, gunakan {$a} ini.';
$string['email:message'] = 'Berikut kode verifikasi Anda untuk {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Permintaan log masuk ini dibuat dari \'{$a}\'';
$string['email:revokelink'] = 'Jika ini bukan Anda, Anda dapat {$a}.';
$string['email:revokesuccess'] = 'Kode ini telah berhasil dibatalkan. Semua sesi untuk pengguna ini telah berakhir.
     Surel tidak akan dapat digunakan sebagai faktor hingga keamanan akun diverifikasi.';
$string['email:stoploginlink'] = 'hentikan upaya masuk ini';
$string['email:subject'] = 'Ini kode verifikasi Anda';
$string['email:uadescription'] = 'Identitas  peramban untuk permintaan ini:';
$string['email:validity'] = 'Kode hanya dapat digunakan satu kali dan berlaku selama {$a}.';
$string['error:badcode'] = 'Kode tidak ditemukan. Ini mungkin tautan lama, kode baru mungkin telah dikirim melalui surel, atau upaya masuk dengan kode ini berhasil.';
$string['error:parameters'] = 'Parameter halaman salah.';
$string['error:wrongverification'] = 'Salah kode. Coba lagi.';
$string['event:unauthemail'] = 'Surel tidak sah diterima';
$string['info'] = 'Anda menggunakan email {$a} untuk mengautentikasi. Ini telah disiapkan oleh administrator situs Anda.';
$string['logindesc'] = 'Kami baru saja mengirimkan kode 6 digit ke email Anda: {$a}';
$string['loginoption'] = 'Dapatkan kode yang dikirimkan ke surel Anda';
$string['loginskip'] = 'Saya tidak menerima kode';
$string['loginsubmit'] = 'Lanjutkan';
$string['logintitle'] = 'Verifikasi bahwa ini memang Anda melalui surel';
$string['managefactor'] = 'Kelola surel';
$string['manageinfo'] = '\'{$a}\' digunakan untuk mengautentikasi. Ini telah diatur oleh administrator Anda.';
$string['pluginname'] = 'Email';
$string['privacy:metadata'] = 'Pengaya faktor surel tidak menyimpan data pribadi apa pun';
$string['settings:description'] = 'Pengguna akan menerima kode verifikasi 6 digit melalui surel, yang harus mereka masukkan untuk menyelesaikan proses masuk log.';
$string['settings:duration'] = 'Durasi validitas';
$string['settings:duration_help'] = 'Jangka waktu validitas kode tersebut.';
$string['settings:shortdescription'] = 'Meminta pengguna untuk memasukkan kode yang diterima melalui surel saat log masuk.';
$string['settings:suspend'] = 'Tangguhkan akun yang tidak sah';
$string['settings:suspend_help'] = 'Centang ini untuk menangguhkan akun pengguna jika verifikasi surel yang tidak sah diterima.';
$string['setupfactor'] = 'Siapkan surel';
$string['summarycondition'] = 'memiliki setelan surel yang valid';
$string['unauthemail'] = 'Surel tidak sah';
$string['unauthloginattempt'] = 'Pengguna dengan ID {$a->userid} melakukan upaya masuk tanpa izin menggunakan verifikasi surel dari IP {$a->ip} dengan agen peramban {$a->useragent}.';
$string['verificationcode'] = 'Masukkan kode verifikasi untuk konfirmasi';
$string['verificationcode_help'] = 'Kode verifikasi telah dikirim ke surel Anda.';
