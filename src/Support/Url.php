<?php

namespace PragmaRX\Google2FAPhp\Support;

class Url
{
    public static function generateGoogleQRCodeUrl($domain, $page, $queryParameters, $qrCodeUrl)
    {
        $url = $domain.
                rawurlencode($page).
                '?'.$queryParameters.
                urlencode($qrCodeUrl);

        return $url;
    }
}
