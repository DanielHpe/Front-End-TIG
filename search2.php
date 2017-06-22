<?php include_once("header.php"); ?>


<section class="container-fluid" id="search-domain">
	<div class="overlays">
			<div class="container ">
				<div class="dropdown bloco1" id="drop">
						<p><strong>SELECT THE FIELD</strong></p>
						<button class="btn btn-info  dropdown-toggle" type="button" data-toggle="dropdown" id="button-dropdown">SELECT<i class="fa fa-caret-down pull-right" aria-hidden="true"></i></button>
						
							<ul class="dropdown-menu" id="drop">
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
			</div>
			<div class="container">
					<div class="dropdown bloco2" id="dropou">
							<p><strong>SELECT THE KEYWORD</strong></p>
							<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" id="button-dropdown">SELECT<i class="fa fa-caret-down pull-right" aria-hidden="true"></i></button>
							<ul class="dropdown-menu" id="dropou">
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
			</div> 
			
				  
			<div class="container bloco3">
				<a href="#pesquisar1" id="anime-pesq"><button class=" btn btn-primary" type="button">SEARCH</button></a>
			</div>
	</div>    
</section> 

<section id="pesquisar1"  href="#anime-pesq"></section>
	    
		<!--<section class="grafo">
					<div class="container-fluid">
						<div class="container-fluid">
							<div class="col-md-7 teste" id="graph">
								<h1 class="text-center">AQUI FICA O GRAFO</h1>
							</div>

							<div class="col-md-5">
								Teste
							</div>
						
							<div class="row-fluid grafico">
								<h2>GRAPHIC</h2>
								 <hr class="hr-setup">
							</div>
						
							<div class="row-fluid best-autor" >
								<h2>BEST AUTHORS</h2>
								 <hr class="hr-setup">
							</div>
						</div>
					</div>
		</section>!-->

		<section class="grafo">
			<div class="container">
				<div class="row">
					<div class="col-md-7" id="graph" style="margin-right: 10px;">
						<h1 class="text-center">AQUI FICA O GRAFO</h1>
					</div>
					<div class="col-md-4 info-node-xs">
						<h1>STATS</h1>
						<hr class="hr-setup">
						<h3>Author Name: </h3>
						<h3>ID Author: </h3>
						<h3>Nº. Quots: </h3>
						<h3>Nº. Articles: </h3>
						<h3>Relevancy: </h3>
					</div>
				</div>
			</div>
		</section>	


		<section style="margin-top: 100px;" id="informations">
			<div class="container">
				<div class="row">
			        <div class="col-md-8">
		              	<h1>GRAPHIC</h1>
		              	<hr class="hr-setup1">
		            </div>
			         <div class="col-md-4" id="info-autores">
			            <h1>BEST AUTHOR</h1>
			            <hr>
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
	    			<div class="col-md-3 col-author-xs autor">
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
	    			<div class="col-md-3 col-articles-xs artigo">
	    				<h3>ARTICLES</h3>
	    				<hr class="hrr">
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
	<section class="container keyword">
		<section id="labels">
			<div class="container text-center">
				<a href="#"><span class="label label-default"  id="la-1">KEYWORD 1</span></a>
				<a href="#"><span class="label label-primary" id="lab-02">KEYWORD 2</span></a>
				<a href="#"><span class="label label-success" id="lab-03">KEYWORD 3</span></a>
				<a href="#"><span class="label label-info" id="lab-04">KEYWORD 4</span></a>
				<a href="#"><span class="label label-warning" id="lab-05">KEYWORD 5</span></a>
				<a href="#"><span class="label label-danger" id="lab-06">KEYWORD 6</span></a>
			</div>
		</section>
	</section>
<?php include_once("footer.php"); ?>