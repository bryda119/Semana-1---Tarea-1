# Semana 1 — Tarea 1

**Introducción a HTML** · Web personal (HTML/CSS) + Calculadora (PHP)

---

## 1. Información de la tarea

| Campo | Detalle |
|:------|:--------|
| **Asignatura** | Introducción a HTML |
| **Semana** | Semana 1 |
| **Tarea** | Tarea 1 |
| **Tipo** | Página web personal + calculadora |
| **Tecnologías** | HTML5 · CSS3 · PHP |
| **Entorno** | XAMPP (Apache + PHP) |
| **Estado** | Completada |

---

## 2. Descripción del proyecto

Este proyecto consiste en desarrollar una **página web personal** que muestre la información del autor utilizando **HTML y CSS**, e integrar una **calculadora en PHP** separada en estructura y orden.

La solución demuestra:

| Aspecto | Cómo se aplica |
|:--------|:---------------|
| Sintaxis HTML | Etiquetas semánticas, secciones, formularios y navegación |
| Estilos CSS | Hoja externa, variables CSS, layout responsive y componentes |
| Variables PHP | `$a`, `$b`, `$op`, `$display`, `$error` |
| Operaciones | Suma, resta, multiplicación y división |
| Organización | Carpetas `css/`, `php/`, `includes/` separadas por responsabilidad |

---

## 3. Datos del autor

| Campo | Información |
|:------|:------------|
| **Nombre completo** | Brayan Marcelo Cangas Vásquez |
| **Rol profesional** | Backend Software Developer & Technical Lead |
| **Especialidad** | Automatización e IA aplicada |
| **Ciudad / País** | Quito, Ecuador |
| **Correo electrónico** | brayan.cangas.vasquez@gmail.com |
| **Teléfono** | 0994419412 |
| **Idiomas** | Español (nativo) · Inglés A2 |

---

## 4. Objetivos de aprendizaje

| # | Objetivo | Cumplido |
|:-:|:---------|:--------:|
| 1 | Aplicar sintaxis básica de HTML en una página real | Sí |
| 2 | Separar la presentación en un archivo CSS externo | Sí |
| 3 | Usar variables PHP para operaciones aritméticas | Sí |
| 4 | Validar entradas (números y división entre cero) | Sí |
| 5 | Mantener estructura ordenada (HTML / CSS / PHP) | Sí |
| 6 | Mostrar información personal completa del CV | Sí |

---

## 5. Estructura del proyecto

```text
DEBERES/
│
├── index.php                  → Página principal (web personal / CV)
│
├── css/
│   └── style.css              → Estilos globales del sitio
│
├── php/
│   └── calculadora.php        → Calculadora (interfaz + lógica PHP)
│
├── includes/
│   ├── header.php             → Encabezado, menú y apertura HTML
│   └── footer.php             → Pie de página y scripts
│
├── .gitignore                 → Archivos ignorados por Git
└── README.md                  → Documentación del proyecto
```

### Detalle de cada archivo

| Archivo | Tipo | Descripción detallada |
|:--------|:-----|:----------------------|
| `index.php` | Página | Web personal: hero, perfil, logros, experiencia, proyectos, skills y formación |
| `css/style.css` | Estilos | Tipografía, colores, layout, responsive, estilos de la calculadora |
| `php/calculadora.php` | Lógica | Interfaz tipo calculadora + cálculo en servidor con PHP (`POST`) |
| `includes/header.php` | Include | Meta tags, CSS, logo «Semana 1 - Tarea 1» y navegación |
| `includes/footer.php` | Include | Datos de contacto del pie y menú móvil |
| `README.md` | Docs | Documentación técnica y académica del proyecto |
| `.gitignore` | Config | Excluye temporales, IDE y archivos sensibles |

### Separación de responsabilidades

| Capa | Carpeta / archivo | Responsabilidad |
|:-----|:------------------|:----------------|
| **Contenido** | `index.php` | Información personal y secciones del CV |
| **Presentación** | `css/` | Todo el diseño visual |
| **Lógica** | `php/` | Operaciones de la calculadora |
| **Reutilización** | `includes/` | Header y footer compartidos |

