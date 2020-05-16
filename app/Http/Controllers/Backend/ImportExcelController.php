<?php

namespace App\Http\Controllers\Backend;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    
    public function index(){
        $data = DB::table('products')->orderBy('id','DESC')->get();
        return view('backend.excel', compact('data'));
    }
    
    public function export() 
    {
        
        return Excel::download( new UsersExport, 'users.xlsx');
    }
    
    public function import(Request $request){
        // $this->validate($request,[
            //     'select_file' =>'required|mimes:xls, xlsx'
            // ]);
            
            //     $path=$request->file('select_file')->getRealPath();
            
            //     $data= Excel::load($path)->get();
            
            //     if($data->count()>0){
                //         foreach($data->toArray() as $key => $value){
                    //             foreach($value as $row){
                        //                 $insert_data[] = array(
                            //                     'category_id' => $row['category_id'],
                            //                     'tag_id' => $row['tag_id'],
                            //                     'slug'=>$row['slug'],
                            //                     'name' => $row['name'],
                            //                     'price' => $row['price'],
                            //                     'image' => $row['image'],
                            //                     'quantity' => $row['quantity'],
                            //                     'color' => $row['color'],
                            //                     'size' => $row['size'],
                            //                     'promotion' => $row['promotion'],
                            //                     'description' => $row['description'],
                            //                     'detail' => $row['detail']
                            
                            //                 );
                            //             }
                            //         }
                            
                            //         if(!empty($insert_data)){
                                //             DB::table('product')->insert($insert_data);
                                //         }
                                //     }
                                //      return back()->with('success', 'Import success');
                                
                                // dd($request);
                                Excel::import(new UsersImport,request()->file('file'));
                                
                                return back();
                            }
                            
                            
                        }
                        