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
    @if (session('info'))
        <div class="bg-green-500 text-white p-4 fixed bottom-0 right-0 m-4 rounded-md">
            <div>
                {{ session('info') }}
            </div>
            <button class="text-white hover:text-gray-200 float-right focus:outline-none" onclick="closeAlert()">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </button>
        </div>
    @endif
    <x-home></x-home>
    <x-about></x-about>
    <x-portfolio></x-portfolio>
    <x-skills></x-skills>
    <x-contact></x-contact>
    <x-footer></x-footer>
</body>
<script>
    function closeAlert() {
            document.querySelector('.alert').style.display = 'none';
        }

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