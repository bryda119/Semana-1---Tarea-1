<?php
/**
 * Página web personal — Brayan Marcelo Cangas Vásquez
 * Semana 1 - Tarea 1
 */
$pageTitle = 'Brayan Cangas | Semana 1 - Tarea 1';
$activePage = 'inicio';
$basePath = '';

$nombre = 'Brayan Marcelo Cangas Vásquez';
$rol = 'Backend Software Developer & Technical Lead';
$especialidad = 'Automatización de procesos e integración de sistemas';
$ciudad = 'Quito, Ecuador';
$telefono = '0994419412';
$email = 'brayan.cangas.vasquez@gmail.com';

$perfil = [
    'Soy desarrollador backend y líder técnico. Trabajo sobre todo en automatización, integración de sistemas e inteligencia artificial aplicada a procesos reales. Ahora coordino un equipo de 6 personas: planificamos, revisamos soluciones, atendemos incidencias y damos seguimiento a lo que está en producción.',
    'También me ha tocado armar paneles en Grafana, mandar alertas a Telegram y meter mano en flujos de crédito, análisis de riesgo, validación de identidad y sistemas académicos.',
    'Uno de los proyectos que más me gustó fue un motor de análisis crediticio: consume APIs, lee JSON, aplica reglas de riesgo y, cuando hace falta, usa modelos con scikit-learn y PyTorch (DeepCreditNN). En IA he usado OpenAI, Gemini, Claude y AWS Rekognition para KYC.',
];

include __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="container hero-shell">
        <div>
            <p class="hero-kicker">Quito, Ecuador</p>
            <h1><?php echo htmlspecialchars($nombre); ?></h1>
            <p class="hero-role"><?php echo htmlspecialchars($rol); ?></p>
            <p class="hero-lead"><?php echo htmlspecialchars($especialidad); ?>.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#experiencia">Ver experiencia</a>
                <a class="btn btn-secondary" href="php/calculadora.php">Ir a la calculadora</a>
                <a class="btn btn-ghost" href="mailto:<?php echo htmlspecialchars($email); ?>">Escribirme</a>
            </div>
            <div class="hero-stats" aria-label="Algunos números">
                <div class="stat"><strong>6</strong><span>personas en el equipo</span></div>
                <div class="stat"><strong>5K+</strong><span>dispositivos en MDM</span></div>
                <div class="stat"><strong>600+</strong><span>estudiantes en SIGA</span></div>
            </div>
        </div>

        <div class="hero-panel">
            <aside class="contact-panel">
                <h2>Contacto</h2>
                <ul class="contact-list">
                    <li>
                        <span>Ciudad</span>
                        <strong><?php echo htmlspecialchars($ciudad); ?></strong>
                    </li>
                    <li>
                        <span>Teléfono</span>
                        <a href="tel:+593994419412"><?php echo htmlspecialchars($telefono); ?></a>
                    </li>
                    <li>
                        <span>Correo</span>
                        <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
                    </li>
                    <li>
                        <span>Idiomas</span>
                        <strong>Español · Inglés A2</strong>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</section>

<section class="section section-band" id="sobre-mi">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Un poco de contexto</p>
            <h2>Sobre mí</h2>
            <p>Lo que hago día a día y en qué me he enfocado.</p>
        </div>
        <div class="prose">
            <?php foreach ($perfil as $parrafo): ?>
                <p><?php echo htmlspecialchars($parrafo); ?></p>
            <?php endforeach; ?>
        </div>

        <div class="comp-grid" style="margin-top:1.75rem;">
            <article class="comp-item">
                <h3>Backend e integración</h3>
                <p>APIs REST, JSON, reglas de negocio y conexión con servicios externos.</p>
            </article>
            <article class="comp-item">
                <h3>Automatización</h3>
                <p>Crédito, identidad, cartera, procesos académicos y trámites internos.</p>
            </article>
            <article class="comp-item">
                <h3>IA aplicada</h3>
                <p>OpenAI, Gemini, Claude, Rekognition, scikit-learn y PyTorch.</p>
            </article>
            <article class="comp-item">
                <h3>DevOps y equipo</h3>
                <p>Docker, Kubernetes, CI/CD, Grafana y coordinación del día a día.</p>
            </article>
        </div>
    </div>
