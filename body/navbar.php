<nav class="navbar navbar-expand-lg navbar-light bg-white p-4">
    <div class="container">

        <a class="navbar-brand" href="./">
           IDSHOP
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">ร้านค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="topup">เติมเงิน</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php echo $rowUser['username']; ?>
                    </a>
                    <div class="dropdown-menu p-2" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="history">ประวัติการสั่งซื้อ</a>
                        <a class="dropdown-item" href="#">ตั้งค่าบัญชี</a>
                        <div class="dropdown-divider"></div>
                        <button class="btn btn-danger col-12" id="logout">ออกจากระบบ</button>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link bg-white shadow-sm" href="#"><?php echo $rowUser['money']; ?> บาท</a>
                </li>
            </ul>

        </div>
    </div>
</nav>