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

        public function userLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
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

        if($request->file('user_photo')){
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
     * "association_journal" => "JOURNAL04"
     * "new_role1" => "Associate Editor"
     * "journal_users1" => array:2 [▼
     * 0 => "USER04"
     * 1 => "USER42"
     * ]
     * "new_role" => "Managing Editor"
     * "new_users" => array:2 [▼
     * 0 => "USER08"
     * 1 => "USER09"
     * ]
     * ]
     */
    public function UserMembershipUpdate(Request $request){
        //dd($request->all());
        $this_association = Association::where('association_journal',$request->association_journal)
            ->where('association_source',"user")
            ->get();
        //dd($this_association);
        //drop all records with the journal ID and the association source = user
        if($this_association){
            $this_association->each(function ($model) {
                $model->delete();
            });
        }

        //insert new data into association table
        foreach ($request as $value) { //just the parameter
            //dd($value);
            foreach($value as $key1 => $item){
                //dd($key1,$item);//first iteam in the array
                if(substr($key1,0,-1) == "new_role"){
                    //dd(substr($key1,0,-1),substr($key1,-1));
                    $number = substr($key1,-1);
                    $myrole = $item;
                }
                if(substr($key1,0,-1) == "journal_users" && substr($key1,-1) == $number ){
                    //dd($myrole);
                    //dd(substr($key1,0,-1),substr($key1,-1));
                    if(is_array($item)){
                        foreach($item as $item2){
                            //dd($myrole,$item2,$request->association_journal);
                            Association::insert([
                                'association_journal' => $request->association_journal,
                                'association_source' => 'user',
                                'association_id' => $item2,
                                'association_role' => $myrole,
                                'updated_at' => now(),
                                'created_at' => now(),

                            ]);
                        }
                    }
                    else{
                        //dd($myrole,$item,$request->association_journal);
                        Association::insert([
                            'association_journal' => $request->association_journal,
                            'association_source' => 'user',
                            'association_id' => $item,
                            'association_role' => $myrole,
                            'updated_at' => now(),
                            'created_at' => now(),

                        ]);
                    }

                }
                /*else{
                    dd(substr($key1,0,-1));
                }
                if(is_array($item)){
                    dd($key1,$item);
                }
                else{
                    dd('Not Array '.$key1,$item);
                }*/
            }

        }

        /*Association::insert([
            'association_journal' => $request->association_journal,
            'association_source' => 'user',
            'association_id' => $id,
            'association_role' => $id,
            'updated_at' => now(),

        ]);*/

        /*$this_association->article_status = $article_stat;
        $this_association->full_title = $request->full_title;
        $this_association->short_title = $request->short_title;
        $this_association->org_society = $request->org_society;
        $this_association->email = $request->email;
        $this_association->article_contact = $request->journal_contact;
        $this_association->contact_number = $request->contact_number;
        $this_association->about = $request->about;
        $this_association->aims_scope = $request->aims_scope;
        $this_association->link = $request->link;
        $this_association->policy = $request->policy;
        $this_association->updated_at = now();
        $this_association->save();*/

        //return redirect()->route('admin.active-articles');

        // gather all information for the edit page.
        $AssociateData = Association::where('association_journal',$request->association_journal)
            ->get();
        //dd("Associate Data for edit page ".$AssociateData);
        //Just getting the IDS on association table
        $temp_array = $role_array = array();
        $associate_userid_array=[];
        foreach($AssociateData as $assoc_id){
            array_push($temp_array,$assoc_id->association_id);
            if($assoc_id->association_source == 'user')
                array_push($role_array,$assoc_id->association_role);
        }
        $role_array = array_values(array_unique($role_array)); //unique roles for users.

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array) // associated users
        ->get();
        //dd("[".implode(',',$temp_array)."]");
        $AllUserData = User::whereNotin('user_id',$temp_array)
                            ->where(function($query) {
                            $query->where('user_status','active') // all contacts that can be added
                                ->where('user_type','contact');
                            })
                            ->get();
