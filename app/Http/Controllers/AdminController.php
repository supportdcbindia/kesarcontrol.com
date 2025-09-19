<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use Validator;
use Auth;
use Log;
use App\Models\User;
use App\Models\Sector;
use App\Models\SubSector;
use App\Models\GovernmentAuthority;
use App\Models\QuestionSection;
use App\Models\UsdSetting;

class AdminController extends Controller
{
    public function AdminDashboard(){

    }


    public function viewUsers(){
      $objUsers = User::where('type',1)->orderBy('created_at','desc')->get()->keyBy('id');
      $menu = 'users';
      $submenu = 'view-user';
      return view('admin.view_users',compact('objUsers','menu','submenu'));
    }

    public function changeUserStatus(Request $request){
		$request_data = $request->all();
        $obj_data = User::find($request_data['id']);
        if($obj_data->status == 0) {
            $obj_data->status = 1;
        } else {
            $obj_data->status = 0;
        }
        $obj_data->save();
		$response = array(
			'response' => 1, 
			'message' => 'Success!  Status Changed successfully.',
			'reload' => 1,
			'isModel' =>1
		);
		return response()->json($response);
	}

    public function addSectors(Request $request){
      $request_data = $request->all();
        if($request->isMethod('post')) {
            $message = [
                'sector.required' => 'Please enter Sector'
            ];

            $validationArr = array(
                'sector' => 'required'
            );

          //  dd($request_data);
            $validator = Validator::make($request_data, $validationArr, $message);
            if($validator->fails()) {
                return response()->json(['response'=>0,'error' => $validator->errors()]);
            }
            $obj_data = new Sector();

            $slug = str_replace(' ','_',$request_data['sector']);

            if($request_data['id'] != "" && $request_data['id'] != 0) {
                $obj_data = Sector::find($request_data['id']);
            }
            $obj_data->sector_name = $request_data['sector'];
           
            if($request->hasFile('icon')){
                $file_name = $request->file('icon')->getClientOriginalName(); 
                $request->file('icon')->move(public_path('assets/icon'), $file_name);
                $file_name = url('/assets/icon'). '/'.$file_name;
                $obj_data->sector_icon = $file_name;
              //  dd($file_name);
            }
             $obj_data->slug = $this->slugText($request_data['sector']); 
             if($request_data['id'] == "" || $request_data['id'] == 0)
            {
                $obj_data->status = 1;
            }
            $obj_data->save();
            $response = array(
				'response' => 1,
				'message' => 'Success!  Sector successfully saved.',
				'reload' => 1,
				'isModel' =>1
			);
            return response()->json($response);

            // return redirect('/edit-whats-new')->with('success', 'Whats New updated successfully');
        } else {
            $sector_id = isset($request_data['sector-id']) ? $request_data['sector-id'] : 0;
            $objSector = Sector::where('id',$sector_id)->first();
            $is_edit = $sector_id!=0 ? 1 :0;
            $menu = 'sector';
            $submenu = 'add-sector';
            return view('admin.add_sector', compact(
                'submenu', 'menu','is_edit','objSector'
            ));
        }
    }

    public function viewSectors(Request $request){
      $objSectors = Sector::orderBy('created_at','desc')->get()->keyBy('id');
      $menu = 'sector';
      $submenu = 'view-sector';
      return view('admin.view_sectors',compact('objSectors','menu','submenu'));
    }

    public function addSubSectors(Request $request){
      $request_data = $request->all();
      if($request->isMethod('post')) {
        $message = [
          'sector-id.required' => 'Please select Sector',
          'sub-sector.required' => 'Please enter Sub Sector name'
      ];

      $validationArr = array(
          'sector-id' => 'required',
          'sub-sector' => 'required',
      );
      $validator = Validator::make($request_data, $validationArr, $message);
      if($validator->fails()) {
          return response()->json(['response'=>0,'error' => $validator->errors()]);
      }
      $obj_data = new SubSector();

      $slug = str_replace(' ','_',$request_data['sub-sector']);

      if($request_data['id'] != "" && $request_data['id'] != 0) {
          $obj_data = SubSector::find($request_data['id']);
      }
      $obj_data->sector_id = $request_data['sector-id'];
      $obj_data->sub_sector_name = $request_data['sub-sector'];
       $obj_data->slug = $this->slugText($request_data['sub-sector']);
      if($request_data['id'] == "" || $request_data['id'] == 0)
      {
          $obj_data->status = 1;
      }
      $obj_data->save();
      $response = array(
        'response' => 1,
        'message' => 'Success!  Sub Sector successfully saved.',
        'reload' => 1,
        'isModel' =>1
      );
      return response()->json($response);

          // return redirect('/edit-whats-new')->with('success', 'Whats New updated successfully');
      } else {
          $sectorArray = Sector::orderBy('created_at', 'desc')->get()->pluck('sector_name','id');
          $subsector_id = isset($request_data['subsector-id']) ? $request_data['subsector-id'] : 0;
          $objSubSector = SubSector::where('id',$subsector_id)->first();
          $is_edit = $subsector_id!=0 ? 1 :0; 
          $menu = 'subsector';
          $submenu = 'add-subsector';
          return view('admin.add_subsector', compact(
              'menu', 'submenu', 'sectorArray','is_edit','objSubSector'
          ));
      }
    }

