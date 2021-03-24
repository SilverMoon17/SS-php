<?php $path='../../';
    $username = $_COOKIE['username'];
    if(mb_strlen($username) == 0) {
        unset($_SESSION['user']);
    }
?>
<header class="header">
    <div class="container ">
        <div class="row d-flex justify-content-xl-around justify-content-start align-items-center">
            <div class="col-xl-1 col-12 d-flex justify-content-between align-items-center">
                <a href="<?php echo $path ?>index.php" class="logo-link">
                    <img src="<?php echo $path ?>img/logo.svg" alt="" class="logo-image">
                </a>
                <a href="#" class="menu-toggle" id="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="col-xl-8">
                <nav class="nav-block">
                    <ul class="navigation d-xl-flex justify-content-xl-between">
                        <li class="navigation-item">
                            <a href="<?php echo $path ?>index.php" class="navigation-link">Главная</a>
                        </li>
                        <li class="navigation-item dropdown">
                            <a href="<?php echo $path ?>news.php" class="dropbtn">Новости</a>
                            <div class="dropdown-content">
                                <a href="#">Актуальное</a>
                                <a href="#">Инновации</a>
                                <a href="#">Новое</a>
                            </div>
                        </li>
                        <li class="navigation-item dropdown">
                            <a href="<?php echo $path ?>schedule.php" class="dropbtn">Расписание</a>
                            <div class="dropdown-content">
                                <a href="#">Понедельник</a>
                                <a href="#">Вторник</a>
                                <a href="#">Среда</a>
                                <a href="#">Четверг</a>
                                <a href="#">Пятница</a>
                            </div>
                        </li>
                        <li class="navigation-item">
                            <a href="<?php echo $path ?>about.php" class="navigation-link">Контакты</a>
                        </li>
                        <li class="navigation-item">
                            <a href="<?php echo $path ?>help.php" class="navigation-link">Помощь</a>
                        </li>
                    </ul>
                </nav>
            </div>
                <!-- /.col-8 -->
            <div class="reg-and-log col-xl-3 pb-2 pb-xl-0 d-flex justify-content-end align-items-center">
                <?php if ($_COOKIE['username'] == '') {
                    echo '<a href="'. $path . 'registration-form.php" class = "reg-button">Регистрация</a>
                        <a href="'. $path . 'login.php" class = "log-in-button">Войти</a>';
                } ?>
                <?php if ($_SESSION['user']['avatar'] != '' ) {
                    echo '<a href = "'. $path .'cabinet.php" class = "avatar-link"><img class = "avatar-img" src="' . $_SESSION['user']['avatar'] . '" ></a>';
                } ?>
                <a href="<?php echo $path ?>cabinet.php" class = "header-username hidden"><?php $username = $_COOKIE['username']; echo $username ?></a>
                <a href="#" class = "log-out-button hidden">Выйти</a>
            </div>
            <!-- /.col-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
        <div class="input-group search">
            <input type="search" class="search-input" placeholder="Поиск по сайту">
            <button class="search-button">
                <img src="<?php echo $path ?>img/search.svg" alt="search" class="search-icon">
            </button>
        </div>
        <!-- /.input-group -->
        </div>    
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="confirm-block">
                <h3 class="confirm-title text-light">Вы действительно хотите выйти?</h3>
                <div class="confirm-buttons d-flex justify-content-end">
                    <button class="confirm-no">Нет</button>
                    <button class="confirm-yes">Да</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>