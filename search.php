<?php include_once("header.php"); ?>


	    <section id="search-domain">
		    <div class="overlays">
		        <div class="container">
		        	<div class="row" id="push-input">
				        	<div class="dropdown" id="drop">
								    <p><strong>SELECT THE FIELD</strong></p><button class="btn btn-info btn-lg btn-set dropdown-toggle input-cls" type="button" data-toggle="dropdown" id="button-dropdown">SELECT<i class="fa fa-caret-down pull-right" aria-hidden="true"></i></button>
								    <ul class="dropdown-menu" id="drop-menu">
								      	<li><a href="#">ARTS</a></li>
								      	<li><a href="#">NEURO-SCIENCE</a></li>
								      	<li><a href="#">HISTORY</a></li>		
								      	<li><a href="#">QUIMISTRY</a></li>
								      	<li><a href="#">MATH</a></li>
								      	<li><a href="#">LITERATURE</a></li>
										<li><a href="#">MEDICINE</a></li>
								      	<li><a href="#">ASTRO-PHISICS</a></li>
								    </ul>
							</div>

			                <div class="dropdown" id="dropou" style="margin-top: 20px;">
			                        <p><strong>SELECT THE KEYWORD</strong></p><button class="btn btn-danger dropdown-toggle input-cl" type="button" data-toggle="dropdown" id="button-dropdown">SELECT<i class="fa fa-caret-down pull-right" aria-hidden="true"></i></button>
			                        <ul class="dropdown-menu" id="dropou-menu">
			                            <li><a href="#">QUIMISTRY</a></li>
			                            <li><a href="#">AÇÃO</a></li>
			                            <li><a href="#">BIOGRAFIA</a></li>      
			                            <li><a href="#">CONTRIBUIÇÃO</a></li>
			                            <li><a href="#">CITAÇÕES</a></li>
			                            <li><a href="#">HISTÓRICO</a></li>
			                            <li><a href="#">NOMEAÇÕES</a></li>
			                            <li><a href="#">PRESTÍGIO</a></li>
			                        </ul>
			                </div>  

						<a href="search.php"><button class="btn btn-primary" id="pesquisar01">SEARCH</button></a>


			               <!--<div class="col-md-4">
			                    <input type="button" class="btn btn-info btn-lg btn-set" value="PROCURAR GRAFO" />
		                </div> !-->
		            </div>    
		        </div>
		    </div>
	    </section> 

	    <section style="margin-top: 100px;">
	    	<div class="container" id="graph">
	            <h1 class="text-center" style="padding-top: 350px;">AQUI FICA O GRAFO</h1>
	        </div>

	    </section>    

		<section style="margin-top: 100px;" id="informations">
			<div class="container">
				<div class="row">
			        <div class="col-md-8">
		              	<h1>GRAPH</h1>
		            </div>
			         <div class="col-md-4" id="info-autores">
			            <h1>BEST AUTHOR</h1><i class="fa fa-star" id="star01"></i>
			            <hr class="hr-setup">
			            <a href="#" style="font-size: 26px" ><i class="fa fa-arrow-right"></i>RICHARD BANKS</a>
						<ul class="list-unstyled" style="margin-top: 15px;">
							<li><a href="#"><i class="fa fa-angle-double-right "></i>15 ARTICLES</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right "></i>50 QUOTS</a></li>
						</ul>
			        </div>
			    </div>    
	        </div>
	    </section>

	    <section id="articles-authors">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 text-center" id="available">
	    				<h1>30.000</h1>
	    				<small>Available Articles</small>
	    				<hr class="hr-ss">
	    			</div>
	    			<div class="col-md-3" style="margin-top: 20px; border-left: 2px solid #000;">
	    				<h3>AUTHOR</h3>
	    				<hr class="hrr">
	    				<ul class="list-unstyled">
	    					<li><a href="#">Alfreds Futterkiste</a></li>
	    					<li><a href="#">Centro comercial Moctezuma</a></li>
	    					<li><a href="#">Ernst Handel</a></li>
	    					<li><a href="#">Island Trading</a></li>
	    					<li><a href="#">Laughing Bacchus Winecellars</a></li>
	    					<li><a href="#">Magazzini Alimentari Riuniti</a></li>
	  					</ul>
	    			</div>
	    			<div class="col-md-3" style="margin-top: 20px; border-left: 2px solid #000;">
	    				<h3>ARTICLES</h3>
	    				<ul class="list-unstyled">
	    					<li><a href="#">Maria Anders</a></li>
	    					<li><a href="#">Francisco Chang</a></li>
	    					<li><a href="#">Roland Mendel</a></li>
	    					<li><a href="#">Helen Bennett</a></li>
	    					<li><a href="#">Yoshi Tannamuri</a></li>
	    					<li><a href="#">Giovanni Rovelli</a></li>
	  					</ul>
	    			</div>
	    		</div>
	    	</div>
	    	
	    </section>

		<section id="labels" style="margin-top: 50px; margin-bottom: 100px;">
			<div class="container text-center">
				<a href="#"><span class="label label-default"  id="la-1">KEYWORD 1</span></a>
				<a href="#"><span class="label label-primary" id="lab-02">KEYWORD 2</span></a>
				<a href="#"><span class="label label-success" id="lab-03">KEYWORD 3</span></a>
				<a href="#"><span class="label label-info" id="lab-04">KEYWORD 4</span></a>
				<a href="#"><span class="label label-warning" id="lab-05">KEYWORD 5</span></a>
				<a href="#"><span class="label label-danger" id="lab-06">KEYWORD 6</span></a>
			</div>
		</section>



<?php include_once("footer.php"); ?>