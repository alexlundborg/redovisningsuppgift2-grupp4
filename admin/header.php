 <div id="sticky">
    <header>
    <div class="grid-container-header" id="header-container">
    <a href="admin.html"><div class="brand">
  <h1 id="title">Lundakarnevalen</h1>
    <h1 id="subtitle">Admin page</h1>

</div></a>
  <img id="logga" src="bilder/logga-karneval-b.png">

<div>
  <p id="signedIn"> <a href="logout.php">Logga ut</a>

  <?php     
  echo "<p id='signedIn'>Inloggad som " . $_SESSION['user_id'] . "</p>";
?>
</div>
</header>

</div>

 <div class="header-background">



</div>