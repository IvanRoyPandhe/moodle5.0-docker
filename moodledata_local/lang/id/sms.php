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
 * Strings for component 'sms', language 'id', version '5.0'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aksi';
$string['countrycode'] = 'Kode negara bawaan';
$string['countrycode_help'] = 'Kode negara akan ditambahkan ke nomor telepon jika pengguna tidak memasukkan kode negara mereka sendiri. Masukkan nomor tanpa simbol \'+\' di awal.';
$string['createnewgateway'] = 'Buat gerbang SMS baru';
$string['delete_sms_gateway'] = 'Hapus gerbang SMS';
$string['delete_sms_gateway_confirmation'] = 'Ini akan menghapus gateway SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Edit gerbang SMS {$a->gateway}';
$string['gateway'] = 'Gerbang';
$string['gateway_name'] = 'Nama gerbang';
$string['manage_sms_gateways'] = 'Kelola gerbang SMS';
$string['phonenumbernotvalid'] = 'Format nomor telepon tidak dikenali: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Menyimpan pesan yang dikirim melalui SMS';
$string['privacy:metadata:sms_messages:content'] = 'Teks pesan';
$string['privacy:metadata:sms_messages:id'] = 'ID pesan';
$string['privacy:metadata:sms_messages:recipient'] = 'Nomor telepon yang dikirimi pesan tersebut';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'Pengguna yang menerima pesan tersebut, jika diketahui';
$string['privacy:metadata:sms_messages:status'] = 'Status pesan';
$string['privacy:metadata:sms_messages:timecreated'] = 'Waktu pesan dibuat';
$string['privacy:sms:sensitive_not_shown'] = 'Konten pesan ini tidak disimpan karena ditandai berisi konten sensitif.';
$string['select_sms_gateways'] = 'Penyedia gerbang SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Tidak dapat menghapus gateway SMS {$a->gateway}. Gateway tersebut sedang digunakan atau ada masalah pada basis data. Periksa apakah gateway tersebut aktif atau hubungi administrator basis data Anda untuk mendapatkan bantuan.';
$string['sms_gateway_deleted'] = 'Gerbang SMS {$a->gateway}  dihapus';
$string['sms_gateway_disable_failed'] = 'Tidak dapat menonaktifkan gateway SMS. Gateway sedang digunakan atau ada masalah pada basis data. Periksa apakah gateway aktif atau hubungi administrator basis data untuk mendapatkan bantuan.';
$string['sms_gateways'] = 'Gerbang SMS';
$string['sms_gateways_info'] = 'Buat dan kelola gerbang SMS untuk mengirim pesan SMS dari situs Anda.';
$string['status:gateway_failed'] = 'Gerbang sms gagal mengirim pesan';
$string['status:gateway_not_available'] = 'Gerbang sms tidak tersedia untuk mengirim pesan';
$string['status:gateway_queued'] = 'Pesan tersebut diantrikan untuk dikirim oleh gerbang sms';
$string['status:gateway_rejected'] = 'Gerbang sms telah menolak pesan tersebut';
$string['status:gateway_sent'] = 'Pesan telah dikirim oleh gerbang sms';
$string['status:message_over_size'] = 'Pesan terlalu besar untuk dikirim oleh gerbang sms';
$string['status:unknown'] = 'Tidak dapat menentukan status pesan';
