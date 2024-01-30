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

Route::Get('memberLogout',[MemberDashboardController::class,'logout'])->name('member.logout');
