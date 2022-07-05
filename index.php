
<!DOCTYPE html>
<html>

<head>
	<title>МосСервис</title>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>



	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/swipebox.css">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Heavy Industry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<script src="js/modernizr.custom.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- top header -->
	<div class="banner">
		<div class="container">
			<div class="top-header">
				<div class="top-left">
					<ul>
						<li><a href="index.html">Главная</a></li>
						<li><a href="#banner_bottom">О нас</a></li>
						<li><a href="#destination_1">Услуги</a></li>
						<li><a href="#footer1">Контакты</a></li>

					</ul>
				</div>
				<div class="top-right">
					<ul>			
						<li><a class="goog" href="#"></a></li>
						<li><a href="index.php">khangeldi@gmail.com</a></li>
						<li><a href="https://wa.me/+79260460002">+7(926)046-00-02</a></li>
						<li><a href="dashboard/login.php">Войти</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<!--start-click-drop-down-menu-->
			<!--start-dropdown-->
			<script type="text/javascript">
				var $ = jQuery.noConflict();
				$(function () {
					$('#activator').click(function () {
						$('#box').animate({ 'top': '0px' }, 900);
					});
					$('#boxclose').click(function () {
						$('#box').animate({ 'top': '-1000px' }, 900);
					});
				});
				$(document).ready(function () {
					//Hide (Collapse) the toggle containers on load
					$(".toggle_container").hide();
					//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
					$(".trigger").click(function () {
						$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
					});

				});
			</script>
			<!--//End-click-drop-down-menu-->
			<div class="banner-info">
				<!-- responsiveslides -->
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
						// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						});
					});
				</script>
				<!-- responsiveslides -->
				<div id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-text">
								<h3>Ремонт квартир и домов в Москве!</h3>
								<p>УДОВЛЕТВОРИТЬ НАШИХ КЛИЕНТОВ</p>


								<!-- <a class="hvr-rectangle-out button" data-togal="modal" data-togal="exampleModal" >Оставить заявку</a> -->
								<a href="https://forms.gle/qfp4E1RM7NTbYHnz6" class="hvr-rectangle-out button">Оставить
									заявку</a>



							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>ОПЫТ И МАСТЕРСТВО</h3>
								<p>POWERED BY PEOPLE</p>
								<a class="hvr-rectangle-out button">Оставить заявку</a>

							</div>
						</li>
					</ul>
				</div>







			</div>
		</div>
	</div>
	<!-- //top header -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container" id="banner_bottom">
			<h3 class="tittle">О КОМПАНИИ</h3>
			<div class="strip"></div>
			<p>Наша компания занимается отделкой и ремонтом квартир, коттеджей, офисов, магазинов, салонов, ресторанов,
				баров и производственных помещений в Москве и Московской области.</p>
			<br>
			<p> В компании работают высококвалифицированные специалисты, большинство из них с высшим
				инженерно-строительным образованием, специалисты 5-го и 6-го разряда, обладающие всеми необходимыми
				знаниями, многолетним опытом. Все мастера остаются в команде вот уже на протяжении многих лет, со
				"стороны" нанимаются только разнорабочие для погрузки-разгрузки материала, выноса мусора, и то с жёстким
				отбором и дальнейшим контролем с нашей стороны.</p>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!--destination-starts-->
	<div class="destination">
		<div class="container" id="destination_1">
			<div class="destination-1">
				<div class="col-md-3 destination-left">
					<img src="images/r1.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/ComplObs.php">
						<h4>Обслуживание комплексное</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left destination-right">
					<img src="images/13.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/uslugSantech.php">
						<h4>Услуги сантехника</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/demontaj.php">
						<h4>Демонтажные услуги</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/14.jpg" alt="">
					<div class="tool two">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/avar_p.php">
						<h4>Аварийная служба</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/15.jpg" alt="">
					<div class="tool two">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>

				<div class="col-md-3 destination-left">
					<img src="images/12.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/naruj_Com.php">
						<h4>Наружная коммуникаций</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/12.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/vnuCom.php">
						<h4>Внутренний коммуникаций</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/pojar.php">
						<h4>Пожарные системы</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/14.jpg" alt="">
					<div class="tool two">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/injenSeti.php">
						<h4>Наружные инженерные сети</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/15.jpg" alt="">
					<div class="tool two">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left">
					<img src="images/12.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/diagnos.php">
						<h4>Диагностика</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="col-md-3 destination-left destination-right">
					<img src="images/13.jpg" alt="">
					<div class="tool">
						<img src="images/arrow.png" alt="" />
					</div>
				</div>
				<div class="col-md-3 destination-left destination-middle">
					<a href="../web/услуги/rabochie.php">
						<h4>Разнорабочие</h4>
					</a>
					<div class="strip one"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--destination-end-->
	<!--start-yachts-->
	<div id="top-industries" class="gallery">
		<div class="container">
			<h3 class="tittle">ТОП ОТРАСЛИ</h3>
			<div class="gallery-bottom">
				<div class="view view-ninth">
					<img
							src="images/santech.jpg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Сантехника</h2>
							<p>Профессиональные услуги сантехника. Наши сантехники работают чисто, быстро и профессионально.</p>
						</div>
					
				</div>
				<div class="view view-ninth">
					<img
							src="images/electrika.jpg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Электрика</h2>
							<p>Честный и опытный электрик ждет вашего заказа. Профессиональные услуги электрика с бысрым выездом. Работаем без выходных.</p>
						</div>
					
				</div>
				<div class="view view-ninth">
					<img
							src="images/otdelochnie-rabot.jpeg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Отделочные работы</h2>
							<p>Мастера с большим опытом работы.
								Шпатлевка, откосы, побелка, покраска, обои!
								Ответственный и исполнительный!
							</p> 

						</div>
					
				</div>
				<div class="view view-ninth">
				<img
							src="images/molyar.jpg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Малярные работы</h2>
							<p>Профессионалы выполнят штукатурно-малярные работы. Штукатурка стен, выравнивание по маякам.</p>

						</div>
					
				</div>
				<div class="view view-ninth">
					<img
							src="images/stoneWorks.jpg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Работы каменщика</h2>
							<p>Обще-строительные работы, облицовка фасада, устройство газоблоков, монолитные.</p>

						</div>
				
				</div>
				<div class="view view-ninth">
					<img
							src="images/PlotnW.jpg" alt="" class="img-responsive">
						<div class="mask mask-1"></div>
						<div class="mask mask-2"></div>
						<div class="content">
							<h2>Работы плотника</h2>
							<p>Услуги плотника ! Установка межкомнатных дверей,
								установка пластиковых окон и дверей.</p>

						</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>

	<!-- features-->
	<div class="services-bottom">
		<div class="container">
			<h3 class="tittle">ПРЕИМУЩЕСТВА НАШЕЙ КОМПАНИИ</h3>
			<div class="strip three"></div>
			<div class="services-bottom-grids">
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>ВЕРНЕМ 0,1% ОТ СУММЫ ДОГОВОРА ЗА КАЖДЫЙ ДЕНЬ ПРОСРОЧКИ</h4>
						<p>Мы всегда точно соблюдаем оговоренные сроки, прописанные в договоре и работаем без задержек.
						</p>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>РАБОТУ ВЫПОЛНЯЕМ ЧИСТО, КАЧЕСТВЕННО</h4>			
							<p>
							   Предостовляем профессиональные услуги с бысрым выездом. Работаем без выходных
							</p>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>ТЕХНИЧЕСКИЙ НАДЗОР</h4>
						<p>Специалисты компании «МоcСервис» проконтролируют все этапы работ, которые должны будут
							выполняться согласно составленному и утвержденному плану.</p>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-bottom-grid">
					<div class="col-xs-3 services-bottom-grd-left">
						<div class="time-service">
							<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-9 services-bottom-grd-right">
						<h4>Довольные клиенты</h4>		
							<p>
								Наши довольные клиенты. Мы всегда стремимся к тому, чтобы обеспечить высокое качество обслуживания и оставить после себя только приятные впечатления.
							</p>
					</div>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features-->
	<!-- footer -->
	<div id="footer1" class="footer">
		     <div class="container">
					<div class="div1">
						<div class="col-md-3 head">
							<h3>Контакты</h3>
							<ul class="inspired">
								<li><a href="">+7(926)046-00-02</a></li>
								<!-- <li><a href="#">Instrumentation</a></li>
								<li><a href="#">Mechanisms</a></li>
								<li><a href="#">protections</a></li> -->
							</ul>
						</div>
						<div class="col-md-3 head">
							<h3>Gmail</h3>
							<ul class="customer">
								<li><a href="index.php">khangeldi@gmail.com</a></li>
								<!-- <li><a href="#">Privacy Policy</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="#">FAQ</a></li> -->
							</ul>
						</div>
						
						<div class="col-md-3 head">
							<h3>Социальные сети</h3>
							<ul class="contents">
								<li><a href="https://wa.me/+79260460002">WhatsApp</a></li>
								<li><a href="https://t.me/zhalynbekov">Telegram</a></li>
								<!-- <li><a href="#">Asperiores</a></li>
								<li><a href="#">Doloribus</a></li> -->
							</ul>
						</div>
						<div class="col-md-3 mail_soc">
							<div class="form_data">
								<h3>Напишите свой Email</h3>
									<form>
										<input type="email" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}" required="">
										<input type="submit" value=" ">
									</form>

							</div>
								<div class="social">
									<ul>
										<li><a href="#" class="face"></a></li>
										<li><a href="#" class="twit"></a></li>
										<li><a href="#" class="gplus"></a></li>
									</ul>
								</div>
						</div>				
						<div class="clearfix"></div>
					</div>
					
				</div>
				
	</div>		
	

	
	<!-- footer -->
	<!-- copy -->
	<div class="div2">
		<div class="container">
			<p><a>©2022 «МосСервис». Все права защищены.</a></p>
		</div>
	</div>
	<!-- copy -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->

</body>

</html>