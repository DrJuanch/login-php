$(document).ready(function() {
    $('#loginForm').submit(function(e) {
      e.preventDefault(); 
      var username = $('#username').val();
      var password = $('#password').val();
      $.ajax({
        type: 'POST',
        url: '../services/login.php',
        data: { username: username, password: password },
        success: function(response) {
          alert(response);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });