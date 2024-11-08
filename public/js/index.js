const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('scrollShow');
        }
    });
});


const hiddenElements = document.querySelectorAll('.scrollHidden');
hiddenElements.forEach((el) => observer.observe(el));
