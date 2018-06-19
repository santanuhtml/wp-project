<?php 
get_header(); ?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
    	<div class="error-page text-center">
    		<h2>404 <span>error</span></h2>
    		<br>
    		<h3>Page not found</h3>
    		<br>
    		<p>We are sorry but the page you are looking for does not exist. You may go 
    			<a href="<?php echo site_url(); ?>"><strong>here</strong></a>.</p>
    	</div>
    </div>
	</div>
</div>
<style type="text/css">
.error-page{
	padding: 120px 0px;
}
.error-page a{
	color: #2a024a;
}
.error-page h2{
	font-size: 100px;
	font-weight: 600;
}
.error-page h2 span{
	font-size: 50px;
	font-weight: 600;
}
.error-page h3{
	font-size: 40px;
	font-weight: 600;
}
</style>

<?php 
get_footer(); 
?>