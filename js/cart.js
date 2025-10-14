document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.input-group').forEach(group => {
    const minusBtn = group.querySelector('.btn-outline-secondary:first-child');
    const plusBtn = group.querySelector('.btn-outline-secondary:last-child');
    const input = group.querySelector('input[type=number]');
    const productCard = group.closest('.card');

    const updateQuantity = (newQty) => {
      input.value = newQty;

      fetch('misc/update_cart.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
          product_id: productCard.dataset.id,
          quantity: newQty
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          document.getElementById('subtotal').textContent = '₱' + data.subtotal.toFixed(2);
          document.getElementById('tax').textContent = '₱' + data.tax.toFixed(2);
          document.getElementById('shipping').textContent = '₱' + data.shipping.toFixed(2);
          document.getElementById('total').textContent = '₱' + data.total.toFixed(2);
        }
      })
      .catch(err => console.error('Error updating cart:', err));
    };

    minusBtn.addEventListener('click', () => {
      const newQty = Math.max(1, parseInt(input.value) - 1);
      updateQuantity(newQty);
    });

    plusBtn.addEventListener('click', () => {
      const newQty = parseInt(input.value) + 1;
      updateQuantity(newQty);
    });

    input.addEventListener('change', () => {
      const newQty = Math.max(1, parseInt(input.value));
      updateQuantity(newQty);
    });
  });
});
