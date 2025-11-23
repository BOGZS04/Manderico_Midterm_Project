<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Movie System</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen">
  <div class="flex">
    <!-- Modern Sidebar -->
    <aside class="w-64 bg-gradient-to-b from-blue-600 to-blue-800 text-white shadow-lg fixed h-screen overflow-y-auto">
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

      <!-- Logout Button -->
      <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-blue-500 bg-blue-700">
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg text-sm font-medium transition-colors duration-200">
            <span>🚪</span>
            <span>Logout</span>
          </button>
        </form>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1 p-6">
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
</body>
</html>