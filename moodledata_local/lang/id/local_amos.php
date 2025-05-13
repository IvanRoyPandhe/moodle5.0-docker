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
 * Strings for component 'local_amos', language 'id', version '5.0'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS adalah pusat penyimpanan string Moodle dan riwayatnya. Ini melacak penambahan string bahasa Inggris ke dalam kode Moodle, mengumpulkan terjemahan, menangani tugas-tugas terjemahan umum dan menghasilkan paket bahasa untuk digunakan di server Moodle.</p> <p>Lihat <a href="https://docs.moodle.org/dev/AMOS_manual">dokumentasi AMOS</a> untuk informasi lebih lanjut.</p>';
$string['amos'] = 'Perangkat terjemahan AMOS';
$string['amos:changecontriblang'] = 'Ubah bahasa string yang dikontribusikan';
$string['amos:commit'] = 'Commit string yang di-stage ke dalam repositori utama';
$string['amos:editlangconfig'] = 'Edit string konfigurasi paket bahasa';
$string['amos:execute'] = 'Jalankan AMOScript yang diberikan';
$string['amos:importfile'] = 'Impor terjemahan dari file yang diunggah dan tampilkan';
$string['amos:importstrings'] = 'Impor string (termasuk string bahasa Inggris) langsung ke repositori utama';
$string['amos:manage'] = 'Kelola portal AMOS';
$string['amos:stage'] = 'Gunakan alat terjemahan AMOS dan stage strings-nya';
$string['amos:stash'] = 'Simpan stage saat ini ke dalam simpanan persisten';
$string['amos:usegoogle'] = 'Gunakan layanan Google Terjemahan';
$string['applangindexfile'] = 'Lokasi file langindex Aplikasi Moodle';
$string['applangindexfile_desc'] = 'URL lengkap tempat unduh berkas. Ini akan dilakukan oleh tugas cron.';
$string['branchesall'] = 'Semua versi Moodle yang dikenal';
$string['branchesall_desc'] = 'Daftar kode versi Moodle yang dipisahkan koma yang didukung AMOS. Ini digunakan untuk mengisi daftar versi di filter penerjemah dan tempat lainnya.';
$string['branchsupported'] = 'Versi Moodle terlama yang didukung';
$string['branchsupported_desc'] = 'Kode versi Moodle tertua yang masih harus dilacak perubahannya dalam string bahasa Inggris dan paket bahasa penginstalnya belum dibuat. Gunakan <https://docs.moodle.org/dev/Releases#Version_support> untuk referensi.';
$string['cachedef_lists'] = 'Daftar bahasa dan komponen yang dikenal di AMOS';
$string['cachedef_stats'] = 'Data statistik dihasilkan oleh AMOS';
$string['commitbutton'] = 'Commit';
$string['commitkeepstaged'] = 'Jaga agar string tetap di-stage';
$string['commitmessage'] = 'Pesan commit';
$string['commitmessageempty'] = 'Silakan isi pesan commit';
$string['commitstage'] = 'Commit string yang di-stage';
$string['commitstage_help'] = 'Simpan secara permanen semua terjemahan bertahap di repositori AMOS. Tahap secara otomatis dipangkas dan diubah bentuknya sebelum di-commit. Hanya string yang dapat di-commit yang disimpan. Artinya hanya terjemahan di bawah yang disorot dengan warna hijau yang akan disimpan. Stage dihapus setelah commit.';
$string['committable'] = 'Anda memiliki izin untuk melakukan commit pada paket bahasa ini';
$string['committableall'] = 'semua bahasa';
$string['committablenone'] = 'tidak ada bahasa yang diperbolehkan - silakan hubungi manajer AMOS';
$string['componentsall'] = 'Semua';
$string['componentsapp'] = 'App Moodle';
$string['componentsnone'] = 'Tidak ada';
$string['componentsstandard'] = 'Standard';
$string['componentsworkplace'] = 'Moodle Workplace';
$string['confirmaction'] = 'Hal ini tidak dapat dibatalkan. Apa Anda yakin?';
$string['contribaccept'] = 'Setuju';
$string['contribactions'] = 'Aksi terjemahan yang dikontribusikan';
$string['contribactions_help'] = 'Bergantung pada hak Anda dan alur kerja kontribusi, Anda dapat menyediakan beberapa aksi berikut:

