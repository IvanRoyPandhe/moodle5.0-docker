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
 * Strings for component 'auth_oidc', language 'id', version '5.0'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_oidcdescription'] = 'Pengaya OpenID Connect menyediakan fungsionalitas sistem masuk tunggal menggunakan penyedia identitas yang dapat dikonfigurasi.';
$string['cfg_autoappend_key'] = 'Tambahkan Otomatis';
$string['cfg_customicon_key'] = 'Ikon Kustom';
$string['cfg_debugmode_desc'] = 'Jika diaktifkan, informasi akan dicatat ke log Moodle yang dapat membantu mengidentifikasi masalah.';
$string['cfg_debugmode_key'] = 'Rekam pesan debug';
$string['cfg_domainhint_key'] = 'Petunjuk Domain';
$string['cfg_err_invalidauthendpoint'] = 'Titik Akhir Otorisasi Tidak Valid';
$string['cfg_err_invalidclientid'] = 'ID klien tidak valid';
$string['cfg_err_invalidclientsecret'] = 'Rahasia klien tidak valid';
$string['cfg_err_invalidtokenendpoint'] = 'Titik Akhir Token Tidak Valid';
$string['cfg_forceredirect_desc'] = 'Jika diaktifkan, akan melewati halaman indeks login dan dialihkan ke halaman OpenID Connect. Dapat dilewati dengan? Noredirect = 1 parameter URL';
$string['cfg_forceredirect_key'] = 'Paksa pengalihan';
$string['cfg_icon_desc'] = 'Ikon untuk ditampilkan di sebelah nama penyedia di halaman login.';
$string['cfg_icon_key'] = 'Ikon';
$string['cfg_iconalt_check'] = 'Ikon tanda centang';
$string['cfg_iconalt_go'] = 'Lingkaran hijau';
$string['cfg_iconalt_group'] = 'Ikon grup';
$string['cfg_iconalt_group2'] = 'Ikon grup bergantian';
$string['cfg_iconalt_key'] = 'Ikon kunci';
$string['cfg_iconalt_lock'] = 'Ikon gembok';
$string['cfg_iconalt_locked'] = 'Ikon terkunci';
$string['cfg_iconalt_mnet'] = 'Ikon MNET';
$string['cfg_iconalt_o365'] = 'Ikon Microsoft 365';
$string['cfg_iconalt_plus'] = 'Ikon tanda tambah';
$string['cfg_iconalt_rightarrow'] = 'Ikon panah hadap kanan';
$string['cfg_iconalt_stop'] = 'lingkaran merah';
$string['cfg_iconalt_user'] = 'Ikon pengguna';
$string['cfg_iconalt_user2'] = 'Ikon pengguna bergantian';
$string['cfg_iconalt_userlock'] = 'Pengguna dengan ikon kunci';
$string['cfg_loginflow_authcode'] = 'Alur Kode Otorisasi (disarankan)';
$string['cfg_loginflow_key'] = 'Metode Otentikasi';
$string['cfg_loginflow_rocreds'] = 'Pemberian Kredensial Sandi Pemilik Sumber Daya';
$string['cfg_logoutendpoint_desc'] = 'URI titik akhir logout dari penyedia identitas Anda yang akan digunakan.';
$string['cfg_logoutendpoint_key'] = 'Titik Akhir Keluar';
$string['cfg_opname_key'] = 'Nama Penyedia';
$string['cfg_redirecturi_key'] = 'Alihkan URI';
$string['cfg_signoffintegration_key'] = 'Tanda tangan tunggal';
$string['cfg_userrestrictions_key'] = 'Batasan Pengguna';
$string['cfg_userrestrictionscasesensitive_key'] = 'Pembatasan Pengguna Peka Huruf Besar-Kecil';
$string['errorauthdisconnectemptypassword'] = 'Kata sandi tidak boleh kosong';
$string['errorauthdisconnectemptyusername'] = 'Nama pengguna tidak boleh kosong';
$string['errorauthdisconnectifmanual'] = 'Jika menggunakan metode login manual, masukkan kredensial di bawah ini.';
$string['errorauthdisconnectinvalidmethod'] = 'Metode masuk yang tidak valid diterima.';
$string['errorauthdisconnectnewmethod'] = 'Gunakan Metode Login';
$string['errorauthdisconnectusernameexists'] = 'Nama pengguna itu telah terpakai. Pilih yang lain.';
$string['errorauthgeneral'] = 'Terjadi masalah saat Anda masuk. Harap hubungi administrator Anda untuk mendapatkan bantuan.';
$string['errorauthinvalididtoken'] = 'ID_token diterima tidak valid.';
$string['errorauthnoauthcode'] = 'Tidak ada kode otorisasi yang diterima dari server identitas. Log kesalahan mungkin memiliki lebih banyak informasi.';
$string['errorauthnohttpclient'] = 'Harap setel klien HTTP.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token tidak diterima.';
$string['errorauthunknownstate'] = 'Negara bagian tidak diketahui.';
$string['errorauthuseralreadyconnected'] = 'Anda sudah terhubung ke pengguna OpenID Connect yang berbeda.';
$string['errorauthuserconnectedtodifferent'] = 'Pengguna OpenID Connect yang diautentikasi sudah terhubung ke pengguna Moodle.';
$string['errorinvalidredirect_message'] = 'URL yang anda coba alihkan tidak ada.';
$string['errorjwtbadpayload'] = 'Tidak dapat membaca payload JWT.';
$string['errorjwtcouldnotreadheader'] = 'Tidak dapat membaca header JWT';
$string['errorjwtempty'] = 'JWT kosong atau non-string diterima.';
$string['errorjwtinvalidheader'] = 'Header JWT tidak valid';
$string['errorjwtmalformed'] = 'JWT rusak diterima.';
$string['errorjwtunsupportedalg'] = 'JWS Alg atau JWE tidak didukung';
$string['errorlogintoconnectedaccount'] = 'Pengguna Microsoft 365 ini terhubung ke akun Moodle, tetapi login OpenID Connect tidak diaktifkan untuk akun Moodle ini. Silakan masuk ke akun Moodle menggunakan metode autentikasi akun yang ditentukan untuk menggunakan fitur Microsoft 365';
$string['errornodisconnectionauthmethod'] = 'Tidak dapat memutuskan sambungan karena tidak ada pengaya autentikasi yang diaktifkan untuk digunakan kembali. (baik metode log masuk pengguna sebelumnya atau metode log masuk manual).';
$string['erroroidccall'] = 'Kesalahan di OpenID Connect. Silakan periksa log untuk informasi lebih lanjut.';
$string['erroroidccall_message'] = 'Kesalahan dalam OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Titik akhir token harus menggunakan SSL / TLS untuk ini.';
$string['erroroidcclientinvalidendpoint'] = 'URI Endpoint yang diterima tidak valid.';
$string['erroroidcclientnocreds'] = 'Harap setel kredensial klien dengan setcreds';
$string['erroroidcnotenabled'] = 'Plugin otentikasi OpenID Connect tidak diaktifkan.';
$string['errorrestricted'] = 'Situs ini memiliki batasan pada pengguna yang dapat masuk dengan OpenID Connect. Pembatasan ini saat ini mencegah Anda menyelesaikan upaya log masuk ini.';
$string['errorucpinvalidaction'] = 'Tindakan tidak valid diterima.';
$string['event_debug'] = 'Pesan debug';
$string['eventuserauthed'] = 'Pengguna Resmi dengan OpenID Connect';
$string['eventuserconnected'] = 'Pengguna terhubung ke OpenID Connect';
$string['eventusercreated'] = 'Pengguna dibuat dengan OpenID Connect';
$string['eventuserdisconnected'] = 'Pengguna terputus dari OpenID Connect';
$string['eventuserloggedin'] = 'Pengguna Masuk dengan OpenID Connect';
$string['oidc:manageconnection'] = 'Izinkan Sambungan dan Pemutusan OpenID';
$string['oidc:manageconnectionconnect'] = 'Izinkan Koneksi OpenID';
$string['pluginname'] = 'Menghubungkan OpenID';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Metode login sebelumnya untuk membatalkan koneksi Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Metode login sebelumnya';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Kolom kata sandi pengguna sebelumnya (terenkripsi).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID pengguna Moodle';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Token kadaluwarsa';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'Token ID';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Pengenal pengguna unik OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Nama pengguna dari pengguna OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Token penyegaran';
$string['privacy:metadata:auth_oidc_token:userid'] = 'ID pengguna dari pengguna Moodle';
$string['ucp_login_start'] = 'Mulai gunakan {$a} untuk masuk ke Moodle';
$string['ucp_login_stop'] = 'Setop menggunakan {$a} untuk masuk ke Moodle';
$string['ucp_o365accountconnected'] = 'Akun Microsoft 365 ini sudah terhubung dengan akun Moodle lain.';
$string['ucp_status_disabled'] = 'Dinonaktifkan';
$string['ucp_status_enabled'] = 'Diaktifkan';
$string['ucp_title'] = 'Manajemen {$a}';
