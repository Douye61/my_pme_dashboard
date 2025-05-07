<?php 
function product()
{
    return $this->belongsTo(Product::class);
}

 function employee()
{
    return $this->belongsTo(Employee::class);
}

?>