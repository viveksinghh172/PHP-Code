
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner slider" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="./images/quiz2.jpg"  style="height: 380px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption sliderhead">
        <p class="h1-responsive sliderheading">Take the Quiz</p>
        <p class="slidertext">Unlocking knowledge at the speed of thought</p>
      </div>
    </div>
    
    <div class="carousel-item ">
      <div class="view">
        <img class="d-block w-100" src="./images/1.jpg"  style="height: 380px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption sliderhead">
        <p class="h1-responsive sliderheading">Take the Quiz</p>
        <p class="slidertext">Unlocking knowledge at the speed of thought</p>
      </div>
    </div>
    
    <div class="carousel-item ">
      <div class="view">
        <img class="d-block w-100" src="./images/2.jpg"  style="height: 380px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption sliderhead">
        <p class="h1-responsive sliderheading">Take the Quiz</p>
        <p class="slidertext">Unlocking knowledge at the speed of thought</p>
      </div>
    </div>
    
   
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


<?php

    require("./config/db.php");
    
      extract($_POST);
     
       
?>



<div class="container">
 <div class="row">
  <div class="col-md-12">
   <hr>
    <h1 class="h1-responsive " align="center" style="font-family: Nunito">OUR QIUZ</h1>
    <hr>
</div>
</div>
  <div class="row">
    <?php
    $data=mysqli_query($way,"SELECT * FROM `categoery` ORDER by cat_id  ASC LIMIT 8");
     while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
          // echo "<pre>";
          // print_r($arr);
          $cat_id=$arr['cat_id'];
          $cat_name=$arr['cat_name'];
          $cat_details=$arr['cat_details'];
          $cat_pic=$arr['cat_pic'];
          # code...
       
        ?>
       
      <div class="col-md-3">
      

            <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-3 z-depth-1-half" id="accordionEx1" role="tablist" aria-multiselectable="true">

    <!-- <ul class="list-unstyled d-flex justify-content-center pt-5 red-text">
        <li><i class="fa fa-anchor mr-3 fa-2x" aria-hidden="true"></i></li>
        <li><i class="fa fa-life-saver mr-3 fa-2x" aria-hidden="true"></i></li>
        <li><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></li>
    </ul>
 -->
    <h2 class="text-center text-uppercase ">
      <a href="quiz.php?quiz=<?php echo $cat_name; ?>">
      <div class="view overlay zoom animated  fadeInDown ">
       <img class="card-img-top  imagesize my_edit_box " src="assets/upload_categ/<?php echo $cat_pic; ?>" >

      

     </div>
   </a>
    </h2>

    <hr class="mb-0">

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="">
            <a data-toggle="collapse" data-parent="#accordionEx1" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                <h3 class=" red-text" style="font-size: 16px;">
                <!--   <?= $cat_name; ?>  --> Total Questions  <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                </h3>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapse4" class="collapse show" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx1">
            <div class="card-body pt-0" style="font-size: 10px;">
                <!-- <p><?= $cat_details; ?></p> -->
                <?php
                    $d2=mysqli_query($way,"SELECT COUNT(*) from add_questions WHERE cate_name='$cat_name'");
                    while ($a1=mysqli_fetch_array($d2,MYSQLI_ASSOC)) {
                      // echo "<pre>";
                      // print_r($a1);
                      $php_cou=$a1['COUNT(*)'];
                      $php_cou=$php_cou + 400;
                     echo "<div style='color:green; text-align:center; font-size:14px;'>$php_cou</div>";
                      # code...
                    }
                ?>
              
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="heading5">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <h3 class="red-text" style="font-size: 16px;">
                    Description : <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                </h3>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx1">
            <div class="card-body pt-0" style="font-size: 10px;">
                <p><?= $cat_details; ?></p>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

     <!-- Accordion card -->
   <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="heading6">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <h3 class=" red-text" style="font-size: 16px;">
                   Live Playing Players : <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                </h3>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx1">
            <div class="card-body pt-0">
                <div class="card-body pt-0" style="font-size: 10px;">
                <p><?= $cat_details; ?></p>
            </div>
            </div>
        </div>
    </div>
    <!-- Accordion card -->
</div>
<!--/.Accordion wrapper-->




     <br>
      <br>
      <hr>
  </div>
  <?php
}
?>
 <br>
      <br>
      <hr>
     
      </div>



  </div>






<div class="container">
<div class="row">
<div class="col-md-12">
  
   <hr>
    <h1 class="h1-responsive " align="center" style="font-family: Nunito">OUR TOP QUIZES</h1>
    <hr>
</div>
</div>


<?php

    require("./config/db.php");
    
      extract($_POST);
     $data=mysqli_query($way,"SELECT * FROM `categoery` ORDER by cat_id  DESC LIMIT 8");
       
