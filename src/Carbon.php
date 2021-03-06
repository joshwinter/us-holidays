<?php namespace USHolidays;

class Carbon extends \Carbon\Carbon {

    private function getHolidays( $year = null ) {
        if( $year === null) {
            $year = date('Y');
        }

        // Martin Luther King Jr. Day
        $martinLuther = Carbon::create($year, 1, 1);
        if( $martinLuther->dayOfWeek !== Carbon::MONDAY ) {
        	$martinLuther->next(Carbon::MONDAY);
        }
        $martinLuther->next(Carbon::MONDAY)->next(Carbon::MONDAY);

        // Presidents' Day
        $presidents = Carbon::create($year, 2, 1);
        if( $presidents->dayOfWeek !== Carbon::MONDAY ) {
        	$presidents->next(Carbon::MONDAY);
        }
        $presidents->next(Carbon::MONDAY)->next(Carbon::MONDAY);

        // Memorial Day
        $memorial = Carbon::create($year, 5, 1);
        for ($i=0; $i < 7; $i++) {
        	if( $memorial->month == 5 ) {
        		$memorial->next(Carbon::MONDAY);
        	}  else {
        		$memorial->subDays(7);
        		break;
        	}
        }

        // Labor Day
        $labor = Carbon::create($year, 9, 1);
        if( $labor->dayOfWeek !== Carbon::MONDAY ) {
        	$labor->next(Carbon::MONDAY);
        }

        // Columbus Day
        $columbus = Carbon::create($year, 10, 1);
        if( $columbus->dayOfWeek !== Carbon::MONDAY ) {
        	$columbus->next(Carbon::MONDAY);
        }
        $columbus->next(Carbon::MONDAY);


        // Thanksgiving
        $thanksgiving = Carbon::create($year, 11, 1);
        if( $thanksgiving->dayOfWeek !== Carbon::THURSDAY ) {
        	$thanksgiving->next(Carbon::THURSDAY);
        }
        $thanksgiving->next(Carbon::THURSDAY)->next(Carbon::THURSDAY)->next(Carbon::THURSDAY);


        // Daylight Saving (Start)
        $daylightStart = Carbon::create($year, 3, 1);
        if( $daylightStart->dayOfWeek !== Carbon::SUNDAY ) {
        	$daylightStart->next(Carbon::SUNDAY);
        }
        $daylightStart->next(Carbon::SUNDAY);

        // Mothers Day
        $mothers = Carbon::create($year, 5, 1);
        if( $mothers->dayOfWeek !== Carbon::SUNDAY ) {
        	$mothers->next(Carbon::SUNDAY);
        }
        $mothers->next(Carbon::SUNDAY);

        // Armed Forces Day
        $armed = Carbon::create($year, 5, 1);
        if( $armed->dayOfWeek !== Carbon::SATURDAY ) {
            $armed->next(Carbon::SATURDAY);
        }
        $armed->next(Carbon::SATURDAY)->next(Carbon::SATURDAY);

        // Father Day
        $father = Carbon::create($year, 6, 1);
        if( $father->dayOfWeek !== Carbon::SUNDAY ) {
        	$father->next(Carbon::SUNDAY);
        }
        $father->next(Carbon::SUNDAY)->next(Carbon::SUNDAY);

        // Daylight Saving (End)
        $daylightEnd = Carbon::create($year, 11, 1);
        if( $daylightEnd->dayOfWeek !== Carbon::SUNDAY ) {
        	$daylightEnd->next(Carbon::SUNDAY);
        }


        $holidays = array(
        	array(
                'name' => "New Year's Day",
                'date' => Carbon::create($year, 1, 1),
                'bank_holiday' => true,
                'id' => 1
            ),
        	array(
                'name' => "Martin Luther King Jr. Day",
                'date' => $martinLuther,
                'bank_holiday' => true,
                'id' => 2
            ),
            array(
                'name' => "Groundhog Day",
                'date' => Carbon::create($year, 2, 2),
                'bank_holiday' => false,
                'id' => 3
            ),
            array(
                'name' => "Valentine's Day",
                'date' => Carbon::create($year, 2, 14),
                'bank_holiday' => false,
                'id' => 4
            ),
        	array(
                'name' => "President's Day",
                'date' => $presidents,
                'bank_holiday' => true,
                'id' => 5
            ),
            array(
                'name' => "Daylight Saving (Start)",
                'date' => $daylightStart,
                'bank_holiday' => false,
                'id' => 6
            ),
            array(
                'name' => "St. Patrick's Day",
                'date' => Carbon::create($year, 3, 17),
                'bank_holiday' => false,
                'id' => 7
            ),
            array(
                'name' => "April Fool's Day",
                'date' => Carbon::create($year, 4, 1),
                'bank_holiday' => false,
                'id' => 8
            ),
            array(
                'name' => "Mother's Day",
                'date' => $mothers,
                'bank_holiday' => false,
                'id' => 9
            ),
        	array(
                'name' => "Memorial Day",
                'date' => $memorial,
                'bank_holiday' => true,
                'id' => 10
            ),
            array(
                'name' => "Armed Forces Day",
                'date' => $armed,
                'bank_holiday' => false,
                'id' => 11
            ),
            array(
                'name' => "Father's Day",
                'date' => $father,
                'bank_holiday' => false,
                'id' => 12
            ),
            array(
                'name' => "Flag Day",
                'date' => Carbon::create($year, 6, 14),
                'bank_holiday' => false,
                'id' => 13
            ),
            array(
                'name' => "Independence Day",
                'date' => Carbon::create($year, 7, 4),
                'bank_holiday' => true,
                'id' => 14
            ),
            array(
                'name' => "Labor Day",
                'date' => $labor,
                'bank_holiday' => true,
                'id' => 15
            ),
            array(
                'name' => "Patriot Day",
                'date' => Carbon::create($year, 9, 11),
                'bank_holiday' => false,
                'id' => 16
            ),
        	array(
                'name' => "Columbus Day",
                'date' => $columbus,
                'bank_holiday' => true,
                'id' => 17
            ),
        	array(
                'name' => "Halloween",
                'date' => Carbon::create($year, 10, 31),
                'bank_holiday' => false,
                'id' => 18
            ),
            array(
                'name' => "Daylight Saving (End) ",
                'date' => $daylightEnd,
                'bank_holiday' => false,
                'id' => 19
            ),
            array(
                'name' => "Veterans Day",
                'date' => Carbon::create($year, 11, 11),
                'bank_holiday' => true,
                'id' => 20
            ),
            array(
                'name' => "Thanksgiving",
                'date' => $thanksgiving,
                'bank_holiday' => true,
                'id' => 21
            ),
            array(
                'name' => "Pearl Harbor Remembrance Day",
                'date' => Carbon::create($year, 12, 7),
                'bank_holiday' => false,
                'id' => 22
            ),
            array(
                'name' => "Christmas Eve",
                'date' => Carbon::create($year, 12, 24),
                'bank_holiday' => false,
                'id' => 23
            ),
        	array(
                'name' => "Christmas Day",
                'date' => Carbon::create($year, 12, 25),
                'bank_holiday' => true,
                'id' => 24
            ),
            array(
                'name' => "New Year's Eve",
                'date' => Carbon::create($year, 12, 31),
                'bank_holiday' => false,
                'id' => 25
            ),
        );


        return $holidays;
    }

