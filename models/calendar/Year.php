<?php


namespace app\models;


class Year
{
    /**
     * @var $year integer
     */
    public $year;

    /**
     * Year constructor.
     * @param int $year
     */
    public function __construct(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return array    - получение всех событий за год
     */
    public function getYearEvents() : array
    {
        return ;
    }

    /**
     * @return int      - число событий за год
     */
    public function getNumberOfYearEvents() : int
    {
        return ;
    }
}