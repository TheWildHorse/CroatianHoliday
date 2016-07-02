<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class UskrsHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Easter';
            default:
            case 'hr':
                return 'Uskrs';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        $date = new DateTime();
        $date->setTimestamp(easter_date($year));
        return $date;
    }
}