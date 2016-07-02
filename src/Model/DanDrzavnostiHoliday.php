<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class DanDrzavnostiHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Statehood Day';
            default:
            case 'hr':
                return 'Dan državnosti';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-06-25');
    }
}