<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdjustInventoryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\AwardHistoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartOrderController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CourierMediumController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryChallanController;
use App\Http\Controllers\DeliveryFeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DesignationHistoryController;
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

    Route::middleware("permission:create-award")->post("/", [AwardController::class, 'createSingleAward']);
    Route::middleware("permission:readAll-award")->get("/", [AwardController::class, 'getAllAward']);
    Route::middleware("permission:")->get("/{id}", [AwardController::class, 'getSingleAward']);
    Route::middleware("permission:update-award")->put("/{id}", [AwardController::class, 'updateSingleAward']);
    Route::middleware("permission:delete-award")->patch("/{id}", [AwardController::class, 'deleteSingleAward']);

    Route::middleware('permission:create-cartOrder')->post("/", [CartOrderController::class, 'createSingleCartOrder']);
    Route::middleware('permission:create-cartReOrder')->post("/reOrder", [CartOrderController::class, 'createReOrderForReturn']);
    Route::middleware('permission:readAll-cartOrder')->get("/", [CartOrderController::class, 'getAllCartOrder']);
    Route::middleware('permission:readSingle-cartOrder')->get("/{id}", [CartOrderController::class, 'getSingleCartOrder']);
    Route::middleware('permission:update-cartOrder')->patch("/order", [CartOrderController::class, 'updateCartOrderStatus']);

    Route::middleware('permission:create-cart')->post("/", [CartController::class, 'createCart']);
    Route::middleware('permission:readAll-cart')->get("/", [CartController::class, 'getAllCart']);
    Route::middleware('permission:readSingle-cart')->get("/customer/{id}", [CartController::class, 'getCartByUserId']);
    Route::middleware('permission:readSingle-cart')->get("/{id}", [CartController::class, 'getSingleCart']);
    Route::middleware('permission:readSingle-cart')->put("/cart-product/{id}", [CartController::class, 'updateSingleCartProduct']);

    Route::get("/public", [ColorsController::class, 'getPublicColors']);

    Route::middleware('permission:create-color')->post("/", [ColorsController::class, 'createSingleColors']);
    Route::middleware('permission:readAll-color')->get("/", [ColorsController::class, 'getAllColors']);
    Route::middleware('permission:readAll-color')->get("/{id}", [ColorsController::class, 'getSingleColors']);
    Route::middleware('permission:update-color')->put("/{id}", [ColorsController::class, 'updateSingleColors']);
    Route::middleware('permission:delete-color')->patch("/{id}", [ColorsController::class, 'deleteSingleColors']);

    Route::middleware('permission:create-coupon')->post('/', [CouponController::class, 'createCoupon']);
    Route::middleware('permission:readAll-coupon')->get('/', [CouponController::class, 'getAllCoupon']);
    Route::middleware('permission:readAll-coupon')->get('/valid', [CouponController::class, 'getAllValidCoupon']);

    Route::get('/valid/{coupon}', [CouponController::class, 'getSingleValidCoupon']);
    Route::middleware('permission:readSingle-coupon')->get('/{id}', [CouponController::class, 'getSingleCoupon']);
    Route::middleware('permission:update-coupon')->put('/{id}', [CouponController::class, 'updateSingleCoupon']);
    Route::middleware('permission:delete-coupon')->patch('/{id}', [CouponController::class, 'deleteCoupon']);

    Route::middleware('permission:create-courierMedium')->post("/", [CourierMediumController::class, 'createSingleCourierMedium']);
    Route::middleware('permission:readAll-courierMedium')->get("/", [CourierMediumController::class, 'getAllCourierMedium']);
    Route::middleware('permission:readAll-courierMedium')->get("/{id}", [CourierMediumController::class, 'getSingleCourierMedium']);
    Route::middleware('permission:update-courierMedium')->put("/{id}", [CourierMediumController::class, 'updateSingleCourierMedium']);
    Route::middleware('permission:delete-courierMedium')->patch("/{id}", [CourierMediumController::class, 'deleteSingleCourierMedium']);

    Route::middleware(['permission:create-currency'])->post("/", [CurrencyController::class, 'createSingleCurrency']);

    Route::middleware('permission:readAll-currency')->get("/", [CurrencyController::class, 'getAllCurrency']);
    Route::middleware('permission:readSingle-currency')->get("/{id}", [CurrencyController::class, 'getSingleCurrency']);
    Route::middleware(['permission:update-currency'])->put("/{id}", [CurrencyController::class, 'updateSingleCurrency']);
    Route::middleware('permission:delete-currency')->patch("/{id}", [CurrencyController::class, 'deleteSingleCurrency']);

    Route::post("/login", [CustomerController::class, 'customerLogin']);
    Route::post("/logout", [CustomerController::class, 'Logout']);
    Route::post("/", [CustomerController::class, 'createSingleCustomer']);
    Route::post("/register", [CustomerController::class, 'registerCustomer']);

    Route::middleware('permission:update-customer')->patch("/reset-password/{id}", [CustomerController::class, 'resetPassword']);
    Route::middleware('permission:readSingle-customer')->get('/profile', [CustomerController::class, 'getProfile']);
    Route::middleware('permission:update-customer')->put("/profile/update", [CustomerController::class, 'profileUpdate']);

    Route::post("/request-forgot-password", [CustomerController::class, 'requestForgetPassword']);
    Route::patch("/forgot-password", [CustomerController::class, 'forgotPassword']);

    Route::middleware('permission:readAll-customer')->get("/", [CustomerController::class, 'getAllCustomer']);
    Route::middleware('permission:readSingle-customer')->get("/{id}", [CustomerController::class, 'getSingleCustomer']);
    Route::middleware('permission:update-customer', 'fileUploader:1')->put("/{id}", [CustomerController::class, 'updateSingleCustomer']);
    Route::middleware('permission:delete-customer')->patch("/{id}", [CustomerController::class, 'deleteSingleCustomer']);

    Route::get("/", [DashboardController::class, 'getDashboardData']);

    Route::middleware('permission:create-deliveryChallan')->post('/', [DeliveryChallanController::class, 'createDeliveryChallan']);
    Route::middleware('permission:readAll-deliveryChallan')->get('/',[DeliveryChallanController::class,'getAllDeliveryChallan']);
    Route::middleware('permission:readSingle-deliveryChallan')->get('/{id}',[DeliveryChallanController::class,'getSingleDeliveryChallan']);
    Route::middleware('permission:delete-deliveryChallan')->patch('/{id}',[DeliveryChallanController::class,'deleteDeliveryChallan']);

    Route::middleware('permission:create-deliveryFee')->post('/',[DeliveryFeeController::class,'createDeliveryFee']);
    Route::middleware('permission:readAll-deliveryFee')->get('/',[DeliveryFeeController::class,'getAllDeliveryFees']);
    Route::middleware('permission:update-deliveryFee')->put('/{id}',[DeliveryFeeController::class,'updateDeliveryFee']);
    Route::middleware('permission:delete-deliveryFee')->patch('/{id}',[DeliveryFeeController::class,'deleteDeliveryFee']);

    Route::middleware('permission:create-department')->post("/", [DepartmentController::class, 'createSingleDepartment']);
    Route::middleware('permission:readAll-department')->get("/", [departmentController::class, 'getAllDepartment']);
    Route::middleware('permission:')->get('/{id}', [departmentController::class, 'getSingleDepartment']);
    Route::middleware('permission:update-department')->put("/{id}", [departmentController::class, 'updateSingleDepartment']);
    Route::middleware('permission:delete-department')->patch("/{id}", [departmentController::class, 'deletedDepartment']);

    Route::middleware('permission:create-designationHistory')->post("/", [DesignationHistoryController::class, 'createSingleDesignationHistory']);
    Route::middleware('permission:readAll-designationHistory')->get("/", [DesignationHistoryController::class, 'getAllDesignationHistory']);
    Route::middleware('permission:readSingle-designationHistory')->get("/{id}", [DesignationHistoryController::class, 'getSingleDesignationHistory']);
    Route::middleware('permission:update-designationHistory')->put("/{id}", [DesignationHistoryController::class, 'updateSingleDesignationHistory']);
    Route::middleware('permission:delete-designationHistory')->delete("/{id}", [DesignationHistoryController::class, 'deleteSingleDesignationHistory']);

    Route::middleware('permission:create-designation')->post("/", [DesignationController::class, 'createSingleDesignation']);
    Route::middleware('permission:readAll-designation')->get("/", [DesignationController::class, 'getAllDesignation']);
    Route::middleware('permission:readSingle-designation')->get("/{id}", [DesignationController::class, 'getSingleDesignation']);
    Route::middleware('permission:update-designation')->put("/{id}", [DesignationController::class, 'updateSingleDesignation']);
    Route::middleware('permission:delete-designation')->patch("/{id}", [DesignationController::class, 'deleteSingleDesignation']);

//});
