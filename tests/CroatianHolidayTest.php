<?php
use IgorRinkovec\CroatianHoliday\CroatianHoliday;
use IgorRinkovec\CroatianHoliday\Enumeration\HolidayEnumeration;
use IgorRinkovec\CroatianHoliday\Model\Holiday;
use IgorRinkovec\CroatianHoliday\Model\NovaGodinaHoliday;

/**
 * User: igorrinkovec
 * Date: 02/07/16
 * Time: 17:18
 */
class CroatianHolidayTest extends PHPUnit_Framework_TestCase
{
    public function testGetAllHolidays()
    {
        $holidays = CroatianHoliday::getAllHolidays();
        $this->assertEquals(14, count($holidays));
        foreach($holidays as $holiday) {
            $this->assertTrue($holiday instanceof Holiday);
        }
    }

    public function testGetAllHolidaysForYear()
    {
        $holidays = CroatianHoliday::getAllHolidaysForYear(2016);
        $this->assertEquals(14, count($holidays));
        foreach($holidays as $holidayDate) {
            $this->assertTrue($holidayDate instanceof DateTime);
        }

        $holidaysEnglish = CroatianHoliday::getAllHolidaysForYear(2016, 'en');
        $this->assertEquals(14, count($holidaysEnglish));
        foreach($holidaysEnglish as $holidayDate) {
            $this->assertTrue($holidayDate instanceof DateTime);
        }
    }

    public function testGetHolidayById()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::NovaGodina);
        $this->assertTrue($holiday instanceof NovaGodinaHoliday);
    }

    public function testGetHolidayNameById()
    {
        $holidayName = CroatianHoliday::getHolidayNameById(HolidayEnumeration::NovaGodina);
        $this->assertEquals('Nova godina', $holidayName);
        $holidayName = CroatianHoliday::getHolidayNameById(HolidayEnumeration::NovaGodina, 'en');
        $this->assertEquals('New Year\'s Day', $holidayName);
    }

    public function testGetHolidayDateByIdForYear()
    {
        $holidayDate = CroatianHoliday::getHolidayDateByIdForYear(HolidayEnumeration::NovaGodina, 2016);
        $this->assertEquals('2016-01-01', $holidayDate->format('Y-m-d'));
        $holidayDate = CroatianHoliday::getHolidayDateByIdForYear(HolidayEnumeration::NovaGodina);
        $this->assertEquals((new DateTime())->format('Y') . '-01-01', $holidayDate->format('Y-m-d'));
    }
}