* Terapkan - salin terjemahan yang dikontribusikan ke tahap Anda, tidak mengubah catatan kontribusi
* Tetapkan kepada saya - tetapkan diri Anda sebagai penerima tugas kontribusi, yaitu orang yang bertanggung jawab atas peninjauan dan integrasi kontribusi
* Batalkan penetapan - tetapkan siapa pun sebagai penerima tugas kontribusi
* Mulai reviu - tetapkan kontribusi baru untuk diri Anda sendiri, atur statusnya menjadi \'Sedang direviu\' dan salin terjemahan yang dikirimkan ke tahap Anda
* Terima - tandai kontribusi sebagai diterima
* Tolak - tandai kontribusi sebagai ditolak, jelaskan alasannya di komentar.

Kontributor diberitahu melalui surel setiap kali status kontribusinya berubah.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Terapkan';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Tetapkan untuk saya';
$string['contribauthor'] = 'Pengarang';
$string['contribclosedno'] = 'Sembunyikan kontribusi yang terselesaikan';
$string['contribclosedyes'] = 'Tampilkan kontribusi yang terselesaikan';
$string['contribcomponents'] = 'Komponen';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Tidak ada kontribusi masuk';
$string['contribincomingsome'] = 'Kontribusi masuk ({$a})';
$string['contriblanguage'] = 'Bahasa';
$string['contriblanguagebutton'] = 'Konversi';
$string['contriblanguagechange'] = 'Perbaiki kontribusi bahasa yang salah';
$string['contriblanguagechange_help'] = 'Jika kontribusi telah dikirimkan ke paket bahasa yang salah secara tidak sengaja, pilih bahasa yang benar pada menu tarik-turun di bawah, lalu klik tombol Konversi.';
$string['contriblanguagereport'] = 'Laporkan kontribusi bahasa yang salah';
$string['contriblanguagereport_help'] = 'Jika kontribusi ini dikirimkan ke paket bahasa yang salah karena kesalahan, silakan salin dan tempel URL kontribusi ke surel ke `translation@moodle.org`. Kontribusi tersebut kemudian akan dipindahkan ke bahasa yang benar.';
$string['contriblanguagewrong'] = 'Salah bahasa?';
$string['contribnotif'] = '[AMOS] Pemberitahuan kontribusi (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} telah menerima kontribusi terjemahan Anda
#{$a->id} {$a->subject}

 --------------------------------------------------- -------------------
Halaman kontribusi: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} telah mengomentari terjemahan yang dikontribusikan
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Halaman kontribusi: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} telah mengonversi terjemahan kontribusi Anda #{$a->id} {$a->subject}

Terima kasih atas kontribusi Anda. Namun sepertinya hal itu disampaikan kepada pihak yang salah paket bahasa secara tidak sengaja. Dengan demikian kontribusi Anda telah ditolak dari paket bahasa yang salah dan dipindahkan ke paket bahasa yang benar untuk ditinjau oleh pengelola paket bahasa. Tidak diperlukan tindakan apa pun dari Anda.

Di masa mendatang, harap periksa kembali apakah Anda telah memilih bahasa Anda sendiri sebelumnya Anda mulai menerjemahkan string.

---------------------------------------------------------------------
Halaman kontribusi asli: {$a->contriborigurl}
Halaman kontribusi baru: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Ada kontribusi terjemahan yang tertunda dan memerlukan tindakan Anda
#{$a->id} {$a->subject}

Sebagai pengelola paket bahasa, Anda seharusnya meninjau dan pada akhirnya melakukan semua kontribusi yang dikirimkan. Setelah selesai, harap tandai sebagai diterima atau ditolak.

Lihat {$a->docsurl} untuk keterangan lebih lanjut.
---------------------------------------------------------------------
Halaman kontribusi: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} telah menolak kontribusi terjemahan Anda
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Halaman kontribusi: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} telah mengirimkan kontribusi terjemahan baru #{$a->id} {$a->subject} ------------------------------------------------------------------------

{$a->message}

* Bahasa: {$a->language}
* Komponen: {$a->components}
* String: {$a->strings}

-----------------------------------------------------------------------
Halaman kontribusi: {$a->contriburl}';
$string['contribreject'] = 'Tolak';
$string['contribresign'] = 'Batalkan penetapan';
$string['contribstaged'] = 'Kontribusi bertahap <a href="contrib.php?id={$a->id}">#{$a->id}</a> oleh {$a->author}';
$string['contribstagedinfo'] = 'Kontribusi bertahap';
$string['contribstagedinfo_help'] = 'Stage tersebut berisi string yang disumbangkan oleh salah satu anggota komunitas. Pengelola paket bahasa seharusnya meninjaunya dan kemudian mengatur statusnya menjadi Diterima (jika ada yang berkomitmen) atau Ditolak (jika tidak dapat disertakan dalam paket bahasa resmi karena alasan tertentu).';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'Mulai reviu';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'Baru';
$string['contribstatus10'] = 'sedang direviu';
$string['contribstatus20'] = 'Ditolak';
$string['contribstatus30'] = 'Disetujui';
$string['contribstatus_help'] = 'Alur kerja terjemahan yang dikontribusikan terdiri dari status berikut:

