<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfile;
use App\Http\Controllers\Frontend\Indexcontroller;
use App\Models\User;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Subcategorycontroller;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CartPageController;
use App\Http\Controllers\CheckOutController;

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


/* Admin Route */
Route::prefix('admin')->group(function(){

    Route::get('/login',[Admincontroller::class,'Index'])->name('login_form');

    Route::post('/login/create',[Admincontroller::class,'Login_create'])->name('admin.login.create');

    Route::get('/dashbord',[Admincontroller::class,'Dashboard'])->name('Admin.Dashboard')->middleware('admin');

    Route::get('/Logout/create',[Admincontroller::class,'Logout_create'])->name('admin.loggout_create');

    Route::get('/profile',[AdminProfile::class,'AdminProfilePage'])->name('admin.profile.page')->middleware('admin');

    Route::get('/profile/edit',[AdminProfile::class,'AdminProfileEdit'])->name('admin.profile.edit.view')->middleware('admin');

    Route::post('/profile/update/create',[AdminProfile::class, 'AdminUpdateCreat'])->name('admin.profile.update.create')->middleware('admin');

});

/* Admin Route End */

Route::get('/login',[Indexcontroller::class,'loginview'])->name('userlogin_page');


Route::get('/',[Indexcontroller::class,'Index'])->name('homeview');
Route::get('/user/logout',[Indexcontroller::class,'UserLogout'])->name('user.logout');
Route::get('/user/profile',[Indexcontroller::class,'UserProfile'])->name('user.profile')->middleware(['auth']);
Route::post('/user/profile/create',[Indexcontroller::class,'UserProfile_create'])->name('user.profile.updtae.create');
Route::get('/user/orders',[Indexcontroller::class,'UserOrders'])->name('user.orders')->middleware(['auth']);

/* Category */
Route::prefix('category')->group(function(){

    Route::get('/view',[CategoryController::class,'Category_view'])->name('all.brand');
    Route::post('/add',[CategoryController::class,'InsertCategory'])->name('add.category');
    Route::get('/edit/{id}',[CategoryController::class,'Category_Edit_view'])->name('category.edit');
    Route::post('/edit/create',[CategoryController::class,'Category_Edit_create'])->name('edit.category.create');
    Route::get('/edit/delete/{id}',[CategoryController::class,'Category_delete'])->name('category.delete');


    

    /* Sub Category */
    Route::get('/subcategory/view',[Subcategorycontroller::class,'SubCategory_view'])->name('all.sub.brand');
    Route::post('/subcategory/add',[Subcategorycontroller::class,'SubCategory_insert'])->name('all.sub.insert');
    Route::get('sub_cat/edit/{id}',[Subcategorycontroller::class,'subCategory_Edit_view'])->name('subcategory.edit');
    Route::post('sub_cat/edit/create',[Subcategorycontroller::class,'subCategory_Edit_create'])->name('edit.subcategory.create');
    Route::get('sub_cat/edit/delete/{id}',[Subcategorycontroller::class,'subCategory_delete'])->name('subcategory.delete');
     /* Sub Category End*/
    

});
/* Category End */


/* Product */
Route::prefix('product')->group(function(){

    Route::get('/add',[ProductController::class,'add_product'])->name('add-product');
    Route::post('/add/store',[ProductController::class,'product_insert'])->name('add.product.store.create');
    Route::get('/mange',[ProductController::class,'manage_product'])->name('manage-product');
    Route::get('/edit/{id}',[ProductController::class,'edit_product'])->name('product.edit');
    Route::post('/update',[ProductController::class,'update_product'])->name('update.product.store');
    Route::post('/img_update',[ProductController::class,'update_product_image'])->name('product.image.update.store');
    Route::get('/inactive/{id}',[ProductController::class,'make_inactive'])->name('product.inactive');
    Route::get('/active/{id}',[ProductController::class,'make_active'])->name('product.active');
    Route::get('/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');


});
/*End Product */


/* Slider */
Route::prefix('slider')->group(function(){

    Route::get('/view',[SliderController::class,'slider_view'])->name('mange-slider');
    Route::post('/store_slider',[SliderController::class,'AddSlider'])->name('add.slider');
    Route::get('/edit/{id}',[SliderController::class,'slider_Edit_view'])->name('slider.edit');
    Route::post('/edit/create',[SliderController::class,'Slider_Edit_create'])->name('edit.slider.create');
    Route::get('/edit_image/{id}',[SliderController::class,'slider_Image_Edit_view'])->name('slider.edit_image');
    Route::post('/edit_image/create',[SliderController::class,'Slider_image_Edit_create'])->name('edit.slider_image.create');
    Route::get('/delete/{id}',[SliderController::class,'slider_delete'])->name('Slider.delete');
});
/*End slider */

/* Orders */
Route::prefix('order')->group(function(){

    Route::get('/view',[OrderController::class,'orderView'])->name('mange-order');
    Route::get('/detilas/full/{Order_id}',[OrderController::class,'OrderDetails'])->name('orderdetailsFullpage');
    Route::get('/marks/prosses/{Order_id}',[OrderController::class,'MarkAsProsess'])->name('markasprosseing');
    Route::get('/marks/sipped/{Order_id}',[OrderController::class,'MarkAsSipped'])->name('markashipp');
    Route::get('/delete/{Order_id}',[OrderController::class,'OrderDelete'])->name('orderdelete');

});
/*End order */


/*Product Details frontend*/
Route::get('products/details/{id}',[Indexcontroller::class,'product_details'])->name('productDetails');
Route::get('products/all/',[Indexcontroller::class,'all_product_view'])->name('Allproductview');
Route::get('subcategory/product/{sub_cat_id}',[Indexcontroller::class,'sub_cat_wise_data']);
/* Porduct view ajax */
Route::get('/product/view/modal/{id}',[Indexcontroller::class,'prdouctView_Add_cartajax']);
/* Add to Cart  */
Route::post('/cart/data/stroe/{id}',[CartController::class,'addToCart']);
/*Mini Cart Count */
Route::get('/minicart/data/count',[CartController::class,'miniCartCount']);


/* cart pgae */
Route::get('/cart/full/page',[CartPageController::class,'MyCart'])->name('mycart');

Route::get('/getmain/cart/products',[CartPageController::class,'GetCartProducts']);

Route::get('/maincart/item/remove/{id}',[CartPageController::class,'cartItemRemove']);

Route::get('/cart/incremt/qty/{id}',[CartPageController::class,'cartIncremtn']);
Route::get('/cart/decrement/qty/{id}',[CartPageController::class,'cartdecriment']);

Route::get('/cart/checkout/final/order',[CartPageController::class,'cartCheckout'])->name('checkoutpage');

Route::post('/sipping/details/store/order',[CheckOutController::class,'checkOutStore'])->name('sippingdetailsStore');

Route::get('user/order-details/{id}',[Indexcontroller::class,'orderDetailsView']);

Route::get('user/marsk-asRecived/{id}',[Indexcontroller::class,'markasReccived'])->name('markasReccived');

Route::get('contact/us/',[Indexcontroller::class,'contact'])->name('Contactus');


Route::get('/dashboard', function () {
    $id=Auth::user()->id;
    $userdata = User::find($id);
    return view('dashboard',compact('userdata'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
