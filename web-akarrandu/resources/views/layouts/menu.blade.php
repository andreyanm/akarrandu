<li class="nav-item">
    <a href="{{ route('wargas.index') }}"
       class="nav-link {{ Request::is('wargas*') ? 'active' : '' }}">
        <p>Data Warga</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('kecamatans.index') }}"
       class="nav-link {{ Request::is('kecamatans*') ? 'active' : '' }}">
        <p>Kecamatan</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('kelurahans.index') }}"
       class="nav-link {{ Request::is('kelurahans*') ? 'active' : '' }}">
        <p>Kelurahan</p>
    </a>
</li>




