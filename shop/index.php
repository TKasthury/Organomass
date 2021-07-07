<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread" style="color:;">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center <!--sticky-topp-->">
    			<div class="col-md-10 mb-5 text-center" <!--style="background-color: white;"-->
					<ul class="product-category" style="padding:23px;">
                        <li><a href="#" class="active">Vegetables</a></li>
                        <li><a href=".?sec=shop&page=juice&act=shop">Fresh Fruit Juice</a></li>
    					<li><a href=".?sec=shop&page=fruits&act=shop">Fruits</a></li>
    					<li><a href=".?sec=shop&page=dried&act=hcf">Dried</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
			<?php
                    $result=mysqli_query($con,"SELECT * FROM vegetables ORDER BY product_id ASC");
                    while($row=$result->fetch_assoc()):
                ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="<?=$row['Image_parth']?>" alt="Colorlib Template">
    						
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?=$row['product_name'] ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 <?php echo(null!=='offer_prize')?'':'price-dc'?>">Rs <?=number_format($row['prize'],2) ?></span><span class="price-sale"><!-- --></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href=".?sec=pages&page=addtocart&id=<?= $row['product_id'] ?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							
    							</div>
    						</div>
    					</div>
    				</div>
				</div>
				<?php endwhile;?>
    		</div>
    		</div>			
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>