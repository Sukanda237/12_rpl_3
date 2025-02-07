<?php



//inisialisasi kelas atau membuat kelas diusahakan nama kelas sama dengan nama file
class koneksi
{

    // access modifier atau modifier akses digunakan untuk menentukan tingkat aksesibilitas atau visibilitas properti dan metode dalam sebuah kelas : 
    //public -> Modifier ini memungkinkan properti atau metode diakses dari mana saja: dari dalam kelas, dari kelas turunan, dan dari luar kelas, 
    //private ->Modifier ini memungkinkan properti atau metode hanya dapat diakses dari dalam kelas itu sendiri, 
    //protected ->Modifier ini memungkinkan properti atau metode diakses hanya dari dalam kelas itu sendiri dan dari kelas yang mewarisinya (kelas turunan)

    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $database = "latihan_xirpl2"; //nama database disesuaikan dengan yang digunkan

    // berfungsi untuk mengembalikan nilai dari koneksi ke database jika koneksinya berhasil
    public $koneksi;

    // Dalam pemrograman berorientasi objek (OOP) di PHP, fungsi __construct adalah metode khusus yang disebut constructor. Fungsi ini secara otomatis dipanggil ketika sebuah objek dari kelas dibuat. Konstruktor berfungsi untuk menginisialisasi nilai awal atau melakukan tindakan tertentu saat objek dibuat, seperti menetapkan nilai properti atau menyiapkan koneksi ke database.

    function __construct()
    {

        // untuk membuat koneksi ke database kita menggunakan fungsi fungsi bawaan dari php mysqli_connect(server, username, pass, database);

        $this->koneksi =  mysqli_connect($this->server, $this->username, $this->pass, $this->database);

        //buat memilih database yang akan kita gunakan
        mysqli_select_db($this->koneksi, $this->database);

        if ($this->koneksi) {
            // echo "Koneksi ke database " . $this->database . " berhasil";

            //mengembalikan nilai koneksi jika koneksinya berhasil
            return $this->koneksi;
        } else {
            echo "Koneksi kedatabase gagal !";
        }
    }
}
// $koneksi = new koneksi();
