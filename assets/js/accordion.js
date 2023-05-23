(() => {
    let accordion = document.querySelector('.image-with-accordion--accordion');
    let accordionTabs = accordion.querySelectorAll('.accordion');
    accordionTabs.forEach((e) => {
        e.addEventListener("click", () => {
            if (e.classList.contains('accordion--active')) {
                e.classList.remove('accordion--active');
                e.querySelector('.accordion--icon').classList = "fa fa-plus accordion--icon";
            } else {
                e.classList.add('accordion--active');
                e.querySelector('.accordion--icon').classList = "fa fa-close accordion--icon";
            }
        });
    });
})();
  