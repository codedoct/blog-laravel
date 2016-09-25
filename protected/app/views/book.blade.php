@extends('layouts/web/master')

<?php $title = "Book" ?>

@section('style')
	{{ HTML::style('public/css/book.css') }}
@stop

@section('script')
	<script>
	//offset anchor tags with fixed header and smooth scroll
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	&& location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 60 //offset height
	        }, 500);
	        return false;
	      }
	    }
	  });
	  //Executed on page load with URL containing an anchor tag.
	  if($(location.href.split("#")[1])) {
	      var target = $('#'+location.href.split("#")[1]);
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 60 //offset height
	        }, 500);
	        return false;
	      }
	    }
	});

	</script>
@stop

@section('content')
<div class="isi">
	<div class="daftar-isi">
		<h2>My Book</h2>
		<ul>
			<li><a href="#test1">Test 1</a></li>
			<li><a href="#test2">Test 2</a></li>
			<li><a href="#test3">Test 3</a></li>
			<li><a href="#test4">Test 4</a></li>
		</ul>
	</div>

	<!-- Begin book -->
	<div class="book">
		<div id="test1">
			<h4>Test 1</h4>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
		</div>

		<div id="test2">
			<h4>Test 2</h4>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
		</div>

		<div id="test3">
			<h4>Test 3</h4>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
		</div>
		
		<div id="test4">
			<h4>Test 4</h4>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.

			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe voluptatem veritatis expedita nihil dolores, distinctio aperiam. Necessitatibus vitae molestias natus fugiat rerum sequi enim nam, nesciunt, et quam asperiores.
		</div>
	</div>
</div>
@stop