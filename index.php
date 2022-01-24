<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta name="google-site-verification" content="LPpR-D0tILnIGrkuj5JV6t5WXAL08dytgy6dnEz8CG0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Your External IP</title>
</head>
<body>
<div style='text-align:center;margin-top:20%;font-size:24pt'>
<?php
	echo $_SERVER['REMOTE_ADDR']; // Show IP
?>
<br><?php
	echo $_SERVER['HTTP_X_FORWARDED_FOR']; // Show forwarded IP
?>
</div>
</body>
</html>
