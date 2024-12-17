import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8000/');
  await page.getByRole('link', { name: 'Log in' }).click();
  await page.getByLabel('Email').fill('khalisser@gmail.com');
  await page.getByLabel('Password').fill('qwerty123');
  await page.getByRole('button', { name: 'Log in' }).click();
  await expect(page.getByText("You're logged in!")).toBeVisible();
});
