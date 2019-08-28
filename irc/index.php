<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>PJIRC Chat-Applet</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css.php">
<script language="JavaScript" type="text/javascript" src="chat.js"></script>
</head>

<body onLoad="document.login.nick.focus();">

<div align=center>
<form name="login" action="/irc/index.php" method="get" onSubmit="return RandomNick();">
	<input type="hidden" name="page" value="chat">
	<table width="45%" class="border"><tr><td align=center>
		<table width="100%" cellpadding=18>
			<tr>
				<td align=center valign=top class="tall">
					<hr>Welcome to the PJIRC Chat-Applet<hr><br>
					<a href="http://www.pjirc.com" target="_blank">
					<img src="img/pjirclogo.gif" width="131" height="102" border=0 alt="PJIRC - IRC Chat Solutions"></a>
				</td>
			</tr>
		</table>
		<table width="80%">
			<tr>
				<td align=right class="medium">Nickname:&nbsp;</td>
				<td><input name="nick" type="text" class="input"></td>
			</tr><tr>
				<td align=right class="medium">Smileys:&nbsp;</td>
				<td>
					<input name="smileys" type="radio" checked="checked" value="1">Yes&nbsp;
					<input name="smileys" type="radio" value="0">No&nbsp;
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td align=center height=20><input type="submit" value="Login"></td>
			</tr><tr>
				<td align=center height=20 class="small">
					<a href="/irc/index.php?page=advanced">advanced settings</a>
				</td>
			</tr>
		</table>
	</td></tr></table>
</form>
</div>

</body></html>