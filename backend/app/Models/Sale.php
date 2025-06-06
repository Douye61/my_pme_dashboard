<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sale extends Model  
{
    use HasFactory;
public function product()
{
    return $this->belongsTo(Product::class);
}

 public function sale()
{
    return $this->belongsTo(Employee::class);
}
}
?>