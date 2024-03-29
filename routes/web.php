<?php

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
//Only for Checking not project perspective
Route::get('/check', 'CheckController@index')->name('check');


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Employee Related Routes are Here..................
Route::get('/add-employee', 'EmployeeController@index')->name('add.employee');
Route::post('/insert-employee', 'EmployeeController@AddEmployee');
Route::get('/all-employee', 'EmployeeController@AllEmployee')->name('all.employee');
Route::get('/edit-employee/{id}', 'EmployeeController@EditEmployee');
Route::post('/update-employee/{id}', 'EmployeeController@UpdateEmployee');
Route::get('/view-employee/{id}', 'EmployeeController@ViewSingleEmployee');
Route::get('/delete-employee/{id}', 'EmployeeController@DeleteSingleEmployee');

// Customer Related Routes are Here..................
Route::get('/add-customer', 'CustomerController@index')->name('add.customer');
Route::post('/insert-customer', 'CustomerController@AddCustomer');
Route::get('/all-customer', 'CustomerController@AllCustomer')->name('all.customer');
Route::get('/edit-customer/{id}', 'CustomerController@EditCustomer');
Route::post('/update-customer/{id}', 'CustomerController@UpdateCustomer');
Route::get('/view-customer/{id}', 'CustomerController@ViewCustomer');
Route::get('/delete-customer/{id}', 'CustomerController@DeleteCustomer');

// Supplier Related Routes are Here..................
Route::get('/add-supplier', 'SupplierController@index')->name('add.supplier');
Route::post('/insert-supplier', 'SupplierController@InsertSupplier');
Route::get('/all-supplier', 'SupplierController@AllSupplier')->name('all.supplier');
Route::get('/edit-supplier/{id}', 'SupplierController@EditSupplier');
Route::post('/update-supplier/{id}', 'SupplierController@UpdateSupplier');
Route::get('/view-supplier/{id}', 'SupplierController@ViewSingleSupplier');
Route::get('/delete-supplier/{id}', 'SupplierController@DeleteSingleSupplier');

// Salary Related Routes are Here..................
Route::get('/add-advance_salary', 'SalaryController@AddAdvancedSalary')->name('add.advance_salary');
Route::post('/insert-advancedsalary', 'SalaryController@InsertAdvanceSalary');
Route::get('/all-advance_salary', 'SalaryController@AllAdvancedSalary')->name('all.advance_salary');
Route::get('/pay.salary', 'SalaryController@PaySalary')->name('pay.salary');

// Category Related Routes are Here..................
Route::get('/add-category', 'CategoryController@AddCategory')->name('add.category');
Route::post('/insert-category', 'CategoryController@InsertCategory');
Route::get('/all-category', 'CategoryController@AllCategory')->name('all.category');
Route::get('/edit-category/{id}', 'CategoryController@EditCategory');
Route::post('/update-category/{id}', 'CategoryController@UpadteCategory');
Route::get('/delete-category/{id}', 'CategoryController@DeleteCategory');

//Product Routes are here------------------
Route::get('/add-product','ProductController@AddProduct')->name('add.product');
Route::post('/insert-product','ProductController@InsertProduct');
Route::get('/all-product', 'ProductController@AllProduct')->name('all.product');
Route::get('/view-product/{id}', 'ProductController@ViewProduct');
Route::get('/edit-product/{id}', 'ProductController@EditProduct');
Route::post('/update-product/{id}','ProductController@UpdateProduct');
Route::get('/delete-product/{id}', 'ProductController@DeleteProduct');

//Expense routes are here---------------------
Route::get('/add-expense','ExpenseController@AddExpense')->name('add.expense');
Route::post('/insert-expense','ExpenseController@InserExpense');
Route::get('/today-expense','ExpenseController@TodayExpense')->name('today.expense');
Route::get('/edit-today-expense/{id}', 'ExpenseController@EditTodayExpense');
Route::post('/update-expense/{id}','ExpenseController@UpdateExpense');
Route::get('/monthly-expense','ExpenseController@MonthlyExpense')->name('monthly.expense');
Route::get('/yearly-expense','ExpenseController@YearlyExpense')->name('yearly.expense');

//monthly more expenses----
Route::get('/january-expense','ExpenseController@JanuaryExpense')->name('january.expense');
Route::get('/february-expense','ExpenseController@FebruaryExpense')->name('february.expense');
Route::get('/march-expense','ExpenseController@MarchExpense')->name('march.expense');
Route::get('/april-expense','ExpenseController@AprilExpense')->name('april.expense');
Route::get('/may-expense','ExpenseController@MayExpense')->name('may.expense');
Route::get('/june-expense','ExpenseController@JuneExpense')->name('june.expense');
Route::get('/july-expense','ExpenseController@JulyExpense')->name('july.expense');
Route::get('/august-expense','ExpenseController@AugustExpense')->name('august.expense');
Route::get('/september-expense','ExpenseController@SeptemberExpense')->name('september.expense');
Route::get('/october-expense','ExpenseController@OctoberExpense')->name('october.expense');
Route::get('/november-expense','ExpenseController@NovemberExpense')->name('november.expense');
Route::get('/december-expense','ExpenseController@DecemberExpense')->name('december.expense');

//Attendences routes are here-----------------------
Route::get('/take-attendence','AttendenceController@TakeAttendence')->name('take.attendence');
Route::post('/insert-attendence','AttendenceController@InsertAttendence');
Route::get('/all-attendence','AttendenceController@AllAttendence')->name('all.attendence');
Route::get('/edit-attendence/{edit_date}', 'AttendenceController@EditAttednece');
Route::post('/update-attendence','AttendenceController@UpdateAttendence');
Route::get('/view-attendence/{edit_date}', 'AttendenceController@ViewAttednece');

//setting routes
Route::get('/website-setting','AttendenceController@Setting')->name('setting');
Route::post('/update-website/{id}', 'AttendenceController@UpdateWebsite');


//pos routes are here
Route::get('/pos','PosController@index')->name('pos');

//Cart controller
Route::post('/add-cart', 'CartController@index');
Route::post('/cart-update/{rowId}', 'CartController@CartUpdate');
Route::get('/cart-remove/{rowId}', 'CartController@CartRemove');
Route::post('/invoice', 'CartController@CreateInvoice');
Route::post('/final-invoice', 'CartController@FinalInvoice');