<?php

namespace App\Http\Controllers;

use App\Models\GuideArticles;
use Illuminate\Http\Request;
use DB;

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
            'guideArticles' => $guideArticles = GuideArticles::latest()->paginate(10)
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
        // | add server side validation
        $this->validate($request, [
            'title'   => 'required|string|max:50|min:3',
            'excerpt' => 'required|string|max:150|min:10',
        ]);
        
        $guideArticle = new GuideArticles;

        // general properties of article
        $guideArticle->title          = $request->title;
        $guideArticle->excerpt        = $request->excerpt;
        $guideArticle->heading1       = $request->heading1;
        $guideArticle->heading2       = $request->heading2;
        $guideArticle->heading3       = $request->heading3;
        $guideArticle->heading4       = $request->heading4;
        $guideArticle->heading5       = $request->heading5;
        $guideArticle->heading6       = $request->heading6;
        $guideArticle->heading7       = $request->heading7;
        $guideArticle->heading8       = $request->heading8;
        $guideArticle->heading9       = $request->heading9;
        $guideArticle->heading10      = $request->heading10;
        $guideArticle->paragraph1     = $request->paragraph1; 
        $guideArticle->paragraph2     = $request->paragraph2;  
        $guideArticle->paragraph3     = $request->paragraph3; 
        $guideArticle->paragraph4     = $request->paragraph4; 
        $guideArticle->paragraph5     = $request->paragraph5;  
        $guideArticle->paragraph6     = $request->paragraph6; 
        $guideArticle->paragraph7     = $request->paragraph7; 
        $guideArticle->paragraph8     = $request->paragraph8;    
        $guideArticle->paragraph9     = $request->paragraph9;   
        $guideArticle->paragraph10    = $request->paragraph10;

        // image urls 
        $guideArticle->image_name     = $request->image;
        $guideArticle->image2_name    = $request->image2;
        $guideArticle->image3_name    = $request->image3;
        $guideArticle->image4_name    = $request->image4;
        $guideArticle->image5_name    = $request->image5;
        $guideArticle->image6_name    = $request->image6;
        $guideArticle->image7_name    = $request->image7;
        $guideArticle->image8_name    = $request->image8;
        $guideArticle->image9_name    = $request->image9;
        $guideArticle->image10_name   = $request->image10;

        // image credits 
        $guideArticle->imageCredit1  = $request->imageCredit1;
        $guideArticle->imageCredit2  = $request->imageCredit2;
        $guideArticle->imageCredit3  = $request->imageCredit3;
        $guideArticle->imageCredit4  = $request->imageCredit4;
        $guideArticle->imageCredit5  = $request->imageCredit5;
        $guideArticle->imageCredit6  = $request->imageCredit6;
        $guideArticle->imageCredit7  = $request->imageCredit7;
        $guideArticle->imageCredit8  = $request->imageCredit8;
        $guideArticle->imageCredit9  = $request->imageCredit9;
        $guideArticle->imageCredit10 = $request->imageCredit10;

/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try {
            $guideArticle->save();
            // - send confirmation email to client's email; e.g, ( 
            //   'article created, this is the id of article in this database. etc.
            // )
            return view('articles.actions.edit.editGuide.edit',
             [
                 'guideArticle' => GuideArticles::find($guideArticle->id),
                 $request->session()->flash('success', 'Successfully create Guide Article', 1)
             ]
        );
        } catch (Error $error){
            // - send email of failure to ofroot company email
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
    public function edit($guideArticleId)
    {
        // | use the id to return the individual article
        return view('articles.actions.edit.editGuide.edit', ['guideArticle'=>GuideArticles::find($guideArticleId)]);
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
        //  - grow this validation
        $this->validate($request, [
            'title' => 'required|string|max:50|min:3',
            'excerpt' => 'required|string|max:150|min:10',
        ]);
        
        $guideArticle = new GuideArticles;

        //  - general fields 
        $guideArticle->title          = $request->title;
        $guideArticle->excerpt        = $request->excerpt;
        $guideArticle->heading1       = $request->heading1;
        $guideArticle->heading2       = $request->heading2;
        $guideArticle->heading3       = $request->heading3;
        $guideArticle->heading4       = $request->heading4;
        $guideArticle->heading5       = $request->heading5;
        $guideArticle->heading6       = $request->heading6;
        $guideArticle->heading7       = $request->heading7;
        $guideArticle->heading8       = $request->heading8;
        $guideArticle->heading9       = $request->heading9;
        $guideArticle->heading10      = $request->heading10;
        
        // - image url fields
        $guideArticle->image_name     = $request->image;
        $guideArticle->image2_name    = $request->image2;
        $guideArticle->image3_name    = $request->image3;
        $guideArticle->image4_name    = $request->image4;
        $guideArticle->image5_name    = $request->image5;
        $guideArticle->image6_name    = $request->image6;
        $guideArticle->image7_name    = $request->image7;
        $guideArticle->image8_name    = $request->image8;
        $guideArticle->image9_name    = $request->image9;
        $guideArticle->image10_name   = $request->image10;

        // - image credit fields
        $guideArticle->imageCredit1    = $request->imageCredit1;
        $guideArticle->imageCredit2    = $request->imageCredit2;
        $guideArticle->imageCredit3    = $request->imageCredit3;
        $guideArticle->imageCredit4    = $request->imageCredit4;
        $guideArticle->imageCredit5    = $request->imageCredit5;
        $guideArticle->imageCredit6    = $request->imageCredit6;
        $guideArticle->imageCredit7    = $request->imageCredit7;
        $guideArticle->imageCredit8    = $request->imageCredit8;
        $guideArticle->imageCredit9    = $request->imageCredit9;
        $guideArticle->imageCredit10   = $request->imageCredit10;

        // - paragraph fields
        $guideArticle->paragraph1     = $request->p1; 
        $guideArticle->paragraph2     = $request->p2;  
        $guideArticle->paragraph3     = $request->p3; 
        $guideArticle->paragraph4     = $request->p4; 
        $guideArticle->paragraph5     = $request->p5;  
        $guideArticle->paragraph6     = $request->p6; 
        $guideArticle->paragraph7     = $request->p7; 
        $guideArticle->paragraph8     = $request->p8;    
        $guideArticle->paragraph9     = $request->p9;   
        $guideArticle->paragraph10    = $request->p10;


/*
|---
|   TODO - Flesh this out later
|------
|   Suggestion : maybe include emailing ofRoot or send data into error catching and reporting service
|     // setup a system later in which will catch all logged errors
*/
        try {
            $guideArticle->save();
            return view('articles.actions.edit.editGuide.edit',
             ['guideArticle' => GuideArticles::find($guideArticle->id)]
        );
        } catch (Error $error){
            $error->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($guideArticleId)
    {
        // - try running query to database
        try {
            DB::delete("delete from guides where id = " . $guideArticleId);
            return redirect()->route('guides')->with('message', 'Guide article deleted.');
        } catch (Exception $e) {
            //  - in case of error do...
            $log_error = $e->getmessage();
            //  - return with custom error 
           return redirect()->route('guides')->with('message', 'Failed to delete article - contact ofRoot customer service, or try again.');
        }
    }
}
