<?php

namespace App\Services;

use App\Models\Income;

class IncomeService
{
    /** @throws \Exception */

    public function incomeList($dateFrom, $dateTo, $limit)
    {
        if (!is_null($limit)) {
            $date = Income::query()
                ->where('dateFrom', '>=', $dateFrom)
                ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate($limit);

            return $date;
        }
        $dateDefault = Income::query()
            ->where('dateFrom', '>=', $dateFrom)
            ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate(500);

        return $dateDefault;
    }
}
