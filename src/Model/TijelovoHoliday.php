<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateInterval;
use DateTime;

class TijelovoHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return '';
            default:
            case 'hr':
                return '';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        $uskrs = new UskrsHoliday();
        $date = $uskrs->getDateForYear($year);
        $date->add(new DateInterval("P60D"));
        return $date;
    }
}