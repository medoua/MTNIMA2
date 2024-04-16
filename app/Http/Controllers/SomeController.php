<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function adminOnlyAction()
    {
        // تحقق مباشرة من أدوار المستخدم
        if (auth()->check() && auth()->user()->isAdmin()) {
            // الوصول المسموح للمستخدمين الذين لديهم دور 'admin'
            return view('admin.dashboard');
        } else {
            // رفض الوصول إذا كان ليس لديه دور 'admin'
            return abort(403, 'Unauthorized');
        }
    }

    public function superAdminAction()
    {
        // تحقق مباشرة من أدوار المستخدم
        if (auth()->check() && auth()->user()->isSuperAdmin()) {
            // الوصول المسموح للمستخدمين الذين لديهم دور 'super admin'
            return view('admin.super.dashboard');
        } else {
            // رفض الوصول إذا كان ليس لديه دور 'super admin'
            return abort(403, 'Unauthorized');
        }
    }

    // يمكنك استخدام middleware للتحقق من الأدوار في العديد من الوظائف
    public function __construct()
    {
        $this->middleware('checkRole:admin', ['only' => ['adminOnlyAction']]);
        $this->middleware('checkRole:super admin', ['only' => ['superAdminAction']]);
    }
}
