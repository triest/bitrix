<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� ����������");
?><?$APPLICATION->IncludeComponent("bitrix:iblock.element.add", ".default", Array(
	"IBLOCK_TYPE"	=>	"services",
	"IBLOCK_ID"	=>	"9",
	"NAV_ON_PAGE"	=>	"10",
	"USE_CAPTCHA"	=>	"Y",
	"USER_MESSAGE_ADD"	=>	"���� ���������� ���������",
	"USER_MESSAGE_EDIT"	=>	"���� ���������� ���������",
	"PROPERTY_CODES"	=>	array(
		0	=>	"NAME",
		1	=>	"DATE_ACTIVE_TO",
		2	=>	"IBLOCK_SECTION",
		3	=>	"DETAIL_TEXT",
		4	=>	"55",
		5	=>	"56",
	),
	"PROPERTY_CODES_REQUIRED"	=>	array(
		0	=>	"NAME",
		1	=>	"IBLOCK_SECTION",
		2	=>	"DETAIL_TEXT",
	),
	"GROUPS"	=>	array(
		0	=>	"2",
	),
	"STATUS"	=>	"ANY",
	"STATUS_NEW"	=>	"N",
	"ELEMENT_ASSOC"	=>	"PROPERTY_ID",
	"ELEMENT_ASSOC_PROPERTY"	=>	"58",
	"ALLOW_EDIT"	=>	"Y",
	"ALLOW_DELETE"	=>	"Y",
	"MAX_USER_ENTRIES"	=>	"20",
	"MAX_LEVELS"	=>	"1",
	"LEVEL_LAST"	=>	"Y",
	"MAX_FILE_SIZE"	=>	"0",
	"SEF_MODE"	=>	"N",
	"CUSTOM_TITLE_NAME"	=>	"������� �������� ����������",
	"CUSTOM_TITLE_DATE_ACTIVE_TO"	=>	"���� ���������� ��",
	"CUSTOM_TITLE_IBLOCK_SECTION"	=>	"���������",
	"CUSTOM_TITLE_DETAIL_TEXT"	=>	"����� ����������"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