* Baru - kontribusi telah dikirimkan tetapi belum ditinjau
* Sedang ditinjau - kontribusi telah ditugaskan ke pengelola paket bahasa dan disiapkan untuk ditinjau
* Ditolak - pengelola paket bahasa telah menolak kontribusi dan mungkin meninggalkan penjelasan di komentar
* Diterima - kontribusi telah diterima oleh pengelola paket bahasa';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'String';
$string['contribstringseq'] = '{$a->orig} baru';
$string['contribstringsnone'] = '{$a->orig} (semuanya sudah diterjemahkan dalam paket bahasa)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} diantaranya sudah memiliki terjemahan yang lebih baru)';
$string['contribsubject'] = 'Subjek';
$string['contribsubmittednone'] = 'Belum ada kontribusi yang dikirimkan';
$string['contribsubmittedsome'] = 'Kontribusi Anda ({$a})';
$string['contribtimemodified'] = 'Dimodifikasi';
$string['contribute'] = 'Kontribusi';
$string['contributenow'] = 'Berkontribusi sekarang!';
$string['contributestats'] = 'Total <strong>{$a->count}</strong> string yang diterjemahkan oleh anggota komunitas telah dikirimkan ke AMOS sejauh ini.';
$string['contributethanks'] = 'Terima kasih banyak kepada {$a->listcontributors} atas kontribusi terbaru mereka!';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} dan {$a->contributor4}';
$string['contributions'] = 'Kontribusi';
$string['creditsaddcontributor'] = 'Tambahkan kontributor';
$string['creditsaddmaintainer'] = 'Tambahkan pengelola';
$string['creditscontact'] = 'Kirim pesan';
$string['creditscontributors'] = 'Kontributor lainnya';
$string['creditsdelcontributor'] = 'Hapus kontributor';
$string['creditsdelmaintainer'] = 'Hapus pengelola';
$string['creditsmaintainedby'] = 'Dikelola oleh';
$string['creditsnomaintainer'] = 'Tidak ada pengelola saat ini. <a href="{$a->url}">Jadilah yang pertama!</a>';
$string['creditsthanks'] = 'Di halaman ini, kami ingin mengucapkan terima kasih kepada semua orang yang telah berkontribusi pada terjemahan Moodle. Pekerjaan mereka telah memungkinkan penyebaran Moodle ke seluruh dunia.';
$string['creditstitlelong'] = 'Pengelola dan kontributor paket bahasa';
$string['creditstitleshort'] = 'Kredit';
$string['diff'] = 'Bandingkan';
$string['diffstringmode'] = 'Beralih mode berbeda';
$string['err_exception'] = 'Galat: {$a}';
$string['err_invalidlangcode'] = 'Kode bahasa tidak valid';
$string['err_parser'] = 'Galat penguraian: {$a}';
$string['filtercmp'] = 'Komponen';
$string['filtercmp_desc'] = 'Tampilkan string dari komponen ini';
$string['filtercmpnothingselected'] = 'Silakan pilih beberapa komponen';
$string['filterlng'] = 'Bahasa';
$string['filterlng_desc'] = 'Tampilkan terjemahan dalam bahasa ini';
$string['filterlngnothingselected'] = 'Silakan pilih beberapa bahasa';
$string['filtermis'] = 'Aneka ragam';
$string['filtermis_desc'] = 'Ketentuan tambahan pada string yang akan ditampilkan';
$string['filtermisfapp'] = 'Hanya string yang digunakan di Aplikasi Moodle';
$string['filtermisfapp_help'] = 'String ini digunakan dalam Aplikasi Moodle sebagai {$a}';
$string['filtermisfhas'] = 'hanya string terjemahan';
$string['filtermisfhlp'] = 'hanya string bantuan';
$string['filtermisfmis'] = 'string yang hilang dan lawas saja';
$string['filtermisfout'] = 'hanya string yang lawas';
$string['filtermisfstg'] = 'string di-stage saja';
$string['filtermisfworkplace'] = 'hanya string yang digunakan di Moodle Workplace';
$string['filtermisfworkplace_help'] = 'String ini digunakan di Moodle Workplace sebagai {$a}';
$string['filtersid'] = 'Pengidentifikasi string';
$string['filtersid_desc'] = 'Kunci dalam array string';
$string['filtersidpartial'] = 'cocok sebagian';
$string['filtertxt'] = 'Substring';
$string['filtertxt_desc'] = 'String harus berisi teks tertentu';
$string['filtertxtcasesensitive'] = 'peka huruf besar-kecil';
$string['filtertxteng'] = 'dalam string bahasa Inggris';
$string['filtertxtregex'] = 'regex';
$string['filtertxttra'] = 'dalam string terjemahan';
$string['filterver'] = 'Versi';
$string['filterver_desc'] = 'Tampilkan string untuk versi Moodle ini';
$string['filtervernothingselected'] = 'Silakan pilih beberapa versi';
$string['foundmissing'] = 'kosong {$a}';
$string['foundmissingonthispage'] = 'di halaman ini {$a}';
$string['foundtotal'] = 'Ditemukan {$a}';
$string['googletranslate'] = 'tanya google';
$string['importfile'] = 'Impor string yang diterjemahkan dari berkas';
$string['importfile_help'] = 'Jika string Anda diterjemahkan secara luring, Anda dapat menampilkannya melalui formulir ini.
* Berkas harus berupa berkas definisi string Moodle PHP yang valid. Lihat direktori `/lang/en/` instalasi Moodle Anda untuk contohnya.
* Nama berkas harus sesuai dengan definisi string bahasa Inggris untuk komponen tertentu (seperti `moodle.php`, `assignment.php` atau `enrol_manual.php`).

