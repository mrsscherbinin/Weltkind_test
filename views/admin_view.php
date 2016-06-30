<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">Cортировать</div>
	  <div class="panel-body">
	  	<div class="btn-group">
		  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Сортировка альбомов: <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="/admin/albumssort/nameup">По имени a => z</a></li>
		    <li><a href="/admin/albumssort/namedown">По имени z => a</a></li>
		    <li><a href="/admin/albumssort/dateup">По дате, старые => новые</a></li>
		    <li><a href="/admin/albumssort/datedown">По дате, новые => старые</a></li>
		  </ul>
		</div>
		<div class="btn-group">
		  <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Сортировка фотографий: <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="/admin/photossort/nameup">По имени a => z</a></li>
		    <li><a href="/admin/photossort/namedown">По имени z => a</a></li>
		    <li><a href="/admin/photossort/idup">По id, старые => новые</a></li>
		    <li><a href="/admin/photossort/iddown">По id, новые => старые</a></li>
		  </ul>
		</div>
	  </div>
	</div>
	<hr>
	<div class="container">
	<h3>Создать новый альбом</h3>
		<form class="form-inline" method="POST" action="/admin/add">
		  <div class="form-group">
		    <label for="album-name">Название альбома: </label>
		    <input type="text" class="form-control" name="album-name" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="album-description">Описание альбома: </label>
		    <input type="text" class="form-control" name="album-description" placeholder="">
		  </div>
		  <div class="form-group">
		    <label for="album-description">Дата создания: </label>
		    <input type="date" class="form-control" name="album-date" placeholder="">
		  </div>

		  <button type="submit" class="btn btn-default">Создать альбом</button>
		</form>
	</div>
	<hr>
	<?php 
	foreach ($data as $key) {
		echo '
  		<div class="admin_album">
      		<div class="media">
		      	<a class="pull-left" href="/index/album/'.$key['id'].'">
		      	<div class="img_container">
		    		<img class="img-thumbnail" src="'.$key['url'].'">
		      	</div>
		  		</a>
		  		<div class="media-body">
		    		<a class="btn btn-danger pull-right" href="/admin/delete/'.$key['id'].'" role="button"><span class="glyphicon glyphicon-remove"></span></a>

		    		<h4 class="media-heading"><a href="/index/album/'.$key['id'].'">'.$key['name'].'</a></h4>
		    		<hr>
		          <p>'.$key['description'].'</p>

		          <ul class="list-inline list-unstyled prijat">
		  			<li>Дата создания: '.$key['date'].'</li>
		            <li>|</li>
		            <li>Фотографий в альбоме:   <span class="badge">'.$key['count'].'</span></li>
		            <li>|</li>
		            <li class="show_upphoto" id="field_'.$key['id'].'"><button type="button" class="btn btn-default btn-sm" aria-label="Left Align">Добавить фото в альбом <span class="glyphicon glyphicon-save" aria-hidden="true"></span></button></li>
					</ul>
			     <div class="control-group upphoto" id="for_field_'.$key['id'].'">
			     	<label class="control-label" for="field1">Добавление фото в Альбом</label>
			            <div class="controls"> 
			                <form id="photo_form_'.$key['id'].'" action="/admin/upload/'.$key['id'].'" method="POST" enctype="multipart/form-data" role="form">
			                    <div class="entry input-group input-group-sm">
			                        <input class="form-control" name="photo_name[]" type="text" placeholder="Название фотографии" />
			                        <input class="form-control file" name="userfile[]" type="file"/>
			                    	<span class="input-group-btn">

			                            <button class="btn btn-success btn-add" type="button" id="form_'.$key['id'].'">
			                               Добавить Еще
			                            </button>
			                        </span>
			                    </div>
			                </form>
			                <button type="submit" class="btn btn-info" form="photo_form_'.$key['id'].'">Загрузить фото в Альбом</button>
			            </div>
				</div>
		       	</div>
		    </div>
		  </div>';
	};?>
</div>
