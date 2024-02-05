<?php
namespace App\Enums;

enum Role : int 
{
    case SuperAdministrator = 1;
    case Customer = 2;
}