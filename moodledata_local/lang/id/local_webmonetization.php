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
 * Strings for component 'local_webmonetization', language 'id', version '5.0'.
 *
 * @package     local_webmonetization
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_paymentstreams'] = 'Aliran pembayaran';
$string['checkingbrowser'] = 'Memeriksa peramban untuk monetisasi web';
$string['enable'] = 'Aktifkan';
$string['enable_desc'] = 'Sematkan petunjuk pembayaran di halaman yang ada dalam konteks saat ini atau salah satu dari konteks induknya';
$string['external'] = 'Eksternal';
$string['externalreceiptverifier'] = 'Pemverifikasi tanda terima eksternal';
$string['externalreceiptverifier_desc'] = 'Pemverifikasi tanda terima eksternal mis. $webmonetization.org/api/receipts/';
$string['externalreceiptverifierverifyendpoint'] = 'Verifikasi titik akhir';
$string['externalreceiptverifierverifyendpoint_desc'] = 'Verifikasi titik akhir mis. https://webmonetization.org/api/receipts/verify';
$string['forcepayment'] = 'Paksa pembayaran';
$string['forcepayment_desc'] = 'Mengharuskan pengguna untuk menggunakan peramban web yang dimonetisasi.';
$string['internal'] = 'Internal';
$string['managepaymentpointer'] = 'Kelola penunjuk pembayaran';
$string['managepaymentpointerincontext'] = 'Kelola petunjuk pembayaran: {$a->contextname}';
$string['monetizationsettings'] = 'Monetisasi web';
$string['nonmonetizedbrowser'] = 'Anda perlu mengakses konten ini menggunakan peramban yang mendukung Monetisasi Web, silakan kunjungi <a href="https://coil.com">Coil</a> atau <a href="https://webmonetization.org/# provider">Monetisasi Web</a> untuk mengetahui lebih lanjut.';
$string['paymentpointer'] = 'Penunjuk pembayaran';
$string['pluginname'] = 'Monetisasi web';
$string['privacy:metadata'] = 'Pengaya monetisasi web tidak menyimpan atau mengirimkan data pribadi apa pun.';
$string['receiptverifiertype'] = 'Pemverifikasi tanda terima';
$string['receiptverifiertype_desc'] = 'Pilih pemverifikasi tanda terima mana yang ingin Anda gunakan, tidak ada yang akan menonaktifkan verifikasi tanda terima, internal akan menggunakan pengaya pemverifikasi internal, eksternal akan membiarkan Anda menentukan pemverifikasi tanda terima yang berdiri sendiri.';
$string['systemforcepayment'] = 'Paksa pembayaran (Bawaan)';
$string['systemforcepayment_desc'] = 'Mengharuskan pengguna untuk menggunakan peramban web yang dimonetisasi.';
$string['systempaymentpointer'] = 'Penunjuk pembayaran bawaan';
$string['systempaymentpointer_desc'] = 'Penunjuk pembayaran ini akan diatur pada konteks sistem.';
$string['webmonetization:ignoreforcepayment'] = 'Abaikan pengaturan pembayaran paksa';
$string['webmonetization:managepaymentpointers'] = 'Kelola petunjuk pembayaran';
