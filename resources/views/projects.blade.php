<!-- resources/views/projects.blade.php -->
<x-layout>
<x-slot:title>{{ __('Projects')}}</x-slot>
    <div class="bg-white dark:bg-black py-12 border-b-2 dark:border-white border-black">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold dark:text-white text-center text-gray-800 mb-12">{{ __('My Projects')}}</h1>

            <!-- First Section -->
            <h2 class="text-3xl font-bold dark:text-white mb-6 text-gray-800">{{ __('Websites and Prototype projects')}}</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-2 gap-8 mb-12">

                <!-- Project 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Music Mania Website')}}</h3>
                    <p class="text-gray-600 mb-4">{{ __('It was an assignment given in Computer Workshop Lab which aimed to create a website to listen to music of various genres.')}}<br>
                    {{ __('Here is the look of it main page')}}</p>
                    <img src="/images/p1.jpg" class="w-auto h-auto rounded"><br>
                    <a href="https://github.com/Kcode727/km11-MusicMania.git" class="text-blue-500 hover:underline">View Project</a>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Virtual Lab Project')}}</h3>
                    <p class="text-gray-600 mb-4">{{ __('It is an assignment given in Data Structure Lab which aims to create a website similar to Virtual Lab such as to represent Ramdeobaba University, Nagpur.')}}<br>
                        {{ __('Here is the look of it main page')}}
                    </p>
                    <img src="/images/p2.jpg" class="w-auto h-auto rounded"><br>
                    <a href="https://github.com/mstailor/Virtual-Labs-Project.git" class="text-blue-500 hover:underline">View Project</a>
                </div>

                 <!-- Project 3 -->
                 <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Movie ticket Booking app')}}</h3>
                    <p class="text-gray-600 mb-4">{{ __('It was an assignment given in Computer Workshop Lab which aims to create a prototype of a ticket booking app using figma.')}}<br>
                        {{ __('Here is the look of the app')}}
                    </p>
                    <div class="flex justify-center items-center">
                    <img src="/images/p3.jpg" class="w-auto h-auto rounded"><br>
                    </div>
                    <a href="https://www.figma.com/proto/j66aYYtpAEv7xKpwSzPzQs/EXP-6-CWS?node-id=20-17&starting-point-node-id=20%3A17" class="text-blue-500 hover:underline">View Project</a>
                </div>

            </div>

            <!-- Second Section -->
            <h2 class="text-3xl font-bold dark:text-white mb-6 text-gray-800">{{ __('Logo Designs')}}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-8">

                <!-- Project 4 -->
                <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Virtual Lab Logo')}}</h3>
                    <img src="/images/l1.jpeg" class="w-auto h-auto rounded"><br>
                </div>

                <!-- Project 5 -->
                <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Portfolio Logo')}}</h3>
                    <img src="/images/logo-d.jpeg" class="w-auto h-auto rounded"><br>
                </div>

                <!-- Project 6 -->
                <div class="bg-white rounded-lg shadow-lg p-6 dark:bg-gray-300">
                    <h3 class="text-2xl font-bold mb-4">{{ __('Marketing Masters Poster Logo')}}<br>
                    {{ __('(Branding Byjus and Casio Calculator collaboration)')}}
                    </h3>
                    <img src="/images/l2.jpeg" class="w-auto h-auto rounded"><br>
                </div>
            </div>
        </div>
    </div>
</x-layout>
