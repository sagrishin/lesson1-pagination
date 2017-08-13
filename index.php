<!DOCTYPE html>
<html>
	<head>
		<title>Pagination</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	</head>
	<body>
	<?php
		require_once "functions.php";
		// текущая страница
		$page = $_GET["page"];
		if ($page < 1 or $page == "") $page = 1;
		// количество строк-статей на стр.
		$limit = 5;
		// начало выборки из БД
		$start = getStart($page, $limit);
		
		$articles = getAllArticles($start, $limit);
		for ($i = 0; $i < count($articles); $i++) echo $articles[$i]["title"]." <br />";
		echo pagination($page, $limit);
	?>
	</body>
</html>