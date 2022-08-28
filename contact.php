<!DOCTYPE html>
<html lang="en">
<title>GPS Nepal : Contact</title>
<?php include_once("includes/meta.php") ?>
<link rel="stylesheet" href="assets/bootstrap.min.css">
<link rel="stylesheet" href="css/contact_style.css">

<body>
  <?php include_once("includes/topnav.php") ?>
  <?php include_once("includes/navigation.php") ?>

  <?php include_once("pages/contact/contact.php") ?>

  <?php include_once("includes/footer.php") ?>
</body>

</html>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>