Semua string yang ditemukan dalam berkas akan ditampilkan untuk versi dan bahasa yang dipilih.

Beberapa berkas PHP dapat diproses sekaligus jika Anda memasukkannya ke dalam berkas ZIP.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Bahasa';
$string['languagepacks'] = 'Paket bahasa tambahan dapat diinstal di situs Moodle Anda melalui <em>Administrasi > Administrasi situs > Bahasa > Paket bahasa</em>, atau secara manual. Untuk detail selengkapnya, lihat <a href="https://docs.moodle.org/en/Language_packs"> Dokumentasi paket bahasa</a>.';
$string['languages'] = 'Bahasa';
$string['languagesall'] = 'Semua';
$string['languagesnone'] = 'Tidak ada';
$string['lastavailable'] = 'Versi terbaru yang tersedia';
$string['lessfilteringoptions'] = 'Lebih sedikit pilihan';
$string['log'] = 'Log';
$string['logfilterbranch'] = 'Versi';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Pesan commit berisi';
$string['logfiltercommits'] = 'Filter commit';
$string['logfiltercommittedafter'] = 'Di-commit setelah';
$string['logfiltercommittedbefore'] = 'Di-commit sebelum';
$string['logfiltercomponent'] = 'Komponen';
$string['logfilterlang'] = 'Bahasa';
$string['logfiltershow'] = 'Tampilkan commit dan string yang difilter';
$string['logfiltersource'] = 'Sumber';
$string['logfiltersourceamos'] = 'amos (penerjemah berbasis web)';
$string['logfiltersourceautomerge'] = 'automerge (terjemahan disalin dari cabang lain)';
$string['logfiltersourcebot'] = 'bot (operasi massal yang dijalankan oleh skrip)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript dalam pesan commit)';
$string['logfiltersourcefixdrift'] = 'fixdrift (memperbaiki penyimpangan AMOS-git)';
$string['logfiltersourcegit'] = 'git (git mirror dari kode sumber Moodle dan paket 1.x)';
$string['logfiltersourceimport'] = 'import (string yang diimpor untuk pengaya yang dikontribusikan)';
$string['logfiltersourcerevclean'] = 'revclean (proses pembersihan terbalik)';
$string['logfilterstringid'] = 'Pengidentifikasi string';
$string['logfilterstrings'] = 'Penyaring string';
$string['logfilterusergrpor'] = 'atau';
$string['maintainers'] = 'Pengelola';
$string['manageamos'] = 'Kelola AMOS';
$string['markuptodate'] = 'Tandai terjemahan sebagai terkini';
$string['markuptodatelabel'] = 'tandai sebagai mutakhir';
$string['messageprovider:checker'] = 'Hasil pemeriksa paket bahasa';
$string['messageprovider:contribution'] = 'Terjemahan yang disumbangkan';
$string['morefilteringoptions'] = 'Lebih banyak pilihan';
$string['newlanguage'] = 'Bahasa baru';
$string['nodiffs'] = 'Tidak ditemukan perbedaan';
$string['nofiletoimport'] = 'Harap berikan berkas untuk diimpor.';
$string['nologsfound'] = 'String tidak ditemukan, silakan modifikasi filter';
$string['nostringsfound'] = 'String tidak ditemukan';
$string['nostringtoimport'] = 'Tidak ada string valid yang ditemukan dalam berkas. Pastikan berkas memiliki nama berkas yang benar dan diformat dengan benar.';
$string['nothingtostage'] = 'Operasi tersebut tidak mengembalikan string apa pun yang dapat di-stage.';
$string['novalidzip'] = 'Tidak dapat mengekstrak berkas ZIP.';
$string['numofcommitsabovelimit'] = 'Ditemukan {$a->found} commit yang cocok dengan filter commit, menggunakan {$a->limit} terbaru';
$string['numofcommitsunderlimit'] = 'Ditemukan {$a->found} komit yang cocok dengan filter commit';
$string['numofmatchingstrings'] = 'Di dalamnya, modifikasi {$a->strings} dalam komit {$a->commits} cocok dengan filter string';
$string['outdatednotcommitted'] = 'String usang';
$string['outdatednotcommitted_help'] = 'AMOS mendeteksi bahwa string tersebut mungkin sudah usang karena versi bahasa Inggris telah dimodifikasi setelah diterjemahkan. Silakan tinjau terjemahannya.';
$string['outdatednotcommittedwarning'] = 'Kedaluwarsa';
$string['ownstashactions'] = 'Aksi Stash';
$string['ownstashactions_help'] = '* Terapkan - salin string yang diterjemahkan dari simpanan ke dalam panggung dan jaga agar simpanan tidak dimodifikasi. Jika string sudah ada di stage, string tersebut akan ditimpa dengan string yang disimpan.
* Pop - pindahkan string yang diterjemahkan dari simpanan ke stage dan drop stash (yaitu Terapkan dan Drop).
* Drop - menghapus string yang tersimpan.
* Kirim - membuka formulir untuk mengirimkan simpanan ke pengelola bahasa resmi sehingga mereka dapat memasukkan kontribusi Anda ke dalam paket bahasa resmi.';
$string['ownstashes'] = 'Simpanan Anda';
$string['ownstashes_help'] = 'Ini adalah daftar semua simpanan Anda.';
$string['ownstashesnone'] = 'Tidak ada simpanan sendiri yang ditemukan';
$string['permalink'] = 'Permalink';
$string['placeholder'] = 'Placeholder';
$string['placeholder_help'] = 'Placeholder adalah pernyataan khusus seperti `{$a}` atau `{$a->something}` di dalam string. Mereka diganti dengan nilai ketika string benar-benar dicetak.

