<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use DateInterval;
use DateTime;

class UskrsnjiPonedjeljakHoliday implements Holiday
{

    /**
     * Returns the name of the holiday in the proivided locale.
     * @param string $locale
     * @return string
     */
    public function getName($locale = 'hr') {
        switch($locale) {
            case 'en':
                return 'Easter Monday';
            default:
            case 'hr':
                return 'Uskršnji ponedjeljak';
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
        $date->add(new DateInterval("P1D"));
        return $date;
    }
}