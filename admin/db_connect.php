<?php
class databases {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "universitas";
    var $koneksi;
    
    // Awal fungsi koneksi ke databases 
    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database) or die("failed");
    }
    // Akhir fungsi koneski ke databases

    // Awal Fungsi unuk membuat Member
    public function register($nama,$username,$password,$nomber,$email,$jabatan,$foto) {
        $insert = mysqli_query($this->koneksi,"INSERT INTO tb_users VALUES (DEFAULT,'$nama','$username','$password','$nomber','$email','$jabatan','$foto')");
        return $insert;
    }
    // Akhir fungsi untuk menambahkan member


    //  Awal Fungsi Login admin 
    public function login($username,$password,$remember) {
        $query = mysqli_query($this->koneksi,"SELECT * FROM tb_users where username='$username'");
        $data_users = mysqli_fetch_assoc($query);
        // Validasi Paassword untuk user yang akan login
        if(password_verify($password,$data_users['password'])) {
            // validasi jabatan user yang login 
                // jika yang login adalah user dengan jabatan admin
                $_SESSION['username'] = $username;
                $_SESSION['nama'] = $data_users['nama'];
                $_SESSION['jabatan'] = $data_users['jabatan'];
                $_SESSION['nomber'] = $data_users['nomber'];
                $_SESSION['is_login'] = TRUE;
                return TRUE;

            // Fungsi Remember Passoword 
            if($remember) {
                setcookie('username', $username, time() + (60 * 60 *24 *5), '/');
                setcookie('jabatan', $data_users['jabatan'], time() + (60 * 60 * 24 * 5), '/');
            }
        }
    }
    // Akhir fungsi login admin

    // Awal Fungsi Relogin untuk users
    public function relogin($username) {
        $query = mysqli_query($this->koneksi,"SELECT * FROM tb_users where username='$username'");
        $data_users = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data_users['nama'];
        $_SESSION['jabatan'] = $data_users['jabatan'];
        $_SESSION['is_login'] = TRUE;
    }
    // Akhir fungsi relogin

    // // Awal fungsi validasi images 
    // public function imagevalid()
    // // Akhir fungsi validasi images


    // Awal fungsi menampilkan user yang aktif
    public function online($session,$username) {
        // Cheking user Session
        $cheking = mysqli_query($this->koneksi,"SELECT * FROM tb_session WHERE sesi='$session' AND username='$username'");
        $result = mysqli_num_rows($cheking);

        // kondisi untuk proses cheking user session
        if ($result == "0") {
            // kondisi jika session dari user tidak ada di dalam databases
            $insert = mysqli_query($this->koneksi,"INSERT INTO tb_session VALUE (DEFAULT,'$session','$username')");
            return $insert;
        }
        // ini dipindah ke dasboard admin
        // $aktif = mysqli_query($this->koneksi,"SELECT * FROM tb_session");
        // $hasil = mysqli_num_rows($aktif);
        // echo $hasil;
    }
    // Akhir fungsi menampilkan user yang aktif

    // fucntion count user
    public function loaduser() {
        $user = mysqli_query($this->koneksi,"SELECT * FROM tb_session");
        $jumblah = mysqli_num_rows($user);
        // $number = sprintf('%04d',$jumblah);
        $number = str_pad($jumblah, 4, '0,', STR_PAD_LEFT);
        echo $number;
                    
    }

    // fucntion untuk menghapus session user yang sudah logout dari dari databases
    public function offline($session,$username) {
        $hancur = mysqli_query($this->koneksi,"DELETE FROM tb_session WHERE sesi='$session' AND username='$username'");
        return $hancur;                         
    }

    function insertpengunjung($session,$tanggal,$ipaddress) {
        $insert = mysqli_query($this->koneksi,"INSERT INTO tb_pengunjung VALUES (DEFAULT,'$session','$tanggal','$ipaddress')");
        return $insert;
    }

    // fungsi unutkk menampilkan jumblah pengunjung website dari databases
    public function loadpengunjung() {
        $pengunjung = mysqli_query($this->koneksi,"SELECT * FROM tb_pengunjung");
        $count = mysqli_num_rows($pengunjung);
        $number = str_pad($count, 5, '0,', STR_PAD_LEFT);
        echo $number;
    }

    // fungsi ini unutk menampilkan jumblah data pengunjung dari bulan ke bulan
    public function perbulan($bulan) {
        $query = mysqli_query($this->koneksi,"SELECT * FROM tb_pengunjung WHERE month(tanggal)='$bulan'");
        $count = mysqli_num_rows($query);
        echo $count;
    }

    // awal dari fungsi berita
    public function Tambahberita($judul_berita,$isi_berita,$image_berita) {
        $query = mysqli_query($this->koneksi,"INSERT INTO tb_berita VALUES (DEFAULT,'$judul_berita','$isi_berita','$image_berita')");
        return $query;
    }
    
    // akhir fungsi berita
    
}
?>