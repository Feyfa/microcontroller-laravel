const copyContainerEls = document.querySelectorAll('.copy-container');

copyContainerEls.forEach((copyContainerEl) => {
    copyContainerEl.querySelector('i').addEventListener('click', (e) => {

        copyContainerEl.querySelector('textarea').select();
        document.execCommand('copy');
        copyContainerEl.querySelector('textarea').blur();
        
        copyContainerEl.querySelector('i').classList.remove('fa-clipboard');
        copyContainerEl.querySelector('i').classList.add('fa-clipboard-check');

        setTimeout(() => {
            copyContainerEl.querySelector('i').classList.remove('fa-clipboard-check');
            copyContainerEl.querySelector('i').classList.add('fa-clipboard');
        }, 1500);
    });
})