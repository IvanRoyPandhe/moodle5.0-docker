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
 * Strings for component 'tool_usertours', language 'id', version '5.0'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Di atas';
$string['actions'] = 'Tindakan';
$string['appliesto'] = 'Berlaku untuk';
$string['backdrop'] = 'Tampilkan dengan latar belakang';
$string['backdrop_help'] = 'Anda dapat menggunakan latar belakang untuk menyorot bagian halaman yang Anda tuju. Catatan: Latar belakang tidak kompatibel dengan beberapa bagian halaman seperti bilah navigasi.';
$string['below'] = 'Dibawah';
$string['block'] = 'Blok';
$string['block_named'] = 'Blok bernama \'{$a}\'';
$string['cachedef_stepdata'] = 'Daftar langkah tur  pengguna';
$string['cachedef_tourdata'] = 'Daftar informasi tur pengguna yang diaktifkan yang diambil di setiap halaman';
$string['confirmstepremovalquestion'] = 'Apakah Anda yakin ingin menghapus langkah ini?';
$string['confirmstepremovaltitle'] = 'Konfirmasi penghapusan langkah';
$string['confirmtourremovalquestion'] = 'Yakin ingin menghapus tur ini?';
$string['confirmtourremovaltitle'] = 'Konfirmasi penghapusan tur';
$string['content'] = 'Konten';
$string['content_heading'] = 'Konten';
$string['content_help'] = 'Konten yang menjelaskan langkah dapat ditambahkan sebagai teks biasa, diapit dalam tag multibahasa (untuk digunakan dengan filter konten multibahasa) jika diperlukan.';
$string['content_type'] = 'Tipe konten';
$string['content_type_help'] = '* Manual - konten dimasukkan menggunakan editor teks
* ID string bahasa - dalam format pengidentifikasi string, komponen (tanpa spasi setelah koma)';
$string['content_type_langstring'] = 'ID string bahasa';
$string['content_type_manual'] = 'Manual';
$string['cssselector'] = 'Selektor CSS';
$string['defaultvalue'] = 'Bawaan {{$a}}';
$string['delay'] = 'Tunda sebelum menunjukkan langkah';
$string['delay_help'] = 'Anda dapat memilih untuk menambahkan penundaan sebelum langkah ditampilkan. Penundaan ini dalam milidetik.';
$string['description'] = 'Deskripsi';
$string['description_help'] = 'Deskripsi tur dapat ditambahkan sebagai teks biasa, dilampirkan dalam tag multibahasa (untuk digunakan dengan filter konten multibahasa) jika diperlukan.

Atau, ID string bahasa dapat dimasukkan dalam pengenal format,komponen (tanpa tanda kurung atau spasi setelah koma).';
$string['displaystepnumbers'] = 'Tampilkan nomor langkah';
$string['displaystepnumbers_help'] = 'Apakah akan menampilkan jumlah langkah, mis. 1/4, 2/4 dst. untuk menunjukkan lamanya tur pengguna.';
$string['done'] = 'Selesai';
$string['duplicatetour'] = 'Tur duplikat';
$string['duplicatetour_name'] = '{$a} (salinan)';
$string['editstep'] = 'Mengedit "{$a}"';
$string['enabled'] = 'Diaktifkan';
$string['endonesteptour'] = 'Mengerti';
$string['endtour'] = 'Akhir tur';
$string['endtourlabel'] = 'Label tombol akhiri tur';
$string['endtourlabel_help'] = 'Anda dapat secara opsional menentukan label kustom untuk tombol akhiri tur. Label bawaan adalah "Mengerti" untuk satu langkah, dan "Akhiri tur" untuk tur beberapa langkah..

