<x-layout title="About Me">
    <div class="swiper-container border-b-2 dark:border-white border-black">
        <div class="swiper-wrapper">
            <!-- Slide 1: About Me (Blue Shade) -->
            <div class="swiper-slide">
                <div class="flex flex-col items-center justify-center h-screen bg-gray-100 dark:bg-gray-700">
                    <h1 class="text-4xl font-bold text-gray-800 dark:text-white">{{ __('About Me')}}</h1>
                    <p class="mt-4 text-2xl text-gray-600 max-w-3xl text-center dark:text-gray-400">
                    {{ __('Welcome to my creative corner! I am passionate about bringing ideas to life through interactive websites that engage and inspire.Each project I take on is a unique adventure, driven by a commitment to originality and a fresh perspective.')}}<br><br>
                    {{ __('With a background in design and development, I thrive on the challenge of blending aesthetics with functionality, ensuring that every element not only looks good but also enhances the user experience. My goal is to create digital spaces that resonate with visitors, fostering connections and telling compelling stories.')}}<br><br>
                    {{ __('Thank you for taking the time to visit! I am excited to share my creative journey with you, exploring the endless possibilities of the digital world.Let us embark on this adventure together, where innovation meets imagination!')}}
                    </p>
                </div>
            </div>

            <!-- Slide 2: Skills (Purple Shade) -->
            <div class="swiper-slide">
                <div class="flex flex-col items-center justify-center h-screen bg-gray-200 dark:bg-gray-700">
                    <h1 class="text-5xl font-bold text-gray-800 dark:text-white">{{ __('Education')}}</h1>
                    <p class="mt-4 text-3xl text-gray-600 max-w-3xl text-center dark:text-gray-400">
                    {{ __('I am currently a student of Ramdeobaba University (formerly Ramdeobaba College of Engineering and Management), Nagpur, where I am pursuing a degree in Artificial Intelligence and Machine Learning (AIML).')}}<br>
                    {{ __('To know more about Ramdeobaba University')}}
                    <a href="https://www.rknec.edu/" class="text-blue-700 dark:text-blue-300"> {{ __('click here.')}}</a>
                    </p><br><br>
                    <h1 class="text-5xl font-bold text-gray-800 dark:text-white">{{ __('Skills')}}</h1>
                    <ul class="mt-4 text-3xl text-gray-600 max-w-3xl text-center dark:text-gray-400">
                        <li>{{ __('Proficient in: JavaScript, Python, Java')}}</li>
                        <li>{{ __('Web development skills: HTML, CSS, React')}}</li>
                        <li>{{ __('Collaborative mindset')}}</li>
                        <li>{{ __('Envisioning original ideas and concepts')}}</li>
                        <li>{{ __('Currently learning laravel framework')}}</li>
                    </ul>
                </div>
            </div>

            <!-- Slide 3: Experience (Pink Shade) -->
            <div class="swiper-slide">
                <div class="flex flex-col items-center justify-center h-screen bg-gray-300 dark:bg-gray-700">
                    <h1 class="text-5xl font-bold text-gray-800 dark:text-white">{{ __('Experiences')}}</h1>
                    <ul class="mt-4 text-3xl text-gray-600 max-w-4xl text-center dark:text-gray-400">
                        <li>{{ __('Took part in Robothon an event by Robotics and Aviation Club RBU')}}</li>
                        <li>{{ __('Achieved 3rd place in Marketing Masters, a competition at event Gyansarovar held at RBU')}}  </li>
                        <li>{{ __('Attended DevFest 2023 held at IIM Nagpur')}}</li>
                        <li>{{ __('Qualified for round 2 of Global Hyperloop Competition 2023 held at IIT Madras')}}</li>
                        <li>{{ __('Qualified for round 2 of Smart India Hackathon (SIH) 2024')}}</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Small Navigation Arrows (SVG Icons) -->
        <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </div>
    </div>
</x-layout>
