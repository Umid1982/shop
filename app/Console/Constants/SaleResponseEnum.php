<?php

namespace App\Console\Constants;

enum SaleResponseEnum: string
{
    case SALE_LIST = 'Sale list';
    case ERROR = "Something went wrong, check Logs!";
}