Atau, ID string bahasa dapat dimasukkan dalam pengenal format, komponen (tanpa tanda kurung atau spasi setelah koma).';
$string['event_step_shown'] = 'Langkah ditampilkan';
$string['event_tour_ended'] = 'Tur diakhiri';
$string['event_tour_reset'] = 'Reset tur';
$string['event_tour_started'] = 'Tur dimulai';
$string['exporttour'] = 'Ekspor tur';
$string['filter_accessdate'] = 'Tanggal akses';
$string['filter_accessdate_enabled'] = 'Aktifkan filter tanggal akses';
$string['filter_accessdate_enabled_help'] = 'Hanya tampilkan tur kepada pengguna baru atau pengguna yang baru saja mengakses situs.';
$string['filter_category'] = 'Kategori';
$string['filter_category_help'] = 'Tampilkan tur ini di halaman yang terkait dengan kursus dalam kategori yang dipilih.';
$string['filter_course'] = 'Kursus terpilih';
$string['filter_course_error_course_selection'] = 'Anda harus memilih setidaknya satu kursus';
$string['filter_course_help'] = 'Bergantung pada nilai filter Kursus:

* **Hanya kursus terpilih**: Tampilkan tur ini pada halaman yang terkait dengan kursus terpilih.
* **Semua kursus kecuali yang terpilih**: Jangan tampilkan tur ini pada halaman yang terkait dengan kursus terpilih.';
$string['filter_course_operator'] = 'Kursus';
$string['filter_course_operator_all'] = 'Semua kursus';
$string['filter_course_operator_except'] = 'Semua kursus kecuali yang terpilih';
$string['filter_course_operator_help'] = 'Tur dapat dikonfigurasikan untuk hanya muncul pada kursus tertentu.

* **Semua kursus**: Tampilkan tur ini tanpa memandang kursus.
* **Hanya kursus tertentu**: Tampilkan tur ini hanya pada halaman yang terkait dengan kursus yang dipilih di bawah ini.
* **Semua kursus kecuali yang dipilih**: Jangan tampilkan tur ini pada halaman yang terkait dengan kursus yang dipilih di bawah ini.';
$string['filter_course_operator_select'] = 'Hanya kursus terpilih';
$string['filter_courseformat'] = 'Format kursus';
$string['filter_courseformat_help'] = 'Tampilkan tur di halaman yang terkait dengan kursus menggunakan format kursus yang dipilih.';
$string['filter_cssselector'] = 'Selektor CSS';
$string['filter_cssselector_help'] = 'Hanya tampilkan tur saat pemilih CSS yang ditentukan ditemukan di halaman.';
$string['filter_date_account_creation'] = 'Tanggal pembuatan dalam akun pengguna';
$string['filter_date_first_login'] = 'Tanggal akses pertama pengguna';
$string['filter_date_last_login'] = 'Tanggal akses terakhir pengguna';
$string['filter_exclude_category'] = 'Kecualikan kategori';
$string['filter_exclude_category_help'] = 'Jangan tampilkan tur ini di halaman yang terkait dengan kategori kursus yang dipilih.

Jika Anda memilih kategori induk, subkategori terkait akan dipilih secara otomatis dan tidak dapat dipilih satu per satu.

Batalkan pilihan kategori induk untuk memilih subkategori lagi.';
$string['filter_header'] = 'Filter tur';
$string['filter_help'] = 'Pilih kondisi di mana tur akan ditampilkan. Semua filter harus cocok agar tur ditampilkan kepada pengguna.';
$string['filter_role'] = 'Peran';
$string['filter_role_help'] = 'Tur mungkin dibatasi untuk pengguna dengan peran yang dipilih dalam konteks di mana tur ditampilkan. Misalnya, membatasi tur Dasbor untuk pengguna dengan peran siswa tidak akan berfungsi jika pengguna memiliki peran siswa dalam suatu kursus (seperti yang umumnya terjadi). Tur Dasbor hanya dapat dibatasi untuk pengguna dengan peran sistem.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Tampilkan tur saat pengguna menggunakan salah satu tema yang dipilih.';
$string['importtour'] = 'Impor tur';
$string['invalid_lang_id'] = 'ID string bahasa tidak valid';
$string['left'] = 'Kiri';
$string['modifyshippedtourwarning'] = 'Ini adalah tur pengguna untuk penggunaan Moodle. Modifikasi apa pun yang Anda buat dapat disampingkan selama peningkatan situs Anda berikutnya.';
$string['moodle_language_identifier'] = 'ID string bahasa';
$string['movestepdown'] = 'Pindahkan langkah ke bawah';
$string['movestepup'] = 'Pindahkan langkah ke atas';
$string['movetourdown'] = 'PIndahkan tur ke bawah';
$string['movetourup'] = 'PIndahkan tur ke atas';
$string['name'] = 'Nama';
$string['name_help'] = 'Nama tur dapat ditambahkan sebagai teks biasa, diapit dengan tag multibahasa (untuk digunakan dengan filter konten multibahasa) jika diperlukan.

