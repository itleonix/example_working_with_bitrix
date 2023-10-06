<?//Описание компонента 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
	"DESCRIPTION" => GetMessage("Компонент для вывода товаров из выбранного раздела (Для адекватного отображения необходим bootstrap v5)"),
	"NAME" => GetMessage("Товары"),
	"PATH" => array(
	"ID" => "leox_components",
	"CHILD" => array(
		"ID" => "bookssale",
		"NAME" => "Каталог книг"
	)
),
"ICON" => "/images/icon.gif",
);
?>