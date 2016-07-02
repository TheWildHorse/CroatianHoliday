<?php
namespace IgorRinkovec\CroatianHoliday;

use DateTime;
use IgorRinkovec\CroatianHoliday\Enumeration\HolidayEnumeration;
use IgorRinkovec\CroatianHoliday\Model\HolidayFactory;

class CroatianHoliday
{
    /**
     * Returns a list of all holiday objects.
     * @return array[Holiday]
     * @throws HolidayNotFoundException
     */
    public static function getAllHolidays()
    {
        $all = [];
        foreach(HolidayEnumeration::getAllHolidayIDs() as $holidayId) {
            $all[] = HolidayFactory::build($holidayId);
        }
        return $all;
    }

    /**
     * Returns an array with the name of the holiday as a key and the date as a value.
     * @param $year
     * @param string $locale
     * @return array
     */
    public static function getAllHolidaysForYear($year, $locale = 'hr')
    {
        $all = [];
        foreach(self::getAllHolidays() as $holiday) {
            $all[$holiday->getName($locale)] = $holiday->getDateForYear($year);
        }
        return $all;
    }

    /**
     * Returns the holiday object by the provided id.
     * @param $holidayId
     * @return Model\Holiday
     * @throws Model\HolidayNotFoundException
     */
    public static function getHolidayById($holidayId)
    {
        return HolidayFactory::build($holidayId);
    }

    /**
     * Returns the holiday name by the provided id.
     * @param $holidayId
     * @param string $locale
     * @return string
     */
    public static function getHolidayNameById($holidayId, $locale = 'hr')
    {
        return self::getHolidayById($holidayId)->getName($locale);
    }

    /**
     * Provides the holiday date in the provided year.
     * @param $holidayId
     * @param $year
     * @return DateTime
     */
    public static function getHolidayDateByIdForYear($holidayId, $year = null)
    {
        // Fallback to current year
        if($year === null || $year < 0) {
            $year = (int)((new DateTime())->format('Y'));
        }
        return self::getHolidayById($holidayId)->getDateForYear($year);
    }
}