<?php

$stockTableRaw = callAPI('GET', 'https://api2.savelend.se/datablocks/stock-table', ['c'=>'bbc48482-1063-43c7-8172-49c79a3072a5', 'token'=>'dd69f9bf-5450-4682-8b0e-8e970ec32bdb', 'demo'=>true]);
$stockTable = json_decode($stockTableRaw);

print_r($stockTable);

?>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 max-w-screen-lg mx-auto my-20">
    <div id="deltaToday" class="bg-progressive rounded text-offwhite p-6">
        <div class="text-lg">SBL Finans (SEK)</div>
        <div class="text-challenger text-7xl font-bold"><?php echo $stockTable->stocks[0]->latestPrice ?></div>
    </div>

    <div id="deltaToday" class="bg-progressive rounded text-offwhite p-6">
        <div class="text-lg">Senaste förändring</div>
        <div class="text-challenger text-7xl font-bold"><?php echo $stockTable->stocks[0]->deltaToday*100 ?>&nbsp;%</div>
    </div>

    <div id="deltaToday" class="bg-progressive rounded text-offwhite p-6">
        <div class="text-lg">Lägst</div>
        <div class="text-challenger text-7xl font-bold"><?php echo $stockTable->stocks[0]->minPriceYear ?></div>
    </div>

    <div id="deltaToday" class="bg-progressive rounded text-offwhite p-6">
        <div class="text-lg">Högst</div>
        <div class="text-challenger text-7xl font-bold"><?php echo $stockTable->stocks[0]->maxPriceYear ?></div>
    </div>
</div>