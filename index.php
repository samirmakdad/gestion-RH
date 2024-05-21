
<?php include("conecter.php");




?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">Utilisateur</span>
        </a>
      </li>
     <li class="log_out"> 
     <form method="POST" style="text-align: right;">
        <button type="submit" name="logout">Logout</button>
    </form>
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
        <div class="recent-sales box">
          <div class="title">Vente récentes</div>
          <div class="sales-details">
            <table>
              <thead>
                <tr>
                  <th>NOM-PRENOM</th>
                  <th>Matricule</th>
                  <th>Téléphone</th>
                  <th>Poste</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                  <th>Afficher</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MOHAMED</td>
                  <td>AF57587</td>
                  <td>0000000</td>
                  <td>A</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="profile.html">AFFICHER</a></div></td>
                </tr>
                <tr>
                  <td>ALi</td>
                  <td>Ab4636</td>
                  <td>0000000</td>
                  <td>B</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="#">AFFICHER</a></div></td>
                </tr>
                <tr>
                  <td>ANOUAR</td>
                  <td>AG7585</td>
                  <td>0000000</td>
                  <td>A</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="#">AFFICHER</a></div></td>
                </tr>
                <tr>
                  <td>HICHAM</td>
                  <td>ND7654</td>
                  <td>0000000</td>
                  <td>E</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="#">AFFICHER</a></div></td>
                </tr>
                <tr>
                  <td>HAMZA</td>
                  <td>IS4578</td>
                  <td>0000000</td>
                  <td>R</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="#">AFFICHER</a></div></td>
                </tr>
                <tr>
                  <td>SAID</td>
                  <td>AB4589</td>
                  <td>0000000</td>
                  <td>F</td>
                  <td><div class="button"><a href="#">MODIFIER</a></div></td>
                  <td><div class="button"><a href="#">SUPP</a></div></td>
                  <td><div class="button"><a href="#">AFFICHER</a></div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="button">
            <a href="#">ajouter un employé</a>
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
