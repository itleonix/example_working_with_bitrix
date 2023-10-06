<?//Компонент будет адкеватно отображать результат только с прикрученным bootstrap v5 (редактируется в шаблоне)
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Объявляем нужные переменные
$arResult = [];
$i = 0;
//Записываем в массив результаты работы метода
if(CModule::IncludeModule("iblock"))
{
   $items = GetIBlockElementList(6, intval($arParams["TEMPLATE_BOOK_SALE"]), Array("SORT"=>"ASC"));
   while($arItem = $items->GetNext())
   {
      $arResult[$i] = [
            "ID" => $arItem["ID"],
            "NAME" => $arItem["NAME"]
      ];
      $i++;
   }
}
$this->IncludeComponentTemplate();
?>