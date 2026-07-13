<!-- <nav class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">

    {{-- Logo / Brand --}}
    <a href="/" class="text-xl font-bold text-white hover:text-gray-300">
        MyApp
    </a>

    {{-- Nav Links --}}
    <ul class="flex gap-6">
        <li>
            <a href="/" 
               class="hover:text-yellow-400 transition duration-200">
               Home
            </a>
        </li>
        <li>
            <a href="/aboutpath" 
               class="hover:text-yellow-400 transition duration-200">
               About
            </a>
        </li>
        <li>
            <a href="/htmlcodereuse" 
               class="hover:text-yellow-400 transition duration-200">
               htmlCodeReuse
            </a>
        </li>
        <li>
            <a href="/login" 
               class="hover:text-yellow-400 transition duration-200">
               login
            </a>
        </li>
    </ul>

</nav> -->

<nav class="bg-white border-b border-gray-200 shadow-xs">
    <div class="container mx-auto px-4 max-w-7xl">
      <div class="flex justify-between items-center h-16">
        
        <!-- Brand/Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="#" class="text-xl font-bold text-blue-600 tracking-tight">Dashboard</a>
        </div>

        <!-- Desktop Navigation Links (Hidden on Mobile) -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="/" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Home</a>
          <a href="/aboutpath" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">About</a>
          <a href="/htmlcodereuse" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">HtmlCodeReuse</a>
          <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Settings</a>
        </div>

        <!-- Desktop Action Buttons (Hidden on Mobile) -->
        <div class="hidden md:flex items-center space-x-4">
          <button class="text-gray-600 hover:text-gray-900 font-medium text-sm px-4 py-2"><a href="/login">Sign In</a></button>
          <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-4 py-2 rounded-md shadow-xs transition-colors">Sign Up</button>
        </div>

        <!-- Mobile Menu Toggle Button (Hidden on Desktop) -->
        <div class="flex md:hidden">
          <button id="mobile-menu-btn" type="button" class="text-gray-500 hover:text-gray-700 p-2 focus:outline-hidden" aria-label="Toggle menu">
            <!-- Icon when menu is closed -->
            <svg id="menu-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Icon when menu is open -->
            <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Navigation Drawer (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
      <div class="px-4 pt-2 pb-4 space-y-1">
        <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Home</a>
        <a href="/aboutpath" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">About</a>
        <a href="/htmlcodereuse" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">HtmlCodeReuse</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Settings</a>
        <div class="border-t border-gray-200 my-2 pt-2 space-y-2">
          <button class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50"><a href="/login">Sign In</a></button>
          <button class="w-full text-center bg-blue-600 text-white font-medium px-4 py-2 rounded-md shadow-xs">Sign Up</button>
        </div>
      </div>
    </div>
  </nav>

