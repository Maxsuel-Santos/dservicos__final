/*==================== SCROLL REVEAL ====================*/ 
ScrollReveal({
    //reset: true,
    distance: '60px',
    duration: 2500,
    delay: 400
});

/* index (será reciclado na página eletricista) */
ScrollReveal().reveal('#logo', { delay: 500, origin: 'left' });
ScrollReveal().reveal('#menu', { delay: 500, origin: 'right' });
ScrollReveal().reveal('.d__servicos__info', { delay: 500, origin: 'left' });
ScrollReveal().reveal('.d__servicos_img', { delay: 500, origin: 'right' });
ScrollReveal().reveal('#categorias', { delay: 500, origin: 'bottom', interval: 200 });
ScrollReveal().reveal('#input__pesquisar', { delay: 500, origin: 'top', interval: 200 });
ScrollReveal().reveal('#servicos', { delay: 500, origin: 'left', interval: 200 });
ScrollReveal().reveal('.scrollReveal', { delay: 500, origin: 'right', interval: 200 });
ScrollReveal().reveal('.footer', { delay: 500, origin: 'bottom', interval: 200 });
ScrollReveal().reveal('.footer__rights', { delay: 500, origin: 'top', interval: 200 });

/* eletricista */
ScrollReveal().reveal('#tipos_servicos_container', { delay: 500, origin: 'right', interval: 200 });
ScrollReveal().reveal('#avaliacao', { delay: 500, origin: 'left', interval: 200 });
