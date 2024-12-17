import { test, expect, describe } from 'vitest';
import { render, screen } from '@testing-library/react';
import '@testing-library/jest-dom';
import TitleTest from '../../../resources/js/Components/TitleTest';

describe('resources/js/Components', () => {
  test('renders the title correctly', () => {
    const title = 'Hello';
    render(<TitleTest title={title} />);
    expect(screen.getByRole('heading')).toHaveTextContent(title);
  });
});
