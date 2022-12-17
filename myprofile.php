<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
   $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
   $row = mysqli_fetch_assoc($result);

}
  else{
    header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/profile.css" />

    <!--Font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--Font awesome-->
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="profile">
          <div class="left">
            <div class="profile-image">
              <img src="img/colette.jpg" alt="" />
            </div>

            <div class="profile-user-settings">
              <h1 class="profile-user-name"><?= htmlspecialchars($row["name"]) ?></h1>

              <button class="btn">Edit Profile</button>
            </div>
            <!--PC view-->
            <div class="profile-bio">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit Lorem
                ipsum dolor sit, amet consectetur adipisicing elit. Tempore quis
                odio maxime adipisci fugiat sunt porro asperiores Lorem ipsum
              </p>
            </div>
          </div>

          <div class="right">
            <div class="profile-stats">
              <ul>
                <li>
                  posts
                  <h3 class="profile-stat-count">150</h3>
                </li>
                <img src="img/Line 492.png" alt="" />
                <li class="middle">
                  followers
                  <h3 class="profile-stat-count">150</h3>
                </li>
                <img src="img/Line 492.png" alt="" />
                <li>
                  following
                  <h3 class="profile-stat-count">500</h3>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End of profile section -->
        <div class="profile-bio-MOBILE">
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit Lorem ipsum
            dolor sit, amet consectetur adipisicing elit. Tempore quis odio
            maxime adipisci fugiat sunt porro asperiores Lorem ipsum
          </p>
        </div>
      </div>
      <!-- End of container -->
    </header>

    <!--main starts here-->
    <main>
      <div class="container">
        <!-- <div class="box">
          <div class="views">
            <a href="#"><img class="grid-view" src="img/grid.png" alt="" /></a>
            <a href="#"
              ><img class="one-page-view" src="img/onepg.png" alt=""
            /></a>
          </div>
        </div> -->

        <div class="click">
          <a href="#"><img class="page" src="img/Group 432.png" alt="" /></a>
          <img class="line" src="img/Line 494.png" alt="" />
          <a href="#"><img class="page" src="img/Group 433.png" alt="" /></a>
        </div>

        <div class="gallery">
          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 56
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 2
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 89
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 5
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 42
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 1
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 38
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 0
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 47
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 1
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 94
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 3
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 52
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 4
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 66
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 2
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 45
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 0
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 34
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 1
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 41
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 0
                </li>
              </ul>
            </div>
          </div>

          <div class="gallery-item" tabindex="0">
            <img src="img/sushi.jpg" class="gallery-image" alt="" />

            <div class="gallery-item-info">
              <ul>
                <li class="gallery-item-likes">
                  <i class="fas fa-heart fa-sm" aria-hidden="true"></i> 30
                </li>
                <li class="gallery-item-comments">
                  <i class="fas fa-comment fa-sm" aria-hidden="true"></i> 2
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End of main -->

        <div class="loader"></div>
      </div>
      <!-- End of container -->
    </main>

  </body>
</html>