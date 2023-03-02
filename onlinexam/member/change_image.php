<?php
require_once '../includes/member/secure.inc.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            td
            {
                padding: 10px;
            }
        </style> 
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once '../includes/header.inc.php'; ?>
        </div>


        <div id="content" class="w3-card w3-border" style="background-color:white;padding: 10px;margin: justify;margin-bottom: 20px;">
            
            
<h2>SELECT IMAGE :</h2>
<p style="color:green;font-size: 1.1em;">Browse The Image You Want To Upload :</p>

<div class="w3-progress-container">
  <div id="myBar" class="w3-progressbar w3-green" style="width:0%">
  </div>
</div>
<form action="changed.php" method="POST" enctype="multipart/form-data">
                <table>
                <tr>
                    <td>
                <input type="file" name="photo" />
                    </td>
                </tr>
                
<p id="myP" style="color:#8bc34a;font-size: 1.1em;">Uploading <span id="demo">0</span> Your photo</p>
<tr><td>
        <input class="w3-btn w3-dark-grey" type="submit" name="submit" onclick="move();" value="Upload Photo">
</td>
</tr>
</table>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="w3-btn w3-ripple w3-yellow w3-border w3-border-yellow w3-round-xlarge" type="button" value="HOME" onclick="window.location.href = './index.php'"/>
<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById("myP").className = "w3-text-green w3-animate-opacity";
      document.getElementById("myP").innerHTML = "Successfully uploaded your photo!";
    } else {
      width++; 
      elem.style.width = width + '%'; 
      var num = width * 1 / 1;
      num = num.toFixed(0)
      document.getElementById("demo").innerHTML = num;
    }
  }
}
</script>      
        <div>
            <span>Note :</span><p class="error">Image Dimension Not More Than 1920 X 1080 Pixels.Otherwise Its Memory-Size Should Be Conducted As 0 KB OR Not Uploaded.</p>  
        </div>    
        </div>
        
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
