<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <script
  type="text/javascript"
  src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    @vite('resources/css/app.css')
    <title>Fazril Rizki - Portfolio Website</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-home></x-home>
    <x-about></x-about>
    <x-portfolio></x-portfolio>
    <x-skills></x-skills>
    <x-contact></x-contact>
    <x-footer></x-footer>
</body>
<script>
  function scrollToSection(sectionId) {
        const section = document.getElementById(sectionId);

        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }

    var typed = new Typed(".auto-type", {
        strings : ["Fazril Rizki !"],
        typeSpeed : 150,
        backSpeed : 150,
        loop : true,
    })

    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');
    
    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    });

    //Navbar fixed
    window.onscroll = function() {
        const header = document.querySelector('header');
        const fixedNav = header.offsetTop;

        if (window.pageYOffset > fixedNav) {
            header.classList.add('navbar-fixed');
        } else {
            header.classList.remove('navbar-fixed');
        }
    }
</script>
</html>