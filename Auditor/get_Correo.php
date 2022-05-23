<?php
$var=$_POST['correo'];
?>
<div class="row">
<form role='form' method='post' name='enviocorreo' id='enviocorreo' action="EnvioCorreo.php">
    <div class='form-group'>
    <div class='container'>
    <div class='correo'>
    <label style='margin-left: 134px;'>Correo</label>
    <input type='text' style='width:300px;text-align:center;margin-left:30px;' class='form-control' id='CorreoCod' name='CorreoCod' value=<?php echo $var?> autocomplete='off' readonly>
    <a type="hidden" class="" name="enviocorreo" data-id=<?php echo $var?>></a>
    <input type="hidden" name="enviocorreo">
    <button type="submit" data-id=<?php echo $var?> class="btn btn-primary envioCorreos" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 120px; margin-top: 20px;">
    Enviar correo</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="lib/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="principal.js"></script>
<script src='lib/sweetalert2.all.js'></script>
<script src='lib/sweetalert2.min.js'></script>