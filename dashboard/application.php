<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Заявки</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Панель управления</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Найти" aria-label="Найти" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                        <li><a href="login.php?logout=1" class="dropdown-item">Выйти</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            



                            <div class="sb-sidenav-menu-heading">Страница</div>
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Главная страница
                            </a>
                            <a class="nav-link" href="application.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Заявки
                            </a>
                            <div class="sb-sidenav-menu-heading">Страницы</div>

                            <a class="nav-link" href="about.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Обо мне
                            </a>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Мои навыки
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="language.php">Языки программирования</a>
                                    <a class="nav-link" href="framework.php">Фреймворки</a>
                                </nav>
                            </div>



                            <a class="nav-link" href="services.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Услуги
                            </a>

                            <a class="nav-link" href="price.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Цены
                            </a>

                            
                            
                            <a class="nav-link" href="portfolio.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Портфолио
                            </a>
                            

                            <a class="nav-link" href="contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Контакты
                            </a>






                        


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">© 2022</div>
                        Все права защищены
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Заявки</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Панель управления</a></li>
                            <li class="breadcrumb-item active">Заявки</li>
                        </ol>
                            

                        <!-- <div class="mt-5 mb-3 clearfix">
                            <a href="application/create.php" class="btn btn-success pull-right" ><i class="fa fa-plus"></i>Добавить</a>
                            </div> -->



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Заявки
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">





                                <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM application";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>№</th>";
                                        echo "<th>Имя</th>";
                                        echo "<th>Номер</th>";
                                        echo "<th>Эл. почта</th>";
                                        echo "<th>Дата</th>";
                                        echo "<th>Редактировать</th>";
                                        echo "<th>Удалить</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $a=1;
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" .$a. "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="application/update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';                                           
                                        echo "</td>";
                                        echo "<td>";
                                            echo '<a href="application/delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                    $a++;
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>


                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
