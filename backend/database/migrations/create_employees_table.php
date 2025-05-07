<?php
function up(): void
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('position');
        $table->timestamps();
    });
}
?>