---

## 6. Secciones de la web personal

| Sección | ID / Enlace | Contenido |
|:--------|:------------|:----------|
| Inicio (Hero) | `#` / portada | Nombre, rol, resumen y estadísticas |
| Contacto | Panel lateral | Ciudad, teléfono, correo e idiomas |
| Perfil | `#sobre-mi` | Perfil profesional y competencias clave |
| Logros | `#logros` | 4 logros medibles (crédito, MDM, tiendas, SIGA) |
| Experiencia | `#experiencia` | 5 puestos laborales detallados |
| Proyectos | `#proyectos` | Motor crediticio, app de pedidos, fisioterapia |
| Skills | `#habilidades` | Backend, IA, APIs, arquitectura, DevOps, testing |
| Formación | `#formacion` | Estudios, certificaciones e idiomas |
| Calculadora | `php/calculadora.php` | Herramienta de operaciones básicas |

### Experiencia laboral incluida

| Empresa | Cargo | Periodo |
|:--------|:------|:--------|
| PAY&PLAY S.A.S. | Líder Técnico / Backend | Ene. 2024 — Actualidad |
| IST CIC Yasuní | Asistente de Docencia y Soporte TIC | Abr. 2026 — Actualidad |
| MYM Asesores de Compras | Responsable Tecnológico | Nov. 2022 — Ago. 2023 |
| Raimy Beer Taita | Técnico de Sistemas e Infraestructura | Abr. 2021 — Sep. 2022 |
| Academia Militar Miguel Iturralde | Pasante de Desarrollo de Software | Oct. 2020 — Mar. 2021 |

---

## 7. Calculadora PHP

### ¿Qué hace?

Es una **calculadora normal** (estilo teclado numérico). El usuario ingresa números y operaciones; al pulsar **=**, el resultado se calcula en el **servidor con PHP**.

### Operaciones disponibles

| Botón | Función | Tipo | Procesado en |
|:-----:|:--------|:-----|:-------------|
| `0–9` | Ingresar dígitos | Entrada | Interfaz |
| `.` | Decimales | Entrada | Interfaz |
| `+` | Suma | Operación | PHP |
| `−` | Resta | Operación | PHP |
| `×` | Multiplicación | Operación | PHP |
| `÷` | División | Operación | PHP |
| `±` | Cambiar signo (+/−) | Utilidad | Interfaz |
| `%` | Porcentaje (÷ 100) | Utilidad | Interfaz |
| `AC` | Limpiar / reiniciar | Utilidad | Interfaz |
| `=` | Obtener resultado | Cálculo | **PHP** |

### Variables PHP utilizadas

| Variable | Descripción |
|:---------|:------------|
| `$a` | Primer número (operando A) |
| `$b` | Segundo número (operando B) |
| `$op` | Operador (`+`, `-`, `*`, `/`) |
| `$display` | Texto mostrado en pantalla |
| `$error` | Mensaje de error (si aplica) |
| `$x` / `$y` | Valores convertidos a `float` para calcular |

### Validaciones

| Caso | Comportamiento |
|:-----|:---------------|
| Valores no numéricos | Muestra `Error` |
| Operador vacío o inválido | Muestra `Error` |
| División entre cero (`÷ 0`) | Mensaje: *No se puede dividir entre cero* |
| Resultado válido | Se formatea y se muestra en pantalla |

### Flujo de uso (paso a paso)

| Paso | Acción del usuario | Qué ocurre |
|:----:|:-------------------|:-----------|
| 1 | Escribe el primer número | Se muestra en pantalla |
| 2 | Elige `+` `−` `×` o `÷` | Se guarda la operación pendiente |
| 3 | Escribe el segundo número | Se muestra en pantalla |
| 4 | Pulsa `=` | Se envía `POST` a PHP y se calcula el resultado |

---

## 8. Requisitos del sistema

