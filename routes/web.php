<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    /*
     * Devices
     */
    Route::name('devices.')->prefix('devices')->group(function () {
        Route::get('/', function () {
            $devices = \App\Models\Device::with(['bartender', 'beverage'])->get();

            return view('devices.index', compact('devices'));
        })->name('index');

        Route::get('/details/{id}', function ($id) {
            $device = \App\Models\Device::with(['bartender', 'beverage'])->find($id);

            return view('devices.details', compact('device'));
        })->name('details');

        Route::get('/add', function () {
            $bartenders = \App\Models\Bartender::all();
            $beverages = \App\Models\Beverage::all();

            return view('devices.add', compact('bartenders', 'beverages'));
        })->name('add');
        Route::post('/add', function () {
            \App\Models\Device::create(request()->all());

            return redirect()->route('devices.index');
        })->name('add');

        Route::get('/edit/{id}', function () {
            return view('devices.edit');
        })->name('edit');
    });

    /*
     * Orders
     */
    Route::name('orders.')->prefix('orders')->group(function () {
        Route::get('/', function () {
            return view('orders');
        })->name('index');

        Route::get('/cancel/{id}', function () {
            //
        })->name('cancel');

        Route::get('/fill/{id}', function () {
            //
        })->name('fill');
    });

    /*
     * Bartenders
     */
    Route::name('bartenders.')->prefix('bartenders')->group(function () {
        Route::get('/', function () {
            $bartenders = \App\Models\Bartender::all();

            return view('bartenders.index', compact('bartenders'));
        })->name('index');

        Route::get('/add', function () {
            return view('bartenders.add');
        })->name('add');
        Route::post('/add', function () {
            \App\Models\Bartender::create(request()->all());

            return redirect()->route('bartenders.index');
        })->name('add');

        Route::get('/edit/{id}', function ($id) {
            $bartender = \App\Models\Bartender::find($id);

            return view('bartenders.edit', compact('bartender'));
        })->name('edit');
        Route::post('/edit/{id}', function ($id) {
            \App\Models\Bartender::find($id)->update(request()->except(['id']));

            return redirect()->route('bartenders.index');
        })->name('edit');

        Route::get('/remove/{id}', function ($id) {
            \App\Models\Bartender::find($id)->delete();

            return redirect()->route('bartenders.index');
        })->name('remove');
    });

    /*
     * Beverages
     */
    Route::name('beverages.')->prefix('beverages')->group(function () {
        Route::get('/', function () {
            $beverages = \App\Models\Beverage::all();

            return view('beverages.index', compact('beverages'));
        })->name('index');

        Route::get('/add', function () {
            return view('beverages.add');
        })->name('add');
        Route::post('/add', function () {
            \App\Models\Beverage::create(request()->all());

            return redirect()->route('beverages.index');
        })->name('add');

        Route::get('/edit/{id}', function ($id) {
            $beverage = \App\Models\Beverage::find($id);

            return view('beverages.edit', compact('beverage'));
        })->name('edit');
        Route::post('/edit/{id}', function ($id) {
            \App\Models\Beverage::find($id)->update(request()->except(['id']));

            return redirect()->route('beverages.index');
        })->name('edit');

        Route::get('/remove/{id}', function ($id) {
            \App\Models\Beverage::find($id)->delete();

            return redirect()->route('beverages.index');
        })->name('remove');
    });
});

require __DIR__.'/auth.php';
