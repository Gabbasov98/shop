<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); ?>
  <title>Главная</title>
</head>
<body>
	
	<div class="wrapper">
		<div class="content">
		<?php include('header.php'); ?>
			
			<section class="main">
				<div class="container">
					<div class="main__inner">
						<div class="main__slider">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="main__slide-img">
											<img src="images/banner1.jpg" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="main__slide-img">
											<img src="images/banner2.jpg" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="main__slide-img">
											<img src="images/banner1.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="swiper-pagination"></div>

								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>

							</div>
						</div>
						<div class="main__banners">
							<div class="main__banner">
								<img src="images/banner1.jpg" alt="">
							</div>
							<div class="main__banner">
								<img src="images/banner2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="catalog">
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
									<button class="catalog__search-btn" >ИСКАТЬ</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="new">
				<div class="container">
					<div class="new__inner">
					<h2 class="new__title">Наши новинки</h2>
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new1.jpg" alt="">
									</div>
									<p class="new__item-title">Подложка пластиковая круглая 7,5 см Бирюзовая <br> (1 шт.)</p>
									<p class="new__item-code">Код товара: 008244</p>
									<p class="new__item-price"><span>8</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new2.jpg" alt="">
									</div>
									<p class="new__item-title">Шоколад Callebaut (Упак 2,5 кг) Белый 25,9% какао CW2</p>
									<p class="new__item-code">Код товара: 003522</p>
									<p class="new__item-price"><span>2488</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new3.jpg" alt="">
									</div>
									<p class="new__item-title">Форма для выпечки круглая разъемная 20x6,5 см</p>
									<p class="new__item-code">Код товара: 006598</p>
									<p class="new__item-price"><span>280</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new4.jpg" alt="">
									</div>
									<p class="new__item-title">Набор форм разъемных для выпечки 3 шт. (Квадратная, круглая, сердце)</p>
									<p class="new__item-code">Код товара: 002563</p>
									<p class="new__item-price"><span>998</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new5.jpg" alt="">
									</div>
									<p class="new__item-title">Форма бумажная 7А белая 50/30 (50 шт)</p>
									<p class="new__item-code">Код товара: 362521</p>
									<p class="new__item-price"><span>30</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new1.jpg" alt="">
									</div>
									<p class="new__item-title">Подложка пластиковая круглая 7,5 см Бирюзовая <br> (1 шт.)</p>
									<p class="new__item-code">Код товара: 008244</p>
									<p class="new__item-price"><span>8</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new2.jpg" alt="">
									</div>
									<p class="new__item-title">Шоколад Callebaut (Упак 2,5 кг) Белый 25,9% какао CW2</p>
									<p class="new__item-code">Код товара: 003522</p>
									<p class="new__item-price"><span>2488</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new3.jpg" alt="">
									</div>
									<p class="new__item-title">Форма для выпечки круглая разъемная 20x6,5 см</p>
									<p class="new__item-code">Код товара: 006598</p>
									<p class="new__item-price"><span>280</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new4.jpg" alt="">
									</div>
									<p class="new__item-title">Набор форм разъемных для выпечки 3 шт. (Квадратная, круглая, сердце)</p>
									<p class="new__item-code">Код товара: 002563</p>
									<p class="new__item-price"><span>998</span> руб / шт</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="new__item">
									<div class="new__item-top">
										<img src="images/new5.jpg" alt="">
									</div>
									<p class="new__item-title">Форма бумажная 7А белая 50/30 (50 шт)</p>
									<p class="new__item-code">Код товара: 362521</p>
									<p class="new__item-price"><span>30</span> руб / шт</p>
								</div>
							</div>
						</div>
						

					</div>
					<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					<button class="new__btn">СМОТРЕТЬ ВСЕ НОВИНКИ</button>
					</div>
				</div>
			</section>

		</div>
		
	<?php include('footer.php'); ?>
	</div>



	
  <?php include('modal.php'); ?>

</body>
</html>