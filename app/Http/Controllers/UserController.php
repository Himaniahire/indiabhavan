<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingConfirmationOwner;
use App\Mail\ContactMail;
use Facades\Label84\HoursHelper\HoursHelper;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
    //     $today_date = date('Y-m-d');
    //     $today_day = Carbon::parse($today_date)->format('l');

    //   $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
    //     $week_ends_array = ['Friday', 'Saturday'];
    //     $week_sunday_array = ['Sunday'];

    //     function excludeTimes(Collection $hours, array $exclusions) {
    //         return $hours->filter(function($time) use ($exclusions) {
    //             return !in_array($time, $exclusions);
    //         });
    //     }

    //     if (in_array($today_day, $week_ends_array)) {
    //         $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
    //         $exclusions = ['15:00', '15:30'];
    //         $hours = excludeTimes($hours, $exclusions);
    //     } elseif (in_array($today_day, $week_days_array)) {
    //         $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
    //         $exclusions = ['15:00', '15:30'];
    //         $hours = excludeTimes($hours, $exclusions);
    //     } elseif (in_array($today_day, $week_sunday_array)) {
    //         $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
    //         // No exclusions for Sunday
    //     } else {
    //         $hours = collect([]);
    //     }
    $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }

        return view('index',compact('hours'));
    }

    public function about()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('about_us',compact('hours'));
    }

    public function contact()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('contact_us',compact('hours'));
    }

    public function sendContactEmail(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Collect the validated data
        $emailContactData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send the email
        Mail::to('info@indiabhavan.ie')->send(new ContactMail($emailContactData));

        // Redirect with a success message
        return redirect()->route('contact')->with('success', 'Send Mail Successfully');
    }

    public function gallery()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('gallery',compact('hours'));
    }

    public function itake()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('i_take',compact('hours'));
    }

    public function lunch()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('lunch',compact('hours'));
    }

    public function mmenu()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('m_menu',compact('hours'));
    }

    public function menu()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('menu',compact('hours'));
    }

    public function reservation()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
    
        return view('reservation', compact('hours'));
    }

    public function bookingTable(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'guests' => 'required|integer|min:1|max:20',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string',

        ]);

        // Check if selected date is Monday
         $bookingDate = Carbon::parse($request->date);
        // Check if total guests exceed 20 for the given time slot
        $startTime = Carbon::parse($request->time);
        $endTime = $startTime->copy()->addHours(2);
        $existingGuestsCount = Booking::whereDate('date', $bookingDate)
            ->whereBetween('time', [$startTime->format('H:i:s'), $endTime->format('H:i:s')])
            ->sum('guests');

        if ($existingGuestsCount + $request->guests > 20) {
            return redirect()->back()->with('danger', 'Slot is already booked. Please choose another time.');
        }

        // Create booking if checks pass
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->email = (string) $request->email;
        $booking->guests = $request->guests;
        $booking->date = $bookingDate->format('Y-m-d');
        $booking->time = $startTime->format('H:i:s');
        $booking->message = $request->message;
        $booking->save();

        // Send confirmation email
        Mail::to($request->email)->send(new BookingConfirmation($booking));

        Mail::to('info@indiabhavan.ie')->send(new BookingConfirmationOwner($booking));


        return redirect()->back()->with('success', 'Your table is booked!');
    }

    public function reviews()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        $testimonials = Testimonial::get();
        return view('reviews',compact('testimonials','hours'));
    }

    public function reviewStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'review' => 'required',
        ]);

        $input = $request->all();

        Testimonial::create($input);

        return redirect()->back();
    }

    public function take()
    {
        $today_date = date('Y-m-d');
        $today_day = Carbon::parse($today_date)->format('l');
    
        $week_days_array = ['Tuesday', 'Wednesday', 'Thursday'];
        $week_ends_array = ['Friday', 'Saturday'];
        $week_sunday_array = ['Sunday'];
    
        function excludeTimes(Collection $hours, array $exclusions) {
            return $hours->filter(function($time) use ($exclusions) {
                return !in_array($time, $exclusions);
            });
        }
    
        // Default empty hours
        $hours = collect([]);
    
        // Special date override
        if ($today_date == '2025-03-17') {
            // Allow booking on Monday (17-03-2025) with custom hours if needed
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        }
        // Normal logic
        elseif (in_array($today_day, $week_ends_array)) {
            $hours = HoursHelper::create('10:30', '24:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_days_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            $exclusions = ['15:00', '15:30'];
            $hours = excludeTimes($hours, $exclusions);
        } elseif (in_array($today_day, $week_sunday_array)) {
            $hours = HoursHelper::create('10:30', '23:00', 30, 'H:i');
            // No exclusions for Sunday
        }
        return view('take',compact('hours'));
    }

    public function sendEmail(Request $request)
    {
       $emailData = [
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message,
       ];

       Mail::to('himaniahiretechomax@gmail.com')->send(new BookingConfirmation($emailData));
    }
}
