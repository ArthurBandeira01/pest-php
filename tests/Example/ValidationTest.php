<?php

use Src\Example\Validation;

it('validate min length', function(){
    Validation::minLength('ar');
})
->throws(Exception::class, 'invalid qty characters');

it('validate is null', function(){
    Validation::minLength(null);
})
->throws(Exception::class);
