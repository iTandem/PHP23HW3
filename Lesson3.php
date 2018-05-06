<?php
    $animals = [
        'Eurasia' => ['Hippopotamus Major', 'Lutra', 'Castor Fiber'],
        'Africa' => ['Hippotragus', 'Giraffa', 'Loxodonta africana'],
        'Americas' => ['Puma concolor', 'Panthera onca', 'Haliaeetus leucocephalus'],
        'Australia' => ['Emu', 'Kangaroo', 'Ornithorhynchus anatinus'],
        'Antarctica' => ['Penguins', 'Balaenoptera musculus', 'Orcinus orca']
    ];
    $firstName = [];
    $lastName = [];
    foreach ($animals as $continent => $animal) {
        foreach ($animal as $name) {
            $animalName = str_word_count($name, 1);
            if (count($animalName) == 2) {
                $firstName[] = $animalName [0];
                $lastName[] = $animalName [1];
            }
        }
    }
    
    shuffle($firstName);
    shuffle($lastName);
    for ($x = 0; $x < count($firstName); $x++) {
        echo $firstName [$x] . ' ' . $lastName [$x];
        echo '<br/>';
    }
    ?>
    