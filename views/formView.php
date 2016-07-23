<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forma</title>
</head>
<body>

<form action="/?p=hello">
    <input type="hidden" name="p" value="hello">
    <label>
        Name
        <input type="text" name="name">
    </label>
    <?php if ($vertical) { ?> <br/> <?php } ?>
    <label>
        Last name
        <input type="text" name="last_name">
    </label>
    <?php if ($vertical) { ?> <br/> <?php } ?>
    <button type="submit">OK</button>

</form>


<?php if ($vertical) { ?>
    <a href="/">Horizontalno</a>
<?php } else {?>
    <a href="/?vertical=1">Verticalno</a>
<?php } ?>

</body>
</html>