<?php include('errorhandler.php');?>

<div class="titullih">Rrjetet sociale<img src="images/hline.png" style="z-index:-1; width:1345px; height:1px;"></div>
<div class="hsocial">
<div class="hsocialc">
<img src="images/fb-icon.png" width="75" height="75" alt="facebook">
</div>
<div class="hsocialc">
<img src="images/twitter-icon.png" width="75" height="75" alt="twitter">
</div>
<div class="hsocialc">
<img src="images/instagram-icon.png" width="75" height="75" alt="instagram">
</div>
<div class="hsocialc">
<img src="images/pinterest-icon.png" width="75" height="75" alt="pinterest">
</div>
<div class="hsocialc">
<img src="images/google-icon.png" width="75" height="75" alt="google">
</div>
<div class="hsocialc">
<img src="images/youtube-icon.png" width="75" height="75" alt="youtube">
</div>
</div>
<div class="footer">
<div style="float:left;">
<p style="font-family:fonti1; font-weight:600; text-transform:uppercase; font-size:13px;">Regjistrohuni per <br>njoftimet e fundit</p>
<p>Pranoni me te rejat rreth ofertave dhe<br> udhetimeve ne emailin tuaj</p>
<form id="formemail">
<input type="email" placeholder="Email adresa juaj" id="emailtext">
<input type="submit" value="Sign Up" id="signupemail">
</form>
<p style="font-size:11px; font-style:italic; position:relative; position-left:55px;">Faqe e punuar gjate projektit<br> per lenden "Programimi ne Internet" FIEK 2016</p>
</div>
<img src="images/vline.png" width="1px" height="170px" style="float:left; opacity: 0.4; margin:0 30px 0 30px;">
<div class="tagsfooter">
<div class="tagu">
<?php $stringu="#venture";
  if(strpos($stringu,'a'))
    {
      echo "<p>".$stringu."</p>";
    }
    else {
      trigger_error("Nuk keni shkronje te duhur ne string",E_ALL);
    }
?>
</div>
<div class="tagu">
<p><?php
$hey="#rrezik";
$num=NULL;
function &blah() {

$hey= &$GLOBALS["hey"];
return $hey;

}
$num=&blah();
echo "<p>".$num."</p>";   ?></p>
</div>
<div class="tagu">
<p>#nate</p>
</div>
<div class="tagu">
<p>#dimer</p>
</div>
<div class="tagu">
<p>#camp</p>
</div>
<div class="tagu">
<p>#trek</p>
</div>
<div class="tagu">
<p>#bike</p>
</div>
<div class="tagu">
<p>#sunnyday</p>
</div>
<div class="tagu">
<p>#liqen</p>
</div>
<div class="tagu">
<p>#note</p>
</div>
</div>
<br>
<br>

</div>
</div>
</body>
</html>
