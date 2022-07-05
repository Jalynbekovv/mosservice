<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $phone = $email = $text ="";
$name_err = $phone_err = $email_err = $text_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Пожалуйста, введите имя.";     
    } else{
        $name = $input_name;
    }
    
    
    // // Validate name
    //     $input_phone = trim($_POST["phone"]);
    //     if(empty($input_phone)){
    //         $phone_err = "Пожалуйста, введите номер.";     
    //     } else{
    //         $phone = $input_phone;
    //     }


    // Validate salary
    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Пожалуйста, введите номер телефона.";     
    } elseif(!ctype_digit($input_phone)){
        $phone_err = "Пожалуйста, введите цифры.";
    } else{
        $phone = $input_phone;
    }









            // Validate name
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Пожалуйста, введите почту.";     
    } else{
        $email = $input_email;
    }


	// Validate address
    $input_text = trim($_POST["text"]);
    if(empty($input_text)){
        $text_err = "Пожалуйста, введите текст.";     
    } else{
        $text = $input_text;
    }



    
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($phone_err) && empty($email_err) && empty($text_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO applications (name, phone, email, text) VALUES (?, ?, ?, ?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_name, $param_phone, $param_email, $param_text);
            
            // Set parameters
            $param_name = $name;
            $param_phone = $phone;
            $param_email = $email;
			$param_text = $text;
    
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: ../index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>















<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	<link rel="stylesheet" href="style/compleks.css">
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../услуги.css/аварийная служба.css" rel="stylesheet" type="text/css" media="all" />
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
						<li><a href="../index.html">Главная</a></li>
					</ul>
				</div>
				<div class="top-right">
					<ul>
						<li><a href="index.php">khangeldi@gmail.com</a></li>
						<li><a href="https://wa.me/+79260460002">+7(926)046-00-02</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="main-page">
				
			<div class="description">
					<h1>Внутренняя коммуникаций</h1>

					<p>Коммуникации – это системы, в которые входит специальное оборудование и инфраструктура. Их функции разнообразны: обеспечение подачи и распределения внутри здания электричества, тепла, воздуха, горячей и холодной воды, отвод сточных вод, поддержка работы телевидения, телефонной связи, доступ в интернет, а также выполнение различных задач, связанных с безопасностью</p>
				</div>








                

				<div class="wrapper" >
                <!-- style="background-color: #f2e1e138; " -->
        <div class="container-fluid" >
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-12">
                    <!-- <h2 class="mt-5 text-center">Оставить заявку</h2> -->
                    <h1 class="text-center">Оставьте свою заявку</h1>
					<br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <!-- <label><b>Имя</b></label> -->
                            <input type="text"  placeholder="Имя" name="name" class="form-control  <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
<br>
						<div class="form-group">
                            <!-- <label>Salary</label> -->
                            <input type="text" placeholder="Номер телефона" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                            <span class="invalid-feedback"><?php echo $phone_err;?></span>
                        </div>
<br>
                        <div class="form-group">
                            <!-- <label><b>Эл. почта</b></label> -->
                            <input type="text" placeholder="E-mail адресс" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
<br>
						<div class="form-group">
                            <!-- <label>Text</label> -->
                            <textarea name="text" placeholder="Сообщение..." class="form-control <?php echo (!empty($text_err)) ? 'is-invalid' : ''; ?>"><?php echo $text; ?></textarea>
                            <span class="invalid-feedback"><?php echo $text_err;?></span>
                        </div>
 <br>    
                        <input type="submit" class="btn btn-primary" value="Отправить">
                        <!-- <a href="index.php" class="btn btn-secondary ml-2">Отмена</a> -->
                        <br>
                    </form>
                </div>
            </div>    
            <br>    
        </div>
    </div>



			</div>
		</div>
	</div>