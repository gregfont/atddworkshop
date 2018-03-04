<?php

require_once 'quotationModel.php';

class QuotationTest extends PHPUnit_Framework_TestCase
{
    protected $quotationModel;

    protected function setUp()
    {
        $this->quotationModel = new QuotationModel();
    }

    public function testQuotationForOneiPadProinFranceNoDiscount()
    {
        $expected = 878.9;
        $this->assertEquals($expected, $this->quotationModel->calculateQuotation(799, 1, "", "France"));
    }

    public function testQuotationForTenMacBooksInBelgiumNoDiscount()
    {
        $expected = 16489;
        $this->assertEquals($expected, $this->quotationModel->calculateQuotation(1499, 10, "", "Belgium"));
    }
}