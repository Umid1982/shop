<?php

namespace App\Services;

use App\Models\Sale;

class SaleService
{
    /** @throws \Exception */

    public function saleList($dateFrom, $dateTo, $limit)
    {
        if (!is_null($limit)) {
            $date = Sale::query()
                ->where('dateFrom', '>=', $dateFrom)
                ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate($limit);

            return $date;
        }
        $dateDefault = Sale::query()
            ->where('dateFrom', '>=', $dateFrom)
            ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate(500);

        return $dateDefault;
    }
}
