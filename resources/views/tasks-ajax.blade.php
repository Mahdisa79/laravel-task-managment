<div class="col-md-8">
  <div class="card-hover-shadow-2x mb-3 card">
    <div class="card-header-tab card-header">
      <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
          class="fa fa-tasks"></i>&nbsp;لیست تسک ها</div>
      
    </div>
    @auth
    <div class="scroll-area-sm">
      <perfect-scrollbar class="ps-show-limits">
        <div style="position: static;" class="ps ps--active-y">
          <div class="ps-content">
            <ul class=" list-group list-group-flush" style="padding: 0px">
              @foreach ($tasks as $task)
              <li class="list-group-item">
                {{-- <div class="todo-indicator bg-warning"></div> --}}
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    {{-- <div class="widget-content-left mr-2">
                      <div class="custom-checkbox custom-control">
                        <input class="custom-control-input"
                          id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label"
                          for="exampleCustomCheckbox12">&nbsp;</label>
                        </div>
                    </div> --}}
                    <div class="widget-content-right">
                      <div class="widget-heading" style="text-align:right">{{ $task->title }}
                        @if ($task->status == 0 )
                        <div class="badge badge-warning ml-2">در حال انجام</div>
                        @elseif ($task->status == 1)
                        <div class="badge badge-success ml-2">انجام شده</div>
                        @else
                        <div class="badge badge-danger ml-2">کنسل شده</div>
                        @endif
                      </div>
                      <div class="widget-subheading" style="text-align: right"><i>{{ jalaliDate($task->created_at) }}</i></div>
                    </div>
                  <div class="widget-content-left">
                    @if($task->status != 0)
                    <button class="border-0 btn-transition btn btn-outline-warning" onclick="changeStatus({{$task->id}},0)">
                      <i class="fa fa-refresh"></i></button>
                     
                      <form class="d-inline" id="deleteTask" action="{{ route('deleteTask', $task->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="border-0 btn-transition btn btn-outline-danger delete" type="submit">
                     {{-- <i class="fa fa-trash"></i> --}}
                     <i class="fa fa-trash"></i>
                    </button>
                      </form>
                    @else

                    <button class="border-0 btn-transition btn btn-outline-success" onclick="changeStatus({{$task->id}},1)">
                      <i class="fa fa-check"></i></button>
                      <button class="border-0 btn-transition btn btn-outline-danger" onclick="changeStatus({{$task->id}},2)">
                 
                     <i class="fa fa-times"></i>
                    </button>

                    @endif
                  </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          
        </div>
      </perfect-scrollbar>
    </div>
    <div class="d-block text-left card-footer">
        {{-- <button class="btn btn-primary">تسک جدید</button></div> --}}
        <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
تسک جدید
</button>

<!-- Modal -->
<form class="login100-form validate-form" method="post" action="{{ route('addTask') }}" >
@csrf
@method('POST')
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">تسک جدید</h5>
      <button type="button" class="close" style="padding: 0px !important ; margin: 0px !important;" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <input type="text" name="title" class="form-control" placeholder="تسک جدید را وارد کنید" aria-describedby="button-addon1">
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">افزودن تسک</button>
    </div>
  </div>
</div>
</div>
</form>
  </div>
  @endauth
  @guest
  <div style="margin: 30px 10px;text-align: right">
    
    <h6>ابتدا وارد حساب کاربری خود شوید.</h6>
  </div>
  
  @endguest
</div>