//        $AllUserData = User::where(function($query) {
//                        $query->where('user_status','active') // all contacts that can be added
//                                ->where('user_type','contact');
//                            })
//                            ->get();

        //dd(implode(',',$temp_array)." all users ".$SelectedUserData);
        if(is_null($AssociateData) || $AssociateData == "" || !$AssociateData  || count($AssociateData) === 0){
            return redirect('admin/article/edit?val='.$request->association_journal);
        } else {
            return view('admin.edit-members', compact('AssociateData','UserData','role_array','AllUserData'));
        }



    }//ENd Method


    public function UserMembershipAdd(Request $request){
        //dd($request);

        $this_association = Association::where('association_journal',$request->association_journal)
            ->where('association_source',"user")
            ->get();

        //dd($this_association);

        //drop all records with the journal ID and the association source = user
        if($this_association){
            $this_association->each(function ($model) {
                $model->delete();
            });
        }

        //insert new data into association table
        foreach ($request as $value) { //just the parameter
            //dd($request);
            //dd($value);
            foreach($value as $key1 => $item){
                //dd(substr("New Role ".$key1,0,-1),$item);//first iteam in the array
                //print(":".$key1.":");
                if($key1 == "new_role"){
                    //$number = substr($key1,-1);
                    $myrole = $item;
                    //print(":".$myrole.":");
                }
                if($key1 == "new_users"){
                    //dd($myrole);
                    if(is_array($item)){
                        foreach($item as $item2){
                            //dd(" ARRAY ".$myrole,$item2,$request->association_journal);
                            Association::insert([
                                'association_journal' => $request->association_journal,
                                'association_source' => 'user',
                                'association_id' => $item2,
                                'association_role' => $myrole,
                                'updated_at' => now(),
                                'created_at' => now(),

                            ]);
                        }
                    }
                    else{
                        //dd(" Not ARRAY ".$myrole,$item,$request->association_journal);
                        Association::insert([
                            'association_journal' => $request->association_journal,
                            'association_source' => 'user',
                            'association_id' => $item,
                            'association_role' => $myrole,
                            'updated_at' => now(),
                            'created_at' => now(),

                        ]);
                    }

                }
            }

        }

        // gather all information for the edit page.
        $AssociateData = Association::where('association_journal',$request->association_journal)
            ->get();
        //dd("Associate Data for edit page ".$AssociateData);
        //Just getting the IDS on association table
        $temp_array = $role_array = array();
        $associate_userid_array=[];
        foreach($AssociateData as $assoc_id){
            array_push($temp_array,$assoc_id->association_id);
            if($assoc_id->association_source == 'user')
                array_push($role_array,$assoc_id->association_role);
        }
        $role_array = array_values(array_unique($role_array)); //unique roles for users.

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array) // associated users
        ->get();
        //dd($UserData);
        $AllUserData = User::where('user_status','active') // all contacts that can be added
        ->where('user_type','contact')
            ->get();

        return view('admin.edit-members', compact('AssociateData','UserData','role_array','AllUserData'));
        //return redirect('/admin/edit/members?val='.$request->association_journal);

        // gather all information for the edit page.

    } // end add new user

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

        $ArticleData = Article::where('article_status','draft')
                        ->get();
        return view('admin.inactive-articles', compact('ArticleData'));

    }// End Method

    public function CheckFeatured(){
        $ArticleData = Article::where('article_status','featured')
            ->get();
       if (count($ArticleData) >= 4){
           return true;
       }else{return false;}
    }

    public function NewArticle(){
        //resources-view-folder-filename
        //$JournalID = $this->JournalIDGen() + 1;
        $NewJournalID = $this->IDGen('journal');
        $organizationData = organization::all();
        $EntityData = entity::whereIn("ent_type",array("index","publisher"))->get();
        //$PublisherData = entity::where("ent_type","publisher")->get();
        //dd($PublisherData);
        $featuredIsFull = $this->CheckFeatured();

        return view('admin.new-article',compact('organizationData','NewJournalID','EntityData','featuredIsFull'));
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

        //dd($role_array == null);
        //dd($temp_array); // this has all the ID's needed for the other information.

        // * need to get indexes, publisher and users.  * //

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array)
                        ->get();
        //dd($UserData);
        $AllUserData = User::where('user_status','active')
                            ->where('user_type','contact')
                            ->get();
        //dd($AllUserData);
        // * Publisher and Indexes
        //$EntityData = entity::whereIn('ent_id',explode(",",$ArticleData[0]->indexing))
        //                    ->orWhere('ent_id',$ArticleData[0]->publisher)
        //                    ->get();
        $EntityData = entity::whereIn("ent_type",array("index","publisher"))->get();

        //dd($EntityData);
        // * ORGANIZATION
        $organizationData = organization::all();
        /*$OrgData = organization::where('org_id',$ArticleData[0]->org_society)
                        ->get();

        //dd($OrgData);
        if( empty($OrgData[0]) ){
            $OrgData = array(
                        array("org_title" => "No Organization")
                       );
        }*/
        $featuredIsFull = $this->CheckFeatured();
        //dd(!$AssociateData);
        return view('admin.edit-article', compact('ArticleData','AssociateData','UserData','EntityData','role_array','AllUserData','organizationData','featuredIsFull'));


    }// end edit function

    public function AdminArticleStore(Request $request){
        $id = Auth::user()->fname;

        //dd($request);
        //dd($request->journal_publishers);
       //dd($request->article_active);
        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        /*$image_path = '/frontend/img/';
        $article_photo = $request->file('article_photo');
        //dd($request->file($article_photo[0]));
        if(!empty($article_photo)) {
            foreach ($article_photo as $ap) {
                //dd($request->hasFile($ap));
                    if ($request->hasFile($ap)) {
                        $file = $request->file('article_photo');
                        $filename = $request->journal_id;
                        $file->move(public_path($image_path), $filename);
                    }
                }
            }else{
            $filename = null;
        }*/
         if($request->hasFile('article_photo')){
            $file = $request->file('article_photo');
            $filenamephoto = date('YmdHis')."_".$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filenamephoto);

             $article_stat = "active";
             if($request->article_featured){$article_stat = "featured";}
             if(is_null($request->article_active)){$article_stat = "draft";}

             if(($request->journal_indexes) || !is_null($request->journal_indexes) || $request->journal_indexes != "") {
                 $indexingvar =  implode(",", $request->journal_indexes);
             }else {
                 $indexingvar =  null;
             }

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
                 'photo' => $filenamephoto,
                 'indexing' => $indexingvar,
                 'publisher' => $request->journal_publisher,
             ]);


         }else{

             $article_stat = "active";
             if($request->article_featured){$article_stat = "featured";}
             if(is_null($request->article_active)){$article_stat = "draft";}

             if(($request->journal_indexes) || !is_null($request->journal_indexes) || $request->journal_indexes != "") {
                 $indexingvar =  implode(",", $request->journal_indexes);
             }else {
                 $indexingvar =  null;
             }

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
                 'indexing' => $indexingvar,
                 'publisher' => $request->journal_publisher,
             ]);

         }
        //dd($filename);

        return redirect()->route('admin.active-articles');

    }//ENd Method


    public function AdminArticleUpdate(Request $request){
        //dd($request);
        //dd($request->file('article_photo'));
        if($request->hasFile('article_photo')){
            $file = $request->file('article_photo');
            $filenamephoto = date('YmdHis')."_".$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filenamephoto);


            //dd($filenamephoto);
            $article_stat = "active";
            if($request->article_featured == "on"){$article_stat = "featured";}
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
            $this_article->publisher = $request->journal_publisher;
            if(($request->journal_indexes) || !is_null($request->journal_indexes) || $request->journal_indexes != "") {
                $this_article->indexing = implode(",", $request->journal_indexes);
            }else {$this_article->indexing = null;}
            $this_article->photo = $filenamephoto;
            $this_article->updated_at = now();
            $this_article->save();

            if($request->new_role){
                foreach($request->new_users as $item){
                    //dd($myrole,$item2,$request->association_journal);
                    Association::insert([
                        'association_journal' => $request->journal_id,
                        'association_source' => 'user',
                        'association_id' => $item,
                        'association_role' => $request->new_role,
                        'created_at' => now(),

                    ]);
                }
            }
        }else{

            $article_stat = "active";
            if($request->article_featured == "on"){$article_stat = "featured";}
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
            $this_article->publisher = $request->journal_publisher;
            if(($request->journal_indexes) || !is_null($request->journal_indexes) || $request->journal_indexes != "") {
                $this_article->indexing = implode(",", $request->journal_indexes);
            }else {$this_article->indexing = null;}
            $this_article->updated_at = now();
            $this_article->save();

            if($request->new_role){
                foreach($request->new_users as $item){
                    //dd($myrole,$item2,$request->association_journal);
                    Association::insert([
                        'association_journal' => $request->journal_id,
                        'association_source' => 'user',
                        'association_id' => $item,
                        'association_role' => $request->new_role,
                        'created_at' => now(),

                    ]);
                }
            }



        }



        return redirect()->route('admin.active-articles');

    }//ENd Method

    public function ActiveOrganization(){

        $OrganizationData = organization::where('org_status','active')
                            ->get();

        return view('admin.active-organizations', compact('OrganizationData'));

    }//End Organization data retrieval
    public function AdminOrganizationUpdate(Request $request){
        //dd($request);
        if($request->hasFile('org_photo')){
            $file = $request->file('org_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);

            $organization_stat = $request->organization_status;
            if(is_null($organization_stat)){$organization_stat = "draft";}

            $this_organization = organization::where('org_id',$request->organization_id)->first();
            //dd($this_banner);
            $this_organization->org_description = $request->organization_description;
            $this_organization->org_title = $request->organization_title;
            $this_organization->org_image_path = $filename;
            $this_organization->org_url = $request->organization_url;
            $this_organization->org_status = $organization_stat;
            $this_organization->updated_at = now();
            $this_organization->save();


        }else{


            $organization_stat = $request->organization_status;
            if(is_null($organization_stat)){$organization_stat = "draft";}

            $this_organization = organization::where('org_id',$request->organization_id)->first();
            //dd($this_banner);
            $this_organization->org_description = $request->organization_description;
            $this_organization->org_title = $request->organization_title;
            $this_organization->org_url = $request->organization_url;
            $this_organization->org_status = $organization_stat;
            $this_organization->updated_at = now();
            $this_organization->save();


        }



        return redirect()->route('admin.active-organizations');
    }
    public function EditOrgData(Request $request){
        //dd($request->val);
        $organizationData = organization::where('org_id',$request->val)
            ->first();

        return view('admin.edit-organization', compact('organizationData'));
    }//End User edit page

    public function AdminOrganizationStore(Request $request){
        $id = Auth::user()->fname;

        if($request->hasFile('org_photo')){
            $file = $request->file('org_photo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);


            organization::insert([
                'org_created_by' => $id,
                'org_id' => $request->organization_id,
                'org_title' => $request->organization_name,
                'org_description' => $request->organization_description,
                'org_url' => $request->organization_url,
                'org_status' => 'active',
                'org_image_path' => $filename,
                'created_at' => now()
            ]);




        }else{

            organization::insert([
                'org_created_by' => $id,
                'org_id' => $request->organization_id,
                'org_title' => $request->organization_name,
                'org_description' => $request->organization_description,
                'org_url' => $request->organization_url,
                'org_status' => 'active',
                'created_at' => now()
            ]);


        }


        return redirect()->route('admin.active-organizations');

    }//End Method
    /**
     * This section is for Banners
     */

    /**
     ************ PAGES ********* Banner has a banner record, for banners only.
     *If the banner has an internal page, it will be created in the page DB.
     * Don't Get Confused :)
     */
     public function ActiveBanners(){

        $BannerData = banner::latest()->get();
        return view('admin.active-banners', compact('BannerData'));

    }// End Method
    public function ActiveResources(){

        $PageData = page::where('page_type','Resource')
                        ->where('page_status','active')
                        ->get();
        return view('admin.active-resources', compact('PageData'));

    }// End Active Resource Method

    public function ActiveAnnouncements(){

        $PageData = page::where('page_type','Announcement')
            ->where('page_status','active')
            ->get();
        return view('admin.active-announcements', compact('PageData'));

    }// End Active Announcements Method

    public function ActiveNews(){

        $PageData = page::where('page_type','News')
            ->where('page_status','active')
            ->get();
        return view('admin.active-news', compact('PageData'));

    }// End Active Announcements Method

    public function NewBanner(){
        //resources-view-folder-filename
            $pageData = page::where('page_type','banner')
                        ->get();
            $recordID = $this->IDGen('banner');
            return view('admin.new-banner', compact('recordID','pageData'));
    }// End Method

    public function AdminBannerStore(Request $request){
        $id = Auth::user()->fname;

        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        //dd($request->file('banner_image'));

        if($request->file('banner_image')){
            $file = $request->hasFile('banner_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);




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


        }else{

            Banner::insert([
                'banner_created_by' => $id,
                'banner_id' => $request->banner_id,
                'banner_title' => $request->banner_title,
                'banner_description' => $request->banner_description,
                'banner_url' => $request->banner_url,
                'banner_status' => $request->banner_status,
                'created_at' => now()
            ]);
        }



        return redirect()->route('admin.active-banners');

    }//End Method

    public function AdminBannerUpdate(Request $request){
         //dd($request);
        if($request->file('banner_image')){
            $file = $request->hasFile('banner_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);


            $banner_stat = $request->banner_status;
            if(is_null($banner_stat)){$banner_stat = "draft";}

            $this_banner = banner::where('banner_id',$request->banner_id)->first();
            //dd($this_banner);
            $this_banner->banner_description = $request->banner_description;
            $this_banner->banner_title = $request->banner_title;
            $this_banner->banner_image_path = $filename;
            $this_banner->banner_url = $request->banner_url;
            $this_banner->banner_status = $banner_stat;
            $this_banner->updated_at = now();
            $this_banner->save();

        }else{
            $banner_stat = $request->banner_status;
            if(is_null($banner_stat)){$banner_stat = "draft";}

            $this_banner = banner::where('banner_id',$request->banner_id)->first();
            //dd($this_banner);
            $this_banner->banner_description = $request->banner_description;
            $this_banner->banner_title = $request->banner_title;
            $this_banner->banner_url = $request->banner_url;
            $this_banner->banner_status = $banner_stat;
            $this_banner->updated_at = now();
            $this_banner->save();
        }


        return redirect()->route('admin.active-banners');

    }//End Method

    public function EditBannerData(Request $request){

         //dd($request->val);
        $pageData = page::where('page_type','banner')
                        ->get();
        $bannerData = banner::where('banner_id',$request->val)
            ->first();

        return view('admin.edit-banner', compact('bannerData','pageData'));
    }//End User edit page

    public function EditPageData(Request $request){

        //dd($request->val);
        $pageData = page::where('page_id',$request->val)
            ->first();

        return view('admin.edit-page', compact('pageData'));
    }//End User edit page

    /* ************* PAGES End ******** */
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

    public function AdminEntityUpdate(Request $request){
        //dd($request);
        if( $request->entity_type == 'index'){
            $entity_view = '/admin/active/indexes?val=index';
        }else{
            $entity_view = '/admin/active/publishers?val=publisher';
        }

        $this_entity= entity::where('ent_id',$request->entity_id)->first();
        //dd($this_banner);
        $this_entity->ent_description = $request->entity_description;
        $this_entity->ent_name = $request->entity_name;
        $this_entity->ent_acro = $request->entity_acronym;
        $this_entity->ent_url = $request->entity_url;
        $this_entity->updated_at = now();
        $this_entity->save();

        return redirect($entity_view);

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

    public function EditEntityData(Request $request){

        //dd($request->val);
        $entityData = entity::where('ent_id',$request->val)
            ->first();

        return view('admin.edit-entity', compact('entityData'));
    }//End User edit page



    /**
     * This section is for Pages
     */

     public function ActivePages(){

        $PageData = page::latest()->get();
        return view('admin.active-pages', compact('PageData'));

    }// End Method

    public function NewPage(){
        //resources-view-folder-filename
        $NewPageID = $this->IDGen('page');
            return view('admin.new-page', compact('NewPageID'));
    }// End Method

    // Saving pages (News and Announcements)
    public function AdminPageStore(Request $request){
        $id = Auth::user()->fname;

        //validation
        /* $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        ]);*/
        //dd($request);

        if(($request->page_subcategory) || !is_null($request->page_subcategory) || $request->page_subcategory != "") {
            $subcdata = implode(",", $request->page_subcategory);
        }else {$subcdata = null;}

        if($request->hasFile('page_image')){
            $file = $request->file('page_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);


            page::insert([
                'page_created_by' => $id,
                'page_id' => $request->page_id,
                'page_status' => $request->page_status,
                'page_type' => strtolower($request->page_type),
                'page_source' => $request->page_source,
                'page_title' => $request->page_title,
                'page_description' => $request->page_description,
                'page_image_path' => $filename,
                'page_url' => $request->page_url,
                'page_category' => strtolower($request->page_category),
                'page_subcategory' => $subcdata,
                'page_tags' => $request->page_class, //this can be extended into multiple
                'created_at' => now()

            ]);

        }else{
            page::insert([
                'page_created_by' => $id,
                'page_id' => $request->page_id,
                'page_status' => $request->page_status,
                'page_type' => strtolower($request->page_type),
                'page_source' => $request->page_source,
                'page_title' => $request->page_title,
                'page_description' => $request->page_description,
                'page_url' => $request->page_url,
                'page_category' => strtolower($request->page_category),
                'page_subcategory' => $subcdata,
                'page_tags' => $request->page_class, //this can be extended into multiple
                'created_at' => now()

            ]);
        }


        //return redirect()->route('admin.active-pages');  changing to specific page of added data
        return redirect('admin/page/edit?val='.$request->page_id);

    }//End Method

    public function AdminPageUpdate(Request $request){
        //dd($request);
        if($request->hasFile('page_image')){
            $file = $request->file('page_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/upload/admin_images/'), $filename);

            $page_stat = $request->page_status;
            if(is_null($page_stat)){$page_stat = "draft";}

            if(($request->page_subcategory) || !is_null($request->page_subcategory) || $request->page_subcategory != "") {
                $subcdata = implode(",", $request->page_subcategory);
            }else {$subcdata = null;}

            $this_page = page::where('page_id',$request->page_id)->first();
            //dd($this_page);
            $this_page->page_description = $request->page_description;
            $this_page->page_title = $request->page_title;
            $this_page->page_image_path = $filename;
            $this_page->page_url = $request->page_url;
            $this_page->page_status = $page_stat;
            $this_page->page_source = $request->page_source;
            $this_page->page_type = $request->page_type;
            $this_page->page_category = $request->page_category;
            $this_page->page_tags = $request->page_class;
            $this_page->page_subcategory = $subcdata;
            $this_page->updated_at = now();
            $this_page->save();


        }else{

            $page_stat = $request->page_status;
            if(is_null($page_stat)){$page_stat = "draft";}

            if(($request->page_subcategory) || !is_null($request->page_subcategory) || $request->page_subcategory != "") {
                $subcdata = implode(",", $request->page_subcategory);
            }else {$subcdata = null;}

            $this_page = page::where('page_id',$request->page_id)->first();
            //dd($this_page);
            $this_page->page_description = $request->page_description;
            $this_page->page_title = $request->page_title;
            $this_page->page_url = $request->page_url;
            $this_page->page_status = $page_stat;
            $this_page->page_source = $request->page_source;
            $this_page->page_type = $request->page_type;
            $this_page->page_category = $request->page_category;
            $this_page->page_tags = $request->page_class;
            $this_page->page_subcategory = $subcdata;
            $this_page->updated_at = now();
            $this_page->save();
        }



        return redirect()->route('admin.active-pages');

    }//End Method

    public function GetPageSubcategories($page_category){

         switch ($page_category) {
             case 'Editor':
                 $subcategories = config('sitevariables.sub_editor');
                 //dd(json($subcategories));
                 return response()->json($subcategories);
             case 'Author':
                 $subcategories = config('sitevariables.sub_author');
                 //dd(json($subcategories));
                 return response()->json($subcategories);
             case 'Researcher':
                 $subcategories = config('sitevariables.sub_researcher');
                 //dd(json($subcategories));
                 return response()->json($subcategories);
             case 'Reviewer':
                 $subcategories = config('sitevariables.sub_reviewer');
                 //dd(json($subcategories));
                 return response()->json($subcategories);
             default:
                 $subcategories = array_merge(config('sitevariables.sub_editor'), config('sitevariables.sub_author'), config('sitevariables.sub_researcher'), config('sitevariables.sub_reviewer'));
                 //dd(json($subcategories));
                 return response()->json($subcategories);
         }
    }// End Page SUbcategory
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
                if(is_null($ID)){return("BANNER01");}
                else{return("BANNER0".$ID['id']+1);}
            case 'page':
                $ID = page::latest('id')->first('id');
                if(is_null($ID)){return("PAGE01");}
                else{return("PAGE0".$ID['id']+1);}
            case 'user': //user
                $ID = User::latest('id')->first('id');
                if(is_null($ID)){return("USER01");}
                else{return("USER0".$ID['id']+1);}
            case 'index': //entity
                $ID = entity::latest('id')->first('id');
                if(is_null($ID)){return("INDEX01");}
                else{return("INDEX0".$ID['id']+1);}
            case 'publisher': //entity
                $ID = entity::latest('id')->first('id');
                if(is_null($ID)){return("PUB01");}
                else{return("PUB0".$ID['id']+1);}
            case 'organization': //entity
                $ID = organization::latest('id')->first('id');
                if(is_null($ID)){return("ORG01");}
                else{return("ORG0".$ID['id']+1);}
            default:
                $ID = Article::latest('id')->first('id');
                if(is_null($ID)){return("JOURNAL01");}
                else{return("JOURNAL0".$ID['id']+1);}

        }
    }

}
