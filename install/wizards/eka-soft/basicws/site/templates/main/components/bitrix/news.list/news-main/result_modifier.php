<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}
if ( ! empty( $arResult )) {
    foreach ($arResult["ITEMS"] as $key => $arItem) {
        if (isset( $arItem['DETAIL_PICTURE']['ID'] )) {
            $arResult["ITEMS"][$key]['DETAIL_PICTURE'] = CFile::ResizeImageGet( $arItem['DETAIL_PICTURE']['ID'],
                array( 'width' => $arParams["DETAIL_PICTURE_WIDTH"], 'height' => $arParams["DETAIL_PICTURE_HEIGHT"] ),
                BX_RESIZE_IMAGE_EXACT, false, 100 );
        } else {
            $newImage = SITE_TEMPLATE_PATH . "/images/no_img_" . $arParams["LIST_IMG_WIDTH"] . "_" . $arParams["LIST_IMG_HEIGHT"] . ".png";
            if ( ! file_exists( $_SERVER["DOCUMENT_ROOT"] . $newImage )) {
                CFile::ResizeImageFile(
                    $sourceFile = $_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/images/no_img.png",
                    $destinationFile = $_SERVER["DOCUMENT_ROOT"] . $newImage,
                    $arSize = array( 'width' => $arParams["LIST_IMG_WIDTH"], 'height' => $arParams["LIST_IMG_HEIGHT"] ),
                    $resizeType = BX_RESIZE_IMAGE_EXACT,
                    $arWaterMark = array(),
                    $jpgQuality = 100,
                    $arFilters = false
                );
            }
            $arResult["ITEMS"][$key]['DETAIL_PICTURE']['src'] = $newImage;
        }
    }
}