<?php

namespace Icepay\Api\Soap\DataContract;

/**
 * Class representing BaseType
 *
 *
 *
 * @see http://schemas.datacontract.org/2004/07/APIService#BaseType
 */
class BaseTypeType
{

    /**
     * @var string|null
     */
    protected $Checksum = null;

    /**
     * @var int|null
     */
    protected $MerchantID = null;

    /**
     * @var string|null
     */
    protected $Timestamp = null;

    /**
     * Gets the Checksum.
     *
     * @return string|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }

    /**
     * Sets the Checksum.
     *
     * @param string|null $Checksum
     * @return $this
     */
    public function setChecksum($Checksum = null)
    {
        $this->Checksum = $Checksum;
        return $this;
    }

    /**
     * Gets the MerchantID.
     *
     * @return int|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }

    /**
     * Sets the MerchantID.
     *
     * @param int|null $MerchantID
     * @return $this
     */
    public function setMerchantID($MerchantID = null)
    {
        $this->MerchantID = $MerchantID;
        return $this;
    }

    /**
     * Gets the Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        if ($this->Timestamp === null) {
            $this->setTimestamp(gmdate('Y-m-d\TH:i:s\Z'));
        }

        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string|null $Timestamp
     * @return $this
     */
    public function setTimestamp($Timestamp = null)
    {
        $this->Timestamp = $Timestamp;
        return $this;
    }

    /**
     * Generate and set the checksum based on the instance values.
     *
     * @param $secretCode
     * @return string
     */
    public function generateChecksum($secretCode)
    {
        $this->setChecksum(
            $this->resolveChecksum(
                $this->enhanceChecksumData(
                    $secretCode,
                    $this->getChecksumData()
                )
            )
        );

        return $this->getChecksum();
    }

    /**
     * Get the data provided by the class to generate the checksum.
     *
     * @return array
     */
    protected function getChecksumData()
    {
        return [ ];
    }

    /**
     * Enhance this checksum data with needed information
     *
     * @param array $data
     * @return array
     */
    protected function enhanceChecksumData($secretCode, array $data)
    {
        array_unshift(
            $data,
            $secretCode,
            $this->getMerchantID(),
            $this->getTimestamp()
        );

        return $data;
    }

    /**
     * Resolve the checksum based on the provided data.
     *
     * @param array $data
     * @param bool $isAutoCheckout
     * @return string
     */
    protected function resolveChecksum(array $data, $isAutoCheckout = false)
    {
        $normalizedData = [];

        foreach ($data as $value) {
            if (is_bool($value)) {
                $value = $value ? 'true' : 'false';

                if ($isAutoCheckout) {
                    // autocheckout function computes boolean checksum differently (first character uppercase)
                    $value = ucfirst($value);
                }
            }

            $normalizedData[] = (string)$value;
        }

        return sha1(implode("|", $normalizedData));
    }

    /**
     * Validate the know checksum against a newly generated checksum.
     *
     * @return bool
     */
    public function validChecksum($secretCode)
    {
        $newSum = $this->resolveChecksum(
            $this->enhanceChecksumData(
                $secretCode,
                $this->getChecksumData()
            )
        );

        return $this->getChecksum() === $newSum;
    }
}

