<?php

namespace App\Console\Constants;

enum StockResponseEnum: string
{
    case STOCK_LIST = 'Stock list';
    case ERROR = "Something went wrong, check Logs!";
}
