$(document).ready(function() {
    // Handle login form
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'misc/login_handler.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                alert(response.message);
                if (response.success) {
                    location.reload(); // reload to reflect session
                }
            }
        });
    });

    // Handle signup form
    $('#signupForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'misc/signup_handler.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                alert(response.message);
                if (response.success) {
                    $('#signupModal').hide();
                    $('#loginModal').show();
                }
            }
        });
    });

    // Modal switching
    $('#openSignup').on('click', function(e) {
        e.preventDefault();
        $('#loginModal').hide();
        $('#signupModal').show();
    });

    $('#backToLogin').on('click', function(e) {
        e.preventDefault();
        $('#signupModal').hide();
        $('#loginModal').show();
    });
});

