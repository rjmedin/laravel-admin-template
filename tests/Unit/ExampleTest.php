<?php

function sum(int $a, int $b): int
{
    return $a + $b;
}

test('that sum of 1 and 1 is 2', function () {
    expect(sum(1, 1))->toBe(2);
});
