<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>

<?

if ($woman = mysqli_query($connection, "SELECT count(*) from `poll` where `sex`='Женский'")) {
}
?>
<label for="family">Мужчин:</label>


<?php
$connection = mysqli_connect('localhost', 'root', '', 'sitemanager3');
if ($result = mysqli_query($connection, "SELECT count(*) FROM `poll` where poll.sex=0")) {
    while ($user = $result->fetch_assoc()) {
        echo $user["count(*)"];
    }
}

?>
<label for="family">Женщин:</label>

<?php
if ($result = mysqli_query($connection, "SELECT count(*) FROM `poll` where poll.sex=1")) {
while ($user = $result->fetch_assoc()) {
echo $user["count(*)"];
}
}

?>
<br>
Ваш род деятельности:
<?php
if ($result = mysqli_query($connection, "SELECT count(*), pollacc.activity_id,acc.name   FROM  poll pl LEFT JOIN poll_activity pollacc  on pl.id=pollacc.poll_id left join activity acc on acc.id=pollacc.activity_id  where pollacc.activity_id is not null   group by pollacc.activity_id ")) {
    while ($user = $result->fetch_assoc()) {
         echo $user["name"];echo $user["count(*)"]; echo '<br>';
    }
}
?>




.<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
