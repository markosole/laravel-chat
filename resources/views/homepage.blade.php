<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        <a href="{{ url('/dashboard/categories') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Categories</a>
                        <a href="{{ url('/dashboard/posts') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Posts</a>
                        <a href="{{ url('/chat') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Chat</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <!-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg> -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="h-16 w-auto text-gray-700 sm:h-20"
                        viewBox="0 0 178 50" style="enable-background:new 0 0 178 50;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#0067F4;}
                        .st1{fill:#FFFFFF;}
                        .st2{fill:#FFFFFF;}
                        .st3{fill:#444D5A;}
                    </style>
                    <g id="Layer_1_copy">
                        <g id="XMLID_15_">
                            <g id="XMLID_14_">
                                <rect x="23.5" y="2.3" class="st0" width="37.1" height="34.3"/>
                            </g>
                            <g id="XMLID_13_">
                                <path id="XMLID_52_" class="st1" d="M3.3,6.5h5.1c2.9,0,4.8,0.1,5.8,0.4C15.7,7.3,17,8,17.9,9.1c1,1.1,1.4,2.6,1.4,4.2
                                    c0,1.4-0.3,2.6-1,3.7s-1.6,1.9-2.8,2.4s-2.9,0.8-5.1,0.8l9.2,11.9h-3.2L7.3,20.3H5.8v11.9H3.3V6.5z M5.8,9v8.7h4.4
                                    c1.7,0,3-0.2,3.8-0.5s1.5-0.8,1.9-1.6c0.4-0.8,0.7-1.5,0.7-2.4s-0.2-1.6-0.7-2.4c-0.5-0.7-1.1-1.2-1.8-1.5
                                    c-0.8-0.3-2-0.5-3.8-0.5H5.8V9z"/>
                            </g>
                            <g id="XMLID_8_">
                                <path id="XMLID_50_" class="st2" d="M41.8,32.3h-14v-4.8H37v-6.8h-9.2V16H37v-4.6h-9.2V6.6h14V32.3z"/>
                            </g>
                            <g id="XMLID_7_">
                                <path id="XMLID_48_" class="st2" d="M43.6,6.6h12.8v4.8h-7.9V16h7.9v4.7h-7.9v11.6h-4.9C43.6,32.3,43.6,6.6,43.6,6.6z"/>
                            </g>
                            <g id="XMLID_3_">
                                <path id="XMLID_40_" class="st1" d="M65.8,6.1h2.6v23.2h9.9v2.5H65.8V6.1z"/>
                                <path id="XMLID_42_" class="st1" d="M82.3,6.1H97v2.5H84.9v8.1H97v2.5H84.9v10.1H97v2.5H82.3V6.1z"/>
                                <path id="XMLID_44_" class="st1" d="M125.4,10.9l-2,1.6c-1.1-1.5-2.5-2.6-4-3.3S116.1,8,114.2,8c-2.1,0-4,0.5-5.7,1.5
                                    s-3.1,2.3-4.1,4S103,17,103,19.1c0,3.1,1.1,5.8,3.2,7.8c2.2,2.1,4.9,3.1,8.1,3.1c3.6,0,6.6-1.4,9-4.2l2,1.5
                                    c-1.3,1.6-2.9,2.9-4.8,3.8c-1.9,0.9-4.1,1.3-6.4,1.3c-4.5,0-8-1.5-10.6-4.5c-2.2-2.5-3.3-5.6-3.3-9.2c0-3.8,1.3-6.9,4-9.5
                                    c2.6-2.6,5.9-3.9,9.9-3.9c2.4,0,4.6,0.5,6.5,1.4S124.2,9.2,125.4,10.9z"/>
                                <path id="XMLID_46_" class="st1" d="M128,8.6V6.1h14.1v2.5h-5.7v23.2h-2.6V8.6H128z"/>
                            </g>
                            <g id="XMLID_1_">
                                <path id="XMLID_11_" class="st3" d="M78.8,38.5h1.8v10.1h-1.8v-0.8c-0.4,0.3-0.7,0.6-1.1,0.7c-0.4,0.2-0.7,0.2-1.2,0.2
                                    c-0.9,0-1.8-0.4-2.4-1.1s-1-1.6-1-2.7c0-1.1,0.3-2.1,1-2.8s1.5-1.1,2.4-1.1c0.4,0,0.8,0.1,1.2,0.2c0.4,0.2,0.7,0.4,1.1,0.7V38.5z
                                    M76.9,42.9c-0.6,0-1,0.2-1.4,0.6s-0.6,0.9-0.6,1.5s0.2,1.1,0.6,1.6s0.9,0.6,1.4,0.6c0.6,0,1.1-0.2,1.4-0.6s0.6-0.9,0.6-1.6
                                    c0-0.6-0.2-1.1-0.6-1.5S77.5,42.9,76.9,42.9z"/>
                                <path id="XMLID_19_" class="st3" d="M89.8,45.5H84c0.1,0.5,0.3,0.9,0.7,1.2c0.4,0.3,0.8,0.5,1.4,0.5c0.7,0,1.3-0.2,1.8-0.7
                                    l1.5,0.7c-0.4,0.5-0.8,0.9-1.4,1.2s-1.2,0.4-1.9,0.4c-1.1,0-2.1-0.4-2.8-1.1s-1.1-1.6-1.1-2.7c0-1.1,0.4-2,1.1-2.8
                                    c0.7-0.7,1.6-1.1,2.7-1.1c1.2,0,2.1,0.4,2.8,1.1c0.7,0.7,1.1,1.7,1.1,2.9L89.8,45.5z M88,44.1c-0.1-0.4-0.4-0.7-0.7-1
                                    c-0.4-0.3-0.8-0.4-1.2-0.4c-0.5,0-1,0.1-1.3,0.4c-0.2,0.2-0.5,0.5-0.7,0.9L88,44.1L88,44.1z"/>
                                <path id="XMLID_23_" class="st3" d="M90.5,41.4h1.9l1.8,4.3l1.8-4.3h1.9l-3.1,7.3h-1.2L90.5,41.4z"/>
                                <path id="XMLID_25_" class="st0" d="M108.2,40.1l-1.4,1.2c-0.5-0.7-1-1-1.5-1c-0.2,0-0.4,0.1-0.6,0.2c-0.2,0.1-0.2,0.3-0.2,0.4
                                    c0,0.2,0.1,0.3,0.2,0.5c0.2,0.2,0.6,0.6,1.4,1.3c0.7,0.6,1.2,1,1.3,1.1c0.4,0.4,0.7,0.8,0.8,1.1c0.2,0.4,0.2,0.7,0.2,1.2
                                    c0,0.8-0.3,1.5-0.8,2c-0.6,0.5-1.3,0.8-2.2,0.8c-0.7,0-1.3-0.2-1.8-0.5s-1-0.9-1.3-1.6l1.6-1c0.5,0.9,1,1.3,1.6,1.3
                                    c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.2-0.1-0.4-0.2-0.7c-0.2-0.2-0.5-0.6-1.1-1c-1.1-0.9-1.8-1.6-2.1-2
                                    c-0.3-0.5-0.5-1-0.5-1.4c0-0.7,0.3-1.3,0.8-1.8s1.2-0.7,1.9-0.7c0.5,0,1,0.1,1.4,0.3C107.2,39.1,107.7,39.5,108.2,40.1z"/>
                                <path id="XMLID_27_" class="st0" d="M110.2,38.7h1.8v2.7h1.1V43H112v5.7h-1.8V43h-0.9v-1.6h0.9V38.7z"/>
                                <path id="XMLID_29_" class="st0" d="M114.1,41.4h1.9v3.5c0,0.7,0,1.2,0.1,1.4c0.1,0.3,0.2,0.5,0.5,0.6c0.2,0.1,0.5,0.2,0.8,0.2
                                    s0.6-0.1,0.8-0.2s0.4-0.4,0.5-0.6c0.1-0.2,0.1-0.7,0.1-1.3v-3.6h1.8v3.1c0,1.3-0.1,2.1-0.3,2.6c-0.2,0.6-0.6,1-1.1,1.3
                                    s-1.1,0.5-1.8,0.5c-0.8,0-1.4-0.2-1.9-0.5c-0.5-0.4-0.8-0.9-1-1.5c-0.1-0.4-0.2-1.2-0.2-2.4v-3.1H114.1z"/>
                                <path id="XMLID_31_" class="st0" d="M127.8,38.5h1.8v10.1h-1.8v-0.8c-0.4,0.3-0.7,0.6-1.1,0.7c-0.4,0.2-0.7,0.2-1.2,0.2
                                    c-0.9,0-1.8-0.4-2.4-1.1c-0.7-0.7-1-1.6-1-2.7c0-1.1,0.3-2.1,1-2.8s1.5-1.1,2.4-1.1c0.4,0,0.8,0.1,1.2,0.2
                                    c0.4,0.2,0.7,0.4,1.1,0.7V38.5z M125.8,42.9c-0.6,0-1,0.2-1.4,0.6c-0.4,0.4-0.6,0.9-0.6,1.5s0.2,1.1,0.6,1.6
                                    c0.4,0.4,0.9,0.6,1.4,0.6c0.6,0,1.1-0.2,1.4-0.6s0.6-0.9,0.6-1.6c0-0.6-0.2-1.1-0.6-1.5S126.4,42.9,125.8,42.9z"/>
                                <path id="XMLID_34_" class="st0" d="M132.2,38.4c0.3,0,0.6,0.1,0.8,0.3s0.3,0.5,0.3,0.8s-0.1,0.6-0.3,0.8s-0.5,0.3-0.8,0.3
                                    s-0.6-0.1-0.8-0.4c-0.2-0.2-0.3-0.5-0.3-0.9c0-0.3,0.1-0.6,0.3-0.8S131.8,38.4,132.2,38.4z M131.2,41.4h1.8v7.3h-1.8V41.4z"/>
                                <path id="XMLID_37_" class="st0" d="M138.2,41.2c0.7,0,1.3,0.2,1.9,0.5c0.6,0.3,1.1,0.8,1.4,1.4c0.3,0.6,0.5,1.2,0.5,1.9
                                    s-0.2,1.3-0.5,1.9c-0.3,0.6-0.8,1.1-1.4,1.4c-0.6,0.3-1.2,0.5-2,0.5c-1,0-1.9-0.4-2.7-1.1c-0.7-0.7-1.1-1.6-1.1-2.7
                                    c0-1.1,0.4-2.1,1.3-2.9C136.4,41.5,137.2,41.2,138.2,41.2z M138.2,42.9c-0.6,0-1,0.2-1.4,0.6c-0.4,0.4-0.6,0.9-0.6,1.5
                                    s0.2,1.1,0.6,1.5c0.4,0.4,0.8,0.6,1.4,0.6c0.6,0,1.1-0.2,1.4-0.6c0.4-0.4,0.6-0.9,0.6-1.5s-0.2-1.1-0.6-1.5
                                    S138.8,42.9,138.2,42.9z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">MARKO123 </a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    MARKO123 aaa Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <!-- <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://reflect.ba/contact" class="ml-1 underline">
                                Sontact
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
