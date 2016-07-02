<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class SvetaTriKraljaHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Epiphany';
            default:
            case 'hr':
                return 'Sveta tri kralja';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-01-06');
    }
}