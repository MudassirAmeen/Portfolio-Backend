<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\ProfessionalExperience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $about = About::first();
        $skills = Skill::all();
        $testimonials = Testimonial::all();
        $education = Education::all();
        $professionals = ProfessionalExperience::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $categories = Category::all();
        return view('welcome', compact('about', 'skills', 'testimonials', 'education', 'professionals', 'services', 'portfolios', "categories"));
    }

    public function portfolioItem($id)
    {
        $portfolioItem = Portfolio::find($id);
        $imageGallery = unserialize($portfolioItem->images);
        // dd($portfolioItem);
        return view('portfolioItem', compact('portfolioItem', 'imageGallery'));
    }
}
