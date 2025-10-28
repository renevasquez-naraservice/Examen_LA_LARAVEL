# 📚 Documentación de la API: Gestión de Empleados (Laravel Backend)

¡Hola! Bienvenido a la documentación del **Backend de Empleados**.  
Este proyecto fue desarrollado usando **Laravel** para crear una **API RESTful** robusta y sencilla.

---

## 👥 Datos del Desarrollador

| Clave | Valor |
|-------|--------|
| **Nombre del Desarrollador** | *Rene Alejandro Vasquez VAre* |
| **Tecnología Principal** | Laravel |

---

## ⚙️ 1. Configuración del Proyecto

### 🗃️ 1.1 Estructura de la Base de Datos (`empleados`)

La API gestiona la tabla `empleados`.  
Los campos marcados como **Sí** en *Requerido* son obligatorios para crear o actualizar un registro.

| Columna | Tipo de Dato | Requerido | Descripción |
|----------|---------------|-----------|--------------|
| **id** | BIGINT | Sí | Llave Primaria (PK) y Auto Incremental |
| **nombre** | VARCHAR | Sí | Nombre del empleado |
| **apellido** | VARCHAR | Sí | Apellido del empleado |
| **correo** | VARCHAR | Sí | Correo electrónico (debe ser único) |
| **salario** | DECIMAL(10, 2) | Sí | Salario del empleado |
| **created_at** | TIMESTAMP | No | Fecha de creación automática |
| **updated_at** | TIMESTAMP | No | Fecha de última modificación automática |

---

### 🚀 1.2 Configuración de Rutas (API)

Se utilizó la convención `apiResource` de Laravel en `routes/api.php`,  
lo que genera automáticamente los 5 endpoints estándar para un CRUD completo:

```php
Route::apiResource('empleados', EmpleadoController::class);



Controlador Principal: App\Http\Controllers\EmpleadoController Modelo Principal: App\Models\Empleado (Solo se permiten asignaciones masivas para: nombre, apellido, correo, salario)

2. Endpoints Implementados (CRUD)

Aunque apiResource crea 5 rutas, actualmente solo tenemos la lógica de Lectura y Creación funcionando en el EmpleadoController.

El prefijo base para todas estas rutas es http://localhost:8000/api.

Método HTTP

Endpoint (Ruta)

Lógica Implementada

Descripción

GET

/api/empleados

✅ index()

Ver empleados. Obtiene la lista completa de todos los registros.

POST

/api/empleados

✅ store()

Crear 1 empleado. Registra un nuevo empleado en la base de datos.

GET

/api/empleados/{id}

❌ show()

Obtener un empleado específico por su ID. (Falta implementar la lógica)

PUT/PATCH

/api/empleados/{id}

❌ update()

Actualizar un empleado existente. (Falta implementar la lógica)

DELETE

/api/empleados/{id}

❌ destroy()

Eliminar un empleado específico. (Falta implementar la lógica)

3. Uso de la API (Ejemplos de Postman)

3.1 📄 GET: Obtener Todos los Empleados

Propósito: Recuperar todos los registros de la tabla empleados.
URL: /api/empleados
Respuesta Esperada: HTTP 200 OK con un array de objetos.

3.2 📥 POST: Crear un Nuevo Empleado

Propósito: Enviar datos para crear un nuevo registro.
URL: /api/empleados
Cuerpo (Body): raw / JSON

{
    "nombre": "Sofia",
    "apellido": "Ramírez",
    "correo": "sofia.ramirez@ejemplo.com",
    "salario": 3550.00
}


Respuesta Esperada: HTTP 201 Created y el objeto del empleado registrado.

👉 Próximos Pasos

El Controlador todavía tiene los métodos show, update y destroy vacíos. ¡El siguiente paso es implementarlos!