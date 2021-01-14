<?php
    include "service/auth_opposite.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idshop</title>
    <?php include "body/head.php"; ?>
</head>

<body>

    <div class="content_form d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5">
                    <div class="card border-0 shadow p-3">
                        <div class="card-body">
                            <div class="text-center mb-4">
                            </div>
                            <div class="card-title text-center mb-5 p-2">
                                <h3>สมัครสมาชิก</h3>
                            </div>

                            <form id="form-register">
                                <div class="form-group mb-4">
                                    <input type="text" id="username" class="form-control" placeholder="ชื่อผู้ใช้">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" id="email" class="form-control" placeholder="อีเมล">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" id="password" class="form-control" placeholder="รหัสผ่าน">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" id="confirmpassword" class="form-control"
                                        placeholder="ยืนยันรหัสผ่าน">
                                </div>
                                <div class="form-group mb-4">
                                    <button class="btn red-btn col-12 p-2">สมัครสมาชิก</button>
                                </div>
                            </form>
                            <div class="row">
                                <hr class="col">
                                OR
                                <hr class="col">
                            </div>
                            <a href="./" class="btn green-btn col-12 p-2">เข้าสูู่ระบบ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
    $(document).ready(function() {

        $("#username").keypress(function(event) {
            var ew = event.which;
            if (ew == 32)
                return true;
            if (48 <= ew && ew <= 57)
                return true;
            if (65 <= ew && ew <= 90)
                return true;
            if (97 <= ew && ew <= 122)
                return true;
            return false;
        });

        $("#form-register").on("submit", function(e) {
            e.preventDefault()
            var username = $("#username").val()
            var email = $("#email").val()
            var password = $("#password").val()
            var confirmpassword = $("#confirmpassword").val()

            $.ajax({
                type: "POST",
                url: "service/register.php",
                data: {
                    username: username,
                    email: email,
                    password: password,
                    confirmpassword: confirmpassword,
                    reg_user: true
                },
                success: function(resp) {
                    if (resp.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ',
                            text: resp.message
                        }).then(() => {
                            window.location = "./";
                        })
                    } else {
                        Toastify({
                            text: resp.message,
                            close: true,
                            duration: 3000,
                            backgroundColor: "#eb3b5a"

                        }).showToast();
                    }
                }
            })

        })
    })
    </script>
</body>

</html>

tanakorn190605@gmail.com