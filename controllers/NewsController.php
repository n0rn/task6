<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getNewsList();

        
        $serach = News::search();
		

		require_once(ROOT . '/views/news/index.php');

		return true;
	}
	
}

