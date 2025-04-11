<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Dark Music</title>
</head>

<body>

<div class="container">
    <aside class="sidebar">
        <div class="logo">
            <button class="menu-btn" id="menu-close">
                <i class='bx bx-log-out-circle'></i>
            </button>
            <i class='bx bx-pulse'></i>
            <a class="nameLogo" href="#">DarkMusic</a>
        </div>

        <div class="menu">
            <h5>Menu</h5>
            <ul>
                <li>
                    <i class='bx bxs-bolt-circle'></i>
                    <a href="#">Quản lý người dùng</a>
                </li>
                <li>
                    <i class='bx bxs-volume-full'></i>
                    <a href="{{ route('admin.songs.list') }}">Quản lý bài hát</a>
                </li>
                <li>
                    <i class='bx bxs-album'></i>
                    <a href="#">Quản lý thể loại</a>
                </li>
                <li>
                    <i class='bx bxs-microphone'></i>
                    <a href="#">Quản lý nghệ sỉ</a>
                </li>
                <li>
                    <i class='bx bxs-radio'></i>
                    <a href="#">Quản lý album</a>
                </li>
            </ul>
        </div>

        <div class="menu">
            <h5>Library</h5>
            <ul>
                <li>
                    <i class='bx bx-undo'></i>
                    <a href="#">Quản lý tin tức</a>
                </li>
                <li>
                    <i class='bx bxs-photo-album'></i>
                    <a href="#">Quản lý quảng cáo</a>
                </li>
                <li>
                    <i class='bx bxs-heart'></i>
                    <a href="#">Quản lý doanh thu</a>
                </li>
                <li>
                    <i class='bx bxs-folder'></i>
                    <a href="#">Local</a>
                </li>

            </ul>
        </div>

        <div class="menu">
            <h5>Playlist</h5>
            <ul>
                <li>
                    <i class='bx bxs-plus-square'></i>
                    <a href="#">Create New</a>
                </li>
                <li>
                    <i class='bx bxs-caret-right-circle'></i>
                    <a href="#">Best of 2023</a>
                </li>
                <li>
                    <i class='bx bxs-caret-right-circle'></i>
                    <a href="#">Best of 2022</a>
                </li>
                <li>
                    <i class='bx bxs-caret-right-circle'></i>
                    <a href="#">Kael Fischer</a>
                </li>

            </ul>

        </div>


        <div class="playing">
            <div class="top">
                <img src="assets/current.png">
                <h4>Apple<br>Homepod</h4>
            </div>
            <div class="bottom">
                <i class='bx bx-podcast'></i>
                <p>Playing On Device</p>
            </div>
        </div>


    </aside>

    <main>
        <header>
            <div class="nav-links">
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
            </div>

            <div class="search">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Type here to search">
            </div>

        </header>
        <!--content-->
        <h1 style="color: #5773ff">day la trang quan ly ngươi dung</h1>

    </main>




        </div>

</div>



<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
