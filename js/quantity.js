// document.addEventListener('DOMContentLoaded', () => {
//   document.querySelectorAll('.input-group').forEach(group => {
//     const minusBtn = group.querySelector('.btn-outline-secondary:first-child');
//     const plusBtn = group.querySelector('.btn-outline-secondary:last-child');
//     const input = group.querySelector('input[type=number]');
//     const prodName = group.closest('.card').querySelector('.card-title').textContent.trim();

//     const updateQuantity = (newQty) => {
//       // Update the input field immediately
//       input.value = newQty;

//       // Send AJAX request to update in database
//       fetch('misc/cart_handler.php', {
//         method: 'POST',
//         headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
//         body: new URLSearchParams({
//           update_cart: '1',
//           prod_name: prodName,
//           quantity: newQty
//         })
//       })
//       .then(res => res.json())
//       .then(data => {
//         if (data.success) {
//           console.log('Cart updated');
//           // Optionally update subtotal or total
//           const subtotalElem = document.getElementById('cart-total');
//           if (subtotalElem) subtotalElem.textContent = `Total: $${data.subtotal}`;
//         }
//       });
//     };

//     minusBtn.addEventListener('click', () => {
//       const newQty = Math.max(1, parseInt(input.value) - 1);
//       updateQuantity(newQty);
//     });

//     plusBtn.addEventListener('click', () => {
//       const newQty = parseInt(input.value) + 1;
//       updateQuantity(newQty);
//     });

//     input.addEventListener('change', () => {
//       const newQty = Math.max(1, parseInt(input.value));
//       updateQuantity(newQty);
//     });
//   });
// });

