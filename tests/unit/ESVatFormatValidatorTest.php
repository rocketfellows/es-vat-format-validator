<?php

namespace rocketfellows\ESVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\ESVatFormatValidator\ESVatFormatValidator;

class ESVatFormatValidatorTest extends TestCase
{
    /**
     * @var ESVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new ESVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'ESX00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ES00000000X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ES11111111X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ES99999999X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ES12345678X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX0000000X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX1111111X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX9999999X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ESX1234567X',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000X',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111X',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999X',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X0000000X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X1111111X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X9999999X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'X1234567X',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'ES123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ES12345678XX',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ES1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESX123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESX1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESXX1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESX1234',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESX12345678X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESX1234567XX',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ESXX1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DEX12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DEX1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Es12345678X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'eS12345678X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'es12345678X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EsX12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'eSX12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'esX12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EsX1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'eSX1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'esX1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678XX',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X12345679X',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'X123456X',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
