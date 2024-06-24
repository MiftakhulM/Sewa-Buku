<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $rentLogs = RentLogs::with(['user', 'book'])->orderBy('created_at', 'desc')->get(); 

       return view('dashboard',['book_count' => $bookCount, 'category_count' => $categoryCount, 'user_count' => $userCount, 'rent_logs' => $rentLogs]);
     

    }


}
