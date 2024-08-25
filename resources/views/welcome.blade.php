<html dir="rtl" lang="ar">
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>خانه</title>
                                {{-- sweetalert2 --}}
                                <link rel="stylesheet" href="{{ asset('admin-assets/sweetalert/sweetalert2.css') }}">
                                <link id="style" href="{{asset("admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" />
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: left;
    background-color: #6200EA;
}

i {
    font-style: italic;
}

.container{
    margin-top:100px;
}

.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s;
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header {
    display: flex;
    align-items: center;
    border-bottom-width: 1px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: 0.625rem;
    height: 3.5rem;
    background-color: #fff;
}
.widget-subheading{
    color: #858a8e;
    font-size: 10px;
}
.card-header.card-header-tab .card-header-title {
    display: flex;
    align-items: center;
    white-space: nowrap;
}

.card-header .header-icon {
    font-size: 1.65rem;
    margin-right: 0.625rem;
}

.card-header.card-header-tab .card-header-title {
    display: flex;
    align-items: center;
    white-space: nowrap;
}

.btn-actions-pane-right {
    margin-left: auto;
    white-space: nowrap;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.scroll-area-sm {
    height: 288px;
    overflow-x: hidden;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.todo-indicator {
    position: absolute;
    width: 4px;
    height: 60%;
    border-radius: 0.3rem;
    left: 0.625rem;
    top: 20%;
    opacity: .6;
    transition: opacity .2s;
}

.bg-warning {
    background-color: #f7b924 !important;
}

.widget-content {
    padding: 1rem;
    flex-direction: row;
    align-items: center;
}

.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center;
}

.widget-content .widget-content-right.widget-content-actions {
    visibility: hidden;
    opacity: 0;
    transition: opacity .2s;
}

.widget-content .widget-content-right {
    margin-left: auto;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.btn {
    position: relative;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
}

.btn-outline-success {
    color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d;
}
.btn-primary {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8;
}
.btn { 
    position: relative;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
    outline: none !important;
}

.card-footer{
    background-color: #fff;
}</style>
                                </head>
  <body className='snippet-body'>
        <div style="text-align: right;margin: 20px">
          @auth
          <a class="btn btn-danger" href="/logout">خروج</a>
          @endauth 
          @guest
          <a class="btn btn-dark" href="/login">ورود</a>
          @endguest
        </div>
    <div class="row d-flex justify-content-center container" id="tasksList" style="margin:100px auto">
                             
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
    </div>

     
                               <script src="{{ asset('admin-assets/sweetalert/sweetalert2.min.js') }}"></script>

                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                              <script>                          
                                function changeStatus(id , status) {
                                  $.ajax({
                                    url : '/change-task-status/'+id+'/'+status ,
                                    type : "GET",
                                    success : function(response){
                                       document.getElementById('tasksList').innerHTML=response.html
                                    },
      
                                  });
                                }
                              </script>

@include('admin.alerts.sweetalert.error')

@include('admin.alerts.sweetalert.success')
@include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete','formId'=>'deleteTask'])


                                </body>


                        
                            </html>