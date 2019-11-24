<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
}
