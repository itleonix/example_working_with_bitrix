<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
//Вывод результатов полученных в массиве
//Для даекватного отображения как на скриншотах, необходим bootstrap v5
echo "<h5>Вывод списка администраторов</h5><br>";
echo "<div class='row'>";
foreach ($arResult as $value) {
      echo "<div class='col-md-3'>login: ".$value['login']."<br>First name: ".$value['first_name']."<br>Last name: ".$value['last_name']."<br>Email: ".$value['email']."<br></div>";
}
echo "</div>";
?>