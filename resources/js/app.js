document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('overlay');
    const openButton = document.getElementById('openMenu');
    const closeButton = document.getElementById('closeMenu');

    // Only initialize mobile menu functionality if elements exist
    if (mobileMenu && overlay && openButton && closeButton) {
        const menuLinks = mobileMenu.querySelectorAll('nav a');

        function closeMenu() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.classList.remove('overflow-hidden');
        }

        function openMenu() {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.classList.add('overflow-hidden');
        }

        openButton.addEventListener('click', openMenu);
        closeButton.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);

        // Add click handlers to all menu links
        menuLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                closeMenu();
                // Add a small delay before navigation to allow the animation to complete
                setTimeout(() => {
                    window.location.href = link.href;
                }, 300);
            });
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
    }
});
