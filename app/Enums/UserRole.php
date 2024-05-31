<?php

namespace App\Enums;

enum UserRole: string
{
    case USER = 'user';
    case PHARMACY =  'pharmacy';
    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super admin';
}
