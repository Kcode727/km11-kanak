<x-layout>
<x-slot:title>Home</x-slot>

<!-- Main Content -->
<div class="border-b-2 dark:border-white border-black flex-1 p-10 bg-white dark:bg-black">
  

  <div class="flex flex-col items-center mt-5">
    <div class="mb-4">
      <!-- Light Mode Image -->
      <img x-show="!darkMode" src="/images/logo-d.jpeg" alt="Logo" class="w-96 h-96 rounded shadow-lg">

      <!-- Dark Mode Image -->
      <img x-show="darkMode" src="/images/logo.jpeg" alt="Logo" class="w-96 h-96 rounded shadow-lg">
    </div>
    
    <div class="text-center">
      <h1 class="text-5xl font-bold my-4">Hi There! I'm Kanak Meshram</h1>
      <p class="text-3xl mt-2 mb-6">
        I love bringing ideas to life through interactive websites.<br>
        I strive to infuse every project with originality and a unique perspective.<br>
        Thank you for visiting, and I'm excited to share my creative journey with you!
      </p>
      <a href="/about" class="py-2 px-6 text-xl bg-black text-white rounded shadow-lg hover:bg-purple-700 transition-colors duration-300">
        ABOUT ME
      </a>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const bubblesContainer = document.getElementById('bubbles');
    const numBubbles = 30;

    for (let i = 0; i < numBubbles; i++) {
      const bubble = document.createElement('div');
      bubble.className = 'bubble';
      bubble.style.width = `${Math.random() * 50 + 20}px`;
      bubble.style.height = bubble.style.width;
      bubble.style.left = `${Math.random() * 100}vw`;
      bubble.style.top = `${Math.random() * 100}vh`;
      bubble.style.animationDelay = `${Math.random() * 10}s`;
      bubblesContainer.appendChild(bubble);
    }
  });
</script>

<!-- Include CSS -->
<style>
  /* Container to restrict bubble animation area */
  #bubbles {
    position: absolute;
    top: 5%; /* Adjust based on your header */
    bottom: 5%; /* Adjust based on your footer */
    left: 0;
    right: 0;
    overflow: hidden;
    z-index: 10; /* Ensure it stays behind main content */
  }

  .bubble {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3); /* Transparent and shiny effect */
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.6); /* Shiny effect */
    pointer-events: none;
    animation: float 10s infinite ease-in-out;
  }

  @keyframes float {
    0% {
      transform: translateY(0);
      opacity: 0.6;
    }
    50% {
      transform: translateY(-100px);
      opacity: 0.3;
    }
    100% {
      transform: translateY(0);
      opacity: 0.6;
    }
  }
</style>
</x-layout>
