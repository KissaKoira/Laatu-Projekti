<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Results";
    $group1=$_POST["group1"];
    $group2=$_POST["group2"];
    $group3=$_POST["group3"];
    $group4=$_POST["group4"];

    mail($recipient, $subject, $group1, $group2, $group3, $group4);
}
