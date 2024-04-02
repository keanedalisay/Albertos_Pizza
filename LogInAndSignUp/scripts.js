document.getElementById('phone-number').addEventListener('input', function() {
  var phoneNumber = this.value;
  var phonePattern = /^\d{4}-\d{3}-\d{4}$/;
  var errorElement = document.getElementById('phone-error');
  
  if (phoneNumber.trim() === '') {
      errorElement.style.display = 'none';
  } else if (!phonePattern.test(phoneNumber)) {
      errorElement.style.display = 'block';
  } else {
      errorElement.style.display = 'none';
  }
});
