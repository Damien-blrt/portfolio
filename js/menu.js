// Menu moderne vertical à droite
document.addEventListener('DOMContentLoaded', function() {
    // Créer le bouton menu hamburger
    const menuButton = document.createElement('button');
    menuButton.className = 'menu-toggle';
    menuButton.innerHTML = '<span></span><span></span><span></span>';
    menuButton.setAttribute('aria-label', 'Toggle menu');
    
    // Créer le menu vertical
    const sidebarMenu = document.createElement('nav');
    sidebarMenu.className = 'sidebar-menu';
    sidebarMenu.innerHTML = `
        <div class="menu-header">
            <h3>Menu</h3>
            <button class="menu-close" aria-label="Close menu">×</button>
        </div>
        <ul class="menu-list">
            <li><a href="./index.html" class="menu-link">À propos de moi</a></li>
            <li><a href="./competences.html" class="menu-link">Compétences</a></li>
            <li class="menu-item-dropdown">
                <a href="#" class="menu-link menu-link-dropdown">
                    Projets
                    <span class="dropdown-arrow">▼</span>
                </a>
                <ul class="menu-sublist">
                    <li><a href="./projet1.html" class="menu-sublink">Jardinageons</a></li>
                    <li><a href="./projet2.html" class="menu-sublink">ArtistBot</a></li>
                    <li><a href="./projet3.html" class="menu-sublink">Pokerandom</a></li>
                </ul>
            </li>
            <li><a href="./parcours.html" class="menu-link">Cursus scolaire</a></li>
            <li><a href="./images/cv_damien_ballerat.pdf" download="CV_Damien_Ballerat.pdf" class="menu-link">Télécharger mon CV</a></li>
        </ul>
    `;
    
    // Ajouter au body
    document.body.appendChild(menuButton);
    document.body.appendChild(sidebarMenu);
    
    // Variables d'état
    let isMenuOpen = false;
    const menuToggle = document.querySelector('.menu-toggle');
    const menuClose = document.querySelector('.menu-close');
    const sidebar = document.querySelector('.sidebar-menu');
    const dropdownToggle = document.querySelector('.menu-link-dropdown');
    const submenu = document.querySelector('.menu-sublist');
    const dropdownItem = document.querySelector('.menu-item-dropdown');
    
    // Fonction pour ouvrir/fermer le menu
    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        sidebar.classList.toggle('menu-open', isMenuOpen);
        menuButton.classList.toggle('menu-active', isMenuOpen);
        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
    }
    
    // Ouvrir le menu
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });
    
    // Fermer le menu
    menuClose.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });
    
    // Fermer le menu en cliquant à l'extérieur
    document.addEventListener('click', function(e) {
        if (isMenuOpen && !sidebar.contains(e.target) && !menuButton.contains(e.target)) {
            toggleMenu();
        }
    });
    
    // Gérer le dropdown des projets
    if (dropdownToggle) {
        // Ouvrir au clic
        dropdownToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            dropdownItem.classList.toggle('submenu-open');
            const arrow = this.querySelector('.dropdown-arrow');
            if (arrow) {
                arrow.style.transform = dropdownItem.classList.contains('submenu-open') 
                    ? 'rotate(180deg)' 
                    : 'rotate(0deg)';
            }
        });
        
        // Garder ouvert au survol
        dropdownItem.addEventListener('mouseenter', function() {
            this.classList.add('submenu-open');
            const arrow = dropdownToggle.querySelector('.dropdown-arrow');
            if (arrow) {
                arrow.style.transform = 'rotate(180deg)';
            }
        });
        
        dropdownItem.addEventListener('mouseleave', function() {
            // Ne pas fermer automatiquement au mouseleave pour éviter les fermetures accidentelles
        });
    }
    
    // Fermer le menu lors du clic sur un lien
    const menuLinks = document.querySelectorAll('.menu-link, .menu-sublink');
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (isMenuOpen) {
                setTimeout(() => toggleMenu(), 100);
            }
        });
    });
    
    // Empêcher la propagation sur le menu
    sidebar.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

