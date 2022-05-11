const passwordField = document.querySelector('.auth_form .form_div input[type="password"]');
toggleBtn = document.querySelector('.auth_form .form_div span');

toggleBtn.onclick = () => {
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordField.type = 'password';
        toggleBtn.innerHTML = '<i class="fas fa-eye"></i>';
    }
}