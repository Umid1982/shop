<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    /** @throws \Exception */

    public function orderList($dateFrom, $dateTo, $limit)
    {
        if (!is_null($limit)) {
            $date = Order::query()
                ->where('dateFrom', '>=', $dateFrom)
                ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate($limit);

            return $date;
        }
        $dateDefault = Order::query()
            ->where('dateFrom', '>=', $dateFrom)
            ->where('dateTo', '<=', $dateTo)->latest()->simplePaginate(500);

        return $dateDefault;
    }
}
