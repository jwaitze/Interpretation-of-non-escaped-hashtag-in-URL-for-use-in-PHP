<html>
<head><head>
<body>
	<script>
		if (window.location.hash) {
			window.location.replace(window.location.protocol
				+ '//' + window.location.host + escape(window.location.pathname
				+ window.location.hash.split('?')[0]));
		}
	</script>
<?php
	$request_uri = $_SERVER['REQUEST_URI'];
	$request_uri_parts = explode('?', $request_uri, 2);
	
	$url_path = $request_uri_parts[0];
	$url_path_parts = explode('/', $url_path);
	
	$irc_network = $url_path_parts[1];
	$irc_channel = urldecode($url_path_parts[2]);
	$irc_nickname = $url_path_parts[3];
?>
	<div>Network: <?= $irc_network ?></div>
	<div>Channel: <?= $irc_channel ?></div>
	<div>Nickname: <?= $irc_nickname ?></div>
</body>
</html>

