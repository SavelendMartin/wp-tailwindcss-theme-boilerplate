<?php

$stockTableRaw = callAPI('GET', 'https://api2.savelend.se/datablocks/stock-table', ['c'=>'bbc48482-1063-43c7-8172-49c79a3072a5', 'token'=>'dd69f9bf-5450-4682-8b0e-8e970ec32bdb', 'demo'=>true]);
$stockTable = json_decode($stockTableRaw);

print_r($stockTable);

?>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div id="deltaToday" class="">
        SBL Finans (SEK)
        <?php echo $stockTable->stocks[0]->latestPrice ?>
    </div>

    <div id="deltaToday" class="">
        Senaste förändring
        <?php echo $stockTable->stocks[0]->deltaToday*100 ?> %
    </div>
</div>