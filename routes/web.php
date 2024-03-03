<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FrontviewController;
use App\Http\Controllers\Admin\CMSController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\PacakgeBuyController;

Route::controller(FrontviewController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/contact-us', 'contact')->name('front.contact');
    Route::get('/internet-packages', 'packages')->name('front.packages');
    Route::get('/about-us', 'about')->name('front.about');
    Route::get('/btrc-approved-packages', 'btrc')->name('front.btrc');
    Route::get('/buy-package/{id}', 'buyPackage')->name('buy_package');
    Route::get('/terms-condition', 'termsCondition')->name('terms_condition');
});

Route::controller(PacakgeBuyController::class)->group(function () {
    Route::post('/save-buy-package', 'saveBuyPackage')->name('save_buy_package');
    Route::get('/success-buy-package', 'successBuyPackage')->name('success_buy_package');
    Route::get('/export-package-pdf/{id}', 'exportPackagePdf')->name('export_package_pdf');
});

Route::post('api/fetch-areas', [CMSController::class, 'fetchArea']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () { return view('backend.home.index');})->name('dashboard');

    Route::middleware(['authorizedadmin'])->group(function () {
        Route::controller(AdminController::class)->prefix('/admin')->group(function () {
            Route::get('/role/{id}/{newRole}', 'role')->name('role');
            Route::get('/manage-admin', 'manageAdmin')->name('manage_admin');
        });
    });

    Route::middleware(['authorizedadmin'])->group(function () {
        Route::controller(CMSController::class)->prefix('/admin')->name('admin.')->group(function () {

            Route::get('/add-region', 'addRegion')->name('add_region');
            Route::post('/save-region', 'saveRegion')->name('save_region');
            Route::get('/manage-region', 'manageRegion')->name('manage_region');
            Route::get('/edit-region/{id}', 'editRegion')->name('edit_region');
            Route::post('/update-region', 'updateRegion')->name('update_region');
            Route::post('/delete-region', 'deleteRegion')->name('delete_region');

            Route::get('/add-area', 'addArea')->name('add_area');
            Route::post('/save-area', 'saveArea')->name('save_area');
            Route::get('/manage-area', 'manageArea')->name('manage_area');
            Route::get('/edit-area/{id}', 'editArea')->name('edit_area');
            Route::post('/update-area', 'updateArea')->name('update_area');
            Route::post('/delete-area', 'deleteArea')->name('delete_area');

            Route::get('/add-client-type', 'addClientType')->name('add_client_type');
            Route::post('/save-client-type', 'saveClientType')->name('save_client_type');
            Route::get('/manage-client-type', 'manageClientType')->name('manage_client_type');
            Route::get('/edit-client-type/{id}', 'editClientType')->name('edit_client_type');
            Route::post('/update-client-type', 'updateClientType')->name('update_client_type');
            Route::post('/delete-client-type', 'deleteClientType')->name('delete_client_type');

            Route::get('/add-whom-meet', 'addWhomMeet')->name('add_whom_meet');
            Route::post('/save-whom-meet', 'saveWhomMeet')->name('save_whom_meet');
            Route::get('/manage-whom-meet', 'manageWhomMeet')->name('manage_whom_meet');
            Route::get('/edit-whom-meet/{id}', 'editWhomMeet')->name('edit_whom_meet');
            Route::post('/update-whom-meet', 'updateWhomMeet')->name('update_whom_meet');
            Route::post('/delete-whom-meet', 'deleteWhomMeet')->name('delete_whom_meet');

            Route::get('/add-feedback', 'addFeedback')->name('add_feedback');
            Route::post('/save-feedback', 'saveFeedback')->name('save_feedback');
            Route::get('/manage-feedback', 'manageFeedback')->name('manage_feedback');
            Route::get('/edit-feedback/{id}', 'editFeedback')->name('edit_feedback');
            Route::post('/update-feedback', 'updateFeedback')->name('update_feedback');
            Route::post('/delete-feedback', 'deleteFeedback')->name('delete_feedback');

            Route::get('/add-btrc-approved-packages', 'addbtrcApprovedPackage')->name('add_btrc_approved_packages');
            Route::post('/save-btrc-approved-packages', 'savebtrcApprovedPackage')->name('save_btrc_approved_packages');
            Route::get('/manage-btrc-approved-packages', 'managebtrcApprovedPackage')->name('manage_btrc_approved_packages');
            Route::get('/edit-btrc-approved-packages/{id}', 'editbtrcApprovedPackage')->name('edit_btrc_approved_packages');
            Route::post('/update-btrc-approved-packages', 'updatebtrcApprovedPackage')->name('update_btrc_approved_packages');

            Route::get('/add-terms-condition', 'addTC')->name('add_tc');
            Route::post('/save-terms-condition', 'saveTC')->name('save_tc');
            Route::get('/manage-terms-condition', 'manageTC')->name('manage_tc');
            Route::get('/edit-terms-condition/{id}', 'editTC')->name('edit_tc');
            Route::post('/update-terms-condition', 'updateTC')->name('update_tc');
        });
    });

    Route::controller(AdminController::class)->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/profile-admin', 'adminProfile')->name('profile_admin');
        Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('delete_admin');
        Route::get('/employee-list', 'employeeList')->name('employee_list');
        Route::get('/pending-employee-list', 'pendingEmployeeList')->name('pending_employee_list');
    });

    //both admin and employee will add work and change the avatar
    Route::controller(CMSController::class)->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/add-work', 'addWork')->name('add_work');
        Route::post('/save-work', 'saveWork')->name('save_work');
        Route::get('/manage-work', 'manageWork')->name('manage_work');
        Route::get('/edit-work/{id}', 'editWork')->name('edit_work');
        Route::post('/update-work', 'updateWork')->name('update_work');
        Route::post('/delete-work', 'deleteWork')->name('delete_work');
        Route::get('/view-work/{id}', 'viewWork')->name('view_work');

        Route::post('/update-user-name', 'updateUserName')->name('update_user_name');
        Route::post('/update-user-phone', 'updateUserPhone')->name('update_user_phone');
        Route::post('/update-user-email', 'updateUserEmail')->name('update_user_email');
        Route::post('/update-user-username', 'updateUserUsername')->name('update_user_username');
        Route::post('/update-user-photo', 'updateUserPhoto')->name('update_user_photo');
        Route::post('/update-user-password', 'updateUserPassword')->name('update_user_password');

        Route::get('/add-package', 'addPackage')->name('add_package');
        Route::post('/save-package', 'savePackage')->name('save_package');
        Route::get('/manage-package', 'managePackage')->name('manage_package');
        Route::get('/edit-package/{id}', 'editPackage')->name('edit_package');
        Route::post('/update-package', 'updatePackage')->name('update_package');
        Route::post('/delete-package', 'deletePackage')->name('delete_package');

        Route::get('/add-btrc', 'addPackage')->name('add_package');
        Route::post('/save-package', 'savePackage')->name('save_package');
        Route::get('/manage-package', 'managePackage')->name('manage_package');
        Route::get('/edit-package/{id}', 'editPackage')->name('edit_package');
        Route::post('/update-package', 'updatePackage')->name('update_package');
        Route::post('/delete-package', 'deletePackage')->name('delete_package');
    });

    Route::controller(PacakgeBuyController::class)->group(function () {
        Route::get('/manage-buy-package', 'manageBuyPackage')->name('manage_buy_package');
        Route::get('/status/{id}', 'status')->name('status');
        Route::post('/delete-buy-package', 'deleteBuyPackage')->name('delete_buy_package');
        Route::get('/edit-buy-package/{id}', 'editBuyPackage')->name('edit_buy_package');
        Route::get('/preview-buy-package/{id}', 'previewBuyPackage')->name('preview_buy_package');
        Route::post('/update-buy-package', 'updateBuyPackage')->name('update_buy_package');
        Route::get('/export-package-pdf/{id}', 'exportPackagePdf')->name('export_package_pdf');
        Route::get('/new-registration-send-mail/{id}', 'sendRegistrationEmail')->name('new_registration_send_mail');
    });

    Route::middleware(['authorizedadmin'])->group(function () {
        Route::controller(ContactUsController::class)->prefix('/admin')->name('admin.')->group(function () {
            Route::get('/manage-contact-message', 'manageContactMessage')->name('manage_contact_message');
            Route::get('/view-contact-message/{id}', 'viewContactMessage')->name('view_contact_message');
            Route::post('/delete-contact-message', 'deleteContactMessage')->name('delete_contact_message');
        });
    });
});

Route::controller(ContactUsController::class)->group(function () {
    Route::post('contact-us', 'store')->name('contact.us.store');
});

Route::get('/clear', function () {
    \Artisan::call('optimize:clear');
    return redirect()->back();
})->name('clear');
