<?php
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$name = $phone = $email = $date = $text ="";
$name_err = $phone_err = $email_err = $date_err = $text_err ="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Пожалуйста, введите имя.";     
    } else{
        $name = $input_name;
    }

    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Пожалуйста, введите телефон.";     
    } else{
        $phone = $input_phone;
    }

    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Пожалуйста, введите эл. почту.";     
    } else{
        $email = $input_email;
    }

    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Пожалуйста, введите дату.";     
    } else{
        $date = $input_date;
    }


    	// Validate address
        $input_text = trim($_POST["text"]);
        if(empty($input_text)){
            $text_err = "Пожалуйста, введите текст.";     
        } else{
            $text = $input_text;
        }
    
 





    
    // Check input errors before inserting in database
    if(empty($name_err)){
        // Prepare an update statement
        $sql = "UPDATE applications SET name=?, phone=?, email=?, date=?, text=? WHERE id=?";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssi", $param_name, $param_phone, $param_email, $param_date, $param_text, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_phone = $phone;
            $param_email = $email;
            $param_date = $date;
            $param_text = $text;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM applications WHERE id = ?";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $result = $stmt->get_result();
                
                if($result->num_rows == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    // Retrieve individual field value
                    $name = $row["name"];
                    $phone = $row["phone"];
                    $email = $row["email"];
                    $date = $row["date"];
                    $text = $row["text"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: ../index.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
        
        // Close connection
        $mysqli->close();
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 text-center">Обновить запись</h2>
                    <p>Пожалуйста, отредактируйте входные значения и отправьте, чтобы обновить запись о заявке.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label><b>Имя</b></label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        
                       

                        <div class="form-group">
                            <label><b>Номер</b></label>
                            <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                            <span class="invalid-feedback"><?php echo $phone_err;?></span>
                        </div>

                        <div class="form-group">
                            <label><b>Эл. почта</b></label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>

                        <div class="form-group">
                            <label><b>Дата</b></label>
                            <input type="text" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
                            <span class="invalid-feedback"><?php echo $date_err;?></span>
                        </div>


                        <div class="form-group">
                            <label>Text</label>
                            <textarea name="text"  class="form-control <?php echo (!empty($text_err)) ? 'is-invalid' : ''; ?>"><?php echo $text; ?></textarea>
                            <span class="invalid-feedback"><?php echo $text_err;?></span>
                        </div>
                        


                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Отправить">
                        <a href="../index.php" class="btn btn-secondary ml-2">Отмена</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
