@extends('master.master')
@section('content')
	<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 21, 2014!</div>
		<div class="container_12">
			<div class="grid_12">
				<h3>Find Us</h3>
				<div class="map">
					<figure class="">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
					</figure>
				</div>
			</div>
			<div class="clear"></div>
			<div class="grid_5">
				<h3>Contact Info</h3>
				<div class="text1">Lorem ipsum dolor sit amet, consecteturpiscinger elit um dolor sit amet, consecteturpiscing.</div>
				<p>All <span class="color1"><a href="http://www.templatemonster.com/website-templates.php" rel="nofollow">premium templates</a></span> go with 24/7 technical support. Free themes lack this privilege.</p>
				<p>If you need help in customization of the chosen freebie, connect <span class="color1"><a href="http://www.templatetuning.com/" rel="nofollow">Template Tuning</a></span>.</p>
				The Company Name Inc. <br>
				9870 St Vincent Place, <br>
				Glasgow, DC 45 Fr 45. <br>
				Telephone: +1 800 603 6035 <br>
				FAX: +1 800 889 9898 <br>
				E-mail: <span class="color1"><a href="#">mail@demolink.org</a></span>
			</div>
			<div class="grid_6 prefix_1">
				<h3>Contact Form</h3>
				<form id="form">
					<div class="success_wrapper">
						<div class="success-message">Contact form submitted</div>
					</div>
					<label class="name">
						<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
						<span class="empty-message">*This field is required.</span>
						<span class="error-message">*This is not a valid name.</span>
					</label>
					<label class="email">
						<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
						<span class="empty-message">*This field is required.</span>
						<span class="error-message">*This is not a valid email.</span>
					</label>
					<label class="phone">
						<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
						<span class="empty-message">*This field is required.</span>
						<span class="error-message">*This is not a valid phone.</span>
					</label>
					<label class="message">
						<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
						<span class="empty-message">*This field is required.</span>
						<span class="error-message">*The message is too short.</span>
					</label>
					<div>
						<div class="clear"></div>
						<div class="btns">
							<a href="#" data-type="reset" class="btn">Clear</a>
							<a href="#" data-type="submit" class="btn">Submit</a>
						</div>
					</div>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
@endsection