<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use Auth;
use Mail;
use Illuminate\Support\HtmlString;
use Log;
use Validator;
use App\Models\ContactUs;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{

  public function getIndex()
  {
    $countries = array('Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Ascension', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'British Virgin Islands', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Democratic Republic of Congo', 'Denmark', 'Diego Garcia', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland (Malvinas) Islands', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Inmarsat Satellite', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue Island', 'North Korea', 'Northern Marianas', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Swaziland', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'U.S. Virgin Islands', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Wallis and Futuna', 'Yemen', 'Zambia', 'Zimbabwe');

    return view('home', compact('countries'));
  }
  public function getContactUs()
  {
    $countries = array('Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Ascension', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'British Virgin Islands', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Democratic Republic of Congo', 'Denmark', 'Diego Garcia', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland (Malvinas) Islands', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Inmarsat Satellite', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue Island', 'North Korea', 'Northern Marianas', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Swaziland', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'U.S. Virgin Islands', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Wallis and Futuna', 'Yemen', 'Zambia', 'Zimbabwe');
    return view('contact', compact('countries'));
  }
  public function saveContactUs(request $request)
  {
    if ($request->isMethod('post')) {

      $requestData = $request->all();
      $messages = [
        'full_name.required' => 'Name should contain only letters',
        'full_name.regex' => 'Please enter valid full name',
        'email.required' => 'Please enter email',
        'email.regex' => 'Please enter valid email',
        'email.unique' => 'Email already exists',
        'city.required' => 'Please enter city',
        'phone_number.required' => 'Please enter phone number',
        'phone_number.digits' => 'Phone number should be 10 digit',
        'requirement.required' => 'Please enter requirement',
        'requirement.string' => 'Requirement should be string',
        'country.required' => 'Please select country name',
        'full_name.max' => 'Please enter data less than 100 characters',
        'email.max' => 'Please enter data less than 100 characters',
        'city.max' => 'Please enter data less than 100 characters',
        'requirement.max' => 'Please enter data less than 700 characters'
      ];

      // $validator = Validator::make(
      //   $requestData,
      //   [
      //     'full_name' => 'required|regex:/^[A-Za-z\s]+$/|max:100',
      //     'email' => 'required|email:unique|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|max:100',
      //     'city' => 'required|max:100',
      //     'country' => 'required',
      //     'phone_number' => 'required|digits:10',
      //     'requirement' => 'required|string|max:700',
      //     // 'recaptcha' => 'required|captcha',
      //   ],
      //   $messages
      // );

      $validator = Validator::make(
        $requestData,
        [
          'full_name' => 'required|regex:/^[\p{L}\s]+$/u|max:100',
          'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|max:100',
          'city' => 'required|max:100',
          'country' => 'required',
          'phone_number' => 'required|digits:10',
          'requirement' => 'required|string|max:700',
          // 'recaptcha' => 'required|captcha',
        ],
        $messages
      );


      if ($validator->fails()) {
        return response()->json(['response' => 0, 'error' => $validator->errors()]);
      }

      //  $response = Http::withOptions(['verify' => false,
      //   ])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
      //     'secret' => '6LfJK7MrAAAAAGh7kxGpVsASaVbnm8NSgOn5kkvS',
      //     'response' => $request->input('recaptcha'),
      //     'remoteip' => $request->ip(),
      // ]);

      // $responseBody = $response->json();
      // if (($responseBody['success'] ?? false) && ($responseBody['score'] ?? 0) >= 0.5) {
      //    $response = array(
      //       'response' => 2, 
      //       'message' => 'Could not save details. Try again later',
      //       'title' => 'Captcha Error'
      //   );
      //   return response()->json($response);
      // }
      $objContact = new ContactUs;
      $objContact->name = $requestData['full_name'];
      $objContact->email = $requestData['email'];
      $objContact->phone_number = $requestData['phone_number'];
      $objContact->city = $requestData['city'];
      $objContact->country = $requestData['country'];
      $objContact->requirement = $requestData['requirement'];
      $objContact->form_type = 1;
      $objContact->save();
      try {
        $data = array(
          'name' => $requestData['full_name'],
          'email' => $requestData['email'],
          'phone_number' => $requestData['phone_number'],
          'city' => $requestData['city'],
          'country' => $requestData['country'],
          'requirement' => $requestData['requirement'],
        );
        // return view('contact_mail',compact('data'));      
        Mail::send('contact_mail', array('data' => $data), function ($message) use ($data) {
          $message->to('sales@kesarcontrol.com')->subject('New Contact Form Submission from Your Website');
        });

      } catch (\Throwable $th) {
        Log::info('could not send mail for registering ' . $requestData['email']);
      }
      $response = array(
        'response' => 1,
        'reload' => 1,
        'isModel' => 1,
        'message' => 'Contact Form Submitted Successfully',
      );
      return response()->json($response);

      return redirect()->back()->with('success', 'Contact Form Submitted Successfully');
    }
  }
  public function requirementQuote(Request $request)
  {
    $requestData = $request->all();
    $messages = [
      'full_name.required' => 'Please enter full name',
      'full_name.regex' => 'Please enter valid full name',
      'email.required' => 'Please enter email',
      'email.email' => 'Please enter valid email',
      'email.unique' => 'Email already exists',
      'city.required' => 'Please enter location',
      'phone_number.required' => 'Please enter phone number',
      'phone_number.digits' => 'Phone number should be 10 digit',
      'requirement.required' => 'Please enter requirement',
      'requirement.string' => 'Requirement should be string',
      'country.required' => 'Please select country'

    ];

    $validator = Validator::make(
      $requestData,
      [
        'full_name' => 'required|regex:/^[A-Za-z\s]+$/',
        'email' => 'required|email|email:unique',
        'city' => 'required',
        'phone_number' => 'required|digits:10',
        'requirement' => 'required|string',
        'country' => 'required'
      ],
      $messages
    );

    if ($validator->fails()) {
      return response()->json(['response' => 0, 'error' => $validator->errors()]);

      // return redirect()->back()->withErrors($validator->errors())->withInput();
      return response()->Json(['status' => 'failed', 'errors' => $validator->errors()]);
    }
    $objContact = new ContactUs;
    $objContact->name = $requestData['full_name'];
    $objContact->email = $requestData['email'];
    $objContact->phone_number = $requestData['phone_number'];
    $objContact->city = $requestData['city'];
    $objContact->requirement = $requestData['requirement'];
    $objContact->country = $requestData['country'];
    $objContact->form_type = 2;
    $objContact->save();
    $response = array(
      'response' => 1,
      'reload' => 1,
      'isModel' => 1,
      'message' => 'Request qoute Submitted Successfully',
    );
    return response()->json($response);
    //  return response()->Json(['status'=>'success','message'=>'Contact Form Submitted Successfully']);
  }
  public function newLetter(Request $request)
  {
    if ($request->isMethod('post')) {
      $requestData = $request->all();
      $messages = [
        'email.required' => 'Please enter email',
        'email.email' => 'Please enter valid email',
        'email.regex' => 'Please enter valid email',
        'email.unique' => 'Email already exists',
        'email.rfc' => 'Email domain is not valid',
        'email.max' => 'Please enter valid email',
      ];
      $validator = Validator::make($requestData, [
        'email' => 'required|email|unique:suscribes,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|max:255',
        // 'recaptcha' => 'required|captcha',
      ], $messages);

      if ($validator->fails()) {
        return response()->json(['response' => 0, 'error' => $validator->errors()]);
      }

      $response = Http::withOptions([
        'verify' => false,
      ])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LfJK7MrAAAAAGh7kxGpVsASaVbnm8NSgOn5kkvS',
            'response' => $request->input('recaptcha'),
            'remoteip' => $request->ip(),
          ]);

      $responseBody = $response->json();
      if (($responseBody['success'] ?? false) && ($responseBody['score'] ?? 0) >= 0.5) {
        $response = array(
          'response' => 2,
          'message' => 'Could not save details. Try again later',
          'title' => 'Captcha Error'
        );
        return response()->json($response);
      }

      $objNew = new Newsletter();
      $objNew->email = $requestData['email'];
      $objNew->save();
      $email = $requestData['email'];


      try {
        $data = array(
          'email' => $email,
        );
        // return view('subscripion_mail',compact('data'));      
        Mail::send('subscripion_mail', array('data' => $data), function ($message) use ($data) {
          $message->to('service@kesarcontrol.com')->subject('New Newsletter Subscription');
        });

        //  return view('subscripion_mail_user',compact('data'));      
        Mail::send('subscripion_mail_user', array('data' => $data), function ($message) use ($data, $email) {
          $message->to(trim($email))->subject('Welcome to Kesar Control Systems!');
        });

      } catch (\Throwable $th) {
        Log::info('could not send mail for registering ' . $requestData['email']);
      }

      $response = array(
        'response' => 1,
        'reload' => 1,
        'isModel' => 1,
        'message' => 'Newsletter subscription done successfully',
      );
      return response()->json($response);

      return response()->Json(['status' => 'success', 'message' => 'Newsletter added successfully']);
    }
  }

  public function getBlogs()
  {
    $popularBlogs = \App\Models\Blog::with('category')->where('show_at', 2)->orderByDesc('id')->get();
    $trendingBlogs = \App\Models\Blog::with('category')->where('show_at', 1)->orderByDesc('id')->get();
    $blogs = \App\Models\Blog::with('category')->where('show_at',3)->get();
    $categories = \App\Models\BlogCategory::all();
    return view('blogs', compact('blogs', 'categories', 'popularBlogs', 'trendingBlogs'));
  }

  public function blogDetail($slug)
  {
    $blog = \App\Models\Blog::with('category')->where('slug', $slug)->firstOrFail();
    $previousBlogs = \App\Models\Blog::with('category')
      ->where('id', '<', $blog->id)
      ->orderByDesc('id')
      ->limit(5)
      ->get();
    return view('blog_detail', compact('blog', 'previousBlogs'));
  }

  public function testEmail()
  {

    $data = array(
      'email' => 'chinmayaskeer27@gmail.com',
    );
    //  return view('subscripion_mail',compact('data'));      
    Mail::send('subscripion_mail', array('data' => $data), function ($message) use ($data) {
      $message->to('chinmayaskeer27@gmail.com')->subject('New email subscribed');
    });

  }

  public function getIndexPage($slug)
  {
    // return redirect()->route('home');
     return redirect('/', 301); 
    //  return view('index_page');
  }
}
