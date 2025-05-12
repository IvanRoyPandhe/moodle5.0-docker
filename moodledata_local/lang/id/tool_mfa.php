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
 * Strings for component 'tool_mfa', language 'id', version '5.0'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Bobot yang dicapai';
$string['added'] = 'Ditambahkan';
$string['alltime'] = 'Sepanjang waktu';
$string['areyousure'] = 'Apakah Anda yakin ingin menghapus faktor ini?';
$string['cancellogin'] = 'Batalkan masuk';
$string['combination'] = 'Kombinasi';
$string['confirmationreplace'] = 'Anda akan segera diminta untuk menyiapkan \'{$a}\' lainnya. Pastikan Anda siap untuk menyelesaikan proses setelan.';
$string['confirmationrevoke'] = 'Anda tidak lagi dapat menggunakan \'{$a}\' untuk masuk ke situs ini.';
$string['connector'] = 'AND';
$string['debugmode:heading'] = 'Mode debug';
$string['devicename'] = 'Perangkat';
$string['editfactor'] = 'Edit setelan untuk faktor {$a}';
$string['email:subject'] = 'Tidak dapat masuk ke {$a}';
$string['enablefactor'] = 'Aktifkan faktor';
$string['entercode'] = 'Masukkan kode';
$string['error:actionnotfound'] = 'Aksi \'{$a}\' tidak didukung';
$string['error:couldnotreplace'] = 'Tidak dapat menggantikan faktor ini.';
$string['error:directaccess'] = 'Halaman ini tidak boleh diakses secara langsung';
$string['error:factornotenabled'] = 'Faktor autentikasi multifaktor \'{$a}\' tidak diaktifkan';
$string['error:factornotfound'] = 'Faktor autentikasi multifaktor \'{$a}\' tidak ditemukan';
$string['error:isguestuser'] = 'Tamu tidak diperbolehkan di sini.';
$string['error:notenoughfactors'] = 'Tidak dapat mengautentikasi';
$string['error:reauth'] = 'Kami tidak dapat mengonfirmasi identitas Anda secara memadai untuk memenuhi kebijakan keamanan autentikasi situs.<br>Hal ini mungkin disebabkan oleh: <br> 1) Langkah-langkah dikunci - harap tunggu beberapa menit dan coba lagi.
<br> 2) Langkah-langkah gagal - harap periksa kembali detail setiap langkah. <br> 3) Langkah-langkah dilewati - harap muat ulang halaman ini atau coba masuk lagi.';
$string['error:revoke'] = 'Tidak dapat menghapus faktor';
$string['error:setupfactor'] = 'Tidak dapat menyiapkan faktor';
$string['error:support'] = 'Jika Anda masih tidak dapat masuk, atau yakin Anda melihat ini karena kesalahan, kirimkan surel ke:';
$string['error:wrongfactorid'] = 'ID faktor \'{$a}\' salah';
$string['event:failfactor'] = 'Autentikasi multi-faktor gagal karena faktor yang gagal.';
$string['event:faillockout'] = 'Autentikasi multifaktor gagal karena terlalu banyak upaya.';
$string['event:failnotenoughfactors'] = 'Autentikasi multi-faktor gagal karena faktor yang tidak mencukupi.';
$string['event:userdeletedfactor'] = 'Faktor dihapus';
$string['event:userfailedmfa'] = 'Autentikasi multifaktor pengguna gagal';
$string['event:userpassedmfa'] = 'Lolos verifikasi';
$string['event:userrevokedfactor'] = 'Pencabutan faktor';
$string['event:usersetupfactor'] = 'Setelan faktor';
$string['factor'] = 'Faktor';
$string['factorreplace'] = 'Faktor \'{$a}\' berhasil diganti.';
$string['factorreport'] = 'Laporan semua faktor';
$string['factorreset'] = 'Autentikasi multifaktor \'{$a->factor}\' Anda telah disetel ulang oleh administrator situs. Anda mungkin perlu menyiapkan faktor ini lagi. {$a->url}';
$string['factorresetall'] = 'Semua faktor autentikasi multifaktor Anda telah disetel ulang oleh administrator situs. Anda mungkin perlu menyiapkan faktor-faktor ini lagi. {$a}';
$string['factorrevoked'] = '\'{$a}\' berhasil dihapus.';
$string['factorsetup'] = '\'{$a}\' berhasil disiapkan.';
$string['fallback'] = 'Faktor cadangan';
$string['fallback_info'] = 'Faktor ini merupakan cadangan jika tidak ada faktor lain yang dikonfigurasi. Faktor ini akan selalu gagal.';
$string['guidance'] = 'Panduan pengguna autentikasi multifaktor';
$string['inputrequired'] = 'Masukan pengguna';
$string['ipatcreation'] = 'Alamat IP saat faktor dibuat';
$string['lastused'] = 'Terakhir digunakan';
$string['locked'] = '{$a} (Tidak tersedia)';
$string['lockedusersforallfactors'] = 'Pengguna terkunci: Semua faktor';
$string['lockedusersforfactor'] = 'Pengguna terkunci: {$a}';
$string['lockoutnotification'] = 'Anda memiliki {$a} kesempatan tersisa.';
$string['managefactor'] = 'Kelola faktor';
$string['mfa'] = 'Autentikasi multi-faktor';
$string['mfa:intro'] = 'Jadikan akun Anda lebih aman dengan memerlukan metode verifikasi tambahan saat Anda masuk.';
$string['mfa:mfaaccess'] = 'Berinteraksi dengan MFA';
$string['mfareports'] = 'Laporan MFA';
$string['mfasettings'] = 'Kelola autentikasi multifaktor';
$string['na'] = 'tidak ada';
$string['needhelp'] = 'Butuh bantuan?';
$string['nologinusers'] = 'Tidak masuk';
$string['nonauthusers'] = 'Tangguhkan MFA';
$string['overall'] = 'Keseluruhan';
$string['pending'] = 'Tertunda';
$string['performbulk'] = 'Tindakan massal';
$string['pluginname'] = 'Autentikasi multi-faktor';
$string['preferences:activefactors'] = 'Faktor aktif';
$string['preferences:availablefactors'] = 'Faktor yang tersedia';
$string['preferences:header'] = 'Preferensi autentikasi multifaktor';
$string['preferenceslink'] = 'Klik di sini untuk membuka preferensi pengguna.';
$string['privacy:metadata:tool_mfa'] = 'Data dengan faktor MFA yang dikonfigurasi';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP tempat faktor tersebut diatur.';
$string['privacy:metadata:tool_mfa:factor'] = 'Jenis faktor';
$string['privacy:metadata:tool_mfa:id'] = 'ID rekaman';
$string['privacy:metadata:tool_mfa:label'] = 'Label untuk contoh faktor, mis. perangkat atau surel.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Waktu pengguna terakhir diverifikasi dengan faktor ini';
$string['privacy:metadata:tool_mfa:secret'] = 'Data rahasia apa pun untuk faktor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Waktu instans faktor disiapkan.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Faktor waktu terakhir diubah';
$string['privacy:metadata:tool_mfa:userid'] = 'ID pengguna yang memiliki faktor tersebut';
$string['privacy:metadata:tool_mfa_auth'] = 'Terakhir kali autentikasi multifaktor berhasil didaftarkan untuk ID pengguna.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Waktu pengguna terakhir kali diautentikasi';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Pengguna yang dikaitkan dengan stempel waktu ini.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Rahasia sementara untuk autentikasi pengguna.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Faktor yang dikaitkan dengan rahasia ini.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Kode keamanan rahasia.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'ID sesi yang dikaitkan dengan rahasia ini.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Pengguna yang dikaitkan dengan rahasia ini.';
$string['redirecterrordetected'] = 'Pengalihan yang tidak didukung terdeteksi, eksekusi skrip dihentikan. Terjadi kesalahan pengalihan antara MFA dan {$a}.';
$string['remove'] = 'Hapus';
$string['replace'] = 'Ganti';
$string['replacefactor'] = 'Ganti faktor';
$string['resetconfirm'] = 'Setel ulang faktor pengguna';
$string['resetfactor'] = 'Setel ulang faktor autentikasi pengguna';
$string['resetfactorconfirm'] = 'Apakah Anda yakin ingin menyetel ulang faktor ini untuk {$a}?';
$string['resetfactorplaceholder'] = 'Nama pengguna atau surel';
$string['resetsuccess'] = 'Faktor \'{$a->factor}\' berhasil disetel ulang untuk pengguna \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Faktor \'{$a}\' berhasil disetel ulang untuk pengguna yang disediakan.';
$string['resetuser'] = 'Pengguna:';
$string['revokefactor'] = 'Hapus faktor';
$string['selectfactor'] = 'Pilih faktor yang akan direset:';
$string['selectperiod'] = 'Pilih periode lihat balik laporan:';
$string['settings:combinations'] = 'Ringkasan kondisi yang baik untuk login';
$string['settings:debugmode'] = 'Aktifkan mode awakutu';
$string['settings:debugmode_help'] = 'Mode awakutu akan menampilkan spanduk notifikasi kecil di halaman admin MFA, serta laman preferensi pengguna dengan informasi tentang faktor-faktor yang diaktifkan saat ini.';
$string['settings:duration'] = 'Durasi validitas rahasia';
$string['settings:duration_help'] = 'Durasi rahasia yang dihasilkan valid.';
$string['settings:enabled'] = 'Plugin MFA diaktifkan';
$string['settings:enablefactor'] = 'Aktifkan faktor';
$string['settings:enablefactor_help'] = 'Centang kontrol ini untuk mengizinkan faktor tersebut digunakan untuk autentikasi MFA.';
$string['settings:general'] = 'Setelan MFA umum';
$string['settings:guidancecheck'] = 'Gunakan halaman panduan';
$string['settings:guidancecheck_help'] = 'Tambahkan tautan ke halaman panduan di halaman autentikasi MFA, dan halaman preferensi MFA.';
$string['settings:guidancefiles'] = 'Berkas halaman panduan';
$string['settings:guidancefiles_help'] = 'Tambahkan berkas apa pun di sini untuk digunakan di halaman panduan, dan sematkan berkas tersebut ke halaman menggunakan {{filename}} (jalur terselesaikan) atau {{{filename}}} (link html) di editor';
$string['settings:guidancepage'] = 'Konten halaman panduan';
$string['settings:guidancepage_help'] = 'HTML di sini akan ditampilkan pada halaman panduan. Masukkan nama file dari area file untuk menyematkan file dengan jalur terselesaikan {{filename}} atau sebagai tautan html menggunakan {{{filename}}}.';
$string['settings:lockout'] = 'Ambang batas penguncian';
$string['settings:lockout_help'] = 'Jumlah upaya yang dapat dilakukan pengguna untuk menjawab faktor masukan sebelum mereka dicegah untuk masuk.';
$string['settings:redir_exclusions'] = 'URL yang tidak seharusnya mengalihkan pemeriksaan MFA.';
$string['settings:redir_exclusions_help'] = 'Setiap baris baru adalah URL relatif dari akar situs yang tidak akan dialihkan oleh pemeriksaan MFA';
$string['settings:weight'] = 'Bobot faktor';
$string['settings:weight_help'] = 'Bobot faktor ini jika dilewati. Seorang pengguna membutuhkan setidaknya 100 poin untuk log masuk.';
$string['setupfactor'] = 'Setelan faktor';
$string['setuprequired'] = 'Setelan pengguna';
$string['state:fail'] = 'Gagal';
$string['state:locked'] = 'Terkunci';
$string['state:neutral'] = 'Netral';
$string['state:pass'] = 'Lulus';
$string['state:unknown'] = 'Tidak diketahui';
$string['subplugintype_factor'] = 'Tipe faktor';
$string['subplugintype_factor_plural'] = 'Tipe faktor';
$string['totalusers'] = 'Jumlah pengguna';
$string['totalweight'] = 'Total bobot';
$string['userempty'] = 'Pengguna tidak boleh kosong.';
$string['userlogs'] = 'Log pengguna';
$string['usernotfound'] = 'Tidak dapat menemukan pengguna.';
$string['usersauthedinperiod'] = 'Masuk';
$string['verification'] = 'verifikasi 2 langkah';
$string['verification_desc'] = 'Untuk menjaga keamanan akun Anda, kami perlu memastikan bahwa ini memang Anda.';
$string['verificationcode'] = 'Kode verifikasi';
$string['verificationcode_help'] = 'Kode verifikasi disediakan oleh faktor otentikasi saat ini.';
$string['verifyalt'] = 'Coba cara lain untuk memverifikasi:';
$string['weight'] = 'Bobot';
$string['yesremove'] = 'Ya, hapus';
$string['yesreplace'] = 'Ya, ganti';
