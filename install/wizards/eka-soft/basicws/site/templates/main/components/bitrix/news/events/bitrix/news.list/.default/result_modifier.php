<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
if ( ! empty( $arResult )) {
    foreach ($arResult["ITEMS"] as $key => $arItem) {
        if (isset($arItem['DETAIL_PICTURE']['ID'])) {
            $arResult["ITEMS"][$key]['DETAIL_PICTURE'] = CFile::ResizeImageGet( $arItem['DETAIL_PICTURE']['ID'],
                array( 'width' => $arParams["LIST_IMG_WIDTH"], 'height' => $arParams["LIST_IMG_HEIGHT"] ), BX_RESIZE_IMAGE_EXACT, true );
        } else {
            $newImage = SITE_TEMPLATE_PATH."/images/no_img_".$arParams["LIST_IMG_WIDTH"]."_".$arParams["LIST_IMG_HEIGHT"].".png";
            if(!file_exists($_SERVER["DOCUMENT_ROOT"].$newImage)){
                CFile::ResizeImageFile(
                    $sourceFile = $_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/images/no_img.png",
                    $destinationFile =  $_SERVER["DOCUMENT_ROOT"].$newImage,
                    $arSize = array('width'=>$arParams["LIST_IMG_WIDTH"], 'height'=>$arParams["LIST_IMG_HEIGHT"]),
                    $resizeType = BX_RESIZE_IMAGE_EXACT,
                    $arWaterMark = array(),
                    $jpgQuality=false,
                    $arFilters =false
                );
            }
            $arResult["ITEMS"][$key]['DETAIL_PICTURE']['src'] = $newImage;
        }
    }
}