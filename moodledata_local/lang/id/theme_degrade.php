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
 * Strings for component 'theme_degrade', language 'id', version '5.0'.
 *
 * @package     theme_degrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['background_color'] = 'Warna Latar Belakang';
$string['background_color_black'] = 'Tema Hitam {$a}';
$string['background_color_blue'] = 'Tema Biru {$a}';
$string['background_color_default'] = 'Tema bawaan {$a}';
$string['background_color_desc'] = 'Warna latar belakang di bagian atas dan bawah!';
$string['background_color_green'] = 'Tema Hijau {$a}';
$string['background_color_random'] = 'Tema Acak {$a}';
$string['background_color_red'] = 'Tema Merah {$a}';
$string['background_text_color'] = 'Warna Teks';
$string['background_text_color_desc'] = 'Warna Teks Atas dan Footer!';
$string['choosereadme'] = 'Degrade adalah tema yang dibuat dengan penuh kasih sayang untuk membawa warna ceria ke Moodle.';
$string['contact_address'] = 'Alamat';
$string['contact_email'] = 'Surel';
$string['contact_phone'] = 'Nomor Telepon';
$string['content_pagefonts'] = 'Fonta Google Tambahan';
$string['content_pagefonts_desc'] = 'Tambahkan di sini tautan @import dari Google untuk fonta tambahan.<br>Anda dapat menambahkan beberapa @import.<br><a href="https://fonts.google.com/selection/embed" target="google">Kode sematan</a><br><img src="{$a}" style="max-width: 100%;width: 420px;">';
$string['content_type_default'] = 'Bawaan Moodle';
$string['content_type_empty'] = '(Tidak ada konten)';
$string['content_type_footer'] = 'Jenis Konten untuk Footer';
$string['content_type_footer_desc'] = 'Pilih jenis konten yang ingin ditampilkan di footer.';
$string['content_type_home'] = 'Jenis Konten untuk Beranda';
$string['content_type_home_desc'] = 'Pilih jenis konten yang ingin ditampilkan di beranda.';
$string['content_type_html'] = 'Halaman yang akan dibuat dengan editor';
$string['continuar'] = 'Lanjutkan belajar';
$string['countlesson'] = '{$a} pelajaran';
$string['countlessons'] = '{$a} pelajaran';
$string['course_access'] = 'Akses kursus';
$string['course_moore'] = 'Detail lebih lanjut';
$string['customcss'] = 'CSS Kustom';
$string['customcss_desc'] = 'Setiap aturan CSS yang Anda tambahkan ke area teks ini akan tercermin di semua halaman, memudahkan penyesuaian tema ini.';
$string['custommenuitems'] = 'Item Menu Atas Kustom';
$string['custommenuitems_desc'] = 'Anda dapat membuat menu kustom di samping menu atas. Menu induk harus dimulai sejajar dengan tepi, dan submenu harus diawali dengan tanda hubung (-). Jumlah tanda hubung menentukan kedalaman item. Dengan demikian, item dengan satu tanda hubung muncul dalam submenu di bawah item tingkat atas sebelumnya, dan item dengan dua tanda hubung muncul dalam submenu di bawah submenu sebelumnya.
Konten setiap item menu harus terdiri dari hingga tiga elemen (<strong>label</strong> | <strong>url</strong> | <strong>tooltip</strong> | <strong>lang</strong>), masing-masing dipisahkan oleh karakter "|".
<ul>
<li><strong>label</strong>: Ini adalah teks yang akan ditampilkan dalam item menu. Anda harus menentukan label untuk setiap item menu.</li>
<li><strong>url</strong>: Ini adalah URL ke mana pengguna akan dibawa setelah mengklik item menu. Ini bersifat opsional; jika tidak diberikan, item tersebut tidak akan dihubungkan ke mana pun.<br>
Atribut lain seperti "target" dapat ditambahkan ke ujung URL.</li>
<li><strong>tooltip</strong>: Jika Anda menyediakan URL, Anda juga dapat memilih untuk memberikan tooltip untuk tautan yang dibuat dengan URL. Ini bersifat opsional, dan jika tidak ditentukan, label digunakan sebagai tooltip untuk item menu.</li>
<li><strong>lang</strong>: Anda dapat menambahkan kode bahasa (atau daftar terpisah koma dari kode) sebagai elemen keempat dari baris tersebut. Baris akan ditampilkan hanya jika pengguna telah memilih bahasa yang tercantum.</li>
</ul>
Berikut adalah contoh bagaimana Anda akan membuat menu kustom:
<blockquote><pre>
Kursus
-Kursus-Kursus | /course/
-Kursus-Kursus Saya
--Kursus Contoh
---Kursus Contoh 7 | /course/view.php?id=7
---Kursus Contoh 9 | /course/view.php?id=9
--Kursus Uji
---Kursus Uji 2 | /course/view.php?id=2
---Kursus Uji 5 | /course/view.php?id=5
Google
-Google dalam bahasa apa pun | https://google.com/" target="_blank
-Google di Meksiko | https://www.google.com.mx/" target="_blank|Label Google|en
-Google dalam bahasa Portugis | https://google.com.br/" target="_blank|Label Google|pt,pt_br,pt_br_kids
Halaman Dukungan | https://support.com/" target="_blank
</pre></blockquote>
Untuk Moodle dengan dukungan untuk beberapa bahasa, nilai <strong>label</strong> harus diformat sebagai <strong>"namakey,komponenname"</strong>.
<blockquote><pre>
profil,moodle | /user/profile.php
pesan,pesan | /message/index.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/en/Advanced_theme_settings" target="_blank">Informasi menu lebih lanjut</a>';
$string['editor_link_footer'] = 'Edit blok footer untuk bahasa {$a}';
$string['editor_link_footer_all'] = 'Edit blok footer untuk semua bahasa';
$string['editor_link_home'] = 'Edit halaman utama untuk bahasa {$a}';
$string['editor_link_home_all'] = 'Edit halaman utama untuk semua bahasa';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'Favicon ditampilkan di samping judul halaman di tab peramban. Favicon Moodle ditampilkan jika favicon kustom tidak disediakan.';
$string['fontfamily'] = 'Fonta situs';
$string['fontfamily_desc'] = 'Pilih fonta yang ingin Anda gunakan di Moodle Anda';
$string['fontfamily_menus'] = 'Menu Fonta';
$string['fontfamily_menus_desc'] = 'Pilih fonta mana yang ingin Anda gunakan untuk menu di situs Moodle Anda.';
$string['fontfamily_sitename'] = 'Fonta untuk nama situs';
$string['fontfamily_sitename_desc'] = 'Fonta yang akan diterapkan pada nama situs jika logo tidak disediakan.';
$string['fontfamily_title'] = 'Fonta Teks Judul';
$string['fontfamily_title_desc'] = 'Pilih fonta mana yang ingin Anda gunakan untuk judul di situs Moodle Anda.';
$string['fontpreview'] = 'Pratinjau Daftar Fonta';
$string['footer_contact_title'] = 'Judul Blok Kontak';
$string['footer_contact_title_default'] = 'Hubungi kami';
$string['footer_contact_title_desc'] = 'Masukkan judul Blok yang akan muncul di Footer dengan data kontak.';
$string['footer_description'] = 'Deskripsi';
$string['footer_description_desc'] = 'Deskripsikan Moodle Anda, apa yang Anda lakukan, dan informasi ini akan ditampilkan di bawah logo di Footer Moodle';
$string['footer_frontpage_blockcourses_instructor'] = 'Tampilkan Nama Pengajar';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'Jika dicentang, menampilkan nama pengajar dalam daftar kursus!';
$string['footer_frontpage_blockcourses_text'] = 'Teks singkat menjelaskan blok "{$a}"';
$string['footer_frontpage_blockcourses_text_desc'] = 'Tambahkan teks yang menjelaskan "{$a}"!';
$string['footer_links_title'] = 'Judul Blok Tautan';
$string['footer_links_title_default'] = 'Tautan Penting';
$string['footer_show_copywriter'] = 'Tampilkan Dibuat dengan ❤️';
$string['footer_show_copywriter_desc'] = 'Jangan centang jika Anda ingin menyembunyikan "Dibuat dengan ❤️"';
$string['footer_social_title'] = 'Judul Blok Sosial';
$string['footer_social_title_default'] = 'Ikuti kami di media sosial';
$string['footer_social_title_desc'] = 'Masukkan judul Blok yang akan muncul di Footer dengan data media sosial Anda.';
$string['footerblink'] = 'Tautan Blok Footer';
$string['footerblink_desc'] = 'Anda dapat mengonfigurasi Blok Tautan Footer di sini untuk ditampilkan oleh tema. <br>Setiap baris terdiri dari beberapa teks menu atau kunci bahasa atau teks, URL tautan (opsional), dipisahkan oleh garis vertikal. Contohnya:<br><pre>Dukungan Moodle|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'Blok Kontak';
$string['footerblock_copywriter'] = 'Dibuat dengan ❤️';
$string['footerblock_description'] = 'Blok deskripsi';
$string['footerblock_links'] = 'Blok tautan';
$string['footerblock_social'] = 'Blok Sosial';
$string['free_name'] = 'Gratis';
$string['frontpage_about_description'] = 'Deskripsikan apa yang Anda lakukan';
$string['frontpage_about_description_desc'] = 'Jelaskan dalam maksimal 5 baris tujuan Moodle Anda';
$string['frontpage_about_enable'] = 'Aktifkan blok Tentang';
$string['frontpage_about_enable_desc'] = 'Jika dicentang, Blok Tentang akan muncul di bawah Banner!';
$string['frontpage_about_info'] = 'Kotak data {$a}';
$string['frontpage_about_logo'] = 'Logo berbeda yang akan ditampilkan di sini';
$string['frontpage_about_logo_desc'] = 'Jika diatur, logo ini akan digunakan di sini, bukan logo di atas.<br>
Kosongkan menggunakan Logo Atas!';
$string['frontpage_about_number'] = 'Jumlah data';
$string['frontpage_about_number_desc'] = 'Masukkan jumlah informasi yang disebutkan di atas';
$string['frontpage_about_text'] = 'Nama data';
$string['frontpage_about_text_1_defalt'] = 'Kursus';
$string['frontpage_about_text_2_defalt'] = 'Pengajar';
$string['frontpage_about_text_3_defalt'] = 'Siswa';
$string['frontpage_about_text_4_defalt'] = 'Pelajaran';
$string['frontpage_about_text_desc'] = 'Masukkan nama data yang akan ditampilkan di beranda';
$string['frontpage_about_title'] = 'Judul Blok Tentang';
$string['frontpage_about_title_default'] = 'Komunitas Global Kami';
$string['heart'] = 'Jika Anda menyukai tema ini, jangan lupa klik ❤️ di halaman tema <a href="{$a}" target="_blank">klik di sini</a>';
$string['instructor'] = 'Pengajar';
$string['login_backgroundcolor'] = 'Warna latar belakang';
$string['login_backgroundcolor_desc'] = 'Pilih warna latar belakang halaman setelan ulang kata sandi';
$string['login_backgroundfoto'] = 'Gambar latar belakang';
$string['login_backgroundfoto_desc'] = 'Pilih gambar latar belakang Login/Reset Kata Sandi/Buat Akun. Gambar bawaan adalah: {$a}';
$string['login_forgot_description'] = 'Teks di samping Layar Lupa Kata Sandi';
$string['login_forgot_description_desc'] = 'Teks yang hanya muncul di Layar Lupa Kata Sandi';
$string['login_login_description'] = 'Teks di samping Layar Login';
$string['login_login_description_desc'] = 'Teks yang hanya muncul di Layar Login';
$string['login_signup_description'] = 'Teks di samping Layar Buat Akun';
$string['login_signup_description_desc'] = 'Teks yang hanya muncul di Layar Buat Akun';
$string['login_theme'] = 'Tema login';
$string['login_theme_block'] = 'Blok putih di tengah dengan latar belakang opsional';
$string['login_theme_desc'] = 'Pilih tema apa yang ingin Anda gunakan di area Login';
$string['login_theme_image_login'] = 'Gambar latar belakang dan login di samping';
$string['login_theme_imagetext_login'] = 'Gambar latar belakang, teks di atas gambar, dan login di samping';
$string['login_theme_login'] = 'Hanya layar login, tanpa gambar di samping';
$string['logo_color'] = 'Logo berwarna';
$string['logo_color_desc'] = 'Silakan unggah LOGO berwarna Anda jika ingin menyertakannya di bagian atas. Logo ini akan ditampilkan saat halaman digulir, dan menu akan ditampilkan pada latar belakang putih.';
$string['logo_write'] = 'Logo Putih';
$string['logo_write_desc'] = 'Silakan unggah LOGO putih Anda jika ingin menyertakannya di bagian atas. Logo ini akan ditampilkan saat guliran tetap di atas, dan menu akan ditampilkan pada latar belakang berwarna.';
$string['matricular'] = 'Mendaftar';
$string['mycourses_color'] = 'Warna Latar Belakang Blok';
$string['mycourses_color_desc'] = 'Warna latar belakang untuk blok.';
$string['mycourses_icon'] = 'Ikon';
$string['mycourses_icon_desc'] = 'Ikon representatif untuk blok tersebut. Ukuran ikon harus 48x48 piksel.';
$string['mycourses_info'] = 'Blok {$a}';
$string['mycourses_numblocos'] = 'Tidak ada blok';
$string['mycourses_numblocos_desc'] = 'Berapa gambar yang ingin ditampilkan pada tayangan salindia';
$string['mycourses_numblocos_nenhum'] = 'Tidak ada salindia pada beranda';
$string['mycourses_title'] = 'Judul Blok Singkat';
$string['mycourses_title_desc'] = 'Judul singkat dan deskriptif untuk blok tersebut.';
$string['mycourses_url'] = 'Tautan Blok';
$string['mycourses_url_desc'] = 'URL yang menjadi tujuan navigasi saat mengeklik blok. Ini bisa berupa tautan eksternal atau tautan internal di dalam platform.';
$string['pluginname'] = 'Degrade';
$string['privacy:metadata'] = 'Tema Degrade tidak menyimpan data pribadi tentang pengguna.';
$string['settings_about_heading'] = 'Tentang Moodle Anda';
$string['settings_css_heading'] = 'Fonta dan CSS';
$string['settings_footer_heading'] = 'Blok Footer';
$string['settings_icons_change_icons'] = 'Ubah ikon default dalam daftar kursus';
$string['settings_login_heading'] = 'Layar Masuk';
$string['settings_mycourses_heading'] = 'Blok Kursusku';
$string['settings_slideshow_heading'] = 'SlideShow';
$string['settings_theme_heading'] = 'Tema dan CSS';
$string['settings_top_heading'] = 'Menu Atas';
$string['sitefonts'] = 'Fonta Google Tambahan';
$string['sitefonts_desc'] = 'Masukkan kode @import dari Google Fonts seperti yang ditunjukkan dalam gambar di bawah ini. Setelah disimpan, bidang "Font Situs" akan diperbarui, menampilkan font-font ini. Anda dapat menambahkan beberapa @import sesuai kebutuhan.';
$string['slidecaption_desc'] = 'Masukkan teks keterangan yang akan digunakan pada slide';
$string['slideshow_image'] = 'Gambar Slide';
$string['slideshow_image_desc'] = 'Gambar harus berukuran 1250px X 400px.';
$string['slideshow_info'] = 'Slide {$a}';
$string['slideshow_numslides'] = 'Berapa banyak gambar dalam SlideShow';
$string['slideshow_numslides_desc'] = 'Berapa banyak gambar yang ingin Anda tampilkan dalam SlideShow?';
$string['slideshow_numslides_nenhum'] = 'Tidak ada slide di Beranda';
$string['slideshow_text'] = 'Teks Singkat Deskripsi Slide';
$string['slideshow_text_desc'] = 'Masukkan teks singkat tentang slide.';
$string['slideshow_url'] = 'Tautan tombol slide';
$string['slideshow_url_desc'] = 'Masukkan tujuan tautan tombol gambar slide';
$string['social_facebook'] = 'Facebook Anda';
$string['social_facebook_desc'] = 'URL Facebook organisasi Anda.';
$string['social_instagram'] = 'Instagram Anda';
$string['social_instagram_desc'] = 'URL Instagram organisasi Anda.';
$string['social_linkedin'] = 'Linkedin Anda';
$string['social_linkedin_desc'] = 'URL Linkedin organisasi Anda.';
$string['social_twitter'] = 'Twitter Anda';
$string['social_twitter_desc'] = 'URL Twitter organisasi Anda.';
$string['social_youtube'] = 'Youtube Anda';
$string['social_youtube_desc'] = 'URL Youtube organisasi Anda.';
$string['theme_color-color_buttons'] = 'Warna Tombol';
$string['theme_color-color_buttons_desc'] = 'Warna yang digunakan untuk tombol, menambah kohesi visual dan menekankan tindakan interaktif.';
$string['theme_color-color_names'] = 'Warna Nama';
$string['theme_color-color_names_desc'] = 'Warna yang digunakan untuk menonjolkan nama atau identifikasi, memberikan kejelasan dan penekanan pada informasi teks tertentu.';
$string['theme_color-color_primary'] = 'Warna Primer';
$string['theme_color-color_primary_desc'] = 'Warna utama primer tema, biasanya digunakan untuk elemen sorot dan penekanan.';
$string['theme_color-color_secondary'] = 'Warna Sekunder';
$string['theme_color-color_secondary_desc'] = 'Warna sekunder yang melengkapi warna primer, digunakan untuk menonjolkan elemen sekunder atau untuk kontras dengan warna primer.';
$string['theme_color_desc'] = 'Pilih warna teks dan tombol Moodle atau klik pada baris di bawah:';
$string['theme_color_heading'] = 'Pemilihan Warna Tema';
$string['theme_color_sugestion'] = 'Saran warna';
$string['theme_color_sugestion_text'] = 'Klik pada garis untuk menerapkan warna pada ruas di bawah ini:';
$string['theme_degrade_about_editbooton'] = 'Edit blok Tentang';
$string['theme_degrade_frontpage_bloco'] = 'Blok "{$a}"';
$string['theme_degrade_frontpage_home'] = 'Blok Beranda';
$string['theme_degrade_mycourses_editbooton'] = 'Edit Blok';
$string['theme_degrade_slideshow_editbooton'] = 'Edit Tayangan Salindia';
$string['theme_login_branco'] = 'Hanya layar login, tanpa gambar di samping, dengan formulir di latar belakang putih';
$string['top_color_heading'] = 'Warna Puncak Saat Bergulir';
$string['top_scroll'] = 'Sematkan menu saat menggulir halaman';
$string['top_scroll_background_color'] = 'Warna Latar Belakang Menu Puncak Saat Bergulir';
$string['top_scroll_background_color_desc'] = 'Tentukan warna latar belakang saat menggulir halaman.';
$string['top_scroll_desc'] = 'Saat diaktifkan, menu akan disematkan ke bagian atas layar saat Anda menggulir halaman, memastikan akses mudah ke opsi menu.';
$string['top_scroll_text_color'] = 'Warna Teks Menu Saat Bergulir';
$string['top_scroll_text_color_desc'] = 'Tentukan warna teks menu saat menggulir halaman.';
$string['vvveb_footer_contact_title_default'] = 'Hubungi kami';
$string['vvveb_home_access'] = 'Akses kursus';
$string['vvveb_home_automatically_catalogo'] = 'Jangan edit. Blok ini akan digantikan secara otomatis dengan katalog kursus.';
$string['vvveb_home_automatically_category'] = 'Jangan edit. Blok ini akan digantikan secara otomatis dengan kategori kursus.';
$string['vvveb_home_automatically_my_course'] = 'Jangan diedit. Blok ini akan otomatis diganti dengan kursus yang diikuti oleh siswa.';
$string['vvveb_home_automatically_popular'] = 'Jangan edit. Blok ini akan digantikan secara otomatis dengan kursus paling populer.';
$string['vvveb_home_catalogo_heading'] = 'Katalog kursus';
$string['vvveb_home_category_heading'] = 'Kategori kursus';
$string['vvveb_home_mycourses_heading'] = 'Kursus Saya';
$string['vvveb_home_popular_course'] = 'Kursus Populer';
$string['vvveb_home_team_subtitle'] = 'Kami adalah kelompok profesional yang berdedikasi pada pekerjaan mereka';
$string['vvveb_home_team_title'] = 'Kenali Tim Kami';
