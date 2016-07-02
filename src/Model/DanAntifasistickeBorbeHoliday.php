<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateTime;

class DanAntifasistickeBorbeHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Anti-Fascist Struggle Day';
            default:
            case 'hr':
                return 'Dan antifašističke borbe';
        }
    }

    /**
     * Returns the date of the holiday in the provided year.
     * @param $year
     * @return DateTime
     */
    public function getDateForYear($year) {
        return DateTime::createFromFormat('Y-m-d|', $year . '-06-22');
    }
}