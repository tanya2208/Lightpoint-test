var pass = $('.my-password');
$('button.show-pass').click(function() {
  pass.attr('type', pass.attr('type') === 'password' ? 'text' : 'password');
});

var sidebar = document.querySelector('.sidebar');
sidebar.style.display = 'none';
document.querySelector('.busket').addEventListener('click', function() {
  if(sidebar.style.display === 'none') {
    sidebar.style.display = 'block';
    document.querySelector('.main').style.width = '72%';
    document.querySelector('header').style.width = '72%';
    document.querySelector('footer').style.width = '72%';
}
  else {
    sidebar.style.display = 'none';
    document.querySelector('.main').style.width = '100%';
    document.querySelector('header').style.width = '100%';
    document.querySelector('footer').style.width = '100%';
  }
});


let modal = document.querySelector(".modal");
let trigger = document.querySelector(".trigger");
let closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
