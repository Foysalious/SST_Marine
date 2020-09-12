<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard','HomeController@index')->name('adminLogin');

    Route::group(['prefix' => 'slider'], function(){
        Route::get('/manage', 'Backend\SliderController@index')->name('manageSlider');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\SliderController@create')->name('createSlider');
        Route::post('/create', 'Backend\SliderController@store')->name('storeSlider');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{slider:id}', 'Backend\SliderController@edit')->name('editSlider');
        Route::post('/edit/{slider:id}', 'Backend\SliderController@update')->name('updateSlider');
        // Delete Slider From Manage
        Route::post('/delete/{id}', 'Backend\SliderController@destroy')->name('deleteSlider');
        

    });
    Route::group(['prefix' => 'paragraph'], function(){
        Route::get('/manage', 'Backend\ServiceController@index')->name('manageParagraph');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\ServiceController@create')->name('createParagraph');
        Route::post('/create', 'Backend\ServiceController@store')->name('storeParagraph');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{id}', 'Backend\ServiceController@edit')->name('editParagraph');
        Route::post('/edit/{service:id}', 'Backend\ServiceController@update')->name('updateParagraph');
        // Delete Slider From Manage
        Route::post('/delete/{id}', 'Backend\ServiceController@destroy')->name('deleteParagraph');
    //Anchor Starts Here
        Route::get('/manageAnchor', 'Backend\ServiceController@index1')->name('manageAnchor');
        // Show Create Page and Store after Submit
        Route::get('/createAnchor', 'Backend\ServiceController@create1')->name('createAnchor');
        Route::post('/createAnchor', 'Backend\ServiceController@store1')->name('storeAnchor');
        // Show Edit Page and Update after Submit
        Route::get('/editAnchor/{id}', 'Backend\ServiceController@edit1')->name('editAnchor');
        Route::post('/editAnchor/{service:id}', 'Backend\ServiceController@update1')->name('updateAnchor');
        // Delete Slider From Manage
        Route::post('/deleteAnchor/{id}', 'Backend\ServiceController@destroy1')->name('deleteAnchor');
        

    });

    Route::group(['prefix' => 'countdown'], function(){
        Route::get('/manage', 'Backend\CountdownController@index')->name('manageCountdown');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\CountdownController@create')->name('createCountdown');
        Route::post('/create', 'Backend\CountdownController@store')->name('storeCountdown');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{countdown:id}', 'Backend\CountdownController@edit')->name('editCountdown');
        Route::post('/edit/{countdown:id}', 'Backend\CountdownController@update')->name('updateCountdown');
        // Delete Slider From Manage
        Route::post('/delete/{countdown:id}', 'Backend\CountdownController@destroy')->name('deleteCountdown');
    });

    Route::group(['prefix' => 'clients'], function(){
        Route::get('/manage', 'Backend\ClientController@index')->name('manageClients');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\ClientController@create')->name('createClients');
        Route::post('/create', 'Backend\ClientController@store')->name('storeClients');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{client:id}', 'Backend\ClientController@edit')->name('editClients');
        Route::post('/edit/{client:id}', 'Backend\ClientController@update')->name('updateClients');
        // Delete Slider From Manage
        Route::post('/delete/{client:id}', 'Backend\ClientController@destroy')->name('deleteClients');
    });


    Route::group(['prefix' => 'solution'], function(){
        Route::get('/manage', 'Backend\SolutionController@index')->name('manageSolution');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\SolutionController@create')->name('createSolution');
        Route::post('/create', 'Backend\SolutionController@store')->name('storeSolution');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{solution:id}', 'Backend\SolutionController@edit')->name('editSolution');
        Route::post('/edit/{solution:id}', 'Backend\SolutionController@update')->name('updateSolution');
        // Delete Slider From Manage
        Route::post('/delete/{solution:id}', 'Backend\SolutionController@destroy')->name('deleteSolution');
    });

    Route::group(['prefix' => 'projects'], function(){
        Route::get('/manage', 'Backend\ProjectController@index')->name('manageProject');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\ProjectController@create')->name('createProject');
        Route::post('/create', 'Backend\ProjectController@store')->name('storeProject');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{project:id}', 'Backend\ProjectController@edit')->name('editProject');
        Route::post('/edit/{project:id}', 'Backend\ProjectController@update')->name('updateProject');
        // Delete Slider From Manage
        Route::post('/delete/{project:id}', 'Backend\ProjectController@destroy')->name('deleteProject');
    });

    Route::group(['prefix' => 'design'], function(){
        Route::get('/manage', 'Backend\DesignController@index')->name('manageDesign');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\DesignController@create')->name('createDesign');
        Route::post('/create', 'Backend\DesignController@store')->name('storeDesign');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{design:id}', 'Backend\DesignController@edit')->name('editDesign');
        Route::post('/edit/{design:id}', 'Backend\DesignController@update')->name('updateDesign');
        // Delete Slider From Manage
        Route::post('/delete/{design:id}', 'Backend\DesignController@destroy')->name('deleteDesign');
    });

    Route::group(['prefix' => 'testimonial'], function(){
        Route::get('/manage', 'Backend\TestimonialController@index')->name('manageTestimonial');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\TestimonialController@create')->name('createTestimonial');
        Route::post('/create', 'Backend\TestimonialController@store')->name('storeTestimonial');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{testimonial:id}', 'Backend\TestimonialController@edit')->name('editTestimonial');
        Route::post('/edit/{testimonial:id}', 'Backend\TestimonialController@update')->name('updateTestimonial');
        // Delete Slider From Manage
        Route::post('/delete/{testimonial:id}', 'Backend\TestimonialController@destroy')->name('deleteTestimonial');
    });

    Route::group(['prefix' => 'description'], function(){
        Route::get('/manage', 'Backend\DescriptionController@index')->name('manageDescription');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\DescriptionController@create')->name('createDescription');
        Route::post('/store', 'Backend\DescriptionController@store')->name('storeDescription');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{id}', 'Backend\DescriptionController@edit')->name('editDescription');
        Route::post('/update/{id}', 'Backend\DescriptionController@update')->name('updateDescription');
        // Delete Slider From Manage
        Route::post('/delete/{id}', 'Backend\DescriptionController@destroy')->name('deleteDescription');
        
        //Anchor CRUD
        //
        Route::get('/manageanchor', 'Backend\AnchorDescriptionController@index')->name('manageDesAnchor');
        // Show Create Page and Store after Submit
        Route::get('/createanchor', 'Backend\AnchorDescriptionController@create')->name('createDesAnchor');
        Route::post('/createanchor', 'Backend\AnchorDescriptionController@store')->name('storeDesAnchor');
        // Show Edit Page and Update after Submit
        Route::get('/editanchor/{id}', 'Backend\AnchorDescriptionController@edit')->name('editDesAnchor');
        Route::post('/editanchor/{id}', 'Backend\AnchorDescriptionController@update')->name('updateDesAnchor');
        // Delete Slider From Manage
        Route::post('/deleteanchor/{descriptionAnchor:id}', 'Backend\AnchorDescriptionController@destroy')->name('deleteDesAnchor');
    });
    Route::group(['prefix' => 'team'], function(){
        Route::get('/manage', 'Backend\TeamController@index')->name('manageTeam');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\TeamController@create')->name('createTeam');
        Route::post('/create', 'Backend\TeamController@store')->name('storeTeam');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{team:id}', 'Backend\TeamController@edit')->name('editTeam');
        Route::post('/edit/{team:id}', 'Backend\TeamController@update')->name('updateTeam');
        // Delete Slider From Manage
        Route::post('/delete/{team:id}', 'Backend\TeamController@destroy')->name('deleteTeam');
    });

    Route::group(['prefix' => 'technology'], function(){
        Route::get('/manage', 'Backend\TechnologyController@index')->name('manageTechnology');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\TechnologyController@create')->name('createTechnology');
        Route::post('/create', 'Backend\TechnologyController@store')->name('storeTechnology');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{techno:id}', 'Backend\TechnologyController@edit')->name('editTechnology');
        Route::post('/edit/{techno:id}', 'Backend\TechnologyController@update')->name('updateTechnology');
        // Delete Slider From Manage
        Route::post('/delete/{techno:id}', 'Backend\TechnologyController@destroy')->name('deleteTechnology');
    });

    Route::group(['prefix' => 'contact'], function(){
        Route::get('/manage', 'Backend\ContactController@index')->name('manageContacts');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\ContactController@create')->name('createContacts');
        Route::post('/create', 'Backend\ContactController@store')->name('storeContacts');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{contact:id}', 'Backend\ContactController@edit')->name('editContacts');
        Route::post('/edit/{contact:id}', 'Backend\ContactController@update')->name('updateContacts');
        // Delete Slider From Manage
        Route::post('/delete/{contact:id}', 'Backend\ContactController@destroy')->name('deleteContacts');
    });

    Route::group(['prefix' => 'services'], function(){
        Route::get('/manage', 'Backend\ServicePageController@index')->name('manageServices');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\ServicePageController@create')->name('createServices');
        Route::post('/create', 'Backend\ServicePageController@store')->name('storeServices');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{id}', 'Backend\ServicePageController@edit')->name('editServices');
        Route::post('/edit/{id}', 'Backend\ServicePageController@update')->name('updateServices');
        // Delete Slider From Manage
        Route::post('/delete/{servicepage:id}', 'Backend\ServicePageController@destroy')->name('deleteServices');
    });

    Route::group(['prefix' => 'protfolio'], function(){
        Route::get('/manage', 'Backend\Protfolio@index')->name('manageProtfolio');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\Protfolio@create')->name('createProtfolio');
        Route::post('/create', 'Backend\Protfolio@store')->name('storeProtfolio');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{ships:id}', 'Backend\Protfolio@edit')->name('editProtfolio');
        Route::post('/edit/{ships:id}', 'Backend\Protfolio@update')->name('updateProtfolio');
        // Delete Slider From Manage
        Route::post('/delete/{ships:id}', 'Backend\Protfolio@destroy')->name('deleteProtfolio');
    });

    Route::group(['prefix' => 'protfolio'], function(){
        Route::get('/manage', 'Backend\Protfolio@index')->name('manageProtfolio');
        // Show Create Page and Store after Submit
        Route::get('/create', 'Backend\Protfolio@create')->name('createProtfolio');
        Route::post('/create', 'Backend\Protfolio@store')->name('storeProtfolio');
        // Show Edit Page and Update after Submit
        Route::get('/edit/{ships:id}', 'Backend\Protfolio@edit')->name('editProtfolio');
        Route::post('/edit/{ships:id}', 'Backend\Protfolio@update')->name('updateProtfolio');
        // Delete Slider From Manage
        Route::post('/delete/{ships:id}', 'Backend\Protfolio@destroy')->name('deleteProtfolio');
    });





});


Route::get('/forms', 'frontendController@manage')->name('ContactForms');
Route::get('/', 'frontendController@index')->name('homePage');
Route::get('/about', 'frontendController@about')->name('aboutPage');
Route::get('/team', 'frontendController@team')->name('teamPage');
Route::get('/projects', 'frontendController@projects')->name('projectPage');
Route::get('/services', 'frontendController@services')->name('servicePage');
Route::get('/technology', 'frontendController@technology')->name('technologyPage');
Route::get('/contact-us', 'frontendController@contact')->name('contactPage');
Route::get('/project-details/{ship:id}', 'frontendController@project_details')->name('project_details'); 