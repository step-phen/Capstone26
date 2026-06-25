// Generic modal open/close via data attributes
document.addEventListener('click', (e) => {
    const openTrigger = e.target.closest('[data-modal-open]');
    if (openTrigger) {
        const modal = document.getElementById(openTrigger.dataset.modalOpen);
        if (modal) { modal.classList.add('is-open'); document.body.style.overflow = 'hidden'; }
    }

    const closeTrigger = e.target.closest('[data-modal-close]');
    if (closeTrigger) {
        const modal = document.getElementById(closeTrigger.dataset.modalClose)
            ?? e.target.closest('.modal-backdrop');
        if (modal) { modal.classList.remove('is-open'); document.body.style.overflow = ''; }
    }

    if (e.target.classList.contains('modal-backdrop')) {
        e.target.classList.remove('is-open');
        document.body.style.overflow = '';
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal-backdrop.is-open').forEach(m => {
            m.classList.remove('is-open');
            document.body.style.overflow = '';
        });
    }
});