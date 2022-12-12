<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat App | WWI21A</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Addresse</label>
          <input type="text" name="email" placeholder="Geben Sie Ihre Mail ein" required>
        </div>
        <div class="field input">
          <label>Passwort</label>
          <input type="password" name="password" placeholder="Geben Sie ihr Passwort ein" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Fortfahren zum Chat">
        </div>
      </form>
      <div class="link">Noch keinen Account? <a href="index.php">Registrieren</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
