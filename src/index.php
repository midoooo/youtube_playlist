<?php

require 'core.php';

if (isset($_POST['playlist'])) {
	$playlist = youtube_playlist($_POST['playlist']);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>YouTube Playlist as a Table</title>
	<link href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css" type="text/css" rel="stylesheet">
	<link href="css/screen.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="header">
	<h1>YouTube Playlist as a Table</h1>
	<form method="POST" class="pure-form">
	<fieldset>
		<input type="text" name="playlist" value="<?php echo htmlspecialchars(@$_POST['playlist']) ?>" placeholder="YouTube Playlist Id">
		<input type="submit" class="pure-button pure-button-primary pure-button-small">
	</fieldset>
	</form>
</div>

<div class="content">

<?php if (isset($playlist)): ?>
<table class="pure-table pure-table-horizontal">
<thead>
<tr>
	<th>#</th>
	<th>id</th>
	<th>title</th>
	<th>duration</th>
	<th>url</th>
	<!-- <th>description</th> -->
</tr>
</thead>
<tbody>
	<?php foreach ($playlist as $video): ?>
	<tr>
		<td><?php echo htmlspecialchars($video['no']) ?></td>
		<td><?php echo htmlspecialchars($video['id']) ?></td>
		<td><?php echo htmlspecialchars($video['title']) ?></td>
		<td><?php echo htmlspecialchars($video['duration']) ?></td>
		<td><?php echo htmlspecialchars($video['url']) ?></td>
		<!-- <td><?php echo htmlspecialchars($video['description']) ?></td> -->
	</tr>
	<?php endforeach ?>
<?php endif ?>
</div>

</body>
</html>
