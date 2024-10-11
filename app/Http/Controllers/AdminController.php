<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article; //Journal Org
use App\Models\banner;
use App\Models\page;
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
        $data->user_address = $request->address;

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

        $ArticleData = Article::where('article_status','active')
                        ->orWhere('article_status','featured')
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
        //$JournalID = $this->JournalIDGen() + 1;
        $NewJournalID = $this->IDGen('journal');
        $organizationData = organization::all();
        $EntityData = entity::whereIn("ent_type",array("index","publisher"))->get();
        //$PublisherData = entity::where("ent_type","publisher")->get();
        //dd($PublisherData);

        return view('admin.new-article',compact('organizationData','NewJournalID','EntityData'));
    }// End Method

    public function NewIndex(){
        //resources-view-folder-filename
        //$IndexID = $this->EntityIDGen() + 1;
        $NewIndexID = $this->IDGen('index');
        return view('admin.new-index',compact('NewIndexID'));
    }// End Method

    public function NewPublisher(){
        //resources-view-folder-filename
        //$PubID = $this->EntityIDGen() + 1;
        $NewPublisherID = $this->IDGen('publisher');
        return view('admin.new-publisher',compact('NewPublisherID'));
    }// End Method

    public function NewOrganization(){
        //resources-view-folder-filename
        //$OrgID = $this->OrgIDGen() + 1;
        $NewOrgID = $this->IDGen('organization');
        return view('admin.new-organization',compact('NewOrgID'));
    }// End Method

    public function NewArticleWizard(){
        //resources-view-folder-filename
        $organizationData = organization::all();
            return view('admin.new-article-wizard',compact('organizationData'));
    }// End Method

    public function EditUserData(Request $request){

        $userData = User::where('user_id',$request->val)
            ->first();
        //dd($userData);
        $organizationData = organization::all();

        return view('admin.edit-user', compact('userData','organizationData'));
    }//End User edit page

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
        //$EntityData = entity::whereIn('ent_id',explode(",",$ArticleData[0]->indexing))
        //                    ->orWhere('ent_id',$ArticleData[0]->publisher)
        //                    ->get();
        $EntityData = entity::whereIn("ent_type",array("index","publisher"))->get();

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

        //dd($request->journal_publishers);
       //dd($request->article_active);
        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        $image_path = '/upload/admin_images/';
        $article_photo = $request->file('article_photo');
        //dd($request->file($article_photo[0]));
        if(!empty($article_photo)) {
            foreach ($article_photo as $ap) {
                //dd($request->hasFile($ap));
                    if ($request->hasFile($ap)) {
                        $file = $request->file($ap);
                        $filename = date('YmdHi') . $file->getClientOriginalName();
                        $file->move(public_path($image_path), $filename);
                    }
                }
            }else{
            $filename = "nologo";
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
            'indexing' => implode(",",$request->journal_indexes),
            'publisher' => $request->journal_publisher,
        ]);

        return redirect()->route('admin.active-articles');

    }//ENd Method


    public function AdminArticleUpdate(Request $request){


        //dd($request);
        if($request->file('article_photo')){
            $file = $request->file('article_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
        }else{$filename = "nologo";}

        $article_stat = "active";
        if($request->article_featured){$article_stat = "featured";}
        if(is_null($request->article_active)){$article_stat = "draft";}


        $this_article = Article::find($request->article_id);
        //dd($this_article);
        $this_article->article_status = $article_stat;
        $this_article->full_title = $request->full_title;
        $this_article->short_title = $request->short_title;
        $this_article->org_society = $request->org_society;
        $this_article->email = $request->email;
        $this_article->article_contact = $request->journal_contact;
        $this_article->contact_number = $request->contact_number;
        $this_article->about = $request->about;
        $this_article->aims_scope = $request->aims_scope;
        $this_article->link = $request->link;
        $this_article->policy = $request->policy;
        $this_article->updated_at = now();
        $this_article->save();

        return redirect()->route('admin.active-articles');

    }//ENd Method

    public function ActiveOrganization(){

        $OrganizationData = organization::where('org_status','active')
                            ->get();

        return view('admin.active-organizations', compact('OrganizationData'));

    }//End Organization data retrieval

    /**
     * This section is for Banners
     */

     public function ActiveBanners(){

        $BannerData = banner::latest()->get();
        return view('admin.active-banners', compact('BannerData'));

    }// End Method

    public function NewBanner(){
        //resources-view-folder-filename
            $recordID = $this->IDGen('banner');
            return view('admin.new-banner', compact('recordID'));
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
            'banner_id' => $request->banner_id,
            'banner_title' => $request->banner_title,
            'banner_description' => $request->banner_description,
            'banner_image_path' => $filename,
            'banner_url' => $request->banner_url,
            'banner_status' => $request->banner_status,
            'created_at' => now()
        ]);

        return redirect()->route('admin.active-banners');

    }//End Method

    public function EditBannerData(Request $request){

         //dd($request->val);
        $bannerData = banner::where('banner_id',$request->val)
            ->first();

        return view('admin.edit-banner', compact('bannerData'));
    }//End User edit page

    public function AdminEntityStore(Request $request){
        $id = Auth::user()->fname;
        if( $request->entity_type == 'index'){
            $entity_view = '/admin/active/indexes?val=index';
        }else{
            $entity_view = '/admin/active/publishers?val=publisher';
        }
        entity::insert([
            'ent_created_by' => $id,
            'ent_id' => $request->entity_id,
            'ent_type' => $request->entity_type,
            'ent_name' => $request->entity_name,
            'ent_acro' => $request->entity_acronym,
            'ent_description' => $request->entity_description,
            'ent_url' => $request->entity_url,
            'created_at' => now()
        ]);

        return redirect($entity_view);

    }//End Method

    public function AdminOrganizationStore(Request $request){
        $id = Auth::user()->fname;
        organization::insert([
            'org_created_by' => $id,
            'org_id' => $request->organization_id,
            'org_title' => $request->organization_name,
            'org_description' => $request->organization_description,
            'org_url' => $request->organization_url,
            'org_status' => 'active',
            'org_image_path' => '', // needs to update with images.
            'created_at' => now()
        ]);

        return redirect()->route('admin.active-organization');

    }//End Method

    public function ActiveEntity(Request $request){

        //dd(request()->val);
        if (request()->val == "index"){
        $EntityData = entity::where('ent_type','index')
                    ->orderBy('ent_id')
                    ->get();

        $entity_view = 'admin.active-indexes';
        //return view('admin.active-indexes', compact('EntityData'));

        }elseif (request()->val == "publisher"){
        $EntityData = entity::where('ent_type','publisher')
                    ->orderBy('ent_id')
                    ->get();
                    $entity_view = 'admin.active-publishers';
        //return view('admin.active-publishers', compact('EntityData'));
        }
        //dd( $EntityData);
        return view($entity_view, compact('EntityData'));



    }// End Method



    /**
     * This section is for Pages
     */

     public function ActivePages(){

        $PageData = page::latest()->get();
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

        page::insert([
            'page_created_by' => $id,
            'page_id' => $request->page_id,
            'page_status' => $request->page_status,
            'page_type' => $request->page_type,
            'page_title' => $request->page_title,
            'page_description' => $request->page_description,
            'page_image_path' => $filename,
            'page_url' => $request->page_url,
            'created_at' => now()
        ]);

        return redirect()->route('admin.active-pages');

    }//End Method

    public function JournalIDGen(){
        $ArticleID = Article::latest('id')->first('id');
        return($ArticleID['id']);
    }

    public function EntityIDGen(){
        $EntityID = entity::latest('id')->first('id');
        return($EntityID['id']);
    }// gets the ID of Entity, the id number corresponds to the entity ID

    public function OrgIDGen(){
        $OrgID = organization::latest('id')->first('id');
        return($OrgID['id']);
    }

    public function IDGen($record){

        switch ($record) {
            case 'banner':
                $ID = banner::latest('id')->first('id');
                return("BANNER0".$ID['id']+1);
            case 'page':
                $ID = page::latest('id')->first('id');
                return("PAGE0".$ID['id']+1);
            case 'user': //user
                $ID = User::latest('id')->first('id');
                return("USER0".$ID['id']+1);
            case 'index': //entity
                $ID = entity::latest('id')->first('id');
                return("INDEX0".$ID['id']+1);
            case 'publisher': //entity
                $ID = entity::latest('id')->first('id');
                return("PUB0".$ID['id']+1);
            case 'organization': //entity
                $ID = organization::latest('id')->first('id');
                return("ORG0".$ID['id']+1);
            default:
                $ID = Article::latest('id')->first('id');
                return("JOURNAL0".$ID['id']+1);

        }
    }

}
