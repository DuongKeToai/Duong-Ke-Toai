const activePage = window.location.pathname;

const navLinks = document.querySelectorAll('.current').
forEach(link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    };
});

