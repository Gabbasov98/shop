<!DOCTYPE html>
<html>

	<head>
		<?php include('head.php'); ?>
	</head>

	<body>
		<style>
			.jlist {
				padding-top: 40px;
			}

			li {
				display: block;
				margin-bottom: 10px;
			}

			li a {
				color: #000000;
				font-size: 14px;
			}
		</style>
		<div class="page_wrapper">
			<div class="page_wrapper_content">
				<section class="jlist">
					<div class="container">
					<div class="jcont">
						<ul>
							<li>
								<a href="index.php" target="_blank">
									Index
								</a>
							</li>
							
							<li>
								<a href="404.php" target="_blank">
									404
								</a>
							</li>
							<li>
								<a href="about.php" target="_blank">
									About
								</a>
							</li>
							<li>
								<a href="accii-item.php" target="_blank">
									Accii-item
								</a>
							</li>
							<li>
								<a href="accii.php" target="_blank">
									Accii
								</a>
							</li>
							
							<li>
								<a href="cart.php" target="_blank">
									Cart
								</a>
							</li>
							<li>
								<a href="cart-empty.php" target="_blank">
									Cart Empty
								</a>
							</li>
							<li>
								<a href="cart-error.php" target="_blank">
									Cart Error
								</a>
							</li>
							<li>
								<a href="catalog.php" target="_blank">
									Catalog
								</a>
							</li>
							<li>
								<a href="catalog-category.php" target="_blank">
									Catalog Category
								</a>
							</li>
							<li>
								<a href="catalog-category-list.php" target="_blank">
									Catalog Category List
								</a>
							</li>
							<li>
								<a href="catalog-item.php" target="_blank">
									Catalog Item
								</a>
							</li>
							<li>
								<a href="catalog-item-nostock.php" target="_blank">
									Catalog Item nostock
								</a>
							</li>
							<li>
								<a href="order.php" target="_blank">
									Order
								</a>
							</li>
							<li>
								<a href="order-ok.php" target="_blank">
									Order Ok
								</a>
							</li>
							<li>
								<a href="sale.php" target="_blank">
									sale
								</a>
							</li>
							<li>
								<a href="search.php" target="_blank">
									search
								</a>
							</li>
							<li>
								<a href="textpage.php" target="_blank">
									textpage
								</a>
							</li>
							
							
						</ul>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#addCartModal">modal1</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#questionModal">modal2</button>
						<button style="border:1px solid black; margin-top: 20px; margin-left: 20px; width: 300px; height: 50px;" type="button" data-toggle="modal" data-target="#messageModal">modal3</button>


						
					</div></div>
				</section>
			</div>
			<?php include('footer.php'); ?>
			<?php include('modal.php'); ?>
		</div>

	</body>

</html>