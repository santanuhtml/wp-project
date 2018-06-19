<?php 
/*
Template Name: Contact
*/
get_header();
 ?>
<div class="page" style="background-image:url('<?php echo get_template_directory_uri(); ?>/main/img/page-background.jpg');">
<div class="container contact-page">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
			    <li><a href="#">Home</a></li>
			    <li class="active">Contact</li>        
			  </ol>

				<h1 class="title">CONTACT</h1>
				<div class="section-sm">
					<div class="row">
						<div class="col-md-5">
							<div class="basic-padding">
								<form class="contact-form" id="contact-form" method="post" action="mail/contact.js">
	                <div class="row">
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <input type="text" class="form-control" id="conName" name="name" placeholder="Your Name">
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <input type="text" class="form-control" id="conEmail" name="email" placeholder="Email">
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <input type="text" class="form-control" id="conPhone" name="phone" placeholder="Number">
	                    </div>
	                  </div>
	                  <div class="col-md-12">
	                    <div class="form-group">
	                      <textarea class="form-control" id="conMessage" rows="8" name="message" placeholder="Message"></textarea>
	                    </div>
	                  </div>
	                </div>
	                <input type="button" id="contact-form-submit" name="submit" value="Send Message" class="btn btn-secondary">
	              </form>

							</div>
						</div>
						<div class="col-md-7">
							<div class="basic-padding">
								<div class="col-md-12">
									<h3 class="title2">JALAN GROUP</h3>
								</div>
								<div class="col-md-6">
									<p>C/o-Jalan Food Products<br />
										Ranglal Jalan Road, Baralal Street,<br />
										Upper Bazar, Ranchi-834001,<br />
										Jharkhand (India)
									</p>
									<a class="map-btn btn btn-secondary" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.4642709081163!2d85.31664911416314!3d23.37141598477749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e104a810edc9%3A0x6b6b2a710416e7df!2sJALAN+GROUP!5e0!3m2!1sen!2sin!4v1522306182606" data-lity>View Map</a>
								</div>
								<div class="col-md-6">
									<p><span>Phone No</span>:<br /> 0651-2209029 / 0651-6888004<br /></p>
<p><span>Business Hour</span>:<br />  10AM To 6PM<br /></p>
<p><span>Email</span>:<br /> jalanfoodproduct@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
<style type="text/css">
	.page p {
    font-size: 16px;
    text-align: left;
    margin-bottom: 4px;
  }
  textarea.form-control {
    height: 100px;
	}
	.map-btn{
		margin-top: 10px;
	}
</style>

<?php 
get_footer();
 ?>
