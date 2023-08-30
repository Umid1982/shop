<?php

namespace App\Http\Controllers;

use App\Console\Constants\IncomeResponseEnum;
use App\Http\Requests\Income\StoreRequest;
use App\Http\Resources\IncomeResource;
use App\Services\IncomeService;

class IncomeController extends Controller
{
    public function __construct(protected readonly IncomeService $incomeService)
    {
    }


    /**
     * @throws \Exception
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $this->incomeService->incomeList(
            $request->get('dateFrom'),
            $request->get('dateTo'),
            $request->get('limit'),
        );
        return response([
            'data' => IncomeResource::collection($data),
            'message'=>IncomeResponseEnum::INCOME_LIST,
            'success' => true
        ]);
    }
}
