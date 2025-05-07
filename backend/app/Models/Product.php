<?php 
function stocks()
{
    return $this->hasMany(Stock::class);
}
function sales()
{
    return $this->hasMany(Sale::class);
}

?>