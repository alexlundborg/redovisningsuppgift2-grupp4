<?php

session_start();

define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$username = $_POST["username"];
$password = $_POST["password"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');





if(empty($username))

{
  header("Location: login-page.php");
  die();
  echo "<div class='error-notice'>Användarnamn tom</div>";
  return false;
}

if(empty($password))
{
  header("Location: login-page.php");
  die();
  echo "<div class='error-notice'>Lösenord tom</div>";
  return false;

}

if(!CheckLoginInDB($username,$password))

{

    echo "CheckLoginInDB error";

    header("Location: login-page.php");
    die();
}



  /*  session_start();
     

    $_SESSION[GetLoginSessionVar()] = $username;

     */


    function CheckLoginInDB($username,$password)
    {
        $db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die ('No DB-connection via MySQLi');


        $sql = "SELECT * FROM User WHERE userName='$username' AND password='$password' ";

        if ($result=mysqli_query($db_conn,$sql)){
        } else {
            echo "Fel: " . $sql . "<br>" . $db_conn->error;
        }


        if(!$result || mysqli_num_rows($result) <= 0)
        {
            echo "Error logging in. ".
            "The username or password does not match";

            return false;
        } else {
            $user = $result->fetch_object();
            $_SESSION['user_id'] = $user->userName;
            return true;

        }

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

           <li> <a href="studenter.php">Studenter</a> </li>

           <li>  <a href="nytt-inlagg.php">Nytt inlägg</a> </li>

           <li>  <a href="ny-handelse.php">Ny händelse</a> </li>

       </section>
       <main>


        <h2>Välkommen, <?php     
  echo $_SESSION['user_id'];
?>!</h2>




    </main>

    <aside>

    </aside>
</div>



<script src="script.js"></script>
<script>

</script>
</body>