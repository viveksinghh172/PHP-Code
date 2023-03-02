<?php
  $sel=mysqli_query($con,"select * from category order by created_at desc");
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
<h1>Category</h1>
<table class="table">
  <tr>
    <th colspan=6 class="text-center">
       <a href="?con=addcat" class="btn btn-danger">Add Category</a>
    </th>
  </tr>
</table>
  <table border="1" align="center">
  <tr align="center" style="font-size: 30px;">
    <th>S.no</th>
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
           <th><img src="images/attach/<?= $arr['image'];?>" width=50 height=50/></th>
           <th><?= $arr['created_at'];?></th>
           <th>
           <a href="?con=editcat&ecat=<?= $arr['id'];?>" class="btn btn-info">Edit</a> 
             <a href="javascript:void(0)" class="btn btn-danger delcat" cid="<?=  $arr['id'];?>">Delete</a>
            
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
       No Category found
    </th>
  </tr>
     <?php
    }
  ?>
</table>