<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sinking Funds Organizer</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    {{-- paste all your <style> CSS here --}}
</head>
<body>

    {{-- SIDEBAR --}}
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">SF<span>O</span></div>

        <a href="{{ route('sinking-funds.dashboard') }}"
           class="nav-item {{ request()->routeIs('sinking-funds.dashboard') ? 'active' : '' }}">
            <span class="nav-icon">🏠</span>
            <span class="nav-label">Dashboard</span>
        </a>

        <a href="{{ route('sinking-funds.funds') }}"
           class="nav-item {{ request()->routeIs('sinking-funds.funds') ? 'active' : '' }}">
            <span class="nav-icon">💰</span>
            <span class="nav-label">My Funds</span>
        </a>

        <a href="{{ route('sinking-funds.contributions') }}"
           class="nav-item {{ request()->routeIs('sinking-funds.contributions') ? 'active' : '' }}">
            <span class="nav-icon">📝</span>
            <span class="nav-label">Contributions</span>
        </a>

        <a href="{{ route('sinking-funds.reports') }}"
           class="nav-item {{ request()->routeIs('sinking-funds.reports') ? 'active' : '' }}">
            <span class="nav-icon">📊</span>
            <span class="nav-label">Reports</span>
        </a>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="main">
        <div class="topbar">
            <div class="topbar-title">@yield('page-title', 'Sinking Funds')</div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </main>

</body>
</html>