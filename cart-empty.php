<!DOCTYPE html>
<html>
<head>
<title>Корзина</title>
  <?php include('head.php'); ?>
  
</head>
<body>

	<div class="wrapper">
		<div class="content">
		<?php include('header.php'); ?>
        <div class="site__nav">
            <div class="container">
                <h2 class="site__nav-current">Ваша корзина</h2>
                <div class="breadcrumbs">
                    <span class="breadcrumbs__item"><a href="index.php">Главная</a></span>
                    <span class="breadcrumbs__item"><a href="accii.php">Ваша корзина</a></span>
                </div>
            </div>
        </div>

        <section class="cart">
            <div class="container">
                <div class="cart__inner">
                    

                    <div class="cart-empty">
                        <div class="cart-empty__img">
                            <img src="images/cart_empty.png" alt="">
                        </div>
                        <div class="cart-empty__info">
                            <p class="cart-empty__title">В вашей корзине <span>пока совсем нет товаров!</span></p>
                            <p class="cart-empty__desc">Переходите в <a href="catalog.php">наш каталог</a>, выбирайте товары, кладите их в корзину, <br>и возврайтесь сюда как будете готовы.</p>
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
                   
                    <div class="cart-nav">
                        <a href="" class="cart-nav__btn cart-nav__btn--back">
                            <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9"><defs><style></style></defs><path class="cls-1" d="M295.6,424.78v-1.5h5.5a4.51,4.51,0,0,0,4.5-4.5.5.5,0,0,0-.5-.5h-9.5v-1.5a.47.47,0,0,0-.15-.35.48.48,0,0,0-.7,0l-4,4a.48.48,0,0,0,0,.7l4,4a.47.47,0,0,0,.54.11A.49.49,0,0,0,295.6,424.78Zm-.5-2.5a.5.5,0,0,0-.5.5v.79l-2.79-2.79L294.6,418v.79a.5.5,0,0,0,.5.5h9.46a3.5,3.5,0,0,1-3.46,3Z" transform="translate(-290.6 -416.28)"/></svg>
                            <span>вернуться <strong>в каталог</strong></span>
                        </a>
                        <button class="cart-nav__btn cart-nav__btn--reload">
                            <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.09 12.09"><defs><style></style></defs><path class="cls-1" d="M304.08,419.48h0a.43.43,0,0,0-.39.46v.4a5.18,5.18,0,1,1-7.34-4.71v2.12a.44.44,0,0,0,.87,0v-3a.43.43,0,0,0-.43-.43h-3.89a.43.43,0,0,0,0,.86h2.5a6,6,0,1,0,9.16,5.18v-.47A.45.45,0,0,0,304.08,419.48Z" transform="translate(-292.46 -414.31)"/><path class="cls-1" d="M298.5,415.17a5.17,5.17,0,0,1,4.6,2.79.43.43,0,0,0,.38.23.46.46,0,0,0,.2-.05.43.43,0,0,0,.18-.58,6,6,0,0,0-5.36-3.25.43.43,0,0,0,0,.86Z" transform="translate(-292.46 -414.31)"/></svg>
                            <span>обновить <strong>корзину</strong></span>
                        </button>
                    </div>

                </div>
            </div>
        </section>
        
        <section class="new">
				<div class="container">
					<div class="new__inner">
					<h2 class="new__title">Ранее вы смотрели...</h2>
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