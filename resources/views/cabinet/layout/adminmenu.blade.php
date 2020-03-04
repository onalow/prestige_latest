<nav id="sidebar" class="cld-side-nav collapse navbar-collapse col-lg-3">
	<ul class="list-unstyled components">
		<li class="active">
			<a href="{{route('home')}}">
				<i class="cl-icon cl-dashboard-icon"></i>
				<span class="cld-menu-title">Dashboard</span>
			</a>
		</li>

		<li class="">
			<a href="#pageSubmenuWallet" data-toggle="collapse" aria-expanded="false">
				<i class="cl-icon cl-wallet-icon"></i>
				<span class="cld-menu-title">Payment</span>
			</a>
			<ul class="collapse list-unstyled" id="pageSubmenuWallet">
				<li><a href="{{ route('buy')}}">Deposit</a></li>
				<li><a href="/withdraw">Withdraw</a></li>

				<li><a href="#">Debit card <small>soon</small>
				</a></li>
			</ul>
		</li>
		<li class="">
			<a href="#pageSubmenuTrading" data-toggle="collapse" aria-expanded="false">
				<i class="cl-icon cl-crpto-icon"></i>
				<span class="cld-menu-title">Investment</span>
			</a>
			<ul class="collapse list-unstyled" id="pageSubmenuTrading">
				<li><a href="{{ route('buy')}}">My Current Investment</a></li>
				{{-- <li><a href="plans">Top-Up Current Plan</a></li> --}}
				<li><a href="{{ route('buy')}}">Buy Investment Plan</a>
				</li>
			</ul>
		</li>


		<li class="">
			<a href="/bonus" >
				<i class="cl-icon cl-referral-icon"></i>
				<span class="cld-menu-title">Bonus</span>
			</a>
		</li>
		<li class="">
			<a href="#pageSubmenuTeam" data-toggle="collapse" aria-expanded="false">
				<i class="cl-icon cl-referral-icon"></i>
				<span class="cld-menu-title">Referral</span>
			</a>
			<ul class="collapse list-unstyled" id="pageSubmenuTeam">
				<li><a href="/referral">My Referrals</a></li>
				{{-- <li><a href="/cabinet/team">My team</a></li> --}}
				{{-- <li><a href="/cabinet/bonus">Bonus</a></li> --}}
				<li><a href="#">Marketing </a></li>
			</ul>
		</li>

		<li class="">
			<a href="#pageSubmenuSupport" data-toggle="collapse" aria-expanded="false">
				<i class="cl-icon cl-support-icon"></i>
				<span class="cld-menu-title">Support</span>
			</a>
			<ul class="collapse list-unstyled" id="pageSubmenuSupport">
{{-- 				<li><a href="https://t.me" target="_blank">Telegram Bot</a>
				</li>
				<li><a href="https://t.me/">Telegram Channel</a></li>
				<li><a href="https://t.me/">Telegram Community</a></li> --}}
				<li><a href="#">Messages</a></li>
				<li><a href="/faq" ">FAQ</a></li>
			</ul>
		</li>
		<li class="">
			<a href="#">
				<i class="cl-icon cl-support-icon"></i>
				<span class="cld-menu-title">Settings</span>
			</a>
		</li>
	</ul>
	<div class="sidebar-header">
		<button type="button" id="sidebarCollapse" class="btn btn-link">
			<strong><i class="cl-icon cl-menu-icon"></i></strong>
			<h3>Hide menu</h3>
		</button>
	</div>

</nav>