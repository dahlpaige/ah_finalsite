<?php include_once "includes/html_top.php"; ?>
<?php include_once "includes/functions.php"; ?>
<?php include_once "includes/header.php"; ?>

<!----- Facebook Plugin ----->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

</script>

<!----- SECTION ----->
<section>
	<!-- row 1 -->
	<div class="row">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/bike2.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/racing2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/swim4.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div>
		<img class="static" src="images/racing2.jpg">
		</div>
	</div>
	<!-- /row 1 -->
</section>
<!----- END ----->

<!----- SECTION ----->
<section>
	<!-- row 1 -->
	<div class="row">
		<h3>About Ace in the Hole Multisport Events</h3>
		<p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
		<p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. </p>
		<p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
	</div>
	<!-- /row 1 -->
</section>
<!----- END ----->

<!----- SECTION ----->
<section>
	<div class="row">

		<div class="col">
			<a class="twitter-timeline" data-width="500" data-height="300" data-link-color="#E81C4F" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

		<!----- Facebook Plugin ----->
		<div id="facebook-page-plugin" class="col" style="width: 100%" data-fb-page-id="206473443149718">
    <div class="fb-page col" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-width="500" data-hide-cover="true" data-show-facepile="false">
			<blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
		</div>
</div>
		<!-- Script to calculate new width when the window resizes -->
<script>
$(document).ready(function() {
    var $facebookPage       = $('#facebook-page-plugin');
    var facebookPageId      = $facebookPage.attr('data-fb-page-id');
    var facebookPageWidth   = $facebookPage.width();
    var facebookPageContent = '<div class="fb-page" data-href="https://www.facebook.com/'+facebookPageId+'" data-tabs="timeline" data-width="'+facebookPageWidth+'" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>';

    $(window).resize(function() {
        $facebookPage.empty();
        $facebookPage.html(facebookPageContent);
        FB.XFBML.parse();
    });
});
</script>	
		<!----- Facebook End ----->

	</div>

</section>
<!----- END ----->

<?php include_once "includes/footer.php"; ?>
