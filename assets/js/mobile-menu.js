(() => {
    let menu = document.querySelector('.mobile-menu');
    let trigger = document.querySelector('.mobile-menu--trigger');
    trigger.addEventListener("click", () => {
            if (menu.classList.contains('mobile-menu--open')) {
                menu.classList = 'mobile-menu';

            } else {
                menu.classList = 'mobile-menu--open';
            }
        });

})();
  