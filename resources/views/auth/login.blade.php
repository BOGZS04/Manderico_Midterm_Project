<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieHub - Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-600 to-blue-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-lg mb-4">
                <span class="text-4xl">🎬</span>
            </div>
            <h1 class="text-4xl font-bold text-white mb-2">MovieHub</h1>
            <p class="text-blue-100">Manage Your Movie Collection</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-8">
                <h2 class="text-2xl font-bold text-white">Welcome Back</h2>
                <p class="text-blue-100 text-sm mt-1">Enter your credentials to continue</p>
            </div>

            <!-- Card Body -->
            <div class="p-6 sm:p-8">
                <form method="POST" action="{{ route('login.store') }}" class="space-y-6">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Enter your email"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm"
                            required
                        />
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <input 
                            type="password" 
                            name="password" 
                            placeholder="Enter your password"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm"
                            required
                        />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                        />
                        <label for="remember" class="ml-2 text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>

                    <!-- Login Button -->
                    <button 
                        type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <span>🔓</span>
                        <span>Login</span>
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Demo Credentials</span>
                    </div>
                </div>

                <!-- Demo Info -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <p class="text-xs text-gray-600 mb-2">
                        <span class="font-semibold">Email:</span> demo@example.com
                    </p>
                    <p class="text-xs text-gray-600">
                        <span class="font-semibold">Password:</span> password123
                    </p>
                    <p class="text-xs text-gray-500 mt-2 italic">
                        💡 This is a dummy login page. Any credentials work!
                    </p>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 text-center text-xs text-gray-600">
                <p>🎬 MovieHub © 2025 - Movie Management System</p>
            </div>
        </div>

        <!-- Bottom Text -->
        <p class="text-center text-blue-100 text-sm mt-6">
            Made with ❤️ for movie enthusiasts
        </p>
    </div>
</body>
</html>