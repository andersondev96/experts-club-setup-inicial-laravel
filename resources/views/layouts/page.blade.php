<nav>
    <ul>
        <li><a href="#">Página inicial</a></li>
        <li>
        @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
        @endauth
        </li>
    </ul>
</nav>

<main>
    {{ $slot }}
</main>

<footer>
    <p>Todos os direitos reservados.</p>
</footer>
