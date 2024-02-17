<?php
class Connection {
    private static $instance;
    private $mysqli;

    private function __construct() {
        $this->createConnection();
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function createConnection() {
         // Mendapatkan path ke file konfigurasi (dianggap tetap)
         $configFilePath = '../../config.json';

         // Melakukan load konfigurasi
         $configJson = file_get_contents($configFilePath);
         $data = json_decode($configJson, true);
 
         // Menggunakan nilai-nilai konfigurasi
         $dbName = $data['ConnectionString']['DbName'];
         $username = $data['ConnectionString']['Username'];
         $password = $data['ConnectionString']['Password'];
         $sqlConnection = $data['ConnectionString']['SqlConnection'];
 
         // Anda dapat menyimpan nilai-nilai konfigurasi ini sebagai properti
         // di kelas ini sesuai kebutuhan
        // Menggunakan nilai-nilai konfigurasi untuk membuat koneksi
        $this->mysqli = new mysqli($sqlConnection, $username, $password, $dbName);

        // Periksa koneksi
        if ($this->mysqli->connect_error) {
            die('Koneksi gagal: ' . $this->mysqli->connect_error);
        }
    }

    public function getConnection() {
        return $this->mysqli;
    }

    public function closeConnection() {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }

    public static function getStaticConnection() {
        $instance = self::getInstance();
        return $instance->getConnection();
    }
}
?>
