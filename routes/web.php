<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecteursController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

|Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware('Admin')->group(function () {
    // Your routes that require the check
});
Route::middleware('checkRole:super admin')->group(function () {
    // Your routes that require super admin role
});

Route::middleware('checkRole:admin')->group(function () {
    // Your routes that require admin role
});

Route::middleware('checkRole:user')->group(function () {
    // Your routes that require user role
});

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/Organisation', [App\Http\Controllers\HomeController::class, 'index_O'])->name('Organisation');
//Route::get('/Evénement', [App\Http\Controllers\HomeController::class, 'index_F'])->name('Evénement');
Route::get('/Administateur', [App\Http\Controllers\HomeController::class, 'index_A'])->name('Administateur');
//Route::get('/PFTs', [App\Http\Controllers\HomeController::class, 'index_P'])->name('PFTs');


//Route::get('/user', [App\Http\Controllers\AdminsController::class, 'index'])->name('user');
Route::resource('/user', App\Http\Controllers\AdminsController::class);
Route::delete('user_D/{id}', [App\Http\Controllers\AdminsController::class,'destroy'])->name('user_D');

//Route::match(['get','Post'],'/insret_Sect', [App\Http\Controllers\SecteursController::class, 'store'])->name('insret_Secteur');
//Route::Post('/insret_Sect', [App\Http\Controllers\SecteursController::class, 'store'])->name('insret_Secteur');

 
Route::get('/Secteur_A', [App\Http\Controllers\SecteursController::class, 'create'])->name('Secteur_A');
// Recherche
Route::Post('/Secteur_rech', [App\Http\Controllers\SecteursController::class,'rech'])->name('Secteur_rech');
Route::Post('/Degr_imp_rech', [App\Http\Controllers\degres_impo_org_instController::class,'rech'])->name('Degr_imp_rech');
Route::Post('/Etat_coti_rech', [App\Http\Controllers\etat_cotiController::class,'rech'])->name('Etat_coti_rech');
Route::Post('/Périodicité_rech', [App\Http\Controllers\periodiciteController::class,'rech'])->name('Périodicité_rech');
Route::Post('/qui_paie_coti_rech',[App\Http\Controllers\qui_paie_cotiController::class,'rech'])->name('qui_paie_coti_rech');
Route::Post('/Statut_rech', [App\Http\Controllers\StatutsController::class,'rech'])->name('Statut_rech');
Route::Post('/participation_rech', [App\Http\Controllers\paticipationController::class,'rech'])->name('participation_rech');
Route::Post('/qui_org_rech', [App\Http\Controllers\qui_orgController::class,'rech'])->name('qui_org_rech');

Route::Post('/user_rech', [App\Http\Controllers\AdminsController::class,'rech'])->name('user_rech');
Route::Post('/Org_rech', [App\Http\Controllers\short_orgController::class,'rech'])->name('Org_rech');
Route::Post('/Even_rech', [App\Http\Controllers\EvenController::class,'rech'])->name('Even_rech');

Route::Post('/Organisation_rech', [App\Http\Controllers\OrganisationsController::class,'rech'])->name('Organisation_rech');
Route::Post('/Evenement_rech', [App\Http\Controllers\EvenementController::class,'rech'])->name('Evenement_rech');
Route::match(['get','Post'],'/getInfo', [App\Http\Controllers\EvenementController::class,'getInfo'])->name('getInfo');
Route::Post('/Ptfs_rech', [App\Http\Controllers\PTFsController::class,'rech'])->name('Ptfs_rech');
Route::Post('/mission_rech', [App\Http\Controllers\missionContrller::class,'rech'])->name('mission_rech');


//Route::delete('/Secteur_d/{id}', [App\Http\Controllers\SecteursController::class,'destroy'])->name('Secteur_d.destroy');



/* 

Route::resource('/Administateur', App\Http\Controllers\HomeController::class);

*/

//update
Route::match(['get','Post'],'Organisation_U/{id}', [App\Http\Controllers\OrganisationsController::class,'update'])->name('Organisation_U');
Route::PUT('Evenement_U/{id}', [App\Http\Controllers\EvenementController::class,'update'])->name('Evenement_U');
Route::match(['get','Post'],'Ptfs_U/{id}', [App\Http\Controllers\PTFsController::class,'update'])->name('Ptfs_U');
Route::PUT('mission_U/{id}', [App\Http\Controllers\missionContrller::class,'update'])->name('mission_U');

Route::PUT('Secteur_UP/{id}', [App\Http\Controllers\SecteursController::class,'update'])->name('Secteur_UP');

