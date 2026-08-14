<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Tập đoàn TTC - Hành trình phát triển xanh')</title>
    <meta name="description" content="@yield('description', 'Website chính thức của Tập đoàn TTC, hoạt động trong các lĩnh vực Nông nghiệp, Năng lượng, Bất động sản, BĐS Công nghiệp, Du lịch và Giáo dục.')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
       
        .text-ttc-green { color: #008A45; }
        .bg-ttc-green { background-color: #008A45; }
        .border-ttc-green { border-color: #008A45; }
        .text-ttc-gold { color: #EAA522; }
        .bg-ttc-gold { background-color: #EAA522; }
        
        .header-shadow {
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.05);
        }

      
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased min-h-screen flex flex-col justify-between overflow-x-hidden">

    <!-- Header & Navbar -->
    @include('components.header')
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-grow lg:pt-[120px] pt-[80px]">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-6 right-6 bg-[#003b70] hover:bg-[#002b54] text-white p-3 rounded-full shadow-lg transition-all duration-300 transform translate-y-20 opacity-0 cursor-pointer z-50 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        // Back to top button visibility
        const backToTopBtn = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('translate-y-20', 'opacity-0');
                backToTopBtn.classList.add('translate-y-0', 'opacity-100');
            } else {
                backToTopBtn.classList.remove('translate-y-0', 'opacity-100');
                backToTopBtn.classList.add('translate-y-20', 'opacity-0');
            }
        });
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Language toggle mock state
        function toggleLanguage(lang) {
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.classList.remove('font-bold', 'text-[#ff6500]');
                btn.classList.add('text-slate-400');
            });
            document.querySelectorAll(`.lang-btn-${lang}`).forEach(btn => {
                btn.classList.remove('text-slate-400');
                btn.classList.add('font-bold', 'text-[#ff6500]');
            });
            
            document.querySelectorAll('[data-lang-vi]').forEach(el => {
                if (lang === 'vi') {
                    if (el.tagName === 'INPUT' && el.placeholder) {
                        el.placeholder = el.getAttribute('data-lang-vi');
                    } else {
                        el.textContent = el.getAttribute('data-lang-vi');
                    }
                } else {
                    if (el.tagName === 'INPUT' && el.placeholder) {
                        el.placeholder = el.getAttribute('data-lang-en');
                    } else {
                        el.textContent = el.getAttribute('data-lang-en');
                    }
                }
            });
            localStorage.setItem('ttc_lang', lang);
        }

        window.addEventListener('DOMContentLoaded', () => {
            const savedLang = localStorage.getItem('ttc_lang') || 'vi';
            toggleLanguage(savedLang);
        });
    </script>
</body>
</html>
