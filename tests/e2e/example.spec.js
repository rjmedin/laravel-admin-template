import { test, expect } from '@playwright/test';

const links = [
  {
    selector: 'a[href="https://github.com/geekhadev/laravel-admin-template"]',
    url: 'https://github.com/geekhadev/laravel-admin-template',
  },
  {
    selector:
      'a[href="https://github.com/geekhadev/laravel-admin-template/blob/main/CONTRIBUTING.md"]',
    url: 'https://github.com/geekhadev/laravel-admin-template/blob/main/CONTRIBUTING.md',
  },
  {
    selector:
      'a[href="https://github.com/geekhadev/laravel-admin-template/blob/main/CODE_OF_CONDUCT.md"]',
    url: 'https://github.com/geekhadev/laravel-admin-template/blob/main/CODE_OF_CONDUCT.md',
  },
  {
    selector: 'a[href="/login"]',
    url: '/login',
  },
  {
    selector: 'a[href="http://localhost:8000/register"]',
    url: 'http://localhost:8000/register',
  },
];

test('has title and valid links', async ({ page }) => {
  await page.goto('http://localhost:8000');
  await expect(page).toHaveTitle(/Laravel/);

  for (const link of links) {
    const element = await page.locator(link.selector);
    await expect(element).toBeVisible();
    await expect(element).toHaveAttribute('href', link.url);
  }
});
