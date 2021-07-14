<?php


$this->title = 'About';


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






$this->registerJsFile('/app-assets/js/scripts/pages/app-file-manager.js',
    ['depends' => ['frontend\assets\AppAsset'
        , 'frontend\assets\AppAsset']
    ]);





$this->registerCssFile("@web/app-assets/css/pages/app-file-manager.css",
    ['rel' => 'stylesheet',

        'depends'=> ['frontend\assets\AppAsset']]);



?>


?>








<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar file-manager-application navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

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
            <li class=" nav-item"><a href="/site/email"><i class="menu-livicon" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class="nav-item"><a href="/site/chat"><i class="menu-livicon" data-icon="comments"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="/site/todo"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="/site/calendar"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class=" nav-item"><a href="/site/kanban"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
            </li>

            <li class="active nav-item"><a href="/site/file_manager"><i class="menu-livicon" data-icon="save"></i><span class="menu-title" data-i18n="File Manager">File Manager</span></a>
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
                <div class="app-file-sidebar sidebar-content d-flex">
                    <!-- App File sidebar - Left section Starts -->
                    <div class="app-file-sidebar-left">
                        <!-- sidebar close icon starts -->
                        <span class="app-file-sidebar-close"><i class="bx bx-x"></i></span>
                        <!-- sidebar close icon ends -->
                        <div class="form-group add-new-file text-center">
                            <!-- Add File Button -->
                            <label for="getFile" class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize"><i class="bx bx-plus"></i>Add File</label>
                            <input type="file" class="d-none" id="getFile">
                        </div>
                        <div class="app-file-sidebar-content">
                            <!-- App File Left Sidebar - Drive Content Starts -->
                            <label class="app-file-label">My Drive</label>
                            <div class="list-group list-group-messages my-50">
                                <a href="#" class="list-group-item list-group-item-action pt-0 active">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    All Files
                                    <span class="badge badge-light-danger badge-pill badge-round float-right mt-50">2</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: morph-desktop-smartphone.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    My Devices
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: clock.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div> Recents
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: morph-star.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Important
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Deleted Files
                                </a>
                            </div>
                            <!-- App File Left Sidebar - Drive Content Ends -->

                            <!-- App File Left Sidebar - Labels Content Starts -->
                            <label class="app-file-label">Labels</label>
                            <div class="list-group list-group-labels my-50">
                                <a href="#" class="list-group-item list-group-item-action pt-0">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: morph-doc.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Documents
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: image.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Images
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: camcoder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div> Videos
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: music.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Audio
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: servers.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;"></i>
                                    </div>
                                    Zip Files
                                </a>
                            </div>
                            <!-- App File Left Sidebar - Labels Content Ends -->

                            <!-- App File Left Sidebar - Storage Content Starts -->
                            <label class="app-file-label mb-75">Storage Status</label>
                            <div class="d-flex mb-1">
                                <div class="fonticon-wrap mr-1">
                                    <i class="livicon-evo cursor-pointer" data-options="name: save.svg; size: 30px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                    </i>
                                </div>
                                <div class="file-manager-progress">
                                    <span class="text-muted font-size-small">19.5GB used of 25GB</span>
                                    <div class="progress progress-bar-primary progress-sm mb-0">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%;"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="font-weight-bold">Upgrade Storage</a>
                            <!-- App File Left Sidebar - Storage Content Ends -->
                        </div>
                    </div>
                </div>
                <!-- App File sidebar - Right section Starts -->
                <div class="app-file-sidebar-info">
                    <div class="card shadow-none mb-0 p-0 pb-1">
                        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                            <h6 class="mb-0">Document.pdf</h6>
                            <div class="app-file-action-icons d-flex align-items-center">
                                <i class="bx bx-trash cursor-pointer mr-50"></i>
                                <i class="bx bx-x close-icon cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item mr-1 pt-50 pr-1 border-right">
                                    <a class=" nav-link active d-flex align-items-center" id="details-tab" data-toggle="tab" href="#details" aria-controls="details" role="tab" aria-selected="true">
                                        <i class="bx bx-file mr-50"></i>Details</a>
                                </li>
                                <li class="nav-item pt-50 ">
                                    <a class=" nav-link d-flex align-items-center" id="activity-tab" data-toggle="tab" href="#activity" aria-controls="activity" role="tab" aria-selected="false">
                                        <i class="bx bx-pulse mr-50"></i>Activity</a>
                                </li>
                            </ul>
                            <div class="tab-content pl-0">
                                <div class="tab-pane active" id="details" aria-labelledby="details-tab" role="tabpanel">
                                    <div class="border-bottom d-flex align-items-center flex-column pb-1">
                                        <img src="/app-assets/images/icon/pdf.png" alt="PDF" height="42" width="35" class="my-1">
                                        <p class="mt-2">15.3mb</p>
                                    </div>
                                    <div class="card-body pt-2">
                                        <label class="app-file-label">Setting</label>
                                        <div class="d-flex justify-content-between align-items-center mt-75">
                                            <p>File Sharing</p>
                                            <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchGlow1">
                                                <label class="custom-control-label" for="customSwitchGlow1"></label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Synchronization</p>
                                            <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchGlow2" checked>
                                                <label class="custom-control-label" for="customSwitchGlow2"></label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Backup</p>
                                            <div class="custom-control custom-switch custom-switch-primary custom-switch-glow custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchGlow3">
                                                <label class="custom-control-label" for="customSwitchGlow3"></label>
                                            </div>
                                        </div>

                                        <label class="app-file-label">Info</label>
                                        <div class="d-flex justify-content-between align-items-center mt-75">
                                            <p>Type</p>
                                            <p class="font-weight-bold">PDF</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Size</p>
                                            <p class="font-weight-bold">15.6mb</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Location</p>
                                            <p class="font-weight-bold">Files > Documents</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Owner</p>
                                            <p class="font-weight-bold">Elnora Reese</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Modified</p>
                                            <p class="font-weight-bold">September 4 2019</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Opened</p>
                                            <p class="font-weight-bold">July 8, 2019</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Created</p>
                                            <p class="font-weight-bold">July 1, 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane pl-0" id="activity" aria-labelledby="activity-tab" role="tabpanel">
                                    <div class="card-body">
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-success active">
                                                <div class="timeline-time">Today</div>
                                                <h6 class="timeline-title">You added an item to</h6>
                                                <p class="timeline-text">You added an item</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/psd.png" alt="PSD" height="30" width="25" class="mr-50">Mockup.psd
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-info active">
                                                <div class="timeline-time">10 min ago</div>
                                                <h6 class="timeline-title">You shared 2 times</h6>
                                                <p class="timeline-text">Emily Bennett edited an item</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/sketch.png" alt="Sketch" height="30" width="25" class="mr-50">Template_Design.sketch
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-danger active">
                                                <div class="timeline-time">Mon 10:20 PM</div>
                                                <h6 class="timeline-title">You edited an item</h6>
                                                <p class="timeline-text">You edited an item</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Information.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-primary active">
                                                <div class="timeline-time">Jul 13 2019</div>
                                                <h6 class="timeline-title">You edited an item</h6>
                                                <p class="timeline-text">John Keller edited an item</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Documentation.doc
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-warning">
                                                <div class="timeline-time">Apr 18 2019</div>
                                                <h6 class="timeline-title">You added an item to</h6>
                                                <p class="timeline-text">You edited an item</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-50">Resume.pdf
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- App File sidebar - Right section Ends -->

            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- File Manager app overlay -->
                    <div class="app-file-overlay"></div>
                    <div class="app-file-area">
                        <!-- File App Content Area -->
                        <!-- App File Header Starts -->
                        <div class="app-file-header">
                            <!-- Header search bar starts -->
                            <div class="app-file-header-search flex-grow-1">
                                <div class="sidebar-toggle d-block d-lg-none">
                                    <i class="bx bx-menu"></i>
                                </div>
                                <fieldset class="form-group position-relative has-icon-left m-0">
                                    <input type="text" class="form-control border-0 shadow-none" id="email-search" placeholder="Search email">
                                    <div class="form-control-position">
                                        <i class="bx bx-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                            <!-- Header search bar Ends -->
                            <!-- Header Icons Starts -->
                            <div class="app-file-header-icons">
                                <div class="fonticon-wrap d-inline mx-sm-1 align-middle">
                                    <i class="livicon-evo cursor-pointer" data-options="name: user.svg; size: 24px; style: lines; strokeColor:#596778; duration:0.85;"></i>
                                </div>
                                <div class="fonticon-wrap d-inline mr-sm-50 align-middle">
                                    <i class="livicon-evo cursor-pointer" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#596778; duration:0.85;"></i>
                                </div>
                                <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i>
                            </div>
                            <!-- Header Icons Ends -->
                        </div>
                        <!-- App File Header Ends -->

                        <!-- App File Content Starts -->
                        <div class="app-file-content p-2">
                            <h5>All Files</h5>

                            <!-- App File - Recent Accessed Files Section Starts -->
                            <label class="app-file-label">Recently Accessed Files</label>
                            <div class="row app-file-recent-access">
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-recent-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Felecia Resume.pdf</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">12.85kb</div>
                                                    <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-content-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Logo_design.psd</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">15.60mb</div>
                                                    <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-content-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Music_Two.xyz</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">1.2gb</div>
                                                    <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/sketch.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-content-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Application.sketch</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">92.83kb</div>
                                                    <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- App File - Recent Accessed Files Section Ends -->

                            <!-- App File - Folder Section Starts -->
                            <label class="app-file-label">Folder</label>
                            <div class="row app-file-folder">
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Project</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">2 files, 14.05mb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Video</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">130 files, 890mb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Music</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">15 files, 58mb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Documents</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">12 files, 9.5mb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Application Design</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">1 files, 36.25kb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="card-body px-75 py-50">
                                                <div class="app-file-folder-content d-flex align-items-center">
                                                    <div class="app-file-folder-logo mr-75">
                                                        <i class="bx bx-folder font-medium-4"></i>
                                                    </div>
                                                    <div class="app-file-folder-details">
                                                        <div class="app-file-folder-name font-size-small font-weight-bold">Photos</div>
                                                        <div class="app-file-folder-size font-size-small text-muted">3.6k files, 348mb</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- App File - Folder Section Ends -->

                            <!-- App File - Files Section Starts -->
                            <label class="app-file-label">Files</label>
                            <div class="row app-file-files">
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Banner.jpg</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">13kb</div>
                                                    <div class="app-file-type font-size-small text-muted">Image File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Management.docx</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">15.60mb</div>
                                                    <div class="app-file-type font-size-small text-muted">Word Document</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Thunder.mp3</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">3.4mb</div>
                                                    <div class="app-file-type font-size-small text-muted">Mp3 File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/sketch.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Dashboard.sketch</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">108kb</div>
                                                    <div class="app-file-type font-size-small text-muted">Sketch File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/psd.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Logo.psd</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">10.6kb</div>
                                                    <div class="app-file-type font-size-small text-muted">Photoshop File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/sketch.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Logo_Design.sketch</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">256.5kb</div>
                                                    <div class="app-file-type font-size-small text-muted">Sketch File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/doc.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Bootstrap.xyz</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">0.0kb</div>
                                                    <div class="app-file-type font-size-small text-muted">Unknown File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card border shadow-none mb-1 app-file-info">
                                        <div class="card-content">
                                            <div class="app-file-content-logo card-img-top">
                                                <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                                                <img class="d-block mx-auto" src="/app-assets/images/icon/pdf.png" height="38" width="30" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-50">
                                                <div class="app-file-details">
                                                    <div class="app-file-name font-size-small font-weight-bold">Read_Me.pdf</div>
                                                    <div class="app-file-size font-size-small text-muted mb-25">10.5kb</div>
                                                    <div class="app-file-type font-size-small text-muted">PDF File</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- App File - Files Section Ends -->
                        </div>
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
                            <img src="/app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                            <span class="avatar-status-online"></span>
                        </div>
                    </a>
                    <div class="media-body">
                        <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
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
                                <p>How can we help? 😄</p>
                                <span class="chat-time">7:45 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat chat-left">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Hey John, I am looking for the best admin template.</p>
                                <p>Could you please help me to find it out? 🤔</p>
                                <span class="chat-time">7:50 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                <span class="chat-time">8:01 AM</span>
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


</body>
<!-- END: Body-->
