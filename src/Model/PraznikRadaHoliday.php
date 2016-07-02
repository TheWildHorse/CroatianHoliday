<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class PraznikRadaHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'International Workers\' Day';
            default:
            case 'hr':
                return 'Praznik rada';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-05-01');
    }
}