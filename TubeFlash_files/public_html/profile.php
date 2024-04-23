<?php 
include("header.php"); 

if(isset($_GET["user"])) {
$user = $_GET["user"];
}

//if $FeaturedVideo is null then dont show anything
if (!isset($_GET["user"])) {
die();
}

$chanfetch = mysqli_query($connect, "SELECT * FROM users WHERE username='". $user ."'"); // calls for channel info
$cdf = mysqli_fetch_assoc($chanfetch);
$LastestVideo = htmlspecialchars($cdf['recent_vid']);
$Username = htmlspecialchars($cdf['username']);
$AboutMe = htmlspecialchars($cdf['aboutme']);
$VidsWatched = $cdf['videos_watched'];
$Name = htmlspecialchars($cdf['prof_name']);
$Age = htmlspecialchars($cdf['prof_age']);
$City = htmlspecialchars($cdf['prof_city']);
$Hometown = htmlspecialchars($cdf['prof_hometown']);
$Country = htmlspecialchars($cdf['prof_country']);
$Occupation = htmlspecialchars($cdf['prof_occupation']);
$Interests = htmlspecialchars($cdf['prof_interests']);
$Music = htmlspecialchars($cdf['prof_music']);
$Books = htmlspecialchars($cdf['prof_books']);
$Movies = htmlspecialchars($cdf['prof_movies']);
if($cdf['prof_website']) {
$Website = htmlspecialchars($cdf['prof_website']);
} else {
  $Website = "";
}
$PreRegisteredOn = $cdf['registeredon'];
$DateTime = new DateTime($PreRegisteredOn);
$RegisteredOn = $DateTime->format('F j Y');
?>
<meta name="title" content="<?php echo $Username ?>'s Channel">
<meta name="description" content="<?php echo $AboutMe ?>">
<title><?php echo $Username ?> - TubeFlash</title>
<div style="padding: 0px 5px 0px 5px;">
    


<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top">
    <td width="180">
    
    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#E5ECF9">
      <tr>
        <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
        <td width="100%"><img src="img/pixel.gif" width="1" height="5"></td>
        <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
      </tr>
      <tr>
        <td><img src="/web/20050728150049im_/http://www.youtube.com/img/pixel.gif" width="5" height="1"></td>
        <td align="center" style="padding: 5px;">
        
        
            <div style="font-size: 14px; font-weight: bold; color:#003366; margin-bottom: 5px;">Do you know <?php echo $Username ?>?</div>
          <a href="signup.php">Sign up</a> or <a href="login.php">log in</a> to add <?php echo $Username ?> as friend.<br><br>
                  
        <div style="font-size: 14px; font-weight: bold; color:#003366; margin-bottom: 5px;">Question? Comment?</div>
        <form method="post" action="outbox.php?user=<?php echo $Username ?>">
        <input type="submit" value="Contact Me!"><br>
        </form>
    
        </td>
        <td><img src="img/pixel.gif" width="5" height="1"></td>
      </tr>
      <tr>
        <td><img src="img/box_login_bl.gif" width="5" height="5"></td>
        <td><img src="img/pixel.gif" width="1" height="5"></td>
        <td><img src="img/box_login_br.gif" width="5" height="5"></td>
      </tr>
    </table>
    
    </td>
    
    <td style="padding: 0px 10px 0px 10px;">
    
    <table width="100%" cellpadding="5" cellspacing="0" border="0">
      <tr>
        <td width="120" align="right"><span class="label">User Name:</span></td>
        <td><?php echo $Username ?></td>
      </tr>
    
      <!-- Personal Information: -->
      
          
          
            <tr>
        <td align="right"><span class="label">Name:</span></td>
        <td><?php echo $Name ?></td>
      </tr>
      
      <tr valign="top">
        <td align="right"><span class="label">Age:</span></td>
        <td><?php echo $Age ?></td>
      </tr>
          
          
          
            <tr valign="top">
        <td align="right"><span class="label">About Me:</span></td>
        <td><?php echo $AboutMe ?></td>
      </tr>
          
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      
      
      <!-- Location Information -->
      

      <tr valign="top">
        <td align="right"><span class="label">Hometown:</span></td>
        <td><?php echo $Hometown ?></td>
      </tr>
      
      <tr valign="top">
      <td align="right"><span class="label">Current City:</span></td>
      <td><?php echo $City ?></td>
          
      <tr valign="top">
      <td align="right"><span class="label">Country:</span></td>
      <td><?php echo $Country ?></td>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      
      
      
      <!-- Random Information -->
      <tr valign="top">
      <td align="right"><span class="label">Personal Website:</span></td>
      <td><a href="<?php echo $Website ?>"><?php echo $Website ?></a></td>    
          
          
          
          
          
          
      <tr>
        <td align="right"><span class="label"></span></td>
        <td></td>
      </tr>
    </table>
    
    </td>
      
    <td width="180">
    
    <div style="font-size: 14px; font-weight: bold; margin-bottom: 10px; color: #444;">&#187; Profile</div>
    <div style="font-size: 14px; font-weight: bold; margin-bottom: 10px; color: #444;">&#187; <a href="profile_videos.php?user=<?php echo $Username ?>">Public Videos</a> (0)</div>
    <!-- only show this link to friends in their network -->
    <div style="font-size: 14px; font-weight: bold; margin-bottom: 10px; color: #444;">&#187; <a href="profile_videos_private.php?user=<?php echo $Username ?>">Private Videos</a> (0)</div>
    <!-- only show this link to friends in their network -->
    <div style="font-size: 14px; font-weight: bold; margin-bottom: 10px; color: #444;">&#187; <a href="profile_favorites.php?user=<?php echo $Username ?>">Favorites</a> (0)</div>
    <div style="font-size: 14px; font-weight: bold; margin-bottom: 20px; color: #444;">&#187; <a href="profile_friends.php?user=<?php echo $Username ?>">Friends</a> (0)</div>
    

    
    <div style="font-size: 12px; color: #444; margin: 10px 0px 0px 0px; text-align: center;"><strong>Like my videos?</strong><br>
    <a href="#">Subscribe to my RSS Feed.</a></div>
    
    </td>

      
  </tr>
</table>

    </div>
    </td>
  </tr>
</table>
<?php include("footer.php"); ?>