<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/*
Common routes naming

index - Show all data or students
show - Show a single data or student
create - Show a form to add a new user
store - Store a data
edit - Show form to a data
update - update a data
destroy - delete a data
*/

Route::get('/', [UserController::class, 'welcome']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/loginprocess', [UserController::class, 'login_process']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/signup', [UserController::class, 'signup']);

Route::post('/interest', [UserController::class, 'surveyInterest']);

Route::get('/sidebar', [UserController::class, 'sidebar']);

Route::get('/following', [UserController::class, 'following']);

Route::get('/followers', [UserController::class, 'followers']);

Route::get('/explore', [UserController::class, 'explore'])->name('explore');

Route::get('/notification', [UserController::class, 'notification']);

Route::get('/read', [UserController::class, 'readNotification']);

Route::get('/unread', [UserController::class, 'unreadNotification']);

Route::get('/messages', [UserController::class, 'message']);

// Route::get('/search', [UserController::class, 'searchResult']);

Route::get('/product/{id}/{user_id}', [UserController::class, 'singleProduct']);

Route::get('/cart', [UserController::class, 'cart']);

Route::get('/bookclub', [UserController::class, 'bookClub']);

Route::get('/sellingclub', [UserController::class, 'bookSellingClub']);

Route::get('/exchangeclub', [UserController::class, 'bookExchangeClub']);

Route::get('/rentingclub', [UserController::class, 'bookRentingClub']);

Route::get('/eventssellingclub', [UserController::class, 'eventsSelling']);

Route::get('/memberssellingclub', [UserController::class, 'membersSelling']);

Route::get('/eventsexchangeclub', [UserController::class, 'eventsExchange']);

Route::get('/membersexchangeclub', [UserController::class, 'membersExchange']);

Route::get('/eventsrentingclub', [UserController::class, 'eventsRenting']);

Route::get('/membersrentingclub', [UserController::class, 'membersRenting']);

Route::get('/checkout', [UserController::class, 'checkout']);

Route::get('/deliveryAddress', [UserController::class, 'deliveryAddress']);

Route::get('/wishlist', [UserController::class, 'wishlist']);

Route::get('/mylist', [ListingController::class, 'myList'])->name('mylist');

Route::get('/categories', [UserController::class, 'categories']);

Route::get('/mylikes', [UserController::class, 'myLikes']);

Route::get('/myprofile', [UserController::class, 'myProfile']);

Route::post('/myprofileupdate', [UserController::class, 'myProfileUpdate']);

Route::get('/mypurchase', [UserController::class, 'myPurchase']);

Route::get('/toreceive', [UserController::class, 'toReceive']);

Route::get('/delivered-mypurchase', [UserController::class, 'deliveredMyPurchase']);

Route::get('/dropped-mypurchase', [UserController::class, 'droppedMyPurchase']);

Route::get('/refund-mypurchase', [UserController::class, 'refundMyPurchase']);

Route::get('/addresses', [UserController::class, 'address']);

Route::get('/changepassword', [UserController::class, 'changePassword']);

Route::get('/reviewsandratings', [UserController::class, 'userReviewsAndRatings']);

Route::get('/userlistings', [UserController::class, 'userProfilePreview']);

Route::get('/userreviews', [UserController::class, 'previewReviews']);

Route::get('/userwishlist', [UserController::class, 'previewWishlist']);

Route::post('/register', [UserController::class, 'store']);

Route::post('/mylist/salepost', [ListingController::class, 'saleList']);

Route::post('/mylist/exchangepost', [ListingController::class, 'exchangeList']);

Route::post('/mylist/rentpost', [ListingController::class, 'rentList']);

Route::get('/mylist/sale', [ListingController::class, 'sale']);

Route::get('/mylist/exchange', [ListingController::class, 'exchange']);

Route::get('/mylist/rent', [ListingController::class, 'rent']);

Route::get('/orders', [UserController::class, 'orders']);

Route::get('/delivered', [UserController::class, 'delivered']);

Route::get('/dropped', [UserController::class, 'dropped']);

Route::get('/refund', [UserController::class, 'refund']);

Route::get('/trackrental', [UserController::class, 'rentalTracking']);

Route::post('/mylist/updateSale/{id}', [ListingController::class, 'saleUpdate']);

Route::post('/mylist/updateExchange/{id}', [ListingController::class, 'exchangeUpdate']);

Route::post('/mylist/updateRent/{id}', [ListingController::class, 'rentUpdate']);

Route::get('/mylist/delete/{id}', [ListingController::class, 'destroy']);

Route::post('/updatepassword', [UserController::class, 'updateUserPassword']);

Route::post('/storeaddress/{add}', [UserController::class, 'storeAddress']);

Route::post('/updateaddress/{id}/{add}', [UserController::class, 'updateAddress']);

Route::get('/destroyaddress/{id}/{del}', [UserController::class, 'destroyAddress']);

Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::get('/manageresources', [UserController::class, 'manageResources']);

Route::get('/managerefund', [UserController::class, 'manageRefund']);

Route::get('/managereviews', [UserController::class, 'manageReviews']);

Route::get('/manageuseraccounts', [UserController::class, 'manageUserAccounts']);

Route::get('/managerentingclub', [UserController::class, 'manageRentingClub']);

Route::get('/managesellingclub', [UserController::class, 'manageSellingClub']);

Route::get('/manageexchangeclub', [UserController::class, 'manageExchangeClub']);

Route::get('/manageuserlisting', [UserController::class, 'manageUserListing']);

Route::get('/reportedlisting', [UserController::class, 'reportedListing']);

Route::get('/reportedpost', [UserController::class, 'reportedPost']);

Route::get('/reportedexchangepost', [UserController::class, 'reportedExchangePost']);

Route::get('/reportedrentpost', [UserController::class, 'reportedRentPost']);

Route::get('/reporteduser', [UserController::class, 'reportedUser']);

Route::get('/survey', [UserController::class, 'survey']);

Route::get('/feedback', [UserController::class, 'systemFeedback']);

Route::get('/userdashboard', [UserController::class, 'userDashboard'])->name('userdashboard');

Route::get('/searchitem/{item}', [UserController::class, 'search']);

Route::get('/addtocart/{id}', [ListingController::class, 'addToCart']);

Route::get('/deletecart/{id}', [ListingController::class, 'destroyCart']);

Route::post('/placeorder', [UserController::class, 'placeOrder']);

// message routes, api's, backticks approach
Route::post('/sendMessage', [MessageController::class, 'sendMessage']);

Route::post('/sendMessageTwo', [MessageController::class, 'sendMessageTwo']);

Route::get('/getMessage', [MessageController::class, 'getMessage']);

Route::get('/searchUser', [MessageController::class, 'searchUser']);

Route::post('/conversations', [MessageController::class, 'createConversation']);

Route::get('/getConversations', [MessageController::class, 'getConversations']);

Route::delete('/deleteConversationCtnBased', [MessageController::class, 'deleteConversationCtnBased']);

Route::delete('/deleteConversationSearchBased', [MessageController::class, 'deleteConversationSearchBased']);

Route::get('/fullnameGetter', [MessageController::class, 'fullnameGetter']);

// API's
Route::get('/search/{item}', [UserController::class, 'searchItem']);

Route::get('/getaddress/{id}', [UserController::class, 'getAddress']);