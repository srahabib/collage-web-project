<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "

    
    <form action=\"index.php\" method=\"post\">
    <div class='image-box'>
    <img src=\"$productimg\">
    <div class='box-content'>
    <div class='food-name'>$productname</div>
      <div class='box-content__upper'>
        <div class='icon--likes'>
          <i class='fa fa-heart'></i>
          <p>682</p>
        </div>
        <button type=\"submit\" name='add' class='icon--add'>
          <i class='fa fa-plus'></i>
        </button>
        <input type='hidden' name='product_id' value='$productid'>
       
      </div>
      <div class='box-content__lower'>
        <div class='user'>
          <div class='user__avatar'><img src='img/colette.jpg'></div>
          <div class='user__name'><p> Christine Danial </p></div>
        </div>

      </div>
      <div class='btm-r8'>
        <div class='icon--download'>$$productprice
          <!--<i class='fa fa-download'></i>-->
        </div>
      </div>

    </div>
   </div>
   </form>
   
   

";
echo $element;
}

?>