?>




  <div class="row">
    <?php

     while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC)) {
          // echo "<pre>";
          // print_r($arr);
          $cat_id=$arr['cat_id'];
          $cat_name=$arr['cat_name'];
          $cat_details=$arr['cat_details'];
          $cat_pic=$arr['cat_pic'];
          # code...
       
        ?>
      <div class="col-md-3" >
        <!-- Card -->
          <div class="card img_showdow" >

             <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top imagesize" style="height: 200px; " src="assets/upload_categ/<?php echo $cat_pic; ?>" >
                <a href="#!">
                    <div class="mask rgba-white-slight">
                      
                    </div>
                </a>
             </div>

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h4 class="card-title"><?= $cat_name; ?></h4>
              <!-- Text -->
              <p class="card-text"><?= $cat_details; ?></p>
              <!-- Button -->
              <a href="#" class="btn btn-primary">Take the Quiz</a>

            </div>

      </div>
    <!-- Card -->
    <br>
      
  </div>
  <?php
}
?>
     
      </div>
  </div>






<div class="container">
  <div class="row">
  <div class="col-md-12">
   <hr>
    <h1 class="h1-responsive " align="center" style="font-family: Nunito">OUR TOOPERS</h1>
    <hr>
</div>
</div>
  <div class="row">
      <div class="col-sm-3">
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top imagesize rounded-circle img-fluid" src="./images/leeminhoo.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Lee Min Hoo</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
      </div>
      <div class="col-sm-3">
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top imagesize rounded-circle img-fluid" src="./images/b.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Nirmanjali Rana</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
      </div>
      <div class="col-sm-3">
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top imagesize rounded-circle img-fluid" src="./images/c.jpg" alt="Card image cap">
    <!-- <img src="./images/c.jpg" class="img-fluid rounded-circle card-img-top" alt="Responsive image"> -->
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Himanshu Raiwani</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
      </div>
      <div class="col-sm-3">
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top imagesize rounded-circle img-fluid" src="./images/d.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Nutan Srivastava</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
      </div>
  </div>
</div>  
<br><br><br>


<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <br>
  <h1 class="h1-responsive headdd" align="center">CHOOSE YOUR FIELD OF STUDY</h1><hr>
</div>
</div>
</div>


<div class="container">
<div class="row">
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/1.jpg" class="img-fluid imagesize" alt="zoom">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">Web Technologies</div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/6.png" class="img-fluid imagesize" alt="zoom">
               <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">Databases</div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/7.jpeg" class="img-fluid imagesize" alt="zoom">
               <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">Programming Languages</div>
                </div>
              </div>
            </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/8.jpg" class="img-fluid imagesize" alt="zoom">
               <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">Web Designing</div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/11.jpg" class="img-fluid imagesize" alt="zoom">
               <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">Computer Science</div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-4">
            <div class="view overlay zoom">
              <img src="./images/9.jpg" class="img-fluid imagesize" alt="zoom">
               <div class="container-fluid">
                <div class="row">
                  <div class="col-md-2 iconcol" id="iconcol" ><i class="fa fa-envelope"></i></div>
                  <div class="col-md-10 textcol" id="textcol">App Development</div>
                </div>
              </div>
            </div>
    </div>
</div>
</div>
<hr>
<br>




<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <br>
  <h1 class="h1-responsive headdd" align="center">QUIZ BASKET GALLERY</h1><hr><br><br>
</div>
</div>
</div>



<div class="container">

<div class="row">
      <div class="col-md-3">
        <img src="./images/ourvisitors.jpg" class="img-fluid z-depth-1 rounded-circle" alt="Responsive image">
        <br><br><br>
        <p align="center" style="font-size:60px; color:blue;">247689</p>
        <h6 class="h6-responsive" align="center">OUR VISITORS</h6>
      </div>
      <div class="col-md-3">
        <img src="./images/ourteachers.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
      <br><br><br>
        <p align="center" style="font-size:60px; color:blue;">120</p>
        <h6 class="h6-responsive" align="center">OUR TRAINERS</h6>
      </div>
      <div class="col-md-3">
        <img src="./images/ourquizes.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
      <br><br><br>
        <p align="center" style="font-size:60px; color:blue;">20</p>
        <h6 class="h6-responsive" align="center">OUR QUIZES</h6>
      </div>
      <div class="col-md-3">
        <img src="./images/ourclients.jpg" class="img-fluid z-depth-1 rounded-circle"
      alt="Responsive image">
      <br><br><br>
        <p align="center" style="font-size:60px; color:blue;">400</p>
        <h6 class="h6-responsive" align="center">OUR CLIENTS</h6>
      </div>
</div>

</div>