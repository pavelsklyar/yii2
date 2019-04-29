<?php


namespace app\models;


class Month extends Year
{
    /**
     * @var $month integer
     */
    public $month;

    /**
     * Month constructor.
     * @param int $month
     * @param int $year
     */
    public function __construct(int $month, int $year)
    {
        parent::__construct($year);
        $this->month = $month;
    }

    /**
     * @return int      - получение числового значения месяца
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @return string   - получение название месяца
     */
    public function getMonthName() : string
    {
        switch ($this->month) {
            case 1:
                return "Январь";
            case 2:
                return "Февраль";
            case 3:
                return "Март";
            case 4:
                return "Апрель";
            case 5:
                return "Май";
            case 6:
                return "Июнь";
            case 7:
                return "Июль";
            case 8:
                return "Август";
            case 9:
                return "Сентябрь";
            case 10:
                return "Октябрь";
            case 11:
                return "Ноябрь";
            case 12:
                return "Декабрь";
            default:
                throw new \UnexpectedValueException("Такого месяца не существует!");
        }
    }

    /**
     * @return array    - получение всех событий за год
     */
    public function getMonthEvents() : array
    {
        return ;
    }

    /**
     * @return int      - число событий за год
     */
    public function getNumberOfMonthEvents() : int
    {
        return ;
    }
}