</section>

<section class="section" id="logros">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Resultados</p>
            <h2>Logros</h2>
            <p>Cosas concretas que quedaron funcionando.</p>
        </div>
        <div class="achievements">
            <article class="achievement">
                <div class="achievement-num">01</div>
                <p>Bajé el análisis crediticio manual de 5–10 minutos a unos 30 segundos / 2 minutos con automatización.</p>
            </article>
            <article class="achievement">
                <div class="achievement-num">02</div>
                <p>Saqué a producción una plataforma MDM que hoy gestiona cerca de 5.000 dispositivos financiados.</p>
            </article>
            <article class="achievement">
                <div class="achievement-num">03</div>
                <p>Trabajé en una plataforma de crédito usada por unos 160 usuarios en más de 40 tiendas.</p>
            </article>
            <article class="achievement">
                <div class="achievement-num">04</div>
                <p>Digitalicé procesos académicos en un sistema usado por más de 600 estudiantes, docentes y administrativos.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-band" id="experiencia">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Trabajo</p>
            <h2>Experiencia</h2>
            <p>Desde soporte y pasantías hasta liderazgo técnico.</p>
        </div>
        <div class="timeline">
            <article class="job">
                <div class="job-top">
                    <h3>PAY&amp;PLAY S.A.S. — Quito</h3>
                    <time>Mar. 2025 — Actualidad</time>
                </div>
                <p class="job-role">Subencargado del Área de Desarrollo / Líder Técnico</p>
                <p class="job-note">Antes fui desarrollador backend (Ene. 2024 — Mar. 2025).</p>
                <ul>
                    <li>Coordino al equipo de 6: tareas, revisiones e incidencias en producción.</li>
                    <li>Sigo la plataforma de crédito (solicitud, evaluación, cartera, cobranza y dispositivos).</li>
                    <li>Armé el motor de análisis crediticio con APIs, reglas de riesgo, scikit-learn y DeepCreditNN.</li>
                    <li>KYC con AWS Rekognition; apoyo con OpenAI, Gemini y Claude cuando aporta.</li>
                    <li>MDM en producción (~5.000 dispositivos), Docker/Kubernetes y alertas en Grafana → Telegram.</li>
                </ul>
            </article>

            <article class="job">
                <div class="job-top">
                    <h3>Instituto Superior Tecnológico CIC Yasuní — Quito</h3>
                    <time>Abr. 2026 — Actualidad</time>
                </div>
                <p class="job-role">Asistente de Docencia y Soporte TIC (medio tiempo)</p>
                <ul>
                    <li>Mantengo y mejoro el sistema académico SIGA (PHP 7 + MySQL).</li>
                    <li>Ayudo con talento humano, postulaciones, pruebas y matrícula en línea.</li>
                    <li>Paso requerimientos del instituto a flujos dentro del sistema.</li>
                </ul>
            </article>

            <article class="job">
                <div class="job-top">
                    <h3>MYM Asesores de Compras — Quito</h3>
                    <time>Nov. 2022 — Ago. 2023</time>
                </div>
                <p class="job-role">Responsable Tecnológico / Líder de Proyectos</p>
                <ul>
                    <li>Hice de cero un sistema de bodega e inventario con PHP/Laravel.</li>
                    <li>Dejó de ser un control manual; lo usaban unas 20–30 personas internas.</li>
                    <li>Requisitos, desarrollo, soporte y mantenimiento.</li>
                </ul>
            </article>

            <article class="job">
                <div class="job-top">
                    <h3>Raimy Beer Taita — Quito</h3>
                    <time>Abr. 2021 — Sep. 2022</time>
                </div>
                <p class="job-role">Técnico de Sistemas e Infraestructura</p>
                <ul>
                    <li>Soporte de PCs, Wi-Fi, routers, cableado, control de acceso y cámaras (aprox. 10 equipos).</li>
                </ul>
            </article>

            <article class="job">
                <div class="job-top">
                    <h3>Academia Militar Miguel Iturralde — Quito</h3>
                    <time>Oct. 2020 — Mar. 2021</time>
                </div>
                <p class="job-role">Pasante de Desarrollo de Software</p>
                <ul>
                    <li>Apoyo en sistemas académicos y aula virtual con Java y PostgreSQL.</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section" id="proyectos">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Más trabajo</p>
            <h2>Proyectos</h2>
            <p>Tres proyectos que resumen bien lo que he construido.</p>
        </div>
        <div class="project-grid">
            <article class="project">
                <h3>Motor de análisis crediticio</h3>
                <p>APIs externas, reglas de riesgo y modelos con scikit-learn / PyTorch. El análisis pasó de minutos a segundos.</p>
                <ul class="tags">
                    <li>APIs</li><li>PyTorch</li><li>scikit-learn</li><li>JSON</li>
                </ul>
            </article>
            <article class="project">
                <h3>App de pedidos (titulación 2023)</h3>
                <p>App para un restaurante familiar: pedidos, pagos y entregas. Se usó en un entorno real.</p>
                <ul class="tags">
                    <li>Flutter</li><li>Node.js</li><li>PostgreSQL</li><li>Nginx</li>
                </ul>
            </article>
            <article class="project">
                <h3>Sistema de fisioterapia</h3>
                <p>Web para pacientes, citas y seguimiento. Me sirvió para practicar backend y modelado.</p>
                <ul class="tags">
                    <li>Web</li><li>Backend</li><li>Modelado ER</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section-band" id="habilidades">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Herramientas</p>
            <h2>Habilidades</h2>
            <p>Lo que uso con más frecuencia.</p>
        </div>
        <div class="skill-grid">
            <article class="skill-card">
                <h3>Backend</h3>
                <p>PHP, Laravel, JavaScript/TypeScript, Node.js, NestJS, Python, FastAPI, Java, Spring Boot.</p>
            </article>
            <article class="skill-card">
                <h3>IA y datos</h3>
                <p>OpenAI, Gemini, Claude, PyTorch, scikit-learn, AWS Rekognition.</p>
            </article>
            <article class="skill-card">
                <h3>APIs y bases</h3>
                <p>REST, OpenAPI, JSON, PostgreSQL, MySQL, índices, triggers y backups.</p>
            </article>
            <article class="skill-card">
                <h3>Arquitectura</h3>
                <p>MVC, Clean Architecture, hexagonal y módulos orientados a servicios.</p>
            </article>
            <article class="skill-card">
                <h3>DevOps</h3>
                <p>Docker, Kubernetes, GitHub Actions, Linux, Grafana, Nginx, Caddy, WireGuard.</p>
            </article>
            <article class="skill-card">
                <h3>Gestión</h3>
                <p>Git, GitHub, Scrum, Postman, Newman y levantamiento de requisitos.</p>
            </article>
        </div>
    </div>
