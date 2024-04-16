<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_A()
    {
        return view('Administateur');
    }

    public function index_O()
    {
        return view('Organisation');
    }
    public function index_p()
    {
        return view('PFTs');
    }
    public function index_F()
    {
        return view('Evénement');
    }
    public function index_Secteur()
    {
        return view('\Admin\Secteur');
    }
    public function index_2()
    {
        return view('2');
    }

    public function showNotifications1()
    {
        auth()->user()->unreadNotifications->markAsRead();
        $unreadCount = auth()->user()->unreadNotifications->count();
    
        // الباقي من الكود...
    }

    // علامة الإشعارات كمقروءة
public function markAsRead()
{
    // استرجاع عدد الإشعارات الغير مقروءة
$unreadNotificationsCount = auth()->user()->unreadNotifications->count();

auth()->user()->unreadNotifications->markAsRead();
// إرسال قيمة العدد إلى الواجهة
return view('home', compact('unreadNotificationsCount'));

    
}

// عرض الحدث أو قائمة الإشعارات
public function showNotifications()
{
    $unreadNotificationsCount = auth()->user()->unreadNotifications->count();
    $notifications = auth()->user()->notifications;
    return view('home', compact('notifications','unreadNotificationsCount'));
}

}
