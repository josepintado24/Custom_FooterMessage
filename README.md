# Custom_FooterMessage - Módulo Personalizado de Magento 2.4

Este proyecto consiste en la creación de un módulo personalizado en Magento 2.4 llamado `Custom_FooterMessage`, que permite a los administradores del sitio agregar un mensaje personalizado que se mostrará en el pie de página de todas las páginas.

## Requerimientos específicos

### 1. Creación del módulo personalizado

- El módulo se llama **`Custom_FooterMessage`**.
- El módulo sigue la estructura estándar de un módulo en **Magento 2.4**:
  - Archivos de configuración.
  - Archivo `registration.php`.
  - Clases necesarias para la funcionalidad.

### 2. Funcionalidad del módulo

El módulo proporciona una funcionalidad que permite al administrador del sitio agregar un **mensaje personalizado** que se mostrará en el pie de página de todas las páginas.

- **Ubicación en el panel de administración**:
  - El mensaje puede ser editado desde el panel de administración en la sección **Stores > Configuration**.
  - El mensaje editable se encuentra bajo una nueva opción en el área de configuración del módulo.

### 3. Mostrar el mensaje en el frontend

- El mensaje se mostrará en el pie de página de todas las páginas del sitio.
- El mensaje se posicionará **debajo de cualquier otra información** que ya exista en el footer.

### 4. Persistencia

- El mensaje se almacena en la **base de datos de Magento** para su persistencia.
- El mensaje se carga dinámicamente en el frontend.
- **Validación básica**:
  - Se realiza una validación para asegurarse de que el mensaje no esté vacío antes de ser guardado.

## Estructura del módulo

La estructura del módulo **Custom_FooterMessage** sigue el estándar de Magento 2.4. A continuación se detallan los archivos y directorios más relevantes:

