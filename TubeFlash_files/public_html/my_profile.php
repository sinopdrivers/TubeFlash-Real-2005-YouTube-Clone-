<?php 
include("header.php"); 
include("auth.php");
?>
<title>My Profile</title>
<center><h1>My Profile</h1>
<hr style='border-top: solid black 2px; width: 30%;'>
<h4>Set information you want others to see</h4>
  <form action='setdesc.php' method='POST' name='setdesc' id='setdesc'>
  <br>
  <textarea rows="4" cols="50" maxlength="500" name="desc" form="setdesc" placeholder="Input your About Me here..." style="margin: 0px; height: 67px; width: 352px; resize: none;" required=""></textarea>
  <p>500 character limit.</p>
  <input type='submit' name="submit">
 </form>
 <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Name       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_name">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Age       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_age">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  City       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_city">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Hometown       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_hometown">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Country       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_country">
  </form>
   <br>
 <br>
  <!--
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Occupation       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_occupation">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Interests and Hobbies       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_interests">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Music       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_music">
  </form>
   <br>
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Books       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_books">
  </form>
   <br>
 <br>
 -->
 <!--
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Movies and Shows       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_movies">
  </form>
   <br>
   -->
 <br>
 <form action="setinfo.php" method="post" enctype="multipart/form-data">
  Website       :
  <input type='text' id='textbox' style="width: 250px;" name='textbox'>
  <input type="submit" value="Submit" name="prof_website">
  </form>
   <br>
 <br>
 <hr style='border-top: solid black 2px; width: 30%;'>
</center>
<br>
<?php include("footer.php"); ?>