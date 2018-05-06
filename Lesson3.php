<?php
    $animals = [
        'Eurasia' => ['Hippopotamus Major', 'Lutra', 'Castor Fiber'],
        'Africa' => ['Hippotragus', 'Giraffa', 'Loxodonta africana'],
        'Americas' => ['Puma concolor', 'Panthera onca', 'Haliaeetus leucocephalus'],
        'Australia' => ['Emu', 'Kangaroo', 'Ornithorhynchus anatinus'],
        'Antarctica' => ['Penguins', 'Balaenoptera musculus', 'Orcinus orca']
    ];
    $firstnames = [];
    $lastnames = [];
    foreach ($animals as $continents => $continent) {
        foreach ($continent as $animal) {
            $names = explode(' ', $animal);
            if (count($names) == 2) {
                list($firstname, $lastname) = $names;
                $firstnames[$firstname] = $continents;
                $lastnames[] = $lastname;
            }
            
        }
    }
    $firstOfnames = array_keys($firstnames);
    shuffle($firstOfnames);
    shuffle($lastnames);
    foreach ($firstOfnames as $firstnumber => $firstname) {
        $continents = $firstnames[$firstname];
        $lastname = $lastnames[$firstnumber];
        $unrealcontinents[$continents][] = "$firstname $lastname";
    }
    ksort($unrealcontinents);
    foreach ($unrealcontinents as $continents => $animals) {
        echo "<h2>$continents</h2>";
        echo implode(',', $animals);
    }
?>
    