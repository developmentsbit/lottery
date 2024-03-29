<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MenuLabelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SoftwareSettingsController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\UserThemeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\CashInRequestController;
use App\Http\Controllers\GameSetupController;
use App\Http\Controllers\LotteryHistoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeMessageController;
use App\Http\Controllers\YouTubeVideoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\CashOutRequestController;
use App\Http\Controllers\RegisteredMemberController;
use App\Http\Controllers\LotteryNumbersController;
use App\Http\Controllers\AllLotteryController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\MemberPostViewController;
use App\Http\Controllers\CountrySetupController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentAccountsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    // Route::get('/', function () {
    //    return view('frontend.layouts.home');
    // });


/**
 *
 * Frontend Routes Goes here
 */
Route::get('/',[FrontendController::class,'index']);
Route::get('/AboutUs',[FrontendController::class,'about_us']);
Route::get('BuySell',[FrontendController::class,'buy_sell']);
Route::get('LotteryResult',[FrontendController::class,'lottery_result']);
Route::get('AwardsPrize',[FrontendController::class,'awards_prize']);
Route::get('Deposit',[FrontendController::class,'deposit']);
Route::get('Payout',[FrontendController::class,'payout']);
Route::get('AgentList',[FrontendController::class,'agent_list']);
Route::get('VisionMission',[FrontendController::class,'mission_vision']);
Route::get('fees',[FrontendController::class,'fees']);
Route::get('TermsCondition',[FrontendController::class,'terms_conditions']);
Route::get('ContactUs',[FrontendController::class,'contact_us']);
Route::get('show_lottery_report/{id}',[FrontendController::class,'show_lottery'])->name('lottery_info.show_report');

 /**
  *
  */

Route::get('/agent',[BackendController::class,'agent']);

Route::post('changeLocale',[LanguageController::class,'changeLocale']);

// use change password
Route::get('reset_pass',[UserController::class,'reset_pass'])->name('user.reset_pass');
Route::get('change_pass',[UserController::class,'change_pass'])->name('user.change_pass');
Route::post('submit_change_pass',[UserController::class,'submit_change_pass'])->name('user.submit_change_pass');
Route::post('submit_email',[UserController::class,'submit_email'])->name('user.submit_email');
Route::get('check_otp/{email}',[UserController::class,'check_otp'])->name('user.check_otp');
Route::get('checkingOtp/{otp}/{email}',[UserController::class,'checkingOtp']);
Route::get('resend_otp/{email}',[UserController::class,'resend_otp'])->name('user.resend_otp');
Route::post('submit_otp/{email}',[UserController::class,'submit_otp'])->name('user.submit_otp');
Route::get('new_pass/{email}',[UserController::class,'new_pass'])->name('user.new_pass');
Route::post('submit_pass',[UserController::class,'submit_pass'])->name('user.submit_pass');

