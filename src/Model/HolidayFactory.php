<?php
namespace IgorRinkovec\CroatianHoliday\Model;

use IgorRinkovec\CroatianHoliday\Enumeration\HolidayEnumeration;

class HolidayFactory
{
    /**
     * Returns a holiday instance for the given holiday id.
     * @param $holidayId
     * @return Holiday
     * @throws HolidayNotFoundException
     */
    public static function build($holidayId)
    {
        switch($holidayId) {
            case HolidayEnumeration::NovaGodina:
                return new NovaGodinaHoliday();
            case HolidayEnumeration::SvetaTriKralja:
                return new SvetaTriKraljaHoliday();
            case HolidayEnumeration::Uskrs:
                return new UskrsHoliday();
            case HolidayEnumeration::UskrsnjiPonedjeljak:
                return new UskrsnjiPonedjeljakHoliday();
            case HolidayEnumeration::PraznikRada:
                return new PraznikRadaHoliday();
            case HolidayEnumeration::Tijelovo:
                return new TijelovoHoliday();
            case HolidayEnumeration::DanAntifasistickeBorbe:
                return new DanAntifasistickeBorbeHoliday();
            case HolidayEnumeration::DanDrzavnosti:
                return new DanDrzavnostiHoliday();
            case HolidayEnumeration::DanDomovinskeZahvalnosti:
                return new DanDomovinskeZahvalnostiHoliday();
            case HolidayEnumeration::VelikaGospa:
                return new VelikaGospaHoliday();
            case HolidayEnumeration::DanNeovisnosti:
                return new DanNeovisnostiHoliday();
            case HolidayEnumeration::DanSvihSvetih:
                return new DanSvihSvetihHoliday();
            case HolidayEnumeration::Bozic:
                return new BozicHoliday();
            case HolidayEnumeration::SvetiStjepan:
                return new SvetiStjepanHoliday();
        }
        throw new HolidayNotFoundException();
    }
}