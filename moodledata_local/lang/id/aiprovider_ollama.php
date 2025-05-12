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
 * Strings for component 'aiprovider_ollama', language 'id', version '5.0'.
 *
 * @package     aiprovider_ollama
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:model'] = 'Model penjelasan teks';
$string['action:explain_text:model_help'] = 'Model yang digunakan untuk menjelaskan teks yang disediakan.';
$string['action:explain_text:systeminstruction'] = 'Instruksi sistem';
$string['action:explain_text:systeminstruction_help'] = 'Instruksi ini dikirim ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali jika benar-benar diperlukan.';
$string['action:generate_text:model'] = 'Model pembuatan teks';
$string['action:generate_text:model_help'] = 'Model yang digunakan untuk menghasilkan respons teks.';
$string['action:generate_text:systeminstruction'] = 'Instruksi sistem';
$string['action:generate_text:systeminstruction_help'] = 'Instruksi ini dikirim ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali jika benar-benar diperlukan.';
$string['action:summarise_text:model'] = 'Model ringkasan teks';
$string['action:summarise_text:model_help'] = 'Model yang digunakan untuk meringkas teks yang disediakan.';
$string['action:summarise_text:systeminstruction'] = 'Instruksi sistem';
$string['action:summarise_text:systeminstruction_help'] = 'Instruksi ini dikirim ke model AI bersama dengan perintah pengguna. Menyunting instruksi ini tidak disarankan kecuali jika benar-benar diperlukan.';
$string['custom_model_name'] = 'Nama model kustom';
$string['enablebasicauth'] = 'Aktifkan autentikasi dasar';
$string['enablebasicauth_help'] = 'Aktifkan autentikasi dasar untuk penyedia API Ollama.';
$string['endpoint'] = 'Titik akhir API';
$string['endpoint_help'] = 'Titik akhir API untuk server API Ollama.';
$string['extraparams'] = 'Parameter tambahan';
$string['extraparams_help'] = 'Parameter tambahan dapat dikonfigurasi di sini. Kami mendukung format JSON. Sebagai contoh:
<pre>
{
    “temperature": 0.5,
    “max_tokens": 100
}
</pre>';
$string['invalidjson'] = 'String JSON tidak valid';
$string['password'] = 'Kata sandi';
$string['password_help'] = 'Kata sandi yang digunakan untuk autentikasi dasar.';
$string['pluginname'] = 'Penyedia API Ollama';
$string['privacy:metadata'] = 'Pengaya penyedia API Ollama tidak menyimpan data pribadi apa pun.';
$string['privacy:metadata:aiprovider_ollama:externalpurpose'] = 'Informasi ini dikirim ke API Ollama agar tanggapan dapat dihasilkan. Pengaturan akun Ollama Anda dapat mengubah bagaimana Ollama menyimpan dan mempertahankan data ini. Tidak ada data pengguna yang secara eksplisit dikirim ke Ollama atau disimpan di LMS Moodle oleh pengaya ini.';
$string['privacy:metadata:aiprovider_ollama:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:aiprovider_ollama:prompttext'] = 'Pengguna memasukkan perintah teks yang digunakan untuk menghasilkan respons.';
$string['settings'] = 'Pengaturan';
$string['settings_help'] = 'Sesuaikan pengaturan di bawah ini untuk menyesuaikan bagaimana permintaan dikirim ke Ollama.';
$string['settings_mirostat'] = 'Mirostat';
$string['settings_mirostat_help'] = 'Mirostat adalah algoritma decoding teks neural untuk mengendalikan kebingungan. 0 = dinonaktifkan, 1 = Mirostat, 2 = Mirostat 2.0. (Bawaan: 0)';
$string['settings_seed'] = 'seed';
$string['settings_seed_help'] = 'Mengatur seed angka acak yang akan digunakan untuk pembuatan. Menetapkan ini ke nomor tertentu akan membuat model menghasilkan teks yang sama untuk prompt yang sama (Bawaan: 0)';
$string['settings_temperature'] = 'temperature';
$string['settings_temperature_help'] = 'Suhu memengaruhi apakah output bersifat lebih acak dan kreatif atau lebih dapat diprediksi. Meningkatkan suhu akan membuat model memberikan jawaban yang lebih kreatif. (Bawaan: 0.8)';
$string['settings_top_k'] = 'top_k';
$string['settings_top_k_help'] = 'Mengurangi kemungkinan menghasilkan jawaban yang tidak masuk akal. Nilai yang lebih tinggi (misalnya 100) akan memberikan jawaban yang lebih beragam, sementara nilai yang lebih rendah (misalnya 10) akan lebih konservatif. (Bawaan: 40)';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'Bekerja bersama dengan top-k. Nilai yang lebih tinggi (misalnya 0,95) akan menghasilkan teks yang lebih beragam, sedangkan nilai yang lebih rendah (misalnya 0,5) akan menghasilkan teks yang lebih terfokus dan konservatif. (Bawaan: 0,9)';
$string['username'] = 'Nama pengguna';
$string['username_help'] = 'Nama pengguna yang digunakan untuk autentikasi dasar.';
