<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\individualDelegates;
use App\delegations;
use App\delegationsDelegates;

class AdminController extends Controller
{
    // ## -- 1. View Admin Page
    public function viewAdminLanding(){
        return view("admin.signin");
    }

    // ## -- 2. View Admin Dashboard
    public function viewAdminDashboard(){
        return view("admin.dashboardContents.landing");
    }

    // ## -- 3. View Delegation Dashboard
    public function viewDelegationDashboard(){
        return view("admin.dashboardContents.delegation");
    }

    // ## -- 4. View Announcement Dashboard
    public function viewAnnouncementDashboard(){
        return view("admin.dashboardContents.announcement");
    }

    // ## -- 5. View Press Dashboard
    public function viewPressDashboard(){
        return view("admin.dashboardContents.press");
    }
}
