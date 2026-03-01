<?php

if (!function_exists('formatPrice')) {
    function formatPrice(float $price): string
    {
        return '$' . number_format($price, 0, ',', '.');
    }
}

if (!function_exists('discountedPrice')) {
    function discountedPrice(float $price, int $discount): float
    {
        return $discount > 0 ? $price - ($price * $discount / 100) : $price;
    }
}