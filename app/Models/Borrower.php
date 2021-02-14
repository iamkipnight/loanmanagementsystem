<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name', 'second_name','last_name','id_number','email_address','phone_number','nationality','city','address','description'
    ];
}
