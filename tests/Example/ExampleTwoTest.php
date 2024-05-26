<?php

use Src\Example\Example;

it('should return string', function () {
    $example = new Example;
    $response = $example->say();

    expect($response)->toBeString();
});
