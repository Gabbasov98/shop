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
                    <div class="cart__head">
                        <span class="cart__head-item">фото</span>
                        <span class="cart__head-item">товар</span>
                        <span class="cart__head-item">стоимость</span>
                        <span class="cart__head-item">кол-во</span>
                        <span class="cart__head-item">итого</span>
                        <span class="cart__head-item">удалить</span>
                    </div>

                    <div class="cart__items">
                        <div class="cart__item">
                            <div class="cart__item-img">
                                <img src="images/cart1.jpg" alt="">
                            </div>
                            <div class="cart__item-info">
                                <p class="cart__item-title">Форма для выпечки со съемным дном Caramella гранит <br> круг 20 см</p>
                                <p class="cart__item-code">Код товара: 008244</p>
                            </div>
                            <div class="cart__item-price">
                                <div><span>280</span> руб / шт</div>
                                <div class="cart__item-indicator"></div>
                            </div>
                            <div class="cart__item-amount">
                                <div class="cart__item-control">
                                    <button class="cart__item-minus disable">-</button>
                                    <span class="cart__item-num ">1</span>
                                    <button class="cart__item-plus">+</button>
                                </div>
                            </div>
                            <div class="cart__item-total">
                                <span>280</span> руб
                            </div>
                            <div class="cart__item-delete">
                                <span >
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                    <defs><style></style></defs>
                                    <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                    <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cart__item">
                            <div class="cart__item-img">
                                <img src="images/cart2.jpg" alt="">
                            </div>
                            <div class="cart__item-info">
                                <p class="cart__item-title">Форма для кулича Regent d=14 см, h=12 см</p>
                                <p class="cart__item-code">Код товара: 008244</p>
                            </div>
                            <div class="cart__item-price">
                                <div><span>1 580</span> руб / шт</div>
                                <div class="cart__item-indicator"></div>
                            </div>
                            <div class="cart__item-amount"> 
                                <div class="cart__item-control">
                                    <button class="cart__item-minus ">-</button>
                                    <span class="cart__item-num ">2</span>
                                    <button class="cart__item-plus">+</button>
                                </div>
                            </div>
                            <div class="cart__item-total"><span>3 060</span> руб.</div>
                            <div class="cart__item-delete">
                            <span >
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                    <defs><style></style></defs>
                                    <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                    <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cart__item">
                            <div class="cart__item-img">
                                <img src="images/cart3.jpg" alt="">
                            </div>
                            <div class="cart__item-info">
                                <p class="cart__item-title">Лента бордюрная "Фрукты" высота 5 см, длина 1 м, толщина <br>  40 мкм</p>
                                <p class="cart__item-code">Код товара: 008244</p>
                            </div>
                            <div class="cart__item-price">
                                <span>2 220</span> руб / шт
                                <div class="cart__item-indicator"></div>
                            </div>
                            <div class="cart__item-amount"> 
                                <div class="cart__item-control">
                                    <button class="cart__item-minus disable">-</button>
                                    <span class="cart__item-num ">1</span>
                                    <button class="cart__item-plus">+</button>
                                </div>
                            </div>
                            <div class="cart__item-total"><span>2 220</span> руб.</div>
                            <div class="cart__item-delete">
                            <span >
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                    <defs><style></style></defs>
                                    <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                    <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cart__item">
                            <div class="cart__item-img">
                                <img src="images/cart4.jpg" alt="">
                            </div>
                            <div class="cart__item-info">
                                <p class="cart__item-title">Набор кондитерских насадок Базовый 7 шт. с мешком и <br> переходником</p>
                                <p class="cart__item-code">Код товара: 008244</p>
                            </div>
                            <div class="cart__item-price">
                                <div><span>550</span> руб / шт</div>
                                <div class="cart__item-indicator"></div>
                            </div>
                            <div class="cart__item-amount">
                                <div class="cart__item-control">
                                    <button class="cart__item-minus disable">-</button>
                                    <span class="cart__item-num ">1</span>
                                    <button class="cart__item-plus">+</button>
                                </div>
                            </div>
                            <div class="cart__item-total"><span>550</span> руб</div>
                            <div class="cart__item-delete">
                            <span >
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                    <defs><style></style></defs>
                                    <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                    <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                                </span>
                            </div>
                        </div>
                        <div class="cart__item">
                            <div class="cart__item-img">
                                <img src="images/cart5.jpg" alt="">
                            </div>
                            <div class="cart__item-info">
                                <p class="cart__item-title">Кольцо раздвижное с ручками и разметкой 16-30 см, <br> высота 8 см</p>
                                <p class="cart__item-code">Код товара: 008244</p>
                            </div>
                            <div class="cart__item-price">
                                <div><span>195</span> руб / шт</div>
                                <div class="cart__item-indicator"></div>
                            </div>
                            <div class="cart__item-amount">
                                <div class="cart__item-control">
                                    <button class="cart__item-minus disable">-</button>
                                    <span class="cart__item-num ">1</span>
                                    <button class="cart__item-plus">+</button>
                                </div>
                            </div>
                            <div class="cart__item-total"><span>195</span> руб</div>
                            <div class="cart__item-delete">
                            <span >
                                    <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                    <defs><style></style></defs>
                                    <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                    <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="cart__footer">
                        <div class="cart__footer-title">
                            Товаров в заказе: 
                            <span>5 шт.</span>
                        </div>
                        <button class="cart__footer-btn">
                            <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.85 27">
                                <defs><style></style></defs>
                                <path class="cls-1" d="M282,418.13h-1.4a1.35,1.35,0,1,1,0-2.7c1.87,0,3.74,0,5.62,0a.61.61,0,0,0,.57-.31q2.36-3.56,4.73-7.09a1.38,1.38,0,0,1,1.51-.67,1.35,1.35,0,0,1,.77,2.11c-.71,1.08-1.43,2.15-2.15,3.23l-1.8,2.7h16.52c-.09-.16-.17-.28-.25-.41l-3.68-5.5a1.34,1.34,0,0,1-.07-1.51,1.31,1.31,0,0,1,1.28-.65,1.44,1.44,0,0,1,1.11.75c1.53,2.31,3.08,4.6,4.6,6.92a.84.84,0,0,0,.81.43c1.79,0,3.58,0,5.36,0a1.36,1.36,0,1,1,0,2.7h-1.3c-.08.93-.16,1.84-.24,2.75-.27,3.27-.53,6.55-.83,9.82a4.25,4.25,0,0,1-4,3.62H287a4.25,4.25,0,0,1-4-3.6c-.25-2.6-.44-5.2-.66-7.81C282.23,421.33,282.1,419.75,282,418.13Zm29.51,0H284.7a1.7,1.7,0,0,0,0,.24c.24,2.91.47,5.83.72,8.74.09,1.16.19,2.32.31,3.48a1,1,0,0,0,1,1,4.87,4.87,0,0,0,.54,0h21.38c1.46,0,1.7-.26,1.81-1.72.17-2.22.37-4.43.55-6.64C311.19,421.57,311.33,419.88,311.47,418.16Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M292.67,424.89c0,.87,0,1.74,0,2.61a1.35,1.35,0,0,1-1.35,1.42,1.34,1.34,0,0,1-1.35-1.41c0-1.75,0-3.51,0-5.26a1.35,1.35,0,1,1,2.7,0C292.68,423.13,292.67,424,292.67,424.89Z" transform="translate(-279.15 -407.33)"/>
                                <path class="cls-1" d="M296.73,424.88c0-.87,0-1.74,0-2.61a1.35,1.35,0,1,1,2.7,0v5.22a1.35,1.35,0,1,1-2.7,0C296.72,426.62,296.73,425.75,296.73,424.88Z" transform="translate(-279.15 -407.33)"/><path class="cls-1" d="M306.19,424.89v2.6a1.35,1.35,0,1,1-2.7,0q0-2.61,0-5.22a1.35,1.35,0,1,1,2.7,0Z" transform="translate(-279.15 -407.33)"/></svg>
                            <span>очистить <strong>корзину</strong></span>
                        </button>
                        <div class="cart__footer-total">
                            <span>Итого:</span>
                            <span>5 980</span>
                            <span> руб.</span>
                        </div>
                        <button class="cart__footer-link"  >
                            <span>ПЕРЕЙТИ К ОФОРМЛЕНИЮ</span>
                            <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.21 10.23">
                                <defs>
                                <style></style>
                                </defs>
                                <path class="cls-1" d="M296.46,425.73a.56.56,0,0,1-.79,0l-.54-.53a.57.57,0,0,1,0-.8l3.61-3.62-3.61-3.63a.57.57,0,0,1,0-.8l.54-.53a.56.56,0,0,1,.79,0l4.56,4.56a.57.57,0,0,1,0,.79Z" transform="translate(-294.97 -415.66)"/></svg>
                        </button>
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
					<h2 class="new__title">Ранее вы также смотрели</h2>
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