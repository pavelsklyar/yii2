<?php


namespace app\models;


class Day extends Month
{
    /**
     * @var $day        integer     - числовое значение дня месяца
     * @var $working    boolean     - рабочий день (true) или выходной (false)
     * @var $events     array       - массив id событий из базы данных
     */
    public $day;
    public $working;
    public $events;

    /**
     * Day constructor.
     * @param int $day
     * @param int $month
     * @param int $year
     */
    public function __construct(int $day, int $month, int $year)
    {
        parent::__construct($month, $year);
        $this->day = $day;

        /*
         *  Здесь же:
         *  - определение рабочего/выходного дня через метод setWorking
         *  - получение событий за текущий день из БД и запись их через метод setEvents
         */
    }

    /**
     * @return mixed
     */
    public function getWorking()
    {
        return $this->working;
    }

    /**
     * @param mixed $working
     */
    public function setWorking($working): void
    {
        $this->working = $working;
    }

    /**
     * @return array
     */
    public function getEvents() : array
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events): void
    {
        $this->events = $events;
    }

    /**
     * @return int  - число событий за конкретный день
     */
    public function getNumberOfDayEvents() : int
    {
        return ;
    }
}