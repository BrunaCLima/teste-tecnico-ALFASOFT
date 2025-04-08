use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('contacts', ContactController::class)->except(['index']);
});

require __DIR__.'/auth.php';
