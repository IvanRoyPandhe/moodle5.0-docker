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
 * Strings for component 'oublog', language 'id', version '5.0'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Maaf: Anda tidak memiliki akses untuk melihat halaman ini.';
$string['accordion_closed'] = 'Ditutup';
$string['accordion_open'] = 'Buka';
$string['activeblogs'] = 'Aktif';
$string['addcomment'] = 'Tambahkan komentar';
$string['addlink'] = 'Tambahkan tautan';
$string['addpost'] = 'Tambahkan kiriman';
$string['advancedoptions'] = 'Opsi lanjutan';
$string['afterendcomment'] = 'Anda tidak dapat mengomentari kiriman saat ini. Komentar berakhir pada {$a}.';
$string['afterendcommentcapable'] = 'Siswa dapat mengomentari postingan hingga {$a}.
<br/> Anda memiliki akses ke komentar setelah waktu ini.';
$string['afterendpost'] = 'Anda tidak dapat membuat kiriman saat ini. Pembuatan kiriman berakhir pada {$a}.';
$string['afterendpostcapable'] = 'Siswa dapat membuat postingan mereka sendiri hingga {$a}.
<br/> Anda memiliki akses untuk membuat kiriman setelah saat ini.';
$string['allowcomments'] = 'Izinkan komentar';
$string['allowcomments_help'] = '&lsquo;Ya, dari pengguna yang masuk&rsquo; mengizinkan komentar dari pengguna yang memiliki akses pada kiriman.

&lsquo;Ya, dari semua orang&rsquo; memungkinkan komentar dari pengguna dan dari masyarakat umum. Anda akan menerima surel untuk menyetujui atau menolak komentar dari pengguna yang tidak masuk.

&lsquo;Tidak&rsquo; mencegah siapa pun untuk berkomentar di kiriman ini.';
$string['allowcommentsmax'] = 'Izinkan komentar (jika dipilih untuk kiriman)';
$string['beforeendcomment'] = 'Anda hanya dapat mengomentari kiriman hingga {$a}.';
$string['beforeendcommentcapable'] = 'Siswa dapat mengomentari posting sampai {$a}.
<br/> Anda memiliki akses ke komentar setelah saat ini.';
$string['beforeendpost'] = 'Anda hanya dapat membuat postingan hingga {$a}.';
$string['beforeendpostcapable'] = 'Siswa dapat membuat kiriman mereka sendiri hingga {$a}.
<br/> Anda memiliki akses untuk membuat kiriman setelah saat ini.';
$string['beforestartcomment'] = 'Anda tidak dapat mengomentari kiriman saat ini. Anda dapat mengomentari dari {$a}.';
$string['beforestartcommentcapable'] = 'Siswa tidak dapat mengomentari kiriman sampai {$a}.
<br/> Anda memiliki akses ke komentar sebelum waktu ini.';
$string['beforestartpost'] = 'Anda tidak dapat membuat kiriman saat ini. Kiriman blog tersedia dari {$a}.';
$string['beforestartpostcapable'] = 'Siswa tidak dapat membuat kiriman mereka sendiri hingga {$a}.
<br/> Anda memiliki akses untuk membuat kiriman sebelum waktu ini.';
$string['comment'] = 'Tambahkan komentar Anda';
$string['commentalert'] = 'Laporkan komentar';
$string['commentfrom'] = 'Mengomentari hanya diperbolehkan dari';
$string['commentonby'] = 'Mengomentari kiriman <u>{$a->title}</u> {$a->date} oleh <u>{$a->author}</u>';
$string['commentonbyusers'] = 'Komentari <u>{$a->commenttitle}</u> pada kiriman <u>{$a->posttitle}</u> <br> oleh <u>{$a->author}</u>';
$string['confirmdeletecomment'] = 'Yakin ingin menghapus komentar ini?';
$string['confirmdeletelink'] = 'Yakin ingin menghapus tautan ini?';
$string['confirmdeletepost'] = 'Yakin ingin menghapus komentar ini?';
$string['delete'] = 'Hapus';
$string['deleteandemail'] = 'Hapus dan email';
$string['deletedby'] = 'Dihapus oleh {$a->fullname}, {$a->timedeleted}';
$string['deleteemailpostbutton'] = 'Hapus dan email';
$string['deleteemailpostdescription'] = 'Pilih untuk menghapus kiriman atau hapus dan kirim pemberitahuan surel yang dapat disesuaikan.';
$string['deleteglobalblog'] = 'Anda tidak dapat menghapus blog global';
$string['editpost'] = 'Perbarui kiriman';
$string['emailcontenthtml'] = 'Ini adalah pemberitahuan untuk memberi tahu Anda bahwa {$a->activityname} Anda mengirim dengan
detail berikut telah dihapus oleh \'{$a->firstname} {$a->lastname}\':<br />
<br />
Subjek: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
Kursus: {$a->course}<br />
<br />
<a href={$a->deleteurl} title="lihat kiriman yang dihapus">Lihat kiriman yang dihapus</a>';
$string['event:commentcreated'] = 'Komentar dibuat';
$string['event:commentdeleted'] = 'Komentar dihapus';
$string['event:postcreated'] = 'Kiriman dibuat';
$string['event:postdeleted'] = 'Kiriman dihapus';
$string['event:postupdated'] = 'Kiriman diperbarui';
$string['gradesupdated'] = 'Nilai diperbarui';
$string['oublog:audit'] = 'Lihat kiriman yang dihapus dan versi lama';
$string['oublog:post'] = 'Buat kiriman baru';
$string['privacy:metadata:oublog_posts:deletedby'] = 'Pengguna yang menghapus kiriman blog ini (jika sudah dihapus).';
$string['privacy_commentplaceholder'] = '(Komentar dihapus atas permintaan pengguna)';
$string['sendanddelete'] = 'Kirim dan hapus';
$string['subscribefeed'] = 'Berlangganan umpan (memerlukan perangkat lunak yang sesuai) untuk menerima pemberitahuan saat {$a} ini diperbarui.';
$string['tagupdatefailed'] = 'Gagal memperbarui tag';
$string['timefilter_submit'] = 'Perbarui';
