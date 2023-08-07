		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										<?php echo auth()->user()->name; ?>
									</div>
								</div>
								<small>Admin</small>
							</div>
					</div>
					<div class="menu-header">Pages</div>
                    <div class="menu-item">
                        <a href="{{ route('home') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">Dashboard</div>
                        </a>
                        <a href="{{ route('assets.index') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">Assets</div>
                        </a>
						<a href="{{ route('vm.index') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">VM</div>
                        </a>
                    </div>
                    {{-- <div class="menu-header">Control Panel</div> --}}
					<div class="menu-item">
                        <a href="{{ route('users.index') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">Users</div>
                        </a>
                        {{-- <a href="{{ route('DataPermission.index') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">Data Permisions</div>
                        </a> --}}
						{{-- <a href="{{ route('Roles.index') }}" class="menu-link">
                        <div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
                            <div class="menu-text">Roles</div>
                        </a> --}}
                    </div>




					<div class="menu-header">Add Data Form</div>

                    <div class="menu-item ">
						<a href="{{ route('Cloudflare.index') }}" class="menu-link">
							<div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Cloudflare Tunnel</div>
						</a>
					</div>
                    <div class="menu-item ">
						<a href="{{ route('Ngroktunnel.index') }}" class="menu-link">
							<div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Ngrok Tunnel</div>
						</a>
					</div>
					<div class="menu-item ">
						<a href="{{ route('Provider.index') }}" class="menu-link">
							<div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Provider</div>
						</a>
					</div>
					
					<div class="menu-item ">
						<a href="{{ route('Domain.index') }}" class="menu-link">
							<div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Data Domain</div>
						</a>
					</div>
					
					<div class="menu-item ">
						<a href="{{ route('Company.index') }}" class="menu-link">
							<div class="menu-icon-img">
								<img src="img/logo/logo-bs5.png" alt="" />
							</div>
							<div class="menu-text">Data Company</div>
						</a>
					</div>
					</div>
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
