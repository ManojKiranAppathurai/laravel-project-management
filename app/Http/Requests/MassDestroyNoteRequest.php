<?php

namespace App\Http\Requests;

use App\Note;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyNoteRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('note_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:notes,id',
        ];
    }
}
