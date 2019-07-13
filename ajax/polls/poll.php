<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 11.07.2019
 * Time: 21:34
 */


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["name"]) || !empty($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        http_response_code(501);
        return;
    }



    if (isset($_POST["family"]) || !empty($_POST["family"])) {
        $femili = $_POST["family"];
    } else {
        http_response_code(502);
        return;
    }


    if (isset($_POST["sex"]) || !empty($_POST["sex"])) {
        $sex = $_POST["sex"];
    } else {
        http_response_code(503);
        return;
    }

    if (isset($_POST["age"]) || !empty($_POST["age"])) {
        $age = $_POST["age"];
    } else {
        http_response_code(505);
        return;
    }

    if (isset($_POST["description"]) || !empty($_POST["description"])) {
        $description = $_POST["description"];
    } else {
        http_response_code(505);
        return;
    }

    if (isset($_POST["activity"]) || !empty($_POST["activity"])) {
        $activity = $_POST["activity"];
    } else {
        http_response_code(505);
        return;
    }

    $mysqli = new mysqli("127.0.0.1", "root", "", "sitemanager3");

    //check all variables
    if($femili=="" || $name=="" || $sex=="" || $description=="" || $activity=="" || $age==""){
        http_response_code(502);
        return;
    }

    $values = "(\"".$name."\",\"".$femili."\",\"".$sex."\",\"".$description."\",\"".$activity."\",\"".$age."\")";;



    $sql = "INSERT INTO `poll`( `name`, `family`, `sex`, `description`, `activity`, `age`) VALUES".$values;
    if ($mysqli->query($sql) === true) {
        http_response_code(201);
        return;
    } else {
        echo "Error: ".$sql."<br>".$mysqli->error;
        exit();
    }

}

