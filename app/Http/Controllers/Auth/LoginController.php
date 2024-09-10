<?php

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // تحقق من التسجيل الناجح، ثم توجيه المستخدم إلى لوحة التحكم
            return redirect()->intended('/dashboard');
        }

        // إذا فشل تسجيل الدخول، ارجع إلى صفحة تسجيل الدخول مع رسالة خطأ
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
