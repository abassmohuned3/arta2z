// تغيير لون الهيدر عند التمرير
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.style.background = '#000';
        header.style.padding = '0.5rem 5%';
    } else {
        header.style.background = '#1a1a1a';
        header.style.padding = '1rem 5%';
    }
});

// تأثير بسيط عند الضغط على الروابط (Smooth Scroll)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});