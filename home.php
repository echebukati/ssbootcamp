<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
  header ("Location: index.php");
}
$username = ($_SESSION['username']);

if (isset($_POST['months'])) {
    $installments = 100 / (int)$_POST['months'];
    $installments = (int)$installments;
    echo "You have received your <b>$100</b> loan!<br>";
    echo "You will pay back <b>$". $installments . "</b> for <b>".$_POST['months']."</b> months.";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>$100 Instant Loans</title>
</head>
<body>
<h2>$100 Instant Loans</h2>
<h3>Enter Period Between 1 and 12 Months</h3>
<form method="post" action="">
    <input name="months" type="text" placeholder="Payback Period (Months)" />
    <input type="submit" value="Apply"/>
</form>
</body>
</html>
