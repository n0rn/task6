<?php


class News
{



	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getNewsList() {

		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, title, post FROM news ORDER BY id ASC LIMIT 5');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['post'] = $row['post'];
			$i++;
		}

		return $newsList;
	
	}

	public static function search(){ 

	if (isset($_POST['search'])) { 
	$db = Db::getConnection(); 
	$word = strip_tags($_POST['search']); 

	$sql = $db->query("SELECT * FROM post WHERE title LIKE '%" . $word . "%' OR post LIKE '%" . $word . "%'"); 

	while($row = $sql->fetch()) { 
	$newSeatch[$i]['title'] = $row['title']; 
	$newSeatch[$i]['post'] = $row['post']; 




	}else { 
	echo '<li>По вашему запросу ничего не найдено</li>'; 
	}
   return $newSeartch;
	} 

}