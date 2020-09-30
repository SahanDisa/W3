<!DOCTYPE html>
<html>
<body>
<form method="post" action="../controller/mailController.php"> 
	To:<br>
	<input type="email" name="to"><br> 
	Subject:<br>
	<input type="text" name="subject"><br><br>
	Message:
	<textarea rows="4" cols="40" name="message"> </textarea> 
	<input type="submit" name="send">
</form>
</html>
</body>