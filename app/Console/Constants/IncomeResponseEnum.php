<?php

namespace App\Console\Constants;

enum IncomeResponseEnum: string
{
    case INCOME_LIST = 'Income list';
    case ERROR = "Something went wrong, check Logs!";
}
