<?php include_once('./components/head.php'); ?>
  <body class="text-center">

    <div class="container  w-200 h-300 p-3  ">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Book Cover Designer</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
          </nav>
        </div>
      </header>


    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Welcome to the Book Cover Designer</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-20">
          <h4 class="d-flex justify-content-between align-items-center mb-6">
            <span class="text-muted">Design Parameters</span>
            <span class="badge badge-secondary badge-pill">6</span>
          </h4>
		  
		  
		  
          <ul class="list-group mb-2">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
                <label class="text-muted"for="BookTitle">Book Title</label>
                <input type="text" class="form-control" id="BookTitle" placeholder="Book Title" value="" required>
	             </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="BookSubtitle">Book Subtitle</label>
                <input type="text" class="form-control" id="BookSubtitle" placeholder="Book Subtitle" value="" required>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="AuthorName">Author Name</label>
                <input type="text" class="form-control" id="AuthorName" placeholder="Author Name" value="" required>
               </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="PublisherName">Publisher</label>
                <input type="text" class="form-control" id="PublisherName" placeholder="Publisher" value="" required>
               </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="Background-Color">Background Color</label>
                <select id="Background-Color" class="form-control">
				<option selected>Black</option>
                 <option>White</option>
				 <option>Red</option>
				 <option>Green</option>
				 <option>Yellow</option>
				 <option>Blue</option>
				 <option>Pink</option>
				 <option>Grey</option>
				 <option>Brown</option>
				 <option>Orange</option>
				 </select>
               </div>
            </li>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="Color">Text Color</label>
                <select id="Color" class="form-control">
				<option selected>Black</option>
                 <option>White</option>
				 <option>Red</option>
				 <option>Green</option>
				 <option>Yellow</option>
				 <option>Blue</option>
				 <option>Pink</option>
				 <option>Grey</option>
				 <option>Brown</option>
				 <option>Orange</option>
				 <option>Purple</option>
                 </select>
               </div>
            </li>
			
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div class="form-group col-md-8">
               <label class="text-muted" for="Publishing-Year">Publishing Year</label>
                <select id="Publishing-Year" class="form-control">
				<option selected>2018</option>
                 <option>2017</option>
				 <option>2016</option>
				 <option>2015</option>
				 <option>2014</option>
				 <option>2013</option>
				 <option>2012</option>
				 <option>2011</option>
				 <option>2010</option>
				 <option>2009</option>
				 <option>2008</option>
				 <option>2007</option>
				 <option>2006</option>
				 <option>2005</option>
				 <option>2004</option>
				 <option>2003</option>
				 <option>2002</option>
				 <option>2001</option>
				 <option>2000</option>
		         
                </select>
               </div>
            </li>
          </ul>
		  <div class="input-group-append">
                <button id="sub"  class="btn btn-secondary">Design</button>
              </div>
		
		  
	
            <hr class="mb-4">

           </div>
		   
	 
        <div class="col-md-8 order-md-1">
          
            <div class="row">
              <div class="col-md-9 mb-6">
                <h4 style='text-align:right;'>The Proposed Design </h4>
				<p> </p>
				
                <div style='border-radius: 30px; padding:20px 20px 20px 20px; border: 3px solid Black; width:700px; height:800px; background-color:white;'>
                <h4 style='color:black;'>Design Area</h4>
                <div style=' padding:20px 20px 20px 20px; margin: 20px 20px 20px 55px; border: 0px solid white; width:550px; height:700px; background-color:orange;' id="bookcover">
				<h2 style='color:black;padding:50px 20px 20px 20px;' id="title">BOOK TITLE</h2>
				<p> </p>
				<h3 style='color:black;padding:50px 20px 20px 20px;' id="subtitle">BOOK SUBTITLE</h3>
				<p> </p>
				<h3 style='color:black;padding:50px 20px 20px 20px;' id="author">AUTHOR</h3>
				<p> </p>
				<h3 style='color:black;padding:50px 20px 20px 20px;' id="publisher">PUBLISHER</h3>
				<p> </p>
				<h3 style='color:black;padding:50px 20px 20px 20px;' id="year">YEAR</h3>
                </div>
				</div>
    </div>

   </body>
	   

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script src="./js/jquery.min.js">
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	
	
    
    
  </body>
</html>
