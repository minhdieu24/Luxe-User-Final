<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Trang sức cao cấp</title>
    <!-- GG Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="./css/thongtincanhan.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- Scripts -->
    <script src="./js/quanlymatkhau.js"></script>
    <script src="./js/header.js"></script>
</head>
<body>
    <!-- Header -->
    <header id="header"></header>
    <script>
      load("#header", "./template/header.html");
    </script>
    <!-- BODY -->
    <main class="main-inner">
        <!--left-section -->
        <div class="side-bar">
          <a href="index.html">
          <div class="arrow">
              <img class="arrow-icon" src="./icon/QLmatkhau-arrowleft.svg"/>
              <div class="account-text">Quản lý tài khoản</div>
          </div>
        </a>
        <a href="quanlymatkhau.php">
          <button class="wrapper-1">
            <img class="pass-manage" src="./icon/QLmatkhau-iconpass.svg"/>
            <div class="bar-text">Quản lý mật khẩu</div>
        </button>
        </a>
        <a href="thongtincanhan.php">
          <button class="wrapper-2">
            <img class="personal-info" src="./icon/QLmatkhau-iconpersonalinfo.svg"/>
            <div class="bar-text">Thông tin cá nhân</div>
        </button>
        </a>
        <a href="dangnhap.php">
          <button class="wrapper-1">
            <img class="personal-info" src="./icon/ttcn-closecircle.svg"/>
            <div class="bar-text">Đăng xuất</div>
        </button>
        </a>
      </div>
        <!--Right-->
        <div class="right-bar">
            <div class="title">Thông tin cá nhân</div>
            <div class="right1">
                <div class="upload-container">
                        <img src="./img/ttcn-default-avatar.jpg" id="profile-pic">
                        <label for="image-upload"> <b>Tải lên ảnh của bạn</b></label>
                        <input type="file" id="image-upload" accept=".png, .jpg, .jpeg" />
                </div>
                <script>
                    let profilePic = document.getElementById("profile-pic");
                    let inputFile = document.getElementById("image-upload");
                    inputFile.onchange = function(){
                        profilePic.src = URL.createObjectURL(inputFile.files[0]);
                    }
                </script>
            </div>
            <div class="right2">
            <form action="#">
                <div class="user-details">
                    <!--NAME-->
                    <div class="input-box">
                        <b>
                        <span class="text">Họ tên</span>
                        <span class="span"> *</span>
                        </b>
                      <input class="box" type="text" required/>
                    </div>
                    <!--EMAIL-->
                    <div class="input-box">
                      <b>
                        <span class="text">Email</span>
                        <span class="span"> *</span>
                        </b>
                      <input class="box" type="email"/>
                  </div>
                    <!--GENDER-->
                    <div class="input-box">
                        <b>
                        <span class="text">Giới tính</span>
                        <span class="span"> *</span>
                        </b>
                        <select class="box" required>
                          <option value="Nam">Nam</option>
                          <option value="Nữ">Nữ</option>
                      </select>
                    </div>
                    <!--NUMBER-->
                    <div class="input-box">
                      <b>
                      <span class="text">Số điện thoại</span>
                      <span class="span"> *</span>
                      </b>
                    <input class="box" type="text" pattern="[0-9]{10}" title="Vui lòng nhập đủ 10 số" required/>
                  </div>
                  <!--DOB-->
                    <div class="input-box">
                      <b>
                      <span class="text">Ngày sinh</span>
                      <span class="span"> *</span>
                      </b>
                      <input type="date" required/>
                  </div>
                    <!--ADDRESS-->
                    <div class="input-box">
                      <b>
                          <span class="text">Địa chỉ</span>
                      </b>
                      <input type="text"/>
                  </div>
        <!--signin-right
        <div class="right-bar">
            <form class="pass-info">
                <h1 class="title">Thông tin cá nhân</h1>
              <div class="-->

              <div class="button">
                <button class="button-save">
                  <b class="button-save-text">Lưu</b>
                </button>
                <!--<div class="divider">
                    <div class="divider-1"></div>
                    <div class="or">Hoặc</div>
                    <div class="divider2"></div>
                </div>-->
                <!--<div class="forget-pass">
                    <a href="http://">Quên mật khẩu</a>
                </div>-->
            </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer" id="footer"></footer>
    <script>
      load("#footer", "./template/footer.html");
    </script>
</body>
</html>