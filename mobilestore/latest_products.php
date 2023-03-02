<!-- new-products -->
<div class="new-products">
		<div class="container">
			<h3>Latest  Products</h3>
			<div class="agileinfo_new_products_grids">
			<?php
			$sel=mysqli_query($con,"select * from product order by created_at desc limit 4");
			while($arr=mysqli_fetch_assoc($sel))
			{
				?>
            <div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="admin_panel/images/attach/<?= $arr['image'];?>" alt=" " class="img-responsive" />
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="product_detail.php?id=<?= $arr['id'];?>"><?= $arr['mob_name'];?></a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>Rs.<?= $arr['price'];?></span> <i class="item_price">Rs.<?= $arr['price'];?></i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Red Laptop"> 
								<input type="hidden" name="amount" value="500.00">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<?php
			}
			?>
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->