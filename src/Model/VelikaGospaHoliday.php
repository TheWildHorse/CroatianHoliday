<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class VelikaGospaHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Assumption of Mary';
            default:
            case 'hr':
                return 'Velika Gospa';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-08-15');
    }
}