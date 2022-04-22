<?php
use App\Models\Sale;

it('Creates Models/Sale object', function () {
    $sale = Sale::factory()->create();
    expect($sale)->toBeInstanceOf(Sale::class);
    $this->assertDatabaseHas('sales', $sale->toArray());
});
