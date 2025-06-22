<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdjustInventoryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\AwardHistoryController;
use App\Http\Controllers\RefreshTokenController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Route::middleware('ip')->group(function () {
    Route::middleware('permission:create-transaction')->post('/', [AccountController::class, 'createSubAccount']);
    Route::middleware('permission:readAll-transaction')->get('/', [AccountController::class, 'getAllAccount']);
    Route::middleware('permission:readSingle-transaction')->get('/{id}', [AccountController::class, 'getSingleAccount']);
    Route::middleware('permission:update-transaction')->put('/{id}', [AccountController::class, 'updateSubAccount']);
    Route::middleware('permission:delete-transaction')->patch('/{id}', [AccountController::class, 'deleteSubAccount']);

    Route::post('/login', [UsersController::class, 'login']);
    Route::post('/logout', [UsersController::class, 'logout']);
    Route::post('/register', [UsersController::class, 'register']);
    //refresh token routes
    Route::get('/refresh-token', [RefreshTokenController::class, 'validationRefreshToken']);

    Route::middleware("permission:readAll-user")->get('/', [UsersController::class, 'getAllUser']);
    Route::middleware("permission:readSingle-user")->get('/{id}', [UsersController::class, 'getSingleUser']);
    Route::middleware("permission:update-user")->put("/{id}", [UsersController::class, 'updateSingleUser']);
    Route::middleware("permission:delete-user")->patch("/{id}", [UsersController::class, 'deleteUser']);

    Route::middleware('permission:create-adjust')->post("/", [AdjustInventoryController::class, 'createAdjustInventory']);
    Route::middleware('permission:readAll-adjust')->get("/", [AdjustInventoryController::class, 'getAllAdjustInvoices']);
    Route::middleware('permission:readSingle-adjust')->get("/{id}", [AdjustInventoryController::class, 'getSingleAdjustInvoice']);

    Route::middleware("permission:create-announcement")->post("/", [AnnouncementController::class, 'createSingleAnnouncement']);
    Route::middleware("permission:readAll-announcement")->get("/", [AnnouncementController::class, 'getAllAnnouncement']);
    Route::middleware("permission:readSingle-announcement")->get("/{id}", [AnnouncementController::class, 'getSingleAnnouncement']);
    Route::middleware("permission:update-announcement")->put("/{id}", [AnnouncementController::class, 'updateSingleAnnouncement']);
    Route::middleware("permission:delete-announcement")->patch("/{id}", [AnnouncementController::class, 'deletedAnnouncement']);

    Route::get('/', [AppSettingController::class, 'getSingleAppSetting']);
    Route::middleware(["permission:update-setting", 'fileUploader:1'])->put("/", [AppSettingController::class, 'updateAppSetting']);

    Route::middleware("permission:create-awardHistory")->post("/", [AwardHistoryController::class, 'createSingleAwardHistory']);
    Route::middleware("permission:readAll-awardHistory")->get("/", [AwardHistoryController::class, 'getAllAwardHistory']);
    Route::middleware("permission:readSingle-awardHistory")->get("/{id}", [AwardHistoryController::class, 'getSingleAwardHistory']);
    Route::middleware("permission:update-awardHistory")->put("/{id}", [AwardHistoryController::class, 'updateSingleAwardHistory']);
    Route::middleware("permission:delete-awardHistory")->delete("/{id}", [AwardHistoryController::class, 'deleteSingleAwardHistory']);

//});
