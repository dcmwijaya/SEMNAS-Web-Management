<nav class="navbar navbar-expand-lg navbar-light bg-info">
	<a class="navbar-brand" href="<?= base_url('home') ?>">Beranda</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Menu
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="<?= base_url('about') ?>"><i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Tentang Semnas</a>
					<?php if (logged_in()) : ?>
						<a class="dropdown-item" href="<?= base_url('admin') ?>"><i class="fas fa-th-list"></i>&nbsp;&nbsp;Kelola Data</a>
						<a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Logout Admin</a>
					<?php else : ?>
						<a class="dropdown-item" href="<?= base_url('registry') ?>"><i class="fas fa-user-edit"></i>&nbsp;&nbsp;Registrasi Semnas</a>
						<a class="dropdown-item" href="<?= base_url('semnas') ?>"><i class="fas fa-th-list"></i>&nbsp;&nbsp;Peserta Semnas</a>
						<a class="dropdown-item" href="<?= base_url('login') ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login Admin</a>
					<?php endif; ?>
				</div>
			</li>
		</ul>
	</div>
</nav>