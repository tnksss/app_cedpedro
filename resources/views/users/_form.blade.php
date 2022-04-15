<form class="user" action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                placeholder="First Name">
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Email Address">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" name="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                id="exampleRepeatPassword" placeholder="Repeat Password">
        </div>
    </div>
    
  
