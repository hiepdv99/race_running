@extends('master.master')
@section('name')
	<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 21, 2014!</div>
		<div class="container_12">
			<div class="grid_12">
				<h3 class="h3__head1">Race Calendar</h3>
				<div class="custom-month-year">
					<div class="dateHolder">
						<span id="custom-month" class="custom-month"></span>
						<span id="custom-year" class="custom-year"></span>
					</div>
					<nav class="_nav">
						<span id="custom-prev" class="custom-prev"></span>
						<span id="custom-next" class="custom-next"></span>
					</nav>
				</div>
				<div id="calendar" class="fc-calendar-container"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
@endsection
