<?php

$stockTableRaw = callAPI('GET', 'https://api2.savelend.se/datablocks/stock-table', ['c'=>'bbc48482-1063-43c7-8172-49c79a3072a5', 'token'=>'dd69f9bf-5450-4682-8b0e-8e970ec32bdb']);
$stockTable = json_decode($stockTableRaw);

$ownerListRaw = callAPI('GET', 'https://api2.savelend.se/datablocks/owner-list', ['c'=>'bbc48482-1063-43c7-8172-49c79a3072a5', 'token'=>'aa44b943-71ce-460f-81d9-784f9f53abce']);
$ownerList = json_decode($ownerListRaw);

function formatMoney($n) {
    $n = (0+str_replace(",","",$n));
       
        // is this a number?
        if(!is_numeric($n)) return false;
       
        // now filter it;
        if($n>=1000000) return round(($n/1000000),1).' MSEK';
        else if($n>=1000) return round(($n/1000),1).' TSEK';
       
        return number_format($n, ',', ' ');
}

?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 max-w-screen-xl mx-auto my-16 px-4">
    <div id="deltaToday" class="bg-progressive rounded-lg text-offwhite p-8">
        <div class="text-lg">SBL Finans</div>
        <div class="text-challenger text-8xl font-bold"><?php echo $stockTable->stocks[0]->latestPrice ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>

    <div id="deltaToday" class="bg-genuine rounded-lg text-offwhite p-8">
        <div class="text-lg">Senaste förändring</div>
        <div class="text-challenger text-8xl font-bold"><?php echo $stockTable->stocks[0]->deltaToday*100 ?>&nbsp;%</div>
    </div>

    <div id="deltaToday" class="bg-challenger rounded-lg text-offwhite p-8 md:col-span-2">
        <div class="text-lg">Förändring i år</div>
        <div class="text-restless text-8xl font-bold"><?php echo $stockTable->stocks[0]->deltaYear*100 ?>&nbsp;%</div>
    </div>

    <div id="deltaToday" class="bg-genuine rounded-lg text-offwhite p-8 md:col-span-2">
        <div class="text-lg">MCAP</div>
        <div class="text-challenger text-8xl font-bold"><?php echo formatMoney($stockTable->stocks[0]->mcap) ?></div>
    </div>

    <div id="deltaToday" class="bg-challenger rounded-lg text-offwhite p-8">
        <div class="text-lg">Årslägsta</div>
        <div class="text-restless text-8xl font-bold"><?php echo $stockTable->stocks[0]->minPriceYear ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>

    <div id="deltaToday" class="bg-inclusive rounded-lg text-offwhite p-8">
        <div class="text-lg">Årshögsta</div>
        <div class="text-progressive text-8xl font-bold"><?php echo $stockTable->stocks[0]->maxPriceYear ?> <span class="text-xl text-offwhite">(SEK)</span></div>
    </div>
</div>


<div class="bg-progressive">
    <div class="max-w-screen-lg mx-auto py-16 px-4 text-offwhite">
        <table class="w-full border-b border-challenger text-sm md:text-md">
            <thead>
                <tr>
                    <th class="p-1 text-left">Namn</th>
                    <th class="p-1 text-right">Antal aktier</th>
                    <th class="p-1 text-right">Kapital</th>
                    <th class="p-1 text-right">Röster</th>
                    <th class="p-1 text-right">Verifierad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ownerList->owners as $owner): ?>
                <tr>
                    <td class="p-1 text-left"><?php echo $owner->ownerName ?></td>
                    <td class="p-1 text-right"><?php echo number_format($owner->numOfShares, 0, ',', ' ') ?></td>
                    <td class="p-1 text-right"><?php echo round($owner->capital*100, 2) ?> %</td>
                    <td class="p-1 text-right"><?php echo round($owner->votes*100, 2) ?> %</td>
                    <td class="p-1 text-right"><?php echo $owner->holdingDate ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot class="font-bold">
                <tr>
                    <td class="p-1 text-left">Total 10</td>
                    <td class="p-1 text-right"><?php echo number_format($ownerList->ownerSum[0]->numOfShares, 0, ',', ' ') ?></td>
                    <td class="p-1 text-right"><?php echo round($ownerList->ownerSum[0]->capital*100, 2) ?> %</td>
                    <td class="p-1 text-right"><?php echo round($ownerList->ownerSum[0]->votes*100, 2) ?> %</td>
                    <td class="p-1 text-right"></td>
                </tr>
                <tr class="border-b border-challenger">
                    <td class="p-1 text-left">Övriga</td>
                    <td class="p-1 text-right"><?php echo number_format($ownerList->numOfShares - $ownerList->ownerSum[0]->numOfShares, 0, ',', ' ') ?></td>
                    <td class="p-1 text-right"><?php echo round((1 - $ownerList->ownerSum[0]->capital)*100, 2) ?> %</td>
                    <td class="p-1 text-right"><?php echo round((1 - $ownerList->ownerSum[0]->votes)*100, 2) ?> %</td>
                    <td class="p-1 text-right"></td>
                </tr>

                <tr>
                    <td class="p-1 text-left font-bold">Totala aktiegare</td>
                    <td class="p-1 text-right"><?php echo number_format($ownerList->numOfOwners, 0, ',', ' ') ?></td>
                    <td class="p-1 text-right" colspan="3"><?php echo $ownerList->numOfOwnersDate ?></td>
                </tr>

                <tr>
                    <td class="p-1 text-left font-bold">Totala aktier</td>
                    <td class="p-1 text-right"><?php echo number_format($ownerList->numOfShares, 0, ',', ' ') ?></td>
                    <td class="p-1 text-right" colspan="3"><?php echo $ownerList->numOfSharesDate ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>