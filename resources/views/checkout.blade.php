<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Thư viện</title>
</head>
<body style="background-image: url('{{ asset('img/Group 1.png') }}'); overflow: hidden;background-size: cover;background-position: top left;">
    <header style="justify-content: center" class="header">
        <a style="" href="/">Trang chủ</a>
    </header>
    <div class="container borrow-form">
        <h1>Mượn sách</h1>
        <form action="">
            <label for="fullname">Họ tên</label>
            <input type="text" id="fullname" name="fullname" value="{{ auth()->user()->fullname }}">
            <label for="phone">Số điện thoại</label>
            <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}">
            <label for="end_date">Số ngày mượn</label>
            <select name="end_date" id="end_date">
                <option value="{{ \Carbon\Carbon::now()->addDays(1) }}">1 ngày</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(3) }}">3 ngày</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(7) }}">7 ngày</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(14) }}">14 ngày</option>
                <option value="{{ \Carbon\Carbon::now()->addDays(30) }}">30 ngày</option>
            </select>
            <input type="submit" value="Xác nhận">
        </form>
    </div>
</body>
</html>
