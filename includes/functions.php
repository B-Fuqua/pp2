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

    function removeDups($numbers): array
    {
        return array_unique($numbers);
    }

    function distribution($numbers): array
    {
        $newArray = array();
        foreach (removeDups($numbers) as $number)
        {
            $count = 0;
            foreach ($numbers as $number2)
            {
                if ($number2 == $number)
                {
                    $count++;
                }
            }
            $newArray[$number] = $count;
        }
        ksort($newArray);
        return $newArray;
    }