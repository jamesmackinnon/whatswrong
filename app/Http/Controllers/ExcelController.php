<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function formSubmit(Request $request)
    {

        $fileName = time() . '.' . $request->fileimage->getClientOriginalExtension();

        $request->image->move(public_path('files'), $fileName);

        return response()->json(['success' => 'You have successfully upload image.']);

    }

}
