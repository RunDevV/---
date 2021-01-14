<?php
    require_once "db.php";
    class User extends DB {

        public function getIP() {
            $ip = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ip = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ip = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ip = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ip = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
               $ip = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ip = getenv('REMOTE_ADDR');
            else
                $ip = 'UNKNOWN';
            return $ip;
        }

        public function varidate($username, $email){
            $sql = $this->db->prepare("SELECT username, email FROM users WHERE username = :username or email = :email");
            $sql->execute(array(
                ":username" => $username,
                ":email" => $email
            ));

            if($sql->rowCount() > 0){
                return false;
            }else{
                return true;
            }
        }

        public function register($username, $email, $password, $ip){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = $this->db->prepare("INSERT INTO users (username, email, password, ip) VALUES (:username, :email, :password, :ip)");
            $sql->execute(array(
                ":username" => $username,
                ":email" => $email,
                ":password" => $password,
                ":ip" => $ip
            ));
            return true;
        }

        public function login($username, $password){
            $sql = $this->db->prepare("SELECT * FROM users WHERE username = :username");
            $sql->execute(array(":username" => $username));
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if($sql->rowCount() > 0){
                if(password_verify($password, $row['password'])){
                    $_SESSION['uid'] = $row['id'];
                    $_SESSION['user_status'] = $row['status'];
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

      public function userRecord($id){
          $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
          $sql->execute(array(":id" => $id));
          return $sql;
      }

      



        


    }
?>