<?php
use App\Models\Product;

it('Creates Models/Product object', function () {
    $product = Product::factory()->create();
    expect($product)->toBeInstanceOf(Product::class);
    $this->assertDatabaseHas('products', $product->toArray());

    $product = Product::factory()->make();
    expect($product)->toBeInstanceOf(Product::class);

    $product = new Product($product->toArray());
    $product->save();

    $this->assertDatabaseHas('products', $product->toArray());
});
