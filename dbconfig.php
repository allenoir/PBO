<?php
    class javadbconfig //deklarasi class
    { //method deklarasi variable private,hanya bisa diakses oleh class yang mendeklarasikan
        private $_host = 'localhost'; //anggota class
        private $_username = 'RPL'; //anggota class
        private $_password = ''; //anggota class
        private $_database = 'tugas_java'; //anggota class

    public $connection; //anggota class

    public function _construct() //fungsi dari class
    {
        if(!isset($this->connection)){
            

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            echo 'Connected to Database';
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }
        return $this->connection;
    }
}
$connection = mysqli_connect("localhost","usr","","testdb");        /* gak bisa pake yang class pak*/
function query($query) {
        global $connection;
        $result = mysqli_query($connection,$query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }