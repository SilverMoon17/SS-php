let menuToggle = document.querySelector("#menu-toggle");
let menu = document.querySelector(".nav-block");
let body = document.querySelector("body");

menuToggle.addEventListener('click', function(event) {
  event.stopPropagation();
  event.preventDefault();
  menu.classList.toggle('visible');
  body.classList.toggle("fixed-page");
  // menuToggle.classList.toggle("overlay")
});

document.addEventListener('click', function(e) {
  const target = e.target;
  const its_menu = target == menu || menu.contains(target);
  const its_btnMenu = target == menuToggle;
  const menu_is_active = menu.classList.contains('visible');

  if (!its_menu && !its_btnMenu && menu_is_active) {
    menu.classList.toggle('visible');
    body.classList.toggle("fixed-page");
    body.classList.toggle("overlay");
  };
});

const confirmYes = document.querySelector('.confirm-yes');
const confirmNo = document.querySelector('.confirm-no');
const confirmBlock = document.querySelector('.confirm-block');
regBtn = document.querySelector('.reg-button');
    loginBtn = document.querySelector('.log-in-button');
    username = document.querySelector('.header-username');
    logOutBtn = document.querySelector('.log-out-button');
    avatarImg = document.querySelector('.avatar-img');
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
        avatarImg.classList.remove('hidden');
    } 
    if (getCookie("username") === undefined) {
        regBtn.classList.remove('hidden');
        loginBtn.classList.remove('hidden');
        username.classList.add('hidden');
        logOutBtn.classList.add('hidden');
        avatarImg.classList.add('hidden');
    }
    logOutBtn.addEventListener('click', function(event){
      event.stopPropagation();
      event.preventDefault();
      confirmBlock.classList.remove('hidden')
        // if (confirm("Вы действительно хотите выйти?")) {
        //     deleteCookie("username");
        //     window.location.href = '../index.php';
        // } else {
        //     location.reload()
        // }
    })
    confirmYes.addEventListener('click', function(){
        deleteCookie("username");
        window.location.href = '../index.php';
    })
    confirmNo.addEventListener('click', function(){
      location.reload()
  })



