<?php

namespace App\Http\Controllers;

class TaxiDriverController extends Controller
{
   function show(string $record_id) 
   {
   		try {
        	$records = (array) json_decode(file_get_contents("https://script.google.com/macros/s/AKfycbyzQeOjxOupQt3SvQPN45BtpJJN7Rc2Ap62cwL7JeqsWpz8ipkYY6pc/exec?record_id={$record_id}"), true);
        	if(array_key_exists('response', $records) && empty($records['response']['data'])) throw new \Exception("no records found for {$record_id}");
        	
        	$driver = $records['response']['data'][0];
        	// dd($records, $driver);
        } catch (\Exception $e)
        {
        	$driver =  ['name' => 'Unknown Person', 'plates' => 'unknown', 'status' => 'unknown' ];
        }
   
   		$driver['short_url'] = file_get_contents("https://qrtag.net/api/qr.png?url=" . urlencode(route('taxi-driver', ['record_id' => $record_id ])));
   		
   		return view('drivers.show', $driver);
   }

	function print(string $record_id = null)
    {
    	try {
        	$records = (array) json_decode(file_get_contents(sprintf("https://script.google.com/macros/s/AKfycbyzQeOjxOupQt3SvQPN45BtpJJN7Rc2Ap62cwL7JeqsWpz8ipkYY6pc/exec%s", is_null($record_id)? "" : "?record_id=$record_id")), true);
        	
        	if(empty($records['response']['data'])) throw new \Exception("no records found!");
        	
        	else if(is_null($record_id)) $driver = array_pop($records['response']['data'] );
        
            else $driver = $records['response']['data'][0];
        	
        	$driver['short_url'] = file_get_contents("https://qrtag.net/api/qr.png?url=" . urlencode(route('taxi-driver', ['record_id' => $record_id ])));
        
        } catch (\Exception $e)
        {
        	abort(404, "No records found");
        }
   		
   		return view('drivers.print', $driver);
    }
}
