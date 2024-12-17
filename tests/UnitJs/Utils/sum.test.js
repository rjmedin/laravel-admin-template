import { expect, test, describe } from 'vitest';

function sum(a, b) {
  return a + b;
}

describe('resources/js/Utils', () => {
  test('adds 1 + 2 to equal 3', () => {
    expect(sum(1, 2)).toBe(3);
  });
});
