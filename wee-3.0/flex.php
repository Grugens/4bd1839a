<html>
<head>
   <link rel="stylesheet" type="text/css" href="gpgstyle.css" >
</head>
<body>

<table cellpadding=10 border=0><tr>

<tr><td width=200> <a href="http://senderek.ie/wee" title="Back to Senderek Web Security"><img src=http://senderek.ie/images/logo.jpg height=80 border=0></a>
</td>

<td bgcolor=#fafaff width=600>
This demonstration shows the flexible feature of WEE, introduced in version 1.1.0.<br>
In order to be able to select the input field from serveral inputs, the option $FLEXIBLE = "yes"; must be enabled in the configuration file.

<p>

This flexible form needs a different "gpgconfig.php" file. Please copy the file 
"gpgconfig-flex.php" to "gpgconfig.php" to make sure that the correct inputs are 
being used.
</td></tr>

</table>


<center>
<h1>Encryption Demonstration</h1>

<form name=demoform action=send3.php method=POST>
<p>Name: <input type=text name=name>
<p>Email: <input type=text name=email>
<p>Message:
<p><textarea id=ComposeMsgText1 name=ComposeMsgText1 cols=40 rows=10>
</textarea>

<textarea id=ComposeMsgText2 name=ComposeMsgText2 cols=40 rows=10>
</textarea></center>

<p><center>
<select id=inputselector name=inputselector>
<option value="ComposeMsgText1"> first</option>
<option value="ComposeMsgText2"> second</option>
<option value="message1"> third</option>
<option value="message2"> fourth</option>
</select>

<input type=submit name= submit value="Send this message"> 

&nbsp;&nbsp;&nbsp;&nbsp;

<input title="Encrypt" name="encrypt" onclick="window.open('wee/wee-encrypt.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Encrypt this email message">

&nbsp;&nbsp;&nbsp;&nbsp;

<input title="Signature" name="sign" onclick="window.open('wee/wee-sign.php','emailtemplate','top=100, left=200, height=700, width=800, resizable=yes, scrollbars=yes, menubar=no, addressbar=no, status=yes')" type="button" name="button" value="Sign this  message">

</center>
</form>
</body>
</html>
