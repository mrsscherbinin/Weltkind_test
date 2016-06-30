<?php

class Model_Index extends Model
{
	public function get_albums($page = null)
	{
		$stmt = Model::$db->prepare("SELECT * FROM sort");
		$stmt->execute();
		$album_sort = $stmt->fetch(PDO::FETCH_ASSOC);

		//Тут можно допилить свитчкейсами
		if ($album_sort['album_sort'] == 'nameup') {
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY name LIMIT  :skip, :start");
		}elseif ($album_sort['album_sort'] == 'namedown') {
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY name DESC LIMIT :skip, :start");
		}elseif ($album_sort['album_sort'] == 'dateup'){
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY date LIMIT :skip, :start");
		}elseif($album_sort['album_sort'] == 'datedown'){
			$stmt = Model::$db->prepare("SELECT * FROM albums ORDER BY date DESC LIMIT :skip, :start");
		}else{
			$stmt = Model::$db->prepare("SELECT * FROM albums LIMIT :skip, :start");
		}

		if($page == null || $page == 1){
			$skip = 0;
			$start = 12;
		}else{
			$skip =  12 * ($page - 1);
			$start = $skip + 12;
		}

		// $stmt = Model::$db->prepare("SELECT * FROM albums LIMIT :skip, :start");
		$stmt->bindValue(':skip', $skip, PDO::PARAM_INT);
		$stmt->bindValue(':start', $start, PDO::PARAM_INT);
		$stmt->execute();
		$albums = $stmt->fetchall(PDO::FETCH_ASSOC);

		$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :id");

		foreach ($albums as $key => $value) {

			$stmt->bindValue(':id', $albums[$key]['id']);
			$stmt->execute();
			$album_photo[$key] = $stmt->fetch(PDO::FETCH_ASSOC);

			foreach ($albums as $key => $value) {
				//Закостылим
				if (@$album_photo[$key]['url'] == null){
					$albums[$key]['url'] = 'http://placehold.it/640x480/e67e22/ffffff&text=NO_IMAGES';
				}else{
					$albums[$key]['url'] = $album_photo[$key]['url'];
				}
			}
		}
		
		return $albums;
		// return array($skip, $start);
	}

	public function get_paginations($page = null)
	{
		$stmt = Model::$db->prepare("SELECT * FROM albums");
		$stmt->execute();
		$Count = ceil($stmt->rowCount() / 12);

		// Небольшой костыль
		if ($page == null) {
			$page = 1;
		}

		return array(
			'count' => $Count,
			'curr_page' => $page,
			'prev' => $page - 1,
			'next' => $page + 1
			);
	}

	public function get_album($id = null)
	{
		$stmt = Model::$db->prepare("SELECT * FROM albums WHERE id = :id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$album = $stmt->fetchall(PDO::FETCH_ASSOC);
		
		
		return $album;
	}

	public function get_photos($id = null)
	{
		$stmt = Model::$db->prepare("SELECT * FROM sort");
		$stmt->execute();
		$photo_sort = $stmt->fetch(PDO::FETCH_ASSOC);

		//Тут можно допилить свитчкейсами
		if ($photo_sort['photo_sort'] == 'nameup') {
			$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :album_id ORDER BY name");
		}elseif ($photo_sort['photo_sort'] == 'namedown') {
			$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :album_id ORDER BY name DESC");
		}elseif ($photo_sort['photo_sort'] == 'idup'){
			$stmt = Model::$db->prepare("SELECT * FROM photos album_id = :album_id ORDER BY id WHERE");
		}elseif($photo_sort['photo_sort'] == 'iddown'){
			$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :album_id ORDER BY id DESC");
		}else{
			$stmt = Model::$db->prepare("SELECT * FROM photos WHERE album_id = :album_id");
		}

		$stmt->bindValue(':album_id', $id);
		$stmt->execute();
		$photos = $stmt->fetchall(PDO::FETCH_ASSOC);
		
		return $photos;
	}

}
