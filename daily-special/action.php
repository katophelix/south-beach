<?php
if (isset($_POST['submit'])) {
    $data = json_decode(file_get_contents("data.txt"), true); // true for assoc
    $data[$_POST['restaurant']] = array(
        "chef" => $_POST['chef'],
        "bio" => $_POST['bio'],
        "image" => $_POST['image'],
        "special_name" => $_POST['special_name'],
        "special_descr" => $_POST['special_descr'],
        "child_name" => $_POST['child_name'],
        "child_descr" => $_POST['child_descr']
    );
    $newData = json_encode($data);
    file_put_contents("data.txt", $newData);
}
?>