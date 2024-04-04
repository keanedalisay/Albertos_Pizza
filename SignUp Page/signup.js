document.addEventListener('DOMContentLoaded', function() {
    const basketMenu = document.getElementById('basket-menu');
    const navList = document.querySelector('.nav-list');

    basketMenuMenu.addEventListener('click', function() {
        navList.classList.toggle('expanded');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');
    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('password-error');
    
    // Phone number validation
    phoneInput.addEventListener('input', function(event) {
        const phoneValue = event.target.value;
        const phonePattern = /^[0][9]\d{9}$/; 
        
        if (!phonePattern.test(phoneValue)) {
            phoneError.style.display = 'block';
        } else {
            phoneError.style.display = 'none'; 
        }
    });

    // Password validation
    passwordInput.addEventListener('input', function(event) {
        const passwordValue = event.target.value;
        const symbolPattern = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/; 
        const uppercasePattern = /[A-Z]/; 
        
        if (passwordValue.length < 6 || !symbolPattern.test(passwordValue) || !uppercasePattern.test(passwordValue)) {
            passwordError.style.display = 'block'; 
        } else {
            passwordError.style.display = 'none';
        }
    });
    
    // basket menu toggle
    const basketMenu = document.getElementById('basket-menu');
    const navList = document.querySelector('.nav-list');

    basketMenu.addEventListener('click', function() {
        navList.classList.toggle('expanded');
    });
});

