<?php
  $sel=mysqli_query($con,"select * from product order by created_at desc");
?>
<script>
  $(document).ready(function()
  {
    $(".delpro").click(function()
    {
      let pid=$(".delpro").attr("pid");
      $.post('api.php',{'delpro':pid},function(res,status)
      {
        alert(res);
        $('body').load('dashboard.php?con=products');
      })
    })
  })
</script>
<h1>Product</h1>
<table  class="table">
  <tr>
    <th colspan=6 class="text-center">
       <a href="?con=addpro" class="btn btn-danger">Add product</a>
    </th>
  </tr>
</table>
 <table  border="1" align="center"> 
  <tr align="center" style="font-size:30px;">
    <th>S.no</th>
    <th>Category</th>
    <th>Mobile Name</th>
    <th>Price</th>
    <th>Quantity</th>
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
           <th><?= $arr['mob_name'];?></th>
           <th><?= $arr['price'];?></th>
           <th><?= $arr['quantity'];?></th>
           <th><img src="images/attach/<?= $arr['image'];?>" width=50 height=50/></th>
           <th><?= $arr['created_at'];?></th>
           <th>
           <a href="?con=editpro&epro=<?= $arr['id'];?>" class="btn btn-info">Edit</a> 
             <a href="javascript:void(0)" class="btn btn-danger delpro" pid="<?=$arr['id'];?>">Delete</a>
            
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
    <th colspan=6 class="text-center">
       No product found
    </th>
  </tr>
     <?php
    }
  ?>
</table>