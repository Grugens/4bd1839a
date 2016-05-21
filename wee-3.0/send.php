<?php
echo "<center><h2>SENDING MAIL</h2>\n";
echo "<h4>Name: ".$_REQUEST['name']."</h4>\n";
echo "<h4> Email: ".$_REQUEST['email']."</h4>\n";
echo "<p><textarea name=sentmessage cols=70 rows=15>".$_REQUEST['demotext']."</textarea>\n";
echo "</center>\n";
?>

<h4 align=center>This demonstration page does not actually send the mail out to prevent spamming. <p>But everything that is needed to send the encrypted message arrives at this page.</center>
<p>
<hr><p>
<center><h4>If this message appears in your email, you can try to decrypt it.</h4>

<input title="Decryption" name="decrypt" onclick="window.open('wee/wee-decrypt.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Decrypt this  message">
<input title="Decryption" name="decrypt" onclick="window.open('wee/wee-verify.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Verify this  message">
</center>
<p><a href="http://senderek.ie/wee" title="Back to Senderek Web Security"><img src=http://senderek.ie/images/logo.jpg height=80 border=0></a>
