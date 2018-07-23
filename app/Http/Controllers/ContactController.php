<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact as Contact;
use Auth;

class ContactController extends Controller
{
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    
    
    public function index()
    {
        $user_id = Auth::user()->id;
        $data['contacts'] = $this->contact->where(array('user_id' => $user_id))->get();
        return view('contact/index', $data);
    }
    
    public function add()
    {
        return view('contact/add');
    }
    
    public function insert(Request $request, Contact $contact)
    {
        $data = [];
        $user_id = Auth::user()->id;
        $data['title']          = $request->input('title');
        $data['person_name']    = $request->input('person_name');
        $data['person_number']  = $request->input('person_number');
        $data['address_line_1'] = $request->input('address_line_1');
        $data['address_line_2'] = $request->input('address_line_2');
        $data['address_line_3'] = $request->input('address_line_3');
        $data['pincode']        = $request->input('pincode');
        $data['city']           = $request->input('city');
        $data['state']          = $request->input('state');
        $data['country']        = $request->input('country');
        

        $rules = array();
        $rules['title']           = 'required';
        $rules['person_name']     = 'required';
        $rules['person_number']   = 'required|numeric|digits_between:10,15';
        $rules['address_line_1']  = 'required';
        $rules['pincode']         = 'required|numeric|digits_between:6,6';
        $rules['city']            = 'required';
        $rules['state']           = 'required';
        $rules['country']         = 'required';
        
        if ($request->input('default_from') == 'yes') {
            $rules['default_from'] = 'unique:contacts,default_from';
        }
        
        if ($request->input('default_to') == 'yes') {
            $rules['default_to'] = 'unique:contacts,default_to';
        }
        $this->validate($request, $rules);

        $data['user_id'] = $user_id;
        $contact->insert($data);

        return redirect('contact');
    }
    
    public function edit($contact_id)
    {
        $data['contact_id'] = $contact_id;
        $data['contact']    = $this->contact->find($contact_id);
        return view('contact/edit', $data);
    }
    
    public function update(Request $request, $contact_id)
    {
        $data['contact_id'] = $contact_id;
        $contact    = $this->contact->find($contact_id);
        
        $rules = array();
        $rules['title']           = 'required';
        $rules['person_name']     = 'required';
        $rules['person_number']   = 'required|numeric|digits_between:10,15';
        $rules['address_line_1']  = 'required';
        $rules['pincode']         = 'required|numeric|digits_between:6,6';
        $rules['city']            = 'required';
        $rules['state']           = 'required';
        $rules['country']         = 'required';
        
        if ($request->input('default_from') == 'yes') {
            $rules['default_from'] = 'unique:contacts,default_from,'.$contact_id;
        }
        
        if ($request->input('default_to') == 'yes') {
            $rules['default_to'] = 'unique:contacts,default_to,'.$contact_id;
        }
        $this->validate($request, $rules);
        
        $contact->title          = $request->input('title');
        $contact->person_name    = $request->input('person_name');
        $contact->person_number  = $request->input('person_number');
        $contact->address_line_1 = $request->input('address_line_1');
        $contact->address_line_2 = $request->input('address_line_2');
        $contact->address_line_3 = $request->input('address_line_3');
        $contact->pincode        = $request->input('pincode');
        $contact->city           = $request->input('city');
        $contact->state          = $request->input('state');
        $contact->country        = $request->input('country');
        $contact->save();
        return redirect('contact');
    }
    
        
    public function delete($contact_id)
    {
        $contact    = $this->contact->find($contact_id);
        $contact->delete();
        return redirect('contact');
    }
}
