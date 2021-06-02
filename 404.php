<!DOCTYPE html>
<html>
<head>
<title>404</title>
  <?php include('head.php'); ?>
  
</head>
<body>

	<div class="wrapper">
		<div class="content">
        <?php include('header.php'); ?>
            <section class="error-404">
                <div class="container">
                    <div class="error-404__inner">
                        <div class="error-404__img">
                            <img src="images/404.jpg" alt="">
                        </div>
                        <div class="error-404__info">
                            <h2 class="error-404__title">Страница не найдена</h2>
                            <p class="error-404__desc">Запрошенная вами страница не найдена, <br> или была перемещена</p>
                            <p class="error-404__hint">Попробуйте найти нужный вам товар через поиск, или вернитесь назад.</p>
                            <button class="error-404__btn"><a href="index.php">перейти на главную</a></button>
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