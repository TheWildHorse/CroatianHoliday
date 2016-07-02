<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class BozicHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Christmas';
            default:
            case 'hr':
                return 'Božić';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-12-25');
    }
}