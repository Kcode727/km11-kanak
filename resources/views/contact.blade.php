<x-layout>
    <x-slot:title>Contact</x-slot>

    <!-- Container with spiral overlay only -->
    <div class="border-b-2 dark:border-white border-black relative min-h-screen bg-gradient-to-r from-blue-200 via-purple-300 to-pink-200 dark:bg-gradient-to-r dark:from-gray-800 dark:via-gray-700 dark:to-gray-900 py-20 flex items-center justify-center overflow-hidden">
        
        <!-- Wavy Spiral Background -->
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full absolute top-0 left-0 bg-gradient-conic" style="background: conic-gradient(from 0deg at center, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(255, 255, 255, 0) 100%); transform: rotate(-45deg);"></div>
        </div>
        
        <div class="max-w-4xl w-full px-8 lg:px-12 flex flex-col lg:flex-row items-center lg:space-x-12 relative z-10">
            
            <!-- Contact Form Section -->
            <div class="lg:w-3\4 bg-white dark:bg-gray-900 p-8 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-6">Let's Connect!</h2>

                <p class="text-lg text-gray-700 dark:text-gray-300 mb-8">
                I'd love to hear from you! Whether you have questions, feedback, 
                or just want to chat, feel free to reach out. Your thoughts and ideas are always welcome!
                </p>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-3 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your message" required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white font-bold rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                            Send Message
                        </button>
                    </div>
                </form>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="mt-4 text-green-500 text-lg">{{ session('success') }}</div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
