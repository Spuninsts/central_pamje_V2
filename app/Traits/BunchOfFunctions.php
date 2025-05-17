<?php

namespace App\Traits;

use App\Http\Controllers\AdminController;
use App\Models\organization;

trait BunchOfFunctions{

    public function IsNewOrgId($org_id){
        // this functions returns a new orgID if the parameter is not found.
        $admincontroller = new AdminController();
        $this_org = organization::where('org_id',$org_id)->first();

        if(!$this_org or $this_org == "" or $this_org == null or is_null($this_org)) {
            return $admincontroller->IDGen("organization");
        } else {
            return false;
        }
    }
}
