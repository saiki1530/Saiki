<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['action1']='<div style="color:red">You have logged out successfully..!</div>';
?>
<script language="javascript">
document.location="login.php";
</script>
