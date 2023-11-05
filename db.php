<?php

class Database {
    public $con;

    public function __construct(
        $server = 'localhost',
        $username = 'root',
        $password = '',
        $db = 'dbban',
    ) {
        // koneksi DB
        $this->con = mysqli_connect($server, $username, $password, $db);

        // cek apakah db berhasil terkoneksi
        if(!$this->con){
            die('Koneksi Gagal:' .mysqli_connect_error());
        }
    }

    public function query ($sql) {
        $result = mysqli_query($this->con, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
    }
            return $rows;
    }
    public function registrasi ($sql) {
        $name = stripcslashes($sql["nama_lengkap"]);
        $email = stripcslashes($sql["email"]);
        $username = stripcslashes($sql["usernameid"]);
        $password = mysqli_real_escape_string($this->con, $sql["password"]);
        $passwordconfr = mysqli_real_escape_string($this->con, $sql["passwordconfr"]);

        // Fitur check user apakah ada yang sama
        $query = "SELECT usernameid FROM usertb WHERE usernameid  = '$username'";

        $result = mysqli_query($this->con, $query);
        if(mysqli_fetch_assoc($result)){
            echo "<script>
              alert('Username sudah terpakai!');
            </script>";
      return false;
        }

        if($password !== $passwordconfr) {
            echo "<script>
              alert('Password & Konfirmasi Password yang anda masukkan tidak sama');
            </script>";
      return false;
        }
        // fitur hash untuk mengenkripsi password dalam database
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // jika semua lolos maka regist form akan di masukan ke DB
        mysqli_query($this->con, "INSERT INTO usertb VALUES('','$name', '$email','$username','$hash', '')");
        
        return mysqli_affected_rows($this->con);
    }

}
   
        
    


?>