<li class="nav-item">
    <a href="{{ route('pegawais.index') }}"
       class="nav-link {{ Request::is('pegawais*') ? 'active' : '' }}">
        <p>Pegawai</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('presensis.index') }}"
       class="nav-link {{ Request::is('presensis*') ? 'active' : '' }}">
        <p>Presensi</p>
    </a>
</li>




<li class="nav-item">
    <a href="{{ route('gajis.index') }}"
       class="nav-link {{ Request::is('gajis*') ? 'active' : '' }}">
        <p>Gaji</p>
    </a>
</li>


