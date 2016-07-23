<?php

require "../boot.php";

$page = requestVar('p', '');
if ($page == 'hello') {
    include  "../controllers/hallo.php";
}else if ($page == "") {
    include  "../controllers/form.php";
}else {
    die ("error 404");
}


