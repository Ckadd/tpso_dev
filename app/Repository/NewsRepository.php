<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\News;
use App\Model\NewsCategory;
use App\Model\Department;
use  App;
class NewsRepository{ 

    protected $news;
    protected $news_category;
    protected $department;

    public function __construct(News $news, NewsCategory $news_category, Department $department) { 
        $this->news = $news;
        $this->news_category = $news_category;
        $this->department = $department;
    }


    public function getnews($pk)
    {

        $news_category_list = $this->news
        ->orderBy('id','ASC')
        ->get()
        ->toArray();

        $date = date("Y-m-d H:i:s");
        $queryData = $this->news
        ->leftJoin('news_categories','news.category_id', '=', 'news_categories.id')
        ->leftJoin('departments','news.organization_id', '=', 'departments.id')
        ->select(
            'news.*',
            'news_categories.name as category_name',
            'departments.title as departments_name'
            )
        ->where('news.status','1')
        ->where('news.new_type', $pk)
        ->where('news.end_date','>',$date)
        ->orderBy('sort_order','ASC')
        ->withTranslations(['en', 'th'])
        ->paginate(15)
        ->toArray();

        $data['data'] = $queryData;
        $data['category'] = $news_category_list;

        return $data;

    }

    public function getnews_filter($pk)
    {

        $news_category_list = $this->news_category
        ->orderBy('id','ASC')
        ->get()
        ->toArray();

        $date = date("Y-m-d H:i:s");
        $queryData = $this->news
        ->leftJoin('news_categories','news.category_id', '=', 'news_categories.id')
        ->leftJoin('departments','news.organization_id', '=', 'departments.id')
        ->select(
            'news.*',
            'news_categories.name as category_name',
            'departments.title as departments_name'
            )
        ->where('news.status','1')
        ->where('news.new_type',$pk)
        ->where('news.end_date','>',$date)
        ->orderBy('sort_order','ASC')
        ->paginate(15)
        ->toArray();

        $data['data'] = $queryData;
        $data['category'] = $news_category_list;

        return $data;

    }

    public function getnews_detail($id, $catid)
    {
        $date = date("Y-m-d H:i:s");
        $queryData1 = $this->news
        ->leftJoin('news_categories','news.category_id', '=', 'news_categories.id')
        ->leftJoin('departments','news.organization_id', '=', 'departments.id')
        ->select(
            'news.*',
            'news_categories.name as category_name',
            'departments.title as departments_name'
            )
        ->where('news.status','1')
        ->where('news.id', $id)
        ->where('news.end_date','>',$date)
        ->whereTranslation(['en'])
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();

        $queryData2 = $this->news
        ->leftJoin('news_categories','news.category_id', '=', 'news_categories.id')
        ->leftJoin('departments','news.organization_id', '=', 'departments.id')
        ->select(
            'news.*',
            'news_categories.name as category_name',
            'departments.title as departments_name'
            )
        ->where('news.status','1')
        ->where('news.new_type', $catid)
        ->where('news.end_date','>',$date)
        ->orderBy('sort_order','ASC')
        ->get()
        ->toArray();

        $data['main']   = $queryData1;
        $data['about']  = $queryData2;

        return $data;

    }

}
?>

