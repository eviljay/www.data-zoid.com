<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="index.php" title="" />
<link rel="search" href="search.php" title="" />
<link rel="help" href="faq.php" title="" />
<link rel="author" href="memberlist.php" title="" />

<title>Rafters :: Search</title>
<link rel="stylesheet" href="templates/DzCom2/DzCom2.css" type="text/css">
</head>
<body bgcolor="#000000" text="#000000" link="#006699" vlink="#5493B4" />

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">

<table width="100%" height="110" cellspacing="0" cellpadding="0">
	<tr>
		<td class="titlebar" align="left" width="50%">
			<img src="templates/DzCom2/images/rafterslogonew.gif" width="254" height="100" alt="Rafters" />
		</td>
		<td class="titlebar" align="center" width="50%">
			<span class="gen">Put this button on your website!<BR><BR><a href="http://www.colonpipe.com/linkto.php" target="new"><img src="http://www.data-zoid.com/buttons/dzcom/colonpipe88x31.gif" width="88" height="31" alt="colonpipe.com" title="colonpipe.com"></a></span>
		</td>
	</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td rowspan="2" width="150" valign="middle">
			<SELECT ONCHANGE="location = this.options[this.selectedIndex].value;" METHOD="get" NAME="character" class="input">
				<OPTION selected>data-zoid.com navigation</OPTION>
				<OPTION VALUE="">-----</OPTION>
				<OPTION VALUE="http://www.data-zoid.com/">data-zoid.com Home</OPTION>
				<OPTION VALUE="http://fraxyl.data-zoid.com/">fraxylDesign</OPTION>
				<OPTION VALUE="http://fraxyl.data-zoid.com/roughing">- Roughing It</OPTION>
				<OPTION VALUE="http://natchcomics.data-zoid.com/">Natch Comics</OPTION>
				<OPTION VALUE="http://flatline.data-zoid.com/">Flatline</OPTION>
				<OPTION VALUE="http://brutallyhonest.data-zoid.com/">BHMR</OPTION>
				<OPTION VALUE="">-----</OPTION>
				<OPTION VALUE="">External Links</OPTION>
				<OPTION VALUE="">-----</OPTION>
				<OPTION VALUE="http://www.the-underdogs.org/">Home Of The Underdogs</OPTION>
			</SELECT>
		</td>

		<td align="right" nowrap="nowrap">
		<span class="navsmall"><a href="album.php" class="navsmall">Album</a> :: </span>
		<span class="navsmall"><a href="faq.php" class="navsmall">FAQ</a> :: </span>
		<span class="navsmall"><a href="search.php" class="navsmall">Search</a> :: </span>
		<span class="navsmall"><a href="memberlist.php" class="navsmall">Members</a> :: </span>
		<span class="navsmall"><a href="profile.php?mode=editprofile&amp;sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" class="navsmall">Profile</a> :: </span>
		<span class="navsmall"><a href="statistics.php" class="navsmall">Stats</a></span>
	</tr>
	<tr>
		<td align="right" nowrap="nowrap">
		<span class="navsmall"><a href="groupcp.php" class="navsmall">Usergroups</a> :: </span>
		<span class="navsmall"><a href="calendar-1.4.0a.php" class="navsmall">Calendar</a> :: </span>
		<span class="navsmall"><a href="privmsg.php?folder=inbox&amp;sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" class="navsmall">Not logged in</a> :: </span>
		<span class="navsmall"><a href="login.php?sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" class="navsmall">Login</a></span>
		<span class="navsmall"> :: <a href="profile.php?mode=register&amp;sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" class="navsmall">Register</a></span>
		</td>
	</tr>
</table>


<form action="search.php?mode=results&amp;sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span class="nav"><a href="index.php?sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" class="nav">Rafters Forum Index</a></span></td>
	</tr>
</table>

