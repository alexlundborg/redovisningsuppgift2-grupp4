<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
 session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages

} else {
    // Redirect them to the login page
    header("Location: http://www.grupp4.icsweb.se/admin/login-page.php");
}
?>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    </head>

    <body>


      <?php include 'header.php';?>


      <div class="grid-container" id="content-paper">
        <section id="show-on-mobile">

           <li> <a href="studenter.php">Ansökningar</a> </li>

           <li>  <a href="nytt-inlagg.php">Nytt inlägg</a> </li>

           <li>  <a href="ny-handelse.php">Ny händelse</a> </li>

       </section>
       <main>


        <h2>Välkommen, <?php     
  echo $_SESSION['user_id'];
?>!</h2>

  <p>Välj ett alternativ i menyn till vänster. <br /><br/>I <i>Ansökningar</i> kan du se alla ansökande studenter, se alla ansökningar för en särskild sektion, söka på en särskild student, se och ändra en students uppgifter samt ta bort ansökningar. <br /><br />I <i>Nytt inlägg</i> kan du skriva nya inlägg på startsidan och ta bort befintliga. <br /><br />I <i>Ny händelse</i> kan du skriva nya händelser på startsidan och ta bort befintliga. </p>


    </main>

    <aside>

    </aside>
</div>



<script src="script.js"></script>
<script>

</script>
</body>