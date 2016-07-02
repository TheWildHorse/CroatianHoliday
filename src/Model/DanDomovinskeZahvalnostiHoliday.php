<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class DanDomovinskeZahvalnostiHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Homeland Thanksgiving Day';
            default:
            case 'hr':
                return 'Dan domovinske zahvalnosti';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-08-05');
    }
}