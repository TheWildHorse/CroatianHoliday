<?php
namespace IgorRinkovec\CroatianHoliday\Enumeration;

use ReflectionClass;


/**
 * Enumerates all croatian holidays.
 * Class HolidayEnumeration
 * @package IgorRinkovec\CroatianHoliday
 */
class HolidayEnumeration
{
    const NovaGodina = 1;
    const SvetaTriKralja = 2;
    const Uskrs = 3;
    const UskrsnjiPonedjeljak = 4;
    const PraznikRada = 5;
    const Tijelovo = 6;
    const DanAntifasistickeBorbe = 7;
    const DanDrzavnosti = 8;
    const DanDomovinskeZahvalnosti = 9;
    const VelikaGospa = 10;
    const DanNeovisnosti = 11;
    const DanSvihSvetih = 12;
    const Bozic = 13;
    const SvetiStjepan = 14;

    /**
     * Returns an array of all defined holiday IDs
     * @return mixed
     */
    public static function getAllHolidayIDs()
    {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }

}