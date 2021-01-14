<?php
    header("Content-type: application/json");
    session_start();
    require_once "class/user.class.php";
    $userClass = new User;

    if(isset($_POST['log_user'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if(empty($username)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก ชื่อผู้ใช้"));
        }elseif(preg_match('/[^A-Za-z0-9]/', $username)){
            echo json_encode(array("status" => false, "message" => "ชื่อผู้ใช้ สามารถกรอกได้เเค่ภาษาอังกฤษเเละตัวเลขเท่านั้น"));
        }elseif(empty($password)){
            echo json_encode(array("status" => false, "message" => "กรุณากรอก รหัสผ่าน"));
        }else{
            if($userClass->login($username, $password)){
                echo json_encode(array("status" => true, "message" => "เข้าสู่ระบบสำเร็จ"));
            }else{
                echo json_encode(array("status" => false, "message" => "ชื่อผู้ใช้หรือรหัสผ้านไม่ถูกต้อง"));
            }
        }
      
    }

    
?>