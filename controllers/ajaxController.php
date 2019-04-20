<?php

    class ajaxController extends controller {
        private $user;

        public function __contruct() {
            $this -> user = new Users();

            if(!$this -> user -> verifyLogin()) {
                $array = array(
                    'status' => '0'
                );

                echo json_encode($array);
                exit;
            }
        }

        public function index() {
            $data = array();
            $this -> loadTemplate('home', $data);
        }

        public function get_groups() {
            $array = array('status' => '1');
            $groups = new Groups();
            $array['list'] = $groups -> getList();

            echo json_encode($array);
        }
    }



?>