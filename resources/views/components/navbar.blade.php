<nav class="flex bg-slate-700 text-white">
    <a href="/counter"
        class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('counter') ? 'bg-slate-800' : '' }}">Counter</a>
    <a href="/calculator"
        class="py-4 px-6 hover:bg-slate-800 {{ request()->routeIs('calculator') ? 'bg-slate-800' : '' }}">Calculator</a>
</nav>
