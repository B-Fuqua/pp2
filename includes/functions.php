<?php
    function printArr($numbers)
    {
        foreach ($numbers as $number)
        {
            echo "<h3>$number</h3>";
        }
    }

    function largest($numbers)
    {
        $largest = $numbers[0];
        foreach ($numbers as $number)
        {
            if ($number > $largest)
            {
                $largest = $number;
            }
        }
        return $largest;
    }