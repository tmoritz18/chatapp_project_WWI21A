<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat App | WWI21A</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Vorname</label>
            <input type="text" name="fname" placeholder="Vorname" required>
          </div>
          <div class="field input">
            <label>Nachname</label>
            <input type="text" name="lname" placeholder="Nachname" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Addresse</label>
          <input type="text" name="email" placeholder="Geben Sie Ihre Mail ein" required>
        </div>
        <div class="field input">
          <label>Passwort</label>
          <input type="password" name="password" placeholder="Geben Sie ihr Passwort ein" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Wählen Sie ein Bild</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Fortfahren zum Chat">
        </div>
      </form>
      <div class="link">Bereits registriert? <a href="login.php">Einloggen</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
