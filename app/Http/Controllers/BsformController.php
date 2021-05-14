<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biblestudy;

class BsformController extends Controller
{
   public function requestlists (Request $request) {

    $bst = Biblestudy::all();
    return view ('/requestlists', compact ('bst'));
   }

   public function bsschedule (Request $request) {

    $bst = new Biblestudy();
    return view ('/bsschedule', compact ('bst'));
   }
   public function createform (Request $request) {

    $bst = new Biblestudy();
    $bst->name = $request-> name;
    $bst->email = $request-> email;
    $bst->contact = $request-> contact;
    $bst->birthdate = $request-> birthdate;
    $bst->religion = $request-> religion;
    $bst->bsdate = $request-> bsdate;
    $bst->bstime= $request-> bstime;
    $bst->bslocation = $request-> bslocation;
    
   if ($bst->save()) {
        return redirect ('/thank-you');
   }
        return redirect ('/thank-you');
   }
   
   public function thankyou (Request $request) {

    $bst = new Biblestudy();
    return view ('/thankyou');
   }
}