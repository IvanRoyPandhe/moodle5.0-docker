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
 * Strings for component 'ai', language 'id', version '5.0'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Terima dan lanjutkan';
$string['action'] = 'Aksi';
$string['action_explain_text'] = 'Jelaskan teks';
$string['action_explain_text_desc'] = 'Menjelaskan konten teks pada halaman kursus.';
$string['action_explain_text_instruction'] = 'Anda akan menerima masukan teks dari pengguna. Tugas Anda adalah menjelaskan teks yang diberikan. Ikuti panduan berikut:
   1. Uraikan: Uraikan ide dan konsep utama, pastikan penjelasan tersebut memberikan kedalaman yang bermakna dan menghindari pengulangan teks kata demi kata.
   2. Sederhanakan: Urutkan istilah atau ide yang rumit menjadi komponen yang lebih sederhana, sehingga mudah dipahami oleh khalayak luas, termasuk pelajar.
   3. Berikan Konteks: Jelaskan mengapa sesuatu terjadi, bagaimana cara kerjanya, atau apa tujuannya. Sertakan contoh atau analogi yang relevan untuk meningkatkan pemahaman jika sesuai.
   4. Atur Secara Logis: Susun penjelasan Anda agar mengalir secara alami, dimulai dengan ide-ide mendasar sebelum beralih ke detail yang lebih halus.

Petunjuk Penting:
   1. Berikan ringkasan hanya dalam teks biasa.
   2. Jangan sertakan format markdown, salam, atau basa-basi.
   3. Fokus pada kejelasan, keringkasan, dan aksesibilitas. Pastikan penjelasan mudah dibaca dan menyampaikan poin-poin utama teks asli secara efektif.';
$string['action_generate_image'] = 'Hasilkan gambar';
$string['action_generate_image_desc'] = 'Hasilkan gambar berdasarkan perintah teks.';
$string['action_generate_text'] = 'Hasilkan teks';
$string['action_generate_text_desc'] = 'Menghasilkan teks berdasarkan perintah teks.';
$string['action_generate_text_instruction'] = 'Anda akan menerima masukan teks dari pengguna. Tugas Anda adalah membuat teks berdasarkan permintaan mereka. Ikuti petunjuk penting berikut:
    1. Berikan ringkasan hanya dalam bentuk teks biasa.
    2. Jangan sertakan format markdown, salam, atau basa-basi.';
$string['action_summarise_text'] = 'Meringkas teks';
$string['action_summarise_text_desc'] = 'Meringkas konten teks pada halaman kursus.';
$string['action_summarise_text_instruction'] = 'Anda akan menerima masukan teks dari pengguna. Tugas Anda adalah meringkas teks yang diberikan. Ikuti panduan berikut:
     1. Ringkas: Persingkat bagian yang panjang menjadi poin-poin penting.
     2. Sederhanakan: Jadikan informasi yang rumit lebih mudah dipahami, terutama bagi pelajar.

Petunjuk Penting:
     1. Berikan ringkasan hanya dalam bentuk teks biasa.
     2. Jangan sertakan format markdown, salam, atau basa-basi.
     3. Fokus pada kejelasan, keringkasan, dan aksesibilitas.