Penting untuk menyalinnya persis seperti pada string aslinya. Jangan terjemahkan atau ubah orientasi kiri ke kanannya.';
$string['placeholderwarning'] = 'placeholder';
$string['pluginclasscore'] = 'Subsistem inti';
$string['pluginclassnonstandard'] = 'Pengaya non-standar';
$string['pluginclassstandard'] = 'Pengaya standar';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Lokasi tipe pengaya';
$string['plugintypelocations_desc'] = 'Memungkinkan untuk menentukan lokasi tipe pengaya standar tambahan, seperti tipe sub-pengaya yang disediakan oleh pengaya standar, atau tipe lama.';
$string['presetcommitmessage'] = 'Terjemahan yang disumbangkan #{$a->id} oleh {$a->author}';
$string['presetcommitmessage2'] = 'Menggabungkan string yang hilang dari cabang {$a->source} ke {$a->target}';
$string['presetcommitmessage3'] = 'Memperbaiki perbedaan antara {$a->versiona} dan {$a->versionb}';
$string['privacy:commitnumber'] = 'Commit {$a}';
$string['privacy:contribnumber'] = 'Kontribusi {$a}';
$string['privacy:filterusage'] = 'Penggunaan filter';
$string['privacy:metadata:db:amoscommits'] = '';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Pesan commit yang disediakan oleh pengguna.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Stempel waktu commit.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Identifikasi pengguna seperti yang disediakan di lokasi sumber commit, mis. di Git.';
$string['privacy:metadata:db:amoscontributions'] = 'Terjemahan yang disumbangkan dari anggota komunitas.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Kode bahasa yang digunakan untuk kontribusi ini.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Pesan awal yang menjelaskan pengiriman.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Pengidentifikasi internal dari simpanan terlampir.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Status alur kerja kontribusi".';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Subyek penyerahan kontribusi.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Stempel waktu saat rekaman kontribusi dibuat.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Stempel waktu saat data kontribusi baru saja diubah.';
$string['privacy:metadata:db:amosfilterusage'] = 'Log penggunaan filter Penerjemah AMOS.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Bahasa sesi saat ini.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Apakah pengguna memiliki izin untuk commit pada repositori AMOS?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Jumlah komponen terpilih';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Jumlah bahasa terpilih';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Jumlah versi terpilih';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Apakah hanya terjemahan yang sudah ada saja yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Haruskah hanya string yang masuk daftar abu-abu yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Haruskah hanya string bantuan yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Haruskah hanya string yang hilang dan ketinggalan jaman yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Haruskah hanya string usang yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Haruskah hanya string yang di stage yang ditampilkan?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Haruskah string yang masuk daftar abu-abu dihapus dari hasil?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Apakah kecocokan sebagian untuk stringid diminta?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Haruskah substring dianggap peka huruf besar-kecil?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Haruskah substring dianggap sebagai regex?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Stempel waktu saat formulir filter dikirimkan';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Kode negara pengguna seperti yang dipilih di profil mereka';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Bahasa pilihan pengguna dari profil mereka';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'Apakah pengguna menggunakan bahasa yang telah dipilih sebelumnya?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Apakah pengguna menggunakan versi formulir yang telah dipilih sebelumnya?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Apakah stringid-nya ditentukan?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Apakah substring yang akan dicari ditentukan?';
$string['privacy:metadata:db:amospreferences'] = 'Preferensi AMOS untuk pengguna tertentu.';
$string['privacy:metadata:db:amospreferences:name'] = 'Nama preferensi';
$string['privacy:metadata:db:amospreferences:value'] = 'Nilai preferensi';
$string['privacy:metadata:db:amosstashes'] = 'Menyimpan informasi tentang stashes di stashpool';
$string['privacy:metadata:db:amosstashes:components'] = 'Daftar komponen yang disimpan dalam stashed stage';
$string['privacy:metadata:db:amosstashes:id'] = 'Pengidentifikasi internal stash';
$string['privacy:metadata:db:amosstashes:languages'] = 'Daftar bahasa yang terdapat dalam stashed stage';
$string['privacy:metadata:db:amosstashes:message'] = 'Pesan lengkap yang menjelaskan stash, digunakan sebagai pesan commit bawaan ketika stash dikirimkan sebagai kontribusi terjemahan.';
$string['privacy:metadata:db:amosstashes:name'] = 'Nama atau judul stash';
$string['privacy:metadata:db:amosstashes:strings'] = 'Judul stash';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Stempel waktu kapan stash dibuat';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Stempel waktu saat rekaman baru saja diubah';
$string['privacy:metadata:db:amostranslators'] = 'Menjelaskan hubungan antara paket bahasa dan pengguna. Ini bisa berupa pengelola (memiliki hak untuk berkomitmen pada paket bahasa) atau kontributor eksplisit (ditampilkan di halaman kredit bahkan tanpa kontribusi yang dikirimkan).';
$string['privacy:metadata:db:amostranslators:lang'] = 'Kode bahasa yang boleh diterjemahkan oleh penerjemah, atau tanda bintang untuk semua bahasa.';
$string['privacy:metadata:db:amostranslators:status'] = 'Menentukan apakah pengguna merupakan pengelola (0) atau kontributor eksplisit (1) paket bahasa.';
$string['privacy:metadata:external:languagepacks'] = 'Kontribusi terjemahan diekspor ke dalam berkas ZIP yang didistribusikan secara global dan diinstal ke situs Moodle.';
$string['privacy:metadata:external:languagepacks:email'] = 'Alamat surel kontributor dapat disertakan dalam berkas paket bahasa.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Nama depan kontributor dapat disertakan dalam berkas paket bahasa.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Nama belakang kontributor dapat disertakan dalam berkas paket bahasa.';
$string['privacy:metadata:subsystem:comment'] = 'Jelaskan bagaimana subsistem komentar digunakan oleh pengaya.';
$string['privacy:stashnumber'] = 'Stash {$a}';
$string['privileges'] = 'Hak akses Anda';
$string['privilegesnone'] = 'Anda memiliki akses hanya baca ke informasi publik.';
$string['processing'] = 'Memproses...';
$string['quicklinks'] = 'Tautan cepat';
$string['quicklinks_amos'] = 'Penerjemah AMOS';
$string['quicklinks_forum'] = 'Forum terjemahan';
$string['quicklinks_manual'] = 'Panduan pengguna';
$string['quicklinks_newcomers'] = 'Bantuan untuk pengguna baru';
$string['requestactions'] = 'Aksi';
$string['requestactions_help'] = '* Terapkan - salin string yang diterjemahkan dari permintaan tarik ke panggung Anda. Jika string sudah ada di stage, string tersebut akan ditimpa dengan string yang disimpan.
* Sembunyikan - memblokir permintaan penarikan sehingga tidak ditampilkan lagi kepada Anda.';
$string['savefilter'] = 'Tampilkan string';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript adalah sekumpulan instruksi untuk dieksekusi melalui repositori string.';
$string['scriptexecute'] = 'Jalankan dan tampilkan hasilnya';
$string['sourceversion'] = 'Versi sumber';
$string['stage'] = 'Stage';
$string['stageactions_help'] = '* Edit string bertahap - mengubah setelan filter penerjemah sehingga hanya terjemahan bertahap yang ditampilkan.
* Pangkas string yang tidak dapat dikomit - hapus semua terjemahan yang tidak boleh Anda komit. Tahap dipangkas secara otomatis sebelum dikomit.
* Rebase - menghapus semua terjemahan yang tidak mengubah terjemahan saat ini atau lebih lama dari terjemahan terbaru di repositori. Tahap diubah secara otomatis sebelum dikomit.
* Unstage all - menyelesaikan stage, semua terjemahan bertahap hilang.';
$string['stagedownload'] = 'Unduh';
$string['stageedit'] = 'Edit string yang di-stage';
$string['stageprune'] = 'Pangkas yang tidak bisa di-commit';
$string['stagerebase'] = 'Rebase';
$string['stagestringsnocommit'] = 'Ada string yang di-stage {$a->staged}';
$string['stagestringsnone'] = 'Tidak ada string yang di-stage';
$string['stagestringssome'] = 'Terdapat {$a->staged} string yang di-stage, {$a->committable} di antaranya dapat di-commit';
$string['stagesubmit'] = 'Kirim string ke pengelola paket bahasa';
$string['stagetoolopen'] = 'Menuju stage';
$string['stagetranslation'] = 'Terjemahan';
$string['stagetranslation_help'] = 'Menampilkan terjemahan bertahap yang akan dilakukan. Warna latar belakang sel berarti:

