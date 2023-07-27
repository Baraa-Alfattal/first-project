<!DOCTYPE html>
<html lang="en">

<head>
    <title>this is @yield('title') page</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='{{ asset('css/nav-sidebar.css') }}' rel='stylesheet'>

    @yield('head')

</head>

<body>
    <div class="container">
        <nav class="open">
            <div class="logo">
                <i class='bx bx-menu menu-icon'></i>
                <span class="logo-name">Dashboard</span>
            </div>
            <ul class="navbar-right">
                <a href="#" class="nav-link">
                    <i class='bx bxs-log-out icon'></i>
                    <span class="link">Logout</span>
                </a>

            </ul>



            <ul class="nav-3">

                <img src="img/user.jpg" class="profile" alt="">

            </ul>
            <div class="sidebar">
                <div class="logo">
                    <i class='bx bx-menu menu-icon'></i>
                    <span class="logo-name">Dashboard</span>

                </div>
                <div class="sidebar-content">
                    <ul class="lists">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-home-alt icon'></i>
                                <span class="link">Home</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-bar-chart-alt-2 icon'></i>
                                <span class="link">Revenue</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bxs-bell icon'></i>
                                <span class="link">Notifications</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-message-rounded icon'></i>
                                <span class="link">Messages</span>
                            </a>
                        </li>

                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-folder-open icon'></i>
                                <span class="link">Files</span>
                            </a>
                        </li>
                    </ul>
                    <div class="buttom-cotent">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-cog icon'></i>
                                <span class="link">Settings</span>
                            </a>
                        </li>

                    </div>
                </div>
            </div>
        </nav>


    </div>

    @yield('content')

    <script>
        const navBar = document.querySelector("nav"),
            menuBtns = document.querySelectorAll(".menu-icon"),
            overlay = document.querySelector(".overlay");
        menuBtns.forEach(menuBtn => {
            menuBtn.addEventListener("click", () => {
                navBar.classList.toggle("open");
            });

        });
        overlay.addeventlistener("click", () => {
            navBar.classList.remove("open");
        });
    </script>





</body>

</html>
