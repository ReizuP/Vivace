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


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.card').forEach(card => {
        const minusBtn = card.querySelector('.btn-outline-secondary:first-child');
        const plusBtn = card.querySelector('.btn-outline-secondary:last-child');
        const input = card.querySelector('input[type="number"]');
        const prodName = card.querySelector('.card-title').innerText;

        function updateCart(newQty) {
            fetch('misc/cart_handler.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: new URLSearchParams({
                    update_cart: true,
                    prod_name: prodName,
                    quantity: newQty
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    document.querySelector('#cart-total').innerText = `Total: ₱${data.subtotal}`;
                }
            })
            .catch(err => console.error('Cart update failed:', err));
        }

        minusBtn.addEventListener('click', () => {
            let newQty = parseInt(input.value) - 1;
            if (newQty < 1) newQty = 1;
            input.value = newQty;
            updateCart(newQty);
        });

        plusBtn.addEventListener('click', () => {
            let newQty = parseInt(input.value) + 1;
            input.value = newQty;
            updateCart(newQty);
        });

        input.addEventListener('change', () => {
            const newQty = parseInt(input.value);
            if (!isNaN(newQty)) updateCart(newQty);
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            fetch(`misc/cart_handler.php?action=add&id=${id}`)
                .then(() => alert("Item added to cart!"))
                .catch(err => console.error(err));
        });
    });
});

$(document).on('click', '.add-to-cart', function () {
  const productId = $(this).data('id');

  $.ajax({
    url: 'misc/cart_handler.php',
    method: 'POST',
    data: { action: 'add', product_id: productId, quantity: 1 },
    dataType: 'json',
    success: function (res) {
      if (res.success) {
        alert('Added to cart!');
        $('#cart-count').text(res.cart_count);
      } else {
        alert(res.message || 'Failed to add item.');
      }
    },
    error: function () {
      alert('Request failed.');
    }
  });
});

