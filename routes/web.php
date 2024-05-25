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
    Route::get('/campaign-details/{id}', 'campaignDetails')->name('campaign_details');
    Route::get('/bill-payment', 'billPayment')->name('front.bill_payment');
});

Route::controller(PacakgeBuyController::class)->group(function () {
    Route::post('/save-buy-package', 'saveBuyPackage')->name('save_buy_package');
    Route::get('/success-buy-package', 'successBuyPackage')->name('success_buy_package');
    Route::get('/export-package-pdf/{id}', 'exportPackagePdf')->name('export_package_pdf');
});

Route::post('api/fetch-areas', [CMSController::class, 'fetchArea']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.home.index');
    })->name('dashboard');

    Route::middleware(['authorizedadmin'])->group(function () {
        Route::controller(AdminController::class)->prefix('/admin')->group(function () {
            Route::get('/role/{id}/{newRole}', 'role')->name('role');
            Route::get('/manage-admin', 'manageAdmin')->name('manage_admin');
            Route::get('/edit-admin/{id}', 'editAdmin')->name('edit_admin');
            Route::post('/update-user-name-by-admin', 'updateUserNameByAdmin')->name('update_user_name_by_admin');
            Route::post('/update-user-phone-by-admin', 'updateUserPhoneByAdmin')->name('update_user_phone_by_admin');
            Route::post('/update-user-email-by-admin', 'updateUserEmailByAdmin')->name('update_user_email_by_admin');
            Route::post('/update-user-employee-id-by-admin', 'updateUserEmployeeIDByAdmin')->name('update_user_employee_id_by_admin');
            Route::post('/update-user-photo-by-admin', 'updateUserPhotoByAdmin')->name('update_user_photo_by_admin');
            Route::post('/update-user-password-by-admin', 'updateUserPasswordByAdmin')->name('update_user_password_by_admin');
            Route::post('/update-branch-name-by-admin', 'updateBranchNameByAdmin')->name('update_branch_name_by_admin');
        });
    });

    Route::middleware(['authorizedadmin'])->group(function () {
        Route::controller(CMSController::class)->prefix('/admin')->name('admin.')->group(function () {


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

            Route::get('/manage-package', 'managePackage')->name('manage_package');
            Route::get('/edit-package/{id}', 'editPackage')->name('edit_package');
            Route::post('/update-package', 'updatePackage')->name('update_package');
            Route::post('/delete-package', 'deletePackage')->name('delete_package');

            Route::get('/add-area', 'addArea')->name('add_area');
            Route::post('/save-area', 'saveArea')->name('save_area');
            Route::get('/manage-area', 'manageArea')->name('manage_area');
            Route::get('/edit-area/{id}', 'editArea')->name('edit_area');
            Route::post('/update-area', 'updateArea')->name('update_area');
            Route::post('/delete-area', 'deleteArea')->name('delete_area');

            Route::get('/add-company-info', 'addCompanyInfo')->name('add_company_info');
            Route::post('/save-company-info', 'saveCompanyInfo')->name('save_company_info');
            Route::get('/manage-company-info', 'manageCompanyInfo')->name('manage_company_info');
            Route::get('/edit-company-info/{id}', 'editCompanyInfo')->name('edit_company_info');
            Route::post('/update-company-info', 'updateCompanyInfo')->name('update_company_info');

            Route::get('/add-slider', 'addSlider')->name('add_slider');
            Route::post('/save-slider', 'saveSlider')->name('save_slider');
            Route::get('/manage-slider', 'manageSlider')->name('manage_slider');
            Route::get('/edit-slider/{id}', 'editSlider')->name('edit_slider');
            Route::post('/update-slider', 'updateSlider')->name('update_slider');
            Route::post('/delete-slider', 'deleteSlider')->name('delete_slider');

            Route::get('/add-counter', 'addCounter')->name('add_counter');
            Route::post('/save-counter', 'saveCounter')->name('save_counter');
            Route::get('/manage-counter', 'manageCounter')->name('manage_counter');
            Route::get('/edit-counter/{id}', 'editCounter')->name('edit_counter');
            Route::post('/update-counter', 'updateCounter')->name('update_counter');
            Route::post('/delete-counter', 'deleteCounter')->name('delete_counter');

            Route::get('/add-choose-us', 'addChooseUS')->name('add_choose_us');
            Route::post('/save-choose-us', 'saveChooseUS')->name('save_choose_us');
            Route::get('/manage-choose-us', 'manageChooseUS')->name('manage_choose_us');
            Route::get('/edit-choose-us/{id}', 'editChooseUS')->name('edit_choose_us');
            Route::post('/update-choose-us', 'updateChooseUS')->name('update_choose_us');
            Route::post('/delete-choose-us', 'deleteChooseUS')->name('delete_choose_us');

            Route::get('/add-client', 'addClient')->name('add_client');
            Route::post('/save-client', 'saveClient')->name('save_client');
            Route::get('/manage-client', 'manageClient')->name('manage_client');
            Route::get('/edit-client/{id}', 'editClient')->name('edit_client');
            Route::post('/update-client', 'updateClient')->name('update_client');
            Route::post('/delete-client', 'deleteClient')->name('delete_client');

            Route::get('/add-service', 'addService')->name('add_service');
            Route::post('/save-service', 'saveService')->name('save_service');
            Route::get('/manage-service', 'manageService')->name('manage_service');
            Route::get('/edit-service/{id}', 'editService')->name('edit_service');
            Route::post('/update-service', 'updateService')->name('update_service');
            Route::post('/delete-service', 'deleteService')->name('delete_service');

            Route::get('/add-payment-category', 'addPaymentCategory')->name('add_payment_category');
            Route::post('/save-payment-category', 'savePaymentCategory')->name('save_payment_category');
            Route::get('/manage-payment-category', 'managePaymentCategory')->name('manage_payment_category');
            Route::get('/edit-payment-category/{id}', 'editPaymentCategory')->name('edit_payment_category');
            Route::post('/update-payment-category', 'updatePaymentCategory')->name('update_payment_category');
            Route::post('/delete-payment-category', 'deletePaymentCategory')->name('delete_payment_category');

            Route::get('/add-payment', 'addPayment')->name('add_payment');
            Route::post('/save-payment', 'savePayment')->name('save_payment');
            Route::get('/manage-payment', 'managePayment')->name('manage_payment');
            Route::get('/edit-payment/{id}', 'editPayment')->name('edit_payment');
            Route::post('/update-payment', 'updatePayment')->name('update_payment');
            Route::post('/delete-payment', 'deletePayment')->name('delete_payment');

            Route::get('/add-mission', 'addMission')->name('add_mission');
            Route::post('/save-mission', 'saveMission')->name('save_mission');
            Route::get('/manage-mission', 'manageMission')->name('manage_mission');
            Route::get('/edit-mission/{id}', 'editMission')->name('edit_mission');
            Route::post('/update-mission', 'updateMission')->name('update_mission');

            Route::get('/add-vision', 'addVision')->name('add_vision');
            Route::post('/save-vision', 'saveVision')->name('save_vision');
            Route::get('/manage-vision', 'manageVision')->name('manage_vision');
            Route::get('/edit-vision/{id}', 'editVision')->name('edit_vision');
            Route::post('/update-vision', 'updateVision')->name('update_vision');

            Route::get('/add-faq', 'addFaq')->name('add_faq');
            Route::post('/save-faq', 'saveFaq')->name('save_faq');
            Route::get('/manage-faq', 'manageFaq')->name('manage_faq');
            Route::get('/edit-faq/{id}', 'editFaq')->name('edit_faq');
            Route::post('/update-faq', 'updateFaq')->name('update_faq');
            Route::post('/delete-faq', 'deleteFaq')->name('delete_faq');

            Route::get('/add-testimonial', 'addTestimonial')->name('add_testimonial');
            Route::post('/save-testimonial', 'saveTestimonial')->name('save_testimonial');
            Route::get('/manage-testimonial', 'manageTestimonial')->name('manage_testimonial');
            Route::get('/edit-testimonial/{id}', 'editTestimonial')->name('edit_testimonial');
            Route::post('/update-testimonial', 'updateTestimonial')->name('update_testimonial');
            Route::post('/delete-testimonial', 'deleteTestimonial')->name('delete_testimonial');
        });
    });

    Route::controller(AdminController::class)->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/profile-admin', 'adminProfile')->name('profile_admin');
        Route::get('/pending-user', 'pendingUser')->name('pending_user');
        Route::get('/admin-user', 'adminUser')->name('admin_user');
        Route::get('/viewer-user', 'viewerUser')->name('viewer_user');
        Route::get('/editor-user', 'editorUser')->name('editor_user');
        Route::get('/super-admin-user', 'superAdminUser')->name('super_admin_user');
        Route::delete('/delete-admin/{id}', 'deleteAdmin')->name('delete_admin');
    });

    //both admin and user will change the avatar and packge and add
    Route::controller(CMSController::class)->prefix('/admin')->name('admin.')->group(function () {

        Route::post('/update-user-name', 'updateUserName')->name('update_user_name');
        Route::post('/update-user-phone', 'updateUserPhone')->name('update_user_phone');
        Route::post('/update-user-email', 'updateUserEmail')->name('update_user_email');
        Route::post('/update-user-employee-id', 'updateUserEmployeeID')->name('update_user_employee_id');
        Route::post('/update-user-photo', 'updateUserPhoto')->name('update_user_photo');
        Route::post('/update-user-password', 'updateUserPassword')->name('update_user_password');
        Route::post('/update-branch-name', 'updateBranchName')->name('update_branch_name');

        Route::get('/add-package', 'addPackage')->name('add_package');
        Route::post('/save-package', 'savePackage')->name('save_package');
    });

    Route::controller(PacakgeBuyController::class)->group(function () {
        Route::get('/manage-buy-package', 'manageBuyPackage')->name('manage_buy_package');
        Route::get('/pending-connection', 'pendingConnection')->name('pending_connection');
        Route::get('/completed-connection', 'completedConnection')->name('completed_connection');
        Route::get('/status/{id}', 'status')->name('status');
        Route::post('/delete-buy-package', 'deleteBuyPackage')->name('delete_buy_package');
        Route::get('/edit-buy-package/{id}', 'editBuyPackage')->name('edit_buy_package');
        Route::get('/preview-buy-package/{id}', 'previewBuyPackage')->name('preview_buy_package');
        Route::post('/update-buy-package', 'updateBuyPackage')->name('update_buy_package');
        Route::get('/export-package-pdf/{id}', 'exportPackagePdf')->name('export_package_pdf');
        Route::get('/new-registration-send-mail/{id}', 'sendRegistrationEmail')->name('new_registration_send_mail');
        Route::get('/filter-registration', 'filterRegistration')->name('filter_registration');
        Route::get('/filter-pending-registration', 'filterPendingRegistration')->name('filter_pending_registration');
        Route::get('/filter-completed-registration', 'filterCompletedRegistration')->name('filter_completed_registration');
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
