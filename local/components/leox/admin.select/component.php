<?//Компонент будет адкеватно отображать результат только с прикрученным bootstrap v5 (редактируется в шаблоне)
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Объявление необходимых переменных
global $f_LOGIN;
global $f_NAME;
global $f_LAST_NAME;
global $f_EMAIL;
$arResult = [];
$i = 0;
//Входные данные (фильтр), где groups id это идентефикатор группы пользователей с правами администратора
$filter = Array ("GROUPS_ID" => 1);
//Отбор пользователей согласно входным данным и запись их в массив для передачи в шаблон
$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $filter);
while($rsUsers->NavNext(true, "f_")) :
      $arResult[$i] = [
      	"login" => $f_LOGIN,
      	"first_name" => $f_NAME,
      	"last_name" => $f_LAST_NAME,
      	"email" => $f_EMAIL
      ];
      $i++;
endwhile;
$this->IncludeComponentTemplate();
?>