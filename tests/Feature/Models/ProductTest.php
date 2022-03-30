<?php
use \App\Models\Product;

test('Model Product Test', function () {
    $product = Product::factory()->create();
    expect($product)->toBeInstanceOf(Product::class);
    $this->assertDatabaseHas('products', $product->toArray());

    $product = Product::factory()->make();
    expect($product)->toBeInstanceOf(Product::class);
});
