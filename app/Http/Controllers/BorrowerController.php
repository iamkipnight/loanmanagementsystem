<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    public function index()
    {
        //

        //$data = Borrower::latest()->paginate(5);
       // $data = Borrower::latest()->orderBy('id', 'asc')->paginate(5);

       $data= DB::table('borrowers')->orderBy('id', 'desc')->paginate(10);

        return view('borrowers.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


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
        //'first_name', 'second_name','last_name','id_number','email_address','phone_number','nationality','city','address','description'

        $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'second_name' => 'required',
            'id_number' => 'required',
            'email_address',
            'phone_number' => 'required',
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
