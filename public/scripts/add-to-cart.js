document.querySelectorAll('.quantity-buttons').forEach(function(buttonGroup) {
  const incrementBtn = buttonGroup.querySelector('.increment-button');
  const decrementBtn = buttonGroup.querySelector('.decrement-button');
  const quantityDisplay = buttonGroup.querySelector('.quantity');
  const amountDisplay = buttonGroup.closest('.product').querySelector('.amount');
  const price = parseInt(amountDisplay.textContent.replace('₱', ''));

  let quantity = parseInt(quantityDisplay.textContent);

  incrementBtn.addEventListener('click', function() {
      quantity++;
      quantityDisplay.textContent = quantity;
      updateTotalCost(price);
  });

  decrementBtn.addEventListener('click', function() {
      if (quantity > 1) {
          quantity--;
          quantityDisplay.textContent = quantity;
          updateTotalCost(-price); // Subtract the price when decrementing
      }
  });
});

function updateTotalCost(priceChange) {
  const totalCostDisplay = document.getElementById('total-cost');
  let totalCost = parseInt(totalCostDisplay.textContent.replace('₱', ''));
  totalCost += priceChange;
  totalCostDisplay.textContent = '₱' + totalCost;
}