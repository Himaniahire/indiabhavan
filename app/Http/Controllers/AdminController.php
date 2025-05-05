<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function userlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')->with('success','You Logged in Successfully');
        }

        return redirect('login')->with('danger','Login details are not valid');
    }

    public function index()
    {
        if(Auth::check()){
            return view('admin.index');
        }

        return redirect('login')->with('success','You are not allowed to access');
    }
    
    public function changePassword()
    {
        if(Auth::check()){
            return view('admin.change_password');
        }

        return redirect('login')->with('success','You are not allowed to access');
    }

    public function passwordChange(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required', // Adjust minimum password length as needed
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Hash the new password
        $hashedPassword = Hash::make($request->password);

        // Update user's password
        $user->password = $hashedPassword;
        $user->save();
        return redirect()->route('admin_home')->with('success', 'Password updated successfully');

    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function bookingTable(Request $request)
    {
        if (Auth::check()) {
        
            $currentDate = Carbon::now()->toDateString();
            $nextDate = Carbon::now()->addDay()->toDateString();
        
            $todayBookings = Booking::whereDate('date', $currentDate)->paginate(10);
            $nextDayBookings = Booking::whereDate('date', $nextDate)->paginate(10);
            $laterDayBookings = Booking::whereDate('date', '>', $nextDate)
            ->orderBy('date', 'asc')
            ->paginate(10);
    
            return view('admin.booking_details', compact('todayBookings', 'nextDayBookings','laterDayBookings'));
        
        }
        
        return redirect('login')->with('success', 'You are not allowed to access');
    }

    public function booking_detail_view(Booking $item, $id)
    {
        if(Auth::check()){
            $booking_detail_view = Booking::find($id)->first();
            return view('admin.booking_detail_view',compact('booking_detail_view'));
        }

        return redirect('login')->with('success','You are not allowed to access');
    }

    public function destroy(Booking $item,$id)
    {
        $item = Booking::find($id);
        $item->delete();
        return back()->with('success','Booking Detail Deleted Successfully.');
    }

    public function testimonialTable(Request $request)
    {
        if(Auth::check()){
            $testimonialtable = Testimonial::get();
            return view('admin.testimonial_details',compact('testimonialtable'));
        }

        return redirect('login')->with('success','You are not allowed to access');
    }

    public function testimonialDestroy(Testimonial $item,$id)
    {
        $item = Testimonial::find($id);
        $item->delete();
        return back()->with('success','Review Detail Deleted Successfully.');
    }
}
