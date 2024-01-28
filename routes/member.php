<?php
/**
 * This route file is for member registration
 */
use App\Http\Controllers\Member\MemberAuthController;

Route::get('registration',[MemberAuthController::class,'registration'])->name('member.registration');
Route::post('memberStore',[MemberAuthController::class,'store'])->name('member.store');
