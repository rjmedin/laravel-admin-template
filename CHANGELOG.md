# Changelog

## [0.2.0] - 2024-12-17

**_Added_**

- **Feature**: Se añadió una página de changelog.
- **Feature**: Integración de Sentry para el registro y monitoreo de errores.
- **Feature**: Configuración de **Playwright** para pruebas end-to-end.
- **Feature**: Configuración de **Vitest** para pruebas unitarias y de componentes en JavaScript.
- **Feature**: Configuración de **Pest** para pruebas unitarias en PHP.
- **Documentation**: Se añadieron imágenes y badges al archivo `README.md`.
- **Documentation**: Se añadió la sección de soporte al archivo `README.md`.

**_Changed_**

- **Refactor**: Se actualizó la fuente por defecto a **Albert Sans**.
- **Refactor**: Mejoras en comandos de testing y documentación general.

**_Configuration_**

- **Configuration**: Se actualizaron las variables de entorno `.env.example` para agregar las variables de Sentry.
- **Configuration**: Se configuró **Prettier** para formateo de código.
- **Configuration**: Se configuró **ESLint** para formateo de código en JavaScript.
- **Configuration**: Se configuró **Pint** para formateo de código en PHP.
- **Configuration**: Se añadió **Husky** con hooks pre-commit para formateo, linting de código y testing.
- **Configuration**: Configuración de **Commitlint** para validar mensajes de commit.
- **Configuration**: Migración de `npm` a `pnpm`.

**_Fixed_**

- **Fix**: Mejorado el formato de mensajes de error en la ruta de depuración.

## [0.1.0] - 2024-12-17

**_Added_**

- **Docker**: Agregado servicio de PostgreSQL y Redis.
- **Documentation**: Se añadió información sobre la instalación en el README.md.
- **Documentation**: Se añadieron secciones de título, contribuciones, licencia y código de conducta en el README.md.
- **Feature**: Instalación de Breeze para la autenticación.

**_Changed_**

- **Refactor**: Se eliminó la plantilla de bienvenida de Laravel.
- **Configuration**: Se añadió archivo `.editorconfig` para la configuración del editor.
- **Configuration**: Se actualizó `.gitignore` para excluir el directorio de PostgreSQL.
