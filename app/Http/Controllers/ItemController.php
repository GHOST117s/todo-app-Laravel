<?php

namespace App\Http\Controllers;
use App\Models\Items;

use Illuminate\Http\Request;

class ItemController extends Controller
{
 //add itme

 function addItem(Request $req){
    $item = new Items();
    $item->sno = null;
    $item->item = $req->item;    
    $item->save();
    return redirect('/');



 }

 //delete btn



 function deleteItem($sno){
    $item = Items::find($sno);
    $item->delete();
    return redirect('/');

 


 }

 // edit 

 function editItem($sno){
    $items = Items::find($sno);
    return view('edit',['items'=>$items]);
    

 }

 function updateItem(Request $req){
    $item = Items::find($req->sno);
    $item->item = $req->item;
    $item->save();
    return redirect('/');




 }

 function deleteAllItem(){
        $items = Items::all();
    foreach ($items as $item)
        $item->delete();   
    return redirect('/');
 }





    //show item
    function showItem(){
        $items = Items::all();
        return view('index',['items'=>$items]);

    }
}
