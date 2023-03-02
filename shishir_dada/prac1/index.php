<?php
  include("class.php");
  $obj=new Details;
  $data=$obj->fetchCat();

?>


<!DOCTYPE html>
 <html>
     <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/css/mdb.min.css" rel="stylesheet">

         <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.3/js/mdb.min.js"></script>
     </head>
     <body>
         <div class="container">
         <h2>Filled Details</h2>
         <table class="table">
             <tr>
                 <td colspan="6" class="text-center">
                    <a href="addinfo.php" class="btn btn-danger"> Add More</a>
                 </td>
             </tr>
             <tr>
                 <td>S.no</td>
                 <td>First Name</td>
                 <td>Last Name</td>
                 <td>About</td>
                 <td>Image</td>
                 <th>Created At</th>
                 <th>Action</th>
             </tr>
            
               </tr>
             <?php
             $sn=1;
   foreach($data as $d)

   {
    ?>
    
   <tr>
                 <td><?= $sn?></td>
                 <td><?= $d['fname'];?></td>
                 <td><?= $d['lname'];?></td>
                 <td><?= $d['about'];?></td>
                 <td><img src="attach/<?= $d['image'];?>" width=60 height=50/></td>
                 <th><?= $d['created_at'];?></th>
                 <th> 
                      <a href="update.php?update_id=<?=$d['id'];?>" class="btn btn-info">update</a>
                      <a href="index.php?del_id=<?=$d['id'];?>" class="btn btn-danger">Delete</a>             
                 </th>
             </tr>
                 <?php
                    if (isset($_GET['del_id']))
                        {
                            $obj->del($_GET['del_id']);
                            header("location:index.php");
                        }
                    if (isset($_GET['del_id']))
                        {
                            $obj->del($_GET['del_id']);
                            header("location:index.php");
                        }
                        $sn++;
        }
             ?>

         </table>
        </div>
     </body>
 </html>