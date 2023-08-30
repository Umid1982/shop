<?php

namespace App\Http\Controllers;

use App\Console\Constants\OrderResponseEnum;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\OrderResource;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(protected readonly OrderService $orderService)
    {
    }


    /**
     * @throws \Exception
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $this->orderService->orderList(
            $request->get('dateFrom'),
            $request->get('dateTo'),
            $request->get('limit'),
        );
        return response([
            'data' => OrderResource::collection($data),
            'message'=>OrderResponseEnum::ORDER_LIST,
            'success' => true
        ]);
    }
}
