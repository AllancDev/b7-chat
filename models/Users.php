<?php


    class Users extends Model {

        private $uid;

        public function verifyLogin() {
            if(!empty($_SESSION['chathashlogin'])) {
                $s = $_SESSION['chathashlogin']; // ARMAZENANDO SESSÃO
                
                $sql = "SELECT * FROM tb_users WHERE loginhash = :hash";
                $sql = $this -> db -> prepare($sql);
                $sql -> bindValue(":hash", $s);
                $sql -> execute();

                if($sql -> rowCount() > 0) {
                    $data = $sql -> fetch();
                    $this -> uid = $data['id'];
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }
        }

        public function validateUsername($u) {
            if(preg_match('/^[a-z0-9]+$/', $u)) {
                return true;
            } else {
                return false;
            }
        }

        public function userExists($u) {
            $sql = "SELECT * FROM tb_users WHERE username = :u";
            $sql = $this -> db -> prepare($sql);
            $sql -> bindValue(":u", $u);
            $sql -> execute();

            if($sql -> rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function registerUser($username, $pass) {
            $newpass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO tb_users (username, password) VALUES (:u, :p)";
            $sql = $this -> db -> prepare($sql);
            $sql -> bindValue(":u", $username);
            $sql -> bindValue(":p", $newpass);
            $sql -> execute();
        }

        public function validateUser($username, $pass) {

            $sql = "SELECT * FROM tb_users WHERE username = :username";
            $sql = $this -> db -> prepare($sql);
            $sql -> bindValue(":username", $username);
            $sql -> execute();
            
            if($sql -> rowCount() > 0 ) {
                $info = $sql -> fetch();
                if(password_verify($pass, $info['password'])) {

                    $loginhash = md5(rand(0, 99999) . time() . $info['id'] . $info['username']);
                    $this -> setLoginHash($info['id'], $loginhash);
                    $_SESSION['chathashlogin'] = $loginhash;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        

        public function setLoginHash($uid, $hash) {
            $sql = "UPDATE tb_users SET loginhash = :hash WHERE id = :id";
            $sql = $this -> db -> prepare($sql);
            $sql -> bindValue(":hash", $hash);
            $sql -> bindValue(":id", $uid);
            $sql -> execute();
        }

        public function getUid() {
            return $this -> uid;
        }

    }