Route::group(['middleware' => ['can:Dashboard index']], function () {

Route::post('webcamStore',[BackendController::class,'webcam'])->name('webcam.capture');

Route::get('/dashboard',[BackendController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('getQuickMenu',[UserController::class,'getQuickMenu']);

    Route::resources([
        'menu_label'    => MenuLabelController::class,
        'user'          => UserController::class,
        'role'          => RoleController::class,
        'branch'        => BranchController::class,
        'menu'          => MenuController::class,
        'software_info' => SoftwareSettingsController::class,
        'user_theme' => UserThemeController::class,
        'payment_method' => PaymentMethodController::class,
        'cash_in_request' => CashInRequestController::class,
        'game_setup' => GameSetupController::class,
        'photo_info' => PhotoController::class,
        'lottery_info' => LotteryHistoryController::class,
        'welcome_message' => WelcomeMessageController::class,
        'youtube_live' => YouTubeVideoController::class,
        'banner' => BannerController::class,
        'about_us' => AboutUsController::class,
        'mission_vision' => MissionVisionController::class,
        'cash_out_request' => CashOutRequestController::class,
        'registerd_member' => RegisteredMemberController::class,
        'active_lottery_numbers' => LotteryNumbersController::class,
        'all_lottery' => AllLotteryController::class,
        'result' => ResultController::class,
        'member_post' => MemberPostViewController::class,
        'country_setup' => CountrySetupController::class,
        'agent' => AgentController::class,
        'agent_accounts' => AgentAccountsController::class,
   ]);

   Route::get('changed_post_status/{id}',[MemberPostViewController::class,'status'])->name('member_post.status');

   Route::post('member_status',[RegisteredMemberController::class,'status'])->name('registerd_member.status');

   Route::get('add_cash_balance',[CashInRequestController::class,'create'])->name('add_cash_balance.create');

   /*
    game setup extra routes are below
    */
   Route::get('game_setup_status/{id}',[GameSetupController::class,'status'])->name('game_setup.status');
   Route::get('game_setup_on_off/{id}',[GameSetupController::class,'on_off'])->name('game_setup.on_off');
   Route::get('game_setup_trash',[GameSetupController::class,'trash_list'])->name('game_setup.trash_list');
   Route::get('game_setup_restore/{id}',[GameSetupController::class,'restore'])->name('game_setup.restore');
   Route::get('game_setup_delete/{id}',[GameSetupController::class,'delete'])->name('game_setup.delete');

   /*
    photo info extra routes are below
    */
   Route::get('ChangedPhotoInfoStatus/{id}',[PhotoController::class,'ChangedPhotoInfoStatus']);
   Route::get('photo_info_trash',[PhotoController::class,'trash_list'])->name('photo_info.trash_list');
   Route::get('photo_info_restore/{id}',[PhotoController::class,'restore'])->name('photo_info.restore');

   /*
    mission vision extra routes are below
    */
   Route::get('ChangedMissionVisionStatus/{id}',[MissionVisionController::class,'ChangedMissionVisionStatus']);
   Route::get('mission_vision_trash',[MissionVisionController::class,'trash_list'])->name('mission_vision.trash_list');
   Route::get('mission_vision_restore/{id}',[MissionVisionController::class,'restore'])->name('mission_vision.restore');

    /*
    menu label extra routes are below
    */
    Route::get('menu_label_trash_list',[MenuLabelController::class,'trash_list'])->name('menu_label.trash_list');
    Route::get('menu_label_restore/{id}',[MenuLabelController::class,'restore'])->name('menu_label.restore');
    Route::get('menu_label_delete/{id}',[MenuLabelController::class,'delete'])->name('menu_label.delete');
    Route::get('menu_label_properties/{id}',[MenuLabelController::class,'properties'])->name('menu_label.properties');
    /* ==== */

    /*
    role extra routes are below
    */
    Route::get('role_trash_list',[RoleController::class,'trash_list'])->name('role.trash_list');
    Route::get('role_restore/{id}',[RoleController::class,'restore'])->name('role.restore');
    Route::get('role_delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    Route::get('role_properties/{id}',[RoleController::class,'properties'])->name('role.properties');
    Route::post('role_permission/{id}',[RoleController::class,'permission'])->name('role.permission');
    /* ==== */


    /*
    branch extra routes are below
    */
    Route::get('branch_trash_list',[BranchController::class,'trash_list'])->name('branch.trash_list');
    Route::get('branch_restore/{id}',[BranchController::class,'restore'])->name('branch.restore');
    Route::get('branch_delete/{id}',[BranchController::class,'delete'])->name('branch.delete');
    Route::get('branch_properties/{id}',[BranchController::class,'properties'])->name('branch.properties');
    /* ==== */


    /*
    user extra routes are below
    */
    Route::get('user_trash_list',[UserController::class,'trash_list'])->name('user.trash_list');
    Route::get('user_restore/{id}',[UserController::class,'restore'])->name('user.restore');
    Route::get('user_delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('user_properties/{id}',[UserController::class,'properties'])->name('user.properties');
    Route::post('user_image_upload',[UserController::class,'user_image_upload'])->name('user.image_update');
    Route::post('user_activity',[UserController::class,'user_activity'])->name('user.activity');

    /* ==== */


    /*
    menu extra routes are below
    */
    Route::post('menu_status_change',[MenuController::class,'status'])->name('menu.status');
    Route::get('menu_trash_list',[MenuController::class,'trash_list'])->name('menu.trash_list');
    Route::get('menu_restore/{id}',[MenuController::class,'restore'])->name('menu.restore');
    Route::get('menu_delete/{id}',[MenuController::class,'delete'])->name('menu.delete');
    Route::get('menu_properties/{id}',[MenuController::class,'properties'])->name('menu.properties');

    /* ==== */

    /** pay method extra routes */

    Route::get('pay_method_status',[PaymentMethodController::class,'status'])->name('payment_method.status');
    Route::get('payment_method_trash',[PaymentMethodController::class,'trash_list'])->name('payment_method.trash_list');
    Route::get('payment_method_restore/{id}',[PaymentMethodController::class,'restore'])->name('payment_method.restore');
    Route::get('payment_method_delete/{id}',[PaymentMethodController::class,'delete'])->name('payment_method.delete');

    Route::get('cash_in_status/{id}',[CashInRequestController::class,'status'])->name('cash_in_request.status');

    Route::get('cash_in_request_trash',[CashInRequestController::class,'trash'])->name('cash_in_request.trash_list');
    Route::get('cash_in_request_restore/{id}',[CashInRequestController::class,'restore'])->name('cash_in_request.restore');

    Route::get('lottery_status/{id}',[LotteryHistoryController::class,'status'])->name('lottery_request.status');

    Route::get('lottery_request_trash',[LotteryHistoryController::class,'trash'])->name('lottery_request.trash_list');
    Route::get('lottery_request_restore/{id}',[LotteryHistoryController::class,'restore'])->name('lottery_request.restore');

    Route::get('cash_out_request_trash',[CashOutRequestController::class,'trash_list'])->name('cash_out_request.trash_list');

    Route::get('deleted_agent_list',[AgentController::class,'trash_list'])->name('agent.trash_list');
    Route::get('restore_agent/{id}',[AgentController::class,'restore'])->name('agent.restore');
    Route::get('delete_agent/{id}',[AgentController::class,'delete'])->name('agent.delete');

    Route::post('getAgentList',[AgentAccountsController::class,'getAgentList']);


});

require __DIR__.'/auth.php';
