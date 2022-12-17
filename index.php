<?php
require 'config.php';
require_once('components/component.php');
if(!empty($_SESSION["id"])){
$id = $_SESSION["id"];
$res = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
$row = mysqli_fetch_assoc($res);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- main heading font-->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/style.css'>
    <!-- CSS only -->

    <title>Document</title>
  </head>
  <body>


    <nav class="navbar">

       <!-- LOGO -->
      
       <div class="logo">Post</div>


      
       <!-- NAVIGATION MENU -->
      
      <ul class="nav-links">
      
       <!-- USING CHECKBOX HACK -->
      
       <input type="checkbox" id="checkbox_toggle" />
      
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
      
       <!-- NAVIGATION MENUS -->


      
       <div class="menu">

       <li><a href="index.php">Home</a></li>

       <?php if (isset($row)): ?>
        
       <li><a href="myprofile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp<?= htmlspecialchars($row["name"]) ?></a></li>
        
        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        
       <?php else: ?>
        
        <li><a href="registration.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
        
       <?php endif; ?>
      
       
      
       <li><a href="cart.html">Contact Us</a></li>
      
     </div>
      
     </ul>
  </nav>

    <section id="home">

      <h1 class="homepage-heading">PostPost</h1>
      <p class="phoneview-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque amet dolore quidem obcaecati, reiciendis, ipsam enim perspiciatis et, placeat rem quia itaque quod dolorum voluptas quam? Ea quam maxime ipsa?</p>

      <nav>
        <div class="search-bar">
          <form class="search">
            <input type="search" class="search__input" name="search" placeholder="Search Recipe, Profile or Ingredients" autocomplete="off" onload="equalWidth()" required>
            <button formnovalidate class="search__btn">Search</button>
            <i class="ion-ios-search search__icon"></i>
          </form>
          <div class="suggestion">
            <div class="suggestion__content">
              <div class="suggestion__content-left-side">
               <h5><i class=" fa fa-thin fa-arrow-trend-up"></i>Trending Recipes</h5>
               <ul>
                 <li><div class="trending-topics">
                  <img src="img/Chewy-Brownies.jpg" alt="">
                  <p>Brownies</p>
                </div></li>
                <li><div class="trending-topics">
                  <img src="img/pan.jpg" alt="">
                  <p>Blueberry Pancake </p>
                </div></li>
                <li><div class="trending-topics">
                  <img src="img/sushi.jpg" alt="">
                  <p>Sushi</p>
                </div></li>

               <ul>  
              </div>
              <div class="suggestion__content-right-side">
               <h5><i class=" fa fa-thin fa-arrow-trend-up"></i> Trending Searches</h5>
               <ul>
                 <li>Almond Ricotta</li>
                 <li>Bacon Pasta</li>
                 <li>Potato Gem Nachos</li>
                 <li>Chicken Pot Pie</li>
               </ul>   
              </div>
            </div>  
          </div>  
       </div>  
     </nav>
    </section>
  
    <div class="section-heading">
      <h1 class="fancy">EXPLORE</h1>
    </div>

   
    

    <!---------------------------- Photo Grid Desktop View Strarts Here  ----------------------------------->
<div class="gallery">
      <?php
      // component("fds","23","img/c.jpg","1");

      
    for ($col = 0; $col < 4; $col++) {
      echo "<div class='y'>";
      $result = mysqli_query($conn,"SELECT * FROM Prouducttb");
            $counter=0;
            while ($row = mysqli_fetch_assoc($result)){
              
              if(($counter-$col) % 4 == 0){
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
              }
              $counter++;
          }  
          echo "</div>";
      };    

    ?>

</div>
<!---------------------------- Photo Grid Desktop View Ends Here(4 cols)  ----------------------------------->

<!---------------------------- Photo Grid tablet View starts Here(3cols)  ------------------------------------>
<section class="tabletview">
  <div class="y">

    <div class="image-box">
      <img src="img/smol.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"> <p> Christine Danial </p> </div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/cup.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     <div class="image-box">
      <img src="img/smol.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     
     <div class="image-box">
      <img src="img/pan00.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>
  </div>

  <div class="y">

    <div class="image-box">
      <img src="img/cup.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/pa.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     <div class="image-box">
      <img src="img/c0.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     
     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>
  </div>



  <div class="y">

    <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/pan00.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/c.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     <div class="image-box">
      <img src="img/smol.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     
     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name"><p> Christine Danial </p></div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>
  </div>
</section>
<!---------------------------- Photo Grid tablet View Ends Here(3cols)  ------------------------------------>

<!---------------------------- Photo Grid Mobile View Starts Here(2 cols)  --------------------------------->
<section class="mobileview">
  <div class="y">

    <div class="image-box">
      <img src="img/Chewy-Brownies.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Christine Danial</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/cup.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     <div class="image-box">
      <img src="img/c.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     
     <div class="image-box">
      <img src="img/smol.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>
  </div>

  <div class="y">

    <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Christine Danial</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/pan00.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>

     <div class="image-box">
      <img src="img/c0.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     <div class="image-box">
      <img src="img/smol.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>


     
     <div class="image-box">
      <img src="img/sushi.jpg">
      <div class="box-content">
        
        <div class="box-content__upper">
          <div class="icon--likes">
            <i class="fa fa-heart"></i>
            <p>682</p>
          </div>
          <div class="icon--add">
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="box-content__lower">
          <div class="user">
            <div class="user__avatar"><img src="img/colette.jpg" alt=""></div>
            <div class="user__name">Mari Johannessen</div>
          </div>
        </div>
        <div class="btm-r8">
          <div class="icon--download">
            <i class="fa fa-download"></i>
          </div>
        </div>
      </div>
     </div>
  </div>
</section>


<?php
include "includes/footer.php"
?>
<!---------------------------- Photo Grid Mobile View Ends Here)(2cols)  ------------------------------------>


    <script src="js/onboarding.js"></script>
  </body>
</html>
