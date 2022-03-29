<?php


class EmployeeFacade
{
    protected $calculatePay;
    protected $reportHours;
    protected $save;

    public function __construct(
        CalculatePay $calculatePay = null,
        ReportHours $reportHours = null,
        Save $save = null
    )
    {
        $this->calculatePay = $calculatePay ?: new CalculatePay();
        $this->reportHours = $reportHours ?: new ReportHours();
        $this->save = $save ?: new Save();
    }

    public function calculatePay()
    {
        return $this->calculatePay->calculatePay();
    }

    public function reportHours()
    {
        return $this->reportHours->reportHours();
    }

    public function save()
    {
        return $this->save->save();
    }
}


// Other classes

class CalculatePay extends Employee
{
    public function calculatePay()
    {
        return "Calculating payment";
    }
}

class ReportHours extends Employee
{
    public function reportHours()
    {
        return "Reporting Hours";
    }
}

class Save extends Employee
{
    public function save()
    {
        return "Saving";
    }
}

class Employee
{

}