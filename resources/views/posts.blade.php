<!doctype html>

<title>My BLog</title>
<link rel="stylesheet" href="/css/app.css">

<body>
<?php foreach ($posts as $post): ?>
<article>
        <?= $post; ?>
</article>
<?php endforeach; ?>
</body>
