<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChildPage;
use App\Models\Testimonial;
use App\Models\Team;




class SelectClass extends Model
{
    public function selectSubHeading($heading)
    {

       $subheading=ChildPage::select('id','child_title')
                   ->whereHas('parentpage', function($q) use($heading){
                       $q->where('title', $heading);
                   })
                   ->get();

         return $subheading;
    }

    public function selectHeading()
    {
         $mainheading=ParentPage::select('id','title')->get();

 //        dd($mainheading);
         return $mainheading;
      
    }


    public function selectTestimonial()
    {
        $testinomials=Testimonial::all();
        return  $testinomials;
    }


    public function selectNews()
    {  
       $selectNews=Post::all();
        
        // $selectNews=Post::orderBy('id', 'DESC')->take(2)->get();
        return  $selectNews;
    }


    // public function selectBranch()
    // {
    //     $branches=Branch::all();
    //     return  $branches;
    // }

    public function selectTeam()
    {   
        // $selectNews=Post::orderBy('id', 'DESC')->take(2)->get();

        $teams=Team::orderBy('id', 'DESC')->take(3)->get();
        return  $teams;
    }

    public function selectBlog()
    {
        $selectBlog=Blog::all();
        return  $selectBlog;
    }
}
