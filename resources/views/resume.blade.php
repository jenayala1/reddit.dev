@extends('layouts.master')

@section('title')

	<head>
		<title>Resume </title>
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="css/jen-personal.css" rel="stylesheet">
		<title>Resume</title>
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
		<header>
			<div class="header1"> Jennifer Ayala </div>
				<div class="headerd"> CONTACT #
				 	<a href="tel:+2104592396"> 210-459-2396 </a>
				</div>
				<div class="headerd"> EMAIL:
					 <a href="mailto:jenayala1@gmail.com"> jenayala1@gmail.com </a>
				</div>
				<div class="headerd"> LINKEDIN:
					<a href="https://www.linkedin.com/in/jennifer-ayala-sa">  jennifer-ayala-sa </a>
				</div>
			</div>
			<br>
		</header>
		<div id="main">
			<div class="section-header"> SUMMARY </div>
					<div class="summary">INDUSTRIOUS LEADERSHIP</div>
					<div class="row-summary">
					Leading process improvement through active participation and effective strategy: Business Process Development, Builder of Dynamic Teams & Innovative Leaders, Change Management Champion, Process Improvement Driver, and Ethical Problem-Solver.
					</div>
					<br>
					<div class="summary">TECHNICAL & CREATIVE WRITER</div>
					<div class="row-summary">
					Mastering the flexibility to transition writing style between technical, creative, and content-based documents: procedural manuals, copywriting/editing, reporting, proposals, presentations, performance reviews, essays, and business continuity plans.
					</div>
			<br>
			<div class="section-header">WORK EXPERIENCE</div>
				<main class="work">
					<div class="row-company"> MISSION SOLAR ENERGY, LLC </div>
							<div class="column-job-title">Production Control Supervisor</div>
							<div class="column-date-range">June 2014 - March 2017</div>
							<div class="column-description">Defined and built the company document management infrastructure encompassing the development, collection, organization, and distribution of process documents, data, reports, audits, and records. Created standards for retention repositories, relocation practices, and destruction policies following SOX compliance guidelines. Collaborated development of warehouse inventory procedures and strategies to facilitate accurate inventory transactions, utilizing diverse and innovative approaches. Prepared, maintain & qualify product and shipping documentation for customer sales. Investigated and resolved Bill of Material issues, work order transaction discrepancies, and procedural problems with raw materials, finished goods, and equipment parts.
							</div>
							<ul class="column-accomplishments">
								<li> Constructed the business requirements for development of a Warehouse Management System, estimated 30% increased efficiency for inventory control </li>
								<li> Created tools to improve the accuracy and time for inventory count of solar cells, decreasing count time from 4-6 hours down to 1-2 hours, recount frequency reduced from 6 occurrences to maximum of 2 occurrences </li>
								<li> Implemented methods to move process document release process to electronic submission with digital signatures, reducing the paper waste by 40% and improving benchmark from 72 hours to less than 24 hours
							</ul>
					</div>
					<br>
					 <div class="row-company"> GETWIRED NETWORKS </div>
							<div class="column-job-title"> Office Manager</div>
							<div class="column-date-range">May 2008 - May 2013 </div>
							<div class="column-description">Provided administrative support for small business clientele by developing business practices and documents to standardize procedures and established organizational structure; built marketing strategies; managed projects; product research, development, and implementation
					</div>
					<br>
					<div class="row-company"> VERIZON (formerly WorldCom) </div>
							<div class="column-job-title"> Manager </div>
							<div class="column-date-range"> November 1998 - July 2008</div>
							<div class="column-description">Domestic and international operations for Order Management production and technical support functions. Led corporate initiatives transitioning functions from San Antonio to multiple centers in Manila, Philippines. Trained management and agent staff, while maintaining responsibilities of all teams consisting of 69 international/26 domestic production and management employees.
							</div>
							<ul class="column-accomplishments">
								<li> Re-designed team structure into a “One-Stop-Shop,” integrating multiple functions into one group
									⊕ Reduced order intervals from 30 days to 10 days
									⊕ Reduced expedite fees by 30%
									⊕ Established Letter of Confirmation process, defined expectations and written confirmation of order details </li>
								<li> Implemented a 30-day trial revenue recovery initiative, setting the foundation for development of a network revenu recovery team
									⊕ Network savings of $205,185
									⊕ Increased revenue $31,574
									⊕ Zero impact on production performance and no overtime expense</li>
								<li>2007 – 2008 Management Representative – Verizon Late Disconnect Task Force</li>
								<li> Developed system requirements of billing and order entry systems, resolving two years backlog</li>
								<li> Redefined expectations of internal customers & partners, through process development, reducing order assignment interval from 72 hrs to 24 hrs </li>
							</ul>
				</main>
			<br>
				<section class="skills">
					<div class="section-header"> SKILLS/ QUALIFICATIONS </div>
						<ul>
								<li> HTML, CSS, Javascript </li>
								<li> Lamp Stack </li>
								<li> Microsoft Access </li>
								<li> Microsfoft Word </li>
								<li> Microsoft Visio </li>
								<li> Microsoft Excel </li>
								<li> Project Management</li>
								<li> Technical Writing </li>
								<li> Inventory Control </li>
								<li> Warehouse Shipping & Receiving</li>
								<li> Process Development & Documentation</li>
								<li> Record Retention Management </li>
						</ul>
				</section>
			<br>
			<section class="addex">
				<div class="section-header"> ADDITIONAL EXPERIENCE </div>
					<div class="row-company"> CARING SOLUTIONS</div>
								<div class="column-job-title">Caregiver</div>
								<div class="column-date-range">May 2014 - July 2015</div>
								<div class="column-description">Provide in home non-medical care to seniors and individuals dealing with long and short-term injury or illness who need support to remain in their homes. Offered companionship, assisted with ambulation/mobility, medication reminders, light housekeeping, meal preparation, hygiene and toilet use.</div>
					</div>
					<div class="row-company"> TekWorx Tools </div>
								<div class="column-job-title">Marketing Consultant</div>
								<div class="column-date-range"> November 2011 - May 2013</div>
								<div class="column-description">Manage office operations for technical and production support functions. Develop and maintain standard policies and operating procedures for all functions. Develop and manage marketing campaign, product registration through GS1 and online product sales</div>
					</div>
				</div>
			</section>
			<br>
			<!-- <section class="awards">
				<div class="section-header"> AWARDS & CERTIFICATIONS </div>
					<ul>
						<li> #1 - DATE, EVENT, COMPANY </li>
						<li> #2 - DATE, EVENT, COMPANY </li>
						<li> #3 - DATE, EVENT, COMPANY </li>
					</ul>
				</div>
			</section> -->
		</div>
		<br>
		<div class="section-header"> TRAINING </div>
			<div class="row-company"> Codeup </div>
				<div class="column-job-title"> LAMP Stack +Javascript Bootcamp </div>
					<div class="column-date-range"> June 2017 - Sepetember 2017 </div>
					<div class="column-description"> 16 week career accelerator program, developing proficiency in PHP + JavaScript + Laravel + jQuery. Plus, exposure to MySQL, Linux, nginx, and cloud deployments </div>
		<br>
		<div> Request References </div> <button type="submit" style="vertical-align:left"> <a href="CONTACT" target="_blank">CONTACT</a><span="Hover"</span></button>
		<br>
		</div>

 		<script src="js/jquery-3.2.1.js"></script>
 		<script type="text/javascript"></script>
		<script src="js/ja-js.js"></script>
	</body>
	<br>
	<footer>
		<hr>
		<div class="footer"> [Links Placeholder - OTHER SOCIAL MEDIA ICONS] </div>
		<div id="linkedin" a href="https://www.linkedin.com/in/jennifer-ayala-sa/" target="_blank">LinkedIn </a>
		</div>
	</footer>

@stop
