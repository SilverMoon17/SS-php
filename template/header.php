<?php $path='../../' ?>
<header class="header">
    <div class="container">
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
            <div class="col-3 d-flex justify-content-end align-items-center">
                <a href="<?php echo $path ?>registration-form.php" class = "reg-button">Регистрация</a>
                <a href="<?php echo $path ?>login.php" class = "log-in-button">Войти</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type='text/javascript'>
    regBtn = document.querySelector('.reg-button');
    loginBtn = document.querySelector('.log-in-button');
    username = document.querySelector('.header-username');
    logOutBtn = document.querySelector('.log-out-button');
    function setCookie(name, value, options = {}) {

        options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
        };

        if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
        }

        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

        for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
        }

        document.cookie = updatedCookie;
    }
    function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
    function deleteCookie(name) {
        setCookie(name, "", {
        'max-age': -1
        })
    }
    if (getCookie("username") != '') {
        regBtn.classList.add('hidden');
        loginBtn.classList.add('hidden');
        username.classList.remove('hidden');
        logOutBtn.classList.remove('hidden');
    } 
    if (getCookie("username") === undefined) {
        regBtn.classList.remove('hidden');
        loginBtn.classList.remove('hidden');
        username.classList.add('hidden');
        logOutBtn.classList.add('hidden');
    }
    logOutBtn.addEventListener('click', function(event){
        if (confirm("Вы действительно хотите выйти?")) {
            deleteCookie("username");
            window.location.href = '../index.php';
        } else {
            location.reload()
        }
    })
</script>