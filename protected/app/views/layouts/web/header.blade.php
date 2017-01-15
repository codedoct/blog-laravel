<div class="header">
	<div class="banner">
		<div class="welcome">Welcome</div>
		{{-- code dibawah ini menggunakan constant variabel --}}
		<div class="gambar"><a href="#"><img src="{{ IMAGE_HEADER }}" style="width:"100px" height="129px";"></a></div>
	</div>
	<hr>
	<div class="menu">
		<div class="kiri">
			<li>
				<div class="dropdown">
				  <button class="btn btn-default">Menu(css)</button>
				  <div class="dropdown-content">
				    <a href="{{ URL::to('crud/users')}}">User</a>
				    <a href="{{ URL::to('book')}}">Index Book</a>
				    <a href="{{ URL::to('javaScript/js1')}}">Belajar Script</a>
				    <a href="{{ URL::to('javaScript/js2')}}">Belajar Script2</a>
				    <a href="{{ URL::to('javaScript/js3')}}">Belajar Script3</a>
				    <a href="{{ URL::to('javaScript/js4')}}">Belajar Script4</a>
				    <a href="{{ URL::to('javaScript/js5')}}">Belajar Script5</a>
				    <a href="{{ URL::to('javaScript/js6')}}">Belajar Script6</a>
				    <a href="{{ URL::to('javaScript/js7')}}">Belajar Script7</a>
				  </div>
				</div>
			</li>
			<li>
			  <div class="dropdown-script">
				  <button onclick="myFunction()" class="dropbtn btn btn-default">Translate</button>
				  <div id="myDropdown" class="dropdown-content-script">
				    <a href="{{ URL::to('lang/en') }}">English</a>
				    <a href="{{ URL::to('lang/ina') }}">Indonesia</a>
				  </div>
			  </div>
			</li>
		</div>
		<div class="kanan">
			@if(Auth::user())
				<li onclick="if(confirm('Are you sure to logout?')) location.href='{{ URL::to('logout') }}';">Logout</li>
			@else
				<li onclick="location.href='{{ URL::to('login') }}';">Login</li>
			@endif
			<li onclick="location.href='{{ URL::to('/') }}';">Cari</li>
		</div>
	</div>
</div>