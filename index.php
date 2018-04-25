<?php include('include/header.php'); ?>

<style>
	.background {
		background-color: #f2f2f2;
	}

	.border {
		border-bottom: 1px solid #f2f2f2;
	}

	.padding-left {
		padding-left:  42px;
	}

	li {
		margin-bottom:  6px;
		word-break: break-word;
	}

	li:last-child {
		margin-bottom:  0;
	}
</style>

    <section class="section border">
        <div class="wrapper">
                <img src="https://www.jet2holidays.com/-/media/images/jet2holidays%20logo.png?h=140&w=556&la=en&hash=B7A73FC0F70BEFB70A1EC7C519473A20B2D6254A" class="logo" alt="">
    	</div>
	</section>

	<section class="section">
        <div class="wrapper">
			<h1 class="margin--bottom center">Jet2 Front End Developer - Assessment</h1>
			<p>The task is to complete a basket component using the designs below (the tablet design is as you see fit). <a href="Components/Booking/BasketSummary/index.php">Here</a> you can find a link to the basket.</p>
		</div>
	</section>
	 <section class="section background">
        <div class="wrapper">
				<h3>Running the build</h3>
				<ul class="padding-left">
					<li>You will need two terminal tabs open.</li>
					<li>In the project root run 'npm run build' which will run webpack and then initiate the gulp file. Once it is completed the server will start and CSS will be watched for changes.</li>
					<li>Again in the project root 'npm run watch' which will run webpack and then watch for JS files and hot reload on changes.</li>
				</ul>
		</div>
	</section>
	<section class="section">
        <div class="wrapper">
				<h3>SCSS</h3>

				<ul class="padding-left">
					<li>The sass file can be found here: Components/Booking/BasketSummary/sass/BasketSummary.scss.</li>
					<li>Mobile first build.</li>
					<li>Breakpoints: Mobile - <=767. Tablet - <=1024. Desktop - >1024.</li>
				</ul>
		</div>
	</section>
	<section class="section background">
        <div class="wrapper">
				<h3>JS</h3>

				<ul class="padding-left">
					<li>The JS file can be found here: Components/Booking/BasketSummary/js/basketSummary.js.</li>
					<li>Jquery is already included.</li>
				</ul>
		</div>
	</section>

	<section class="section">
        <div class="wrapper">
				<h3 class="margin--bottom">Desktop</h3>

				<ul class="padding-left">
					<li>The two baskets sit side by side on tablet and desktop and match each others height.</li>
					<li>Clicking the 'whats included' link within the main basket should close all the content below. Clicking it a second time should reveal the content.</li>
				</ul>

                <img src="desktop.png" alt="Desktop">

        </div>
    </section>
    <section class="section background">
        <div class="wrapper">
        	<h3 class="margin--bottom">Mobile</h3>
        	<ul class="padding-left">
					<li>The two baskets should stack on top of one another.</li>
					<li>The content can't be hidden with the 'what's included link.</li>
				</ul>
			<img src="mobile.png" alt="Mobile">
        </div>
    </section>
    <section class="section">
        <div class="wrapper">
        	<h3 class="margin--bottom">Once completed</h3>
        	<p>Commit your changes on a new branch called tech-test-submission. </p>
        </div>
    </section>
<?php include('include/footer.php'); ?>
