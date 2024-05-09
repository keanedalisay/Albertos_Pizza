(function () {
  const items = document.querySelectorAll('.menu-item');
  const cartCount = document.querySelector('[data-js=cart_count]');

  items.forEach((item) => {
    item.addEventListener('submit', (event) => {
      event.preventDefault();

      const formData = new FormData(item); // Create FormData object from the 
      cartCount.textContent = Number(cartCount.textContent) + 1

      fetch(item.action, {
        method: item.method,
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          // console.log(data);
        })
        .catch((error) => {
          // console.error('Error:' + error);
        });
    });
  });
})();

