# Adipa Chile - Laravel

Esto es una landing page para la academia digital de psicología y aprendizaje Adipa Chile, creada como prueba técnica para el cargo de Frontend Design.


## Requisitos previos

Asegúrate de tener instalado:

- [PHP 8.4+](https://www.php.net/)
- [Composer 2.8+](https://getcomposer.org/)
- [Node.js 22+](https://nodejs.org/)


## Instalación

```bash
# 1. Clonar el repositorio
git clone https://github.com/dcavadiam/adipa-laravel.git
cd adipa-laravel

# 2. Instalar dependencias PHP
composer install

# 3. Instalar dependencias Node
npm install

# 4. Copiar el archivo de entorno
cp .env.example .env

# 5. Generar la clave de la aplicación
php artisan key:generate
```

## Desarrollo

Necesitas dos terminales corriendo en paralelo:

**Terminal 1 — Servidor Laravel:**
```bash
php artisan serve
```
Disponible en `http://localhost:8000`

**Terminal 2 — Compilar assets con watch:**
```bash
npx mix watch
```

Detecta cambios en archivos `.styl` y `.js` y recompila automáticamente.


## Variables de entorno

Copia `.env.example` a `.env` y configura:

```env
APP_NAME=ADIPA
APP_ENV=local
APP_KEY=          # se genera con php artisan key:generate
APP_DEBUG=true
APP_URL=http://localhost
```

## Stack tecnológico

- **PHP**: 8.4.0
- **Composer**: 2.8.12
- **Node.js**: 22.13.1
- **Laravel**: ^9
- **Laravel Mix**: ^6
- **Stylus**: 0.54.8
- **jQuery**: ^3