<?php
    header("Content-type: application/json");

    require_once "class/user.class.php";
    $userClass = new User;

    if(isset($_POST['reg_user'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        
        $ip = $userClass->getIP();

        if(empty($username)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก ชื่อผู้ใช้"));
        }elseif(preg_match('/[^A-Za-z0-9]/', $username)){
            echo json_encode(array("status" => false, "message" => "ชื่อผู้ใช้ สามารถกรอกได้เเค่ภาษาอังกฤษเเละตัวเลขเท่านั้น"));
        }elseif(empty($email)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก อีเมล"));
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก อีเมล ให้ถูกต้อง"));
        }elseif(empty($password)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก รหัสผ่าน"));
        }elseif(strlen($password) < 7){
            echo json_encode(array("status" => false, "message" => "กรุณาตั้งรหัสผ่าน 6 หลักขึ้นไป"));
        }elseif(empty($confirmpassword)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก ยืนยันรหัสผ่าน"));
        }elseif($confirmpassword != $password){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก ยืนยันรหัสผ่าน ให้ถูกต้อง"));
        }else{
            if($userClass->varidate($username, $email)){
                $userClass->register($username, $email, $password, $ip);
                echo json_encode(array("status" => true, "message" => "สมัครสมาชิกสำเร็จ!!"));
            }else{
                echo json_encode(array("status" => false, "message" => "มี ชื่อผู้ใช้ หรือ อีเมล นี้ในระบบเเล้ว"));
            }
        }
      
    }

    
?>