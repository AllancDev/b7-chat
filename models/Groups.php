<?php

    class Groups extends Model {
        
        public function getList() {
            $array = array();

            $sql = "SELECT * FROM tb_groups ORDER BY name ASC";
            $sql = $this -> db -> query($sql);

            $array = $sql -> fetchAll();

            return $array;
        }

    }