* Hijau - Anda telah menambahkan terjemahan yang hilang dan Anda diizinkan untuk mengkomitnya.
* Kuning - Anda telah memodifikasi string dan Anda diizinkan untuk melakukan perubahan.
* Biru - Anda telah mengubah terjemahan atau menambahkan terjemahan yang hilang tetapi Anda tidak diperbolehkan memasukkannya ke dalam bahasa yang ditentukan.
* Tanpa warna - terjemahan bertahap sama dengan terjemahan saat ini dan oleh karena itu tidak akan dilakukan.';
$string['stageunstageall'] = 'Unstage semua';
$string['standardcomponents'] = 'Daftar komponen standar';
$string['standardcomponents_desc'] = 'Daftar komponen standar Moodle. Nomor opsional menunjukkan kode versi sejak komponen tersebut standar. Jika angkanya negatif, ini menunjukkan versi terakhir ketika komponen tersebut hadir sebagai versi standar. Kedua nomor tersebut dapat hadir. Contoh:

* `mod_workshop` - tanpa versi, komponen ini dianggap sebagai komponen standar di semua versi
* `report_infectedfiles 310` - menunjukkan komponen yang harus dianggap sebagai standar dimulai dengan Moodle 3.10
* `theme_clean 25 -36` - komponen standar mulai dari Moodle 2.5 hingga 3.6 inklusif';
$string['stashactions'] = 'Simpan pekerjaan yang sedang berlangsung';
$string['stashactions_help'] = 'Stash adalah cuplikan dari stage saat ini. Stashes dapat diserahkan ke pengelola paket bahasa resmi untuk dimasukkan ke dalam paket bahasa.';
$string['stashapply'] = 'Terapkan';
$string['stashautosave'] = 'Stash cadangan disimpan secara otomatis';
$string['stashautosave_help'] = 'Stash ini berisi cuplikan terbaru dari stage Anda. Anda dapat menggunakannya sebagai cadangan jika semua string unstage secara tidak sengaja, misalnya. Gunakan tindakan \'Terapkan\' untuk menyalin semua string yang disimpan kembali ke stage (akan menimpa string jika sudah distage).';
$string['stashcomponents'] = '<span>Komponen:</span> {$a}';
$string['stashdownload'] = 'Unduh';
$string['stashdrop'] = 'Drop';
$string['stashdropconfirm'] = 'Apakah Anda benar-benar ingin menghapus stash tersimpan <em>\'{$a}\'</em> secara permanen?';
$string['stashes'] = 'Stashes';
$string['stashlanguages'] = '<span>Bahasa:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Dorong semua string yang di-stage ke dalam stash baru';
$string['stashstrings'] = '<span>Jumlah string:</span> {$a}';
$string['stashsubmit'] = 'Kirim ke pengelola';
$string['stashsubmitdetails'] = 'Mengirimkan detail';
$string['stashsubmitmessage'] = 'Pesan';
$string['stashsubmitsubject'] = 'Subjek';
$string['stashtitle'] = 'Judul stash';
$string['stashtitledefault'] = 'Pekerjaan sedang berlangsung - {$a->time}';
$string['stdvernotebetween'] = 'Standar dari {$a->from} hingga {$a->to}';
$string['stdvernotefrom'] = 'Standar dari {$a->from}';
$string['stdvernoteto'] = 'Standar hingga {$a->to}';
$string['stringhistory'] = 'riwayat';
$string['strings'] = 'String';
$string['stringversionnotlatest'] = 'versi yang lebih baru ada';
$string['submitting'] = 'Mengirimkan kontribusi';
$string['submitting_help'] = 'Ini akan mengirimkan string yang diterjemahkan ke pengelola bahasa resmi. Mereka akan dapat menerapkan pekerjaan Anda ke dalam tahap mereka, meninjaunya, dan akhirnya berkomitmen. Harap berikan pesan kepada mereka yang menjelaskan pekerjaan Anda dan mengapa Anda ingin kontribusi Anda disertakan.';
$string['targetversion'] = 'Versi target';
$string['timeline'] = 'Lini masa string';
$string['timelineheading'] = 'Lini masa string: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Penerjemah';
$string['translatortoolopen'] = 'Buka Penerjemah AMOS';
$string['translatortranslation'] = 'Terjemahan';
$string['translatortranslation_help'] = 'Klik sel untuk mengubahnya menjadi editor masukan. Sisipkan terjemahannya dan klik di luar sel untuk melakukan terjemahan. Warna latar belakang sel berarti:

