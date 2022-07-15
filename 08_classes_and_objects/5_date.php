<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function displayDate ()
    {
        if ($this->month < 0 || $this->month > 12) {
            echo "Invalid month provided" . "\n";
            exit;
        }
        if ($this->day < 0 || $this->day > 31) {
            echo "Invalid day provided"  . "\n";
            exit;
        }
        if ($this->year < 0 || $this->year > 9999) {
            echo "Invalid year provided"  . "\n";
            exit;
        }
        echo $this->month . "/" . $this->day . "/" . $this->year  . "\n";
    }

}

$date = new Date (12, 04, 2007);
$date2 = new Date (15, 04, 2007);


$date->displayDate();
$date2->displayDate();