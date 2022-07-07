<?php

use App\Models\Blog;
use App\Models\Media;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

if (!function_exists('get_setting_by_key')) {
    function get_setting_by_key($key)
    {
        $setting = Setting::where('key', $key)->first();
        if (is_null($setting)) {
            return null;
        } else {
            return $setting;
        }
    }
}




if (!function_exists('get_setting_by_section')) {
    function get_setting_by_section($section)
    {
        $setting = Setting::where('section', $section)->get();
        if (is_null($setting)) {
            return null;
        } else {
            return $setting;
        }
    }
}

/* Custom Paginate creater */
function paginateFromArray($items, $perPage = 5, $page = null, $options = ['path' => 'portfolio'])
{

    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}




if (!function_exists('get_blogs_by_limit')) {
    function get_blogs_by_limit($limit, $except_id = null, $except_type = null)
    {
        if (!is_null($except_id)) {
            $blogs = Blog::orderBy('created_at', 'desc')->where('id', '!=', $except_id)->get();
        } elseif (!is_null($except_type)) {
            $blogs = Blog::orderBy('created_at', 'desc')->where('plot_size', '=', $except_type)->get();
        } else {
            $blogs = Blog::orderBy('created_at', 'desc')->get();
        }

        $media = new Media();
        if ($blogs) {
            $blogs = $blogs->toArray();
            foreach ($blogs as $key => $value) {
                $parent_key = $key;
                $img_id = $value['img_id'];
                $images = $media->get_images_by_id($img_id);
                if (!is_null($images)) {
                    foreach ($images as $value) {
                        $arr[$value['dimension']] = $value['path'];
                    }
                    $blogs[$parent_key]['images'] = $arr;
                } else {
                    $blogs[$parent_key]['images'] = null;
                }
            }


            // uncomment or use (object) $item in loop to use as object
            // $blogs = collect($blogs)->map(function ($item) {
            //     return (object) $item;
            // });

            return $blogs;
        } else {
            return [];
        }
    }
}
