<?php

namespace Scholr\Http\Controllers;

use Illuminate\Http\Request;

use Scholr\Http\Requests;
use Scholr\Http\Requests\SubjectAssignedRequest;
use Scholr\Http\Controllers\Controller;
use Auth;
use Scholr\Teacher;
use Scholr\Subject;
use Scholr\Classe;
use Scholr\SubjectAssigned;

class SubjectAssignedController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();

        $staff = Teacher::all();
        $classList = Classe::lists('name', 'id');
        $subjectList = Subject::lists('name', 'id');

        $subjectAssigned = SubjectAssigned::all();

        return view('admin.subjectAssigned.index', compact('subjectList', 'classList', 'staff', 'user', 'assignedClass', 'subjectAssigned'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SubjectAssignedRequest $request)
    {

        $subjectAssigned = SubjectAssigned::where('teacher_id', $request->teacher_id)
                                            ->where('classe_id', $request->classe_id)
                                            ->where('subject_id', $request->subject_id)->get()->count();


        if($subjectAssigned > 0)                                    
        {
            flash('Class and Subject Already been Assigned to Teacher');
            return redirect('subjectAssigned');
        }
        

        $input = $request->all();

        SubjectAssigned::create($input);
        flash('Class and Subject has been Assigned to Teacher');
        return redirect('subjectAssigned');
    }

    public function destroy($teacher_id, $classe_id, $subject_id)
    {
        $subjectAssigned = SubjectAssigned::where([
                'teacher_id' => $teacher_id,
                'classe_id' => $classe_id,
                'subject_id' => $subject_id
            ]);
        $subjectAssigned->delete();

        flash('Assigned Class Subject Deleted');
        return redirect('subjectAssigned');
    }

    public function missingMethod($parameters = array())
    {
        return redirect('/');
    }
}
