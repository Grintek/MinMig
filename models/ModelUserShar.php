<?php
$lin = mysqli_connect('localhost', 'root', '', 'test')
or die("Ошибка " . myspli_error($lin));
$query = ("SELECT id FROM users");
$res = mysqli_query($lin, $query) or die(mysqlii_error($lin));

while($idd = mysqli_fetch_assoc($res)){
    echo "{$idd['id']}";
}
