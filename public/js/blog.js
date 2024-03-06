const sidebarEl = document.querySelector('.sidebar');
const hamburgerEl = document.querySelector('section form span i.fa-bars');

hamburgerEl.addEventListener('click', () => {
    if(hamburgerEl.classList.contains('fa-bars')) {
        sidebarEl.classList.remove('hidden');

        hamburgerEl.classList.remove('fa-bars');
        hamburgerEl.classList.add('fa-xmark');
    } 
    else {
        sidebarEl.classList.add('hidden');

        hamburgerEl.classList.remove('fa-xmark');
        hamburgerEl.classList.add('fa-bars');
    }
});