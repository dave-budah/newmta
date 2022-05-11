// Hide topbar
function scrollUp() {
    const scrollUp = document.getElementById('topbar');
//    When the scroll is higher than 50 viewport, add the hide-topbar class to the topbar div.
    if(this.scrollY >= 50) scrollUp.classList.add('hide-topbar');
    else scrollUp.classList.remove('hide-topbar')
}
window.addEventListener('scroll', scrollUp)

// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// form toggle
let  x = document.getElementById('company')
let  y = document.getElementById('individual')
let  z = document.getElementById('movingBtn')

function  individual() {
    x.style.left = '-600px';
    y.style.left = '0px';
    z.style.left = '110px';
}
function  company() {
    x.style.left = '0px';
    y.style.left = '-600px';
    z.style.left = '0px';
}

// toggle password
function togglePW(){
    var password = document.querySelector('[name=password]');

    if(password.getAttribute('type') === 'password') {
        password.setAttribute('type', 'text');
        document.getElementById('review').classList.remove('fa-eye')
        document.getElementById('review').classList.add('fa-eye-slash')
    }
    else {
        password.setAttribute('type', 'password');
        document.getElementById('review').classList.remove('fa-eye-slash')
        document.getElementById('review').classList.add('fa-eye')
    }
}

// toggle password
function togglePWD(){
    var confirmPassword = document.querySelector('[name=confirmPassword]');

    if(confirmPassword.getAttribute('type') === 'password') {
        confirmPassword.setAttribute('type', 'text');
        document.getElementById('reviewer').classList.remove('fa-eye')
        document.getElementById('reviewer').classList.add('fa-eye-slash')
    }
    else {
        confirmPassword.setAttribute('type', 'password');
        document.getElementById('reviewer').classList.remove('fa-eye-slash')
        document.getElementById('reviewer').classList.add('fa-eye')
    }
}

// toggle password
function togglePWDI(){
    var ipassword = document.querySelector('[name=i-password]');

    if(ipassword.getAttribute('type') === 'password') {
        ipassword.setAttribute('type', 'text');
        document.getElementById('i-review').classList.remove('fa-eye')
        document.getElementById('i-review').classList.add('fa-eye-slash')
    }
    else {
        ipassword.setAttribute('type', 'password');
        document.getElementById('i-review').classList.remove('fa-eye-slash')
        document.getElementById('i-review').classList.add('fa-eye')
    }
}

// toggle password
function toggleIPWD(){
    var confirmPasswordI = document.querySelector('[name=passwordConfirm]');

    if(confirmPasswordI.getAttribute('type') === 'password') {
        confirmPasswordI.setAttribute('type', 'text');
        document.getElementById('i-reviewer').classList.remove('fa-eye')
        document.getElementById('i-reviewer').classList.add('fa-eye-slash')
    }
    else {
        confirmPasswordI.setAttribute('type', 'password');
        document.getElementById('i-reviewer').classList.remove('fa-eye-slash')
        document.getElementById('i-reviewer').classList.add('fa-eye')
    }
}
