<?php

class Model_Admin extends Model {

	public function upload_photo($id = null) {
		 $stmt = Model::$db->prepare("INSERT INTO photos (name, url, album_id) VALUES (:name, :url, :album_id)");
		foreach ($_FILES["userfile"]["error"] as $key => $error) {

		    if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $_FILES["userfile"]["tmp_name"][$key];

		        if ($_POST['photo_name'][$key] != null) {
		        	$name = $_POST['photo_name'][$key].'.'.substr($_FILES["userfile"]["type"][$key], 6);;
		        }else{
		        	$name = $_FILES["userfile"]["name"][$key];
		        }
		        
		        if(!file_exists("staticfiles/img/album_$id/")){
		        	// ПРоблема с правами.
			        mkdir("staticfiles/img/album_$id/", 0777);
			        chmod("staticfiles/img/album_$id/", 0777);
		        }

		        $url = "/staticfiles/img/album_$id/$name";

		        move_uploaded_file($tmp_name, "staticfiles/img/album_$id/$name");

		        $stmt->bindParam(':name', $name);
		        $stmt->bindParam(':url', $url);
		        $stmt->bindParam(':album_id', $id);
		        $stmt->execute();
		        

		    }else{
		    	return "Ошибка при загрузке фото";
		    }

		}		
	}
	public function get_albums() {

		$stmt = Model::$db->prepare("SELECT * FROM sort");
		$stmt->execute();
		$album_sort = $stmt->fetch(PDO::FETCH_ASSOC);

		//Тут можно допилить свитчкейсами
		if ($album_sort['album_sort'] == 'nameup') {
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY name");
		}elseif ($album_sort['album_sort'] == 'namedown') {
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY date DESC");
		}elseif ($album_sort['album_sort'] == 'dateup'){
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY date");
		}elseif($album_sort['album_sort'] == 'datedown'){
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY date DESC");
		}else{
			$stmt = Model::$db->prepare("SELECT * FROM albums");
		}

		$stmt->execute();
		$albums = $stmt->fetchall(PDO::FETCH_ASSOC);

		$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :id");

		foreach ($albums as $key => $value) {

			$stmt->bindValue(':id', $albums[$key]['id']);
			$stmt->execute();
			$row[$key] = $stmt->rowCount();
			$album_photo[$key] = $stmt->fetch(PDO::FETCH_ASSOC);

			foreach ($albums as $key => $value) {
				//Закостылим
				if (@$album_photo[$key]['url'] == null){
					$albums[$key]['url'] = 'http://placehold.it/640x480/e67e22/ffffff&text=NO_IMAGES';
				}else{
					$albums[$key]['url'] = $album_photo[$key]['url'];
				}
				//Закостылим x2
					@$albums[$key]['count'] = $row[$key];
			}
		}


		// Запилим сортировку по массиву, в будущем отказался т.к. сотртировать через SQL удобнее.
			// if ($sort == "namea") {
			// 	usort($albums, function($a, $b){
			// 	return ($a['name'] - $b['name']);});
			// }elseif($sort == "namez"){
			// 	usort($albums, function($a, $b)
			// {
			// 	return ($b['name'] - $a['name']);
			// });
			// }


		return $albums;

	}

	public function add_album() {

		$name = $_POST['album-name'];
		$desc = $_POST['album-description'];
		if ($_POST['album-date'] == null) {
			$_POST['album-date'] = date("Y-m-d");
		}else{
			$date = $_POST['album-date'];
		}
		if($name != null){
			$stmt = Model::$db->prepare("INSERT INTO albums (name, description, date) VALUES (:name, :descr, :date)");
			$stmt->bindParam(':name', $name, PDO::PARAM_STR);
			$stmt->bindParam(':descr', $desc, PDO::PARAM_STR);
			$stmt->bindParam(':date', $date, PDO::PARAM_STR);
			$stmt->execute();
		}else{
			return false;
		}
	}

	public function delete_album($id = null) {

			$stmt = Model::$db->prepare("DELETE FROM albums WHERE id = :id");
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			// В будущем допинать удаление каталогов
			$path = "staticfiles/img/album_$id";

				if (is_file($path)) {
			    	@unlink($path);
			    } else {
			        array_map('removeDir',glob('/*')) == @rmdir($path);
			    }
			    @rmdir($path);
	}

	public function login()
	{
		@$login = $_POST['login'];
		@$pass = $_POST['password'];

		if ($login == LOGIN && $pass == PASSWORD){
			$_SESSION['login'] = 'on';
			return true;
		}else{
			return false;
		}
	}

	public function logout()
	{
		unset($_SESSION['login']);
		session_destroy();
	}

	public function change_sort_albums($sort = null)
	{
		$stmt = Model::$db->prepare("UPDATE sort SET album_sort = :sort");
		$stmt->bindParam(':sort', $sort);
		$stmt->execute();
	}

	public function change_sort_photos($sort = null)
	{
		$stmt = Model::$db->prepare("UPDATE sort SET photo_sort = :sort");
		$stmt->bindParam(':sort', $sort);
		$stmt->execute();
	}
}