<?php
    class DB {
        private $DB_SERVER = "localhost";
        private $DB_USER = "root";
        private $DB_PASSWORD = "123";
        private $DB_NAME = "idshop";

        protected $db;

        public function __construct(){
            $this->db = $this->connect();
        }

        protected function connect(){
            $dns = "mysql:host={$this->DB_SERVER};dbname={$this->DB_NAME}";
            $db = new PDO($dns, $this->DB_USER, $this->DB_PASSWORD);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }
?>