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
				  <button class="button">Menu(css)</button>
				  <div class="dropdown-content">
				    <a href="{{ URL::to('crud/users')}}">User</a>
				    <a href="{{ URL::to('book')}}">Index Book</a>
				    <a href="{{ URL::to('javaScript/js1')}}">Belajar Script</a>
				    <a href="{{ URL::to('javaScript/js2')}}">Belajar Script2</a>
				    <a href="{{ URL::to('javaScript/js3')}}">Belajar Script3</a>
				    <a href="{{ URL::to('javaScript/js4')}}">Belajar Script4</a>
				  </div>
				</div>
			</li>
			<li>
			  <div class="dropdown-script">
				  <button onclick="myFunction()" class="dropbtn">Menu(css)</button>
				  <div id="myDropdown" class="dropdown-content-script">
				    <a href="{{ URL::to('crud/users')}}">User</a>
				    <a href="#">Link 2</a>
				    <a href="#">Link 3</a>
				  </div>
			  </div>
			</li>
		</div>
		<div class="kanan">
			<li onclick="location.href='{{ URL::to('/') }}';">Login</li>
			<li onclick="location.href='{{ URL::to('/') }}';">Cari</li>
		</div>
	</div>
</div>