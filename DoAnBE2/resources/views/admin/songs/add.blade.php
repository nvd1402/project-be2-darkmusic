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
        <section class="add-song">
            <h2 class="title">Thêm bài hát</h2>
            <p class="subtitle">Quản lý bài hát / Thêm bài hát</p>
            <p class="note">Lưu ý: Những trường hợp (*) là trường hợp bắt buộc.</p>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tenbaihat">Tên bài hát (*)</label>
                    <input type="text" id="tenbaihat" name="tenbaihat" placeholder="Nhập tên bài hát" required>
                </div>

                <div class="form-group">
                    <label for="nghesi">Nghệ sĩ (*)</label>
                    <select id="nghesi" name="nghesi" required>
                        <option value="">-- Chọn nghệ sĩ --</option>
                        <option value="1">Jack 97</option>
                        <option value="2">Jisoo</option>
                        <option value="3">Sơn Tùng MTP</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="theloai">Thể loại (*)</label>
                    <select id="theloai" name="theloai" required>
                        <option value="">-- Chọn thể loại --</option>
                        <option value="nhactre">Nhạc trẻ</option>
                        <option value="kpop">Kpop</option>
                        <option value="rap">Rap Việt</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="file_amthanh">Tệp file âm thanh (*)</label>
                    <input type="file" id="file_amthanh" name="file_amthanh" accept="audio/*" required>
                </div>

                <div class="form-group">
                    <label for="anhdaidien">Tệp file ảnh đại diện</label>
                    <input type="file" id="anhdaidien" name="anhdaidien" accept="image/*">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn primary">Thêm bài hát mới</button>
                    <button type="reset" class="btn">Hủy</button>
                </div>
            </form>
        </section>


    </main>




</div>

</div>



<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
