(function () {
  const items = document.querySelectorAll('.menu-item');

  items.forEach((item) => {
    item.addEventListener('submit', (event) => {
      event.preventDefault();

      const formData = new FormData(item); // Create FormData object from the form
      fetch(item.action, {
        method: item.method,
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          // Handle response data, if needed
        })
        .catch((error) => {
          console.error('Error:', error);
        });
    });
  });
})();