<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
		<th class="thHead" colspan="4" height="25">Search Query</th>
	</tr>
	<tr>
		<td class="row1" colspan="2" width="50%"><span class="gen">Search for Keywords:</span><br /><span class="gensmall">You can use <u>AND</u> to define words which must be in the results, <u>OR</u> to define words which may be in the result and <u>NOT</u> to define words which should not be in the result. Use * as a wildcard for partial matches</span></td>
		<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> Search for any terms or use query as entered<br /><input type="radio" name="search_terms" value="all" /> Search for all terms</span></td>
	</tr>
	<tr>
		<td class="row1" colspan="2"><span class="gen">Search for Author:</span><br /><span class="gensmall">Use * as a wildcard for partial matches</span></td>
		<td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></td>
	</tr>
	<tr>
		<th class="thHead" colspan="4" height="25">Search Options</th>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">Forum:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_forum"><option value="-1">All available</option><option value="1">The Be All and End All of Everything</option><option value="17">Forum Des Moderateurs</option><option value="2">General Discussion</option><option value="13">Sam Neill's House Of Games and Lemurs Mk. II.</option><option value="14">Chat Meeting Planning Place</option><option value="3">Roleplay Discussion</option><option value="18">Uni-Warrior: Future Legacy</option><option value="4">Classic Threads from the original Rafters!</option><option value="5">Classic Threads from Rafters Forum!</option><option value="19">PFA's Lyrics Quizzes Archive!</option><option value="7">Rafters 1.0.</option><option value="16">Survivor: Game 2</option><option value="11">Survivor: Game 1 - Finished!</option><option value="20">Natch: The Forum.</option><option value="21">Century 22 Development</option><option value="10">The Storyboard</option></select></span></td>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">Search previous:&nbsp;</span></td>
		<td class="row2" valign="middle"><span class="genmed"><select class="post" name="search_time"><option value="0" selected="selected">All Posts</option><option value="1">1 Day</option><option value="7">7 Days</option><option value="14">2 Weeks</option><option value="30">1 Month</option><option value="90">3 Months</option><option value="180">6 Months</option><option value="364">1 Year</option></select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> Search topic title and message text<br /><input type="radio" name="search_fields" value="msgonly" /> Search message text only</span></td>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">Category:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_cat"><option value="-1">All available</option><option value="1">Rules, Laws and other Things To Obey</option><option value="2">The Rafters</option><option value="3">The RP Department</option><option value="4">Classic Threads Archive</option><option value="6">Rafters Survivor</option><option value="7">Natch, Inc.</option><option value="8">Projects</option><option value="9">It sounded like a good idea at the time</option>
		</select></span></td>
		<td class="row1" align="right"><span class="gen">Sort by:&nbsp;</span></td>
		<td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="post" name="sort_by"><option value="0">Post Time</option><option value="1">Post Subject</option><option value="2">Topic Title</option><option value="3">Author</option><option value="4">Forum</option></select><br /><input type="radio" name="sort_dir" value="ASC" /> Ascending<br /><input type="radio" name="sort_dir" value="DESC" checked /> Descending</span>&nbsp;</td>
	</tr>
	<tr>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">Display results as:&nbsp;</span></td>
		<td class="row2" nowrap="nowrap"><input type="radio" name="show_results" value="posts" /><span class="genmed">Posts<input type="radio" name="show_results" value="topics" checked="checked" />Topics</span></td>
		<td class="row1" align="right"><span class="gen">Return first</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="return_chars"><option value="-1">All available</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200" selected="selected">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> characters of posts</span></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="4" align="center" height="28"><input class="liteoption" type="submit" value="Search" /></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle"><span class="gensmall">All times are GMT</span></td>
	</tr>
</table></form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top">
<form method="get" name="jumpbox" action="viewforum.php?sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onChange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Rules, Laws and other Things To Obey</option><option value="-1">----------------</option><option value="1">The Be All and End All of Everything</option><option value="-1">&nbsp;</option><option value="-1">The Rafters</option><option value="-1">----------------</option><option value="2">General Discussion</option><option value="22">Rafters DVD Exchange</option><option value="13">Sam Neill's House Of Games and Lemurs Mk. II.</option><option value="14">Chat Meeting Planning Place</option><option value="-1">&nbsp;</option><option value="-1">Natch, Inc.</option><option value="-1">----------------</option><option value="20">Natch: The Forum.</option><option value="-1">&nbsp;</option><option value="-1">Rafters Survivor</option><option value="-1">----------------</option><option value="16">Survivor: Game 2</option><option value="11">Survivor: Game 1 - Finished!</option><option value="-1">&nbsp;</option><option value="-1">The RP Department</option><option value="-1">----------------</option><option value="3">Roleplay Discussion</option><option value="18">Uni-Warrior: Future Legacy</option><option value="-1">&nbsp;</option><option value="-1">Classic Threads Archive</option><option value="-1">----------------</option><option value="4">Classic Threads from the original Rafters!</option><option value="5">Classic Threads from Rafters Forum!</option><option value="19">PFA's Lyrics Quizzes Archive!</option><option value="-1">&nbsp;</option><option value="-1">It sounded like a good idea at the time</option><option value="-1">----------------</option><option value="10">The Storyboard</option></select><input type="hidden" name="sid" value="sid=65d1c4c5ec5fd5e1e1cdc05d073e5fe1" />&nbsp;<input type="submit" value="Go" class="liteoption" /></span></td>
	</tr>
</table></form>

</td>
	</tr>
</table>


<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB 2.0.2 line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> 2.0.2 &copy; 2001, 2002 phpBB Group<br /></span></div>
		</td>
	</tr>
</table>

</body>
</html>

