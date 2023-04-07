<?php

namespace rocketfellows\ESVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class ESVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(ES)?([A-Z]{1}\d{8}$|\d{8}[A-Z]{1}$|[A-Z]{1}\d{7}[A-Z]{1}$)/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
