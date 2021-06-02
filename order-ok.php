<!DOCTYPE html>
<html>
<head>
<title>Оформление заказа</title>
  <?php include('head.php'); ?>
  
</head>
<body>

	<div class="wrapper">
		<div class="content">
        <?php include('header.php'); ?>
            <div class="site__nav">
                <div class="container">
                    <h2 class="site__nav-current">Заказ успешно оформлен</h2>
                    <div class="breadcrumbs">
                        <span class="breadcrumbs__item"><a href="index.php">Главная</a></span>
                        <span class="breadcrumbs__item"><a href="news.php">Ваша корзина</a></span>
                    </div>
                </div>
            </div>
        
            <section class="order-ok">
                <div class="container">
                    <div class="order-ok__inner">
                        <div class="order-ok__left">
                            <h2 class="order-ok__title">Спасибо за покупку!</h2>
                            <p class="order-ok__desc">В ближайшее время наш менеджер свяжется с вами по указанному email или телефону.</p>
                            <div class="order-ok__tel">
                                <p>Изменить детали вашего заказа или задать вопрос,вы можете по телефону:</p>
                                <a href="tel:+74232506562">+7 (423) 250-65-62</a>
                            </div>
                            <a href="index.php" class="order-ok__btn">
                                <span>перейти на главную</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.99" height="8.99" viewBox="0 0 14.99 8.99">
                                    <style type="text/css">
                                        .st0{fill:#54858f;}
                                    </style>
                                    <path class="st0" d="M4.5,6C2.76,5.99 1.28,4.72 1.03,3L10.5,3C10.77,3 11,2.77 11,2.5L11,1.7L13.79,4.5L11,7.29L11,6.5C11,6.22 10.77,6 10.5,6ZM10.3,8.96C10.49,9.03 10.71,8.99 10.85,8.85L14.85,4.85C15.04,4.65 15.04,4.34 14.85,4.14L10.85,0.14C10.65,-0.04 10.34,-0.04 10.14,0.14C10.05,0.24 10,0.36 10,0.5L10,2L0.5,2C0.22,2 0,2.22 0,2.5C0,4.98 2.01,6.99 4.5,7L10,7L10,8.5C10,8.7 10.12,8.88 10.3,8.96"/>
                                </svg>
                            </a>
                        </div>
                        <div class="order-ok__right">
                            <div class="order-ok__top">
                                <span>ВАШ ЗАКАЗ №</span>
                                <span class="order-ok__num">000256</span>
                                <span>от 10.04.2021</span>
                            </div>
                            <p class="order-ok__info">Детали вашего заказа:</p>
                            <div class="order-ok__detail">
                                <div class="order-ok__detail-title">
                                    <span>Товаров:</span>
                                    <span>Стоимость товаров:</span>
                                    <span>Стоимость доставки:</span>
                                    <strong>Итого сумма заказа:</strong>
                                </div>
                                <div class="order-ok__detail-value">
                                    <span>5 шт.</span>
                                    <span>5 200 руб.</span>
                                    <span>0 руб.</span>
                                    <strong>5 200 <span>руб.</span></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
           
		</div>
		
	<?php include('footer.php'); ?>
	</div>



	
  <?php include('modal.php'); ?>

</body>
</html>