use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        'message' => 'Berhasil mengakses API Users!',
        'status' => 'success'
    ]);
});
