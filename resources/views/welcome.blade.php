<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html { line-height: 1.15; -webkit-text-size-adjust: 100%; }
        body { margin: 0; font-family: 'Figtree', sans-serif; background-color: #1a202c; color: #e2e8f0; }
        *, *::before, *::after { box-sizing: border-box; border-width: 0; border-style: solid; }
        svg, video { display: block; }
        video { max-width: 100%; height: auto; }
        .flex { display: flex; }
        .items-top { align-items: flex-start; }
        .justify-center { justify-content: center; }
        .min-h-screen { min-height: 100vh; }
        .bg-gray-100 { background-color: #f7fafc; }
        .dark\:bg-gray-900 { background-color: #1a202c; }
        .dark\:text-gray-400 { color: #cbd5e0; }
        .dark\:text-gray-500 { color: #a0aec0; }
        .dark\:bg-gray-800 { background-color: #2d3748; }
        .dark\:border-gray-700 { border-color: #4a5568; }
        .dark\:hover\:bg-gray-700:hover { background-color: #4a5568; }
        a { color: #f43f5e; text-decoration: none; }
        .text-lg { font-size: 1.125rem; }
        .underline { text-decoration: underline; }
        /* 以下は必要に応じて追加可能なTailwind風スタイル群 */
    </style>
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="text-6xl font-bold text-red-500">Laravel</h1>
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="text-xl text-gray-700 dark:text-gray-400">Documentation</div>
                        <a href="https://laravel.com/docs" class="mt-2 block text-red-500 underline">Laravel Docs</a>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="text-xl text-gray-700 dark:text-gray-400">Laracasts</div>
                        <a href="https://laracasts.com" class="mt-2 block text-red-500 underline">Laracasts</a>
                    </div>
                    <!-- 他のリンク集セクションも同様に追加 -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>





