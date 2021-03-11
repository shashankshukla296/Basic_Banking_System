<?php 
    $con = new mysqli('bbsqummi0vue8ewcefga-mysql.services.clever-cloud.com','uzqnhxxsv9ycnhcb','QLy5EosyshvvmC8ATNj5','bwemwkz4cy4gxtv97uth');
    define('bankName', 'MCB Bank',true);
    $ar = $con->query("select * from useraccounts,branch where id = '$_SESSION[userId]' AND useraccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>