Route::match(['get','Post'],'/Degr_imp_U/{id}', [App\Http\Controllers\degres_impo_org_instController::class,'update'])->name('Degr_imp_U');
Route::match(['get','Post'],'/Etat_coti_U/{id}', [App\Http\Controllers\etat_cotiController::class,'update'])->name('Etat_coti_U');
Route::match(['get','Post'],'/Périodicité_U/{id}', [App\Http\Controllers\periodiciteController::class,'update'])->name('Périodicité_U');
Route::match(['get','Post'],'/qui_paie_coti_U/{id}',[App\Http\Controllers\qui_paie_cotiController::class,'update'])->name('qui_paie_coti_U');
Route::match(['get','Post'],'/Statut_Type_U/{id}', [App\Http\Controllers\StatutsController::class,'update'])->name('Statut_Type_U');
Route::match(['get','Post'],'/participation_U/{id}', [App\Http\Controllers\paticipationController::class,'update'])->name('participation_U');
Route::match(['get','Post'],'/qui_org_U/{id}', [App\Http\Controllers\qui_orgController::class,'update'])->name('qui_org_U');
// edit
Route::match(['get','Post'],'Organisation_M/{id}', [App\Http\Controllers\OrganisationsController::class,'edit'])->name('Organisation_M');
Route::match(['get','Post'],'Evenement_M/{id}', [App\Http\Controllers\EvenementController::class,'edit'])->name('Evenement_M');
Route::match(['get','Post'],'Ptfs_M/{id}', [App\Http\Controllers\PTFsController::class,'edit'])->name('Ptfs_M');
Route::match(['get','Post'],'mission_M/{id}', [App\Http\Controllers\missionContrller::class,'edit'])->name('mission_M');

Route::match(['get','Post'],'Secteur_modif/{id}', [App\Http\Controllers\SecteursController::class,'edit'])->name('Secteur_modif');
Route::match(['get','Post'],'/Degr_imp_M/{id}', [App\Http\Controllers\degres_impo_org_instController::class,'edit'])->name('Degr_imp_M');
Route::match(['get','Post'],'/Etat_coti_M/{id}', [App\Http\Controllers\etat_cotiController::class,'edit'])->name('Etat_coti_M');
Route::match(['get','Post'],'/Périodicité_M/{id}', [App\Http\Controllers\periodiciteController::class,'edit'])->name('Périodicité_M');
Route::match(['get','Post'],'/qui_paie_coti_M/{id}',[App\Http\Controllers\qui_paie_cotiController::class,'edit'])->name('qui_paie_coti_M');
Route::match(['get','Post'],'/Statut_Type_M/{id}', [App\Http\Controllers\StatutsController::class,'edit'])->name('Statut_Type_M');
Route::match(['get','Post'],'/participation_M/{id}', [App\Http\Controllers\paticipationController::class,'edit'])->name('participation_M');
Route::match(['get','Post'],'/qui_org_M/{id}', [App\Http\Controllers\qui_orgController::class,'edit'])->name('qui_org_M');
// show
Route::match(['get','Post'],'Organisation_AF/{id}', [App\Http\Controllers\OrganisationsController::class,'show'])->name('Organisation_AF');
Route::match(['get','Post'],'Evenement_AF/{id}', [App\Http\Controllers\EvenementController::class,'show'])->name('Evenement_AF');
Route::match(['get','Post'],'Ptfs_AF/{id}', [App\Http\Controllers\PTFsController::class,'show'])->name('Ptfs_AF');
Route::match(['get','Post'],'mission_AF/{id}', [App\Http\Controllers\missionContrller::class,'show'])->name('mission_AF');

Route::match(['get','Post'],'/Degr_imp_AF/{id}', [App\Http\Controllers\degres_impo_org_instController::class,'show'])->name('Degr_imp_AF');
Route::match(['get','Post'],'/Etat_coti_AF/{id}', [App\Http\Controllers\etat_cotiController::class,'show'])->name('Etat_coti_AF');
Route::match(['get','Post'],'/Périodicité_AF/{id}', [App\Http\Controllers\periodiciteController::class,'show'])->name('Périodicité_AF');
Route::match(['get','Post'],'/qui_paie_coti_AF/{id}',[App\Http\Controllers\qui_paie_cotiController::class,'show'])->name('qui_paie_coti_AF');
Route::match(['get','Post'],'/Statut_Type_AF/{id}', [App\Http\Controllers\StatutsController::class,'show'])->name('Statut_Type_AF');
Route::match(['get','Post'],'/participation_AF/{id}', [App\Http\Controllers\paticipationController::class,'edit'])->name('participation_AF');
Route::match(['get','Post'],'/qui_org_AF/{id}', [App\Http\Controllers\qui_orgController::class,'show'])->name('qui_org_AF');

