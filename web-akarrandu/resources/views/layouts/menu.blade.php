@if(\Auth::user()->role == 1)
<li class="nav-item">
    <a href="{{ route('wargas.index') }}"
       class="nav-link {{ Request::is('wargas*') ? 'active' : '' }}">
        <p>Data Warga</p>
    </a>
</li>
@endif
@if(\Auth::user()->role == 0)
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
@endif




