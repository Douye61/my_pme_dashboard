
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */

     public function up(): void
{
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->foreignId('employee_id')->constrained()->onDelete('cascade');
        $table->integer('quantity');
        $table->date('sale_date');
        $table->timestamps();
        $table->decimal('total_price', 8, 2);

    });
}


}


?>