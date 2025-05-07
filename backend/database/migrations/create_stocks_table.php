<?php
function up(): void
{
    Schema::create('stocks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->integer('quantity');
        $table->string('location')->nullable();
        $table->timestamps();
    });
}
    
?>