<?php
declare(strict_types=1);
namespace YoastSeoForTypo3\YoastSeo\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class YoastReguestHash
 * @package YoastSeoForTypo3\YoastSeo\Utility
 */
class YoastReguestHash
{
    /**
     * @param $serverParams
     * @return bool
     */
    public static function isValid($serverParams): bool
    {
        return isset($serverParams['HTTP_X_YOAST_PAGE_REQUEST'])
            && $serverParams['HTTP_X_YOAST_PAGE_REQUEST'] === GeneralUtility::hmac(
                GeneralUtility::getIndpEnv('TYPO3_REQUEST_URL')
            );
    }
}
