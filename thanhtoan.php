<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/thanhtoan.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- JS -->
    <script src="./js/header.js"></script>
    <script src="js/thanhtoan.js"></script>
  </head>
  <body>
    <!-- Header -->
    <?php
    require_once "db_module.php";
    include "header.php";
    ?>
    <!--Hóa đơn-->
    <div class="wrapper">
      <div class="thong-tin-hoa-don">
        <h2>Thông tin hóa đơn</h2>
        <div class="info">
          <input type="text" placeholder="Email" class="email" disabled="disabled" readonly="readonly"/>
          <input type="text" placeholder="Họ tên" class="hoten" disabled="disabled" readonly="readonly"/>
          <input type="text" placeholder="SĐT" class="sdt" disabled="disabled" readonly="readonly"/>
        </div>
        <h3>Giao đến</h3>
        <input type="text" placeholder="Địa chỉ bạn muốn giao đến" />
        <h3>Ghi chú:<i style="font-size: smaller">(nếu có)</i></h3>
        <div class="ghichu">
          <input type="text" placeholder="Nói cho chúng tôi biết bạn đang nghĩ gì!"
          />
        </div>
      </div>
      <div class="hoa-don-cua-ban">
        <h2>Hóa đơn của bạn</h2>
        <div class="hd">
          <div> Tổng giá <span><b>1,500,000<sup>đ</sup></b></span></div>
          <div> Mã khuyến mãi <input type="text" placeholder="Nhập mã khuyến mãi" class="coupon"/></div>
          <div>Giảm giá <span><b>0<sup>đ</sup></b></span></div></div>
        <div>Tổng thanh toán<span><b>1,500,000<sup>đ</sup></b></span>
        </div>
        <h3>Thanh toán bằng</h3>
        <div class="phuong-thuc-thanh-toan">
          <input type="radio" id="opt1" name="opt" value="opt1" />
          <label for="opt1">Thanh toán khi nhận hàng</label>
          <br />
          <br />
          <div class="momo">
            <input type="radio" id="opt2" name="opt" value="opt2" />
            <label for="opt2">Cổng thanh toán MOMO</label>
            <img src="img/Logo MoMo.png" />
          </div>
        </div>
        <button type="submit" onclick="alert('Thanh toán thành công!')">
          <b>Thanh toán</b>
        </button><a href="giohang.php"><button type="reset"><b>Về giỏ hàng</b></button></a>
      </div>
    </div>
    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
  </body>
</html>
