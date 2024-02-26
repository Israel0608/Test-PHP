<?php
$search = $_GET['search'];
$link = "http://www.google.co.il/search?q=$search";
header("location: $link");
