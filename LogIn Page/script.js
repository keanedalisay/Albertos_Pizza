document.addEventListener('DOMContentLoaded', function () {
    var basketMenu = document.querySelector('.basket-menu');
    var nav = document.querySelector('.nav-list');
    
    basketMenu.addEventListener('click', function() {
      nav.classList.toggle('expanded');
    });
  
    document.getElementById('phone-number').addEventListener('input', function() {
      var phoneNumber = this.value.trim();
      var errorElement = document.getElementById('phone-error');
      
      if (phoneNumber === '') {
          errorElement.style.display = 'none';
      } else {
          if (!phoneNumber.startsWith('09')) {
              errorElement.textContent = "The phone number you entered does not match the required format.";
              errorElement.style.display = 'block';
          } else if (phoneNumber.length > 11) {
              errorElement.textContent = "The phone number you entered exceeds the maximum length.";
              errorElement.style.display = 'block';
          } else {
              errorElement.style.display = 'none';
          }
      }
    });
    
    document.getElementById('password').addEventListener('input', function() {
      var password = this.value.trim();
      var errorElement = document.getElementById('password-error');
      
      if (password === '') {
          errorElement.style.display = 'none';
      } else {
          if (password.length < 6) {
              errorElement.style.display = 'block';
          } else {
              errorElement.style.display = 'none';
          }
      }
    });
  });
  