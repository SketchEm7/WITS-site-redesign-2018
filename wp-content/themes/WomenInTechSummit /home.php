<?php
/**
 *Template Name: Home
 * @package Elegant Themes
 * @subpackage Fable
 * 
*/
?>
<?php get_header(); ?>
	<section class="sec-container">
		
		<div class="banner banner-homepage">
			<div class="coloroverlay">
				<h1>Women In Tech Summit</h1>
				<h3>Educate.Inspire.Connect</h3>
			</div>
		</div>

		<div class="mission-stmt" style="width: 60%; margin: 30px auto; text-align: center;">
			<h2>Mission Statement</h2>
		    <h4>The Women in Tech Summit is a series of events that inspire, educate and connect women in the technology industry. Our mission is to support the community of women currently working in technology and to help pave the way for women and young women who want to enter the industry.</h4>
		</div>

		<div class="cta-primary">
			<h3>Is this conference for you? Take Our Test.</h3>
		</div>

		<div class="locations-all">
			<div class="row">
			<a href="/wits-northeast/">
			   <div class="col-md-6 location location-philly">
			   		<div class="coloroverlay">
			   			<div class="location-title">
			   				<h2>Philly</h2>
			   			</div>
			   		</div>
			   </div>
			</a>
			<a href="/wits-west/">
			   <div class="col-md-6 location location-denver">
			    	<div class="coloroverlay">
			    		<div class="location-title">
			    			<h2>Denver</h2>
			    		</div>
			    	</div>
			   </div>
			</a>
			</div>
			
			<div class="row">
			<a href="/wits-southeast/">
			   <div class="col-md-6 location location-raleigh">
			     	<div class="coloroverlay">
			     		<div class="location-title">
			     			<h2>Raleigh</h2>
			     		</div>
			     	</div>
			   </div>
			</a>
			<a href="/wits-mid-atlantic/">
			   <div class="col-md-6 location location-washington">
			     <div class="coloroverlay">
			     	<div class="location-title">
			     		<h2>Washington D.C</h2>
			     	</div>
			     </div>
			   </div>
			</a>
			</div>

			<div class="row">
			   <a href="/wits-south/">
				   <div class="col-md-6 location location-neworleans">
				     	<div class="coloroverlay">
				     		<div class="location-title">
				     			<h2>New Orleans</h2>
				     		</div>
				     	</div>
				   </div>
			   </a>
			   <a href="/wits-midwest/">
				   <div class="col-md-6 location location-chicago">
				    	<div class="coloroverlay">
				    		<div class="location-title">
				    			<h2>Chicago</h2>
				    		</div>
				    	</div>
				   </div>
			  </a>
			</div>
			
		</div>
		<div class="slider-wrapper">
			<div class="slider-testimony">
				
			</div>
			
		</div>
		<div class="slider-wrapper">
			<div class="slider-speakers">
				<?php echo do_shortcode('[metaslider id="2302" percentwidth=100]'); ?>
			</div>
		</div>
		<div class="stats">
			<div>
				<div class="stat col-md-4">
					<h4>Total Number of Speakers Booked</h4>
					<h2>400</h2>
				</div>
				<div class="stat col-md-4">
					<h4>Number of Cities We're In</h4>
					<h2>6</h2>
				</div>
				<div class="stat col-md-4">
					<h4>Total Number of Sessions Hosted</h4>
					<h2>140</h2>
				</div>
			</div>		
		</div>
		<div class="sponsors">
			<h2>Sponsors</h2>
				<div class="sponsors-logos">
					<div class="sponsor-logo">
						<img src="/wp-content/uploads/2017/02/Chariot-Solutions.jpg"/>
					</div>
					<div class="sponsor-logo">
						<img src="/wp-content/uploads/2017/02/Comcast.jpg"/>
					</div>
					<div class="sponsor-logo">
						<img src="/wp-content/uploads/2017/02/Salesforce.jpg"/>
					</div>
					<div class="sponsor-logo">
						<img src="/wp-content/uploads/2017/02/Metlife-1.jpg"/>
					</div>
				</div>
				<hr>
		</div>
		<div>
			<div>
				<h3><a>Join Our Mailing List</a></h3>
			</div>
		</div>
	</section> 	

<?php get_footer(); ?>