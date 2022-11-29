<!DOCTYPE html>


<html lang="en">

<head>
    <base href="https://coreui.io/demos/bootstrap/4.2/free/./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/4.2/free/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="https://coreui.io/demos/bootstrap/4.2/free/css/vendors/simplebar.css">

    <link href="https://coreui.io/demos/bootstrap/4.2/free/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="https://coreui.io/demos/bootstrap/4.2/free/css/examples.css" rel="stylesheet">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <link href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                    <svg class="nav-icon">
                        <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg> Posts</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href='{{url("/allposts")}}'><span class="nav-icon"></span> All Posts</a></li>
                    <li class="nav-item"><a class="nav-link" href='{{url("/addposts")}}'><span class="nav-icon"></span> Add New</a></li>
                    <li class="nav-item"><a class="nav-link" href='{{url("/previewposts")}}'><span class="nav-icon"></span> Preview</a></li>
                </ul>
            </li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="https://coreui.io/demos/bootstrap/4.2/free/#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="https://coreui.io/demos/bootstrap/4.2/free/assets/img/avatars/8.jpg" alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Profile</a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Settings</a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                                </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg> Lock Account</a><a class="dropdown-item" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                                <svg class="icon me-2">
                                    <use xlink:href="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <?php 
                if (isset($success['success'])) {
                    $status = json_encode($success['success']);
                } else {
                    $status = '';
                }
                ?>
                @if (isset($status) && $status == 'true')
                <div class="alert alert-success">
                    <p>{{ $success['message'] }}</p>
                </div>
                @endif
                @if (isset($status) && $status == 'false')
                <div class="alert alert-danger">
                    @if (isset($success['message']['title']))
                    <p>{{ json_encode($success['message']['title'][0]) }}</p>
                    @endif
                    @if (isset($success['message']['content']))
                    <p>{{ json_encode($success['message']['content'][0]) }}</p>
                    @endif
                    @if (isset($success['message']['category']))
                    <p>{{ json_encode($success['message']['category'][0]) }}</p>
                    @endif
                    @if (isset($success['message']['status']))
                    <p>{{ json_encode($success['message']['status'][0]) }}</p>
                    @endif
                </div>
                @endif
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-coreui-toggle="tab" data-coreui-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Published</button>
                            <button class="nav-link" id="nav-profile-tab" data-coreui-toggle="tab" data-coreui-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Draft</button>
                            <button class="nav-link" id="nav-contact-tab" data-coreui-toggle="tab" data-coreui-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Trashed</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($response['data'] as $item)
                                    @if($item['status'] == "publish")
                                    <tr>
                                        <td>{{$item['title']}}</td>
                                        <td>{{$item['category']}}</td>
                                        <td><a class="btn btn-outline-info" href='{{url("/edit/{$item["id"]}")}}'>Edit</a>
                                            <form action='{{url("/delete/{$item["id"]}")}}' method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($response['data'] as $item)
                                    @if($item['status'] == "draft")
                                    <tr>
                                        <td>{{$item['title']}}</td>
                                        <td>{{$item['category']}}</td>
                                        <td><a class="btn btn-outline-info" href='{{url("/edit/{$item["id"]}")}}'>Edit</a>
                                            <form action='{{url("/delete/{$item["id"]}")}}' method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($response['data'] as $item)
                                    @if($item['status'] == "trash")
                                    <tr>
                                        <td>{{$item['title']}}</td>
                                        <td>{{$item['category']}}</td>
                                        <td><a class="btn btn-outline-info" href='{{url("/edit/{$item["id"]}")}}'>Edit</a>
                                            <form action='{{url("/delete/{$item["id"]}")}}' method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>

    <script src="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="https://coreui.io/demos/bootstrap/4.2/free/vendors/simplebar/js/simplebar.min.js"></script>

    <script src="https://coreui.io/demos/bootstrap/4.2/free/vendors/chart.js/js/chart.min.js"></script>
    <script src="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="https://coreui.io/demos/bootstrap/4.2/free/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="https://coreui.io/demos/bootstrap/4.2/free/js/main.js"></script>
    <script>
    </script>
</body>

</html>