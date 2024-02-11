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

Route::get('get_method_info',[MemberDashboardController::class,'get_method_info'])->name('member.get_method_info');
Route::post('store_cash_in',[MemberDashboardController::class,'cash_in_store'])->name('member.store_cash_in');
Route::get('cash_in_hoistory',[MemberDashboardController::class,'cash_in_history'])->name('member.cash_in_history');

Route::post('lottery_store',[MemberDashboardController::class,'lottery_store'])->name('member.lottery_store');
Route::get('lottery_hoistory',[MemberDashboardController::class,'lottery_history'])->name('member.lottery_history');

Route::get('cash_out',[MemberDashboardController::class,'cash_out'])->name('member.cash_out');
Route::post('store_cash_out',[MemberDashboardController::class,'store_cash_out'])->name('member.store_cash_out');

Route::get('cash_out_history',[MemberDashboardController::class,'cash_out_history'])->name('member.cash_out_history');

Route::Get('memberLogout',[MemberDashboardController::class,'logout'])->name('member.logout');
