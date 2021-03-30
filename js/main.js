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

const confirmButtons = document.querySelector('.confirm-buttons');
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
        username.classList.remove('hidden');
        logOutBtn.classList.remove('hidden');
    } 
    if (getCookie("username") === undefined) {
        username.classList.add('hidden');
        logOutBtn.classList.add('hidden');
    }
    logOutBtn.addEventListener('click', function(event){
      event.stopPropagation();
      event.preventDefault();
      confirmBlock.classList.toggle('visible-1');
      body.classList.toggle("fixed-page");
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
      confirmBlock.classList.toggle('visible-1');
  })

  document.addEventListener('click', function(e) {
    const target = e.target;
    const its_menu = target == confirmBlock || confirmBlock.contains(target);
    const its_btnMenu = target == confirmButtons;
    const menu_is_active = confirmBlock.classList.contains('visible-1');

    if (!its_menu && !its_btnMenu && menu_is_active) {
      confirmBlock.classList.toggle('visible-1');
      body.classList.toggle("fixed-page");
      body.classList.toggle("overlay");
    };
  });

  $(document).keyup(function(e) {
    if (((confirmBlock.classList.contains('visible-1') || menu.classList.contains('visible')) && e.keyCode === 27)) {
      confirmBlock.classList.remove('visible-1');
      menu.classList.remove('visible');
      body.classList.toggle("fixed-page");
      body.classList.toggle("overlay");
    };
  });

