<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      if (issset($_POST['submit'])) {
        //process form
        printf ('%s %s', 'value 1', 'value 2');
      }
      ?>
    <form action="" method="post">
      Username: <input type="text" name="name"><br/>
      Password: <input type="password" name="password"><br/>
      Gender:
          <input type="radio" name="gender" value="f">female
          <input type="radio" name="gender" value="m">male<br/>
      Favorite Color:
          <select name="color">
            <option value="#f00">Red</option>
            <option value="#0f0">Green</option>
            <option value="#00f">Blue</option>
          </select><br/>
      Languages Spoken:
          <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
          </select><br/>
      Comments:<textarea name="comments"></textarea><br/>
      <input type="checkbox" name="tc" value="ok">I accept the T &amp; C<br/>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
