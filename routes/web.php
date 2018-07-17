<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $config['center']='32 Dhanmondi Bridge,Bangladesh';
  $config['zoom']='14';
  $config['map_height']='500px';
  //$config['geocodeCaching']= true;

  //$config['map_width']='false';
  $config['scrollwheel']=false;

GMaps::initialize($config);

$marker['position'] = 'Shukrabad';
$marker['infowindow_content']='Shukrabad Bajar';
GMaps::add_marker($marker);



$marker['position'] = 'Nilkhet';
$marker['infowindow_content']='Nilkhet Bus Stop';
GMaps::add_marker($marker);
$marker['position'] = 'Dhaka City College';
$marker['infowindow_content']='Dhaka City College';
GMaps::add_marker($marker);


$map = GMaps::create_map();




    return view('welcome')->with('map',$map);
});
