<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use DB;
use App\States;
use App\MainCategory;
use App\SubCategory;
use App\Advertisement;

class UsersController extends Controller
{
    public function index(){
        $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
            ->join('icons', 'icons.id', '=', 'main_categories.id')
            ->get();
        return view('pages/users', ['categories'=>$categories]);
    }
    public function fetch(Request $request){
        //echo "Sucess";
        if($request->get('nigeriastates')){
            $query = $request->get('nigeriastates');
            $data = DB::table('states')
                ->where('stateName', 'like', '%' .$query. '%')
                ->get();
                $output = '<ul style="display:block !important;" class="dropdown-menu">';
            if($data->count()>0){
                foreach($data as $row){
                    $output .= '<li class="searchState" id="search" name="searchState" style="cursor:pointer; padding:0px 15px;" value='.$row->id.' >'.$row->stateName.'</li>';
                }
                $output .= '</ul>';
                echo $output;
            }
            else{
                $output .= '<li>Record not found</li>';
                echo $output;
            }
        }
    }
    public function cities(Request $request){
        if ($request->get('id')){
           $query = $request->get('id');
           $data = DB::table('cities')
            ->where('stateid', 'like', '%' .$query. '%')
            ->get();
            $output = '';
            if($data->count()>0){
                foreach($data as $row){
                    $output .= '<li id="searchCity" name="searchCity" style="cursor:pointer;">'.$row->cityName.'</li>';
                }
                $output .= '';
                echo $output;
            }
            else{
                $output .= '<li>City not found</li>';
                echo $output;
            }
            //print_r($data);
        }
    }
    public function retrieve(Request $request){
        $data = DB::table('main_categories')->get();
        //print_r($data);
        $output = '';
        if($data->count()>0){
            foreach($data as $row){
                $output .= '<option value='.$row->id.'>'.$row->maincategory.'</option>';
            }
            $output .= '';
            echo $output;
        }
    }
    public function postads(){
        $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
            ->join('icons', 'icons.id', '=', 'main_categories.id')
            ->get();
        return view('pages/postads', ['categories'=>$categories]);
    }
    public function categories(Request $request, $maincategory, $id){
        // echo $maincategory;
        // echo '<br/>';
        // echo $id;
        if ($id == 2) {
            $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
            ->join('icons', 'icons.id', '=', 'main_categories.id')
            ->get();
            $subcategories = DB::table('main_categories')
                        ->select('*')
                        ->join('sub_categories', 'sub_categories.maincategoryid', '=', 'main_categories.id')
                        ->where(['main_categories.id'=>$id])
                        ->get();
            $state = States ::all();
            return view('pages/publishads/carsbikesads', ['categories'=>$categories, 'subcategories'=>$subcategories, 'state' =>$state]);
        }
        else if ($id ==3) {
            $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                        ->join('icons', 'icons.id', '=', 'main_categories.id')
                        ->get();
            $subcategories = DB::table('main_categories')
                        ->select('*')
                        ->join('sub_categories', 'sub_categories.maincategoryid', '=', 'main_categories.id')
                        ->where(['main_categories.id'=>$id])
                        ->get();
            $state = States ::all();
            return view('pages/publishads/mobilestablets' , ['categories'=>$categories, 'subcategories'=>$subcategories, 'state' =>$state]);
        }
        else if ($id ==4) {
            $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                        ->join('icons', 'icons.id', '=', 'main_categories.id')
                        ->get();
            $subcategories = DB::table('main_categories')
                        ->select('*')
                        ->join('sub_categories', 'sub_categories.maincategoryid', '=', 'main_categories.id')
                        ->where(['main_categories.id'=>$id])
                        ->get();
            $state = States ::all();
            return view('pages/publishads/electroAppliancesads' , ['categories'=>$categories, 'subcategories'=>$subcategories, 'state' =>$state]);
        }
        else if ($id ==5) {
            $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
            ->join('icons', 'icons.id', '=', 'main_categories.id')
            ->get();
            return view('pages/publishads/realestateads', ['categories'=>$categories]);
        }
        else if ($id ==6) {
            $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
            ->join('icons', 'icons.id', '=', 'main_categories.id')
            ->get();
            return view('pages/publishads/services', ['categories'=>$categories]);
        }
    }
    public function postCarsBikes(Request $request){
        $this->validate($request, [
            'subcategoryid' => 'required|string',
            'productname' => 'required|string',
            'yearofpurchase' => 'required|string',
            'price' => 'required|string',
            'name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'photos' => 'required|array|max:5', 
            'photos.*' => 'mimes:jpeg,jpg,png',
            //'photos' => 'required|string',
            //'photos.*' => 'image|mimes:jpg, png, jpeg, gif, svg|max:2048'
        ]);
        $ads = new Advertisement;
        $images = $request->file('photos');
        $count = 0;
        if($request->file('photos')){
            foreach($images as $item){
                if($count < 4){
                    $var = date_create();
                    $date = date_format($var, 'Ymd');
                    $imageName = $date. '_'.$item->getClientOriginalName();
                    $item->move(public_path().'/uploads/', $imageName);
                    $url = URL::to("/").'/uploads/'.$imageName;
                    $arr[] = $url;
                    $count++;
                }
            }
            $images = implode(",", $arr);
            $ads->maincategoryid = $request->input('maincategoryid');
            $ads->subcategoryid = $request->input('subcategoryid');
            $ads->productname = $request->input('productname'); 
            $ads->yearofpurchase = $request->input('yearofpurchase');
            $ads->price = $request->input('price');
            $ads->name = $request->input('name');
            $ads->mobile = $request->input('mobile');
            $ads->email = $request->input('email');
            $ads->state = $request->input('state');
            $ads->city = $request->input('city');
            $ads->photos = $images;
            $ads->save();
            return redirect('/')->with('info', 'Advertisement Published Successfully.');
            // $data = array(
            //     'maincategoryid' => $ads->maincategoryid,
            //     'subcategoryid' => $ads->subcategoryid,
            //     'productname' => $ads->productname,
            //     'yearofpurchase' => $ads->yearofpurchase,
            //     'price' => $ads->price,
            //     'name' => $ads->name,
            //     'mobile' => $ads->mobile,
            //     'email' => $ads->email,
            //     'state' => $ads->state,
            //     'city' => $ads->city,
            //     'photos' => $ads->photos,
            // );
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
        }
    }
    public function getAds(){
        $ads = DB::table('advertisements')->get();
        $output = '';
        if($ads->count() > 0){
            foreach($ads as $row){
                $output.= '<div class="col-md-4">
                    <div>
                    <img src='.strtok($row->photos, ',').' style="padding:10px !important; width:110%; height: 280px; background-size: center; background-position: center;">
                    <h3 class="product-name">'.$row->productname.'</h3>
                    <p class="price">₦'.$row->price.'</p>
                    <p class="city"><i class="fa fa-map-marker" aria-hidden="true"></i>  '.$row->city.'</p>
                    <a class="view" href='.$_SERVER['HTTP_REFERER']. 'product/view/' .$row->id. '>VIEW DETAILS</a>
                </div>
                </div>';
            }
            $output.='';
            echo $output;
        }
        else{
            $output.='<p>Not Found!</p>';
            echo $output;
        }
    }
    public function viewAds(Request $request, $maincategory, $id){
        // $data = array(
        //     'maincategory' => $maincategory,
        //     'id' => $id,
        // );
        // echo '<prev>';
        // print_r($data);
        if($id == 2){
            $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                        ->join('icons', 'icons.id', '=', 'main_categories.id')
                        ->get();
            $carsBikes = DB::table('advertisements')
                ->where(['maincategoryid' => $id])
                ->get();
            return view('pages/categories/carsbikesads', ['categories'=>$categories, 'carsBikes'=>$carsBikes]);
        }
        else if($id == 3) {
            $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                        ->join('icons', 'icons.id', '=', 'main_categories.id')
                        ->get();
            $mobilestablets = DB::table('advertisements')
                ->where(['maincategoryid' => $id])
                ->get();
            return view('pages/categories/mobilestabletsads', ['categories'=>$categories, 'mobilestablets'=>$mobilestablets]);
        }
        else if($id == 4) {
            $categories = DB::table('main_categories')
                        ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                        ->join('icons', 'icons.id', '=', 'main_categories.id')
                        ->get();
            $electroAppliances = DB::table('advertisements')
                ->where(['maincategoryid' => $id])
                ->get();
            return view('pages/categories/electronicsappliancesads', ['categories'=>$categories, 'electroAppliances'=>$electroAppliances]);
        } 
    }
    public function searchProduct(Request $request){
        //echo "I am here";
        if ($request->get('searchproduct')){
            $query = $request->get('searchproduct');
            //echo $query;
            $categories = DB::table('main_categories')
                ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                ->join('icons', 'icons.id', '=', 'main_categories.id')
                ->get();
            $data = DB::table('advertisements')
            ->where('productname', 'like', '%' .$query. '%')
            ->get();
            return view('pages/categories/searchonproduct', ['categories'=>$categories, 'data'=>$data]);
            // echo '<prev>';
            //     print_r($data);
            // echo '</prev>';
        }
    }
    public function searchAdvertisements(Request $request){
        //echo "I am here";
        if ($request->get('city') && $request->get('categories')){
             //echo $city = $request->get('city');
             //echo $categories = $request->get('categories');
             $city = $request->get('city');
             $categories = $request->get('categories');
             $data = DB::table('advertisements')
                ->where(['city' => $city, 'maincategoryid' => $categories])
                ->get();
              $categories = DB::table('main_categories')
                ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                 ->join('icons', 'icons.id', '=', 'main_categories.id')
                 ->get();
                 return view('pages/categories/searchonlocation', ['categories'=>$categories, 'data'=>$data]);
        }
    }
    public function viewProduct(Request $request, $id) {
        //echo $id;
        $categories = DB::table('main_categories')
            ->select('main_categories.id', 'main_categories.maincategory', 'icons.icons')
                ->join('icons', 'icons.id', '=', 'main_categories.id')
                ->get();
            $product = DB::table('advertisements')
            ->where(['id' => $id])
            ->get();
            return view('pages/productView', ['categories'=>$categories, 'product'=>$product]);
        }
}
