<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article; //Journal Org
use App\Models\Banner;
use App\Models\Page;
use App\Models\journal;
use App\Models\organization;
use App\Models\Association;
use App\Models\entity;

    /**
     * Thist controller will handle all Administrative tasks
     */

class AdminController extends Controller
{
    public function AdminDashboard(){
        //resources-view-folder-filename
        return view('admin.index');
    }// End Method

    public function ActiveUsers(){
        //resources-view-folder-filename
            return view('admin.active-users');
    }// End Method

    /**
     * Destroy an authenticated session.
     */
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }// End Method

    public function AdminLogin(){
        //resources-view-folder-filename
            return view('admin.admin-login');
    }// End Method

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin-profile-view', compact('profileData'));

    }// End Method

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();


    }//ENd Method

    /**
     * This section is for Articles
     */

    public function ActiveArticles(){

        $ArticleData = Article::where('article_status','!=','inactive')
                        ->get();
        return view('admin.active-articles', compact('ArticleData'));

    }// End Method

    public function FeatureArticles(){

        $ArticleData = Article::where('article_status','featured')
                        ->get();
        return view('admin.featured-articles', compact('ArticleData'));

    }// End Method

    public function InactiveArticles(){

        $ArticleData = Article::where('article_status','inactive')
                        ->get();
        return view('admin.inactive-articles', compact('ArticleData'));

    }// End Method

    public function NewArticle(){
        //resources-view-folder-filename
        $JournalID = $this->JournalIDGen() + 1;
        $NewJournalID = 'JRN0000'.$JournalID;
        return view('admin.new-article',compact('NewJournalID'));
    }// End Method

    public function NewArticleWizard(){
        //resources-view-folder-filename
            return view('admin.new-article-wizard');
    }// End Method

    public function EditArticleData(Request $request){

        //dd(request()->val);
        // * ARTICLE Data
        $ArticleData = Article::where('journal_mid',request()->val)
                        ->get();

        $AssociateData = Association::where('association_journal',$ArticleData[0]->journal_mid)
                        ->get();

        //Just getting the IDS on association table
        $temp_array = $role_array = array();
        $associate_userid_array=[];
        foreach($AssociateData as $assoc_id){
            array_push($temp_array,$assoc_id->association_id);
            if($assoc_id->association_source == 'user')
                array_push($role_array,$assoc_id->association_role);
        }
        $role_array = array_values(array_unique($role_array)); //unique roles for users.

        //dd($role_array);
        //dd($temp_array); // this has all the ID's needed for the other information.

        // * need to get indexes, publisher and users.  * //

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array)
                        ->get();
        //dd($UserData);

        // * Publisher and Indexes
        $EntityData = entity::whereIn('ent_id',$temp_array)
                        ->get();

        //dd($EntityData);
        // * ORGANIZATION
        $OrgData = organization::where('org_id',$ArticleData[0]->org_society)
                        ->get();

        //dd($OrgData);
        if( empty($OrgData[0]) ){
            $OrgData = array(
                        array("org_title" => "No Organization")
                       );
        }

        //dd($OrgData[0]['org_title']);
        return view('admin.edit-article', compact('ArticleData','AssociateData','UserData','EntityData','OrgData','role_array'));


    }// end edit function

    public function AdminArticleStore(Request $request){
        $id = Auth::user()->fname;

        //dd($request->article_featured);
       //dd($request->article_active);
        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        $image_path = '/upload/admin_images/';
        $article_photo = $request->file('article_photo');
        //dd($request->file($article_photo[0]));
        foreach ($article_photo as $ap ){
            //dd($request->hasFile($ap));
            if($request->hasFile($ap)){
                $file = $request->file($ap);
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path($image_path), $filename);
            }else{$filename = "nologo";}
        }
        /* if($request->file('article_logo')){
            $file = $request->file('article_logo');
            $filenamelogo = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filenamelogo);
        }else{$filenamelogo  = "nologo";} */
        //dd($filename);

        $article_stat = "active";
        if($request->article_featured){$article_stat = "featured";}
        if(is_null($request->article_active)){$article_stat = "draft";}

        Article::insert([
            'created_by' => $id,
            'journal_mid' => $request->journal_id,
            'article_status' => $article_stat,
            'full_title' => $request->full_title,
            'short_title' => $request->short_title,
            'org_society' => $request->org_society,
            'email' => $request->email,
            'article_contact' => $request->journal_contact,
            'contact_number' => $request->contact_number,
            'about' => $request->about,
            'aims_scope' => $request->aims_scope,
            'link' => $request->link,
            'policy' => $request->policy,
            'photo' => $image_path.$filename,
        ]);

        if($request->has('indexing')){
            journal::insert([
                'journal_created_by' => $id,
                'journal_id' => $request->journal_id,
                'journal_type' => 'indexing',
                'journal_value' => $request->indexing,
                'journal_group' => '',
                'journal_link' => 'None',
            ]);
        }

        if($request->has('publisher')){
            journal::insert([
                'journal_created_by' => $id,
                'journal_id' => $request->journal_id,
                'journal_type' => 'publisher',
                'journal_value' => $request->publisher,
                'journal_group' => '',
                'journal_link' => 'None',
            ]);
        }

        return redirect()->route('admin.active-articles');

    }//ENd Method

    public function AdminArticleUpdate(Request $request){
        $id = Auth::user()->fname;

        dd($request);
        if($request->file('article_photo')){
            $file = $request->file('article_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
        }else{$filename = "nologo";}

        if($request->file('article_logo')){
            $file = $request->file('article_logo');
            $filenamelogo = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filenamelogo);
        }else{$filenamelogo  = "nologo";}

        $article_stat = "active";
        if($request->article_featured){$article_stat = "featured";}
        if(is_null($request->article_active)){$article_stat = "draft";}


        return redirect()->route('admin.active-articles');

    }//ENd Method

    /**
     * This section is for Banners
     */

     public function ActiveBanners(){

        $BannerData = Banner::latest()->get();
        return view('admin.active-banners', compact('BannerData'));

    }// End Method

    public function NewBanner(){
        //resources-view-folder-filename
            return view('admin.new-banner');
    }// End Method

    public function AdminBannerStore(Request $request){
        $id = Auth::user()->fname;

        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        //dd($request->file('banner_image'));

        if($request->file('banner_image')){
            $file = $request->file('banner_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);
        }else{$filename = "nologo";}

        Banner::insert([
            'banner_created_by' => $id,
            'banner_title' => $request->banner_title,
            'banner_description' => $request->banner_description,
            'banner_image_path' => $filename,
            'banner_url' => $request->banner_url
        ]);

        return redirect()->route('admin.active-banners');

    }//End Method


    /**
     * This section is for Pages
     */

     public function ActivePages(){

        $PageData = Page::latest()->get();
        return view('admin.active-pages', compact('PageData'));

    }// End Method

    public function NewPage(){
        //resources-view-folder-filename
            return view('admin.new-page');
    }// End Method

    public function AdminPageStore(Request $request){
        $id = Auth::user()->fname;

        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        //dd($request->file('Page_image'));

        if($request->file('page_image')){
            $file = $request->file('page_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);
        }else{$filename = "noimage";}

        Page::insert([
            'page_created_by' => $id,
            'page_status' => $request->page_status,
            'page_type' => $request->page_type,
            'page_title' => $request->page_title,
            'page_description' => $request->page_description,
            'page_image_path' => $filename,
            'page_url' => $request->page_url
        ]);

        return redirect()->route('admin.active-pages');

    }//End Method

    public function JournalIDGen(){
        $ArticleID = Article::latest('id')->first('id');
        return($ArticleID['id']);

    }

}
