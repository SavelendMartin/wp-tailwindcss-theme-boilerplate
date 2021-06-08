<?php

$stockTableRaw = callAPI('GET', 'https://api2.savelend.se/datablocks/stock-table', ['c'=>'bbc48482-1063-43c7-8172-49c79a3072a5', 'token'=>'dd69f9bf-5450-4682-8b0e-8e970ec32bdb', 'demo'=>true]);
$stockTable = json_decode($stockTableRaw);

print_r($stockTable);

?>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 max-w-screen-xl mx-auto my-16 px-4">
    <div id="deltaToday" class="bg-progressive rounded-lg text-offwhite p-6">
        <div class="text-lg">SBL Finans</div>
        <div class="text-challenger text-8xl font-bold"><?php echo $stockTable->stocks[0]->latestPrice ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>

    <div id="deltaToday" class="bg-genuine rounded-lg text-offwhite p-6">
        <div class="text-lg">Senaste förändring</div>
        <div class="text-challenger text-8xl font-bold"><?php echo $stockTable->stocks[0]->deltaToday*100 ?>&nbsp;%</div>
    </div>

    <div id="deltaToday" class="bg-challenger rounded-lg text-offwhite p-6">
        <div class="text-lg">Lägst</div>
        <div class="text-restless text-8xl font-bold"><?php echo $stockTable->stocks[0]->minPriceYear ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>

    <div id="deltaToday" class="bg-inclusive rounded-lg text-offwhite p-6">
        <div class="text-lg">Högst</div>
        <div class="text-progressive text-8xl font-bold"><?php echo $stockTable->stocks[0]->maxPriceYear ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>
</div>