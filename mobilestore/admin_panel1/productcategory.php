<div class="form-group">
<label> Category </label>
   <select name="category" class="form-control">
      <?php
  $sel=mysqli_query($con,"select category from category");
  while($arr=mysqli_fetch_assoc($sel))
  {
    ?>
 <option value="<?= $arr['category'];?>"><?= $arr['category'];?></option>
    <?php
  }
      ?>
   </select>
</div>