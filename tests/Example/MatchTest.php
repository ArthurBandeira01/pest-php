<?php

use Src\Example\Math;

it('test sum', function () {
    $math = new Math;
    $result = $math->sum(2, 2);

    expect($result)->toBe(4);
});

it('test sum with many results', function (
    int $num1,
    int $num2,
    int $sum
) {
    $math = new Math;
    $result = $math->sum($num1, $num2);

    expect($result)->toBe($sum);
    expect($result)->toBeInt();
})
->with([
    "test 1" => [4, 6, 10],
    "test 2" => [4, 4, 8],
    "test 3" => [3, 1, 4],
    "test 4" => [2, 9, 11],
]);
