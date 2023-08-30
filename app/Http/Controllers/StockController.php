<?php

namespace App\Http\Controllers;

use App\Console\Constants\StockResponseEnum;
use App\Http\Requests\Stock\StoreRequest;
use App\Http\Resources\StockResource;
use App\Services\StockService;

class StockController extends Controller
{
    public function __construct(protected readonly StockService $stockService)
    {
    }


    /**
     * @throws \Exception
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $this->stockService->stockList(
            $request->get('dateFrom'),
            $request->get('dateTo'),
            $request->get('limit'),
        );
        return response([
            'data' => StockResource::collection($data),
            'message'=>StockResponseEnum::STOCK_LIST,
            'success' => true
        ]);
    }

}
