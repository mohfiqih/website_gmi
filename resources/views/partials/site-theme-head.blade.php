<link href="{{ versioned_asset('landing/css/site-refresh.css') }}" rel="stylesheet">
<script>
    (function () {
        const savedTheme = localStorage.getItem('gmi-theme');
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.setAttribute('data-theme', savedTheme || (prefersDark ? 'dark' : 'light'));

        document.addEventListener('DOMContentLoaded', function () {
            const nav = document.querySelector('.site-nav, #navmenu, #navbar');
            if (!nav || document.getElementById('themeToggle')) return;

            const toggle = document.createElement('button');
            toggle.type = 'button';
            toggle.className = 'theme-toggle gmi-theme-toggle ms-auto me-3 order-lg-3';
            toggle.id = 'themeToggle';
            if (nav.classList.contains('site-nav')) {
                nav.insertBefore(toggle, nav.querySelector('.navbar-toggler'));
            } else {
                nav.parentElement.insertBefore(toggle, nav);
            }

            function render(theme) {
                const dark = theme === 'dark';
                toggle.setAttribute('aria-pressed', dark ? 'true' : 'false');
                toggle.setAttribute('aria-label', dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap');
                toggle.innerHTML = dark
                    ? '<i class="bi bi-sun-fill" aria-hidden="true"></i><span>Mode Terang</span>'
                    : '<i class="bi bi-moon-stars-fill" aria-hidden="true"></i><span>Mode Gelap</span>';
            }

            render(document.documentElement.getAttribute('data-theme') || 'light');
            toggle.addEventListener('click', function () {
                const theme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', theme);
                localStorage.setItem('gmi-theme', theme);
                render(theme);
            });
        });
    })();
</script>
