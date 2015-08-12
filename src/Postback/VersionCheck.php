<?php
namespace Icepay\Api\Postback;

class VersionCheck
{
    const STATE_VERSION_CHECK = "VCHECK";

    /**
     * Generate a version checksum based on the provided information.
     *
     * @return string
     */
    public static function generateChecksum($merchantId, $secretCode)
    {
        return sha1(implode('|', [
            $secretCode,
            $merchantId,
            self::STATE_VERSION_CHECK,
            substr(time(), 0, 8)
        ]));
    }
}
