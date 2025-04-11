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
                    <a href="{{ route('admin.homeAdmin') }}">Quản lý người dùng</a>
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
        <section class="song-list">
            <h2 class="title">Danh sách bài hát</h2>
            <div class="add-btn">
                <a href="{{ route('admin.songs.add') }}">Thêm mới</a>
            </div>

            <table class="song-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bài hát</th>
                    <th>Nghệ sĩ</th>
                    <th>Thể loại</th>
                    <th>Avatar</th>
                    <th>File âm thanh</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Thiên Lý Ơi</td>
                    <td>Jack 97</td>
                    <td>Nhạc trẻ</td>
                    <td><img class="avatar" src="" alt="avatar"></td>
                    <td>thienlyoi.mp3</td>
                    <td>
                        <a href="#" class="btn edit">Sửa</a>
                        <a href="#" class="btn delete">Xóa</a>
                        <span class="status active">Hoạt động</span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Flower</td>
                    <td>Jisoo</td>
                    <td>Kpop</td>
                    <td><img class="avatar" src="" alt="avatar"></td>
                    <td>flower.mp3</td>
                    <td>
                        <a href="#" class="btn edit">Sửa</a>
                        <a href="#" class="btn delete">Xóa</a>
                        <span class="status disabled">Vô hiệu hóa</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>


    </main>




</div>

</div>



<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
