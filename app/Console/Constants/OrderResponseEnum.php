<?php

namespace App\Console\Constants;

enum OrderResponseEnum: string
{
    case ORDER_LIST = 'Order list';
    case ERROR = "Something went wrong, check Logs!";
}
