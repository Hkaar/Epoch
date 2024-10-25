<?php

namespace App\Enum;

enum RoleEnum: int
{
    case Admin = 1;
    case Moderator = 2;
    case Member = 3;
    case Operator = 4;
}