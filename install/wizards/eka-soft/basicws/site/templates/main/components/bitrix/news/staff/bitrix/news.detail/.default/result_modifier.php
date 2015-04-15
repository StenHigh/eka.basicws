<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
if ( ! empty( $arResult )) {
        if (isset($arResult['DETAIL_PICTURE']['ID'])) {
            $arResult['DETAIL_PICTURE'] = CFile::ResizeImageGet( $arResult['DETAIL_PICTURE']['ID'],
                array( 'width' => $arParams["DETAIL_IMG_WIDTH"], 'height' => $arParams["DETAIL_IMG_HEIGHT"] ), BX_RESIZE_IMAGE_EXACT, true );
        } else {
            $newImage = SITE_TEMPLATE_PATH."/images/no_img_".$arParams["DETAIL_IMG_WIDTH"]."_".$arParams["DETAIL_IMG_HEIGHT"].".png";
            if(!file_exists($_SERVER["DOCUMENT_ROOT"].$newImage)){
                CFile::ResizeImageFile(
                    $sourceFile = $_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/images/no_img.png",
                    $destinationFile =  $_SERVER["DOCUMENT_ROOT"].$newImage,
                    $arSize = array('width'=>$arParams["DETAIL_IMG_WIDTH"], 'height'=>$arParams["DETAIL_IMG_HEIGHT"]),
                    $resizeType = BX_RESIZE_IMAGE_EXACT,
                    $arWaterMark = array(),
                    $jpgQuality=false,
                    $arFilters =false
                );
            }
            $arResult['DETAIL_PICTURE']['src'] = $newImage;
        }

}
