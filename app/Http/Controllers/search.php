<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Profile;
use App\Models\User;


class search extends Controller
{
  public function index()
  {
	
    if(Auth::check())
    {
      return view('layout/home');
    }
    else{
      return redirect('login');
    }
  }
public function updateloc(Request $req)
{
$user=Auth::id();
$pro= User::where('id', $user)->first();
if ($req->has('lat'))
{
  $update = [
    'lat' => $req->lat,
    'lang' => $req->lang,
  ];
  User::where('id', $user)->update($update);
}

}

  public function searchtutor(Request $req)
  {
	
		$s=$req->search_item;
		$tutors=profile::query()
			->where('subj1', 'LIKE', "%{$s}%") 
			->orWhere('subj2', 'LIKE', "%{$s}%") 
			->orWhere('subj3', 'LIKE', "%{$s}%")
			->orWhere('subj4', 'LIKE', "%{$s}%")
			->orWhere('subj5', 'LIKE', "%{$s}%")
			->orWhere('subj6', 'LIKE', "%{$s}%")    
			->get();

		if( $req->is('api/*')){
			return ['status' => true, 'data' => $tutors];
		} else {
			return view('layout.result', ['tutors' => $tutors]);
		}
    
    
  }
  public function searchNearByTutor(Request $req)
  {
	
		$user = Auth::user();
		$user_lat = $user->lat;
		$user_lang = $user->lang; 
		$nearByTutors = [];
		$diff = 5;
		if($user_lat != null && $user_lang != null) {
			$tutors=User::where('type', 'tutor')->with('profile')->get();	
			if($tutors) {
				foreach($tutors as $k => $tutor) {
					$tutor_lat = $tutor->lat;		
					$tutor_lang = $tutor->lang;		
					if($tutor_lat != null && $tutor_lang != null) {
						$distance = $this->distance($user_lat, $user_lang, $tutor_lat, $tutor_lang, 'K');
						if($distance <= $diff) {
							$tutor->distance = $distance;
							$nearByTutors[] = $tutor;
						}

					}
				}
			}
		}
			if( $req->is('api/*')){
				return ['status' => true, 'data' => $nearByTutors];
			} else {
				return view('layout.result', ['tutors' => $nearByTutors]);
			}
    
    
  }
  	function distance($lat1, $lon1, $lat2, $lon2, $unit) {
		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);
	
		if ($unit == "K") {
			return ($miles * 1.609344);
		} else if ($unit == "N") {
			return ($miles * 0.8684);
		} else {
			return $miles;
		}
  	}
}
