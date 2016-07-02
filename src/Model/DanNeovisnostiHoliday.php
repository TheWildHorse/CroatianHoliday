<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class DanNeovisnostiHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Independence Day';
            default:
            case 'hr':
                return 'Dan neovisnosti';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-10-08');
    }
}