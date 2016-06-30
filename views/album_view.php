
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="album-name"> <?=$sedata[0]['name']?>
	    	<small class="pull-right album-data"> 
	    		<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?=$sedata[0]['date']?>
	    	</small> 
	    </h3>
	    <hr>
		 <p class="album-desc"><?=$sedata[0]['description']?></p>
	  </div>
	  <div class="panel-body">
	    <div class="row masonry-container">
	    <?php
	    foreach ($data as $key) {
	    	echo'
	    	<div class="col-md-3 item">
	    		<div class="thumbnail">
	    			<img data-toggle="modal" data-target="#img-'.$key['id'].'" src="'.$key['url'].'" alt="'.$key['name'].'" class="img-responsive img-rounded">
	    		</div>
	    	</div>';
	    };?>
	    </div>
	  </div>
	</div>
</div>

<!-- Modals -->
<?php 
foreach ($data as $key) {
	echo'
	<div class="modal fade" id="img-'.$key['id'].'" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      </div>
	      <div class="modal-body">
			<img class="img-responsive" src="'.$key['url'].'" alt="'.$key['name'].'">
	      </div>
	      <div class="modal-footer">
			<h5 class="pull-left">'.$key['name'].'</h5>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>';
};?>