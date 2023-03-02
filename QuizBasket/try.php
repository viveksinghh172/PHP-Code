<?php
       require("./config/db.php");
       $d1=mysqli_query($way,"SELECT * FROM `add_silder`");
       while ($abc1=mysqli_fetch_array($d1,MYSQLI_ASSOC)) {
            // echo "<pre>";
            // print_r($abc1);
            $slider_id=$abc1['slider_id'];
            $silder_img=$abc1['silder_img'];
            ?>
             <img class="d-block w-100" src="assets/silder_img/<?php echo $silder_img ?>.png" style="height: 380px"   ><?php echo "$silder_img"; ?>

        <div class="mask rgba-black-slight"></div>
            <?php
         # code...
       }
      ?>