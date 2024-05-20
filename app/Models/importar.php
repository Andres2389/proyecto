<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class importar extends Model
{
    use HasFactory;
    public function index()
    {
        return view('importar.importar.blade.php');
    }
    
}
