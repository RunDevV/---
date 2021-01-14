<?php
    include "service/auth.php";
    require_once "service/class/user.class.php";
    $userClass = new User;
    require_once "service/user_record.php";
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
    <?php include "body/navbar.php"; ?>

    <div class="container mt-5">
        <div class="card border-0 shadow mb-3">
            <div class="card-body">
                <h3>เติมเงิน</h3>
                <hr>
                <div class="alert alert-success">
                    ระบบเติมเงินด้วย true wallet gift card

                </div>

                <form>
                    <div class="form-group">
                        <label>กรอกลิ้งซองของขวัญ</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn green-btn col-12">เติมเงิน</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card border-0 shadow">
            <div class="card-body">
                <h3>ประวัติการเติมเงิน</h3>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>จำนวนเงิน</th>
                            <th>วันที่</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>