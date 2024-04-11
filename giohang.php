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
    <link rel="stylesheet" href="css/giohang.css" />
    <link rel="stylesheet" href="css/responsinve.css" />
    <!-- Scripts -->
    <script src="./js/giohang.js"></script>
  </head>
  <body>
    <?php
      require_once "db_module.php";
    ?>
    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Mobile menu -->
          <button class="hamburger-menu" onclick="burgerFunction()">
            <img src="./icon/burger.svg" alt="" />
          </button>
          <script src="./js/scripts.js"></script>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul id="PC_nav">
              <li><a href="#!">TRANG CHỦ</a></li>
              <li><a href="#!">SẢN PHẨM</a></li>
              <li><a href="#!">VỀ CHÚNG TÔI</a></li>
              <li><a href="#!">HỖ TRỢ</a></li>
              <li><a href="#!">LIÊN HỆ</a></li>
            </ul>
          </nav>


          <!-- Action -->
          <div class="top-act">
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/search.svg" alt="" />
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/heart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/cart.svg" alt="" />
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <img src="./icon/user.svg" alt="" />
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn mode" onclick="darkFunction()">
                <img src="./icon/mode.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Mobile Header -->
    <header class="mobile-header">
      <div class="menu-overlay" onclick="burgerFunction()"></div>
      <!-- Menu-content -->
      <div class="menu-drawer">
        <button class="navbar-close" onclick="burgerFunction()">
          <img src="./icon/arrow-left.svg" alt="" />
        </button>
        <hr>
        <nav class="navbar-mobile">
          <ul id="mobile_nav" >
            <script>
              const pcNav = document.querySelector("#PC_nav");
              const mobileNav = document.querySelector("#mobile_nav");
              //Copy from PC nav to Mobile nav
              mobileNav.innerHTML = pcNav.innerHTML;
            </script>
            <!-- Dùng JS copy ul từ PC qua mobile -->
          </ul>
          
        </nav>
        
        <hr>
        <!-- Action -->
        <div class="top-act">
            <button class="top-act-btn">
              <img src="./icon/search.svg" alt="" />
            </button>
            <button class="top-act-btn">
              <img src="./icon/heart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/cart.svg" alt="" />
              <span class="top-act-title"> 03 </span>
            </button>
            <button class="top-act-btn">
              <img src="./icon/user.svg" alt="" />
            </button>
            <button class="top-act-btn mode" onclick="darkFunction()">
              <img src="./icon/mode.svg" alt="" />
            </button>
        </div>
      </div>
    </header>

    <!-- Product detail -->
    <div class="product-container">
      <header style="font-size: 45px; font-weight: bold; padding-top: 25px; ">Giỏ hàng</header>
      <?php

        $link = null;
        taoKetNoi($link); 
        $tong_gia_tri = 0;
        $query = "SELECT c.ma_san_pham, c.so_luong, c.gia_tri, s.ten_san_pham, d.ten_danh_muc, b.ten_bien_the, COUNT(r.ma_review) AS tong_so_sao, AVG(r.so_sao) AS so_sao_trung_binh
                  FROM tbl_chitiet_giohang AS c
                  INNER JOIN tbl_sanpham AS s ON c.ma_san_pham = s.ma_san_pham
                  INNER JOIN tbl_danhmuc AS d ON s.ma_danh_muc = d.ma_danh_muc
                  INNER JOIN tbl_bienthe AS b ON c.ma_bien_the = b.ma_bien_the
                  LEFT JOIN tbl_review AS r ON c.ma_san_pham = r.ma_san_pham
                  WHERE c.ma_gio_hang = 1
                  GROUP BY c.ma_san_pham, s.ten_san_pham, d.ten_danh_muc, b.ten_bien_the";

        $product = chayTruyVanTraVeDL($link, $query);
        while ($row = mysqli_fetch_assoc($product)){
                $ten_danh_muc = $row["ten_danh_muc"];
                $ten_san_pham = $row["ten_san_pham"];
                $so_sao_trung_binh = $row["so_sao_trung_binh"];
                $tong_so_sao = $row["tong_so_sao"];
                $gia_tri = $row["gia_tri"];
                $ten_bien_the = $row["ten_bien_the"];
                $so_luong = $row["so_luong"];

                $tong_gia_tri += $gia_tri;
      ?>
    <!-- Product 1-->
      <div class="product-detail">
        <!-- Product image -->
        <div class="product-inf__image">
          <img src="./icon/giohang-delete.svg" alt="" />
          <div class="frame-img">
            <img src="img/3H0-1.webp" alt="" class="product-inf__image1" />
          </div>
        </div>
        <!-- Product information -->
        <div class="product-inf__word">
          <p class="product-card__collection" style="color: var(--text-color-3);"><?php echo $ten_danh_muc; ?></p>
          <p class="product-inf__title"><?php echo $ten_san_pham; ?></p>
          <div class="product-inf__star">
            <img src="./icon/giohang-star.svg" alt="" />
            <?php  echo '<p style="color: var(--text-color-dark);">' . number_format($so_sao_trung_binh, 1) . ' (' . $tong_so_sao . ')</p>'; ?>
          </div>
          <!--<p class="product-inf__price">2.549.000 VNĐ</p>-->
          <div class="product-price">
            <span class="product-inf__price"><?php echo number_format($gia_tri, 0, ',', '.'); ?> VNĐ</span>
          </div>
          <div class="underline"></div>
          <div class="size">
            <p style="color: var(--product-detail-text-color-dark);">Size: </p>
            <div class="size-dropdown">
              <div class="selected-size"><?php echo $ten_bien_the; ?></div>
            </div>           
          </div>
          <!-- Decrease or Increase quantity -->
          <div class="quantity">
            <table>
              <tr>
                <td class ="dec-ins" onclick="Decrease()">-</td>
                <td id="count" class="dec-ins count"><?php echo $so_luong; ?></td>
                <td class ="dec-ins" onclick="Increase()">+</td>
              </tr>
            </table>
          </div>
        </div> 
      </div>
      <?php
          }
        ?>
    <!-- Total product-->
    <div class="total-line">
      <div>
        <form style="margin-left: 90px;">
          <label style="font-size: 20px; font-weight: bold; color: var(--text-color-dark);">
            <img src="./icon/giohang-delete.svg" alt="" />
            Tất cả
          </label>
        </form>
      </div>
      <div class="total-tong">
        <div class="total-tam">
          <p style="font-size: 20px; font-weight: bold; color: var(--text-color-dark);">Tạm tính: </p>
          <p style="font-size: 20px; font-weight: bold; color: coral;"><?php echo number_format($tong_gia_tri, 0, ',', '.'); ?> VNĐ</p>
        </div>
        <p style="color: var(--text-color-dark);">(Đã bao gồm thuế VAT)</p>
        <!-- Button MUA HÀNG -->
        <a href="#!" class="btn them">MUA HÀNG</a>
      </div>
    </div>
        <!-- Similar products -->
        <div class="similar-container">
          <p class="product-inf__title__1">CÓ THỂ BẠN CŨNG THÍCH</p>
          <div class="product-home">
    
            <!-- Product 1 -->
            <div class="product-item">
                <div class="product-card">
                    <div class="product-card__img-wrap">
                        <a href="./product-detail.html">
                            <img src="img/8D1-1.webp" alt="" class="product-card__thumb" />
                        </a>
                        <button class="like-btn">
                            <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                        </button>
                    </div>
                    <h3 class="product-card__title">
                        <a href="./product-detail.html">Nhẫn NDINO 8D1</a>
                    </h3>
                    <p class="product-card__collection">Nhẫn cưới</p>
                    <div class="product-card__row">
                      <span class="product-card__price">2.100.000đ</span>
                      <span class="product-card__price-sales">2.500.000đ</span>
                      <img src="./icon/star.svg" alt="" class="product-card__star" />
                      <span class="product-card__score">4.3</span>
                    </div>
                </div>
            </div>
    
            <!-- Product 2 -->
            <div class="product-item">
              <div class="product-card">
                  <div class="product-card__img-wrap">
                      <a href="./product-detail.html">
                          <img src="img/5N3-1.webp" alt="" class="product-card__thumb" />
                      </a>
                      <button class="like-btn">
                        <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                      </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn NDINO 5N3</a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                    <span class="product-card__price">3.500.000đ</span>
                    <span class="product-card__price-sales">4.000.000đ</span>
                    <img src="./icon/star.svg" alt="" class="product-card__star" />
                    <span class="product-card__score">4.5</span>
                  </div>
              </div>
            </div>
    
              <!-- Product 3 -->
            <div class="product-item">
                <div class="product-card">
                    <div class="product-card__img-wrap">
                        <a href="./product-detail.html">
                            <img src="img/2N5-1.webp" alt="" class="product-card__thumb" />
                        </a>
                        <button class="like-btn">
                          <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                        </button>
                    </div>
                    <h3 class="product-card__title">
                        <a href="./product-detail.html">Nhẫn NDINO 2N5</a>
                    </h3>
                    <p class="product-card__collection">Nhẫn cưới</p>
                    <div class="product-card__row">
                      <span class="product-card__price">3.100.000đ</span>
                      <span class="product-card__price-sales">3.690.000đ</span>
                      <img src="./icon/star.svg" alt="" class="product-card__star" />
                      <span class="product-card__score">4.9</span>
                    </div>
                </div>
            </div>
    
            <!-- Product 4 -->
            <div class="product-item">
              <div class="product-card">
                <div class="product-card__img-wrap">
                    <a href="./product-detail.html">
                        <img src="img/9K6-1.webp" alt="" class="product-card__thumb" />
                    </a>
                    <button class="like-btn">
                      <img src="./icon/heart.svg" alt="" class="like-icon icon" />
                    </button>
                  </div>
                  <h3 class="product-card__title">
                      <a href="./product-detail.html">Nhẫn NDINO 9K6</a>
                  </h3>
                  <p class="product-card__collection">Nhẫn cưới</p>
                  <div class="product-card__row">
                  <span class="product-card__price">5.200.000đ</span>
                  <span class="product-card__price-sales">6.390.000đ</span>
                  <img src="./icon/star.svg" alt="" class="product-card__star" />
                  <span class="product-card__score">4.7</span>
                </div>
            </div>
          </div>
        </div>
        <!-- Button xem thêm -->
        <a href="#!" class="btn home-product">Xem thêm</a>
    </div>
        <!-- Footer -->
    <footer class="footer">
      <div class="footer-row">
        <div class="container">
          <div class="footer-column">
            <!-- Logo -->
            <a href="./" class="logo-foot">
              <img src="./icon/Logo.svg" alt="Luxe" />
              <h1 class="logo-title">Luxe</h1>
            </a>
            <!-- Download app -->
            <div class="download-container">
              <p class="download-title">
                Tải ngay Luxe app
              </p>
              <div class="download-method">
                <a href="https://play.google.com/store/apps" class="ch-store">
                <img src="./icon/ch-play.svg" alt="" />
              </a>
              <a href="https://www.apple.com/vn/app-store" class="app-store">
                <img src="./icon/app-store.svg" alt="" />
              </a>
              </div>
            </div>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Danh mục</h3>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Trang chủ
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Sản phẩm
                    </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link"> Về chúng tôi </a>
                </li>
                <li class="footer__item">
                    <a href="#!" class="footer__link">
                      Hỗ trợ
                    </a>
                </li>
                <li class="footer__item">
                  <a href="#!" class="footer__link">
                    Liên hệ
                  </a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Thông tin liên hệ</h3>
            <ul class="footer__list">
                <li class="footer__item">
                  279 Nguyễn Tri Phương, Phường 5, Quận 10, TP.HCM
                </li>
                <li class="footer__item">
                  (+84) 046 990 809
                </li>
                <li class="footer__item">
                  info@example.com
                </li>
            </ul>
          </div>
          <div class="footer-column">
            <h3 class="footer__heading">Theo dõi</h3>
            <div class="footer__social">
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/facebook.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/insta.svg" alt="">
                </a>
                <a href="#!" class="footer__social-btn">
                    <img src="./icon/twitter.svg" alt="">
                </a>
            </div>
          </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
          <div class="payment-method">
            <img src="./icon/paypal.svg" alt="">
            <img src="./icon/visa.svg" alt="">
            <img src="./icon/master-card.svg" alt="">
          </div>
          <p class="footer__copyright-text">
            Copyright © 2023 UIHUT All Rights Reserved
          </p>
        </div>
    </div>
    </footer>
  </body>
</html>