    public function viewSubSectors(Request $request){
      $objSubSectors = SubSector::orderBy('created_at','desc')->get()->keyBy('id');
      $sectorArray = Sector::orderBy('created_at', 'desc')->get()->pluck('sector_name','id');
      $menu = 'subsector';
      $submenu = 'view-subsector';
      return view('admin.view_subsectors',compact('objSubSectors','sectorArray','menu','submenu'));
    }

    public function addAuthorities(Request $request){
      $request_data = $request->all();
      if($request->isMethod('post')) {
          $message = [
              'authority.required' => 'Please enter Authority'
          ];

          $validationArr = array(
              'authority' => 'required'
          );
          $validator = Validator::make($request_data, $validationArr, $message);
          if($validator->fails()) {
              return response()->json(['response'=>0,'error' => $validator->errors()]);
          }
          $obj_data = new GovernmentAuthority();
          if($request_data['id'] != "" && $request_data['id'] != 0) {
              $obj_data = GovernmentAuthority::find($request_data['id']);
          }
          $obj_data->authority_name = $request_data['authority']; 
          $obj_data->slug = $this->slugText($request_data['authority']);
          $obj_data->save();
          $response = array(
          'response' => 1,
          'message' => 'Success!  Authority successfully saved.',
          'reload' => 1,
          'isModel' =>1
        );
          return response()->json($response);

          // return redirect('/edit-whats-new')->with('success', 'Whats New updated successfully');
      } else {

        $authority_id = isset($request_data['authority-id']) ? $request_data['authority-id'] : 0;
        $objAuthority = GovernmentAuthority::where('id',$authority_id)->first();
        $is_edit = $authority_id!=0 ? 1 :0; 
            $menu = 'authority';
           $submenu = 'add-authority';
          return view('admin.add_authority', compact(
              'submenu', 'menu','is_edit','objAuthority'
          ));
      }
    }

    public function viewAuthorities(Request $request){
      $objAuthorities = GovernmentAuthority::orderBy('created_at','desc')->get()->keyBy('id');
      $menu = 'authority';
      $submenu = 'view-authority';
      return view('admin.view_authority',compact('objAuthorities','menu','submenu'));
    }
   
    public function sectorChangeStatus(Request $request){
      $request_data = $request->all();
      $obj_data = Sector::find($request_data['id']);
      if($obj_data->status == 0) {
          $obj_data->status = 1;
      } else {
          $obj_data->status = 0;
      }
      $obj_data->save();
      $response = array(
      'response' => 1,
      'message' => 'Success!  Status Changed successfully.',
      'reload' => 1,
      'isModel' =>1
      );
      return response()->json($response);
    }

    public function subSectorChangeStatus(Request $request){
      $request_data = $request->all();
      $obj_data = SubSector::find($request_data['id']);
      if($obj_data->status == 0) {
          $obj_data->status = 1;
      } else {
          $obj_data->status = 0;
      }
      $obj_data->save();
      $response = array(
      'response' => 1,
      'message' => 'Success!  Status Changed successfully.',
      'reload' => 1,
      'isModel' =>1
      );
      return response()->json($response);
    }

    public function authorityChangeStatus(Request $request){
      $request_data = $request->all();
      $obj_data = GovernmentAuthority::find($request_data['id']);
      if($obj_data->status == 0) {
          $obj_data->status = 1;
      } else {
          $obj_data->status = 0;
      }
      $obj_data->save();
      $response = array(
      'response' => 1,
      'message' => 'Success!  Status Changed successfully.',
      'reload' => 1,
      'isModel' =>1
      );
      return response()->json($response);
    }

