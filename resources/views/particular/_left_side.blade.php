<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item " data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" >
                <a class="nav-item-hold" href="{{route('product.index')}}">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Ürünler</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" >
                <a class="nav-item-hold" href="{{route('stock.index')}}">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Stok</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="apps">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Raporlar</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="forms">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Aboneler</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item ">
                <a class="nav-item-hold" href="datatables/basic-tables.html">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Paketler</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="sessions">
                <a class="nav-item-hold" href="test.html">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Personel</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="others">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Double-Tap"></i>
                    <span class="nav-text">Log Kayıtları</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="http://www.semihduman.com.tr" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Destek</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    {{--<div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item ">
                <a class="" href="dashboard/dashboard1.html">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Version 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="dashboard/dashboard2.html" class="">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Version 2</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="dashboard/dashboard3.html" >
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">Version 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="dashboard/dashboard4.html">
                    <i class="nav-icon i-Clock"></i>
                    <span class="item-name">Version 4</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="forms">
            <li class="nav-item">
                <a class="" href="forms/forms-basic.html">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">Basic Elements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/form-layouts.html">
                    <i class="nav-icon i-Split-Vertical"></i>
                    <span class="item-name">Form Layouts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/form-input-group.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">Input Groups</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/form-validation.html">
                    <i class="nav-icon i-Close-Window"></i>
                    <span class="item-name">Form Validation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/smartWizard.html">
                    <i class="nav-icon i-Width-Window"></i>
                    <span class="item-name">Smart Wizard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/tagInput.html">
                    <i class="nav-icon i-Tag-2"></i>
                    <span class="item-name">Tag Input</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/form-editor.html">
                    <i class="nav-icon i-Pen-2"></i>
                    <span class="item-name">Rich Editor</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="apps">
            <li class="nav-item">
                <a class="" href="apps/invoice.html">
                    <i class="nav-icon i-Add-File"></i>
                    <span class="item-name">Invoice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/inbox.html">
                    <i class="nav-icon i-Email"></i>
                    <span class="item-name">Inbox</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/chat.html">
                    <i class="nav-icon i-Speach-Bubble-3"></i>
                    <span class="item-name">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/calendar.html">
                    <i class="nav-icon i-Calendar-4"></i>
                    <span class="item-name">Calendar</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="extrakits">
            <li class="nav-item">
                <a class="" href="extrakits/imageCroper.html">
                    <i class="nav-icon i-Crop-2"></i>
                    <span class="item-name">Image Cropper</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/loader.html">
                    <i class="nav-icon i-Loading-3"></i>
                    <span class="item-name">Loaders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/laddaButton.html">
                    <i class="nav-icon i-Loading-2"></i>
                    <span class="item-name">Ladda Buttons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/toastr.html">
                    <i class="nav-icon i-Bell"></i>
                    <span class="item-name">Toastr</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/sweetAlert.html">
                    <i class="nav-icon i-Approved-Window"></i>
                    <span class="item-name">Sweet Alerts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/tour.html">
                    <i class="nav-icon i-Plane"></i>
                    <span class="item-name">User Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/upload.html">
                    <i class="nav-icon i-Data-Upload"></i>
                    <span class="item-name">Upload</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="uikits">
            <li class="nav-item">
                <a class="" href="uikits/alerts.html">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Alerts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/accordion.html">
                    <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                    <span class="item-name">Accordion</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/badges.html">
                    <i class="nav-icon i-Medal-2"></i>
                    <span class="item-name">Badges</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/buttons.html">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Buttons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/cards.html">
                    <i class="nav-icon i-Line-Chart-2"></i>
                    <span class="item-name">Cards</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/cards-metrics.html">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="item-name">Card Metrics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/carousel.html">
                    <i class="nav-icon i-Video-Photographer"></i>
                    <span class="item-name">Carousels</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/lists.html">
                    <i class="nav-icon i-Belt-3"></i>
                    <span class="item-name">Lists</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/pagination.html">
                    <i class="nav-icon i-Arrow-Next"></i>
                    <span class="item-name">Paginations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/popover.html">
                    <i class="nav-icon i-Speach-Bubble-2"></i>
                    <span class="item-name">Popover</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/progressbar.html">
                    <i class="nav-icon i-Loading"></i>
                    <span class="item-name">Progressbar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tables.html">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="item-name">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tabs.html">
                    <i class="nav-icon i-New-Tab"></i>
                    <span class="item-name">Tabs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tooltip.html">
                    <i class="nav-icon i-Speach-Bubble-8"></i>
                    <span class="item-name">Tooltip</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="uikits/modals.html">
                    <i class="nav-icon i-Duplicate-Window"></i>
                    <span class="item-name">Modals</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/NoUislider.html">
                    <i class="nav-icon i-Width-Window"></i>
                    <span class="item-name">Sliders</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="sessions/signIn.html">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">Sign in</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sessions/signUp.html">
                    <i class="nav-icon i-Add-User"></i>
                    <span class="item-name">Sign up</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sessions/forgot.html">
                    <i class="nav-icon i-Find-User"></i>
                    <span class="item-name">Forgot</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="others">
            <li class="nav-item">
                <a href="others/notFound.html">
                    <i class="nav-icon i-Error-404-Window"></i>
                    <span class="item-name">Not Found</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="others/user-profile.html">
                    <i class="nav-icon i-Male"></i>
                    <span class="item-name">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="others/starter.html" class="open">
                    <i class="nav-icon i-File-Horizontal"></i>
                    <span class="item-name">Blank Page</span>
                </a>
            </li>
        </ul>
    </div>--}}
    <div class="sidebar-overlay"></div>
</div>
