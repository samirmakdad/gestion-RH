<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Demande de Congé</title>
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
      <ul class="nav-links">
        <li>
          <a href="index.html">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="demande-conge.html" class="active">
            <i class="bx bx-user"></i>
            <span class="links_name">Demande de Congé</span>
          </a>
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
          <span class="dashboard">Demande de Congé</span>
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
            <div class="title">Formulaire de Demande de Congé</div>
            <form action="submit-conge.html" method="post">
              <div class="input-box">
                <span class="details">Nom</span>
                <input type="text" name="nom" required />
              </div>
              <div class="input-box">
                <span class="details">Prénom</span>
                <input type="text" name="prenom" required />
              </div>
              <div class="input-box">
                <span class="details">CIN</span>
                <input type="text" name="cin" required />
              </div>
              <div class="input-box">
                <span class="details">Matricule</span>
                <input type="text" name="matricule" required />
              </div>
              <div class="input-box">
                <span class="details">Téléphone</span>
                <input type="tel" name="telephone" required />
              </div>
              <div class="input-box">
                <span class="details">Date de Début</span>
                <input type="date" name="date_debut" required />
              </div>
              <div class="input-box">
                <span class="details">Date de Fin</span>
                <input type="date" name="date_fin" required />
              </div>
              <div class="input-box">
                <span class="details">Raison</span>
                <textarea name="raison" required></textarea>
              </div>
              <div class="button">
                <input type="submit" value="Soumettre">
              </div>
            </form>
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
