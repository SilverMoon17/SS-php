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

// body.addEventListener('click', function(event) {
//   if (a == true) {
//     event.preventDefault();
//     menu.classList.remove('visible');
//     console.log('click');
//   }
// })



