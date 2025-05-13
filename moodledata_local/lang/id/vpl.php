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
 * Strings for component 'vpl', language 'id', version '5.0'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Kompilasi atau persiapan eksekusi telah gagal';
$string['about'] = 'Tentang';
$string['acceptcertificates'] = 'Terima sertifikat yang ditandatangani sendiri';
$string['acceptcertificates_description'] = 'Jika server eksekusi tidak menggunakan sertifikat yang ditandatangani sendiri, hapus centang opsi ini';
$string['acceptcertificatesnote'] = '<p>Anda menggunakan koneksi terenkripsi.<p/>
<p>Untuk menggunakan koneksi terenkripsi dengan server eksekusi, Anda harus menerima sertifikatnya.</p>
<p>Jika Anda mengalami masalah dengan proses ini, Anda dapat mencoba menggunakan koneksi http (tidak terenkripsi) atau peramban lain.</p>
<p>Silakan klik tautan berikut (server #) dan terima sertifikat yang ditawarkan.</p>';
$string['addfile'] = 'Tambahkan berkas';
$string['addoverride'] = 'Tambahkan penyampingan';
$string['advanced'] = 'Canggih';
$string['allfiles'] = 'Semua berkas';
$string['allsubmissions'] = 'Semua kiriman';
$string['always_use_ws'] = 'Selalu gunakan protokol websocket (ws) yang tidak terenkripsi';
$string['always_use_wss'] = 'Selalu gunakan protokol websocket terenkripsi (wss)';
$string['anyfile'] = 'Berkas apa pun';
$string['attemptnumber'] = 'Nomor percobaan {$a}';
$string['autodetect'] = 'Deteksi otomatis';
$string['automaticevaluation'] = 'Evaluasi otomatis';
$string['automaticgrading'] = 'Penilaian otomatis';
$string['averageperiods'] = 'Periode rata-rata {$a}';
$string['averagetime'] = 'Waktu rata-rata {$a}';
$string['basedon'] = 'Berdasarkan';
$string['basedon_chain_broken'] = 'Kesalahan: Rangkaian aktivitas berbasis-dasar terputus. Harap tinjau kembali aktivitas berbasis-dasar.';
$string['basedon_deleted'] = 'Kesalahan: Aktivitas berbasis tidak ditemukan (telah dihapus?). Harap tetapkan aktivitas berbasis.';
$string['basedon_missed'] = 'Aktivitas berbasis tidak ditemukan saat memulihkan/mengimpor. Harap sertakan "{$a}"';
$string['basic'] = 'Dasar';
$string['binaryfile'] = 'Berkas binari';
$string['breakpoint'] = 'Titik putus';
$string['browserupdate'] = 'Perbarui peramban Anda ke versi terbaru<br />atau gunakan yang lain yang mendukung Websocket.';
$string['calculate'] = 'Hitung';
$string['calendardue'] = 'Penyerahan VPL sudah jatuh tempo';
$string['calendarexpectedon'] = 'Pengiriman VPL diharapkan';
$string['changesNotSaved'] = 'Perubahan belum disimpan';
$string['check_jail_servers'] = 'Periksa server eksekusi';
$string['check_jail_servers_help'] = '<p>Halaman ini memeriksa dan menunjukkan status server eksekusi yang digunakan untuk aktivitas ini.</p>';
$string['clipboard'] = 'Papan klip';
$string['closed'] = 'Tertutup';
$string['comments'] = 'Komentar';
$string['compilation'] = 'Kompilasi';
$string['confirmoverridedeletion'] = 'Yakin ingin menghapus kumpulan penyampingan ini?';
$string['connected'] = 'terhubung';
$string['connecting'] = 'menghubungkan';
$string['connection_closed'] = 'koneksi ditutup';
$string['connection_fail'] = 'koneksi gagal';
$string['console'] = 'Konsol';
$string['control'] = 'Kontrol';
$string['copy'] = 'Salin';
$string['create_new_file'] = 'Buat berkas baru';
$string['crontask'] = 'Pemrosesan latar belakang VPL';
$string['crontask_check_vpljs'] = 'Laporkan Server Penjara VPL';
$string['currentstatus'] = 'Status saat ini';
$string['cut'] = 'Potong';
$string['datesubmitted'] = 'Tanggal pengiriman';
$string['debug'] = 'Awakutu';
$string['debugging'] = 'Pengawakutuan';
$string['debugscript'] = 'Skrip awakutu';
$string['debugscript_help'] = 'Pilih skrip awakutu yang akan digunakan dalam aktivitas ini';
$string['defaultexefilesize'] = 'Ukuran berkas eksekusi bawaan maksimum';
$string['defaultexememory'] = 'Memori bawaan maksimum yang digunakan';
$string['defaultexeprocesses'] = 'Jumlah proses bawaan maksimum';
$string['defaultexetime'] = 'Waktu eksekusi bawaan maksimum';
$string['defaultfilesize'] = 'Ukuran berkas unggahan maksimum bawaan';
$string['defaultresourcelimits'] = 'Batas sumber daya eksekusi bawaan';
$string['delete'] = 'Hapus';
$string['delete_file_fq'] = 'hapus berkas \'{\\$a}\'?';
$string['delete_file_q'] = 'Hapus berkas?';
$string['deleteallsubmissions'] = 'Hapus semua kiriman';
$string['depends_on_https'] = 'Gunakan ws atau wss tergantung apakah menggunakan http atau https';
$string['description'] = 'Deskripsi';
$string['diff'] = 'diff';
$string['directory_not_renamed'] = 'Direktori \'{$a}\' belum diganti nama';
$string['disabled'] = 'Di-non-aktifkan';
$string['discard_submission_period'] = 'Buang periode pengiriman';
$string['discard_submission_period_description'] = 'Untuk setiap siswa dan tugas, sistem mencoba membuang kiriman. Sistem menyimpan kiriman terakhir dan setidaknya satu kiriman untuk setiap periode';
$string['download'] = 'Unduh';
$string['downloadallsubmissions'] = 'Unduh semua kiriman';
$string['downloadsubmissions'] = 'Unduh kiriman';
$string['duedate'] = 'Batas akhir';
$string['dueevent'] = '{$a} sudah harus diserahkan';
$string['dueeventaction'] = 'Kembangkan/Kirimkan';
$string['edit'] = 'Edit';
$string['editing'] = 'Mengedit';
$string['editortheme'] = 'Tema editor';
$string['error:inconsistency'] = 'Ditemukan ketidakkonsistenan \'{\\$a}\'';
$string['error:recordnotdeleted'] = 'Rekaman tidak dihapus \'{\\$a}\'';
$string['error:recordnotinserted'] = 'Rekaman tidak dimasukkan \'{\\$a}\'';
$string['error:recordnotupdated'] = 'Rekaman tidak diperbarui \'{\\$a}\'';
$string['error:recursivedefinition'] = 'Rekursif berdasarkan definisi VPL';
$string['error:uninstalling'] = 'Terjadi kesalahan saat mencopot pemasangan VPL. Semua data mungkin belum terhapus';
$string['error:zipnotfound'] = 'Berkas ZIP tidak ditemukan';
$string['evaluate'] = 'Evaluasi';
$string['evaluateonsubmission'] = 'Evaluasi hanya pada saat pengiriman';
$string['evaluating'] = 'Mengevaluasi';
$string['evaluation'] = 'Evaluasi';
$string['examples'] = 'Contoh';
$string['execution'] = 'Eksekusi';
$string['executionfiles'] = 'Berkas eksekusi';
$string['executionfiles_help'] = '<p>Di sini Anda mengatur berkas yang diperlukan untuk menyiapkan eksekusi, awakutu, atau penilaian kiriman. Ini termasuk berkas skrip, berkas uji program, dan berkas data.</p> <p>Jika Anda tidak mengatur berkas skrip untuk pengiriman yang dijalankan atau di-awakutu, sistem akan menyelesaikan bahasa yang Anda gunakan (berdasarkan ekstensi nama berkas) dan menggunakan skrip yang telah ditetapkan sebelumnya).';
$string['executionoptions'] = 'Opsi eksekusi';
$string['executionoptions_help'] = '<p>Berbagai opsi eksekusi ditetapkan di halaman ini</p>
<ul>
<li><b>Berdasarkan</b>: menetapkan instans VPL lain tempat beberapa fitur diimpor: <ul>
<li>Berkas eksekusi (menggabungkan berkas skrip yang telah ditetapkan sebelumnya)</li>
<li>Batasan untuk sumber daya eksekusi.</li> <li>Variasi, yang digabungkan untuk menghasilkan multivariasi.</li> <li>Panjang maksimum untuk setiap berkas yang akan diunggah bersama kiriman</li> </ul> </li> <li><b>Jalankan</b>, <b>Awakutu</b>, dan <b>Evaluasi</b>: harus ditetapkan ke \'Ya\' jika tindakan terkait dapat dijalankan saat mengedit kiriman. Hal ini hanya berlaku untuk siswa, pengguna dengan kemampuan memberi nilai dapat selalu melakukan tindakan ini.</li> <li><b>Evaluasi hanya saat pengiriman</b>: pengiriman dievaluasi secara otomatis saat diunggah.</li> <li><b>Penilaian otomatis</b>: jika hasil evaluasi menyertakan kode penilaian, kode tersebut digunakan untuk menetapkan nilai secara otomatis.</li> </ul>';
$string['file'] = 'Berkas';
$string['fileNotChanged'] = 'Berkas belum berubah';
$string['file_name'] = 'Nama berkas';
$string['fileadded'] = 'File \'{\\$a}\' telah ditambahkan';
$string['filedeleted'] = 'Berkas \'{\\$a}\' telah dihapus';
$string['filelist'] = 'Daftar berkas';
$string['filenotadded'] = 'Berkas belum ditambahkan';
$string['filenotdeleted'] = 'Berkas \'{$a}\' BELUM dihapus';
$string['filenotrenamed'] = 'Berkas \'{$a}\' BELUM diubah namanya';
$string['filerenamed'] = 'Berkas \'{\\$a->from}\' telah diubah namanya menjadi \'{\\$a->to}\'';
$string['filesChangedNotSaved'] = 'Berkas telah berubah tetapi belum disimpan';
$string['filesNotChanged'] = 'Berkas belum berubah';
$string['filestoscan'] = 'Berkas untuk dipindai';
$string['fileupdated'] = 'Berkas \'{\\$a}\' telah diperbarui';
$string['finalreduction'] = 'Pengurangan akhir';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Pengurangan nilai akhir.<br>
<b>NE</b> Evaluasi otomatis yang diminta oleh siswa.<br>
<b>FE</b> Evaluasi gratis diperbolehkan.<br>
<b>R</b> Pengurangan nilai melalui evaluasi. Jika berupa persentase, maka akan diterapkan pada hasil sebelumnya.<br>';
$string['find'] = 'Temukan';
$string['find_replace'] = 'Temukan/Ganti';
$string['freeevaluations'] = 'Evaluasi bebas';
$string['freeevaluations_help'] = 'Jumlah evaluasi otomatis yang tidak mengurangi skor akhir';
$string['fulldescription'] = 'Deskripsi lengkap';
$string['fulldescription_help'] = '<p>Anda harus menuliskan deskripsi lengkap untuk aktivitas tersebut di sini.</p> <p>Jika Anda tidak menuliskan apa pun di sini, deskripsi singkat akan ditampilkan sebagai gantinya.</p> <p>Jika Anda ingin mengevaluasi secara otomatis, antarmuka untuk tugas harus terperinci dan tidak ambigu.</p>';
$string['fullscreen'] = 'Layar penuh';
$string['functions'] = 'Fungsi';
$string['getjails'] = 'Dapatkan server eksekusi';
$string['gradeandnext'] = 'Nilai & selanjutnya';
$string['graded'] = 'Dinilai';
$string['gradedbyuser'] = 'Dinilai oleh pengguna';
$string['gradedon'] = 'Dievaluasi pada';
$string['gradedonby'] = 'Diulas pada {$a->date} oleh {$a->gradername}';
$string['gradenotremoved'] = 'Nilai BELUM dihapus. Periksa konfigurasi aktivitas di buku nilai.';
$string['gradenotsaved'] = 'Nilai BELUM disimpan. Periksa konfigurasi aktivitas di buku nilai.';
$string['gradeoptions'] = 'Opsi Nilai';
$string['grader'] = 'Penilai';
$string['gradercomments'] = 'Laporan penilaian';
$string['graderemoved'] = 'Nilai telah dihapus';
$string['groupwork'] = 'Pekerjaan kelompok';
$string['inconsistentgroup'] = 'Anda bukan anggota dari satu kelompok saja (0 o >1)';
$string['incorrect_directory_name'] = 'Nama direktori salah';
$string['incorrect_file_name'] = 'Nama berkas salah';
$string['indicator:cognitivedepth'] = 'VPL kognitif';
$string['indicator:cognitivedepth_help'] = 'Indikator ini didasarkan pada kedalaman kognitif yang dicapai siswa dalam aktivitas VPL.';
$string['indicator:socialbreadth'] = 'VPL sosial';
$string['indicator:socialbreadth_help'] = 'Indikator ini didasarkan pada keluasan sosial yang dicapai siswa dalam kegiatan VPL.';
$string['individualwork'] = 'Pekerjaan individu';
$string['inputoutput'] = 'Masukan/Keluaran';
$string['instanceselection'] = 'Pemilihan VPL';
$string['intermediate'] = 'Intermediat';
$string['isexample'] = 'Kegiatan ini bertindak sebagai contoh';
$string['jail_servers'] = 'Daftar server eksekusi';
$string['jail_servers_config'] = 'Konfigurasi server eksekusi';
$string['jail_servers_description'] = 'Tulis baris untuk setiap server';
$string['joinedfiles'] = 'Bergabung dengan file yang dipilih';
$string['keepfiles'] = 'File yang harus disimpan saat berjalan';
$string['keepfiles_help'] = '<p>Karena masalah keamanan, berkas yang ditambahkan sebagai "Berkas eksekusi" dihapus sebelum menjalankan berkas vpl_execution.</p> Jika salah satu berkas tersebut diperlukan selama eksekusi (misalnya, untuk digunakan sebagai data uji), berkas tersebut harus ditandai di sini.';
$string['keyboard'] = 'Papan ketik';
$string['lasterror'] = 'Info kesalahan terakhir';
$string['lasterrordate'] = 'Tanggal kesalahan terakhir';
$string['listofcomments'] = 'Daftar komentar';
$string['lists'] = 'Daftar';
$string['listsimilarity'] = 'Daftar kemiripan yang ditemukan';
$string['listwatermarks'] = 'Daftar tanda air';
$string['load'] = 'Muat';
$string['loading'] = 'Memuat';
$string['local_jail_servers'] = 'Server eksekusi lokal';
$string['local_jail_servers_help'] = '<p>Di sini Anda dapat mengatur server eksekusi lokal yang ditambahkan untuk aktivitas ini dan yang berdasarkan aktivitas tersebut.</p>
<p>Masukkan URL lengkap server pada setiap baris. Anda dapat menggunakan baris kosong dan komentar yang memulai baris dengan "#".</p>
<p>Aktivitas ini akan digunakan sebagai daftar server eksekusi: kumpulan server di sini ditambah daftar server yang ditetapkan dalam aktivitas "berdasarkan" ditambah daftar server eksekusi umum. Jika Anda ingin mencegah aktivitas ini dan yang diturunkan menggunakan server lain, maka Anda harus menambahkan baris yang berisi "end_of_jails" di akhir daftar server. </p>';
$string['manualgrading'] = 'Penilaian manual';
$string['math'] = 'Matematika';
$string['maxexefilesize'] = 'Ukuran berkas eksekusi maksimum';
$string['maxexememory'] = 'Memori maksimum yang digunakan';
$string['maxexeprocesses'] = 'Jumlah proses maksimum';
$string['maxexetime'] = 'Waktu eksekusi maksimum';
$string['maxfiles'] = 'Jumlah berkas maksimum';
$string['maxfilesexceeded'] = 'Jumlah berkas maksimum terlampaui';
$string['maxfilesize'] = 'Ukuran berkas unggahan maksimum';
$string['maxfilesizeexceeded'] = 'Ukuran berkas maksimum terlampaui';
$string['maximumperiod'] = 'Periode maksimum {$a}';
$string['maxpostsizeexceeded'] = 'Ukuran kiriman server maksimum terlampaui. Harap hapus berkas atau kurangi ukuran berkas';
$string['maxresourcelimits'] = 'Batasan sumber daya eksekusi maksimum';
$string['maxsimilarityoutput'] = 'Output maksimum berdasarkan kemiripan';
$string['menucheck_jail_servers'] = 'Periksa server eksekusi';
$string['menuexecutionfiles'] = 'Berkas eksekusi';
$string['menuexecutionoptions'] = 'Opsi';
$string['menukeepfiles'] = 'Berkas untuk disimpan';
$string['menulocal_jail_servers'] = 'Server eksekusi lokal';
$string['menuresourcelimits'] = 'Batasan sumber daya';
$string['message::bad_jailserver'] = 'Tidak digunakan karena memerlukan pembaruan perangkat lunak server. Hubungi administrator sistem Anda';
$string['message::body_footer_bad_jailservers'] = 'Untuk mengunduh versi terbaru VPL-Jail-System, kunjungi beranda VPL untuk Moodle dan navigasikan ke bagian "Unduh". Ingat untuk menggunakan parameter URLPATH dan/atau TASK_ONLY_FROM untuk meningkatkan pengaturan keamanan Anda seperti yang direkomendasikan.

Untuk menemukan aktivitas yang menggunakan server VPL Jail lokal, cari di kolom jailservers pada tabel {prefix}vpl.';
$string['message::body_header_bad_jailservers'] = 'Server Penjara VPL dalam daftar berikut ini **sangat** perlu memperbarui perangkat lunak VPL-Jail-System:';
$string['message::subject_bad_jailservers'] = 'Laporan Penting tentang Plugin VPL di Moodle pada Server \'{$a}\'';
$string['messageprovider:bad_jailservers'] = 'Laporkan Server Penjara VPL';
$string['minsimlevel'] = 'Tingkat kemiripan minimum untuk ditampilkan';
$string['moduleconfigtitle'] = 'Konfigurasi Modul VPL';
$string['modulename'] = 'Laboratorium pemrograman virtual';
$string['modulename_help'] = '<p>VPL adalah modul aktivitas untuk Moodle yang mengelola tugas pemrograman dan fitur-fitur utamanya adalah: </p>
<ul>
<li>Memungkinkan untuk mengedit kode sumber program di peramban</li> <li>Siswa dapat menjalankan program secara interaktif di peramban</li>
<li>Anda dapat menjalankan pengujian untuk meninjau program.</li>
 <li>Memungkinkan pencarian kesamaan antar berkas.</li>
<li>Memungkinkan pengaturan batasan pengeditan dan menghindari penempelan teks eksternal.</li> </ul>
<p><a href="http://vpl.dis.ulpgc.es">Halaman Depan Lab Pemrograman Virtual</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Laboratorium pemrograman virtual';
$string['multidelete'] = 'Penghapusan banyak';
$string['nevaluations'] = '{$a} evaluasi otomatis dilakukan';
$string['new'] = 'baru';
$string['new_file_name'] = 'Nama berkas baru';
$string['next'] = 'Selanjutnya';
$string['nojailavailable'] = 'Server eksekusi tidak tersedia';
$string['noright'] = 'Anda tidak memiliki hak akses';
$string['nosubmission'] = 'Kiriman tidak tersedia';
$string['notexecuted'] = 'Tidak dieksekusi';
$string['notgraded'] = 'Tidak dinilai';
$string['notsaved'] = 'Tidak tersimpan';
$string['novpls'] = 'Tidak ada laboratorium pemrograman virtual yang ditentukan';
$string['nowatermark'] = 'Tanda air sendiri {$a}';
$string['nsubmissions'] = '{$a} kiriman';
$string['numcluster'] = 'Klaster {$a}';
$string['open'] = 'Buka';
$string['operatorsvalues'] = 'Operator/Nilai';
$string['opnotallowfromclient'] = 'Aksi tidak diizinkan dari mesin ini';
$string['options'] = 'Opsi';
$string['optionsnotsaved'] = 'Opsi belum disimpan';
$string['optionssaved'] = 'Opsi telah tersimpan';
$string['origin'] = 'Asal';
$string['othersources'] = 'Sumber lain untuk ditambahkan ke pemindaian';
$string['outofmemory'] = 'Kehabisan memori';
$string['override'] = 'Penyampingan';
$string['override_help'] = 'Jika "Penyampingan" dicentang, pengaturan ini akan ditimpa dengan nilai yang dipilih untuk pengguna yang terpengaruh.';
$string['override_options'] = 'Opsi penyampingan';
$string['override_users'] = 'Pengguna terdampak';
$string['override_users_help'] = 'Satu pengguna/grup hanya dapat terpengaruh pada satu set penyampingan.<br> Jika seorang pengguna terpengaruh pada satu set dan satu grup tempat ia menjadi anggotanya terpengaruh pada grup lain, maka pengaruh per pengguna berlaku.<br> Jika seorang pengguna merupakan anggota beberapa grup yang terpengaruh pada beberapa set, grup pertama dalam tabel berlaku.';
$string['overridefor'] = '{$a->base} jatuh tempo untuk {$a->for}';
$string['overrideforgroup'] = '{$a->base} jatuh tempo untuk anggota {$a->for}';
$string['overrides'] = 'Penyampingan';
$string['overrides_help'] = 'Seperangkat setelan dapat ditimpa untuk suatu aktivitas. Setelan ini akan menggantikan setelan aktivitas untuk pengguna dan grup yang terpengaruh.';
$string['paste'] = 'Tempel';
$string['pause'] = 'Jeda';
$string['pluginadministration'] = 'Administrasi VPL';
$string['pluginname'] = 'Laboratorium pemrograman virtual';
$string['previoussubmissionslist'] = 'Daftar kiriman sebelumnya';
$string['print'] = 'Cetak';
$string['privacy:metadata:vpl'] = 'Informasi aktivitas';
$string['privacy:metadata:vpl:course'] = 'ID kursus';
$string['privacy:metadata:vpl:duedate'] = 'Tanggal jatuh tempo aktivitas';
$string['privacy:metadata:vpl:freeevaluations'] = 'Jumlah evaluasi otomatis gratis (tanpa penalti)';
$string['privacy:metadata:vpl:grade'] = 'Nilai aktivitas';
$string['privacy:metadata:vpl:id'] = 'Nomor identifikasi aktivitas';
$string['privacy:metadata:vpl:name'] = 'Nama aktivitas';
$string['privacy:metadata:vpl:reductionbyevaluation'] = 'Penalti pada nilai untuk setiap permintaan siswa untuk evaluasi otomatis';
$string['privacy:metadata:vpl:shortdescription'] = 'Deskripsi singkat aktivitas';
$string['privacy:metadata:vpl:startdate'] = 'Tanggal mulai aktivitas';
$string['privacy:metadata:vpl_acetheme'] = 'Preferensi pengguna untuk tema editor IDE';
$string['privacy:metadata:vpl_assigned_overrides'] = 'Informasi tentang setelan aktivitas yang ditimpa, jika ada';
$string['privacy:metadata:vpl_assigned_overrides:overrideid'] = 'ID penggantian yang ditetapkan';
$string['privacy:metadata:vpl_assigned_overrides:userid'] = 'ID Pengguna DB';
$string['privacy:metadata:vpl_assigned_overrides:vplid'] = 'ID DB VPL';
$string['privacy:metadata:vpl_assigned_variations'] = 'Informasi variasi aktivitas yang ditetapkan, jika ada';
$string['privacy:metadata:vpl_assigned_variations:description'] = 'Deskripsi variasi yang ditugaskan';
$string['privacy:metadata:vpl_assigned_variations:userid'] = 'ID Pengguna DB.';
$string['privacy:metadata:vpl_assigned_variations:vplid'] = 'VPL DB id';
$string['privacy:metadata:vpl_editor_fontsize'] = 'Preferensi pengguna untuk ukuran huruf IDE';
$string['privacy:metadata:vpl_running_processes'] = 'Informasi proses yang sedang berjalan pada aktivitas ini';
$string['privacy:metadata:vpl_running_processes:server'] = 'Server yang menjalankan tugas';
$string['privacy:metadata:vpl_running_processes:starttime'] = 'Tanggal tugas mulai dijalankan';
$string['privacy:metadata:vpl_running_processes:userid'] = 'ID Pengguna DB.';
$string['privacy:metadata:vpl_running_processes:vplid'] = 'VPL DB id';
$string['privacy:metadata:vpl_submissions'] = 'Informasi tentang upaya/pengajuan dan evaluasinya';
$string['privacy:metadata:vpl_submissions:dategraded'] = 'Tanggal dan waktu evaluasi pengajuan';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = 'Tanggal dan waktu penyerahan';
$string['privacy:metadata:vpl_submissions:grade'] = 'Nilai untuk penyerahan ini. Nilai ini mungkin tidak sesuai dengan nilai di buku nilai.';
$string['privacy:metadata:vpl_submissions:gradercomments'] = 'Komentar dari pemberi nilai tentang kiriman ini';
$string['privacy:metadata:vpl_submissions:groupid'] = 'ID Grup DB';
$string['privacy:metadata:vpl_submissions:nevaluations'] = 'Jumlah evaluasi otomatis yang diminta oleh siswa hingga pengajuan ini';
$string['privacy:metadata:vpl_submissions:studentcomments'] = 'Komentar yang ditulis oleh siswa tentang penyerahan tersebut';
$string['privacy:metadata:vpl_terminaltheme'] = 'Preferensi pengguna untuk kombinasi warna terminal';
$string['proposedgrade'] = 'Nilai yang diusulkan: {$a}';
$string['proxy'] = 'proksi';
$string['proxy_description'] = 'Proksi dari Moodle ke server eksekusi';
$string['reductionbyevaluation'] = 'Pengurangan dengan evaluasi otomatis';
$string['reductionbyevaluation_help'] = 'Kurangi skor akhir dengan nilai atau persentase untuk setiap evaluasi otomatis yang diminta oleh siswa';
$string['regularscreen'] = 'Layar biasa';
$string['removebreakpoint'] = 'Hapus titik henti';
$string['removegrade'] = 'Hapus nilai';
$string['rename'] = 'Ganti nama';
$string['rename_directory'] = 'Ganti nama direktori';
$string['rename_file'] = 'Ganti nama berkas';
$string['replace_find'] = 'Ganti/Cari';
$string['replacenewer'] = 'Versi yang lebih baru telah disimpan.\\nApakah Anda ingin mengganti versi yang lebih baru dengan yang ini?';
$string['requestedfiles'] = 'Berkas yang diminta';
$string['requestedfiles_help'] = '<p>Di sini Anda menetapkan nama dan konten awal untuk berkas yang diminta hingga jumlah berkas maksimum yang ditetapkan dalam deskripsi dasar aktivitas.</p>
<p>Jika Anda tidak menetapkan nama untuk seluruh jumlah berkas, berkas yang tidak diberi nama bersifat opsional dan dapat memiliki nama apa pun.</p>
<p>Anda juga dapat menambahkan konten ke berkas yang diminta, sehingga konten ini akan tersedia saat pertama kali dibuka dengan editor, jika tidak ada pengiriman sebelumnya.</p>';
$string['requirednet'] = 'Pengiriman yang diizinkan dari jaringan';
$string['requiredpassword'] = 'Diperlukan kata sandi';
$string['resetfiles'] = 'Reset berkas';
$string['resetvpl'] = 'Reset {$a}';
$string['resourcelimits'] = 'Batasan sumber daya';
$string['resourcelimits_help'] = '<p>Anda dapat menetapkan batasan untuk waktu eksekusi, memori yang digunakan, ukuran file eksekusi, dan jumlah proses yang akan dieksekusi secara bersamaan.</p>
<p>Batasan ini digunakan saat menjalankan file skrip vpl_run.sh, vpl_debug.sh, dan vpl_evaluate.sh serta file vpl_execution yang dibuat oleh file-file tersebut.</p>
<p>Jika aktivitas ini didasarkan pada aktivitas lain, batasan tersebut dapat dipengaruhi oleh batasan yang ditetapkan dalam aktivitas dasar dan pendahulunya atau dalam konfigurasi global modul.</p>';
$string['restrictededitor'] = 'Nonaktifkan unggahan berkas eksternal, tempel dan jatuhkan konten eksternal';
$string['resume'] = 'Melanjutkan';
$string['retrieve'] = 'Ambil hasil';
$string['run'] = 'Jalankan';
$string['running'] = 'Sedang berjalan';
$string['runscript'] = 'Jalankan skrip';
$string['runscript_help'] = 'Pilih skrip lari yang akan digunakan dalam aktivitas ini';
$string['save'] = 'Simpan';
$string['savecontinue'] = 'Simpan dan lanjutkan';
$string['saved'] = 'Tersimpan';
$string['savedfile'] = 'Berkas  \'{\\$a}\' telah disimpan';
$string['saveforotheruser'] = 'Anda menyimpan kiriman untuk pengguna lain, apakah Anda yakin?';
$string['saveoptions'] = 'opsi penyimpanan';
$string['saving'] = 'Menyimpan';
$string['scanactivity'] = 'Aktivitas';
$string['scandirectory'] = 'Direktori';
$string['scanningdir'] = 'Memindai direktori...';
$string['scanoptions'] = 'Opsi pemindaian';
$string['scanother'] = 'Pindai kesamaan di sumber tambahan';
$string['scanzipfile'] = 'Berkas ZIP';
$string['search:activity'] = 'Lab Pemrograman Virtual - informasi aktivitas (nama dan deskripsi)';
$string['sebkeys'] = 'SEB exam Key/s';
$string['sebkeys_help'] = 'Kunci ujian SEB (maksimal 3) diperoleh dari file .seb<br>Lebih dapat diandalkan daripada hanya memeriksa browser.<br>https://safeexambrowser.org';
$string['sebrequired'] = 'Diperlukan peramban SEB';
$string['sebrequired_help'] = 'Perlu menggunakan peramban SEB yang dikonfigurasi dengan benar';
$string['select_all'] = 'Pilih semua';
$string['selectbreakpoint'] = 'Pilih titik henti';
$string['server'] = 'Server';
$string['serverexecutionerror'] = 'Galat eksekusi server';
$string['shortcuts'] = 'Pintasan papan ketik';
$string['shortdescription'] = 'Deskripsi singkat';
$string['shrightpanel'] = 'Tampil/sembunyikan panel kanan';
$string['similarity'] = 'Kemiripan';
$string['similarto'] = 'Mirip dengan';
$string['start'] = 'Mulai';
$string['startanimate'] = 'Mulai animasi';
$string['startdate'] = 'Tersedia dari';
$string['starting'] = 'Memulai';
$string['step'] = 'Langkah';
$string['stop'] = 'Setop';
$string['submission'] = 'Kiriman';
$string['submissionperiod'] = 'Periode kiriman';
$string['submissionrestrictions'] = 'Batasan pengiriman';
$string['submissions'] = 'Pengiriman';
$string['submissionselection'] = 'Pilihan pengiriman';
$string['submissionslist'] = 'Daftar Kiriman';
$string['submissionview'] = 'Lihat Kiriman';
$string['submittedby'] = 'Dikirimkan oleh {$a}';
$string['submittedon'] = 'Dikirim pada';
$string['submittedonp'] = 'Dikirim pada {$a}';
$string['sureresetfiles'] = 'Apakah Anda ingin kehilangan semua pekerjaan Anda dan mengatur ulang berkas ke keadaan semula?';
$string['test'] = 'Aktivitas Tes';
$string['testcases'] = 'Uji kasus';
$string['testcases_help'] = 'Fitur ini memungkinkan untuk menjalankan program siswa dan memeriksa outputnya untuk input yang diberikan. Untuk menyiapkan kasus evaluasi, Anda harus mengisi berkas "vpl_evaluate.cases".<br> File "vpl_evaluate.cases" memiliki format berikut:<br>
<ul>
<li> "<b>case </b>= Description of case": Tetapkan awal definisi kasus pengujian.</li>
<li> "<b>input </b>= text": dapat menggunakan beberapa baris. Diakhiri dengan instruksi lain.</li>
<li> "<b>output </b>= teks": dapat menggunakan beberapa baris. Diakhiri dengan instruksi lain. Suatu kasus dapat memiliki output yang benar yang berbeda. Ada tiga jenis output: angka, teks, dan pengujian eksak:
<ul>
<li> <b>number</b>: didefinisikan sebagai urutan angka (integer dan float). Hanya angka dalam output yang diperiksa, teks lainnya diabaikan. Float diperiksa dengan toleransi</li>
<li> <b>text</b>: didefinisikan sebagai teks tanpa tanda kutip ganda. Hanya kata-kata yang diperiksa dan karakter lainnya diabaikan, perbandingan tidak peka huruf besar/kecil </li>
<li> <b>exact text</b>: didefinisikan sebagai teks dalam tanda kutip ganda. Pencocokan persis digunakan untuk menguji output.</li>
</ul>
</li>
<li> "<b>grade reduction</b> = [value|percentage%]" : Secara bawaan kesalahan mengurangi nilai siswa (dimulai dengan maxgrade) sebesar (rentang nilai/jumlah kasus) tetapi dengan instruksi ini Anda dapat mengubah nilai pengurangan atau persentase.</li>
</ul>';
$string['text'] = 'Teks';
$string['timeleft'] = 'Waktu tersisa';
$string['timelimited'] = 'Waktu terbatas';
$string['timeout'] = 'Batas waktu';
$string['timespent'] = 'Waktu yang dihabiskan';
$string['timespent_help'] = 'Waktu yang dihabiskan dalam aktivitas ini berdasarkan versi yang disimpan<br>Grafik batang menunjukkan jumlah siswa per rentang waktu.';
$string['timeunlimited'] = 'Waktu tak terbatas';
$string['totalnumberoferrors'] = 'Galat';
$string['undo'] = 'Tak jadi';
$string['unexpected_file_name'] = 'Nama berkas salah: diharapkan \'{\\$a->expected}\' dan ditemukan \'{\\$a->found}\'';
$string['unzipping'] = 'Mengekstrak ...';
$string['update'] = 'Perbarui';
$string['updating'] = 'Memperbarui';
$string['uploadfile'] = 'Unggah berkas';
$string['use_xmlrpc'] = 'Gunakan XML-RPC';
$string['use_xmlrpc_description'] = 'Jika diatur, sistem akan menggunakan protokol XML-RPC lama, bukan JSON-RPC, untuk berkomunikasi dengan vpl-jail-servers. Atur opsi ini jika Anda menggunakan vpl-jail-servers dengan versi sebelum V3.0.0.';
$string['usevariations'] = 'Gunakan variasi';
$string['usewatermarks'] = 'Gunakan tanda air';
$string['usewatermarks_description'] = 'Menambahkan tanda air ke file siswa (hanya untuk bahasa yang didukung)';
$string['variables'] = 'Variabel';
$string['variation_n'] = 'Variasi {$a}';
$string['variation_n_i'] = 'Variasi {$a->number}: {$a->identification}';
$string['variation_options'] = 'Opsi variasi';
$string['variations'] = 'Variasi';
$string['variations_help'] = '<p>Seperangkat variasi dapat ditetapkan untuk suatu aktivitas. Variasi ini ditetapkan secara acak kepada siswa.</p>
<p>Di sini Anda dapat menunjukkan apakah aktivitas ini memiliki variasi, memberi judul untuk rangkaian variasi, dan menambahkan variasi yang diinginkan.</p>
<p>Setiap variasi memiliki kode identifikasi dan deskripsi. Kode identifikasi digunakan oleh berkas <b>vpl_enviroment.sh</b> untuk meneruskan variasi yang ditetapkan kepada setiap siswa ke berkas skrip. Deskripsi, yang diformat dalam HTML, ditampilkan kepada siswa yang telah menetapkan variasi yang sesuai.</p>';
$string['variations_unused'] = 'Aktivitas ini memiliki variasi, tetapi dinonaktifkan';
$string['variationtitle'] = 'Judul variasi';
$string['varidentification'] = 'Identifikasi';
$string['visiblegrade'] = 'Terlihat';
$string['vpl'] = 'Virtual Programming Lab';
$string['vpl:addinstance'] = 'Tambahkan Instans VPL baru';
$string['vpl:grade'] = 'Nilai Penugasan VPL';
$string['vpl:manage'] = 'Kelola penugasan VPL';
$string['vpl:setjails'] = 'Tetapkan server eksekusi untuk instans VPL tertentu';
$string['vpl:similarity'] = 'Cari kesamaan tugas VPL';
$string['vpl:submit'] = 'Kirimkan Penugasan VPL';
$string['vpl:view'] = 'Lihat deskripsi tugas VPL selengkapnya';
$string['vpl_debug.sh'] = 'Skrip ini mempersiapkan pengawakutuan';
$string['vpl_evaluate.cases'] = 'Kasus uji untuk evaluasi';
$string['vpl_evaluate.sh'] = 'Skrip ini mempersiapkan evaluasi';
$string['vpl_run.sh'] = 'Skrip ini mempersiapkan eksekusi';
$string['websocket_protocol'] = 'Protokol WebSocket';
$string['websocket_protocol_description'] = 'Jenis protokol WebSocket (ws:// atau wss://) yang digunakan oleh peramban untuk terhubung ke server eksekusi.';
$string['workingperiods'] = 'Masa kerja';
$string['worktype'] = 'Jenis pekerjaan';
