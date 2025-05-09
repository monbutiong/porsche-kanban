<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Cards</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="#">Veltrix</a></li>
                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cards</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-cog me-2"></i> Settings
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">

    <div class="col-md-12 col-lg-12 col-xl-12">

        <style>
            .board {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                gap: 15px;
            }

            .stage-card {
                width: 300px;
                flex-shrink: 0;
                height: 650px; /* total height of the card */
                display: flex;
                flex-direction: column;
            }

            .stage-card .card-body {
                display: flex;
                flex-direction: column;
                flex: 1;
                overflow: hidden; /* prevent card overflow */
                padding: 10px;
            }

            .card-title {
                flex-shrink: 0;
                margin-bottom: 10px;
            }

            .task-list {
                flex-grow: 1;
                overflow-y: auto;
                overflow-x: hidden;
                padding-right: 6px;
            }


            .task {
                background: #f8f9fa;
                padding: 8px; /* reduced padding */
                margin-bottom: 8px; /* tighter spacing between tasks */
                border: 1px solid #dee2e6;
                border-radius: 5px;
                cursor: move;
                height: auto; /* let height grow with content */
                display: flex;
                flex-direction: column;
                gap: 4px; /* small gap between title and desc */
            }

            .task-title {
                font-weight: bold;
                margin: 0; /* remove any default margin */
                font-size: 0.95rem; /* slightly smaller if needed */
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .task .text-muted {
                font-size: 0.8rem; /* slightly smaller text */
                margin: 0; /* remove margin */
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }


            .task .text-muted {
                font-size: 0.875rem;
                color: #6c757d;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }


            .ui-state-highlight {
                border: 2px dashed #aaa;
                background: #eee;
                min-height: 40px;
            }
        </style>




<div class="d-flex justify-content-between mb-3">

    <button class="btn btn-success" id="addStageBtn">+ Add Stage</button>
</div>

<div class="board" id="board"></div>

<!-- Add Task Modal -->
<div class="modal fade" id="taskModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="taskForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="currentStageId">
        <div class="mb-2">
          <label>Subject</label>
          <input type="text" class="form-control" id="taskSubject" required>
        </div>
        <div class="mb-2">
          <label>Description</label>
          <textarea class="form-control" id="taskDesc" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Add Task</button>
      </div>
    </form>
  </div>
</div>



    </div>
</div>
