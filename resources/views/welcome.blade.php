@extends('layouts.default')

@section('content')
    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <a href="{{ route('test') }}"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    テストページ
                </p>
            </a>

            <a href="https://laravel.com/docs"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                    development. Check them out, see for yourself, and massively level up your development
                    skills in the process.
                </p>
            </a>
            <a href="https://laravel.com/docs"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                    development. Check them out, see for yourself, and massively level up your development
                    skills in the process.
                </p>
            </a>
            <a href="https://laravel.com/docs"
                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                    development. Check them out, see for yourself, and massively level up your development
                    skills in the process.
                </p>
            </a>

        </div>
    </div>
@endsection
