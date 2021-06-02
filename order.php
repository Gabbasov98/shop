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
                <h2 class="site__nav-current">Оформление заказа</h2>
                 
                <div class="breadcrumbs">
                    <span class="breadcrumbs__item"><a href="index.php">Главная</a></span>
                    <span class="breadcrumbs__item"><a href="news.php">Ваша корзина</a></span>
                </div>

            </div>
        </div>
        
        <section class="order">
            <div class="container">
                <div class="order__inner">
                    <form action="" class="order__form">
                        <div class="order__user-data">
                            <p class="order__title">Данные получателя</p>
                            <div class="order__group">
                                <div class="order__group-left">
                                    <p class="order__surname">
                                        <label for="">Фамилия <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__name ">
                                        <label for="">Имя <span class="star">*</span></label>
                                        <input type="text" class="input-error">
                                    </p>
                                    <p class="order__fname">
                                        <label for="">Отчество</label>
                                        <input type="text" >
                                    </p>
                                </div>
                                <div class="order__group-right">
                                    <p class="order__mail">
                                        <label for="">Эл.почта <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__phone">
                                        <label for="">Номер телефона *</label>
                                        <input type="tel" placeholder="+7 (     )      -" >
                                    </p>
                                    <p class="order__must"><span class="star">*</span> обязательные поля для заполнения</p>
                                </div>
                            
                            
                            
                            
                            
                            
                            </div>
                            
                        </div>
                        <div class="order__delivery">
                            <div class="order__delivery-select">
                                <p class="order__title">Доставка заказа</p>    
                                <p class="order__delivery-desc">Выберите способ доставки</p>
                                <div class="order__delivery-item order__delivery-item--checked">
                                    <label>
                                        <input checked value="sdek" name="delivery" class="radio" type="radio">
                                        <span class="radio-style"></span>
                                    </label>
                                    <div class="order__delivery-info">
                                        <p>По России - Транспортной компаний СДЭК</p>
                                        <p>доставка оплачивается при получении</p>
                                    </div>
                                </div>
                                <div class="order__delivery-item">
                                    <label>
                                        <input value="courier" name="delivery" class="radio" type="radio">
                                        <span class="radio-style"></span>
                                    </label>
                                    <div class="order__delivery-info">
                                        <p>Курьером по Владивостоку</p>
                                        <p>детали по доставке укажите тут</p>
                                    </div>
                                </div>
                                <div class="order__delivery-item">
                                    <label>
                                        <input value="self" name="delivery" class="radio" type="radio">
                                        <span class="radio-style"></span>
                                    </label>
                                    <div class="order__delivery-info">
                                        <p>Самовывоз со склада во Владивостоке</p>
                                        <p>бесплатно</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order__delivery-right">
                                <p class="order__delivery-option-info">выбранный метод доставки</p>
                                <div class="order__option order__option--active" data-tabs-target="sdek">
                                    <p class="order__option-title">Транспортной компанией СДЭК</p>
                                    <p class="order__city">
                                        <label for="">Город, населенный пункт <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address">
                                        <label for="">Адрес <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address-com">
                                        <label for="">Примечание к адресу</label>
                                        <textarea></textarea>
                                    </p>
                                </div>
                                <div class="order__option" data-tabs-target="courier">
                                    <p class="order__option-title">Курьером по Владивостоку</p>
                                    <p class="order__city">
                                        <label for="">2 Город, населенный пункт <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address">
                                        <label for="">Адрес <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address-com">
                                        <label for="">Примечание к адресу</label>
                                        <textarea></textarea>
                                    </p>
                                </div>
                                <div class="order__option" data-tabs-target="self">
                                    <p class="order__option-title">Самовывоз со склада во Владивостоке</p>
                                    <p class="order__city">
                                        <label for="">3 Город, населенный пункт <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address">
                                        <label for="">Адрес <span class="star">*</span></label>
                                        <input type="text" >
                                    </p>
                                    <p class="order__address-com">
                                        <label for="">Примечание к адресу</label>
                                        <textarea></textarea>
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="order__pay">
                            <p class="order__title">Оплата заказа</p>
                            <div class="order__pay-input">
                                <label>
                                    <input  class="radio" type="radio">
                                    <span class="radio-style"></span>
                                </label>
                                <div class="order__pay-info">
                                    Картой онлайн VISA, MasterCard, МИР
                                </div>
                                <img src="images/pay.png" alt="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <div class="order-info">
            <div class="container">
                <div class="order-info__inner">
                    <div class="order-info__left">
                        <span class="order-info__cart">
                            <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27"><defs><style>.cls-1{fill:#54858e;}</style></defs><path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                        </span>
                        <div>
                            <p class="order-info__text">
                                <span>стоимость товаров:</span>
                                <span><strong>42 850</strong> руб.</span>
                            </p>
                            <p class="order-info__text">
                                <span>стоимость доставки:</span>
                                <span><strong>0</strong> руб.</span>
                            </p>
                        </div>
                    </div>
                    <div class="order-info__right">
                        <p class="order-info__text2">
                            <span>Итого заказ на сумму:</span>
                            <span><strong>42 850</strong> руб.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="order-nav">
            <div class="container">
                <div class="order-nav__inner">
                    <a href="" class="order-nav__back">
                        <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 9"><defs><style>.cls-1{fill:#54858f;}</style></defs><path class="cls-1" d="M295.6,424.78v-1.5h5.5a4.51,4.51,0,0,0,4.5-4.5.5.5,0,0,0-.5-.5h-9.5v-1.5a.47.47,0,0,0-.15-.35.48.48,0,0,0-.7,0l-4,4a.48.48,0,0,0,0,.7l4,4a.47.47,0,0,0,.54.11A.49.49,0,0,0,295.6,424.78Zm-.5-2.5a.5.5,0,0,0-.5.5v.79l-2.79-2.79L294.6,418v.79a.5.5,0,0,0,.5.5h9.46a3.5,3.5,0,0,1-3.46,3Z" transform="translate(-290.6 -416.28)"/></svg>
                        <span>отредактировать заказ</span>
                    </a>
                    <div class="order-nav__error">
                        <span>Пожалуйста заполните все обязательные поля и примите соглашение</span>
                    </div>
                    <div class="order-nav__last">
                        <div class="order-nav__agree">
                            <label>
                                <input  value="sdek"  class="check" type="checkbox">
                                <span class="check-style"></span>
                            </label>
                            <span>Даю согласие на обработку персональной информации согласно <a href="#">политики сайта</a></span>
                        </div>
                        <button class="order-nav__btn">
                            <span>ПЕРЕЙТИ К ОПЛАТЕ</span>
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="order-nav__comment">
                        <label for="">Примечание к заказу</label>
                        <textarea></textarea>
                    </div>
                </div>
            </div>
        </div>
           
		</div>
		
	<?php include('footer.php'); ?>
	</div>



	
  <?php include('modal.php'); ?>

</body>
</html>