| Requisito | Detalle | Obligatorio |
|:----------|:--------|:-----------:|
| XAMPP | Apache + PHP | Sí |
| PHP | 7.4 o superior (recomendado) | Sí |
| Navegador | Chrome, Firefox, Edge, Brave, etc. | Sí |
| Sistema operativo | Windows / macOS / Linux | Sí |
| Git (opcional) | Control de versiones | No |

---

## 9. Instalación y ejecución

### Pasos

| Paso | Acción | Detalle |
|:----:|:-------|:--------|
| 1 | Instalar XAMPP | Descargar desde [apachefriends.org](https://www.apachefriends.org/) |
| 2 | Copiar proyecto | Ubicar la carpeta en `C:\xampp\htdocs\DEBERES` |
| 3 | Iniciar Apache | Abrir XAMPP Control Panel → Start en Apache |
| 4 | Abrir navegador | Ingresar a las URLs de la tabla siguiente |

### URLs locales

| Recurso | URL |
|:--------|:----|
| Página de inicio (CV web) | http://localhost/DEBERES/ |
| Página de inicio (alterna) | http://localhost/DEBERES/index.php |
| Calculadora | http://localhost/DEBERES/php/calculadora.php |

### Verificación rápida

| Prueba | Resultado esperado |
|:-------|:-------------------|
| Abrir `index.php` | Se ve el perfil completo con navegación |
| Clic en «Calculadora» | Abre la calculadora |
| Calcular `12 + 8` | Resultado `20` |
| Calcular `10 ÷ 0` | Mensaje de error por división entre cero |

---

## 10. Tecnologías y conceptos aplicados

| Tecnología | Conceptos usados en este proyecto |
|:-----------|:----------------------------------|
| **HTML5** | `section`, `nav`, `header`, `footer`, `article`, formularios, accesibilidad básica |
| **CSS3** | Variables (`:root`), Grid, Flexbox, responsive, tipografía web, componentes |
| **PHP** | Variables, `$_POST`, `switch`, validación, `include`, tipado `float` |
| **JavaScript** | Interfaz de botones de la calculadora (entrada de números) |

### Mapa HTML / CSS / PHP

| Capa | Archivo(s) | Ejemplo |
|:-----|:-----------|:--------|
| Estructura | `index.php`, `includes/*.php` | Secciones del CV y menú |
| Diseño | `css/style.css` | Colores, grid, botones, calculadora |
| Backend simple | `php/calculadora.php` | `$resultado = $x + $y` |

---

## 11. Criterios de la tarea (checklist)

| Requisito de la consigna | Evidencia en el proyecto | Estado |
|:-------------------------|:-------------------------|:------:|
| Web personal con información del autor | `index.php` con CV completo | Hecho |
| Uso de HTML | Estructura semántica de páginas | Hecho |
| Uso de CSS | `css/style.css` externo | Hecho |
| Calculadora en PHP | `php/calculadora.php` | Hecho |
| Separada en estructura y orden | Carpetas `css/`, `php/`, `includes/` | Hecho |
| Manejo de variables | `$a`, `$b`, `$op`, etc. | Hecho |
| Operaciones básicas | `+ − × ÷` | Hecho |

---

## 12. Solución de problemas

| Problema | Causa probable | Solución |
|:---------|:---------------|:---------|
| Página en blanco / no carga | Apache apagado | Iniciar Apache en XAMPP |
| Error 404 | Ruta incorrecta | Verificar que esté en `htdocs\DEBERES` |
| Estilos no se ven | Caché del navegador | Recargar con `Ctrl + F5` |
| Calculadora no calcula | PHP no disponible | Confirmar que el módulo PHP de XAMPP está activo |
| División da error | Divisor = 0 | Ingresar un divisor distinto de cero |

---

## 13. Licencia y uso académico

| Campo | Detalle |
|:------|:--------|
| **Uso** | Exclusivamente académico |
| **Asignatura** | Introducción a HTML |
| **Identificador** | Semana 1 — Tarea 1 |
| **Autor** | Brayan Marcelo Cangas Vásquez |
| **Año** | 2026 |

> Este repositorio documenta la entrega de la **Semana 1 - Tarea 1**. No está destinado a producción comercial.
