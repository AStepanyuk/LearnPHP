<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo strip_tags($name); ?> </title>
</head>
<body>

Привет, <?= htmlspecialchars($name); ?> <?= htmlspecialchars($last_name); ?>! Как дела?

</body>
</html>