<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>




    <div class="sidebar">
        <!-- <div class="logo-details">
          <i class="bx bxl-c-plus-plus"></i>
          <span class="logo_name">D-CLIC</span>
        </div> -->
        <ul class="nav-links">
          <li>
            <a href="index.html" class="active"> 
              <i class="bx bx-grid-alt"></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <!-- <li>
            <a href="conger.html">
              <i class="bx bx-list-ul"></i>
  
              <span class="links_name">employes</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="bx bx-list-ul"></i>
              <span class="links_name">Commandes</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="bx bx-pie-chart-alt-2"></i>
              <span class="links_name">Analyses</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="bx bx-coin-stack"></i>
              <span class="links_name">Stock</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="bx bx-book-alt"></i>
              <span class="links_name">Tout les commmandes</span>
            </a>
          </li> -->
          <li>
            <a href="#">
              <i class="bx bx-user"></i>
              <span class="links_name">Utilisateur</span>
            </a>
          </li>
          <!-- <li>
            <a href="#">
              <i class="bx bx-message" ></i>
              <span class="links_name">Messages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bx bx-heart" ></i>
              <span class="links_name">Favrorites</span>
            </a>
          </li> -->
          <!-- <li>
            <a href="#">
              <i class="bx bx-cog"></i>
              <span class="links_name">Configuration</span>
            </a> -->
          </li>
          <li class="log_out">
            <a href="#">
              <i class="bx bx-log-out"></i>
              <span class="links_name">Déconnexion</span>
            </a>
          </li>
        </ul>
      </div>
      <section class="home-section">
        <nav>
          <div class="sidebar-button">
            <i class="bx bx-menu sidebarBtn"></i>
            <span class="dashboard">Dashboard</span>
          </div>
          <div class="search-box">
            <input type="text" placeholder="Recherche..." />
            <i class="bx bx-search"></i>
          </div>
          <div class="profile-details">
            <!--<img src="images/profile.jpg" alt="">-->
            <span class="admin_name"></span>
            <i class="bx bx-chevron-down"></i>
          </div>
        </nav>

      <div class="home-content">



        

        <div class="sales-boxes">
          
          <div class="top-sales box">
            <div class="title">PROFILE</div>
            <ul class="top-sales-details">
              <li>
                <a href="#">
                  <!--<img src="images/sunglasses.jpg" alt="">-->
                  <span class="product">NOM-PRENOM</span>
                </a>
                <span class="price">SAMIR MAKDAD</span>
              </li>
              <li>
                <a href="#">
                  <!--<img src="images/addidas.jpg" alt="">-->
                  <span class="product"> CIN</span>
                </a>
                <span class="price">XXXX</span>
              </li>
              <li>
                <a href="#">
                  <!--<img src="images/jeans.jpg" alt="">-->
                  <span class="product">MATRICULE</span>
                </a>
                <span class="price">M1567 </span>
              </li>
              <li>
                <a href="#">
                  <!-- <img src="images/nike.jpg" alt="">-->
                  <span class="product">TELEPHONE</span>
                </a>
                <span class="price">0000000</span>
              </li>
              <li>
                <a href="#">
                  <!--<img src="images/scarves.jpg" alt="">-->
                  <span class="product">POSTE</span>
                </a>
                <span class="price">A</span>
              </li>
              <li>
                <a href="#">
                  <!--<img src="images/blueBag.jpg" alt="">-->
                  <span class="product">JOUR CONGE</span>
                </a>
                <span class="price">30</span>
              </li>
              <li>
                <a href="#">
                  <!--<img src="images/bag.jpg" alt="">-->
                  <span class="product">JOUR CONGE RESTER</span>
                </a>
                <span class="price">22</span>
              </li>

              
              <div class="button">
                <a href="#">demande conger</a>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
