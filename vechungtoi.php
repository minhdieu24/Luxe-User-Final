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
    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/vechungtoi.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <!-- JS -->
    <script src="js/vechungtoi.js"></script>
    <script src="./js/header.js"></script>
  </head>
  <body>
    <!-- Header -->
    <?php
    require_once "db_module.php";
      include "header.php"
    ?>
    <div class="content-wrapper">
      <div class="content1">
        <div class="ve-chung-toi-wrap">
          <div class="ve-chung-toi">
            <div style="color: black !important">
              <h1><b>Về chúng tôi</b></h1>
              <p>
                Luxe là nhà sản xuất trang sức hàng đầu tại Việt Nam. Với đội
                ngũ nội bộ có tay nghề cao, công ty chúng tôi cung cấp nhiều sản
                phẩm và dịch vụ khác nhau đáp ứng nhu cầu của khách hàng. Tận
                dụng đội ngũ bán hàng hùng hậu với hơn 20 năm kinh nghiệm hoạt
                động xuất khẩu, chúng tôi chiếm được lòng tin của khách hàng
                trên toàn cầu nhờ nguồn lực đáng tin cậy cũng như hệ thống kiểm
                soát chất lượng nghiêm ngặt.
              </p>
            </div>
            <img src="img/ring1.jpg"  />
          </div>
        </div>
        <div class="su-menh">
          <img src="img/ring2.jpg" />
          <div>
            <h1><b>Sứ mệnh</b></h1>
            <p>
              Chúng tôi tin rằng mỗi mảnh trang sức không chỉ là một sản phẩm mà
              còn là một câu chuyện, là biểu tượng của cái đẹp, cái tinh túy trong từng người. 
              Chúng tôi cam kết mang đến cho
              khách hàng những trải nghiệm mua sắm tuyệt vời nhất, từ quá trình
              lựa chọn sản phẩm cho đến việc chăm sóc sau bán hàng. Chúng tôi
              muốn trở thành đối tác đáng tin cậy của mọi người trong những
              khoảnh khắc quan trọng của cuộc sống.
            </p>
          </div>
        </div>
        <div class="tam-nhin">
          <div>
            <h1><b>Tầm nhìn</b></h1>
            <p>
              Tầm nhìn của chúng tôi là xây dựng một cộng đồng yêu trang sức,
              nơi mọi người không chỉ đến để mua sắm mà còn để chia sẻ, cảm nhận
              và tận hưởng cái đẹp từ những tác phẩm nghệ thuật nhỏ bé này.
              Chúng tôi muốn trở thành điểm đến hàng đầu cho những người đam mê
              trang sức, nơi họ có thể khám phá những xu hướng mới, những ý
              tưởng sáng tạo và nhận được sự tư vấn chuyên nghiệp từ các chuyên
              gia.
            </p>
          </div>
          <img src="img/ring3.jpg" />
        </div>
      </div>
      <div class="thanh-vien">
        <h1><b>Các thành viên</b></h1>
        <p>
          Các thành viên làm nên một thương hiệu trang sức không chỉ là những
          nhân viên, mà còn là những nghệ nhân tài năng, những nhà thiết kế sáng
          tạo và cả những khách hàng trung thành. Dưới đây là một số loại thành
          viên quan trọng:
        </p>
        <div class="thanh-vien-gr">
          <img src="icon/arrow-left.svg" class="arrow-left" onclick="prev()" />
          <div class="ba-thanh-vien">
            <div class="mot-thanh-vien">
              <img src="img/MinhDiệu.png" />
              <div>
                <h3>Nguyễn Thị Minh Diệu</h3>
                <p>Project Manager</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/BảoNgọc.png" />
              <div>
                <h3>Đào Bảo Ngọc</h3>
                <p>QA/QC</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/ThuHiền.png" />
              <div>
                <h3>Nguyễn Lương Thu Hiền</h3>
                <p>Business Analyst</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/NhưÝ.png" />
              <div>
                <h3>Nguyễn Hữu Như Ý</h3>
                <p>Developer</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/KimNgoc.png" />
              <div>
                <h3>Phạm Thị Kim Ngọc</h3>
                <p>Developer</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/ThienKim.png" />
              <div>
                <h3>Lê Ngọc Thiên Kim</h3>
                <p>QA/QC</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/YếnVy.png" />
              <div>
                <h3>Hồ Thị Yến Vy</h3>
                <p>Business Analyst</p>
              </div>
            </div>
            <div class="mot-thanh-vien">
              <img src="img/DongNghi.png" />
              <div>
                <h3>Nguyễn Đông Nghi</h3>
                <p>Tester</p>
              </div>
            </div>
            <div class="mot-thanh-vien" style="opacity: 0">
              <img src="img/DongNghi.png" />
            </div>
          </div>
          <img
            src="icon/arrow-right.svg"
            class="arrow-right"
            onclick="next()"
          />
          <div class="img-index-dot">
            <div class="img-index img-index-0 active"></div>
            <div class="img-index img-index-1"></div>
            <div class="img-index img-index-2"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php
      include "footer.php";
    ?>
  </body>
</html>
