<?php

namespace App\Services;

use App\Models\Stock;

class StockService
{
    /** @throws \Exception */

    public function stockList($dateFrom, $dateTo, $limit)
    {
        if (!is_null($limit)) {
            $date = Stock::query()
                ->where('dateFrom', '>=', $dateFrom)
                ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate($limit);

            return $date;
        }
        $dateDefault = Stock::query()
            ->where('dateFrom', '>=', $dateFrom)
            ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate(500);

        return $dateDefault;
    }
}
