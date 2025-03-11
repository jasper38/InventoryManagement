document.getElementById('showPassword').addEventListener('click', function () {
    let passwordInput = document.getElementById('password');
    let icon = this;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.replace("uil-eye-slash", "uil-eye"); 
    } else {
        passwordInput.type = "password";
        icon.classList.replace("uil-eye", "uil-eye-slash"); 
    }
});