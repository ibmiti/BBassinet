<?php

namespace App\Http\Controllers;

use App\Models\GuideArticles;
use Illuminate\Http\Request;

class GuideArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.actions.index.indexGuide', [
            'guideArticles' => $guideArticles = GuideArticles::take(6)->latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.actions.create.createGuide');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO - Validate The Data
        // --------------------------
        // $this->validate($request, [
        //     'title' => 'required|string|max:50|min:3',
        //     'excerpt' => 'required|string|max:150|min:10',
        //     'paragraph' => 'required|string|min:10',
        // ]);
        
        $guideArticle = new GuideArticles;

        $guideArticle->title          = $request->title;
        $guideArticle->excerpt        = $request->excerpt;
        $guideArticle->heading1       = $request->heading1;
        $guideArticle->image_name     = $request->image1;
        $guideArticle->paragraph1     = $request->paragraph1; 
        $guideArticle->heading2       = $request->heading2;
        $guideArticle->image2_name    = $request->image2;
        $guideArticle->paragraph2     = $request->paragraph2;  
        $guideArticle->heading3       = $request->heading3;
        $guideArticle->image3_name    = $request->image3;
        $guideArticle->paragraph3     = $request->paragraph3;  
        $guideArticle->heading4       = $request->heading4;
        $guideArticle->image4_name    = $request->image4;
        $guideArticle->paragraph4     = $request->paragraph4;     
        $guideArticle->heading5       = $request->heading5;
        $guideArticle->image5_name    = $request->image5;
        $guideArticle->paragraph5     = $request->paragraph5;  
        $guideArticle->heading6       = $request->heading6;
        $guideArticle->image6_name    = $request->image6;
        $guideArticle->paragraph6     = $request->paragraph6; 
        $guideArticle->heading7       = $request->heading7;
        $guideArticle->image7_name    = $request->image7;
        $guideArticle->paragraph7     = $request->paragraph7; 
        $guideArticle->heading8       = $request->heading8;
        $guideArticle->image8_name    = $request->image8;
        $guideArticle->paragraph8     = $request->paragraph8;   
        $guideArticle->heading9       = $request->heading9;
        $guideArticle->image9_name    = $request->image9;
        $guideArticle->paragraph9     = $request->paragraph9;
        $guideArticle->heading10      = $request->heading10;
        $guideArticle->image10_name   = $request->image10;
        $guideArticle->paragraph10    = $request->paragraph10;

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try {
            $guideArticle->save();
            return view('articles.actions.create.selection');
        } catch (Error $error){
            $error->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guideArticle = GuideArticles::find($id);
        return view('articles.actions.show.showGuideArticle', [
            'guideArticle' => $guideArticle
        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function edit(GuideArticles $guideArticles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuideArticles $guideArticles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuideArticles  $guideArticles
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuideArticles $guideArticles)
    {
        //
    }
}