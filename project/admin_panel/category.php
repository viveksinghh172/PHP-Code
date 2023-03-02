<?php

  $sel=mysqli_query($con,"select * from category ordered by created_at_desc");

?>
<script>
    
    $(document).ready(function()
    {
      $(".delcat").click(function()
                        {
          let cid=$(".delcat").attr("cid");
          $.post('api.php',{'delcat':cid},function(res,status)
                {
              alert(res);
              $('body').load('dashboard.php?con=category');
          })
      })   
    })

</script>


<h2>Category</h2>
<table class="table">
    
    <tr>
        
        <th colspan="6" class="text-center">
            <a href="?con=addcat" class="btn btn-danger">
               Add Category
            </a>
        </th>
    
    </tr>
    
    <tr>
        <th>S. Number</th>
        <th>Category</th>
        <th>Description</th>
        <th>Image</th>
        <th>Date/Time</th>
        <th>Action</th>
    </tr>
    
    <?php
    
     if(mysqli_num_rows($sel)>0)
     {
         $sn=1;
         while($arr=mysqli_fetch_assoc($sel))
         {
       ?>
            
    <tr>
        <th><?= $sn;?></th>
        <th><?= $arr['category'];?></th>
        <th><?= $arr['description'];?></th>
        <th><img src="../images/<?= $arr['image'];?>" width="50" height="50"></th>
        <th><?= $arr['created_at'];?></th>
        <th>Edit
            <a href="javascript:void(0)" class="btn btn-danger delcat" cid="<?= $arr['id'];?>">Delete</a>
        </th>
        
    </tr>
    
    <?php
             $sn++;
    
         }
     }
    else
    {
        ?>
    
    <tr>
        <th colspan="6" class="text-center">
            No Category found
        </th>
    </tr>
    
    <?php
    
    
    }
    ?>
    
    

</table>






















