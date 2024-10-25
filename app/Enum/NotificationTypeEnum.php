<?php

namespace App\Enum;

enum NotificationTypeEnum: int
{
    case Info = 1;
    case Debug = 2;
    case Success = 3;
    case Warning = 4;
    case Error = 5;
}