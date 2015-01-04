<html>
<head>
<link rel="stylesheet" type="text/css" href="include/markdown.css">
<style>
    .markdown-body {
        min-width: 200px;
        max-width: 790px;
        margin: 0 auto;
        padding: 30px;
    }
</style>
</head>
<body>

<div class="markdown-body" width="80%">

<p align="center"><a href="index.php?page=home.md">Home</a> | <a href="index.php?page=about_me.md">About Me</a> |  <a href="index.php?page=about_this_site.md">About This Site</a></p>

<?php
include 'include/parsedown/parsedown.php';

if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
} else {
    echo '<meta http-equiv="refresh" content="0; url=index.php?page=home.md" />';
    exit;
}

$markdown = file_get_contents("./pages/$page");
$Parsedown = new Parsedown();

echo $Parsedown->text($markdown);
?>
</div>
</body>
</html>