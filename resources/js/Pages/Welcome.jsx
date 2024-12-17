import { Head, Link } from '@inertiajs/react';

export default function Welcome({ auth }) {
  return (
    <>
      <Head title="Laravel Admin Template" />
      <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div className="relative flex min-h-screen flex-col items-center justify-center">
          <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <main className="mt-6">
              <div className="flex flex-col gap-4 max-w-xl items-start">
                <h1 className="text-4xl font-bold text-balance text-white">
                  Welcome to Laravel Admin Template
                </h1>
                <p className="text-sm text-balance">
                  Este proyecto es una base inicial para sistemas SAAS (Software
                  as a Service) utilizando Laravel e Inertia.js.
                </p>
                <div className="flex gap-2">
                  <a
                    target="_blank"
                    href="https://github.com/geekhadev/laravel-admin-template"
                    className="text-sm text-balance text-orange-500 hover:text-orange-600"
                    rel="noreferrer"
                  >
                    GitHub
                  </a>
                  <span className="text-sm text-balance text-gray-500">|</span>
                  <a
                    target="_blank"
                    href="https://github.com/geekhadev/laravel-admin-template/blob/main/CONTRIBUTING.md"
                    className="text-sm text-balance text-orange-500 hover:text-orange-600"
                    rel="noreferrer"
                  >
                    ¿Cómo contribuir?
                  </a>
                  <span className="text-sm text-balance text-gray-500">|</span>
                  <a
                    target="_blank"
                    href="https://github.com/geekhadev/laravel-admin-template/blob/main/CODE_OF_CONDUCT.md"
                    className="text-sm text-balance text-orange-500 hover:text-orange-600"
                    rel="noreferrer"
                  >
                    Código de conducta
                  </a>
                </div>
                <div className="flex gap-4">
                  {auth.user ? (
                    <Link
                      href={route('dashboard')}
                      className="border border-gray-500 text-gray-500 hover:text-orange-600 hover:border-orange-600 rounded-md px-6 py-2 ring-1 ring-transparent transition"
                    >
                      Dashboard
                    </Link>
                  ) : (
                    <>
                      <Link
                        href="/login"
                        className="border border-gray-500 text-gray-500 hover:text-orange-600 hover:border-orange-600 rounded-md px-6 py-2 ring-1 ring-transparent transition"
                      >
                        Log in
                      </Link>
                      <Link
                        href={route('register')}
                        className="border border-gray-500 text-gray-500 hover:text-orange-600 hover:border-orange-600 rounded-md px-6 py-2 ring-1 ring-transparent transition"
                      >
                        Register
                      </Link>
                    </>
                  )}
                </div>
              </div>
            </main>
          </div>
        </div>
      </div>
    </>
  );
}
