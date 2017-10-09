<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
@extends('layouts.master')

@section('title')
     @include('layouts.partials._navbar')
    <title>Jennifer Ayala</title>
        <head>
            <style>
                html, body {
                    height: 100%;
                }
                body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    display: table;
                    font-weight: 100;
                    font-family: 'Lato';
                    color: black;
                }

                .text {
                    color: black;
                    font-size: 18px;
                    padding: 20px;
                    font-family: "play";
                }
                .text2 {
                    color: black;
                    font-size: 14px;
                    padding: 20px;
                    font-family: "play";
                }
                .section-header2{
                    color: black;
                    font-weight: bold;
                    font-size: 22px;
                    font-family: 'Lato';
                    text-align: center;
                    padding-bottom: 20px;
                }
                .container {
                    text-align: left;
                    vertical-align: middle;
                    color: black;
                }
                .box {
                    color: black;
                }
                .col-lg-3{
                    margin-right: 50px;
                    padding-left: 40px;
                    margin-bottom: 40px;
                    color: black;
                }
                .content {
                    text-align: left;
                    display: inline-block;
                    color: black;
                }
                .title {
                    font-size: 96px;
                    padding: 20px;
                }
                h4 {
                    padding: 20px;
                }
                .thumbnail {
                    padding: 20px;
                    color: black;
                    font-size: 14px;
                }
            </style>
        </head>
    @stop
    @section('content')
    <body>
        <div class="container">
            <div class="content">
                <!-- <?php if(isset($fullName)): ?>
                    <div class="title">Hi, <?= $fullName ?>!</div>
                <?php else :?>
                    <div class="title">Hello, World!</div>
                <?php endif; ?> -->
    		<br>
    		<div class="bioimg"></div>
    			<section class="box" id="myservices">
    				<h2 text align="center"> WELCOME! </h2>
                    <br>
    				<div class="text"> I have a diverse background in organizational leadership, service, IT, and creative arts with one common theme, development.  Please check out my social sites and projects to see if my skills can serve your needs. </div>
                    <br>
                    <br>
            	</section>
    		</div>
            <br>
    		<div class="row">
    			<div class="col-lg-3">
    				<section class="box" id="software">
    					<div class="section-header2"> Software Development </div>
    					<div class="text">Trained & proficient in HTML, CSS, JavaScript, MySQL, PHP, & Laravel. </div>
    						<h4> [PROJECT] </h4>
    						<a href="#" class="thumbnail">[PROJECT PREVIEW PLACEHOLDER] <img src="/img/retro-microphone.jpg" alt="Image Placeholder">
    						</a>
    					<div class="text2" id="sdprojects"> Click for more info (placeholder)</div>
    				</section>
    			</div>
    			<div class="col-lg-3">
    				<section class="box" id="technical">
    					<div class="section-header2"> Technical Writing </div>
    					<div class="text"> Over 15 years experience creating and writing operating procedures, handbooks, forms, reports, software development business requirements, policies, and many other documents in multiple writing styles (AP, Chicago, etc)</div>
    						<h4> [EXAMPLE PREVIEW PLACEHOLDER] </h4>
    						<a href="#" class="thumbnail">[PROJECT PREVIEW PLACEHOLDER] <img src="/img/technology-background.jpg" alt="Image Placeholder">
    						</a>
    					<div class="text2" id="twprojects"> Click for more info (placeholder)</div>
    				</section>
    			</div>
                <div class="col-lg-3">
            		<section class="box" id="creative">
            			<div class="section-header2"> Creative Writing </div>
            				<div class="text"> Copy editing, proof-reading, manuscript writing, blogs, articles, newsletters, and more!</div>
            					<div class="text2" id="imdb"> Check out projects on IMDB</div>
            					<a href="#" class="thumbnail">[PROJECT PREVIEW PLACEHOLDER] <img src="/img/bouquet-of-plumeria-flowers.jpg" alt="Image Placeholder">
            					</a>
            				<div class="text2" id="cwprojects"> Click for more info (placeholder)</div>
            		</section>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3">
            		<section class="box" id="process">
            			<div class="section-header2"> Process Development </div>
            				<div class="text"> Business structure and process in multiple life cycles of an organization: established corporations in need of an overhaul, leadership transitions, outsourcing & start-up phase.</div>
            				<div> [PROJECT EXAMPLES] </div>
            				<a href="#" class="thumbnail">[PROJECT PREVIEW PLACEHOLDER] <img src="/img/tulips.jpg" alt="Image Placeholder">
            				</a>
            				<div class="text2" id="processexamples"> Click for more info (placeholder)</div>
            		</section>
                </div>
                <div class="col-lg-3">
            		<section class="box" id="mgmtconsult">
            			<div class="section-header2"> Management Consulting </div>
            				<div class="text"> Company growth through performance management from entry level to executive leadership.  Identifying obstacles, driving company objectives and values through individual and team benchmarks. </div>
            				<div> [PROJECT EXAMPLES] </div>
            				<a href="#" class="thumbnail">[PROJECT PREVIEW PLACEHOLDER] <img src="/img/abstract-summer-background.png" alt="Image Placeholder">
            				</a>
            				<div class="text2" id="mgmtmoreinfo"> Click for more info (placeholder)</div>
            		</section>
                </div>
            </div>
    		<br>
    		<div class="text2" > Questions or interested in reviewing more work?  Contact me! </div>
    		<div>
    			<button class="button" style="vertical-align:left">
    		<a href="CONTACT" target="_blank">CONTACT</a><span="Hover" </span></button>
    		</div>
    		<br>

    	<hr>
    	<footer>
    		<div class="footer"> [Links Placeholder - OTHER SOCIAL MEDIA ICONS] </div>
    		<div id="linkedin" a href="https://www.linkedin.com/in/jennifer-ayala-sa/" target="_blank">LinkedIn </a>
    		</div>
    	</footer>
                <!-- <form method="POST" action="/">
                    <input type="text" name="name" placeholder="Input your name">
                    <button type="submit">Submit</button>
                </form> -->
            </div>
        </div>
        <script src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript"></script>
        <script src="js/ja-js.js"></script>
    </body>
@stop
