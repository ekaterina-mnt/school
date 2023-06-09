<nav>
    <a href="{{ url('/') }}">
        мебиум
    </a>
    <a href="tel:88009001020">
        8(800)900-10-20
    </a>
    </form>
    <form action="{{ route('contact_form') }}">
        <button class="border call_me">
            связаться с нами
        </button>
    </form>
    <a class="left-gap" href="{{ url('/courses') }}">
        все курсы
    </a>
    <a href="{{ url('/teachers') }}">
        преподаватели
    </a>
    <a href="{{ url('/openvebinars') }}">
        открытые вебинары
    </a>

    @auth("web")
    <form action="{{ route('logout') }}">
        <button class="border logout">
            выйти
        </button>
    </form>
    @endauth

    @guest("web")
    <form action="{{ route('login') }}">
        <button  class="border login">
            войти
        </button>
    </form>
    @endguest
    
    @auth("web")
    <form action="{{ route('my_courses') }}">
        <button class="border try">
            мои курсы
        </button>
    </form>
    @endauth

    @guest("web")
    <form action="{{ route('register') }}">
        <button class="border try">
            регистрация
        </button>
    </form>
    @endguest