* Hijau - string sudah diterjemahkan, Anda akhirnya dapat mengubah terjemahannya.
* Kuning - stringnya mungkin sudah ketinggalan zaman. Dokumen asli dalam bahasa Inggris mungkin dimodifikasi setelah string diterjemahkan.
* Merah - string belum diterjemahkan.
* Biru - Anda telah memodifikasi terjemahannya dan sekarang sudah siap.
* Abu-abu - AMOS tidak dapat digunakan untuk menerjemahkan string ini. Misalnya string untuk Moodle 1.9 harus diedit melalui akses CVS lama saja.

Pengelola paket bahasa dapat melihat simbol merah kecil di sudut sel yang boleh mereka commit.';
$string['typecontrib'] = 'Pengaya tambahan';
$string['typecontribbadge'] = 'Tambahan';
$string['typecore'] = 'Subsistem inti';
$string['typecorebadge'] = 'Inti';
$string['typestandard'] = 'Pengaya standar';
$string['typestandardbadge'] = 'Standar';
$string['unableenfixaddon'] = 'Perbaikan bahasa Inggris hanya diperbolehkan untuk pengaya standar';
$string['unableenfixcountries'] = 'Nama negara disalin dari ISO 3166-1';
$string['unablelangconfig'] = 'Tidak ada izin untuk mengedit konfigurasi paket bahasa';
$string['unableunmaintained'] = 'Paket bahasa \'{$a}\' tidak memiliki pengelola saat ini, sehingga kontribusi terjemahan tidak dapat diterima. Harap pertimbangkan untuk menjadi sukarelawan menjadi pengelola paket bahasa \'{$a}\'.';
$string['unstage'] = 'unstage';
$string['unstageconfirm'] = 'Konfirmasikan unstaging';
$string['unstageconfirmlong'] = '<p>Anda akan membatalkan penerjemahan string <code>{$a->stringid</code>, komponen <code>{$a->component</code>, paket bahasa <code>{$ a->bahasa</kode>.</p><p>Apakah Anda yakin?</p>';
$string['unstaging'] = 'Unstaging';
$string['untranslate'] = 'batal terjemahan';
$string['untranslateconfirm'] = '<p>Anda akan menghapus terjemahan string <code>{$a->stringid</code> yang ada, komponen <code>{$a->component</code>, dari <code>{$ a->since</code> dan versi yang lebih tinggi dari paket bahasa <code>{$a->language</code>.</p><p>Apakah Anda yakin?</p>';
$string['untranslatetitle'] = 'Menghapus terjemahan dari paket bahasa';
$string['untranslating'] = 'Batal terjemahkan';
$string['userdefaultreset'] = 'Reset ke bawaan saya';
$string['userdefaultsave'] = 'Simpan sebagai bawaan saya';
$string['version'] = 'Versi';
