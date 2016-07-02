<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

interface Holiday
{
    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr');

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year);
}