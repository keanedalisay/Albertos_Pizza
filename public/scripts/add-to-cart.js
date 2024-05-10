(function () {
  const main = document.querySelector('[data-js=main]');
  const items = document.querySelectorAll('.menu-item');
  const cartCount = document.querySelector('[data-js=cart_count]');

  items.forEach((item) => {
    item.addEventListener('submit', (event) => {
      event.preventDefault();

      const formData = new FormData(item); // Create FormData object from the 
      cartCount.textContent = Number(cartCount.textContent) + 1

      const cart_item_added = document.createElement("article");
      cart_item_added.classList.add('cart_item_added');

      if (formData.get('pizza_name')) {
        cart_item_added.textContent = `
        You added one ${formData.get('pizza_size')} 
        with ${formData.get('pizza_cheese')} 
        ${formData.get('pizza_name')}`;
      } 
      else if (formData.get('side_name')) 
        cart_item_added.textContent = `You added one ${formData.get('side_name')}`;
      

      main.appendChild(cart_item_added);

      setTimeout(function() {
        cart_item_added.remove();
      }, 3000);

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


