    <!-- PC Header -->
    <header class="fixed-header">
      <div class="container">
        <div class="top-bar">
          <!-- Mobile menu -->
          <button class="hamburger-menu" onclick="burgerFunction()">
            <img src="./icon/index-burger.svg" alt="" />
          </button>
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- Search button -->
          <div class="top-act-group mobile">
            <button class="top-act-btn">
              <img src="./icon/search.svg" name="search-btn" class="searchBtn" onclick="search()"/>
            </button>
          </div> 
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul id="PC_nav">
              <li><a href="./index.html">TRANG CHỦ</a></li>
              <li><a href="#!" onclick="megaFunction()">SẢN PHẨM</a></li>
              <li><a href="./gioithieu.html">VỀ CHÚNG TÔI</a></li>
              <li><a href="./hotro.html">HỖ TRỢ</a></li>
              <li><a href="./lienhe.html">LIÊN HỆ</a></li>
            </ul>
          </nav>


          <!-- Action -->
          <div class="top-act">
            <div class="top-act-group">
              <button class="top-act-btn">
                <img src="./icon/search.svg" name="search-btn" class="searchBtn" onclick="search()"/>
              </button>
            </div>
            <div class="top-act-group">
              <button class="top-act-btn">
                <a href="./yeuthich.html"><img src="./icon/heart.svg" alt="" /></a>
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn">
                <a href="./giohang.html"><img src="./icon/cart.svg" alt="" /></a>
                <span class="top-act-title"> 03 </span>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn user">
                <a href="#"><img src="./icon/user.svg" alt="" /></a>
              </button>
              <div class="top-act-separate"></div>
              <button class="top-act-btn mode" onclick='darkFunction()'>
                <img src="./icon/mode.svg" alt="" />
              </button>
            </div>
          </div>
        </div>  
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
            <img src="./icon/index-delete.svg" name="close-btn" class="closeBtn" onclick="closeSearch()"/>
          </div>
      </div>
    </header>
    <!-- Mobile Header -->
    <header class="mobile-header">
      <div class="menu-overlay" onclick="burgerFunction()"></div>
      <!-- Menu-content -->
      <div class="menu-drawer">
        <button class="navbar-close" onclick="burgerFunction()">
          <img src="./icon/index-arrow-left.svg" alt="" />
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
    <!-- Mega menu cho danh mục sản phẩm -->
    <div class="mega-menu">
      <ul>
        <li>
          <a href="./danhmuc.html">
            <img src="./img/nhan.webp" alt="Hình 1">
            Nhẫn
          </a>
        </li>
        <li>
          <a href="./danhmuc.html">
            <img src="./img/day-chuyen.webp" alt="Hình 2">
            Dây chuyền
          </a>
        </li>
        <li>
          <a href="./danhmuc.html">
            <img src="./img/lac-tay.webp" alt="Hình 3">
            Vòng tay
          </a>
        </li>
        <li>
          <a href="./danhmuc.html">
            <img src="./img/bong-tai.jpg" alt="Hình 4">
            Bông tai
          </a>
        </li>
      </ul>
    </div>