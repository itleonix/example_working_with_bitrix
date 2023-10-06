<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
//Настройка входных параметров компонента для возможнсти визуального выбора
 $arComponentParameters = array(
	"GROUPS" => array(),
	"PARAMETERS" => array(
		"TEMPLATE_BOOK_SALE" => array(
			"PARENT" => "BASE",
			"NAME" => "Каталог книг",
			"TYPE" => "LIST",
			"VALUES" => array(
				"10" => "Бизнес-литература",
				"11" => "Детская литература",
				"12" => "Компьютеры и интернет",
				"13" => "Наука и образование",
				"16" => "Фантастика",
			),
			"MULTIPLE" => "N",
			"DEFAULT" => "10",
		),
	),
);
?>