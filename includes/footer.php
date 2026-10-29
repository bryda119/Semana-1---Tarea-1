</main>
    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <p class="footer-brand">Brayan Marcelo Cangas Vásquez</p>
                <p>Semana 1 - Tarea 1</p>
            </div>
            <div>
                <p>Quito, Ecuador</p>
                <p><a href="mailto:brayan.cangas.vasquez@gmail.com">brayan.cangas.vasquez@gmail.com</a></p>
                <p><a href="tel:+593994419412">0994419412</a></p>
            </div>
        </div>
    </footer>
    <script>
        (function () {
            var toggle = document.querySelector('[data-nav-toggle]');
            var nav = document.querySelector('[data-nav]');
            if (!toggle || !nav) return;
            toggle.addEventListener('click', function () {
                var open = nav.classList.toggle('is-open');
                toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            });
        })();
    </script>
</body>
</html>
