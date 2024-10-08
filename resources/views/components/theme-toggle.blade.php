<div x-data="themeToggle()" x-init="init()" :class="{ dark: darkMode }" class="theme-toggle">
    <button 
        id="theme-toggle" 
        @click="toggleTheme"
        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
    >
        <!-- Sun Icon (for light mode) -->
        <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
        
        <!-- Moon Icon (for dark mode) -->
        <svg x-show="darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

<script>
    function themeToggle() {
        return {
            darkMode: false,

            init() {
                // Retrieve the user's theme preference from local storage
                const storedTheme = localStorage.getItem('theme');
                if (storedTheme) {
                    this.darkMode = storedTheme === 'dark';
                } else {
                    // Optionally, detect the system's theme preference (light/dark)
                    this.darkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                }

                // Apply the dark class if dark mode is true
                document.documentElement.classList.toggle('dark', this.darkMode);
            },

            toggleTheme() {
                // Toggle the dark mode boolean value
                this.darkMode = !this.darkMode;

                // Immediately apply or remove the 'dark' class to/from the <html> element
                document.documentElement.classList.toggle('dark', this.darkMode);

                // Save the user's theme preference in local storage
                localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
            }
        };
    }
</script>
