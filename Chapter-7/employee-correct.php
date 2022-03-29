<?php

class Employee
{

}

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