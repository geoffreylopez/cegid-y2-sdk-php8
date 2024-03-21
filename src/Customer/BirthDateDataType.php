<?php

namespace Y2\Customer;

class BirthDateDataType
{
    protected ?int $BirthDateDay = null;

    protected ?int $BirthDateMonth = null;

    protected ?int $BirthDateYear = null;


    public function __construct()
    {

    }

    public function getBirthDateDay(): ?int
    {
        return $this->BirthDateDay;
    }

    public function setBirthDateDay(int $BirthDateDay): static
    {
        $this->BirthDateDay = $BirthDateDay;
        return $this;
    }

    public function getBirthDateMonth(): ?int
    {
        return $this->BirthDateMonth;
    }

    public function setBirthDateMonth($BirthDateMonth): static
    {
        $this->BirthDateMonth = $BirthDateMonth;
        return $this;
    }

    public function getBirthDateYear(): ?int
    {
        return $this->BirthDateYear;
    }

    public function setBirthDateYear(int $BirthDateYear): static
    {
        $this->BirthDateYear = $BirthDateYear;
        return $this;
    }

}
