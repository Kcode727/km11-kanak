<x-layout>
<x-slot:title>{{ __('Home')}}</x-slot>

<!-- Main Content -->
<div class="border-b-2 dark:border-white border-black flex-1 p-10 bg-white dark:bg-black">
  

  <div class="flex flex-col items-center mt-5">
    <div class="mb-4">
      <!-- Light Mode Image -->
      <img src="/images/logo-d.jpeg" alt="Logo" class="w-96 h-96 rounded shadow-lg">

    </div>
    
    <div class="text-center text-black dark:text-white">
      <h1 class="text-5xl font-bold my-4">{{ __('Hi There! I am ')}}{{ __('Kanak Meshram')}}</h1>
      <p class="text-3xl mt-2 mb-6">
        {{ __('I love bringing ideas to life through interactive websites.')}}<br>
        {{ __('I strive to infuse every project with originality and a unique perspective.')}}<br>
        {{ __('Thank you for visiting, and I am excited to share my creative journey with you!')}}
      </p>
      <a href="/about" class="py-2 px-6 dark:bg-gray-200 dark:text-black dark:hover:bg-gray-400 text-xl bg-black text-white rounded shadow-lg hover:bg-purple-700 transition-colors duration-300">
        {{ __('About Me')}}
      </a>
    </div>
  </div>
</div>
</style>
</x-layout>
