<?php
use IgorRinkovec\CroatianHoliday\Exception\HolidayNotFoundException;
use IgorRinkovec\CroatianHoliday\Model\HolidayFactory;

/**
 * User: igorrinkovec
 * Date: 02/07/16
 * Time: 17:51
 */
class HolidayFactoryTest extends PHPUnit_Framework_TestCase
{

    public function testWrongHolidayId()
    {
        $this->expectException(HolidayNotFoundException::class);
        $holiday = HolidayFactory::build(-1);
    }

}
