# Croatian Holiday
![CI](https://travis-ci.org/TheWildHorse/CroatianHoliday.svg?branch=master)
[![codecov](https://codecov.io/gh/TheWildHorse/CroatianHoliday/branch/master/graph/badge.svg)](https://codecov.io/gh/TheWildHorse/CroatianHoliday)

Handles calculation of Croatian holiday dates.

-----------------------

# Installation
The installation is done via Composer by running the following require command:
```
composer require thewildhorse/croatian-holiday
```

# Usage
CroatianHoliday class exposes several methods for fetching holiday information:

**getAllHolidays()**  
Returns an array of all Holiday objects.  
*Example:*  
```
$holidays = CroatianHoliday::getAllHolidays();
foreach($holidays as $h) {
  echo $h->getName('en') . ": " . $h->getDateForYear(2016)->format('d.m.Y.'); // Christmas: 25.12.2016
}
```
  

**getAllHolidaysForYear($year, $locale = 'hr')**  
Returns an array with holiday names as key and dates in the year as values.  
*Example:*  
```
$holidays = CroatianHoliday::getAllHolidaysForYear(2016);
foreach($holidays as $name => $date) {
  echo $name . ": " . $date->format('d.m.Y.'); // Božić: 25.12.2016
}
```

  

**getHolidayById($holidayId)**  
Returns the holiday object by holiday id. Holiday IDs are available in the HolidayEnumeration. 
*Example:*  
```
$holiday = CroatianHoliday::getHolidayById(HolidayEnumeration::NovaGodina);
echo $holiday->getName('hr') . ": " . $holiday->getDateForYear(2016)->format('d.m.Y.'); // Nova godina: 01.01.2016
```

  

**getHolidayNameById($holidayId, $locale = 'hr')**  
Returns the holiday name by holiday id. Holiday IDs are available in the HolidayEnumeration. 
*Example:*  
```
$holidayName = CroatianHoliday::getHolidayNameById(HolidayEnumeration::Uskrs);
echo $holidayName; // Uskrs
$holidayName = CroatianHoliday::getHolidayNameById(HolidayEnumeration::Uskrs, 'en');
echo $holidayName; // Easter
```
  


**getHolidayDateByIdForYear($holidayId, $year = {CURRENT_YEAR})**  
Returns the holiday date by holiday id. Holiday IDs are available in the HolidayEnumeration. 
*Example:*  
```
$prviMaj = CroatianHoliday::getHolidayDateByIdForYear(HolidayEnumeration::PraznikRada);
echo $prviMaj->format('Y-m-d'; // 2016-05-01
```
