<?php


$this->title = 'Email';


$this->registerJsFile("/app-assets/vendors/js/vendors.min.js",
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);




$this->registerJsFile('/app-assets/vendors/js/editors/quill/quill.min.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);






$this->registerJsFile('/app-assets/js/scripts/configs/vertical-menu-light.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/core/app-menu.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/core/app.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/scripts/components.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);
$this->registerJsFile('/app-assets/js/scripts/footer.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);






$this->registerJsFile('/app-assets/js/scripts/pages/app-email.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);



$this->registerCssFile("@web/app-assets/vendors/css/editors/quill/quill.snow.css",
    ['rel' => 'stylesheet',


        'depends'=> ['frontend\assets\AppAsset']]);



$this->registerCssFile("@web/app-assets/css/pages/app-email.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);


?>


?>








<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar email-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/site/email" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/site/chat" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/site/todo" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/site/calendar" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell"></i></a>

                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <?php  $dfg = \common\models\User::find()->where(['id'=>Yii::$app->user->id])->one()?>
                            <div class="user-nav d-sm-flex d-none"><span class="user-name"><?= $dfg->username ?></span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/">
                    <div class="brand-logo"><img class="logo" src="../../../app-assets/images/logo/logo.png" /></div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">

            <li class=" nav-item"><a href="/"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2">0</span></a>
                <ul class="menu-content">
                    <li class="active"><a href="/"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>


            <li class=" navigation-header"><span>Эаявки</span>
            </li>

            <li class=" nav-item"><a href="/mber1"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18n="Table">Фабрика проектов</span></a>
            </li>
            <li class=" nav-item"><a href="/mber2"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18n="Table">Предпринимателей</span></a>
            </li>



            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class="active nav-item"><a href="/site/email"><i class="menu-livicon" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a href="/site/chat"><i class="menu-livicon" data-icon="comments"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="/site/todo"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="/site/calendar"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class=" nav-item"><a href="/site/kanban"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>

            <li class=" nav-item"><a href="/site/file_manager"><i class="menu-livicon" data-icon="save"></i><span class="menu-title" data-i18n="File Manager">File Manager</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">
                    <!-- sidebar close icon -->
                    <span class="sidebar-close-icon">
                            <i class="bx bx-x"></i>
                        </span>
                    <!-- sidebar close icon -->
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose">
                            <!-- compose button  -->
                            <button type="button" class="btn btn-primary btn-block my-2 compose-btn">
                                <i class="bx bx-plus"></i>
                                Compose
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <!-- sidebar menu  -->
                            <div class="list-group list-group-messages">
                                <a href="#" class="list-group-item pt-0 active" id="inbox-menu">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    Inbox
                                    <span class="badge badge-light-primary badge-pill badge-round float-right mt-50">5</span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: paper-plane.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    Sent
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: pen.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div> Draft
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: star.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    Starred
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: info-alt.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    Spam
                                    <span class="badge badge-light-danger badge-pill badge-round float-right mt-50">3</span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    Trash
                                </a>
                            </div>
                            <!-- sidebar menu  end-->

                            <!-- sidebar label start -->
                            <label class="sidebar-label">Labels</label>
                            <div class="list-group list-group-labels ">
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                    Product
                                    <span class="bullet bullet-success bullet-sm"></span>
                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                    Work
                                    <span class="bullet bullet-primary bullet-sm"></span>
                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                    Misc
                                    <span class="bullet bullet-warning bullet-sm"></span>
                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                    Family
                                    <span class="bullet bullet-danger bullet-sm"></span>
                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                    Design
                                    <span class="bullet bullet-info bullet-sm"></span>
                                </a>
                            </div>
                            <!-- sidebar label end -->
                        </div>
                    </div>
                </div>
                <!-- User new mail right area -->
                <div class="compose-new-mail-sidebar">
                    <div class="card shadow-none quill-wrapper p-0">
                        <div class="card-header">
                            <h3 class="card-title" id="emailCompose">New Message</h3>
                            <button type="button" class="close close-icon">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <!-- form start -->
                        <form action="#" id="compose-form">
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <div class="form-group pb-50">
                                        <label for="emailfrom">from</label>
                                        <input type="text" id="emailfrom" class="form-control" placeholder="user@example.com" disabled>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="email" id="emailTo" class="form-control" placeholder="To" required>
                                        <label for="emailTo">To</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailSubject" class="form-control" placeholder="Subject">
                                        <label for="emailSubject">Subject</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailCC" class="form-control" placeholder="CC">
                                        <label for="emailCC">CC</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="emailBCC" class="form-control" placeholder="BCC">
                                        <label for="emailBCC">BCC</label>
                                    </div>
                                    <!-- Compose mail Quill editor -->
                                    <div class="snow-container border rounded p-50 ">
                                        <div class="compose-editor mx-75"></div>
                                        <div class="d-flex justify-content-end">
                                            <div class="compose-quill-toolbar pb-0">
                                                    <span class="ql-formats mr-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-link"></button>
                                                        <button class="ql-image"></button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end pt-0">
                                <button type="reset" class="btn btn-light-secondary cancel-btn mr-1">
                                    <i class='bx bx-x mr-25'></i>
                                    <span class="d-sm-inline d-none">Cancel</span>
                                </button>
                                <button type="submit" class="btn-send btn btn-primary">
                                    <i class='bx bx-send mr-25'></i> <span class="d-sm-inline d-none">Send</span>
                                </button>
                            </div>
                        </form>
                        <!-- form start end-->
                    </div>
                </div>
                <!--/ User Chat profile right area -->
            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- email app overlay -->
                    <div class="app-content-overlay"></div>
                    <div class="email-app-area">
                        <!-- Email list Area -->
                        <div class="email-app-list-wrapper">
                            <div class="email-app-list">
                                <div class="email-action">
                                    <!-- action left start here -->
                                    <div class="action-left d-flex align-items-center">
                                        <!-- select All checkbox -->
                                        <div class="checkbox checkbox-shadow checkbox-sm selectAll mr-50">
                                            <input type="checkbox" id="checkboxsmall">
                                            <label for="checkboxsmall"></label>
                                        </div>
                                        <!-- delete unread dropdown -->
                                        <ul class="list-inline m-0 d-flex">
                                            <li class="list-inline-item mail-delete">
                                                <button type="button" class="btn btn-icon action-icon">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item mail-unread">
                                                <button type="button" class="btn btn-icon action-icon">
                                                        <span class="fonticon-wrap d-inline mr-25">
                                                            <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                                </i>
                                                            </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i>Spam</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash"></i>Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <i class="livicon-evo" data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                                </i>
                                                            </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-success bullet-sm"></span>
                                                            <span>Product</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-primary bullet-sm"></span>
                                                            <span>Work</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-warning bullet-sm"></span>
                                                            <span>Misc</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-danger bullet-sm"></span>
                                                            <span>Family</span>
                                                        </a>
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-info bullet-sm"></span>
                                                            <span> Design</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- action left end here -->

                                    <!-- action right start here -->
                                    <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                        <!-- search bar  -->
                                        <div class="email-fixed-search flex-grow-1">
                                            <div class="sidebar-toggle d-block d-lg-none">
                                                <i class="bx bx-menu"></i>
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left m-0">
                                                <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                                <div class="form-control-position">
                                                    <i class="bx bx-search"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <!-- pagination and page count -->
                                        <span class="d-none d-sm-block">1-10 of 653</span>
                                        <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                            <i class="bx bx-chevron-left"></i>
                                        </button>
                                        <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                            <i class="bx bx-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- / action right -->

                                <!-- email user list start -->
                                <div class="email-user-list list-group">
                                    <ul class="users-list-wrapper media-list">
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall1">
                                                        <label for="checkboxsmall1"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite warning">
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img src="/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avtar img holder">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate">Open source project public release 👍</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">4:14 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text truncate mb-0">
                                                        Hey John, bah kivu decrete epanorthotic unnotched
                                                        Argyroneta nonius veratrine preimaginary
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall2">
                                                        <label for="checkboxsmall2"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite"><i class="bx bx-star"></i></span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate">Ecommerce website Paypal integration 😃</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        We will start the new application development soon once
                                                        this will be completed.
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-danger bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall3">
                                                        <label for="checkboxsmall3"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate">How To Set Intentions That Energize You</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        I will provide you more details after this Saturday. Hope
                                                        that will be fine for you..
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right d-flex align-items-center">
                                                                <i class="bx bx-paperclip mr-50"></i>
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall4">
                                                        <label for="checkboxsmall4"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate">Harness The Power Of Words In Your Life</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">Yesterday</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text text-truncate mb-0">
                                                        When the equation, first to ability the forwards, the a but travelling, outlines sentinels
                                                        bad expand to goodness....
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right d-flex align-items-center">
                                                                <i class="bx bx-paperclip mr-50"></i>
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall5">
                                                        <label for="checkboxsmall5"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0">Helen Keller A Teller And A Seller</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">15 July</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Thanks for your feedback ! Here's a new layout for a new Modern Admin theme.
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right d-flex align-items-center">
                                                                <i class="bx bx-paperclip mr-50"></i>
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall6">
                                                        <label for="checkboxsmall6"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite warning">
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                            <span class="list-group-item-text text-truncate mb-0">
                                                                Use Your Reset Button To Change Your Vibration 🎉
                                                            </span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">12-07-2019</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Hey John, bah kivu decrete epanorthotic unnotched
                                                        Argyroneta nonius veratrine preimaginary.</p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-info bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall7">
                                                        <label for="checkboxsmall7"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite warning">
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0">Harness The Power Of Words In Your Life</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">03-29-2019</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Hope your like it, or feel free to comment, feedback or rebound !
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall8">
                                                        <label for="checkboxsmall8"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-10.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0">Hypnosis 12 Steps To Acquire Mind Power</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">19 Jun</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Monstrous with geared from far and these, morals, phase rome; Class. Called get amidst of geared from
                                                        next...
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-danger bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall9">
                                                        <label for="checkboxsmall9"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0">How To Stop Living Your Life On Autopilot</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">2 Jun</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Thanks for your feedback ! Here's a new layout for a new
                                                        Modern Admin theme.
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-info bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall10">
                                                        <label for="checkboxsmall10"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                            <span class="list-group-item-text text-truncate mb-0">
                                                                Invest a few hours contributing to the software
                                                                you use and love. 🍕
                                                            </span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">29 May</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Hope your like it, or feel free to comment, feedback or rebound !
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-info bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall11">
                                                        <label for="checkboxsmall11"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0">Harness The Power Of Words In Your Life</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">17 May</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Hope your like it, or feel free to comment, feedback or rebound !.
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="user-action">
                                                <div class="checkbox-con mr-25">
                                                    <div class="checkbox checkbox-shadow checkbox-sm">
                                                        <input type="checkbox" id="checkboxsmall12">
                                                        <label for="checkboxsmall12"></label>
                                                    </div>
                                                </div>
                                                <span class="favorite">
                                                        <i class="bx bx-star"></i>
                                                    </span>
                                            </div>
                                            <div class="pr-50">
                                                <div class="avatar">
                                                    <img class="rounded-circle" src="/app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <span class="list-group-item-text text-truncate mb-0"> Know Yourself Your Inner Power </span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mail-date">21 Mar</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">
                                                        Hope your like it, or feel free to comment, feedback or rebound !
                                                    </p>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- email user list end -->

                                    <!-- no result when nothing to show on list -->
                                    <div class="no-results">
                                        <i class="bx bx-error-circle font-large-2"></i>
                                        <h5>No Items Found</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Email list Area -->

                        <!-- Detailed Email View -->
                        <div class="email-app-details">
                            <!-- email detail view header -->
                            <div class="email-detail-header">
                                <div class="email-header-left d-flex align-items-center mb-1">
                                        <span class="go-back mr-50">
                                            <span class="fonticon-wrap d-inline">
                                                <i class="livicon-evo" data-options="name: chevron-left.svg; size: 32px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                </i>
                                            </span>
                                        </span>
                                    <h5 class="email-detail-title font-weight-normal mb-0">
                                        Advertising Internet Online
                                        <span class="badge badge-light-danger badge-pill ml-1">PRODUCT</span>
                                    </h5>
                                </div>
                                <div class="email-header-right mb-1 ml-2 pl-1">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap">
                                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap">
                                                        <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-menu">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i> Spam</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash"></i> Trash</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-tag">
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                        Product
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-primary bullet-sm"></span>
                                                        Work
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                        Misc
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                        Family
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                        Design
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="no-of-list d-none d-sm-block ml-1">1-10 of 653</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon email-pagination-prev action-icon">
                                                <i class='bx bx-chevron-left'></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button class="btn btn-icon email-pagination-next action-icon">
                                                <i class='bx bx-chevron-right'></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- email detail view header end-->
                            <div class="email-scroll-area">
                                <!-- email details  -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="collapsible email-detail-head">
                                            <div class="card collapse-header" role="tablist">
                                                <div id="headingCollapse5" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar mr-75">
                                                                <img src="/app-assets/images/portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Elnora Reese</span>
                                                            <span class="d-sm-inline d-none"> &lt;elnora@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Lois Jimenez</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <small class="text-muted mr-50">15 Jul 2019, 10:30</small>
                                                        <span class="favorite">
                                                                <i class="bx bx-star mr-25"></i>
                                                            </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="fisrt-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class='bx bx-dots-vertical-rounded mr-0'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="fisrt-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class='bx bx-share'></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-redo'></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-info-circle'></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                                type and scrambled it to make a type specimen book.
                                                            </p>
                                                            <p>
                                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                                                essentially unchanged.
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="/app-assets/images/icon/psd.png" height="30" alt="psd.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="/app-assets/images/icon/sketch.png" height="30" alt="sketch.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header" role="tablist">
                                                <div id="headingCollapse6" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar mr-75">
                                                                <img src="/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Lois Jimenez </span>
                                                            <span class="d-sm-inline d-none"> &lt;lois_jim@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Elnora Reese</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <i class='bx bx-paperclip mr-50'></i>
                                                        <small class="text-muted mr-50">10 Jul 2019, 10:30</small>
                                                        <span class="favorite">
                                                                <i class="bx bx-star mr-25"></i>
                                                            </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="second-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class='bx bx-dots-vertical-rounded mr-0'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class='bx bx-share'></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-redo'></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-info-circle'></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse6" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                Successful businesses have many things in common, today we’ll look at the big ‘R’of recognition
                                                                and how a digital advertising network may help. Recognition can be illustrated by two individuals
                                                                entering a crowded room at a party. Both walk to the far side of the room, one of them slips
                                                                through the crowd easily and unnoticed as they reach the far side.
                                                            </p>
                                                            <p>
                                                                Gummies sweet tart marzipan lemon drops donut pie. Chocolate cake gingerbread jujubes gingerbread
                                                                chocolate cake tart bear claw apple pie jelly-o.
                                                                Gummies biscuit brownie marshmallow oat cake tootsie roll bear claw topping. Oat cake sesame snaps
                                                                icing cupcake wafer tiramisu jelly-o sugar plum carrot cake
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="/app-assets/images/icon/psd.png" height="30" alt="psd.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="/app-assets/images/icon/sketch.png" height="30" alt="sketch.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header open" role="tablist">
                                                <div id="headingCollapse7" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                    <div class="collapse-title media">
                                                        <div class="pr-1">
                                                            <div class="avatar mr-75">
                                                                <img src="/app-assets/images/portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="30" height="30">
                                                            </div>
                                                        </div>
                                                        <div class="media-body mt-25">
                                                            <span class="text-primary">Elnora Reese</span>
                                                            <span class="d-sm-inline d-none">&lt;elnora@gmail.com&gt;</span>
                                                            <small class="text-muted d-block">to Lois Jimenez</small>
                                                        </div>
                                                    </div>
                                                    <div class="information d-sm-flex d-none align-items-center">
                                                        <small class="text-muted mr-50">05 Jul 2019, 10:30</small>
                                                        <span class="favorite warning">
                                                                <i class="bx bxs-star mr-25"></i>
                                                            </span>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class='bx bx-dots-vertical-rounded mr-0'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                                <a href="#" class="dropdown-item mail-reply">
                                                                    <i class='bx bx-share'></i>
                                                                    Reply
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-redo'></i>
                                                                    Forward
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class='bx bx-info-circle'></i>
                                                                    Report Spam
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                                                    <div class="card-content">
                                                        <div class="card-body py-1">
                                                            <p class="text-bold-500">Greetings!</p>
                                                            <p>
                                                                It is a long established fact that a reader will be distracted by the readable content of a page
                                                                when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content here, content here',making it look like
                                                                readable English.
                                                            </p>
                                                            <p>
                                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                                believable.
                                                            </p>
                                                            <p class="mb-0">Sincerely yours,</p>
                                                            <p class="text-bold-500">Envato Design Team</p>
                                                        </div>
                                                        <div class="card-footer pt-0 border-top">
                                                            <label class="sidebar-label">Attached Files</label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="cursor-pointer pb-25">
                                                                    <img src="/app-assets/images/icon/psd.png" height="30" alt="psd.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                                </li>
                                                                <li class="cursor-pointer">
                                                                    <img src="/app-assets/images/icon/sketch.png" height="30" alt="sketch.png">
                                                                    <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- email details  end-->
                                <div class="row px-2 mb-4">
                                    <!-- quill editor for reply message -->
                                    <div class="col-12 px-0">
                                        <div class="card shadow-none border rounded">
                                            <div class="card-body quill-wrapper">
                                                <span>Reply to Lois Jimenez</span>
                                                <div class="snow-container" id="detail-view-quill">
                                                    <div class="detail-view-editor"></div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="detail-quill-toolbar">
                                                                <span class="ql-formats mr-50">
                                                                    <button class="ql-bold"></button>
                                                                    <button class="ql-italic"></button>
                                                                    <button class="ql-underline"></button>
                                                                    <button class="ql-link"></button>
                                                                    <button class="ql-image"></button>
                                                                </span>
                                                        </div>
                                                        <button class="btn btn-primary send-btn">
                                                            <i class='bx bx-send mr-25'></i>
                                                            <span class="d-none d-sm-inline"> Send</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Detailed Email View -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->
<div class="widget-chat-demo">
    <!-- widget chat demo footer button start -->
    <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
    <!-- widget chat demo footer button ends -->
    <!-- widget chat demo start -->
    <div class="widget-chat widget-chat-demo d-none">
        <div class="card mb-0">
            <div class="card-header border-bottom p-0">
                <div class="media m-75">
                    <a href="JavaScript:void(0);">
                        <div class="avatar mr-75">
                            <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avtar images" width="32" height="32">
                            <span class="avatar-status-online"></span>
                        </div>
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Manger</a></h6>
                        <span class="text-muted font-small-3">Active</span>
                    </div>
                    <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                </div>
            </div>
            <div class="card-body widget-chat-container widget-chat-demo-scroll">
                <div class="chat-content">
                    <div class="badge badge-pill badge-light-secondary my-1">today</div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Как мы можем помочь ? 😄</p>
                                <span class="chat-time">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer border-top p-1">
                <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                    <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                    <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- widget chat demo ends -->

</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->

<!-- END: Page JS-->

</body>
<!-- END: Body-->

