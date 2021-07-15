<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    const TYPE_WITHDRAWAL = 'Withdrawal';
    const TYPE_DEPOSIT = 'deposit';
}
