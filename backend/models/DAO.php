<?php
    class DAO{
        public function __construct(protected $db = null){

            $params = 'mysql:host=localhost;dbname=projeto.sql';
            $this->db = new PDO($params,'root','');
        }
    }
?>