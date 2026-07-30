
function initNavigation() {

    document.querySelectorAll('#header .wp-block-navigation-item.has-child').forEach(item => {

        // Nur einmal einen Button hinzufügen
        if (item.querySelector(':scope > .submenu-toggle')) {
            return;
        }

        const link = item.querySelector(':scope > .wp-block-navigation-item__content');
        const submenu = item.querySelector(':scope > .wp-block-navigation__submenu-container');

        if (!link || !submenu) {
            return;
        }

        const btn = document.createElement('button');
        btn.className = 'submenu-toggle';
        btn.type = 'button';
        btn.innerHTML = '&rsaquo;';
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Untermenü öffnen');

        link.after(btn);

        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            item.classList.toggle('is-open');

            const expanded = item.classList.contains('is-open');
            btn.setAttribute('aria-expanded', expanded);

            if (expanded) {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = '';
            }
        });

    });

}

document.addEventListener('DOMContentLoaded', initNavigation);