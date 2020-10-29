<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
if (file_exists('schedule.xml')) {
    $xml = simplexml_load_file('schedule.xml');
    echo "<pre>";
    foreach ($xml->{'days'} as $keyDay => $dayObject) {
        var_dump($dayObject);die;
    }
} else {
    exit('Error abriendo test.xml.');
}
?>

</body>
</html> 