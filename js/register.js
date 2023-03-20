function registerUser() {
    var formData = $('#signup').serialize();
    
    $.ajax({
      type: 'POST',
      url: 'php/register.php',
      data: formData,
      dataType: 'json',
      encode: true
    })
    .done(function(data) {
      console.log(data);
    });
  }
  
  $(document).ready(function() {
    $('#signup').submit(function(event) {
      event.preventDefault();
      registerUser();
    });
  });