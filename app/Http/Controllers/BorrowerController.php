<?php

namespace App\Http\Controllers;


use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class BorrowerController extends Controller
{

    /**
     * Contructor Method that checks if a user is Authenticated
     */

        public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $borrowers = Borrower::latest()->get();

        if ($request->ajax()) {
            $data = Borrower::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a style="background-color:#57a0ce; width: 55px;" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBorrower">Edit</a>';

                           $btn = $btn.' <a style="background-color:#ffc7c7; width: 55px;" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';

                           $btn = $btn.' <a style="background-color:#50d56e; width: 55px;" href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Details" class="details btn btn-success btn-sm viewBook">Details</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('borrowers.index',compact('borrowers'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('borrowers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name',
            'second_name',
            'last_name',
            'id_number',
            'email_address',
            'phone_number',
            'nationality',
            'city',
            'address',
            'description'
        ]);

        Borrower::create($request->all());


        return redirect()->route('borrowers.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function show(Borrower $borrower)
    {
        //

        return view('borrowers.show',compact('borrower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrower $borrower)
    {
        //

        return view('borrowers.show',compact('borrower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrower $borrower)
    {
        //


        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrower  $borrower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrower $borrower)
    {
        //

        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
