<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Movie System</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen">
  <div class="flex h-screen">
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="fixed top-4 left-4 z-50 lg:hidden p-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    <!-- Mobile Menu Close Button (visible when menu is open) -->
    <button id="mobile-menu-close" class="fixed top-4 left-4 z-50 hidden lg:hidden p-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition-colors">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <!-- Sidebar Overlay (for mobile) -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden"></div>

    <!-- Modern Sidebar -->
    <aside id="sidebar" class="w-64 bg-gradient-to-b from-blue-700 via-blue-800 to-blue-900 text-white shadow-lg fixed lg:static h-screen overflow-y-auto transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0 z-40">
      <!-- Logo Section -->
      <div class="p-6 border-b border-blue-500">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
            <span class="text-blue-600 font-bold text-lg">🎬</span>
          </div>
          <h1 class="text-xl font-bold">MovieHub</h1>
        </div>
      </div>

      <!-- Navigation Menu -->
      <nav class="p-4 space-y-2">
        <a href="{{ route('dashboard') }}" 
           class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200">
          <span class="text-xl">🎥</span>
          <span>Movies</span>
        </a>
        <a href="{{ route('genres.index') }}" 
           class="nav-link {{ request()->routeIs('genres.*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200">
          <span class="text-xl">🎭</span>
          <span>Genres</span>
        </a>
      </nav>

    <!-- Bottom Section (Profile + Logout) -->
  <div class="absolute bottom-0 left-0 right-0 bg-blue-800 border-t border-blue-500">

  <!-- User Profile Section -->
  <div class="p-4 text-white">
    <div class="flex items-center gap-3">
      <!-- Profile Icon -->
      <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-xl font-bold">
        EM
      </div>

      <!-- Name + Welcome Text -->
      <div class="flex flex-col leading-tight">
        <span class="text-sm opacity-80">Welcome back!</span>
        <span class="text-base font-semibold">Edgar Manderico</span>
      </div>
    </div>
  </div>

  <!-- Logout Button -->
  <div class="p-4 bg-blue-700 border-t border-blue-500">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg text-sm font-medium transition-colors duration-200">
        <span>🚪</span>
        <span>Logout</span>
      </button>
    </form>
  </div>
</aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
      <div class="p-6">
        @if(session('success'))
          <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
          </div>
        @endif
        
        @if(session('error'))
          <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            {{ session('error') }}
          </div>
        @endif

        @yield('content')
      </div>
    </main>
  </div>

  <style>
    .nav-link {
      color: rgba(255, 255, 255, 0.8);
    }

    .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
    }

    .nav-link.active {
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
      font-weight: 600;
    }
  </style>

  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const navLinks = document.querySelectorAll('.nav-link');

    // Open menu
    mobileMenuBtn.addEventListener('click', () => {
      sidebar.classList.remove('-translate-x-full');
      sidebarOverlay.classList.remove('hidden');
      mobileMenuBtn.classList.add('hidden');
      mobileMenuClose.classList.remove('hidden');
    });

    // Close menu
    const closeMenu = () => {
      sidebar.classList.add('-translate-x-full');
      sidebarOverlay.classList.add('hidden');
      mobileMenuBtn.classList.remove('hidden');
      mobileMenuClose.classList.add('hidden');
    };

    mobileMenuClose.addEventListener('click', closeMenu);
    sidebarOverlay.addEventListener('click', closeMenu);

    // Close menu when a nav link is clicked
    navLinks.forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  </script>
</body>
</html>