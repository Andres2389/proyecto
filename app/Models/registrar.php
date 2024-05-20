<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrar extends Model
{
    use HasFactory;
    public function index()
    {
        return view('bitacoras.bitacoras.blade.php');
    }
}
