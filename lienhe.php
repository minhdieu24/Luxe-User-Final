<!DOCTYPE html>
<html lang="vn">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/lienhe.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/header.js"></script>
    <script src="./js/hotro.js"></script>
  </head>
  <body>
    <!--  Header -->
    <?php
      require_once "db_module.php";
      include "header.php"
    ?>
    <!-- Slider Section -->
    <!--Thông tin liên hệ-->
    <div class="contact-container">
      <div class="contact-info">
        <div class="contact-info-content">
          <div class="contact-info-wrapper">
            <div class="contact-info-inner">
              <h1 class="contact-title">Giải đáp <br /> với LUXE</h1>
              <h2 class="contact-subtitle">Thông tin liên hệ</h2>
              <p class="contact-description">Hãy liên hệ với chúng tôi nếu bạn cần hỗ trợ!</p>
              <div class="contact-phone">
                <img src="./icon/lienhe-call.svg" alt="" />
                <p class="contact-phone-number">(+84) 046 990 809</p>
              </div>
              <div class="contact-email">
                <img src="./icon/lienhe-sms.svg" alt=""/>
                <p class="contact-email-address">luxecompany@gmail.com</p>
              </div>
              <div class="contact-address">
                <img src="./icon/lienhe-location.svg" alt=""/>
                <p class="contact-address-text">279 Nguyễn Tri Phương, Phường 5, Quận 10, TP.HCM</p>
              </div>
            </div>
            <!-- Map -->
            <div class="g-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6526865456135!2d106.66587187457473!3d10.761227759474846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee4ecfa255d%3A0x9e5ec3fa6801b7d6!2zMjc5IMSQLiBOZ3V54buFbiBUcmkgUGjGsMahbmcsIFBoxrDhu51uZyA1LCBRdeG6rW4gMTAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1710851554948!5m2!1svi!2s" style="border: 1px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="g-map"></iframe>
            </div>
          </div>
        </div>
      </div>
      <!--Form liên hệ-->
      <div class="contact-form">
        <div class="contact-form-content">
          <form class="contact-form-wrapper" method="post">
            <p class="contact-form-description">Vui Lòng Nhập Thông Tin Và Nội Dung Cần Hỏi Đáp. Chúng Tôi Sẽ Liên Lạc Với Bạn Sớm Nhất Có Thể !</p>
            <label for="name" class="contact-form-label">Họ và Tên*</label>
            <input type="text" id="name" name="name" class="contact-form-input" />
            <label for="phone" class="contact-form-label-phone">Số điện thoại*</label>
            <input type="tel" id="phone" name="phone" class="contact-form-input-phone" />
            <label for="email" class="contact-form-label-email">Email*</label>
            <input type="email" id="email" name="email" class="contact-form-input-email" />
            <label for="address" class="contact-form-label-address">Địa chỉ*</label>
            <input type="text" id="address" name="address" class="contact-form-input-address" />
            <label for="message" class="contact-form-label-message">Nội dung cần hỏi đáp*</label>
            <textarea id="message" name="message" class="contact-form-textarea"></textarea>
            <button type="submit" name="submit" class="contact-form-submit">Gửi</button>
          </form>
          <!-- Bắt PT POST khi đăng ký liên hệ -->
          <?php
            $link = null;
            taoKetNoi($link);
            if(isset($_POST["submit"])){
              $_ho_ten = $_POST["name"];
              $_so_dien_thoai = $_POST["phone"];
              $_email = $_POST["email"];
              $_dia_chi = $_POST["address"];
              $_noi_dung_thac_mac = $_POST["message"];
            //Tạo câu lệnh SQL thêm vào bảng tbl_lienhe
            $sql_dangky = "INSERT INTO tbl_lienhe (ho_ten, so_dien_thoai, email, dia_chi, noi_dung_thac_mac) VALUES ('$_ho_ten', '$_so_dien_thoai', '$_email', '$_dia_chi', '$_noi_dung_thac_mac')";
            //Kiểm tra biến có dữ liệu hay không
            if($_ho_ten !== "" && $_so_dien_thoai !== "" && $_email !== "" && $_dia_chi !== "" && $_noi_dung_thac_mac !== ""){
              $rs_dangky = chayTruyVanKhongTraVeDL($link, $sql_dangky);
              // Kiểm tra insert
              if($rs_dangky){
                  echo "<script>alert('Gửi thành công');</script>";
              } else {
                  echo "<script>alert('Gửi thất bại');</script>";
              }
              giaiPhongBoNho($link,$rs_dangky);
            }          
            }
          ?>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
  </body>
</html>