Pastikan ringkasan mudah dibaca dan menyampaikan poin-poin utama teks asli secara efektif.';
$string['action_translate_text'] = 'Terjemahkan teks';
$string['action_translate_text_desc'] = 'Terjemahkan teks yang disediakan dari satu bahasa ke bahasa lain.';
$string['actionsettingprovider'] = 'Setelan aksi {$a}';
$string['actionsettingprovider_desc'] = 'Setelan ini mengontrol bagaimana {$a->providername} melakukan aksi {$a->actionname}.';
$string['actionsettings'] = 'Setelan aksi';
$string['actionsettings_desc'] = 'Setelan ini mengendalikan bagaimana tindakan AI untuk penyedia ini.';
$string['ai'] = 'AI';
$string['aiactionregister'] = 'Daftar aksi AI';
$string['aiplacements'] = 'Penempatan AI';
$string['aipolicyacceptance'] = 'Penerimaan kebijakan AI';
$string['aipolicyregister'] = 'Daftar kebijakan AI';
$string['aiproviders'] = 'Penyedia AI';
$string['aireports'] = 'Laporan AI';
$string['aiusage'] = 'Penggunaan AI';
$string['aiusagepolicy'] = 'Pilih di mana tindakan AI tersedia';
$string['availableplacements'] = 'Pilih di mana tindakan AI tersedia';
$string['availableplacements_desc'] = 'Penempatan menentukan bagaimana dan di mana tindakan AI dapat digunakan di situs Anda. Anda dapat memilih tindakan mana yang tersedia di setiap penempatan melalui setelan.';
$string['availableproviders'] = 'Kelola penyedia AI yang terhubung ke LMS Anda';
$string['availableproviders_desc'] = 'Penyedia AI menambahkan fungsionalitas AI ke situs Anda melalui \'tindakan\' seperti ringkasan teks atau pembuatan gambar.<br/>
Anda dapat mengelola tindakan untuk setiap penyedia dalam setelan mereka.';
$string['btninstancecreate'] = 'Buat model';
$string['btninstanceupdate'] = 'Perbarui model';
$string['completiontokens'] = 'Token penyelesaian';
$string['completiontokens_help'] = 'Token penyelesaian adalah unit teks yang dihasilkan oleh model AI sebagai respons terhadap masukan Anda. Respons yang lebih panjang menggunakan lebih banyak token, yang kemungkinan akan lebih mahal.';
$string['configureprovider'] = 'Konfigurasi penyedia model';
$string['contentwatermark'] = 'Dihasilkan oleh AI';
$string['createnewprovider'] = 'Buat penyedia model baru';
$string['dateaccepted'] = 'Tanggal diterima';
$string['declineaipolicy'] = 'Tolak';
$string['enableglobalratelimit'] = 'Setel batas kecepatan di seluruh situs';
$string['enableglobalratelimit_help'] = 'Batasi jumlah permintaan yang dapat diterima penyedia AI di seluruh situs setiap jam.';
$string['enableuserratelimit'] = 'Setel batas kecepatan pengguna';
$string['enableuserratelimit_help'] = 'Batasi jumlah permintaan yang dapat dibuat setiap pengguna ke penyedia AI setiap jam.';
$string['error:actionnotfound'] = 'Aksi \'{$a}\' tidak didukung.';
$string['error:providernotfound'] = 'Model penyedia AI tidak ditemukan.';
$string['globalratelimit'] = 'Jumlah maksimum permintaan di seluruh situs';
$string['globalratelimit_help'] = 'Jumlah permintaan di seluruh situs yang diizinkan per jam.';
$string['manageaiplacements'] = 'Kelola penempatan AI';
$string['manageaiproviders'] = 'Kelola penyedia AI';
$string['noproviders'] = 'Aksi ini tidak tersedia. Tidak ada <a href="{$a}">penyedia AI</a> yang dikonfigurasi untuk aksi ini.';
$string['placement'] = 'Penempatan';
$string['placementactionsettings'] = 'Tindakan';
$string['placementactionsettings_desc'] = 'Tindakan AI yang tersedia untuk penempatan ini.';
$string['placementsettings'] = 'Setelan khusus penempatan';
$string['placementsettings_desc'] = 'Setelan ini mengontrol bagaimana penempatan AI ini terhubung ke layanan AI, dan operasi terkait.';
$string['privacy:metadata:ai_action_explain_text'] = 'Tabel yang menyimpan permintaan teks penjelasan yang dibuat oleh pengguna.';
$string['privacy:metadata:ai_action_explain_text:completiontoken'] = 'Token pelengkapan yang digunakan untuk menjelaskan teks.';
$string['privacy:metadata:ai_action_explain_text:fingerprint'] = 'Hash unik yang mewakili status/versi model dan konten.';
$string['privacy:metadata:ai_action_explain_text:generatedcontent'] = 'Teks sesungguhnya yang dihasilkan oleh model AI berdasarkan perintah masukan.';
$string['privacy:metadata:ai_action_explain_text:prompt'] = 'Perintah untuk permintaan teks penjelasan.';
$string['privacy:metadata:ai_action_explain_text:prompttokens'] = 'Token perintah yang digunakan untuk menerangkan teks.';
$string['privacy:metadata:ai_action_explain_text:responseid'] = 'ID respons.';
$string['privacy:metadata:ai_action_generate_image'] = 'Tabel yang menyimpan permintaan pembuatan gambar yang dibuat oleh pengguna.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Rasio aspek gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Jumlah gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Perintah untuk permintaan pembuatan gambar.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Kualitas gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Perintah yang direvisi dari gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'URL sumber gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Gaya gambar yang dihasilkan.';
$string['privacy:metadata:ai_action_generate_text'] = 'Tabel yang menyimpan permintaan pembuatan teks yang dibuat oleh pengguna.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Token pelengkapan yang digunakan untuk menghasilkan teks.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Hash unik yang mewakili status/versi model dan konten.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Teks sesungguhnya yang dihasilkan oleh model AI berdasarkan perintah masukan.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Perintah untuk permintaan pembuatan teks.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Token prompt yang digunakan untuk menghasilkan teks.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID respons.';
$string['privacy:metadata:ai_action_register'] = 'Tabel yang menyimpan permintaan tindakan yang dibuat oleh pengguna.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID permintaan tindakan.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Nama tindakan dari permintaan.';
$string['privacy:metadata:ai_action_register:model'] = 'Model yang digunakan untuk menghasilkan respons.';
$string['privacy:metadata:ai_action_register:provider'] = 'Nama penyedia yang menangani permintaan.';
$string['privacy:metadata:ai_action_register:success'] = 'Status permintaan tindakan.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Waktu penyelesaian permintaan.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Waktu pembuatan permintaan.';
$string['privacy:metadata:ai_action_register:userid'] = 'ID pengguna yang membuat permintaan.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Tabel yang menyimpan ringkasan teks permintaan yang dibuat oleh pengguna.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Token pelengkapan yang digunakan untuk meringkas teks.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Hash unik yang mewakili status/versi model dan konten.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Teks sesungguhnya yang dihasilkan oleh model AI berdasarkan perintah masukan.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Perintah untuk permintaan meringkas teks.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Token perintah yang digunakan untuk meringkas teks.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID respons.';
$string['privacy:metadata:ai_policy_register'] = 'Tabel yang menyimpan status penerimaan kebijakan AI untuk setiap pengguna.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID konteks yang datanya disimpan.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Waktu pengguna menerima kebijakan AI.';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID pengguna yang datanya disimpan.';
$string['prompttokens'] = 'Prompt tokens';
$string['prompttokens_help'] = 'Token prompt adalah unit teks yang menyusun input yang Anda kirim ke model AI. Input yang lebih panjang menggunakan lebih banyak token, yang kemungkinan akan lebih mahal.';
$string['provider'] = 'Penyedia';
$string['provideractionsettings'] = 'Aksi';
$string['provideractionsettings_desc'] = 'Pilih dan konfigurasikan tindakan yang dapat dilakukan {$a} di situs Anda.';
$string['providerinstanceactionupdated'] = 'Setelan aksi {$a} diperbarui';
$string['providerinstancecreated'] = '{$a} Model Penyedia AI dibuat';
$string['providerinstancedelete'] = 'Hapus model Penyedia AI';
$string['providerinstancedeleteconfirm'] = 'Anda akan menghapus model Penyedia AI: "{$a->name} ({$a->provider})". Apakah Anda yakin?';
$string['providerinstancedeleted'] = '{$a} model Penyedia AI dihapus.';
$string['providerinstancedeletefailed'] = 'Tidak dapat menghapus instans penyedia AI {$a}. Penyedia sedang digunakan atau ada masalah basis data. Periksa apakah penyedia aktif atau hubungi administrator basis data Anda untuk mendapatkan bantuan.';
$string['providerinstancedisablefailed'] = 'Tidak dapat menonaktifkan instans penyedia AI. Penyedia sedang digunakan atau ada masalah basis data. Periksa apakah penyedia aktif atau hubungi administrator basis data Anda untuk mendapatkan bantuan.';
$string['providerinstanceupdated'] = '{$a} model Penyedia AI diperbarui.';
$string['providermoveddown'] = '{$a} diturunkan.';
$string['providermovedup'] = '{$a} dinaikkan.';
$string['providername'] = 'Nama model';
$string['providers'] = 'Penyedia';
$string['providersettings'] = 'Setelan';
$string['providertype'] = 'Pilih pengaya Penyedia AI';
$string['timegenerated'] = 'Waktu yang dihasilkan';
$string['unknownvalue'] = '—';
$string['userpolicy'] = '<h4><strong>Selamat datang di fitur AI baru!</strong></h4>
<p>Fitur Kecerdasan Buatan (AI) ini sepenuhnya berbasis pada Large Language Models (LLM) eksternal untuk meningkatkan pengalaman belajar dan mengajar Anda. Sebelum Anda mulai menggunakan layanan AI ini, harap baca kebijakan penggunaan ini.</p>
<h4><strong>Keakuratan konten yang dihasilkan AI</strong></h4>
<p>AI dapat memberikan saran dan informasi yang bermanfaat, tetapi keakuratannya dapat bervariasi. Anda harus selalu memeriksa ulang informasi yang diberikan untuk memastikannya akurat, lengkap, dan sesuai dengan situasi spesifik Anda.</p>
<h4><strong>Bagaimana data Anda diproses</strong></h4>
<p>Fitur AI ini menggunakan Large Language Models (LLM) eksternal. Jika Anda menggunakan fitur ini, informasi atau data pribadi apa pun yang Anda bagikan akan ditangani sesuai dengan kebijakan privasi LLM tersebut. Kami sarankan Anda membaca kebijakan privasi mereka untuk memahami bagaimana mereka akan menangani data Anda. Selain itu, catatan interaksi Anda dengan fitur AI dapat disimpan di situs ini.</p> <p>Jika Anda memiliki pertanyaan tentang bagaimana data Anda diproses, silakan tanyakan kepada pengajar atau organisasi pembelajaran Anda.</p> <
p>Dengan melanjutkan, Anda mengakui bahwa Anda memahami dan menyetujui kebijakan ini.</p>';
$string['userratelimit'] = 'Jumlah maksimum permintaan per pengguna';
$string['userratelimit_help'] = 'Jumlah permintaan yang diizinkan per jam, per pengguna.';
