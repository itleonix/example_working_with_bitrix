<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
//Вывод результатов полученных в массиве
//Для даекватного отображения как на скриншотах, необходим bootstrap v5
echo "<h5>Вывод товаров (в данном случае это книги)</h5><br>";
echo "<div class='row'>";
foreach ($arResult as $value) {
      echo "<div class='col-md-3'>".$value['ID'].". ".$value['NAME']."</div>";
}
echo "</div>";
?>