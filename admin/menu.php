<?
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use DigitalWand\AdminHelperExample\Helper\CustomEditHelper;
use DigitalWand\AdminHelperExample\Helper\CustomListHelper;

Loc::loadMessages(__FILE__);
Loader::includeModule('digitalwand.admin_helper_example');

$aMenu = array(
    "parent_menu" => "global_menu_services",
    "section" => "dw_ex",
    "sort" => 130,
    "text" => Loc::getMessage('DW_EX_MENU_TEXT'),
    "title" => Loc::getMessage('DW_EX_MENU_TITLE'),
    "icon" => "dw_ex_menu_icon",
    "page_icon" => "dw_ex_page_icon",
    "items_id" => "menu_dw_ex",
    "url" => CustomEditHelper::getListPageURL(),
    "more_url" => array(
        CustomListHelper::getEditPageURL()
    ),
);

return $aMenu;
?>