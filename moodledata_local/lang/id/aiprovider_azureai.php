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
 * Strings for component 'aiprovider_azureai', language 'id', version '5.0'.
 *
 * @package     aiprovider_azureai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:apiversion'] = 'Versi API';
$string['action:explain_text:deployment'] = 'ID Penyebaran';
$string['action:explain_text:deployment_help'] = 'ID penerapan yang terkait dengan titik akhir API yang digunakan penyedia untuk aksi ini.';
$string['action:explain_text:systeminstruction'] = 'Instruksi sistem';
$string['action:explain_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_image:apiversion'] = 'Versi API';
$string['action:generate_image:deployment'] = 'ID Penerapan';
$string['action:generate_image:deployment_help'] = 'ID penerapan yang terkait dengan titik akhir API yang digunakan penyedia untuk tindakan ini.';
$string['action:generate_text:apiversion'] = 'Versi API';
$string['action:generate_text:deployment'] = 'ID Penerapan';
$string['action:generate_text:deployment_help'] = 'ID penerapan yang terkait dengan titik akhir API yang digunakan penyedia untuk tindakan ini.';
$string['action:generate_text:systeminstruction'] = 'Instruksi Sistem';
$string['action:generate_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:apiversion'] = 'Versi API';
$string['action:summarise_text:deployment'] = 'ID Penerapan';
$string['action:summarise_text:deployment_help'] = 'ID penerapan yang terkait dengan titik akhir API yang digunakan penyedia untuk tindakan ini.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action_apiversion'] = 'versi API';
$string['action_deployment'] = 'ID Penyebaran';
$string['action_deployment_desc'] = 'ID penyebaran yang terkait dengan titik akhir API yang digunakan penyedia untuk tindakan ini.';
$string['action_systeminstruction'] = 'Instruksi Sistem';
$string['action_systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['apikey'] = 'Kunci API Azure AI';
$string['apikey_desc'] = 'Masukkan kunci API Azure AI Anda.';
$string['apikey_help'] = 'Masukkan kunci API Azure AI Anda.';
$string['deployment'] = 'Nama penyebaran API AI Azure';
$string['deployment_desc'] = 'Masukkan nama penyebaran untuk Azure AI API Anda.';
$string['enableglobalratelimit'] = 'Tetapkan batas kecepatan di seluruh situs';
$string['enableglobalratelimit_desc'] = 'Batasi jumlah permintaan yang dapat diterima penyedia Azure AI API di seluruh situs setiap jam.';
$string['enableuserratelimit'] = 'Tetapkan batas kecepatan pengguna';
$string['enableuserratelimit_desc'] = 'Batasi jumlah permintaan yang dapat dibuat setiap pengguna ke penyedia Azure AI API setiap jam.';
$string['endpoint'] = 'Titik akhir API AI Azure';
$string['endpoint_desc'] = 'Masukkan URL titik akhir untuk Azure AI API Anda dalam format berikut: https://NAMA_SUMBER_ANDA.openai.azure.com';
$string['endpoint_help'] = 'Masukkan URL titik akhir untuk Azure AI API Anda dalam format berikut: https://NAMA_SUMBER_ANDA.openai.azure.com';
$string['globalratelimit'] = 'Jumlah maksimum permintaan di seluruh situs';
$string['globalratelimit_desc'] = 'Jumlah permintaan di seluruh situs yang diizinkan per jam.';
$string['pluginname'] = 'Penyedia API AI Azure';
$string['privacy:metadata'] = 'Pengaya penyedia API Azure tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Informasi ini dikirim ke Azure API agar respons dapat dibuat. Setelan akun Azure AI Anda dapat mengubah cara Microsoft menyimpan dan menyimpan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke Microsoft atau disimpan di Moodle LMS oleh pengaya ini.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'Saat membuat gambar, jumlah gambar yang digunakan dalam respons.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'Format respon. Saat membuat gambar.';
$string['userratelimit'] = 'Jumlah maksimum permintaan per pengguna';
$string['userratelimit_desc'] = 'Jumlah permintaan yang diizinkan per jam, per pengguna.';
