<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>{{ $page_title }} | Porsche Kanban</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/assets') }}/images/ico.ico">

        @if(in_array('datatable',@$plugins ?? []))
        <!-- DataTables -->
        <link href="{{ asset('template/assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('template/assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        @endif

        <!-- Bootstrap Css -->
        <link href="{{ asset('template/assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">

        <link href="{{ asset('template/assets') }}/css/jquery-ui.css" rel="stylesheet">

        <!-- Icons Css -->
        <link href="{{ asset('template/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('template/assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('includes.header')

            @include('includes.vertical-menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @include('pages.'.$page_include)
                    </div>
                </div>
                <!-- End Page-content -->

                @include('includes.footer')


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('template/assets') }}/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('template/assets') }}/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('template/assets') }}/css/bootstrap-dark.min.css"
                            data-appStyle="{{ asset('template/assets') }}/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('template/assets') }}/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('template/assets') }}/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
                    <div class="d-grid">
                        <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('template/assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('template/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('template/assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('template/assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('template/assets') }}/libs/node-waves/waves.min.js"></script>

        @if(in_array('datatable',@$plugins ?? []))
         <!-- Required datatable js -->
         <script src="{{ asset('template/assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="{{ asset('template/assets') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/jszip/jszip.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/pdfmake/build/pdfmake.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/pdfmake/build/vfs_fonts.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="{{ asset('template/assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
         <script src="{{ asset('template/assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        @endif

        <!-- for Kanban js -->
        <script src="{{ asset('template/assets') }}/js/pages/jquery-ui.min.js"></script>
         <!-- Datatable init js -->
         <script src="{{ asset('template/assets') }}/js/pages/datatables.init.js"></script>

        <script>
            const bootstrapCSS = "{{ asset('template/assets/css/bootstrap.min.css') }}";
            const appCSS = "{{ asset('template/assets/css/app.min.css') }}";
        </script>

        <script src="{{ asset('template/assets') }}/js/app.js?2"></script>

        <script>
            let boardData = JSON.parse(localStorage.getItem('trelloBoard')) || [];
            let editingTask = null;

            function saveBoard() {
                localStorage.setItem('trelloBoard', JSON.stringify(boardData));
            }

            function createStage(stage, index) {
                const stageId = `stage-${index}`;
                const html = `
                    <div class="card stage-card" data-stage-index="${index}">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between align-items-center">
                                <span class="stage-title">${stage.title}</span>
                                <button class="btn btn-sm btn-outline-secondary addTaskBtn" data-stage="${index}">+</button>
                            </h5>
                            <div class="task-list connectedSortable" id="${stageId}"></div>
                        </div>
                    </div>`;
                $('#board').append(html);
                stage.tasks.forEach((task, taskIndex) => addTaskToDOM(index, task.subject, task.desc, taskIndex));
                makeSortable();
            }

            function addTaskToDOM(stageIndex, subject, desc, taskIndex) {
                const task = `<div class="task" data-stage-index="${stageIndex}" data-task-index="${taskIndex}">
                    <div class="task-title">${subject}</div>
                    <div class="text-muted">${desc}</div>
                </div>`;
                $(`#stage-${stageIndex}`).append(task);
            }

            function makeSortable() {
                $(".connectedSortable").sortable({
                    connectWith: ".connectedSortable",
                    placeholder: "ui-state-highlight",
                    stop: updateTaskOrder
                }).disableSelection();

                $("#board").sortable({
                    items: ".stage-card",
                    placeholder: "ui-state-highlight",
                    stop: function () {
                        const newOrder = [];
                        $('.stage-card').each(function () {
                            const index = $(this).data('stage-index');
                            newOrder.push(boardData[index]);
                        });
                        boardData = newOrder;
                        saveBoard();
                        renderBoard();
                    }
                });
            }

            function updateTaskOrder() {
                boardData.forEach((stage, i) => {
                    const tasks = [];
                    $(`#stage-${i} .task`).each(function () {
                        const subject = $(this).find('.task-title').text();
                        const desc = $(this).find('.text-muted').text();
                        tasks.push({ subject, desc });
                    });
                    stage.tasks = tasks;
                });
                saveBoard();
            }

            function renderBoard() {
                $('#board').empty();
                boardData.forEach((stage, i) => createStage(stage, i));
            }

            $(document).ready(function () {
                renderBoard();

                $('#addStageBtn').click(() => {
                    const title = prompt('Enter Stage Title');
                    if (title) {
                        boardData.push({ title, tasks: [] });
                        saveBoard();
                        renderBoard();
                    }
                });

                $(document).on('click', '.addTaskBtn', function () {
                    editingTask = null;
                    const stageIndex = $(this).data('stage');
                    $('#currentStageId').val(stageIndex);
                    $('#taskSubject').val('');
                    $('#taskDesc').val('');
                    new bootstrap.Modal('#taskModal').show();
                });

                $(document).on('click', '.task', function () {
                    const stageIndex = $(this).data('stage-index');
                    const taskIndex = $(this).data('task-index');
                    const task = boardData[stageIndex].tasks[taskIndex];
                    editingTask = { stageIndex, taskIndex };
                    $('#currentStageId').val(stageIndex);
                    $('#taskSubject').val(task.subject);
                    $('#taskDesc').val(task.desc);
                    new bootstrap.Modal('#taskModal').show();
                });

                $('#taskForm').submit(function (e) {
                    e.preventDefault();
                    const subject = $('#taskSubject').val();
                    const desc = $('#taskDesc').val();
                    const stageIndex = +$('#currentStageId').val();

                    if (editingTask) {
                        boardData[editingTask.stageIndex].tasks[editingTask.taskIndex] = { subject, desc };
                    } else {
                        boardData[stageIndex].tasks.push({ subject, desc });
                    }

                    saveBoard();
                    renderBoard();
                    bootstrap.Modal.getInstance(document.getElementById('taskModal')).hide();
                });
            });
            </script>
    </body>
</html>
