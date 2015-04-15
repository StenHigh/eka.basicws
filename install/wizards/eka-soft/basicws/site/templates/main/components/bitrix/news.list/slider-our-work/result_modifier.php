<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * Ресайз по передаваемым параметрам
 *
 * @param int $id     ID картинки
 * @param int $width  ширина картинки
 * @param int $height высота картинки (не обязательно)
 * @param bool $isImage есть ли картинка
 * @return array массив данных с информацией о картинке
 */
function DynamicResize( $id, $width, $height, $isImage = true )
{
    if ($isImage) {
        $result = CFile::ResizeImageGet( $id, array( 'width' => $width, 'height' => $height ), BX_RESIZE_IMAGE_EXACT,
            true );
    } else {
        $newImage['src'] = SITE_TEMPLATE_PATH . "/images/no_img_" . $width . "_" . $height . ".png";
        if ( ! file_exists( $_SERVER["DOCUMENT_ROOT"] . $newImage['src'] )) {
            CFile::ResizeImageFile(
                $sourceFile = $_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/images/no_img.png",
                $destinationFile = $_SERVER["DOCUMENT_ROOT"] . $newImage['src'],
                $arSize = array(
                    'width'  => $width,
                    'height' => $height
                ),
                $resizeType = BX_RESIZE_IMAGE_EXACT,
                $arWaterMark = array(),
                $jpgQuality = 100,
                $arFilters = false
            );
        }
        $result = $newImage;
    }
    return $result;
}

function SmallOrDetailImages($i,$arParams){
    if(in_array(substr($i, 14, 1),array(3,4))) {
        $width = $arParams['MORE_PHOTOS_WIDTH_BIG'];
    } else {
        $width = $arParams['MORE_PHOTOS_WIDTH'];
    }
    return $width;
}

if ( ! empty( $arResult )) {

    foreach ($arResult["ITEMS"] as $key => $arItem) {
        foreach ($arItem['PROPERTIES'] as $i => $arProperty) {
            if (substr( $i, 0, 14 ) == 'PROP_IMG_SMALL') {
                if ($arProperty['VALUE'] == '') {
                    $arResult["ITEMS"][$key]['PROPERTIES'][$i]['FILE_DESC'] = dynamicResize( $arProperty['VALUE'], SmallOrDetailImages($i,$arParams), $arParams['MORE_PHOTOS_HEIGHT'],false);
                } else {
                    $arResult["ITEMS"][$key]['PROPERTIES'][$i]['FILE_DESC'] = dynamicResize( $arProperty['VALUE'], SmallOrDetailImages($i,$arParams), $arParams['MORE_PHOTOS_HEIGHT'] );
                }
            } // TODO 1) else Обработчик больших картинок
        }
    }
}