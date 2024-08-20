# 🎶 Web Nico V Rey
📝 Este proyecto es una aplicación web 100% desarrollada con Laravel, Tailwind CSS y MySQL. Permite mostrar proyectos y trabajos y cuenta con un sistema de ABM (Alta, Baja, Modificación) para gestionar el contenido de manera sencilla y eficiente.

## ⚙️ Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/tu-usuario/nicovrey.git
   ```
2. Navega al directorio del proyecto:
   ```bash
   cd nicovrey
   ```
3. Instala las dependencias de PHP:
   ```bash
   composer install
   ```
4. Instala las dependencias de Node.js:
   ```bash
   npm install
   ```
5. Crea un archivo `.env` a partir del ejemplo:
   ```bash
   cp .env.example .env
   ```
6. Genera la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```
7. Configura la base de datos en el archivo `.env`:
   ```env
   DB_DATABASE=nombre_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```
8. Ejecuta las migraciones para crear las tablas de la base de datos:
   ```bash
   php artisan migrate
   ```
9. Compilación:
   ```bash
   npm run dev
   ```
10. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```
¡Ahora puedes acceder a la aplicación en `http://localhost:8000`!

## 🚀 Uso

📄 Accede a `http://localhost:8000/admin` para ver y gestionar proyectos y trabajos. Desde la interfaz, puedes agregar nuevos proyectos, editar los existentes, o eliminarlos según sea necesario.

## 🛠️ Tecnologías

- 🔴 Laravel
- 🎨 Tailwind CSS
- 🗄️ MySQL

## 📬 Contacto

**[Natalia Merlo - LinkedIn](https://www.linkedin.com/in/nataliaemerlo/)**  