    public function isHoliday($year = null)
	{
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);
        $isHoliday = false;

        foreach ($holidays as $holiday) {
            if( $this->isBirthday($holiday['date']) ) {
                $isHoliday = true;
            }
        }

        return $isHoliday;
    }

    public function isBankHoliday($year = null)
	{
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);
        $isBankHoliday = false;

        foreach ($holidays as $holiday) {
            if( $this->isBirthday($holiday['date']) && $holiday['bank_holiday'] ) {
                if($this->dayOfWeek !== Carbon::SUNDAY && $this->dayOfWeek !== Carbon::SATURDAY) {
                    $isBankHoliday = true;
                }

            } else {
                if( $this->dayOfWeek === Carbon::MONDAY ) {
                    $this->subDay();

                    if( $this->isBirthday($holiday['date']) && $holiday['bank_holiday'] ) {
                        $isBankHoliday = true;
                    } else {
                        $this->addDay();
                    }
                } else if( $this->dayOfWeek === Carbon::FRIDAY ) {
                    $this->addDay();

                    if( $this->isBirthday($holiday['date']) && $holiday['bank_holiday'] ) {
                        $isBankHoliday = true;
                    } else {
                        $this->subDay();
                    }
                }
            }
        }

        return $isBankHoliday;
    }

    public function getHolidayName($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);
        $holidayName = false;

        foreach ($holidays as $holiday) {
            if( $this->isBirthday($holiday['date']) ) {
                $holidayName = $holiday['name'];
            } else {
                if( $this->dayOfWeek === Carbon::MONDAY ) {
                    $this->subDay();

                    if( $this->isBirthday($holiday['date']) && $holiday['bank_holiday'] ) {
                        $holidayName = $holiday['name'] . ' (Observed)';
                    } else {
                        $this->addDay();
                    }
                } else if( $this->dayOfWeek === Carbon::FRIDAY ) {
                    $this->addDay();

                    if( $this->isBirthday($holiday['date']) && $holiday['bank_holiday'] ) {
                        $holidayName = $holiday['name'] . ' (Observed)';
                    } else {
                        $this->subDay();
                    }
                }
            }
        }

        return $holidayName;
    }


    public function getNewYearsDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(1, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getMLKDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(2, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getGroundhogDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(3, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getValentinesDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(4, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getPresidentsDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(5, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getDaylightSavingStartHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(6, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getStPatricksDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(7, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getAprilFoolsDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(8, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getMothersDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(9, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getMemorialDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(10, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getArmedForcesDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(11, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getFathersDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(12, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getFlagsDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(13, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getIndependenceDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(14, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }


    public function getLaborDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(15, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getPatriotsDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(16, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getColumbusDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(17, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getHalloweenDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(18, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getDaylightSavingEndHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(19, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getVeteransDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(20, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getThanksgivingHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(21, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getPearlHarborRemembranceHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(22, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getChristmasEveHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(23, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getChristmasDayHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(24, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

    public function getNewYearsEveHoliday($year = null)
    {
        $year = $year ? $year : $this->year;
        $holidays = $this->getHolidays($year);

        $index = array_search(25, array_column($holidays, 'id') );
        $date = $holidays[$index]['date'];

        $this->modify($date);
        return $date;
    }

}
