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
 * Strings for component 'aiprovider_openai', language 'id', version '5.0'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'Titik akhir API';
$string['action:explain_text:model'] = 'Model AI';
$string['action:explain_text:model_help'] = 'Model yang digunakan untuk menjelaskan teks yang disediakan.';
$string['action:explain_text:systeminstruction'] = 'Instruksi sistem';
$string['action:explain_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_image:endpoint'] = 'Titik akhir API';
$string['action:generate_image:model'] = 'Model AI';
$string['action:generate_image:model_desc'] = 'Model yang digunakan untuk menghasilkan gambar dari perintah pengguna.';
$string['action:generate_image:model_help'] = 'Model yang digunakan untuk menghasilkan gambar dari perintah pengguna.';
$string['action:generate_text:endpoint'] = 'Titik akhir API';
$string['action:generate_text:model'] = 'Model AI';
$string['action:generate_text:model_desc'] = 'Model yang digunakan untuk menghasilkan respons teks.';
$string['action:generate_text:model_help'] = 'Model yang digunakan untuk menghasilkan respons teks.';
$string['action:generate_text:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:generate_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:endpoint'] = 'Titik akhir API';
$string['action:summarise_text:model'] = 'Model AI';
$string['action:summarise_text:model_desc'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:model_help'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_desc'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['action:summarise_text:systeminstruction_help'] = 'Instruksi ini dikirimkan ke model AI bersama dengan perintah pengguna. Mengedit instruksi ini tidak disarankan kecuali benar-benar diperlukan.';
$string['apikey'] = 'Kunci API OpenAI';
$string['apikey_desc'] = 'Dapatkan kunci dari <a href="https://platform.openai.com/account/api-keys">kunci OpenAI Platform API</a>.';
$string['apikey_help'] = 'Dapatkan kunci dari <a href="https://platform.openai.com/account/api-keys" target="_blank">kunci API OpenAI</a> Anda.';
$string['custom_model_name'] = 'Nama model kustom';
$string['enableglobalratelimit'] = 'Tetapkan batas kecepatan di seluruh situs';
$string['enableglobalratelimit_desc'] = 'Batasi jumlah permintaan yang dapat diterima penyedia API OpenAI di seluruh situs setiap jam.';
$string['enableuserratelimit'] = 'Tetapkan batas kecepatan pengguna';
$string['enableuserratelimit_desc'] = 'Batasi jumlah permintaan yang dapat dibuat setiap pengguna ke penyedia API OpenAI setiap jam.';
$string['extraparams'] = 'Parameter ekstra';
$string['extraparams_help'] = 'Parameter tambahan dapat dikonfigurasi di sini. Kami mendukung format JSON. Sebagai contoh:
<pre>
{
    “temperature": 0.5,
    “max_tokens": 100
}
</pre>';
$string['globalratelimit'] = 'Jumlah maksimum permintaan di seluruh situs';
$string['globalratelimit_desc'] = 'Jumlah permintaan di seluruh situs yang diizinkan per jam.';
$string['invalidjson'] = 'String JSON tidak valid';
$string['orgid'] = 'ID organisasi OpenAI';
$string['orgid_desc'] = 'Dapatkan ID organisasi OpenAI dari <a href="https://platform.openai.com/account/org-settings">akun Platform OpenAI</a> Anda.';
$string['orgid_help'] = 'Dapatkan ID organisasi OpenAI Anda dari <a href="https://platform.openai.com/account/org-settings" target="_blank">akun OpenAI</a> Anda.';
$string['pluginname'] = 'Penyedia API OpenAI';
$string['privacy:metadata'] = 'Pengaya penyedia API OpenAI tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Informasi ini dikirim ke OpenAI API agar respons dapat dibuat. Setelan akun OpenAI Anda dapat mengubah cara OpenAI menyimpan dan menyimpan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke OpenAI atau disimpan di Moodle LMS oleh pengaya ini.';
$string['privacy:metadata:aiprovider_openai:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'Saat membuat gambar, jumlah gambar yang digunakan dalam respons.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'Format respons. Saat membuat gambar.';
$string['settings'] = 'Setelan';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = 'Penalti frekuensi menyesuaikan seberapa sering kata diulang. Semakin tinggi penalti, semakin sedikit pengulangan dalam teks yang dihasilkan.';
$string['settings_help'] = 'Sesuaikan setelan di bawah ini untuk menyesuaikan bagaimana permintaan dikirim ke OpenAI.';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = 'Jumlah token maksimum yang akan dihasilkan dalam respons';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = 'Penalti kehadiran mendorong model untuk menggunakan kata baru dengan meningkatkan kemungkinan memilih kata yang belum pernah digunakan sebelumnya. Nilai yang lebih tinggi membuat teks yang dihasilkan lebih beragam, sedangkan nilai yang lebih rendah memungkinkan lebih banyak pengulangan.';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'top_p (nucleus sampling) menentukan berapa banyak kata yang mungkin dipertimbangkan. Nilai yang tinggi (misalnya 0,9) berarti model melihat lebih banyak kata, yang membuat teks yang dihasilkan lebih beragam.';
$string['userratelimit'] = 'Jumlah maksimum permintaan per pengguna';
$string['userratelimit_desc'] = 'Jumlah permintaan yang diizinkan per jam, per pengguna.';
