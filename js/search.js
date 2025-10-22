$(document).ready(function() {
  $('#search-form').on('submit', function(e) {
    e.preventDefault();
    const query = $('#search-input').val().trim();

    if (query.length === 0) return;

    $.ajax({
      url: 'misc/search_handler.php',
      type: 'GET',
      data: { search_query: query },
      beforeSend: function() {
        $('#products-grid').html('<p class="text-center my-5">Searching...</p>');
      },
      success: function(response) {
        $('#products-grid').html(response);
      },
      error: function() {
        $('#products-grid').html('<p class="text-center text-danger">An error occurred while searching.</p>');
      }
    });
  });
});


$(document).ready(function() {
  let typingTimer;              // Timer identifier
  const doneTypingInterval = 500; // 0.5 seconds
  const $input = $('#search-input');

  // Function to perform the search (AJAX)
  function performSearch(query) {
    $.ajax({
      url: 'misc/search_handler.php',
      type: 'GET',
      data: { search_query: query },
      beforeSend: function() {
        $('#products-grid').html('<p class="text-center my-5">Searching...</p>');
      },
      success: function(response) {
        $('#products-grid').html(response);
      },
      error: function() {
        $('#products-grid').html('<p class="text-center text-danger">An error occurred while searching.</p>');
      }
    });
  }

  // Trigger search when typing stops
  $input.on('keyup', function() {
    clearTimeout(typingTimer);
    const query = $input.val().trim();

    if (query.length > 0) {
      typingTimer = setTimeout(() => performSearch(query), doneTypingInterval);
    } else {
      // If input is cleared, reload all products
      $.ajax({
        url: 'misc/cards_handler.php',
        success: function(response) {
          $('#products-grid').html(response);
        }
      });
    }
  });

  // Also trigger search when search button is clicked
  $('#search-btn').on('click', function() {
    const query = $input.val().trim();
    if (query.length > 0) performSearch(query);
  });
});

$(document).ready(function () {
  $('#search-input').on('input', function () {
    let query = $(this).val().trim();

    if (query.length === 0) {
      // If input is empty, load all products again
      $.ajax({
        url: 'misc/cards_handler.php',
        method: 'GET',
        success: function (response) {
          $('#products-grid').html(response);
        },
        error: function () {
          $('#products-grid').html('<p class="text-danger">Failed to load products.</p>');
        }
      });
    } else {
      // Perform live search
      $.ajax({
        url: 'misc/search_handler.php',
        method: 'GET',
        data: { search_query: query },
        success: function (response) {
          $('#products-grid').html(response);
        },
        error: function () {
          $('#products-grid').html('<p class="text-danger">Search failed.</p>');
        }
      });
    }
  });
});