    public function addQuestionSection(Request $request){
        $request_data = $request->all();
        if($request->isMethod('post')) {
            $message = [
                'parent-id.required' => 'Please select parent Section',
                'section-name.required' => 'Please enter Section name'
            ];
    
            $validationArr = array(
                'section-name' => 'required',
                'parent-id' => 'required',
            );
            $validator = Validator::make($request_data, $validationArr, $message);
            if($validator->fails()) {
                return response()->json(['response'=>0,'error' => $validator->errors()]);
            }

            $obj_data = new QuestionSection(); 
            if($request_data['id'] != "" && $request_data['id'] != 0) {
                $obj_data = QuestionSection::find($request_data['id']);
            }
            $getAllParentChildIds = QuestionSection::pluck('parent_id','id');
            $parent_list_array = array(); 
            if($request_data['parent-id']!=0){
                $temp_id = $request_data['parent-id'];
                while($temp_id!=0){
                    $parent_list_array[] = $temp_id;
                    $temp_id = isset($getAllParentChildIds[$temp_id]) ? $getAllParentChildIds[$temp_id] : 0;
                }
            }
            $obj_data->section_name = $request_data['section-name'];
            $obj_data->parent_id = $request_data['parent-id'];
            $obj_data->parent_list = json_encode($parent_list_array);
            $obj_data->order = isset($request_data['order']) ? $request_data['order'] : null;  
            $obj_data->save();
            $response = array(
            'response' => 1,
            'message' => 'Success!  Questions Section successfully saved.',
            'reload' => 1,
            'isModel' =>1
            );
            return response()->json($response);
  
            // return redirect('/edit-whats-new')->with('success', 'Whats New updated successfully');
        } else {
            $section_id = isset($request_data['section-id']) ? $request_data['section-id'] : 0;
            $objSectionDetail = QuestionSection::where('id',$section_id)->first();
            $objSections = QuestionSection::orderBy('created_at','asc')->get()->keyBy('id'); 
            $is_edit = $section_id!=0 ? 1 :0; 
            $menu = 'sections';
            $submenu = 'view-sections';
            return view('admin.question_sections', compact(
                'menu', 'submenu', 'objSectionDetail','is_edit','objSections'
            ));
        }
    }

    public function viewQuestions(Request $request){
        $request_data = $request->all();
        if($request->isMethod('post')) {
            $message = [
                'sector-id.required' => 'Please select Sector',
                'sub-sector.required' => 'Please enter Sub Sector name'
            ];
    
            $validationArr = array(
                'sector-id' => 'required',
                'sub-sector' => 'required',
            );
            $validator = Validator::make($request_data, $validationArr, $message);
            if($validator->fails()) {
                return response()->json(['response'=>0,'error' => $validator->errors()]);
            }
            $obj_data = new SubSector();
    
            $slug = str_replace(' ','_',$request_data['sub-sector']);
    
            if($request_data['id'] != "" && $request_data['id'] != 0) {
                $obj_data = SubSector::find($request_data['id']);
            }
            $obj_data->sector_id = $request_data['sector-id'];
            $obj_data->sub_sector_name = $request_data['sub-sector'];
            $obj_data->slug = $this->slugText($request_data['sub-sector']);
            if($request_data['id'] == "" || $request_data['id'] == 0)
            {
                $obj_data->status = 1;
            }
            $obj_data->save();
            $response = array(
            'response' => 1,
            'message' => 'Success!  Sub Sector successfully saved.',
            'reload' => 1,
            'isModel' =>1
            );
            return response()->json($response);
  
            // return redirect('/edit-whats-new')->with('success', 'Whats New updated successfully');
        } else {
            $sectorArray = Sector::orderBy('created_at', 'desc')->get()->pluck('sector_name','id');
            $subsector_id = isset($request_data['subsector-id']) ? $request_data['subsector-id'] : 0;
            $objSubSector = SubSector::where('id',$subsector_id)->first();
            $is_edit = $subsector_id!=0 ? 1 :0; 
            $menu = 'sections';
            $submenu = 'view-questions';
            return view('admin.view_questions', compact(
                'menu', 'submenu', 'sectorArray','is_edit','objSubSector'
            ));
        }
    }

    public function updateUsdSettings(Request $request){
        $request_data = $request->all(); 
        if($request->isMethod('post')) {
            $message = [
                'idr-value.required' => 'Please enter IDR value',
             ];
    
            $validationArr = array(
                'idr-value' => 'required', 
            );
            $validator = Validator::make($request_data, $validationArr, $message);
            if($validator->fails()) {
                return response()->json(['response'=>0,'error' => $validator->errors()]);
            }
       
           $settingObj =  UsdSetting::first();
           if($settingObj !=null){
            $obj_setting = UsdSetting::find($settingObj->id);
           }else{
            $obj_setting = new UsdSetting();
           }
           $obj_setting->usd_value = str_replace(",","",$request_data['idr-value']);
           $obj_setting->save();

           $response = array(
            'response' => 1,
            'message' => 'Success!  IDR value successfully saved.',
            'reload' => 1,
            'isModel' =>1
            );
            return response()->json($response);
        }else{
            $settingObj =  UsdSetting::first();
            $menu = 'settings';
            $submenu = 'usd-setting';
            return view('admin.usd_settings', compact(
                'menu', 'submenu', 'settingObj'
            ));

            UsdSetting();
        }
    }
  
    
    function slugText( $text ){
        $text = str_replace(' ','-',strtolower($text));
        $text = str_replace('&','and',$text);
        $pattern = '/[!@#$%^*()+{}\[\]:;<>,?~\\|=\/\'"]/';
        $result = preg_replace($pattern, '', $text);
        return $result;
    } 
}
