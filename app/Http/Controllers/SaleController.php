<?php

namespace App\Http\Controllers;

use App\Console\Constants\SaleResponseEnum;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Resources\SaleResource;
use App\Services\SaleService;

class SaleController extends Controller
{
    public function __construct(protected readonly SaleService $saleService)
    {
    }


    /**
     * @throws \Exception
     */
    public function __invoke(StoreRequest$request)
    {
        $data = $this->saleService->saleList(
            $request->get('dateFrom'),
            $request->get('dateTo'),
            $request->get('limit'),
        );
        return response([
            'data' => SaleResource::collection($data),
            'message'=>SaleResponseEnum::SALE_LIST,
            'success' => true
        ]);
    }
}
