document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const passwordError = document.getElementById('password-error');
    const confirmPasswordError = document.getElementById('confirm-password-error');
    
    const symbolRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    const uppercaseRegex = /[A-Z]+/;
    const minLength = 6;
    
    function validatePassword() {
        const passwordValue = passwordInput.value;
        
        if (!symbolRegex.test(passwordValue)) {
            passwordError.textContent = 'Password must contain at least one symbol character.';
            passwordError.style.display = 'block';
            return false;
        } else if (!uppercaseRegex.test(passwordValue)) {
            passwordError.textContent = 'Password must contain at least one uppercase letter.';
            passwordError.style.display = 'block';
            return false;
        } else if (passwordValue.length < minLength) {
            passwordError.textContent = `Password must be at least ${minLength} characters in length.`;
            passwordError.style.display = 'block';
            return false;
        } else {
            passwordError.style.display = 'none';
            return true;
        }
    }
    
    function validateConfirmPassword() {
        const passwordValue = passwordInput.value;
        const confirmPasswordValue = confirmPasswordInput.value;
        
        if (passwordValue !== confirmPasswordValue) {
            confirmPasswordError.textContent = 'Passwords do not match.';
            confirmPasswordError.style.display = 'block';
            return false;
        } else {
            confirmPasswordError.style.display = 'none';
            return true;
        }
    }
    
    passwordInput.addEventListener('input', validatePassword);
    confirmPasswordInput.addEventListener('input', validateConfirmPassword);
});
