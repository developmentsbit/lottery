<?php
/**
 * This route file is for member registration
 */
use App\Http\Controllers\Member\MemberAuthController;
use App\Http\Controllers\Member\MemberDashboardController;


Route::get('registration',[MemberAuthController::class,'registration'])->name('member.registration');
Route::post('memberStore',[MemberAuthController::class,'store'])->name('member.store');
Route::get('member_login',[MemberAuthController::class,'showLoginForm'])->name('member.login');
Route::post('memberLoginAttempt',[MemberAuthController::class,'loginAttempt'])->name('member.login_attempt');

Route::get('dashboard',[MemberDashboardController::class,'dashboard'])->name('member.dashboard')->middleware('member_auth');

Route::get('member_lottery',[MemberDashboardController::class,'lottery'])->name('member.lottery')->middleware('member_auth');

Route::get('member_cash_in',[MemberDashboardController::class,'cash_in'])->name('member.cash_in')->middleware('member_auth');

Route::get('personal_profile',[MemberDashboardController::class,'personal_profile'])->name('member.personal_profile')->middleware('member_auth');
Route::post('personal_profile/{id}', [MemberDashboardController::class, 'personal_profile_update'])->name('personal_profile.update');

Route::get('get_method_info',[MemberDashboardController::class,'get_method_info'])->name('member.get_method_info');
Route::get('get_method_vat',[MemberDashboardController::class,'get_method_vat'])->name('member.get_method_vat');
Route::post('store_cash_in',[MemberDashboardController::class,'cash_in_store'])->name('member.store_cash_in');
Route::get('cash_in_hoistory',[MemberDashboardController::class,'cash_in_history'])->name('member.cash_in_history');

Route::post('lottery_store',[MemberDashboardController::class,'lottery_store'])->name('member.lottery_store');
Route::get('lottery_hoistory',[MemberDashboardController::class,'lottery_history'])->name('member.lottery_history');

Route::get('cash_out',[MemberDashboardController::class,'cash_out'])->name('member.cash_out');
Route::post('store_cash_out',[MemberDashboardController::class,'store_cash_out'])->name('member.store_cash_out');

Route::get('cash_out_history',[MemberDashboardController::class,'cash_out_history'])->name('member.cash_out_history');

Route::Get('memberLogout',[MemberDashboardController::class,'logout'])->name('member.logout');

Route::get('referral_history',[MemberDashboardController::class,'referral_history'])->name('member.referral_history');

Route::get('cash_to_win',[MemberDashboardController::class,'cash_to_win'])->name('member.cash_to_win');
Route::get('win_to_cash',[MemberDashboardController::class,'win_to_cash'])->name('member.win_to_cash');
Route::post('balance_convert',[MemberDashboardController::class,'balance_convert'])->name('member.balance_convert');

Route::get('cash_transfer',[MemberDashboardController::class,'cash_transfer'])->name('member.cash_transfer');
Route::get('win_transfer',[MemberDashboardController::class,'win_transfer'])->name('member.win_transfer');
Route::post('balance_transfer',[MemberDashboardController::class,'balance_transfer'])->name('member.balance_transfer');

Route::get('change_password',[MemberDashboardController::class,'change_password'])->name('member.change_password');
Route::get('cehck_password',[MemberDashboardController::class,'check_password'])->name('member.check_password');

Route::post('submit_change_pass',[MemberDashboardController::class,'submit_change_password'])->name('member.submit_change_pass');
Route::get('cash_balance_history',[MemberDashboardController::class,'cash_balance_history'])->name('member.cash_balance_history');
Route::get('win_balance_history',[MemberDashboardController::class,'win_balance_history'])->name('member.win_balance_history');

Route::get('get_original_amount',[MemberDashboardController::class,'get_original_amount'])->name('member.get_original_amount');
Route::get('get_cash_out_amount',[MemberDashboardController::class,'get_cash_out_amount'])->name('member.get_cash_out_amount');
