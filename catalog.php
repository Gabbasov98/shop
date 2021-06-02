<!DOCTYPE html>
<html>
<head>
<title>Каталог</title>
  <?php include('head.php'); ?>
  
</head>
<body>

	<div class="wrapper">
		<div class="content">
		<?php include('header.php'); ?>
        <div class="site__nav">
            <div class="container">
                <h2 class="site__nav-current">Каталог товаров</h2>
                <div class="breadcrumbs">
                    <span class="breadcrumbs__item"><a href="index.php">Главная</a></span>
                    <span class="breadcrumbs__item"><a href="accii.php">Каталог</a></span>
                </div>
            </div>
        </div>

		<section class="catalog catalog-page">
				<div class="container">
					<div class="catalog__inner">
						<h2 class="catalog__title">Каталог товаров</h2>
						<div class="catalog__items">
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog1.jpg" alt="">
									</div>
									<p class="catalog__item-title">Мастика, марципан</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog2.jpg" alt="">
									</div>
									<p class="catalog__item-title">Шоколад, глазурь, какао</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog3.jpg" alt="">
									</div>
									<p class="catalog__item-title">Пищевые красители</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog4.jpg" alt="">
									</div>
									<p class="catalog__item-title">Упаковка, коробки</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog5.jpg" alt="">
									</div>
									<p class="catalog__item-title">Кондитерские насадки и мешки</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog6.jpg" alt="">
									</div>
									<p class="catalog__item-title">Формы для шоколада и конфет</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog7.jpg" alt="">
									</div>
									<p class="catalog__item-title">Формы кондитерские</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="">
									<div class="catalog__item-img">
										<img src="images/catalog8.jpg" alt="">
									</div>
									<p class="catalog__item-title">Инструменты</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog9.jpg" alt="">
									</div>
									<p class="catalog__item-title">Декор и капсулы</p>
								</a>
							</div>
							<div class="catalog__item">
								<a href="catalog-item.php">
									<div class="catalog__item-img">
										<img src="images/catalog10.jpg" alt="">
									</div>
									<p class="catalog__item-title">Бумажные формы</p>
								</a>
							</div>
						</div>
						<div class="catalog__search">
							<p class="catalog__search-title">Поиск по каталогу</p>
							<div class="catalog__search-block">
								<form action="">
									
									<input  type="text" placeholder="введите поисковый запрос">
									<select class="search__select" name="" id="" >
										<option  value="во всех категориях">во всех категориях</option>
										<option value="в других категориях">в других категориях</option>
										<option value="другие категории">другие категории</option>
									</select>
									<button class="catalog__search-btn">ИСКАТЬ</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

        
		
	<?php include('footer.php'); ?>
	</div>



	
  <?php include('modal.php'); ?>

</body>
</html>