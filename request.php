// app/Http/Requests/CreateUserRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|min:6',
            'password' => 'required|min:6',
            'name' => 'required|min:6'
        ];
    }
}
