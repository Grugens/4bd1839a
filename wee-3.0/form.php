<html>
<head>
   <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<a href="http://senderek.ie/wee" title="Back to Senderek Web Security"><img src=http://senderek.ie/images/logo.jpg height=80 border=0></a>
<center>
<h1>Encryption Demonstration</h1>

<form name=demoform action=send.php method=POST>
<p>Name: <input type=text name=name>
<p>Email: <input type=text name=email>
<p>Message:
<p><textarea name=demotext cols=80 rows=15>
<?php if (isset($_REQUEST["text"])) echo $_REQUEST["text"]; ?>
</textarea></center>

<p><center>
<input type=submit name= submit value="Send this message"> 

&nbsp;&nbsp;&nbsp;&nbsp;

<input title="Encrypt" name="encrypt" onclick="window.open('wee/wee-encrypt.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Encrypt this email message">

&nbsp;&nbsp;&nbsp;&nbsp;

<input title="Signature" name="sign" onclick="window.open('wee/wee-sign.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Sign this  message">

&nbsp;&nbsp;&nbsp;&nbsp;

<input title="Keys" name="sign" onclick="window.open('wee/wee-keys.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Key Management">
</center>
</form>
</body>
</html>
