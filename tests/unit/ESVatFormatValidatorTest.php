<?php

namespace rocketfellows\ESVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

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
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
