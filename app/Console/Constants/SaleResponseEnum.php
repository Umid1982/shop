<?php

namespace App\Console\Constants;

enum SaleResponseEnum: string
{
    case SALE_LIST = 'Stock list';
    case ERROR = "Something went wrong, check Logs!";
}
