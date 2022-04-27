<?php
$_SESSION["form_data"]=$filteredPOST;

if(isset($_SESSION["form_data"]["calculation"]))
{
    $output="";
    $start_date = new DateTime($_SESSION["form_data"]["start_date"]);
    $end_date= new DateTime($_SESSION["form_data"]["end_date"]);
    $interval=$end_date->diff($start_date);
    
    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;
    $count_wages=$years*12+$months;
    if(isset($_SESSION["form_data"]["percentual_increase"]))
    {
        $start_wage=$_SESSION["form_data"]["start_wage"];
        $increase_rate=$_SESSION["form_data"]["percentual_increase"]/100;
        $wage=12*$start_wage;
        $month_wage=$start_wage;
        echo $month_wage."<br>";
        for($year=1; $year<$years; $year++)
        {
            $month_wage=$month_wage+$increase_rate*$month_wage;
            $wage+=12*($month_wage+$month_wage*$increase_rate);
            echo number_format($month_wage, 2, ",", ".")."<br>";
        }
        $month_wage=$month_wage+$increase_rate*$month_wage;
        $wage+=$months*$month_wage;
        $wage+=$days*$month_wage/30;
        echo "Gesamt: ".number_format($wage, 2, ",", ".");
    }
}