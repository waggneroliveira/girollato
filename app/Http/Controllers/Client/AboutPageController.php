<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BenefitTopic;
use App\Models\Contact;
use App\Models\Direction;
use App\Models\Partner;
use App\Models\Report;
use App\Models\Statute;
use App\Models\Topic;
use App\Models\Video;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(){
        $about = About::active()->first();
        $topics = Topic::active()->sorting()->get();
        $benefitTopics = BenefitTopic::active()->sorting()->get();
        $partners = Partner::active()->sorting()->get();
        $contact = Contact::first();
        $statute = Statute::active()->first();
        $directions = Direction::active()->sorting()->get();
        $video = Video::active()->first();
        $report = Report::active()->first();

        return view('client.blades.about', compact('video', 'benefitTopics', 'topics', 'report', 'directions', 'statute', 'contact', 'partners', 'about'));
    }
}
