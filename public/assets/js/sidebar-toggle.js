const sidebar = document.querySelector('.sidebar');
const togglerBtn = document.querySelector('.sidebar-toggler');

togglerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
});
