<li class="nav-item">
    <a href="{{ route('kecamatans.index') }}"
       class="nav-link {{ Request::is('kecamatans*') ? 'active' : '' }}">
        <p>Kecamatans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('kelurahans.index') }}"
       class="nav-link {{ Request::is('kelurahans*') ? 'active' : '' }}">
        <p>Kelurahans</p>
    </a>
</li>