</section>

<section class="section" id="formacion">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Estudios</p>
            <h2>Formación</h2>
            <p>Títulos y cursos que he tomado.</p>
        </div>
        <div class="edu-list">
            <div class="edu-row">
                <h3>Tecnología Superior en Desarrollo de Software</h3>
                <p>ISTU Vida Nueva</p>
                <time>Dic. 2023</time>
            </div>
            <div class="edu-row">
                <h3>Bachiller en Ciencias</h3>
                <p>UE Adolfo María Astudillo</p>
                <time>Mar. 2018</time>
            </div>
            <div class="edu-row">
                <h3>Educación Primaria</h3>
                <p>UE 13 de Abril</p>
                <time>2012</time>
            </div>
            <div class="edu-row">
                <h3>Scrum Foundation Professional Certificate (SFPC™)</h3>
                <p>Certificación</p>
                <time>—</time>
            </div>
            <div class="edu-row">
                <h3>Power BI + Introducción a la IA</h3>
                <p>Coach Group Ecuador</p>
                <time>2026</time>
            </div>
        </div>
        <div class="lang-bar">
            <div class="lang-pill">Español — nativo</div>
            <div class="lang-pill">Inglés — A2</div>
        </div>

        <div class="cta-band" style="margin-top:2.5rem;">
            <div>
                <h2>Calculadora</h2>
                <p>Parte de la tarea: suma, resta, multiplicación y división con PHP.</p>
            </div>
            <a class="btn btn-secondary" href="php/calculadora.php">Abrir calculadora</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
