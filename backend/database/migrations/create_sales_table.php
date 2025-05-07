<?php 
function up(): void
{
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->foreignId('employee_id')->constrained()->onDelete('cascade');
        $table->integer('quantity_sold');
        $table->date('sale_date');
        $table->timestamps();
    });
}
?>