<?php
include "config.php";

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
  }
?>
<form id="profileform">
Telefon numaranızı giriniz:<br>
<input onchange="editphone()" id="form_phone" type="number" name="phone" value="<?php echo $theuser['telnumber']; ?>">
</form>

<div id="mesaj">
</div>