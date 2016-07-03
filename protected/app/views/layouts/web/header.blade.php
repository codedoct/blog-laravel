<div class="header">
	<div class="banner">
		<div class="welcome">Welcome</div>
		<div class="gambar"><a href="#"><img src="//2.bp.blogspot.com/-PvB3-m8zpCE/VwlLQ6WzapI/AAAAAAAAAGY/ExOOBDe1UQAB0YwGVoDbEa6FNJVY5lGLw/s80/mata.png" style="width:"100px" height="129px";"></a></div>
	</div>
	<hr>
	<div class="menu">
		<div class="kiri">
			<li>
				<div class="dropdown">
				  <button class="button">Menu(css)</button>
				  <div class="dropdown-content">
				    <a href="{{ URL::to('users')}}">User</a>
				    <a href="#">Link 2</a>
				    <a href="#">Link 3</a>
				  </div>
				</div>
			</li>
			<li>
			  <div class="dropdown-script">
				  <button onclick="myFunction()" class="dropbtn">Menu(css)</button>
				  <div id="myDropdown" class="dropdown-content-script">
				    <a href="{{ URL::to('users')}}">User</a>
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