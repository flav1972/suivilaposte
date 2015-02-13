<html>
<head>
<title>Suivi la poste</title>
</head>
<body>
Vous allez etre renvoyes vers le site de La Poste.
<br/>
<form action='http://www.laposte.fr/particulier/outils/suivre-vos-envois' method='post' name='frm'>
<?php
if(isset($_GET['id'])) {
   echo "<input type='hidden' name='suivi[number]' value='"
          . htmlentities($_REQUEST["id"])
          . "'>";
}
?>
</form>
<script language="JavaScript">
document.frm.submit();
</script>
</body>
</html>
