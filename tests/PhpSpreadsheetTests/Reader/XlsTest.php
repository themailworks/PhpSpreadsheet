<?php

namespace PhpOffice\PhpSpreadsheetTests\Reader;

use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PHPUnit\Framework\TestCase;

class XlsTest extends TestCase
{
 

	/**
	 * Test load Xls file with password.
	 */
	public function testLoadXlsWithPasswordProtectionExcel2016()
	{
		$filename = './data/Reader/XLS/with_password_2016.xls';
		$reader = new Xls();
		$reader->setWorkbookPassword('secret');
		$sheet = $reader->load($filename);

		$this->assertEquals('test', $sheet->getActiveSheet()->getCell('A1')->getValue());
	}

	/**
	 * Test load Xls file with password.
	 */
	public function testLoadXlsWithPasswordProtectionNumbers()
	{
		$filename = './data/Reader/XLS/with_password_numbers.xls';
		$reader = new Xls();
		$reader->setWorkbookPassword('secret');
		$sheet = $reader->load($filename);

		$this->assertEquals('test', $sheet->getActiveSheet()->getCell('A1')->getValue());
	}

	/**
	 * Test load Xls file with password.
	 */
	public function testLoadXlsWithoutPasswordProtection()
	{
		$filename = './data/Reader/XLS/without_password.xls';
		$reader = new Xls();
		$sheet = $reader->load($filename);

		$this->assertEquals('test data', $sheet->getActiveSheet()->getCell('A1')->getValue());
	}
}
