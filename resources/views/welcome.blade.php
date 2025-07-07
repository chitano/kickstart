<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kickstart Computer Learning Point - Training Center</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Offset for fixed navbar + 20px
            const NAV_OFFSET = document.querySelector('nav')?.offsetHeight ? document.querySelector('nav').offsetHeight + 20 : 84;
            document.querySelectorAll('a[href^="#"]').forEach(link => {
                link.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href && href.startsWith('#') && href.length > 1) {
                        const target = document.querySelector(href);
                        if (target) {
                            e.preventDefault();
                            const top = target.getBoundingClientRect().top + window.scrollY - NAV_OFFSET;
                            window.scrollTo({ top, behavior: 'smooth' });
                        }
                    }
                });
            });
        });
    </script>
</head>
<body class="font-sans bg-white text-[#1b1b18] min-h-screen">
    <!-- Navbar -->
    <nav class="w-full flex items-center justify-between px-8 py-4 shadow-sm bg-white fixed top-0 left-0 z-50">
        <div class="flex items-center gap-2">
            <span class="text-2xl font-extrabold text-emerald-600">Kickstart</span>
            <span class="text-xl font-bold text-blue-700"></span>
        </div>
        <div class="hidden md:flex gap-8 text-base font-medium">
            <a href="#main-course" class="hover:text-emerald-600 transition">Courses</a>
            <a href="#upcoming" class="hover:text-emerald-600 transition">Upcoming</a>
            <a href="#contact" class="hover:text-emerald-600 transition">Contact</a>
        </div>
        <a href="#contact" class="hidden md:inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2 rounded-full shadow transition">Login</a>
    </nav>
    <div class="pt-24 w-full min-h-screen flex flex-col justify-between bg-gradient-to-br from-blue-50 via-white to-emerald-50">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center py-20 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-blue-900 drop-shadow-lg leading-tight">Empower Your Future with <span class="text-emerald-600">Practical Skills</span></h1>
            <p class="max-w-2xl text-lg text-gray-700 mb-8">Join our hands-on courses and become a job-ready professional. Learn by building real projects, get career support, and earn industry-recognized certificates.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="#main-course" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-8 py-3 rounded-full shadow-lg transition">Explore Courses</a>
                <a href="#contact" class="bg-white border border-emerald-600 text-emerald-700 font-semibold px-8 py-3 rounded-full shadow hover:bg-emerald-50 transition">Contact Us</a>
            </div>
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80" alt="Learning" class="rounded-2xl shadow-xl w-full max-w-2xl mx-auto mt-8">
        </section>

        <!-- Main Course Section -->
        <section id="main-course" class="scroll-mt-28 flex flex-col md:flex-row items-center justify-center gap-10 py-16 px-4">
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-lg w-full border-t-4 border-emerald-500">
                <h2 class="text-2xl font-bold mb-2 text-emerald-700">Full Stack Web Development - PHP & Laravel</h2>
                <p class="mb-4 text-gray-700">Master the art of building modern, scalable web applications using PHP and Laravel. This course covers everything from the basics to advanced backend/frontend integration, REST APIs, authentication, deployment, and more.</p>
                <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                    <li>Duration: 4 Months</li>
                    <li>Mode: Offline</li>
                    <li>Includes: Real-world projects</li>
                </ul>
                <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-full shadow transition">Enroll Now</a>
            </div>
            <div class="hidden md:block">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=500&q=80" alt="Web Development" class="rounded-2xl shadow-xl w-[350px]">
            </div>
        </section>

        <!-- Upcoming Courses Section -->
        <section id="upcoming" class="scroll-mt-28 py-16 px-4 bg-gradient-to-r from-emerald-50 via-white to-blue-50">
            <h2 class="text-center text-2xl font-bold mb-10 text-blue-900">Upcoming Courses</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-xs border-b-4 border-blue-400">
                    <h3 class="text-lg font-bold mb-2 text-blue-700">MERN Stack</h3>
                    <p class="text-gray-700">Build full stack apps with MongoDB, Express, React, and Node.js. Master JavaScript-based development for the modern web.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-xs border-b-4 border-emerald-400">
                    <h3 class="text-lg font-bold mb-2 text-emerald-700">Graphics Design</h3>
                    <p class="text-gray-700">Unleash your creativity! Learn Photoshop, Illustrator, and design principles for digital and print media.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-xs border-b-4 border-yellow-400">
                    <h3 class="text-lg font-bold mb-2 text-yellow-700">Amazon Affiliate</h3>
                    <p class="text-gray-700">Start earning online! Build affiliate sites, learn SEO, and marketing strategies to succeed as an Amazon Affiliate.</p>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-16 px-4 text-center">
            <h2 class="text-2xl font-bold mb-6 text-emerald-700">Where We Are</h2>
            <div class="rounded-2xl overflow-hidden shadow-xl mb-4 max-w-2xl mx-auto">
                <iframe src="https://www.google.com/maps?q=Bhatgram,Sadullapur,Gaibandha,Bangladesh&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="text-gray-600">Visit us at our training center in Bhatgram, Sadullapur, Gaibandha, Bangladesh.</p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="scroll-mt-28 py-16 px-4 bg-gradient-to-r from-blue-50 via-white to-emerald-50">
            <h2 class="text-center text-2xl font-bold mb-8 text-blue-900">Contact Us</h2>
            <div class="flex flex-wrap justify-center gap-6 mb-8">
                <div class="flex items-center gap-2 bg-gray-100 rounded-full px-6 py-3 shadow"><span class="font-semibold">Email:</span> chitanokumar@gmail.com</div>
                <div class="flex items-center gap-2 bg-gray-100 rounded-full px-6 py-3 shadow"><span class="font-semibold">Phone:</span> +880 1710 048212</div>
                <div class="flex items-center gap-2 bg-gray-100 rounded-full px-6 py-3 shadow"><span class="font-semibold">Facebook:</span> <a href="https://facebook.com/kickstartclp" target="_blank" class="text-blue-600 underline">facebook.com/kickstartclp</a></div>
            </div>
            <form method="POST" action="#" class="max-w-lg mx-auto flex flex-col gap-4 bg-white rounded-2xl shadow-lg p-8">
                <input type="text" name="name" placeholder="Your Name" required class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-200">
                <input type="email" name="email" placeholder="Your Email" required class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-200">
                <textarea name="message" rows="4" placeholder="Your Message" required class="border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
                <button type="submit" class="bg-emerald-600 text-white rounded-full px-6 py-3 font-semibold hover:bg-emerald-700 transition">Send Message</button>
            </form>
        </section>

        <footer class="text-center py-8 text-gray-500 text-sm bg-white border-t mt-8 shadow-inner">
            &copy; {{ date('Y') }} Kickstart  Computer Learning Point. All rights reserved.
        </footer>
    </div>
</body>
</html>