Atau, ID string bahasa dapat dimasukkan dalam pengenal format, komponen (tanpa tanda kurung atau spasi setelah koma).';
$string['newstep'] = 'Langkah baru';
$string['newtour'] = 'Buat tur baru';
$string['next'] = 'Selanjutnya';
$string['nextstep'] = 'Selanjutnya';
$string['nextstep_sequence'] = 'Berikutnya ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opsi';
$string['orphan'] = 'Tampilkan jika target tidak ditemukan';
$string['orphan_help'] = 'Tunjukkan langkah jika target tidak dapat ditemukan di halaman.';
$string['pathmatch'] = 'Apply to URL match';
$string['pathmatch_help'] = 'Tur akan ditampilkan di halaman mana pun yang URL-nya cocok dengan nilai ini. Anda dapat menggunakan karakter % sebagai wildcard untuk mengartikan apa saja. Beberapa contoh nilai meliputi: * /my/% - untuk mencocokkan Dasbor * /course/view.php?id=2 - untuk mencocokkan kursus tertentu * /mod/forum/view.php% - untuk mencocokkan daftar diskusi forum * /user/profile.php% - untuk mencocokkan halaman profil pengguna Jika Anda ingin menampilkan tur di halaman Beranda Situs, Anda dapat menggunakan kata: "FRONTPAGE".
tool_usertours/pathmatch_help';
$string['pausetour'] = 'Jeda';
$string['placement'] = 'Penempatan';
$string['placement_help'] = 'Sebuah langkah dapat ditempatkan di atas, di bawah, kiri atau kanan dari target. Direkomendasikan di atas atau di bawah, karena penyesuaian ini lebih baik untuk tampilan seluler. Jika langkah tersebut tidak muat pada halaman tertentu di tempat yang ditentukan, maka secara otomatis akan ditempatkan di tempat lain.';
$string['pluginname'] = 'Tur pengguna';
$string['privacy:metadata:preference:completed'] = 'Waktu terakhir kali pengguna menyelesaikan tur pengguna.';
$string['privacy:metadata:preference:requested'] = 'Waktu terakhir pengguna meminta tur pengguna secara manual.';
$string['privacy:request:preference:completed'] = 'Anda terakhir kali menandai "{$a->name}" tur pengguna sebagai selesai pada {$a->time}';
$string['privacy:request:preference:requested'] = 'Anda terakhir kali meminta "{$a->name}" tur pengguna pada {$a->time}';
$string['reflex'] = 'Lanjutkan di klik';
$string['reflex_help'] = 'Lanjutkan ke langkah berikutnya ketika target diklik.';
$string['resettouronpage'] = 'Setel ulang tur pengguna di halaman ini';
$string['resumetour'] = 'Mulai lagi';
$string['right'] = 'Kanan';
$string['select_block'] = 'Pilih blok';
$string['selector_defaulttitle'] = 'Masukkan judul deskriptif';
$string['selectordisplayname'] = 'Pemilih CSS yang cocok dengan \'{$a}\'';
$string['selecttype'] = 'Pilih jenis langkah';
$string['sharedtourslink'] = 'Repositori tur';
$string['showtoureachtime'] = 'setiap kali filter cocok dengannya';
$string['showtouruntilcomplete'] = 'sampai sudah ditutup';
$string['showtourwhen'] = 'Tampilkan tur';
$string['skip'] = 'Lewati';
$string['skip_tour'] = 'Lewati tur';
$string['target'] = 'Tarket';
$string['target_block'] = 'Blok';
$string['target_heading'] = 'Langkah target';
$string['target_selector'] = 'Selektor';
$string['target_selector_targetvalue'] = 'Selektor CSS';
$string['target_selector_targetvalue_help'] = 'Pemilih CSS dapat digunakan untuk menargetkan hampir semua elemen di halaman. Pemilih yang sesuai dapat dengan mudah ditemukan menggunakan alat pengembang untuk peramban web Anda.';
$string['target_unattached'] = 'Tampilkan di tengah halaman';
$string['targettype'] = 'Jenis target';
$string['targettype_help'] = 'Setiap langkah dikaitkan dengan bagian halaman - target. Jenis target adalah:

* Blok - untuk menampilkan langkah di sebelah blok yang ditentukan
* Pemilih CSS - untuk menentukan area target secara akurat menggunakan CSS
* Tampilkan di tengah halaman - untuk langkah yang tidak perlu dikaitkan dengan bagian tertentu dari halaman';
$string['title'] = 'Judul';
$string['title_help'] = 'Judul langkah dapat ditambahkan sebagai teks biasa, diapit dalam label multilang (untuk digunakan dengan filter konten multi-bahasa) jika diperlukan. Atau, ID string bahasa dapat dimasukkan dalam pengidentifikasi format, komponen (tanpa tanda kurung atau spasi setelah koma).';
$string['tour1_content_addingblocks'] = 'Faktanya, pikirkan baik-baik tentang menyertakan blok apa pun di halaman Anda. Pemblokiran tidak ditampilkan di aplikasi Moodle, jadi sebagai aturan umum, jauh lebih baik untuk memastikan situs Anda berfungsi dengan baik tanpa pemblokiran apa pun.';
$string['tour1_content_blockregion'] = 'Masih ada wilayah blok di sini. Kami merekomendasikan untuk menghapus blok Navigasi dan Administrasi sepenuhnya, karena semua fungsionalitas ada di tempat lain dalam tema Boost.';
$string['tour1_content_customisation'] = 'Untuk menyesuaikan tampilan situs Anda dan beranda situs, gunakan menu setelan di sudut header ini. Coba aktifkan pengeditan sekarang.';
$string['tour1_content_end'] = 'Ini adalah akhir dari tur pengguna Anda. Ini tidak akan ditampilkan lagi kecuali Anda menyetel ulang menggunakan tautan di footer. Sebagai admin, Anda juga dapat membuat tur sendiri seperti ini!';
$string['tour1_content_navigation'] = 'Navigasi utama sekarang melalui panel samping navigasi ini. Konten diperbarui tergantung di mana Anda berada di situs. Gunakan tombol di bagian atas untuk menyembunyikan atau menampilkannya.';
$string['tour1_content_welcome'] = 'Selamat datang di tema Boost. Jika Anda telah meningkatkan dari versi sebelumnya, Anda mungkin menemukan beberapa hal terlihat sedikit berbeda dengan tema ini.';
$string['tour1_title_addingblocks'] = 'Menambahkan blok';
$string['tour1_title_blockregion'] = 'Wilayah Blok';
$string['tour1_title_customisation'] = 'Kustomisasi';
$string['tour1_title_end'] = 'Akhir tur';
$string['tour1_title_navigation'] = 'Navigasi';
$string['tour1_title_welcome'] = 'Selamat datang';
$string['tour2_content_addblock'] = 'Jika Anda mengaktifkan pengeditan, Anda dapat menambahkan blok dari laci navigasi. Namun, pikirkan baik-baik tentang menyertakan blok apa pun di halaman Anda. Blok tidak ditampilkan di aplikasi Moodle, jadi untuk pengalaman pengguna terbaik, lebih baik memastikan kursus Anda berfungsi dengan baik tanpa blok apa pun.';
$string['tour2_content_addingblocks'] = 'Anda dapat menambahkan blok ke halaman ini menggunakan tombol ini. Namun, pikirkan baik-baik tentang menyertakan blok apa pun di halaman Anda.
Blok tidak ditampilkan di aplikasi Moodle, jadi untuk pengalaman pengguna terbaik, lebih baik memastikan kursus Anda berfungsi dengan baik tanpa blok apa pun.';
$string['tour2_content_customisation'] = 'Untuk mengubah setelan kursus apa pun, gunakan menu setelan di sudut tajuk ini. Anda juga akan menemukan menu setelan serupa di halaman beranda setiap aktivitas. Coba aktifkan pengeditan sekarang.';
$string['tour2_content_end'] = 'Ini adalah akhir dari tur pengguna Anda. Ini tidak akan ditampilkan lagi kecuali Anda menyetel ulang menggunakan tautan di footer. Admin situs juga dapat membuat tur lebih lanjut untuk situs ini jika diperlukan.';
$string['tour2_content_navigation'] = 'Navigasi sekarang melalui panel samping navigasi ini. Gunakan tombol di bagian atas untuk menyembunyikan atau menampilkannya. Anda akan melihat bahwa terdapat tautan untuk bagian kursus Anda.';
$string['tour2_content_opendrawer'] = 'Coba buka laci nav sekarang.';
$string['tour2_content_participants'] = 'Lihat peserta di sini. Ini juga tempat Anda menambahkan atau menghapus siswa.';
$string['tour2_content_welcome'] = 'Selamat datang di tema Boost. Jika situs Anda telah ditingkatkan dari versi sebelumnya, Anda mungkin menemukan hal-hal yang terlihat sedikit berbeda di sini di halaman kursus.';
$string['tour2_title_addblock'] = 'Tambahkan blok';
$string['tour2_title_addingblocks'] = 'Menambahkan blok';
$string['tour2_title_customisation'] = 'Kustomisasi';
$string['tour2_title_end'] = 'Akhir tur';
$string['tour2_title_navigation'] = 'Navigasi';
$string['tour2_title_opendrawer'] = 'Buka nav';
$string['tour2_title_participants'] = 'Peserta kursus';
$string['tour2_title_welcome'] = 'Selamat datang';
$string['tour3_content_dashboard'] = 'Dasbor baru Anda memiliki banyak fitur untuk membantu Anda dengan mudah mengakses informasi yang paling penting bagi Anda.';
$string['tour3_content_displayoptions'] = 'Kursus dapat diurutkan berdasarkan nama kursus, nama pendek kursus atau tanggal akses terakhir. Anda juga dapat memilih untuk menampilkan kursus dalam daftar, dengan informasi ringkasan, atau tampilan \'kartu\' bawaan.';
$string['tour3_content_overview'] = 'Blok Ikhtisar kursus menunjukkan semua kursus yang Anda ikuti. Anda dapat memilih untuk menampilkan kursus yang sedang berlangsung, yang telah berlalu, yang akan datang, atau kursus yang telah Anda bintangi.';
$string['tour3_content_recentcourses'] = 'Blok kursus yang baru diakses menunjukkan kursus yang terakhir Anda kunjungi, memungkinkan Anda untuk langsung masuk kembali.';
$string['tour3_content_starring'] = 'Anda dapat memilih untuk membintangi kursus agar menonjol, atau menyembunyikan kursus yang tidak lagi penting bagi Anda. Tindakan ini hanya memengaruhi pandangan Anda. Anda juga dapat memilih untuk menampilkan kursus dalam daftar, atau dengan informasi ringkasan, atau tampilan \'kartu\' secara bawaan.';
$string['tour3_content_timeline'] = 'Blok lini masa menunjukkan acara penting Anda yang akan datang. Anda dapat memilih untuk menampilkan aktivitas di minggu depan, bulan, atau lebih jauh ke depan. Anda juga dapat menampilkan item yang sudah lewat waktu.';
$string['tour3_title_dashboard'] = 'Dasbor Anda';
$string['tour3_title_displayoptions'] = 'Opsi tampilan';
$string['tour3_title_overview'] = 'Ikhtisar kursus';
$string['tour3_title_recentcourses'] = 'Kursus yang baru diakses';
$string['tour3_title_starring'] = 'Bintangi dan sembunyikan kursus';
$string['tour3_title_timeline'] = 'Blok lini masa';
$string['tour4_content_groupconvo'] = 'Jika Anda adalah anggota grup dengan olah pesan grup diaktifkan, Anda akan melihat percakapan grup di sini. Percakapan grup kursus memungkinkan Anda untuk berinteraksi dengan orang lain dalam grup Anda di lokasi yang pribadi dan nyaman.';
$string['tour4_content_icon'] = 'Anda dapat mengakses pesan Anda dari halaman mana pun menggunakan ikon ini. Jika Anda memiliki pesan yang belum dibaca, jumlah pesan yang belum dibaca juga akan ditampilkan di sini. Klik pada ikon untuk membuka laci pesan dan melanjutkan tur.';
$string['tour4_content_messaging'] = 'Fitur olah pesan baru termasuk olah pesan grup dalam kursus dan kontrol yang lebih baik atas siapa yang dapat mengirimi Anda pesan.';
$string['tour4_content_settings'] = 'Anda dapat mengakses setelan olah pesan Anda melalui ikon roda gigi. Setelan privasi baru memungkinkan Anda membatasi siapa yang dapat mengirim Anda pesan.';
$string['tour4_content_starred'] = 'Anda dapat memilih untuk membintangi percakapan tertentu agar lebih mudah ditemukan.';
$string['tour4_title_groupconvo'] = 'Pesan grup';
$string['tour4_title_icon'] = 'Olah pesan';
$string['tour4_title_messaging'] = 'Antarmuka olah pesan baru';
$string['tour4_title_settings'] = 'Setelan olah pesan';
$string['tour4_title_starred'] = 'Berbintang';
$string['tour_activityinfo_activity_student_content'] = 'Tanggal aktivitas ditambah apa yang harus dilakukan untuk menyelesaikan aktivitas ditampilkan di halaman aktivitas.';
$string['tour_activityinfo_activity_student_title'] = 'New: Activity information';
$string['tour_activityinfo_activity_teacher_content'] = 'Tanggal aktivitas dan kondisi penyelesaian sekarang ditampilkan untuk siswa di setiap halaman aktivitas (dan opsional di halaman kursus). Untuk aktivitas yang mengharuskan siswa menandai aktivitas sebagai selesai secara manual, tombol \'Tandai sebagai selesai\' akan ditampilkan di halaman aktivitas.';
$string['tour_activityinfo_activity_teacher_title'] = 'Baru: Informasi aktivitas';
$string['tour_activityinfo_course_student_content'] = 'Tanggal aktivitas dan/atau apa yang harus dilakukan untuk menyelesaikan aktivitas ditampilkan di halaman kursus.';
$string['tour_activityinfo_course_student_title'] = 'Baru: Informasi aktivitas';
$string['tour_activityinfo_course_teacher_content'] = 'Setelah kursus baru \'Tampilkan kondisi penyelesaian\' dan \'Tampilkan tanggal aktivitas\' memungkinkan Anda memilih apakah kondisi penyelesaian aktivitas (jika disetel) dan/atau tanggal ditampilkan untuk siswa di halaman kursus.';
$string['tour_activityinfo_course_teacher_title'] = 'Baru: Informasi aktivitas';
$string['tour_final_step_content'] = 'Ini adalah akhir dari tur pengguna Anda. Ini tidak akan ditampilkan lagi kecuali Anda menyetel ulang menggunakan tautan di footer.';
$string['tour_final_step_title'] = 'Akhir dari tur';
$string['tour_gradebook_action_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_action_menu::tool_usertours@@</div> Urutkan kolom dan pilih mana yang akan ditampilkan. Dalam mode Edit, gunakan pintasan ini untuk mengakses tugas yang sering dilakukan terkait melihat dan mengedit item nilai.';
$string['tour_gradebook_action_title'] = 'Tautan cepat ke aksi';
$string['tour_gradebook_filter_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_initials::tool_usertours@@</div> Filter siswa berdasarkan inisial nama depan atau belakang mereka.';
$string['tour_gradebook_filter_title'] = 'Saring berdasarkan nama';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>Gunakan kotak telusur untuk menemukan siswa tertentu dengan cepat.';
$string['tour_gradebook_search_title'] = 'Temukan siswa dengan mudah';
$string['tour_gradebook_tour_description'] = 'Fitur penelusuran dan navigasi di laporan penilai Buku Nilai';
$string['tour_gradebook_tour_name'] = 'Laporan Penilai Buku Nilai';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Poskan berita penting di sini.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Sesuatu untuk memberitahu semua orang?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Tambahkan konten baru atau edit konten yang ada.';
$string['tour_navigation_course_edit_teacher_title'] = 'Aktifkan mode edit';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Jelajahi aktivitas dan lacak kemajuan Anda.';
$string['tour_navigation_course_index_student_title'] = 'Temukan jalanmu';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Seret dan lepas aktivitas untuk mengurutkan ulang konten kursus.';
$string['tour_navigation_course_index_teacher_title'] = 'indeks kursus';
$string['tour_navigation_course_student_tour_des'] = 'Tempat menelusuri aktivitas dalam kursus';
$string['tour_navigation_course_student_tour_name'] = 'Indeks Kursus';
$string['tour_navigation_course_teacher_tour_des'] = 'Mode edit, seret dan lepas aktivitas, dan posting pengumuman dalam kursus';
$string['tour_navigation_course_teacher_tour_name'] = 'Mengedit kursus';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Panel samping ini dapat berisi lebih banyak fitur.';
$string['tour_navigation_dashboard_title'] = 'Perluas untuk jelajahi';
$string['tour_navigation_dashboard_tour_des'] = 'Di mana blok dapat ditemukan';
$string['tour_navigation_dashboard_tour_name'] = 'Laci blok';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Tambah, salin, hapus, dan sembunyikan kursus dari menu ini.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Saya mengerti';
$string['tour_navigation_mycourses_title'] = 'Kursus dan kategori';
$string['tour_navigation_mycourses_tour_des'] = 'Opsi manajemen kursus di halaman Kursus saya';
$string['tour_navigation_mycourses_tour_name'] = 'Manajemen kursus';
$string['tour_resetforall'] = 'Status tur telah disetel ulang. Ini akan ditampilkan ke semua pengguna lagi.';
$string['tourconfig'] = 'Berkas konfigurasi tur untuk diimpor';
$string['tourisenabled'] = 'Tur diaktifkan';
$string['tourlist_explanation'] = 'Anda dapat membuat tur sebanyak yang Anda suka dan mengaktifkannya untuk berbagai bagian Moodle. Hanya satu tur yang dapat dibuat per halaman.';
$string['tours'] = 'Tur';
$string['usertours'] = 'Tur pengguna';
$string['usertours:managetours'] = 'Buat, edit, dan hapus tur pengguna';
$string['viewtour_edit'] = 'Anda dapat <a href="{$a->editlink}">edit tur bawaan </a> and <a href="{$a->resetlink}">memaksa tur agar terlihat</a> oleh semua pengguna lagi.';
$string['viewtour_info'] = 'Ini adalah tur \'{$a->tourname}\'. Ini berlaku untuk jalur \'{$a->path}\'.';