// index
Route::resource('/Organisation', App\Http\Controllers\OrganisationsController::class);
Route::resource('/Evenement', App\Http\Controllers\EvenementController::class);
Route::resource('/Ptfs', App\Http\Controllers\PTFsController::class);
Route::resource('/mission', App\Http\Controllers\missionContrller::class);

Route::resource('/Secteur_i', SecteursController::class,);
Route::resource('/Degr_imp', App\Http\Controllers\degres_impo_org_instController::class);
Route::resource('/Etat_coti', App\Http\Controllers\etat_cotiController::class);
Route::resource('/Périodicité', App\Http\Controllers\periodiciteController::class);
Route::resource('/qui_paie_coti', App\Http\Controllers\qui_paie_cotiController::class);
Route::resource('/Statut_Type', App\Http\Controllers\StatutsController::class);
Route::resource('/participation', App\Http\Controllers\paticipationController::class);
Route::resource('/qui_org', App\Http\Controllers\qui_orgController::class);
// suprime
Route::delete('Secteur_d/{id}', [App\Http\Controllers\SecteursController::class ,'destroy'])->name('Secteur_d');
Route::delete('/Degr_imp_D/{id}', [App\Http\Controllers\degres_impo_org_instController::class,'destroy'])->name('Degr_imp_D');
Route::delete('/Etat_coti_D/{id}', [App\Http\Controllers\etat_cotiController::class,'destroy'])->name('Etat_coti_D');
Route::delete('/Périodicité_D/{id}', [App\Http\Controllers\periodiciteController::class,'destroy'])->name('Périodicité_D');
Route::delete('/qui_paie_coti_D/{id}',[App\Http\Controllers\qui_paie_cotiController::class,'destroy'])->name('qui_paie_coti_D');
Route::delete('/Statut_Type_D/{id}', [App\Http\Controllers\StatutsController::class,'destroy'])->name('Statut_Type_D');
Route::delete('/participation_D/{id}', [App\Http\Controllers\paticipationController::class,'destroy'])->name('participation_D');
Route::delete('/qui_org_D/{id}', [App\Http\Controllers\qui_orgController::class,'destroy'])->name('qui_org_D');

Route::delete('Organisation_D/{id}', [App\Http\Controllers\OrganisationsController::class,'destroy'])->name('Organisation_D');
Route::delete('Evenement_D/{id}', [App\Http\Controllers\EvenementController::class,'destroy'])->name('Evenement_D');
Route::delete('Ptfs_D/{id}', [App\Http\Controllers\PTFsController::class,'destroy'])->name('Ptfs_D');
Route::delete('mission_D/{id}', [App\Http\Controllers\missionContrller::class,'destroy'])->name('mission_D');



Route::middleware(['web'])->group(function () {
    // Your routes go here
});


Route::resource('/OrgList', App\Http\Controllers\short_orgController::class);
Route::resource('/EvenList', App\Http\Controllers\EvenController::class);
Route::delete('OrgList_D/{id}', [App\Http\Controllers\short_orgController::class,'destroy'])->name('OrgList_D');
Route::delete('EvenList_D/{id}', [App\Http\Controllers\EvenController::class,'destroy'])->name('EvenList_D');
Route::match(['get','Post'],'/OrgList_M/{id}', [App\Http\Controllers\short_orgController::class,'edit'])->name('OrgList_M');
Route::match(['get','Post'],'/EvenList_M/{id}', [App\Http\Controllers\EvenController::class,'edit'])->name('EvenList_M');
Route::match(['get','Post'],'OrgList_U/{id}', [App\Http\Controllers\short_orgController::class,'update'])->name('OrgList_U');
Route::match(['get','Post'],'EvenList_U/{id}', [App\Http\Controllers\EvenController::class,'update'])->name('EvenList_U');
Route::match(['get','Post'],'OrgList_AF/{id}', [App\Http\Controllers\short_orgController::class,'show'])->name('OrgList_AF');
Route::match(['get','Post'],'EvenList_AF/{id}', [App\Http\Controllers\EvenController::class,'show'])->name('EvenList_AF');


Route::match(['get','Post'],'genpdf/{id}', [App\Http\Controllers\OrganisationsController::class,'genpdf'])->name('genpdf');

// تحديث حالة الإشعارات كمقروءة
Route::post('/notifications/mark-as-read', [App\Http\Controllers\HomeController::class,'markAsRead']);

// عرض الحدث أو قائمة الإشعارات
Route::get('/notifications/show', 'App\Http\Controllers\HomeController::class@showNotifications');
