
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
        <div class="add-employee-form">
          <h2>Ajouter un Employé</h2>
          <form action="ajouter_employe.php" method="POST">
            <div class="input-box">
              <label for="nom">Nom-Prenom</label>
              <input type="text" id="nom" name="nom" required>
            </div>
            <div class="input-box">
              <label for="cin">CIN</label>
              <input type="text" id="cin" name="cin" required>
            </div>
            <div class="input-box">
              <label for="matricule">Matricule:</label>
              <input type="text" id="matricule" name="matricule" required>
            </div>
            <div class="input-box">
              <label for="telephone">Téléphone:</label>
              <input type="text" id="telephone" name="telephone" required>
            </div>
            <div class="input-box">
              <label for="poste">Poste:</label>
              <input type="text" id="poste" name="poste" required>
            </div>
            <div class="input-box">
            <label>Photo :</label>
            <input type="file" name="photo"><br><br>
            </div>
            <div class="input-box">
              <button type="submit">Ajouter</button>
            </div>
          </form>
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
