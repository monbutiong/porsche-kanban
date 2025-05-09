<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">  
                <li class="breadcrumb-item active" aria-current="page">Cards</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <button class="btn btn-success" id="addStageBtn">+ Add Stage</button>
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
      height: 650px;
      display: flex;
      flex-direction: column;
    }

    .stage-card .card-body {
      display: flex;
      flex-direction: column;
      flex: 1;
      overflow: hidden;
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
      padding: 8px;
      margin-bottom: 8px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      cursor: move;
      position: relative;
      font-size: 0.8rem;
      height: 70px;
      overflow: hidden;
    }

    .task.long {
      height: 120px; /* double height if long */
    }

    .task-title {
      font-weight: bold;
      font-size: 0.85rem;
      margin: 0;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .task-desc {
      font-size: 0.75rem;
      margin: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 3; /* show max 3 lines */
      -webkit-box-orient: vertical;
    }


    .task .text-muted {
      font-size: 0.75rem;
      margin: 0;
    }

    .ui-state-highlight {
      border: 2px dashed #aaa;
      background: #eee;
      min-height: 40px;
    }

    .delete-stage, .delete-task {
      cursor: pointer;
      color: #dc3545;
      font-size: 0.85rem;
      border: none;
      background: none;
    }

    .delete-task {
      position: absolute;
      top: 5px;
      right: 8px;
    }

    .editable-title {
      border: none;
      background: transparent;
      width: 100%;
      font-weight: bold;
    }

    .editable-title:focus {
      outline: 2px solid #0d6efd;
    }

    textarea.auto-expand {
      overflow: hidden;
      resize: none;
      min-height: 60px;
    }
  </style>


 

<div class="board" id="board"></div>

<!-- Stage Modal -->
<div class="modal fade" id="stageModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="stageForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Stage</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2">
          <label for="stageTitle">Stage Title</label>
          <input type="text" class="form-control" id="stageTitle" required>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">Add Stage</button>
      </div>
    </form>
  </div>
</div>

<!-- Task Modal -->
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
          <textarea class="form-control auto-expand" id="taskDesc" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button id="add_task" class="btn btn-primary" type="submit">Add Task</button>
      </div>
    </form>

    <form id="taskFormView" class="modal-content" style="display: none;">
      <div class="modal-header">
        <h5 id="task_subject" class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="currentStageId"> 
        <div class="mb-2"> 
          <span id="task_description"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="edit_task" type="button">Edit</button>
        <button class="btn btn-warning" data-bs-dismiss="modal" type="button">Close</button>
      </div>
    </form>

  </div>
</div>



    </div>
</div>
