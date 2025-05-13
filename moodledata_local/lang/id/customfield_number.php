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
 * Strings for component 'customfield_number', language 'id', version '5.0'.
 *
 * @package     customfield_number
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytypes'] = 'Tipe aktivitas';
$string['automaticallypopulated'] = 'Terisi otomatis';
$string['crontaskname'] = 'Mengisi kolom kustom nomor otomatis';
$string['decimalplaces'] = 'Tempat desimal';
$string['defaultvalueconfigerror'] = 'Nilai bawaan harus antara minimum dan maksimum';
$string['display'] = 'Tampilan Templat';
$string['display_help'] = 'Cara menampilkan nilai bidang. Gunakan placeholder berikut:

* **{value}** - menampilkan nilai dalam format umum (float dengan desimal yang dikonfigurasi di kolom)
* **$ {value}** - harga dalam dolar
* **{value} jam** - durasi dalam jam';
$string['displayvalueconfigerror'] = 'Placeholder tidak valid';
$string['displaywhenzero'] = 'Tampilkan saat nol';
$string['displaywhenzero_help'] = 'Cara menampilkan nilai kolom ketika nilainya "0". Misalnya, dalam hal harga, Anda dapat menampilkan kata "Gratis" namun dalam hal durasi, Anda mungkin ingin membiarkannya kosong karena itu berarti durasinya tidak diperkirakan.

Biarkan kosong jika Anda tidak ingin menampilkan apa pun saat nilainya disetel ke "0".';
$string['fieldtype'] = 'Tipe kolom';
$string['fieldtype_help'] = 'Pilih jenis ruas numerik yang akan ditetapkan. Beberapa opsi memerlukan input manual di halaman setelan kursus, sementara yang lain akan secara otomatis mengisi nilai, seperti jumlah aktivitas yang ditentukan dalam suatu kursus.';
$string['genericfield'] = 'Kolom umum untuk data numerik apa pun';
$string['headerdisplaysettings'] = 'Format tampilan';
$string['invalidprovider'] = 'Penyedia tidak valid';
$string['manualinput'] = 'Input manual';
$string['maximumvalue'] = 'Nilai maksimal';
$string['maximumvalueerror'] = 'Nilai harus kurang dari atau sama dengan {$a}';
$string['minimumvalue'] = 'Nilai minimum';
$string['minimumvalueconfigerror'] = 'Nilai minimum harus lebih kecil dari maksimum';
$string['minimumvalueerror'] = 'Nilai harus lebih besar atau sama dengan {$a}';
$string['missingrequired'] = 'ID instans atau ID bidang tidak ada';
$string['nofactivities'] = 'Jumlah aktivitas dalam kursus';
$string['pluginname'] = 'Nomor';
$string['privacy:metadata'] = 'Pengaya kolom kustom nomor tidak menyimpan data pribadi apa pun';
$string['specificsettings'] = 'Setelan kolom nomor';
