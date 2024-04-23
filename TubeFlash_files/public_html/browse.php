<?php 
include("header.php"); 
if(!isset($_GET["page"])){
  $page = 1; // Initialize $page variable

}
if(isset($_GET["page"])){
if($_GET["page"] == 1) {
  $page = 1;
}
if($_GET["page"] && $_GET["page"] > 1){
  $page = $_GET["page"] * 300;
}
}
$page = $page - 1;
$sql = mysqli_query($connect, "SELECT * FROM videodb"); //instructions for sql
$count = 0;
$pages = 0;

while ($fetch = mysqli_fetch_assoc($sql)) { //go forward with instructions
$count++;
if($count == 300) {
  $pages++;
  $count = 0;
}
}
?>
<title>Browse - TubeFlash</title>
<table width="790" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#CCCCCC">
  <tbody><tr>
    <td><img src="img/box_login_tl.gif" width="5" height="5"></td>
    <td><img src="img/pixel.gif" width="1" height="5"></td>
    <td><img src="img/box_login_tr.gif" width="5" height="5"></td>
  </tr>
  <tr>
    <td><img src="img/pixel.gif" width="5" height="1"></td>
    <td width="780">
      <div class="moduleTitleBar">
              <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr valign="top">
          <td width="260">
            <div class="moduleTitle">Most Recent</div>
          </td>
          <td width="260" align="center">
            <div style="font-weight: normal; font-size: 11px; color: #444444">
              
            </div>
          </td>
          <td width="260" align="right">
          </td>
        </tr>
      </tbody></table>

      </div>
        
      <div class="moduleFeatured"> 
                <table width="770" cellpadding="0" cellspacing="0" border="0">

        <tbody><?php
$vidlist = mysqli_query($connect, "SELECT * FROM videodb ORDER by ViewCount DESC LIMIT ".$page.", 300");
$count = 0;

while ($fetch = mysqli_fetch_assoc($vidlist)) {
$idvideolist = $fetch['VideoID'];
$namevideolist = htmlspecialchars($fetch['VideoName']);
$uploadervideolist = htmlspecialchars($fetch['Uploader']);
$uploadvideolist = $fetch['UploadDate'];
$viewsvideolist = htmlspecialchars($fetch['ViewCount']);

  if($count == 0) {
    echo "<tr valign='top'>";
  }
  echo "<td width='20%' align='center'>
      <a href='watch.php?v=".$idvideolist."'><img src='./content/thumbs/".$idvideolist.".png' onerror=\"this.src='img/default.png'\" width='120' height='90' class='moduleFeaturedThumb'></a>
      <div class='moduleFeaturedTitle'><a href='watch.php?v=".$idvideolist."'>".$namevideolist."</a></div>
      <div class='moduleFeaturedDetails'>
        Added: ".$uploadvideolist."<br>
        by <a href='profile.php?user=".$uploadervideolist."'>".$uploadervideolist."</a>
      </div>
      <div class='moduleFeaturedDetails'>
        Views: ".$viewsvideolist."
      </div>
      
    </td>";
  $count++;
  if($count == 4) {
    echo "</tr>";
    $count = 0;
  }
  }
?>
        </tbody></table>

      </div>

      <!-- begin paging -->
     <div style="font-size: 13px; font-weight: bold; color: #444; text-align: right; padding: 5px 0px;">
    <?php
    $pagecount = 0;
    echo "Browse Pages: ";
    while ($pagecount < $pages) {
        $pagecount++;
        echo "<span style='background-color: #CCC; padding: 1px 4px 1px 4px; border: 1px solid #999; margin-right: 5px;'><a href='browse.php?page=".$pagecount."'>".$pagecount."</a></span>";
    }
    ?>
</div>

      <!-- end paging -->
    </td>
    <td><img src="img/pixel.gif" width="5" height="1"></td>
  </tr>
  <tr>
    <td><img src="img/box_login_bl.gif" width="5" height="5"></td>
    <td><img src="img/pixel.gif" width="1" height="5"></td>
    <td><img src="img/box_login_br.gif" width="5" height="5"></td>
  </tr>
</tbody></table>
<?php include("footer.php"); ?>