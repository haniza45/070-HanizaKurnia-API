// app/Http/Responses/CreateUserResponse.php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class CreateUserResponse implements Responsable
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function toResponse($request)
    {
        return response()->json([
            'data' => $this->data,
            'errors' => null
        ], 201);
    }
}
