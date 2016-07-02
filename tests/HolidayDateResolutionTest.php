<?php
use IgorRinkovec\CroatianHoliday\CroatianHoliday;
use IgorRinkovec\CroatianHoliday\Enumeration\HolidayEnumeration;

/**
 * User: igorrinkovec
 * Date: 02/07/16
 * Time: 16:41
 */
class HolidayDateResolutionTest extends PHPUnit_Framework_TestCase
{

    /*
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
     * */

    public function testNovaGodina()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::NovaGodina);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-01-01');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-01-01');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-01-01');
    }

    public function testSvetaTriKralja()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::SvetaTriKralja);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-01-06');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-01-06');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-01-06');
    }

    public function testUskrs()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::Uskrs);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-03-27');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-04-16');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-04-01');
    }

    public function testUskrsnjiPonedjeljak()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::UskrsnjiPonedjeljak);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-03-28');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-04-17');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-04-02');
    }

    public function testPraznikRada()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::PraznikRada);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-05-01');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-05-01');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-05-01');
    }

    public function testTijelovo()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::Tijelovo);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-05-26');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-06-15');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-05-31');
    }

    public function testDanAntifasistickeBorbe()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::DanAntifasistickeBorbe);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-06-22');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-06-22');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-06-22');
    }

    public function testDanDrzavnosti()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::DanDrzavnosti);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-06-25');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-06-25');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-06-25');
    }

    public function testDanDomovinskeZahvalnosti()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::DanDomovinskeZahvalnosti);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-08-05');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-08-05');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-08-05');
    }

    public function testVelikaGospa()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::VelikaGospa);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-08-15');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-08-15');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-08-15');
    }

    public function testDanNeovisnosti()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::DanNeovisnosti);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-10-08');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-10-08');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-10-08');
    }

    public function testDanSvihSvetih()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::DanSvihSvetih);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-11-01');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-11-01');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-11-01');
    }

    public function testBozic()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::Bozic);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-12-25');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-12-25');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-12-25');
    }

    public function testSvetiStjepan()
    {
        $holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::SvetiStjepan);
        $this->assertEquals($holiday->getDateForYear(2016)->format('Y-m-d'), '2016-12-26');
        $this->assertEquals($holiday->getDateForYear(2017)->format('Y-m-d'), '2017-12-26');
        $this->assertEquals($holiday->getDateForYear(2018)->format('Y-m-d'), '2018-12-26');
    }

}
